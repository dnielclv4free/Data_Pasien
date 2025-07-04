<?php

use App\Http\Controllers\Authcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['message' => 'Hello world!']);
});

Route::post('register', [Authcontroller::class, 'register'])->name('auth.register');
Route::post('login', [Authcontroller::class, 'login'])->name('auth.login');

Route::middleware('jwt')->group(function () {
    Route::get('/user', [Authcontroller::class, 'getUser']);
    Route::put('/user', [Authcontroller::class, 'updateUser']);
    Route::post('/logout', [Authcontroller::class, 'logout']);
});
