<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Routes Landing Page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Routes Menu Pages (Landing)
Route::get('/feature', [HomeController::class, 'feature'])->name('feature');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');

// Routes Admin Page
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/calendar', [AdminController::class, 'calendar'])->name('calendar');
    Route::get('/form-elements', [AdminController::class, 'formElements'])->name('form-elements');
    Route::get('/table-plugins', [AdminController::class, 'tablePlugins'])->name('table-plugins');
    Route::get('/ui-modal', [AdminController::class, 'uiModal'])->name('ui-modal');
    Route::get('/login', [AdminController::class, 'login'])->name('login');
});