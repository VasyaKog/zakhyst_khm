<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        then: function () {
            // require base_path('routes/admin.php');
        }
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->web(append: [
            \App\Http\Middleware\HandleInertiaRequests::class,
            \Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets::class,
            \App\Http\Middleware\SetLocale::class,
        ]);

        $middleware->trustProxies(at: '*');

        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Handle 404 errors to ensure proper rendering with middleware context
        $exceptions->render(function (\Symfony\Component\HttpKernel\Exception\NotFoundHttpException $e, $request) {
            // Set locale from session for error pages
            $locale = session('locale', 'ua');
            if (in_array($locale, ['ua', 'en'])) {
                \Illuminate\Support\Facades\App::setLocale($locale);
            }

            return response()->view('errors.404', [], 404);
        });
    })->create();
