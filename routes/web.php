<?php

use App\Livewire\Home;
use App\Livewire\BookShow;
use App\Livewire\MyBooks;
use App\Livewire\Admin\Books as AdminBooks;
use App\Livewire\Admin\Categories as AdminCategories;
use App\Livewire\Admin\Dashboard as AdminDashboard;
use App\Livewire\User\Dashboard as UserDashboard;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', Home::class)->name('home');
Route::get('/book/{book}', BookShow::class)->name('book.show');

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    Route::view('profile', 'profile')->name('profile');
    
});

// Verified user routes (both admin and regular user)
Route::middleware(['auth'])->group(function () {
    // Admin routes
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        Route::get('/books', AdminBooks::class)->name('admin.dashboard');
        Route::get('/categories', AdminCategories::class)->name('admin.categories');
    });
    
    // Regular user routes
    Route::middleware(['role:user'])->group(function () {
        Route::get('/user/dashboard', UserDashboard::class)->name('user.dashboard');
        Route::get('/my-books', MyBooks::class)->name('my-books');
    });
    
    // Redirect after login based on role
    Route::get('/redirect', function () {
        $user = auth()->user();
        if ($user->role === User::ROLE_ADMIN) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('user.dashboard');
    })->name('redirect');
});

require __DIR__.'/auth.php';