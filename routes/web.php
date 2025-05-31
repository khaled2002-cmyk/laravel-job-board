<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class,'index']);


Route::get('/about',[IndexController::class,'about']);

Route::get('/contact',[IndexController::class,'contact']);



