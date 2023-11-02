<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::view('/','index')->name('homepage');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::get('/admin/adminpanel',[AuthController::class,'authenticate'])->name('admin.adminpanel');
Route::post('/login/user',[AuthController::class,'authenticate'])->name('login.authenticate');
Route::post('/register',[AuthController::class,'registering_user'])->name('registering.user');
Route::middleware(['auth', 'checkRole:1'])->group(function () {

});

Route::middleware(['auth', 'checkRole:2'])->group(function () {
    // Define routes for users with role 2 (default users)
});


