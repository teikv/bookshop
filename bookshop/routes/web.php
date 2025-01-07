<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BooklistController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use Illuminate\Support\Facades\Route;
use Laravel\Telescope\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\NewPasswordController;

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

Route::middleware(['throttle:60,1', 'rate.limit'])->group(function () {
    Route::get('/', [HomepageController::class, 'index'])
    ->name('homepage')
    ->middleware('cache.headers:public;max_age=600;etag');
    Route::get('/booklist', [BooklistController::class, 'index'])->name('booklist'); // Danh sách sách
    Route::get('/detail/{id}', [DetailController::class, 'show']); // Chi tiết sách
    Route::get('/booklist/categories/{id}', [BooklistController::class, 'filterByCategory'])->name('categories.filter'); // Lọc sách theo thể loại
    Route::get('/about', [AboutController::class, 'index']); // Trang giới thiệu
    Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
    Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');  
});
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});