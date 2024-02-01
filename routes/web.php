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

Route::get('/about-us', function () {
    return view('pages.about.index');
});

Route::get('/gallery', function () {
    return view('pages.gallery.index');
});

Route::get('/contact-us', function () {
    return view('pages.contact.index');
});

Route::group(['prefix' => 'rooms'], function() {

    Route::get('/', function() {
        return view('pages.rooms.index');
    });

    Route::get('/rooms/room-name1', function() {
        return view('pages.rooms.room_name1');
    });

    Route::get('/rooms/room-name2', function() {
        return view('pages.rooms.room_name2');
    });

    Route::get('/rooms/room-name3', function() {
        return view('pages.rooms.room_name3');
    });
});

//Route::get('/rooms', [HotelRoomsController::class, 'showData']);
//Route::get('/accommodation/room/{room_url}', [HotelRoomsController::class, 'singleRoom']);
