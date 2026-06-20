<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Route;


Route::name('frontend.')->group(function () {
    Route::get('/', [Frontend\HomeController::class, 'index'])->name('index');
    Route::get('/instructor', [Frontend\HomeController::class, 'instructor'])->name('instructor');
    Route::get('/course', [Frontend\HomeController::class, 'course'])->name('course');
    Route::get('/blog', [Frontend\HomeController::class, 'blog'])->name('blog');
    Route::get('/contact', [Frontend\HomeController::class, 'contact'])->name('contact');
    Route::get('/faq', [Frontend\HomeController::class, 'faq'])->name('faq');
    Route::get('/course_details', [Frontend\HomeController::class, 'course_details'])->name('course_details');
});




Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('user/register/', [UserController::class, 'addUser'])->name('register.user');

Route::get('/forgot-password', [UserController::class, 'forgotPassword'])->name('forgot.password');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', [UserController::class, 'userIndex'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::get('/user-details/{id}', [UserController::class, 'userDetail'])->name('user.detail');


    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/settings', [ProfileController::class, 'settings'])->name('settings');
});
