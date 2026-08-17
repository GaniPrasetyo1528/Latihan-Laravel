<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Home';
return view('pages.home', compact('title'));
})->name('home');

Route::get('/about', function () {
    $title = 'About';
    $data = ["name" => "Gani Prasetyo", 
                "email" => "ganiprasetyo@example.com"];
    return view('pages.about', compact('title', 'data'));
})->name('about');

Route::get('/blog', function () {
    $title = 'Blog';
    return view('pages.posts', compact('title'));
})->name('blog');