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

Route::get('/welcome', function () {
    // return view('welcome');
    return redirect('home'); // when we redirect to a page you cannot come 
});
// Route::get('hello', function(){
//     return view('hello');
// });
Route::view('home','home');

// Route::get('tc',function(){  // this page define on view folder
//     return view('tc');
// });

Route::view('tc','/tc');

Route::view('about','/about');
