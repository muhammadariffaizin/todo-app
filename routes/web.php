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

Route::get('/', 'TaskController@index')->name('index');
Route::post('store', 'TaskController@store')->name('store');
Route::get('{id}/edit', 'TaskController@edit')->name('edit');
Route::put('update', 'TaskController@update')->name('update');
Route::get('{id}/delete', 'TaskController@delete')->name('delete');