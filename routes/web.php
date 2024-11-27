<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('homepage');
});

Route::get('/booklist', function () {
    return view('booklist');
});
Route::get('/bookdetail', function () {
    return view('bookdetail');
});
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

Route::get('/', [HomeController::class, 'homepage']);