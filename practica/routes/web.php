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
Route::get('/Person/delete/{person}', 'PersonController@delete')->name('person.delete');
Route::get('/Person/edit/{person}', 'PersonController@edit')->name('person.edit');
Route::get('/Person/update/{person}', 'PersonController@update')->name('person.update');
Route::post('/Country/store', 'CountryController@store')->name('country.store');
Route::post('/Person/addSon/{id}', 'PersonController@addSon')->name('person.addSon');
Route::get('/son/edit/{id}', 'SonController@edit')->name('son.edit');
Route::post('/Son/update/{id}', 'SonController@update')->name('son.update');
Route::get('/son/delete/{id}', 'SonController@delete')->name('son.delete');

Auth::routes();
