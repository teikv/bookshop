<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Định nghĩa với HomeController và đặt tên route
Route::get('/', [HomeController::class, 'index'])->name('homepage');

// Các route khác
Route::get('/booklist', function () {
    return view('booklist');
})->name('booklist');

Route::get('/bookdetail', function () {
    return view('bookdetail');
})->name('bookdetail');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/payment', function () {
    return view('paymentdetail');
});

Route::get('/customer', function () {
    return view('customerdetail');
});

Route::get('/success', function () {
    return view('successdetail');
});

// Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard'); 

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

