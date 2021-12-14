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

Route::get('/', 'HomeController@index')->name('index');
Route::post('/Person/store', 'PersonController@store')->name('person.store');
Route::get('/Person/delete/{id}', 'PersonController@delete')->name('person.delete');
Route::get('/Person/update/{id}', 'PersonController@update')->name('person.update');
Route::post('/Person/update_data/{id}', 'PersonController@update_data')->name('person.update_data');
Route::post('/Country/store', 'CountryController@store')->name('country.store');
Route::post('/Person/addSon/{id}', 'PersonController@addSon')->name('person.addSon');
Route::get('/son/update/{id}', 'SonController@update')->name('son.update');
Route::post('/Son/update_data/{id}', 'SonController@update_data')->name('son.update_data');
Route::get('/son/delete/{id}', 'SonController@delete')->name('son.delete');

Auth::routes();
