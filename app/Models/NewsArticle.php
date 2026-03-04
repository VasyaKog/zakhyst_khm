<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;
use App\Traits\InvalidatesCache;

class NewsArticle extends Model
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

    public $translatable = ['title', 'summary', 'content'];

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'content',
        'image_url',
        'gallery_images',
        'gallery_position',
        'inline_photo_position',
        'author',
        'video_url',
        'video_path',
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
     * Generate a URL-friendly slug from Ukrainian (or English) text.
     */
    public static function generateSlug(string $title): string
    {
        $map = [
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'h',
            'ґ' => 'g',
            'д' => 'd',
            'е' => 'e',
            'є' => 'ye',
            'ж' => 'zh',
            'з' => 'z',
            'и' => 'y',
            'і' => 'i',
            'ї' => 'yi',
            'й' => 'y',
            'к' => 'k',
            'л' => 'l',
            'м' => 'm',
            'н' => 'n',
            'о' => 'o',
            'п' => 'p',
            'р' => 'r',
            'с' => 's',
            'т' => 't',
            'у' => 'u',
            'ф' => 'f',
            'х' => 'kh',
            'ц' => 'ts',
            'ч' => 'ch',
            'ш' => 'sh',
            'щ' => 'shch',
            'ь' => '',
            'ю' => 'yu',
            'я' => 'ya',
            'ъ' => '',
            '\'' => '',
            'А' => 'A',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'H',
            'Ґ' => 'G',
            'Д' => 'D',
            'Е' => 'E',
            'Є' => 'Ye',
            'Ж' => 'Zh',
            'З' => 'Z',
            'И' => 'Y',
            'І' => 'I',
            'Ї' => 'Yi',
            'Й' => 'Y',
            'К' => 'K',
            'Л' => 'L',
            'М' => 'M',
            'Н' => 'N',
            'О' => 'O',
            'П' => 'P',
            'Р' => 'R',
            'С' => 'S',
            'Т' => 'T',
            'У' => 'U',
            'Ф' => 'F',
            'Х' => 'Kh',
            'Ц' => 'Ts',
            'Ч' => 'Ch',
            'Ш' => 'Sh',
            'Щ' => 'Shch',
            'Ь' => '',
            'Ю' => 'Yu',
            'Я' => 'Ya',
            'Ъ' => '',
        ];

        $transliterated = strtr($title, $map);

        return Str::slug($transliterated);
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
