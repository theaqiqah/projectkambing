<?php

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
    return view('landing');
});

Route::get('/landing', function () {
    return view('welcome');
});

Route::get('/old', function () {
    return view('landingOld');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('book/livestock', 'BookingController@showBookLivestock');

Route::get('book/aqiqah', 'BookingController@showBookAqiqah');

Route::get('book/livegrill', 'BookingController@showBookLivegrill');
