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
Route::get('/news-page', [PageController::class, 'newsPage'])->name('news.page');
Route::get('/indifferent', [PageController::class, 'indifferent'])->name('indifferent');

require __DIR__.'/auth.php';