<?php

use App\Http\Controllers\LoadDataController;
use App\Http\Controllers\LoginFormController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DataCollector\DataCollectorInterface;

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
    return view('index');
})->name('index');

Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');

Route::get('/getdata',[LoadDataController::class,'getdata'])->name('getdata');
Route::get('/passdata',[LoadDataController::class,'passdata'])->name('passdata');

ROUTE::view('/login','login');
Route::post('/login',[LoginFormController::class,'login']);
