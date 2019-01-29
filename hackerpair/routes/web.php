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

Route::get('/', 'WelcomeController@index');

Route::get('events/{id}', 'EventsController@show')->name('events.show');

Route::get('events/category/{category}/{subcategory?}', 'EventsController@category');

Route::get('events', 'EventsController@index');

Route::get('locations', 'LocationsController@index');

Route::get('languages', 'LanguagesController@index');

Route::get('maps', 'MapsController@index');
