<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BusinessHour extends Model
{
    protected $fillable = [
        'department_id',
        'day_of_week',
        'open_time',
        'close_time',
        'is_closed',
    ];

    protected $casts = [
        'is_closed' => 'boolean',
        'open_time' => 'datetime:H:i',
        'close_time' => 'datetime:H:i',
    ];

    // Relationships
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    // Helper methods
    public static function isCurrentlyOpen(?int $departmentId = null): bool
    {
        $dayOfWeek = strtolower(now()->format('l'));
        $currentTime = now()->format('H:i');

        $query = static::where('day_of_week', $dayOfWeek)
            ->where('is_closed', false);

        if ($departmentId) {
            $query->where('department_id', $departmentId);
        }

        $businessHour = $query->first();

        if (!$businessHour) {
            return false;
        }

        return $currentTime >= $businessHour->open_time && $currentTime <= $businessHour->close_time;
    }
}
