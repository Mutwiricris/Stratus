<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CallRequest extends Model
{
    protected $fillable = [
        'request_number',
        'name',
        'phone',
        'email',
        'company',
        'preferred_time',
        'timezone',
        'note',
        'status',
        'client_ip',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($request) {
            if (empty($request->request_number)) {
                $request->request_number = 'CALL-' . strtoupper(uniqid());
            }
        });
    }
}
