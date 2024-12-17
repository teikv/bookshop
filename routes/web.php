<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Định nghĩa với HomeController và đặt tên route
Route::get('/', [HomeController::class, 'homepage'])->name('homepage');

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