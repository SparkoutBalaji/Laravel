<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
// use App\Http\Controllers\UserController;
use App\Models\User;
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
    return view('auth.login');
})->name('login');

Route::get('/users',[App\Http\Controllers\UserController::class,'show']);

Route::view('/home','home');

Route::post('/store',[RegistrationController::class, 'store']);
Route::view('/register','auth.register')->name('register');

Route::post('/authentication',[LoginController::class,'authentication']);

Route::get('/logout',[LoginController::class, 'logout']);

Route::view('/admin/dashboard', 'auth.dashboard')->name('admin_dashboard');
Route::get('/create-question', function () {
    return view('auth.question.createQuestion');
})->name('create_question');
Route::get('/question-list', function () {
    return view('auth.question.questionList');
})->name('question_list');

