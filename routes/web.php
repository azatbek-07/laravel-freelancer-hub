<?php

use App\Http\Controllers\FreelanceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');


Route::get('/freelancers', [FreelanceController::class,'index'])->name('freelancers');
