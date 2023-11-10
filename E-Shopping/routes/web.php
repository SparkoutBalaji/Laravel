<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VendorController;
use App\Models\Vendor;

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
Route::view('/','homepage')->name('homepage');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registering_user'])->name('registering.user');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
});

Route::middleware(['auth'])->group(function () {
    // Logout route
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');
    // Routes for different user roles
    Route::get('/admin/adminpanel', [AuthController::class,'admin'])->name('admin.adminpanel');
    Route::get('/homepage', [AuthController::class,'user'])->name('homepage');
});

Route::middleware(['auth','CheckRole:1'])->group(function(){


});

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);

Route::resource('vendors',VendorController::class);
Route::resource('categories',CategoryController::class);
Route::resource('orders',OrderController::class);

Route::get('/admin/dashboard',[AuthController::class,'admin'])->name('admin.dashboard');
Route::get('/user/dashboard',[AuthController::class,'userDashboard'])->name('user.dashboard');
Route::get('/vendor/dashboard',[AuthController::class,'vendorDashboard'])->name('vendor.dashboard');

Route::post('/vendor/login',[AuthController::class,'vendorAuthenticate'])->name('vendor.authenticate');
Route::get('/vendor/login',[AuthController::class,'vendorLogin'])->name('vendor.login');

Route::get('/user/products',[ProductController::class,'userProducts'])->name('user.products');
Route::get("/mail/verified/{id}",[VendorController::class,'mailVerification'])->name('mail.verified');


