<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

//Select, Insert, Update, Delete from SQL Raw Queries
Route::get('/read', function()
{
   return DB::select('select * from user');
});

Route::get('/insert', function(){
    DB::insert('insert into user(id,name,email,password) values(?,?,?,?)',[112,'BALAJI N','balaji.n@sparkouttech.com','Balaji@SparkOutTech']);
    return DB::select('select * from user');
});

Route::get('/update',function(){
    DB::update('update user set role=1 where id=?',[112]);
    return DB::select('select * from user');
});

Route::get('/delete', function(){
    DB::delete('delete from user where id=?',[112]);
    return DB::select('select * from user');
});

//Controller for create(insert), Show, Index
Route::get('/user/create',[UserController::class,'create']);
Route::get('/user/show',[UserController::class,'show']);
Route::get('/user/index',[UserController::class,'index']);
