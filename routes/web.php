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
Route::post('/contact', [PageController::class, 'contactSubmit'])->name('contact.submit');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/news/{newsArticle}', [PageController::class, 'newsPage'])->name('news.show');
Route::get('/indifferent', [PageController::class, 'indifferent'])->name('indifferent');
Route::get('/path', [PageController::class, 'path'])->name('path');
Route::get('/404', [PageController::class, 'notFound'])->name('404');

Route::get('/api/search', [\App\Http\Controllers\Web\SearchController::class, 'search'])->name('api.search');

// require __DIR__ . '/auth.php';