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
    return view("pages.index");
});

Route::get('/viewTour', function () {
    return view("pages.viewTour");
});

Route::get('/payment', function () {
    return view("pages.payment");
});

Route::get('/tourDetail', function () {
    return view("pages.tourDetail");
});
