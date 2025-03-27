<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CuerpoEjercitoController;
use App\Http\Controllers\CuartelController;
use App\Http\Controllers\CompañiaController;

Route::resource('army_corps', CuerpoEjercitoController::class);
Route::resource('barracks', CuartelController::class);
Route::resource('companies', CompañiaController::class);