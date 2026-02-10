<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;
use App\Traits\InvalidatesCache;

class HeroBanner extends Model
{
    use HasTranslations {
        getAttributeValue as traitGetAttributeValue;
    }
    use InvalidatesCache;

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
        'image_path_mobile',
        'image_path_en',
        'image_path_mobile_en',
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
     * Get desktop image for current locale with fallback
     * - English: returns image_path_en, or null if not available (banner hidden)
     * - Ukrainian: returns image_path
     */
    public function getDesktopImage(): ?string
    {
        if (app()->getLocale() === 'en') {
            return $this->image_path_en;
        }
        return $this->image_path;
    }

    /**
     * Get mobile image for current locale with fallback
     * - English: returns image_path_mobile_en, or image_path_en, or null
     * - Ukrainian: returns image_path_mobile, or image_path
     */
    public function getMobileImage(): ?string
    {
        if (app()->getLocale() === 'en') {
            return $this->image_path_mobile_en ?? $this->image_path_en;
        }
        return $this->image_path_mobile ?? $this->image_path;
    }

    /**
     * Check if banner should be visible in current locale
     * Custom banners require English desktop image to show in English locale
     */
    public function isVisibleInCurrentLocale(): bool
    {
        if ($this->isCodedSlide()) {
            return true; // Coded slides are always visible (they have hardcoded translations)
        }

        if (app()->getLocale() === 'en') {
            return !empty($this->image_path_en);
        }

        return !empty($this->image_path);
    }

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
