<?php

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
    return view('welcome');
})->middleware('demo');

Route::get('/use', function(){
    echo "USE ROUTE";
})->middleware('demo');

Route::get('/user', function(){
    echo "Without Middleware";
});

//Group Middleware
Route::middleware('demo')->group(function(){
    Route::get('/users', function(){
        echo "\n With Middleware";
    });
});
