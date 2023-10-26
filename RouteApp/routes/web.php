<?php
use App\Http\Controllers;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\country;
use App\Http\Middleware\age;
use GuzzleHttp\Middleware;

Route::get('/', function () {
    return "HI";
    //return view('welcome');
});

Route::view('/uform','user');

Route::get('/get',[UserController::class,'get']);
Route::post('/post',[UserController::class,'post']);
Route::put('/put',[UserController::class,'put']);
//Route::patch('/patch',[UserController::class,'patch']);
Route::patch('/patch',[UserController::class,'patch']);
Route::delete('/delete',[UserController::class,'delete']);

Route::view('/noaccess','noaccess');

Route::get('/invoke',CustomController::class);              //single action controller

Route::get('/basic',[CustomController::class,'basic']);     //Basic Controller

//Route::get('/wel',"CustomController@wel");

Route::resource('Employees',ResourceController::class);     //easy to make crud by resource route

Route::get('/noaccess','noaccess');                         // middleware reddirects

Route::get('/sample3', function(){
    echo "SAMPLE 3";
});

Route::middleware(['country'])->group(function(){
    Route::get('/sample1', function(){
        echo "SAMPLE 1";
    });
    Route::get('/sample2', function(){
        echo "SAMPLE 2";
    });
});






