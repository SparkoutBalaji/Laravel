<?php

use App\Http\Middleware\age;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
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
    return "Default Visitors URL web Page";
})->name('default');

Route::get('/home',function(){
    return "Visitors Home Page";
})->name('home');

//Redirect Route are used to Routes, Views, Controllers & etc...
Route::view('re','redirect')->name('re-direct');
Route::redirect('redirect', 're');   //short redirect
Route::get('redirect1', function(){
    return redirect(url('re'));
});
//Permanent Redirect
Route::permanentRedirect('r','re');
Route::redirect('red','re',301);    //301 - is represent moved permanently like permanentRedirect Route
//Route::permanentRedirect('r', url('re'));

//Group Route by Middleware('auth') or Prefix
Route::prefix('admin')->group(function(){
    Route::view('home','home');
});

//any wrong request url then return the fallback like 404 - not found
Route::fallback(function(){
    $Url = request()->fullUrl();
    return "404 Error : Not Founded URL : $Url ,<br/>You entered the wrong URL.<br/> Please check the correct URL format.<br/>Return By fallback Route, If you Entered any wrong URL then return same...";
});

//Route Constraint
Route::get('/id/{id}', function($id){   //these id parameter constraint is written on, RouteServiceProvider accept only [0-9] its, a global Constarints
    return "ID : $id";
});

//Pass data to view
Route::get('/data', function(){
    return view('data',['name'=>'BALAJI N 1','age'=>23]);   //collection & single of data also use a array
    return view('data')->with('name','BALAJI N 2')->with('age',23);   //if am pass a single single data like key value pair to a view so, i dont want to use array type
    return view('data')->with(['name'=>'BALAJI N 3','age'=>23]);  //collection of data pass to view by with function so use array type
        $name = "BALAJI N 4";
        $age = 23;
    return view('data', compact('name','age'));    //finally with compact by data assigned as a variable or also passed by model also or collection of data array variable also passed in compact method
//if am uncommand all the same data pass route, the first data pass route is taken default by laravel
});

//view Component
Route::view('/component','component');

//view : if-statement in view
Route::get('/if',function(){
    $country = "AMERICA";
    return view('if_statement', compact('country'));
});

//view : switch case
Route::get('/switch',function(){
    $status = "";
    return view('switchCase',compact('status'));
});

//view : loops
Route::view('/loops','loops');

//middleware resirect by age - Global Middleware
Route::view('middleware','middleware')->middleware('age');

//for session
Route::get('/sessionStore', function(Request $request){
    // $request->session()->put('name','BALAJI N');
    // $request->session()->put('mail','balaji.n@sparkouttech.com');
    session([
        'name'=>'SHEIK DAWOODU',
        'mail'=>'sheikdawoodu@sparkouttech.com'
    ]);
    $request->session()->flash('mobile',8012964843);
});
Route::get('/session', function(){
    dd(session()->all());
});
Route::get('/accesssession', function(){
    echo session('mobile');
});


