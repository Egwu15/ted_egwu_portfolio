<?php

use App\Livewire\Blog;
use App\Livewire\BlogSingle;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome')->name('home');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
Route::view('services', 'services')->name('services');
Route::get('blog',  Blog::class)->name('blog');
Route::get('blog/{id}', BlogSingle::class)->name('single-post');

// require __DIR__ . '/auth.php';
