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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     return view('menu');
// });
// Route::get('/', function () {
//     return view('happenings');
// });
// Route::get('/', function () {
//     return view('private-events');
// });
// Route::get('/', function () {
//     return view('location');
// });
// Route::get('/', function () {
//     return view('reservations');
// });
