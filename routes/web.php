<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArmyCorpsController;
use App\Http\Controllers\BarracksController;
use App\Http\Controllers\CompaniesController;

Route::resource('barracks', BarracksController::class);
Route::resource('companies', CompaniesController::class);