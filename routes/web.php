<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::view('dashboard', 'dashboard')
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
Route::view('services', 'services')->name('services');

require __DIR__ . '/auth.php';
