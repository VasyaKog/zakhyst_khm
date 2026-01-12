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
        // Get locale from session, default to Ukrainian
        $locale = session('locale', 'ua');

        // Validate locale
        if (!in_array($locale, ['ua', 'en'])) {
            $locale = 'ua';
        }

        // Set application locale
        App::setLocale($locale);

        return $next($request);
    }
}
