<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\InvalidatesCache;

class Partner extends Model
{
    use InvalidatesCache;
    protected $fillable = [
        'name',
        'logo_path',
        'url',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('sort_order');
    }
}
