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

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'homepage']);