<?php

use App\Http\Controllers\RoomBookController;
use App\Http\Controllers\RoomCategoryController;
use App\Http\Controllers\RoomController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('/dashboard')->group(function () {
    Route::controller(SpecialOffersController::class)->prefix('/special-offer')->group(function () {
        Route::get('/', 'index')->name('dashboard.specialOffer.index');
        Route::post('/', 'store')->name('dashboard.specialOffer.store');
        Route::get('/{specialOffer}/edit', 'edit')->name('dashboard.specialOffer.edit');
        Route::put('/{specialOffer}/update', 'update')->name('dashboard.specialOffer.update');
        Route::delete('/{specialOffer}/destroy', 'destroy')->name('dashboard.specialOffer.destroy');
        Route::post('/{specialOffer}/status', 'status')->name('dashboard.specialOffer.status');
    });

    Route::controller(RoomCategoryController::class)->prefix('/room-category')->group(function () {
        Route::get('/', 'index')->name('dashboard.roomcategory.index');
        Route::post('/', 'store')->name('dashboard.roomcategory.store');
        Route::get('/{roomCategory}/edit', 'edit')->name('dashboard.roomcategory.edit');
        Route::put('/{roomCategory}/update', 'update')->name('dashboard.roomcategory.update');
        Route::delete('/{roomCategory}/destroy', 'destroy')->name('dashboard.roomcategory.destroy');
    });

    Route::controller(RoomController::class)->prefix('/room')->group(function () {
        Route::get('/', 'index')->name('dashboard.room.index');
        Route::post('/', 'store')->name('dashboard.room.store');
        Route::get('/{room}/edit', 'edit')->name('dashboard.room.edit');
        Route::put('/{room}/update', 'update')->name('dashboard.room.update');
        Route::delete('/{room}/destroy', 'destroy')->name('dashboard.room.destroy');
    });

    Route::get('/', function () {
        return view('dashboard.test.index');
    });
});

Route::prefix('/')->group(function () {

    Route::get('/a', function () {
        return view('frontend.room_book.index');
    });

    Route::controller(RoomBookController::class)->prefix('/room-book')->group(function () {
        Route::get('/', 'index')->name('dashboard.roombook.index');
        Route::post('/', 'store')->name('dashboard.roombook.store');
        Route::get('/{roomBook}/edit', 'edit')->name('dashboard.roombook.edit');
        Route::put('/{roomBook}/update', 'update')->name('dashboard.roombook.update');
        Route::delete('/{roomBook}/destroy', 'destroy')->name('dashboard.roombook.destroy');
    });
});
