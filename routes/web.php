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

Route::get('/home', 'HomeController@index')->name('index');

//Using route resource to include all the routes at once
Route::resource('appointments', 'AppointmentController');


//Route::get('/appointments', 'AppointmentController@index')->name('appointments');
////Route::get('appointments', 'AppointmentController@index');
//
//Route::get('/appointments/create', 'AppointmentController@create');//pop an empty form
//Route::post('/appointments', 'AppointmentController@store');//saving to the db
//
//Route::get('/Appointments/edit', 'AppointmentController@edit')->name('edit');


//
//
//Route::get('/appointment/{id?}', 'AppointmentController@show');
//
//Route::get('/appointment/{id?}/edit', 'AppointmentController@edit');
//Route::post('/appointment/{id?}/update', 'AppointmentController@update');
//
//Route::post('/appointment/{id?}/delete', 'AppointmentController@destroy');
