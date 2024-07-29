<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/posts')->name('posts.')->group(function () {
    Route::get('/create', [PostController::class, 'create'])
        ->name('create');

    Route::post('/store', [PostController::class, 'store'])
        ->name('store');

    Route::post('/{post}', [PostController::class, 'store'])
        ->name('show');

    Route::post('/{post}/edit', [PostController::class, 'edit'])
        ->name('edit');

    Route::put('/{post}/update', [PostController::class, 'update'])
        ->name('update');

    Route::delete('/{post}/delete', [PostController::class, 'destroy'])
        ->name('delete');
});

require __DIR__ . '/auth.php';
