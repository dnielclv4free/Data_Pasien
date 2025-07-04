<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

require_once "api.php";
/* Route::get('/', function () { */
/*     return view('welcome'); */
/* }); */

Route::get('login',function(){
    return view('login');
})->name('login');

Route::get('register',function(){
    return view('register');
})->name('register');


