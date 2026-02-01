<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\PageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'contactSubmit'])
    ->middleware('throttle:contact-form')
    ->name('contact.submit');

Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/news/{newsArticle}', [PageController::class, 'newsPage'])->name('news.show');
Route::get('/indifferent', [PageController::class, 'indifferent'])->name('indifferent');
Route::get('/path', [PageController::class, 'path'])->name('path');
Route::get('/404', [PageController::class, 'notFound'])->name('404');

Route::get('/api/search', [\App\Http\Controllers\Web\SearchController::class, 'search'])->name('api.search');

// Language Switcher
Route::get('/lang/{locale}', function (string $locale) {
    if (in_array($locale, ['ua', 'en'])) {
        session(['locale' => $locale]);
        \Illuminate\Support\Facades\Cookie::queue('user_locale', $locale, 60 * 24 * 365); // 1 year
    }

    // Get the previous URL
    $previousUrl = url()->previous();
    $previousPath = parse_url($previousUrl, PHP_URL_PATH) ?? '/';

    // Check if the previous URL was a valid route (not a 404)
    // If we came from an invalid URL, redirect to home instead
    try {
        $route = app('router')->getRoutes()->match(
            \Illuminate\Http\Request::create($previousPath)
        );
        return redirect()->back();
    } catch (\Symfony\Component\HttpKernel\Exception\NotFoundHttpException $e) {
        // Previous page was a 404, redirect to home
        return redirect()->route('home');
    }
})->middleware('throttle:language-switch')->name('lang.switch');

// Sitemap
Route::get('/sitemap.xml', function () {
    $news = \App\Models\NewsArticle::published()->get();

    return response()->view('sitemap', [
        'news' => $news,
    ])->header('Content-Type', 'text/xml');
});

// require __DIR__ . '/auth.php';