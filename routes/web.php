<?php

use App\Http\Controllers\FreelanceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/freelancers', [FreelanceController::class, 'index'])->name('freelancers.index');
Route::get('/freelancers/{id}', [FreelanceController::class, 'show'])->name('freelancers.show');

Route::get('projects/', [ProjectController::class, 'index'])->name('projects.index');

Route::get('/orders', [OrderController::class,'index'])->name('orders.index');