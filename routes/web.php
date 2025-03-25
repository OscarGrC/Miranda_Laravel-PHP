<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\UsersController;
Route::resource('activities', ActivitiesController::class);
Route::resource('users', UsersController::class);
Route::get('/', function () {
    return view('welcome');
});
