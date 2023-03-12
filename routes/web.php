<?php

use App\Http\Controllers\SpecialOffersController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/dashboard')->group(function () {
    Route::controller(SpecialOffersController::class)->prefix('/special-offer')->group(function () {
        Route::get('/', 'index')->name('dashboard.specialOffer.index');
        Route::post('/', 'store')->name('dashboard.specialOffer.store');
        Route::get('/{specialOffer}/edit', 'edit')->name('dashboard.specialOffer.edit');
        Route::put('/{specialOffer}/update', 'update')->name('dashboard.specialOffer.update');
        Route::delete('/{specialOffer}/destroy', 'destroy')->name('dashboard.specialOffer.destroy');
        Route::post('/{specialOffer}/status', 'status')->name('dashboard.specialOffer.status');
    });

    Route::get('/', function () {
        return view('dashboard.test.index');
    });
});
