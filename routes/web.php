<?php

use App\Http\Controllers\Admin\AdminSubscriptionController;
use App\Http\Controllers\Admin\AdminTransactionController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\CardController;
use App\Http\Controllers\User\DasboardController;
use App\Http\Controllers\User\PocketController;
use App\Http\Controllers\User\SubscriptionController;
use App\Http\Controllers\User\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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
Route::get('/admin/subscription', [AdminSubscriptionController::class, 'index'])->name('admin.subscription')->middleware(['auth', 'verified']);

Route::get('/admin/subscription/{subscription}', [AdminSubscriptionController::class, 'show'])->name('admin.subscription.show')->middleware(['auth', 'verified']);

//disable subscription
Route::get('/admin/subscription/disable/{subscription}', [AdminSubscriptionController::class, 'disable'])->name('admin.subscription.disable')->middleware(['auth', 'verified']);

//enable subscription
Route::get('/admin/subscription/enable/{subscription}', [AdminSubscriptionController::class, 'enable'])->name('admin.subscription.enable')->middleware(['auth', 'verified']);


// Users Routes
Route::get('/dashboard', [DasboardController::class, 'index'])->name('users.home')->middleware(['auth', 'verified']);
Route::get('/subscription', [SubscriptionController::class, 'subscriptions'])->name('users.subscriptions')->middleware(['auth', 'verified']);
Route::resource('/card', CardController::class)->middleware(['auth', 'verified']);

Route::resource('/pocket', PocketController::class)->middleware(['auth', 'verified']);

Route::resource('/transaction', TransactionController::class)->middleware(['auth', 'verified']);

// Checkout routes
Route::get('/checkout/plan/{plan}', [CheckoutController::class, 'checkout'])->name('plan.checkout')->middleware(['auth', 'verified']);
Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('plan.checkout.succes')->middleware(['auth', 'verified']);
Route::get('/checkout/cancel', [CheckoutController::class, 'cancel'])->name('plan.checkout.cancel')->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';
