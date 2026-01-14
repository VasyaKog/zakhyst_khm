<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;

class HeroBanner extends Model
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

    public $translatable = ['title', 'text', 'link_url'];

    protected $fillable = [
        'image_path',
        'link_url',
        'title',
        'text',
        'coded_slide_id',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Get all active banners (both coded and custom)
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('sort_order', 'asc');
    }

    /**
     * Get only coded slides (the 3 hardcoded ones)
     */
    public function scopeCodedSlides($query)
    {
        return $query->whereNotNull('coded_slide_id');
    }

    /**
     * Get only custom banners (photo + link)
     */
    public function scopeCustomBanners($query)
    {
        return $query->whereNull('coded_slide_id')->where('image_path', '!=', '');
    }

    /**
     * Check if this is a coded slide
     */
    public function isCodedSlide(): bool
    {
        return !empty($this->coded_slide_id);
    }

    /**
     * Get coded slide name for display
     */
    public function getCodedSlideNameAttribute(): ?string
    {
        $names = [
            'slide1' => 'Для кого ми (Grid)',
            'slide2' => 'Бізнес - ветеранам (Blue)',
            'slide3' => 'Меморіал',
        ];

        return $names[$this->coded_slide_id] ?? null;
    }
}
