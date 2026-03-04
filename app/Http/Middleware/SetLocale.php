<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get locale from cookie or session, default to Ukrainian
        $locale = $request->cookie('user_locale', session('locale', 'ua'));

        // Validate locale
        if (!in_array($locale, ['ua', 'en'])) {
            $locale = 'ua';
        }

        // Set application locale
        App::setLocale($locale);

        // Sync Carbon locale (Carbon uses ISO 639-1: 'uk' for Ukrainian, not 'ua')
        $carbonLocaleMap = ['ua' => 'uk', 'en' => 'en'];
        \Carbon\Carbon::setLocale($carbonLocaleMap[$locale] ?? 'uk');

        return $next($request);
    }
}
