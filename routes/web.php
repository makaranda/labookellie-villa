<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home.index');
});


Route::get('/accommodation/rooms', [HotelRoomsController::class, 'showData']);
Route::get('/accommodation/room/{room_url}', [HotelRoomsController::class, 'singleRoom']);
Route::get('/dining/restaurant/tides-restaurant', function () {
    return view('pages.tides-restaurant.index');
});
Route::get('/dining/restaurant/rose-lounge', function () {
    return view('pages.rose-lounge.index');
});
