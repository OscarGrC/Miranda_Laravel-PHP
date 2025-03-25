<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Resource;
Route::resource('activities', Resource::class);
Route::get('/', function () {
    return view('welcome');
});
