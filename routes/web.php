<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;

Route::get('/', [CobaController::class, 'index'])->name('home');
Route::get('/about', [CobaController::class, 'about'])->name('about');
Route::get('/blog', [CobaController::class, 'blog'])->name('posts');
Route::get('/post/{slug}', [CobaController::class, 'show'])->name('post.show');