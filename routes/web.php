<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('user/register/', [UserController::class, 'addUser'])->name('register.user');

Route::get('/forgot-password', [UserController::class, 'forgotPassword'])->name('forgot.password');
