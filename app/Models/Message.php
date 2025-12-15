<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    protected $fillable = [
        'conversation_id',
        'sender_type',
        'sender_id',
        'message',
        'attachments',
        'message_type',
        'is_read',
        'read_at',
        'is_internal',
    ];

    protected $casts = [
        'attachments' => 'array',
        'is_read' => 'boolean',
        'is_internal' => 'boolean',
        'read_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($message) {
            // Update conversation's last_message_at
            $message->conversation->update([
                'last_message_at' => $message->created_at,
            ]);

            // Set first_response_at if this is the first agent response
            if ($message->sender_type === 'agent' && !$message->conversation->first_response_at) {
                $message->conversation->update([
                    'first_response_at' => $message->created_at,
                ]);
            }

            // Broadcast message to WebSocket channel
            broadcast(new \App\Events\MessageSent($message))->toOthers();
        });
    }

    // Relationships
    public function conversation(): BelongsTo
    {
        return $this->belongsTo(Conversation::class);
    }

    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    // Scopes
    public function scopeFromCustomer($query)
    {
        return $query->where('sender_type', 'customer');
    }

    public function scopeFromAgent($query)
    {
        return $query->where('sender_type', 'agent');
    }

    public function scopeFromBot($query)
    {
        return $query->where('sender_type', 'bot');
    }

    public function scopeInternal($query)
    {
        return $query->where('is_internal', true);
    }

    public function scopePublic($query)
    {
        return $query->where('is_internal', false);
    }

    public function scopeUnread($query)
    {
        return $query->where('is_read', false);
    }

    // Helper methods
    public function markAsRead(): void
    {
        $this->update([
            'is_read' => true,
            'read_at' => now(),
        ]);
    }

    public function isFromCustomer(): bool
    {
        return $this->sender_type === 'customer';
    }

    public function isFromAgent(): bool
    {
        return $this->sender_type === 'agent';
    }

    public function isFromBot(): bool
    {
        return $this->sender_type === 'bot';
    }
}
