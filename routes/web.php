<?php

use Illuminate\Support\Facades\Route;

// Ana sayfa
Route::get('/', function () {
    return view('home');
})->name('home');

// Odalar
Route::get('/rooms', function () {
    return view('rooms.index');
})->name('rooms.index');

// Restoran
Route::get('/restaurant', function () {
    return view('restaurant');
})->name('restaurant');

// Hakkımızda
Route::get('/about', function () {
    return view('about');
})->name('about');

// Blog
Route::get('/blog', function () {
    return view('blog.index');
})->name('blog.index');

// İletişim
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
