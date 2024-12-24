<?php

use App\Http\Controllers\Admin\AdminSubscriptionController;
use App\Http\Controllers\Admin\AdminTransactionController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\DasboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes
Route::get('/admin/home', [HomeController::class, 'index'])->name('admin.home')->middleware(['auth', 'verified']);
Route::resource('/admin/plan', PlanController::class)->middleware(['auth', 'verified']);
Route::get('/admin/users', [AdminUserController::class, 'index'])->name('admin.user')->middleware(['auth', 'verified']);
Route::get('/admin/transaction', [AdminTransactionController::class, 'index'])->name('admin.transaction')->middleware(['auth', 'verified']);
Route::get('/admin/subscription', [AdminSubscriptionController::class, 'index'])->name('admin.subscription')
    ->middleware(['auth', 'verified']);


//Users Routes
Route::get('/dashboard', [DasboardController::class, 'index'])->name('users.home')->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';
