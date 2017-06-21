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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'AppointmentController@index')->name('index');
//Route::get('appointments', 'AppointmentController@index');

Route::get('/_form', 'AppointmentController@create')->name('_form');

//Route::get('/Appointments/edit', 'AppointmentController@edit')->name('edit');

//Route::resource('appointments', 'AppointmentController');
