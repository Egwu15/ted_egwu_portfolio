<?php

use App\Livewire\Blog;
use App\Livewire\BlogSingle;
use Illuminate\Support\Facades\Route;

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

Route::view('/', 'welcome')->name('home');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
Route::view('services', 'services')->name('services');
Route::get('blog',  Blog::class)->name('blog');
Route::get('blog/{id}', BlogSingle::class)->name('single-post');



Route::get('/install-filament', function () {
    // Security checks should be here

    $process = new Process(['composer', 'require', 'filament/filament']);
    $process->setWorkingDirectory(base_path());
    try {
        $process->mustRun();

        echo 'Filament installed successfully';
    } catch (ProcessFailedException $exception) {
        echo 'Filament installation failed: ' . $exception->getMessage();
    }
}); 
// require __DIR__ . '/auth.php';
