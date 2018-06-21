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
    return view('auth.login');
});
Route::resource('clientOschools','ClientOschoolController');
Route::get('/create', function () {
    return view('clientOschools/create');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('clientRms','ClientRmController');
Route::get('/clientRmCreate', function () {
    return view('clientRms/create');
});
Route::resource('clientRts','ClientRtController');
Route::get('/clientRtCreate', function () {
    return view('clientRts/create');
});

Route::resource('formateurs','FormateurController');
Route::get('/formateurCreate', function () {
    return view('formateurs/create');
});
