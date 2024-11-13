<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\BorrowingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/', function () {
    return view('user/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/landing', function () {
    return view('user/home');
});


Route::get('/admin', function () {
    return view('admin/index');
});



Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', UserController::class);
});



Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::resource('categories', CategoryController::class);
});


Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::resource('books', BookController::class);
});


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('borrowings', BorrowingController::class);
});


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('contacts', ContactController::class)->only(['index', 'show', 'destroy']);
});


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
