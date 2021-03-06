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

Route::get('/','SearchController@view');

Route::get('/result','QueryController@view');

Route::get('/about','AboutController@view');

Route::post('/searching','SearchController@search');