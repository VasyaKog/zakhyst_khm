<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;

class TimelineEvent extends Model
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

    public $translatable = ['description', 'date_display'];

    protected $fillable = [
        'year',
        'date_display',
        'description',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('sort_order', 'asc');
    }
}
