<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactViewController;
use App\Http\Controllers\RoomDetailController;
use App\Http\Controllers\RoomViewController;
use App\Http\Controllers\OffertsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('activities', ActivitiesController::class);
    Route::resource('users', UsersController::class);
    Route::resource('rooms', RoomController::class);
    Route::resource('bookings', BookingController::class);
    Route::resource('contacts', ContactController::class);

    Route::get('/', [HomeController::class, 'index'])->name('home');  
    Route::get('/about', [AboutController::class, 'index'])->name('about'); 
    Route::get('/contact', [ContactViewController::class, 'index'])->name('contact');  
    Route::get('/rooms', [RoomViewController::class, 'index'])->name('rooms'); 
    Route::get('/rooms/detail', [RoomDetailController::class, 'index'])->name('roomsDetail');  
    Route::get('/offerts', [OffertsController::class, 'index'])->name('offerts'); 
    

});

require __DIR__.'/auth.php';
