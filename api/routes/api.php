<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/users',[UserApiController::class,'index'])->name('users');
Route::post('/users/create',[UserApiController::class,'store'])->name('users.store');
Route::put('/users/update',[UserApiController::class,'update'])->name('users.update');
Route::post('/users/show',[UserApiController::class,'show'])->name('users.show');
Route::delete('/users/destroy',[UserApiController::class,'destroy'])->name('users.destroy');



