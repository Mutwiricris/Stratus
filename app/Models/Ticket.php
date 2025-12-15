<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    protected $fillable = [
        'ticket_number',
        'conversation_id',
        'type',
        'sla_deadline',
        'sla_breached',
    ];

    protected $casts = [
        'sla_deadline' => 'datetime',
        'sla_breached' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($ticket) {
            if (empty($ticket->ticket_number)) {
                $year = date('Y');
                $lastTicket = static::whereYear('created_at', $year)
                    ->orderBy('id', 'desc')
                    ->first();

                $number = $lastTicket ? intval(substr($lastTicket->ticket_number, -4)) + 1 : 1;
                $ticket->ticket_number = 'TICK-' . $year . '-' . str_pad($number, 4, '0', STR_PAD_LEFT);
            }

            // Set SLA deadline based on priority (24 hours for normal, 4 hours for high/urgent)
            if (empty($ticket->sla_deadline) && $ticket->conversation) {
                $hours = in_array($ticket->conversation->priority, ['high', 'urgent']) ? 4 : 24;
                $ticket->sla_deadline = now()->addHours($hours);
            }
        });
    }

    // Relationships
    public function conversation(): BelongsTo
    {
        return $this->belongsTo(Conversation::class);
    }

    // Helper methods
    public function checkSla(): void
    {
        if ($this->sla_deadline && now()->gt($this->sla_deadline) && $this->conversation->status !== 'resolved') {
            $this->update(['sla_breached' => true]);
        }
    }

    public function isSlaBreached(): bool
    {
        return $this->sla_breached || ($this->sla_deadline && now()->gt($this->sla_deadline) && $this->conversation->status !== 'resolved');
    }
}
