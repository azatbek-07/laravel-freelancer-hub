<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FreelanceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/freelancers', [FreelanceController::class, 'index'])->name('freelancers.index');
Route::get('/freelancers/{id}', [FreelanceController::class, 'show'])->name('freelancers.show');

Route::get('projects/', [ProjectController::class, 'index'])->name('projects.index');

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

Route::middleware('guest')->group(function () {
    Route::get('/login', fn() => view('auth.login'))->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    Route::get('/register', fn() => view('auth.register'))->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});