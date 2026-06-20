<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\BlogController;

Route::get('/', [PageController::class, 'index'])->name ('welcome');

Route::get('/questions/{question}', [QuestionController::class, 'show'])->name('questions.show');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blog.show');

#Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
