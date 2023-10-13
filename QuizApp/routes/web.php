<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
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

Route::get('/', function () {
    return view('auth.login'); });

Route::view('/home','home');

Route::post('/store',[RegistrationController::class, 'store']);
Route::view('/register','auth.register');

Route::post('/authentication',[LoginController::class,'authentication']);

Route::get('/logout',[LoginController::class, 'logout']);

