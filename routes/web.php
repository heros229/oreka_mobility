<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', [IndexController::class, 'index'])->name('accueil');
Route::get('/resevertation', [IndexController::class, 'Reservation_step_1'])->name('reservation_step_1');
Route::get('/resevertation/2', [IndexController::class, 'Reservation_step_2'])->name('reservation_step_2');
// Dans web.php
// Dans routes/web.php
Route::post('/reservation/3', [IndexController::class, 'Reservation_step_3'])->name('reservation_step_3');
Route::get('/reservation/callback', [IndexController::class, 'reservationCallback'])->name('reservation_callback');
Route::post('/news/store', [IndexController::class, 'Newsletter'])->name('message.newsletter');

