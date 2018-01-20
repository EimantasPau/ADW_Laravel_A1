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


Auth::routes();

Route::get('/home', 'AppointmentController@index')->name('index');
Route::get('/', 'AppointmentController@index');

Route::post('/appointments', 'AppointmentController@store')->name('store');

Route::get('/appointments/create', 'AppointmentController@create')->name('create');

Route::delete('/appointments/{appointment}', 'AppointmentController@destroy')->name('destroy');

Route::get('/appointments/{appointment}', 'AppointmentController@edit')->name('edit');

Route::put('/appointments/{appointment}', 'AppointmentController@update')->name('update');
