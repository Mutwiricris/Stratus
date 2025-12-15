<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = [
        'message_number',
        'name',
        'email',
        'phone',
        'company',
        'subject',
        'message',
        'status',
        'client_ip',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($message) {
            if (empty($message->message_number)) {
                $message->message_number = 'MSG-' . strtoupper(uniqid());
            }
        });
    }
}
