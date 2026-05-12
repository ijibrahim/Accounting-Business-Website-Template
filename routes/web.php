<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/blogs', function () {
    return view('layouts.blog');
})->name('blogs');
Route::get('/about', function () {
    return view('layouts.about');
})->name('about');
Route::get('/services', function () {
    return view('layouts.service');
})->name('services');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});