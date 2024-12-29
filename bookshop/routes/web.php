<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BooklistController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;
use Laravel\Telescope\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomepageController::class, 'index'])->name('home'); // Trang chủ
Route::get('/booklist', [BooklistController::class, 'index'])->name('booklist'); // Danh sách sách
Route::get('/detail/{id}', [DetailController::class, 'show']);
Route::get('/booklist/categories/{id}', [BooklistController::class, 'filterByCategory'])->name('categories.filter');
Route::get('/about', [AboutController::class,'index']);
Route::get('booklist/search', [BooklistController::class, 'search'])->name('search');