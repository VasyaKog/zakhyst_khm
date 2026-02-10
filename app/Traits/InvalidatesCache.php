<?php

namespace App\Traits;

use App\Services\CacheService;

/**
 * Automatically clears related cache when model is saved or deleted.
 * Add `use InvalidatesCache;` to any model that has cached data.
 */
trait InvalidatesCache
{
    public static function bootInvalidatesCache(): void
    {
        static::saved(function () {
            CacheService::clearForModel(static::class);
        });

        static::deleted(function () {
            CacheService::clearForModel(static::class);
        });
    }
}
