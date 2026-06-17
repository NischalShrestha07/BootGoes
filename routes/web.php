<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('user/register/', [UserController::class, 'addUser'])->name('register.user');

Route::get('/forgot-password', [UserController::class, 'forgotPassword'])->name('forgot.password');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', [UserController::class, 'userIndex'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::get('/user-details', [UserController::class, 'userDetail'])->name('user.detail');


    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
});
