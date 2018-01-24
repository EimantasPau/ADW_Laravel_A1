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


Route::get('/', 'AppointmentController@index')->middleware('auth');


Route::get('/appointments', 'AppointmentController@index')->name('index')->middleware('auth');

Route::post('/appointments', 'AppointmentController@store')->name('store')->middleware('auth');

Route::get('/appointments/create', 'AppointmentController@create')->name('create')->middleware('auth');

Route::delete('/appointments/{appointment}', 'AppointmentController@destroy')->name('destroy')->middleware('auth');

Route::get('/appointments/{appointment}', 'AppointmentController@edit')->name('edit')->middleware('auth');

Route::put('/appointments/{appointment}', 'AppointmentController@update')->name('update')->middleware('auth');
//
//Route::get('/appointments/search', 'AppointmentController@search')->name('search');

