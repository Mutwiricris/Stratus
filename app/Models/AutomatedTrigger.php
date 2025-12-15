<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutomatedTrigger extends Model
{
    protected $fillable = [
        'name',
        'trigger_type',
        'conditions',
        'message',
        'is_active',
        'priority',
    ];

    protected $casts = [
        'conditions' => 'array',
        'is_active' => 'boolean',
    ];

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('priority', 'desc');
    }
}
