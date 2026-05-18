<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


/*Route::get('/', function () {
 return view('welcome'); });*/


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...


    Route::get('/', [IndexController::class , 'index'])->name('accueil');
    Route::get('/details/pricing', [IndexController::class , 'details'])->name('details');
    Route::get('/resevertation', [IndexController::class , 'Reservation_step_1'])->name('reservation_step_1');
    Route::get('/resevertation/2', [IndexController::class , 'Reservation_step_2'])->name('reservation_step_2');
    Route::post('/reservation/3', [IndexController::class , 'Reservation_step_3'])->name('reservation_step_3');
    Route::get('/reservation/callback', [IndexController::class , 'reservationCallback'])->name('reservation_callback');
    Route::post('/news/store', [IndexController::class , 'Newsletter'])->name('message.newsletter');


    // Location uniquement
    Route::get('/resevertation/location/step_1', [IndexController::class , 'Location_Reservation_step_1'])->name('location_reservation_step_1');
    Route::get('/resevertation/location/step_2', [IndexController::class , 'Location_Reservation_step_2'])->name('location_reservation_step_2');
    Route::post('/reservation/location/step_3', [IndexController::class , 'Location_Reservation_step_3'])->name('location_reservation_step_3');
    Route::get('/reservation/location/callback', [IndexController::class , 'Location_reservationCallback'])->name('location_reservation_callback');
    //Route::post('/news/store', [IndexController::class , 'Newsletter'])->name('message.newsletter');

    Route::post('/download-reservation', [IndexController::class , 'downloadReservation'])->name('download_reservation');

    Route::prefix('contact')->group(function (){

        Route::get('/', [IndexController::class, 'contact'])->name('contact');
        /*Route::post('/store', function () {
            return redirect()->route('contact');
        });*/
        Route::post('/store', [IndexController::class, 'ContactMessage'])->name('contact.message');



    });

    Route::get('/place-de-lamazone', [IndexController::class, 'placedelamazone'])->name('amazone');
    Route::get('/monument-devoue', [IndexController::class, 'monumentdevoue'])->name('devoue');
    Route::get('/mur-du-patrimoine', [IndexController::class, 'murdupatrimoine'])->name('patrimoine');
    Route::get('/place-bio-guerra', [IndexController::class, 'placebioguerra'])->name('guerra');
    Route::get('/route-peche', [IndexController::class, 'routepeche'])->name('peche');
    Route::get('/sofitel', [IndexController::class, 'sofitel'])->name('sofitel');
    Route::get('/ouidah', [IndexController::class, 'ouidah'])->name('ouidah');


});





