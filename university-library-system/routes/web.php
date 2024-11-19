<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\BorrowingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\UserBookController;
use App\Http\Controllers\User\UserCategoryController;
use App\Http\Controllers\User\UserContactController;
use App\Http\Controllers\Admin\AdminController;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



/****************** Superadmin Routes: Manage admins ******************/
Route::prefix('admin')->name('admin.')->middleware(['auth', 'superadmin'])->group(function () {
    // Manage Admins
    Route::get('/manage-admins', [AdminController::class, 'index'])->name('manage.admins');
    Route::get('/manage-admins/create', [AdminController::class, 'create'])->name('manage.admins.create');
    Route::post('/manage-admins', [AdminController::class, 'store'])->name('manage.admins.store');
    Route::delete('/manage-admins/{id}', [AdminController::class, 'destroy'])->name('manage.admins.destroy');
});


// Admin Profile route
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin.role'])->group(function () {
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::put('/profile', [AdminController::class, 'updateProfile'])->name('profile.update');
});


/****************** Admin routes start ******************/
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin.role'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin.role'])->group(function () {
    Route::resource('users', UserController::class);
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin.role'])->group(function () {
    Route::resource('categories', CategoryController::class);
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin.role'])->group(function () {
    Route::resource('books', BookController::class);
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin.role'])->group(function () {
    Route::resource('borrowings', BorrowingController::class);
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin.role'])->group(function () {
    Route::resource('contacts', ContactController::class)->only(['index', 'show', 'destroy']);
});
/****************** Admin routes end ******************/


/****************** User routes start ******************/
Route::get('/contact', [UserContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [UserContactController::class, 'store'])->name('contact.store');


Route::get('/about', function () {
    return view('user/about');
});

Route::prefix('user')->name('user.')->group(function () {
    Route::get('/categories', [UserCategoryController::class, 'index'])->name('categories');
});


Route::get('/book/{id}', [UserBookController::class, 'show'])->name('user.book.show');

/* student profile */

Route::middleware(['auth', 'student'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});
/****************** User routes end ******************/
