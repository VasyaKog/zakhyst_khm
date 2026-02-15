<?php

namespace App\Services;

use App\Models\HeroBanner;
use App\Models\NewsArticle;
use App\Models\Partner;
use App\Models\PathDocument;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\TimelineEvent;
use Illuminate\Support\Facades\Cache;

class CacheService
{
    /**
     * Map of model classes to their cache key prefixes.
     */
    protected static array $cacheMap = [
        HeroBanner::class => ['home_data'],
        Service::class => ['home_data', 'services_list'],
        NewsArticle::class => ['home_data'],
        TeamMember::class => ['home_data', 'team_data'],
        Partner::class => ['home_data'],
        TimelineEvent::class => ['timeline_events'],
        PathDocument::class => ['path_documents'],
    ];

    protected static array $locales = ['uk', 'en'];

    /**
     * Clear all cache keys associated with a given model.
     */
    public static function clearForModel(string $modelClass): void
    {
        $prefixes = static::$cacheMap[$modelClass] ?? [];

        foreach ($prefixes as $prefix) {
            foreach (static::$locales as $locale) {
                Cache::forget("{$prefix}_{$locale}");
            }
        }

        // For news articles, also clear related news cache
        if ($modelClass === NewsArticle::class) {
            static::clearRelatedNewsCache();
        }
    }

    /**
     * Clear all related_news_* cache keys.
     */
    protected static function clearRelatedNewsCache(): void
    {
        $ids = NewsArticle::pluck('id');

        foreach ($ids as $id) {
            foreach (static::$locales as $locale) {
                Cache::forget("related_news_{$id}_{$locale}");
            }
        }
    }

    /**
     * Clear all site cache (useful for deployments).
     */
    public static function clearAll(): void
    {
        foreach (static::$cacheMap as $modelClass => $prefixes) {
            static::clearForModel($modelClass);
        }

        static::clearRelatedNewsCache();
    }
}
