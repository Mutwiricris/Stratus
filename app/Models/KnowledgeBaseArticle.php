<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class KnowledgeBaseArticle extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'category',
        'keywords',
        'is_published',
        'views',
        'helpful_count',
        'not_helpful_count',
    ];

    protected $casts = [
        'keywords' => 'array',
        'is_published' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($article) {
            if (empty($article->slug)) {
                $article->slug = Str::slug($article->title);
            }
        });
    }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeByCategory($query, string $category)
    {
        return $query->where('category', $category);
    }

    // Helper methods
    public function incrementViews(): void
    {
        $this->increment('views');
    }

    public function markAsHelpful(): void
    {
        $this->increment('helpful_count');
    }

    public function markAsNotHelpful(): void
    {
        $this->increment('not_helpful_count');
    }

    public function getHelpfulnessRatio(): float
    {
        $total = $this->helpful_count + $this->not_helpful_count;
        return $total > 0 ? ($this->helpful_count / $total) * 100 : 0;
    }
}
