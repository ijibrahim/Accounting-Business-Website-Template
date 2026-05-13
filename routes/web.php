<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('/');
Route::get('/blogs', function () {
    return view('layouts.blog');
})->name('blogs');
Route::get('/about', function () {
    return view('layouts.about');
})->name('about');
Route::get('/services', function () {
    return view('layouts.service');
})->name('services');
Route::get('/contacts', function () {
    return view('layouts.contact');
})->name('contacts');
Route::get('/payroll', function () {
    return view('layouts.payroll');
})->name('payroll');
Route::get('/referral', function () {
    return view('layouts.referral');
})->name('referral');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});