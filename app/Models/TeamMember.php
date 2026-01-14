<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;

class TeamMember extends Model
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

    public $translatable = ['first_name', 'last_name', 'role'];

    protected $fillable = [
        'first_name',
        'last_name',
        'role',
        'photo',
        'is_partner',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_partner' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * Get full name
     */
    public function getFullNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * Scope to get only active main team members ordered by sort_order
     */
    public function scopeMainTeam($query)
    {
        return $query->where('is_active', true)
            ->where('is_partner', false)
            ->orderBy('sort_order');
    }

    /**
     * Scope to get only active partner team members ordered by sort_order
     */
    public function scopePartnerTeam($query)
    {
        return $query->where('is_active', true)
            ->where('is_partner', true)
            ->orderBy('sort_order');
    }
}
