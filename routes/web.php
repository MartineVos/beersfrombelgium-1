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

Route::get('/beer/add', 'BeersController@create')->name('beers.create')->middleware('auth');
Route::post('/beer/add', 'BeersController@store')->name('beers.store')->middleware('auth');
Route::get('/beer/{id}/edit', 'BeersController@edit')->name('beers.edit')->middleware('auth');
Route::post('/beer/{id}/edit', 'BeersController@update')->name('beers.update')->middleware('auth');
Route::get('/beer/{id}/delete', 'BeersController@delete')->name('beers.delete')->middleware('auth');
Route::get('/beer/{id}', 'BeersController@show')->name('beers.show');
Route::post('/beer/{id}/add_comment', 'BeersController@add_comment')->name('beers.addcomment')->middleware('auth');

Route::get('/breweries', 'BreweriesController@index')->name('breweries.index');
Route::get('/breweries/add', 'BreweriesController@create')->name('breweries.create')->middleware('auth');
Route::post('/breweries/add', 'BreweriesController@store')->name('breweries.store')->middleware('auth');
Route::get('/breweries/{id}/edit', 'BreweriesController@edit')->name('breweries.edit')->middleware('auth');
Route::post('/breweries/{id}/edit', 'BreweriesController@update')->name('breweries.update')->middleware('auth');
Route::get('/breweries/{id}/delete', 'BreweriesController@delete')->name('breweries.delete')->middleware('auth');
Route::post('/breweries/{id}/delete', 'BreweriesController@destroy')->name('breweries.destroy')->middleware('auth');
Route::get('/breweries/{id}', 'BreweriesController@show')->name('breweries.show');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login.post');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register')->name('register.post');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
