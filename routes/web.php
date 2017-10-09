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

Route::resource('pasien', 'pasienController');
Route::resource('resep', 'resepController');
Route::resource('detail', 'DetailController');
Route::resource('obat', 'ObatController');
Route::resource('poli', 'poliController');
Route::resource('dokter', 'dokterController');
Route::resource('pembayaran', 'bayarController');
Route::resource('pendaftaran', 'daftarController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
