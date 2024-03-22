<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/home2', function () {
    return view('pages.home2.index');
});
/*
Route::get('/about-us', function () {
    return view('pages.about.index');
});
*/ 
 
Route::get('/experiences', function () {
    return view('pages.experiences.index');
});

Route::get('/gallery', function () {
    return view('pages.gallery.index');
});


Route::get('/dining', function () {
    return view('pages.dining.index');
});

Route::get('/contact-us', function () {
    return view('pages.contact.index');
});

Route::post('/contact-us/save', [ContactController::class, 'send'])->name('contact.send');


Route::group(['prefix' => 'accommodations'], function() {

    Route::get('/', function() {
        return view('pages.accommodations.index');
    });

    Route::get('/room-name1', function() {
        return view('pages.accommodations.room_name1');
    });

    Route::get('/room-name2', function() {
        return view('pages.accommodations.room_name1');
    });

    Route::get('/room-name3', function() {
        return view('pages.accommodations.room_name1');
    });
});

//Route::get('/rooms', [HotelRoomsController::class, 'showData']);
//Route::get('/accommodation/room/{room_url}', [HotelRoomsController::class, 'singleRoom']);
