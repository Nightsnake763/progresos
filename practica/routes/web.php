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
Route::delete('/Person/delete/{person}', 'PersonController@delete')->name('person.delete');
Route::get('/Person/edit/{person}', 'PersonController@edit')->name('person.edit');
Route::post('/Person/update/{person}', 'PersonController@update')->name('person.update');
Route::post('/Country/store', 'CountryController@store')->name('country.store');
Route::post('/Son/store/{id}', 'SonController@store')->name('son.store');
Route::post('/Son/update/{son}', 'SonController@update')->name('son.update');
Route::delete('/Son/delete/{son}', 'SonController@delete')->name('son.delete');
Route::get('Son/edit/{id}', 'SonController@edit')->name('son.edit');

Auth::routes();
