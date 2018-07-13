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

Route::resource('tests','TestController');

Route::get('/', 'HomeController@homepage');
Route::resource('clientOschools','ClientOschoolController');

Route::resource('factureOschools','FactureOschoolController');
Route::resource('factureRts','FactureRtController');
Route::resource('factureRms','FactureRmController');
Route::resource('factureBootcamps','FactureBootcampController');
Route::resource('factureSoutenances','FactureSoutenanceController');

Route::resource('clientBootcamps','ClientBootcampController');
Route::resource('clientSoutenances','ClientSoutenanceController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('clientRms','ClientRmController');


Route::resource('clientRts','ClientRtController');


Route::resource('formateurs','FormateurController');
