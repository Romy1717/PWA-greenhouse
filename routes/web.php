<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;



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


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
Route::get('/subcategories', [HomeController::class, 'subcategories'])->name('subcategories');
Route::get('/transactions', [HomeController::class, 'transactions'])->name('transactions');
Route::get('/orders', [HomeController::class, 'orders'])->name('orders');
Route::get('/users', [HomeController::class, 'users'])->name('users');
Route::get('/insignia', [HomeController::class, 'insignia'])->name('insignia');
Route::get('/dealers', [HomeController::class, 'dealers'])->name('dealers');
Route::get('/mapdealers', [HomeController::class, 'mapdealers'])->name('mapdealers');
Route::get('/certificates', [HomeController::class, 'certificates'])->name('certificates');
Route::get('/medals', [HomeController::class, 'medals'])->name('medals');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/banners', [HomeController::class, 'banners'])->name('banners');
Route::get('/trophies', [HomeController::class, 'trophies'])->name('trophies');
Route::get('/notifications', [HomeController::class, 'notifications'])->name('notifications');
Route::get('/sensors', [HomeController::class, 'sensors'])->name('sensors');

Route::get('/offline', [HomeController::class, 'offline'])->name('offline');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

require __DIR__.'/auth.php';