<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'tagline',
        'description',
        'challenge',
        'solution',
        'features',
        'technologies',
        'metrics',
        'category',
        'client',
        'industry',
        'completed_at',
        'url',
        'app_store_url',
        'play_store_url',
        'featured_image',
        'gallery',
        'testimonial',
        'is_featured',
        'is_published',
        'order',
    ];

    protected $casts = [
        'features' => 'array',
        'technologies' => 'array',
        'metrics' => 'array',
        'gallery' => 'array',
        'testimonial' => 'array',
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'completed_at' => 'date',
    ];
}
