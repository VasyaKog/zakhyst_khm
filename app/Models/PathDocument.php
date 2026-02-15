<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;
use App\Traits\InvalidatesCache;

class PathDocument extends Model
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

    public $translatable = ['name', 'description'];

    protected $fillable = [
        'name',
        'description',
        'file_path',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Scope to get only active documents ordered by sort_order
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('sort_order');
    }

    /**
     * Get the file extension (e.g. pdf, png, docx)
     */
    public function getFileExtension(): string
    {
        return strtolower(pathinfo($this->file_path, PATHINFO_EXTENSION));
    }

    /**
     * Get the full public URL for the file
     */
    public function getFileUrl(): string
    {
        return Storage::disk('public')->url($this->file_path);
    }
}
