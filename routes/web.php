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
Route::get('/beer/{id}/delete', 'BeersController@delete')->name('beers.delete');
Route::get('/beer/{id}', 'BeersController@show')->name('beers.show');

Route::get('/breweries', 'BreweriesController@index')->name('breweries.index');
Route::get('/breweries/add', 'BreweriesController@create')->name('breweries.create');
Route::post('/breweries/add', 'BreweriesController@store')->name('breweries.store');
Route::get('/breweries/{id}/edit', 'BreweriesController@edit')->name('breweries.edit');
Route::post('/breweries/{id}/edit', 'BreweriesController@update')->name('breweries.update');
Route::get('/breweries/{id}/delete', 'BreweriesController@delete')->name('breweries.delete');
Route::post('/breweries/{id}/delete', 'BreweriesController@destroy')->name('breweries.destroy');
Route::get('/breweries/{id}', 'BreweriesController@show')->name('breweries.show');