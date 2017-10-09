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
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
    Route::resource('detail', 'DetailController');
    Route::resource('obat', 'ObatController');

});

// sok mulai ngoding,  tiap beres atau rek istirahat commit
//carana buka git desktop
//ke we lah di push mah, urg poho carana nambahkeun contributor
//beres nya
