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

Route::get('/','TodoController@index');

Route::post('/create','TodoController@create');

Route::get('/edit/{id}','TodoController@edit');

Route::post('/update/{id}','TodoController@update');

Route::get('/update/','TodoController@index');

Route::get('/delete/{id}','TodoController@delete');

Route::get('/history','TodoController@history');

Route::get('/complete/{id}','TodoController@complete');

Route::get('/clear/{id}','TodoController@clear');

