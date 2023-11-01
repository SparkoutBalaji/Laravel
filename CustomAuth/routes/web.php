<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;

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
Route::redirect('/','/login');
Route::get('/login',[CustomAuthController::class,'login'])->name('login');
Route::get('/registration',[CustomAuthController::class,'registration'])->name('registration');
Route::post('/user/register',[CustomAuthController::class,'registering_user'])->name('registering.user');

