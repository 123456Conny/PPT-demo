<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[\App\Http\Controllers\IndexController::class,'index']);

Route::get('/learning',[\App\Http\Controllers\IndexController::class,'learning']);

Route::get('/plans',[\App\Http\Controllers\IndexController::class,'plans']);

Route::get('/tutor',[\App\Http\Controllers\IndexController::class,'tutor']);

Route::get('/about',[\App\Http\Controllers\IndexController::class,'about']);
