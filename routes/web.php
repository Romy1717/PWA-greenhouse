<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BusinessCategoryController;
use App\Http\Controllers\SubcategoriesController;
use App\Http\Controllers\SensorModelController;
use App\Http\Controllers\SubcategoriesBusinessController;

Route::middleware(['auth'])->group(function() {
    Route::get('/business', [HomeController::class, 'business'])->name('business');
});

Route::get('/businesscategories', [BusinessCategoryController::class, 'index'])->name('businesscategories.index');
Route::get('/businesscategories/create', [BusinessCategoryController::class, 'create'])->name('businesscategories.create');
Route::post('/businesscategories/store', [BusinessCategoryController::class, 'store'])->name('businesscategories.store');
Route::get('/businesscategories/{id}/edit', [BusinessCategoryController::class, 'edit'])->name('businesscategories.edit');
Route::put('/businesscategories/{id}/update', [BusinessCategoryController::class, 'update'])->name('businesscategories.update');
Route::delete('/businesscategories/{id}/destroy', [BusinessCategoryController::class, 'destroy'])->name('businesscategories.destroy');

Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::delete('/categories/{categories}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');

Route::get('/subcategoriesbusiness', [SubcategoriesBusinessController::class, 'index'])->name('subcategoriesbusiness.index');
Route::post('/subcategoriesbusiness', [SubcategoriesBusinessController::class, 'store'])->name('subcategoriesbusiness.store');
Route::put('/subcategoriesbusiness/{id}', [SubcategoriesBusinessController::class, 'update'])->name('subcategoriesbusiness.update');
Route::delete('/subcategoriesbusiness/{id}', [SubcategoriesBusinessController::class, 'destroy'])->name('subcategoriesbusiness.destroy');

Route::get('/subcategories', [SubcategoriesController::class, 'index'])->name('subcategories.index');
Route::post('/subcategories', [SubcategoriesController::class, 'store'])->name('subcategories.store');
Route::put('/subcategories/{id}', [SubcategoriesController::class, 'update'])->name('subcategories.update'); 
Route::delete('/subcategories/{id}', [SubcategoriesController::class, 'destroy'])->name('subcategories.destroy');

Route::get('/sensors', [SensorController::class, 'index'])->name('sensors.index');
Route::post('/sensors', [SensorController::class, 'store'])->name('sensors.store');
Route::put('/sensors/{id}', [SensorController::class, 'update'])->name('sensors.update');
Route::delete('/sensors/{id}', [SensorController::class, 'destroy'])->name('sensors.destroy');

Route::get('/modelos', [SensorModelController::class, 'index'])->name('sensormodel.index');
Route::post('/modelos', [SensorModelController::class, 'store'])->name('sensormodel.store');
Route::put('/modelos/{id}', [SensorModelController::class, 'update'])->name('sensormodel.update');
Route::delete('/modelos/{id}', [SensorModelController::class, 'destroy'])->name('sensormodel.destroy');

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
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/listgreenhouse', [HomeController::class, 'listgreenhouse'])->name('listgreenhouse');
Route::get('/creategreenhouse', [HomeController::class, 'creategreenhouse'])->name('creategreenhouse');
Route::get('/greenhouse', [HomeController::class, 'greenhouse'])->name('greenhouse');


Route::get('/offline', [HomeController::class, 'offline'])->name('offline');

Route::get('/home', [HomeController::class, 'index'])->name('home');

require __DIR__.'/auth.php';
