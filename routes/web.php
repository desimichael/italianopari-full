<?php

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


// Admin Authentication



// Admin Dashboard


// Admin Food Categories Dinner, Brunch, Lunch



// Admin Settings



// Admin Reservations




// Admin Users 



// Admin Members







// Home Page
Route::get('/', function () {
    return view('pages/home');
});
Route::get('/menu', function () {
    return view('pages/menu');
});
Route::get('/private', function () {
    return view('pages/private');
});
Route::get('/reservations', function () {
    return view('pages/reservations');
});
Route::get('/press', function () {
    return view('pages/press');
});
Route::get('/events', function () {
    return view('pages/events');
});
Route::get('/about', function () {
    return view('pages/about');
});
Route::get('/rooftop', function () {
    return view('pages/rooftop');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
