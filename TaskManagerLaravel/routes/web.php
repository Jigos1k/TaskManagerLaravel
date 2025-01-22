<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{RegisterController, AuthorizationController};

Route::get('/', function () {
    return redirect()->route('register');
});
Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/login', [AuthorizationController::class, 'show'])->name('login.show');


