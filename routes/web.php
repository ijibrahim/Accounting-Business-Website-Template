<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AnalyticsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\FaqController;
use App\Models\Faq;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

Route::get('/', function () {
    $faqs = Schema::hasTable('faqs')
        ? Faq::query()->where('is_active', 1)->get()
        : collect();

    return view('index', compact('faqs'));
});
Route::get('/blogs', function () {
    return view('layouts.blog');
})->name('blogs');
Route::get('/blog-details', function () {
    return view('layouts.blog_details');
})->name('blog.details');
Route::get('/blogs/{slug}', [BlogPostController::class, 'show'])->name('blogs.show');
Route::get('/about', function () {
    return view('layouts.about');
})->name('about');
Route::get('/team', function () {
    return view('layouts.team');
})->name('team');
Route::get('/testimonials', function () {
    return view('layouts.testimonials');
})->name('testimonials');
Route::get('/community', function () {
    return view('layouts.community');
})->name('community');
Route::get('/consultants', function () {
    return view('layouts.consultants');
})->name('consultants');
Route::get('/referral', function () {
    return view('layouts.referral');
})->name('referral');
Route::get('/services', function () {
    return view('layouts.service');
})->name('services');
Route::get('/contacts', function () {
    return view('layouts.contact');
})->name('contacts');
Route::get('/payroll', function () {
    return view('layouts.payroll');
})->name('payroll');

Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->name('dashboard');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/settings', [DashboardController::class, 'setting'])->name('settings');
    Route::put('/settings/update', [DashboardController::class, 'update'])->name('settings.update');
    Route::get('/users', [DashboardController::class, 'users'])->name('users.index');
    Route::resource('about-us', AboutController::class);
    Route::resource('faqs', FaqController::class);

    Route::resource('blog-categories', BlogCategoryController::class);
    Route::resource('blog-posts', BlogPostController::class);
    Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics.index');
});
