<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\HobbiesController;
use App\Http\Controllers\SkillsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AboutMeController::class, 'display']);
Route::get('/', [HobbiesController::class, 'display']);
Route::get('/', [SkillsController::class, 'display']);