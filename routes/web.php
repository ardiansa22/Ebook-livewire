<?php
use App\Livewire\Home;
use App\Livewire\BookShow;
use App\Livewire\MyBooks;

// admin
use App\Livewire\Admin\Books as AdminBooks;
use App\Livewire\Admin\Categories as AdminCategories;
use Illuminate\Support\Facades\Route;



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::middleware(['auth'])->prefix('admin')->group(function () {
        Route::get('/books', AdminBooks::class)->name('admin.books');
        Route::get('/categories', AdminCategories::class)->name('admin.categories');
    });
    Route::get('/', Home::class)->name('home');
    Route::get('/book/{book}', BookShow::class)->name('book.show');
    Route::get('/my-books', MyBooks::class)->middleware('auth')->name('my-books');
require __DIR__.'/auth.php';
