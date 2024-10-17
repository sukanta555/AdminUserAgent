<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

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

// Public route
Route::get('/', function () {
    return view('welcome');
});

// Routes for guest users
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
});

// Routes for authenticated users
Route::middleware('auth')->group(function () {
    // Shared dashboard route for all authenticated users
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Admin-only routes
    Route::middleware('admin')->group(function () {
        // Product management routes for admins only
        Route::controller(ProductController::class)->prefix('products')->group(function () {
            Route::get('create', 'create')->name('products.create');
            Route::post('store', 'store')->name('products.store');
            Route::get('edit/{id}', 'edit')->name('products.edit');
            Route::put('edit/{id}', 'update')->name('products.update');
            Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
        });
    });

    // Common product viewing routes for all authenticated users
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('show/{id}', 'show')->name('products.show');
    });

    // Profile route for authenticated users
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');

    // Logout route for authenticated users
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
