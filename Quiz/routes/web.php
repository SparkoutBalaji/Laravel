<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;

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

Route::get('/',[CustomAuthController::class,'login'])->name('login');
Route::get('/registration',[CustomAuthController::class,'registration'])->name('registration');
Route::post('/register/user',[CustomAuthController::class,'register_user'])->name('register.user');
Route::post('/authentication/user',[CustomAuthController::class,'authentication'])->name('authentication.user');
Route::view('/admin/panel','adminpanel')->name('admin.panel');
Route::view('/create/questions','createquestions')->name('create.questions');
Route::view('/questions/list','questionslist')->name('questions.list');
Route::post('/store/questions', [QuestionController::class,'store']);
