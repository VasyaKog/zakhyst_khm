<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\PageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');


require __DIR__.'/auth.php';
