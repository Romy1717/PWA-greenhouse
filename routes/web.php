<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TemperatureController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoriesController;

Route::middleware(['auth'])->group(function() {
    Route::get('/business', [HomeController::class, 'business'])->name('business');
});

Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::delete('/categories/{categories}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');


Route::get('/subcategories', [SubcategoriesController::class, 'index'])->name('subcategories.index');
Route::post('/subcategories', [SubcategoriesController::class, 'store'])->name('subcategories.store');
Route::put('/subcategories/{id}', [SubcategoriesController::class, 'update'])->name('subcategories.update'); 
Route::delete('/subcategories/{id}', [SubcategoriesController::class, 'destroy'])->name('subcategories.destroy');

Route::get('greenhouse', [TemperatureController::class, 'index'])->name('greenhouse');


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/transactions', [HomeController::class, 'transactions'])->name('transactions');
Route::get('/orders', [HomeController::class, 'orders'])->name('orders');
Route::get('/users', [HomeController::class, 'users'])->name('users');
Route::get('/dealers', [HomeController::class, 'dealers'])->name('dealers');
Route::get('/mapdealers', [HomeController::class, 'mapdealers'])->name('mapdealers');
Route::get('/certificates', [HomeController::class, 'certificates'])->name('certificates');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/notifications', [HomeController::class, 'notifications'])->name('notifications');
Route::get('/sensors', [HomeController::class, 'sensors'])->name('sensors');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/listgreenhouse', [HomeController::class, 'listgreenhouse'])->name('listgreenhouse');
Route::get('/creategreenhouse', [HomeController::class, 'creategreenhouse'])->name('creategreenhouse');


Route::get('/offline', [HomeController::class, 'offline'])->name('offline');

Route::get('/home', [HomeController::class, 'index'])->name('home');

require __DIR__.'/auth.php';
