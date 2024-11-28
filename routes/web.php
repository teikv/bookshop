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
<<<<<<< HEAD

Route::get('/about', function () {
    return view('about');
});

=======
>>>>>>> 451ede5e9e93c0c92096168f15b42e6e81c04f8e
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'homepage']);