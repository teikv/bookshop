<?php

use Illuminate\Support\Facades\Route;


// Route cho trang homepage
Route::get('/', function () {
    return view('homepage');
});

// Route cho booklist
Route::get('/booklist', function () {
    return view('booklist');
})->name('booklist');

// Route cho book detail
Route::get('/bookdetail', function () {
    return view('bookdetail');
})->name('bookdetail');

// Route cho trang About Us
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


use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'homepage'])->name('homepage');