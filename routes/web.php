<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Middleware\Admin;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminBookingPController;
use App\Http\Controllers\Admin\AdminBookingSController;
use App\Http\Controllers\Admin\AdminPackagePController;
use App\Http\Controllers\Admin\AdminPackageSController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminInventoryController;
use App\Http\Controllers\Admin\AdminAvailableController;
use App\Http\Controllers\Client\ClientStudioController;
use App\Http\Controllers\Client\ClientPhotographerController;
use App\Http\Controllers\Client\ClientBookingController;
use App\Http\Controllers\ProfileController;

// CLIENT SIDE
Route::get('/', [HomeController::class, 'index'])->name('beranda');

Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/studio/{id}', [ClientStudioController::class, 'show'])->name('studio.show');
Route::get('/photographer', [ClientPhotographerController::class, 'index'])->name('photographer');
Route::get('/photographer/{id}', [ClientPhotographerController::class, 'show'])->name('photographer.show');
Route::get('/photographer/{id}/detail', [ClientPhotographerController::class, 'detail'])->name('photographer.detail');

Auth::routes([
  'reset' => false,
  'verify' => false,
  'confirm' => false,
  'logout' => false
]);

Route::post('/register', [RegisterController::class, 'create'])->name('regist');

Route::middleware(['auth'])->group(function () {

  Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
  Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

  Route::get('/studio/{id}/order', [ClientStudioController::class, 'order'])->name('studio.order');
  Route::post('/studio/order', [ClientStudioController::class, 'checkout'])->name('studio.checkout');
  Route::get('/photographer/{id}/order', [ClientPhotographerController::class, 'order'])->name('photographer.order');
  Route::post('/photographer/order', [ClientPhotographerController::class, 'checkout'])->name('photographer.checkout');
  Route::get('/booking', [ClientBookingController::class, 'index'])->name('booking');
  Route::get('/booking/{id}', [ClientBookingController::class, 'show'])->name('booking.show');

  // CMS ADMINITRASTOR
  Route::middleware([Admin::class])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('beranda');
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // CRUD USER
    Route::get('/user', [AdminUserController::class, 'index'])->name('user.index');
    Route::post('/user', [AdminUserController::class, 'store'])->name('user.store');
    Route::put('/user/{id}/update', [AdminUserController::class, 'update'])->name('user.update');
    Route::delete('/user/{id}/destroy', [AdminUserController::class, 'destroy'])->name('user.destroy');

    // CRUD BOOKING P
    Route::get('/booking-photographer', [AdminBookingPController::class, 'index'])->name('booking_p.index');
    Route::post('/booking-photographer', [AdminBookingPController::class, 'store'])->name('booking_p.store');
    Route::get('/booking-photographer/{id}', [AdminBookingPController::class, 'edit'])->name('booking_p.edit');
    Route::put('/booking-photographer/{id}/update', [AdminBookingPController::class, 'update'])->name('booking_p.update');
    Route::put('/booking-photographer/{id}/payment', [AdminBookingPController::class, 'payment'])->name('booking_p.payment');
    Route::delete('/booking-photographer/{id}/destroy', [AdminBookingPController::class, 'destroy'])->name('booking_p.destroy');

    // CRUD BOOKING S
    Route::get('/booking-studio', [AdminBookingSController::class, 'index'])->name('booking_s.index');
    Route::post('/booking-studio', [AdminBookingSController::class, 'store'])->name('booking_s.store');
    Route::get('/booking-studio/{id}', [AdminBookingSController::class, 'edit'])->name('booking_s.edit');
    Route::put('/booking-studio/{id}/update', [AdminBookingSController::class, 'update'])->name('booking_s.update');
    Route::put('/booking-studio/{id}/payment', [AdminBookingSController::class, 'payment'])->name('booking_s.payment');
    Route::delete('/booking-studio/{id}/destroy', [AdminBookingSController::class, 'destroy'])->name('booking_s.destroy');

    // CRUD PACKAGE P
    Route::get('/package-photographer', [AdminPackagePController::class, 'index'])->name('package_p.index');
    Route::post('/package-photographer', [AdminPackagePController::class, 'store'])->name('package_p.store');
    Route::put('/package-photographer/{id}/update', [AdminPackagePController::class, 'update'])->name('package_p.update');
    Route::delete('/package-photographer/{id}/destroy', [AdminPackagePController::class, 'destroy'])->name('package_p.destroy');

    // CRUD PACKAGE S
    Route::get('/package-studio', [AdminPackageSController::class, 'index'])->name('package_s.index');
    Route::post('/package-studio', [AdminPackageSController::class, 'store'])->name('package_s.store');
    Route::put('/package-studio/{id}/update', [AdminPackageSController::class, 'update'])->name('package_s.update');
    Route::delete('/package-studio/{id}/destroy', [AdminPackageSController::class, 'destroy'])->name('package_s.destroy');

    // CRUD CATEGORY
    Route::get('/category', [AdminCategoryController::class, 'index'])->name('category.index');
    Route::post('/category', [AdminCategoryController::class, 'store'])->name('category.store');
    Route::put('/category/{id}/update', [AdminCategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}/destroy', [AdminCategoryController::class, 'destroy'])->name('category.destroy');

    // CRUD INVENTORY
    Route::get('/inventory', [AdminInventoryController::class, 'index'])->name('inventory.index');
    Route::post('/inventory', [AdminInventoryController::class, 'store'])->name('inventory.store');
    Route::put('/inventory/{id}/update', [AdminInventoryController::class, 'update'])->name('inventory.update');
    Route::delete('/inventory/{id}/destroy', [AdminInventoryController::class, 'destroy'])->name('inventory.destroy');

    // CRUD AVAILABLE
    Route::get('/available', [AdminAvailableController::class, 'index'])->name('available.index');
    Route::put('/available/{id}/update', [AdminAvailableController::class, 'update'])->name('available.update');
  });
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/{id}', [HomeController::class, 'show'])->name('beranda.show');
