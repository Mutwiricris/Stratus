<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SatisfactionRating extends Model
{
    protected $fillable = [
        'conversation_id',
        'agent_id',
        'rating',
        'feedback',
        'issue_resolved',
        'nps_score',
    ];

    protected $casts = [
        'issue_resolved' => 'boolean',
    ];

    // Relationships
    public function conversation(): BelongsTo
    {
        return $this->belongsTo(Conversation::class);
    }

    public function agent(): BelongsTo
    {
        return $this->belongsTo(User::class, 'agent_id');
    }

    // Helper methods
    public function isPromoter(): bool
    {
        return $this->nps_score >= 9;
    }

    public function isPassive(): bool
    {
        return $this->nps_score >= 7 && $this->nps_score <= 8;
    }

    public function isDetractor(): bool
    {
        return $this->nps_score <= 6;
    }
}
