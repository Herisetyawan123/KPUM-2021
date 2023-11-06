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

Route::get('/', 'MasterController@Beranda')->name('Beranda');
Route::get('/DataPemilih', 'MasterController@DataPemilih')->name('DataPemilih');
Route::get('/Login', 'MasterController@Login')->name('Login');
Route::post('/Login', 'MasterController@AuthLogin')->name('AuthLogin');
Route::get('/Logout', 'MasterController@Logout')->name('Logout');