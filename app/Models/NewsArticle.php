<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;

class NewsArticle extends Model
{
    use HasTranslations {
        getAttributeValue as traitGetAttributeValue;
    }

    public function getAttributeValue($key)
    {
        $value = $this->traitGetAttributeValue($key);

        if ($this->isTranslatableAttribute($key)) {
            if (empty($value) && app()->getLocale() !== config('app.fallback_locale')) {
                return $this->getTranslation($key, config('app.fallback_locale'));
            }
        }

        return $value;
    }

    public $translatable = ['title', 'summary', 'content'];

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'content',
        'image_url',
        'gallery_images',
        'author',
        'video_url',
        'published_at',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'published_at' => 'datetime',
    ];

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Scope for published news
     */
    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc');
    }
}
