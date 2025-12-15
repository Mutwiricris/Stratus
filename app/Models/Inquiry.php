<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inquiry extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'inquiry_number',
        'type',
        'name',
        'email',
        'phone',
        'company',
        'subject',
        'message',
        'status',
        'priority',
        'preferred_call_time',
        'timezone',
        'source',
        'client_ip',
        'user_agent',
        'referrer',
        'assigned_to',
        'contacted_at',
        'notes',
    ];

    protected $casts = [
        'preferred_call_time' => 'datetime',
        'contacted_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($inquiry) {
            if (empty($inquiry->inquiry_number)) {
                $inquiry->inquiry_number = 'INQ-' . strtoupper(uniqid());
            }
        });
    }

    /**
     * Relationship: Inquiry assigned to a user
     */
    public function assignedTo(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    /**
     * Scope: Filter by status
     */
    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    /**
     * Scope: Filter by type
     */
    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }

    /**
     * Scope: Filter by priority
     */
    public function scopePriority($query, $priority)
    {
        return $query->where('priority', $priority);
    }

    /**
     * Scope: New inquiries
     */
    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }

    /**
     * Scope: Unassigned inquiries
     */
    public function scopeUnassigned($query)
    {
        return $query->whereNull('assigned_to');
    }

    /**
     * Mark inquiry as contacted
     */
    public function markAsContacted()
    {
        $this->update([
            'status' => 'contacted',
            'contacted_at' => now(),
        ]);
    }

    /**
     * Assign inquiry to a user
     */
    public function assignTo($userId)
    {
        $this->update([
            'assigned_to' => $userId,
        ]);
    }

    /**
     * Get formatted inquiry type
     */
    public function getFormattedTypeAttribute(): string
    {
        return ucfirst($this->type);
    }

    /**
     * Get formatted status
     */
    public function getFormattedStatusAttribute(): string
    {
        return ucfirst($this->status);
    }

    /**
     * Get formatted priority
     */
    public function getFormattedPriorityAttribute(): string
    {
        return ucfirst($this->priority);
    }

    /**
     * Check if inquiry is new
     */
    public function isNew(): bool
    {
        return $this->status === 'new';
    }

    /**
     * Check if inquiry is assigned
     */
    public function isAssigned(): bool
    {
        return !is_null($this->assigned_to);
    }
}
