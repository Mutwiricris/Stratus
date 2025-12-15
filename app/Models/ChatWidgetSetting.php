<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatWidgetSetting extends Model
{
    protected $fillable = [
        'setting_key',
        'setting_value',
    ];

    // Helper methods
    public static function get(string $key, $default = null)
    {
        $setting = static::where('setting_key', $key)->first();
        return $setting?->setting_value ?? $default;
    }

    public static function set(string $key, $value): void
    {
        static::updateOrCreate(
            ['setting_key' => $key],
            ['setting_value' => $value]
        );
    }
}
