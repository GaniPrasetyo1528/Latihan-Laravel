<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Home';
return view('home', compact('title'));
})->name('home');

Route::get('/about', function () {
    $title = 'About';
    $data = ["name" => "Gani Prasetyo", 
                "email" => "ganiprasetyo@example.com"];
    return view('about', compact('title', 'data'));
})->name('about');

Route::get('/blog', function () {
    $title = 'Blog';
    return view('blog', compact('title'));
})->name('blog');