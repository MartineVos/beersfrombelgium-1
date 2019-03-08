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

Route::get('/', 'BeersController@index')->name('home');

Route::get('/beer/add', 'BeersController@create')->name('beers.create');
Route::post('/beer/add', 'BeersController@store')->name('beers.store');

Route::get('/beer/{id}/edit', 'BeersController@edit')->name('beers.edit');
Route::post('/beer/{id}/edit', 'BeersController@update')->name('beers.update');

Route::get('/beer/{id}', 'BeersController@show')->name('beers.show');