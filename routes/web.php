<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();

Route::get('/', 'PagesController@index');
Route::get('tietoameista', 'PagesController@tietoameista');
Route::get('info', 'PagesController@info');
Route::get('saannot', 'PagesController@saannot');
Route::get('aikataulu', 'PagesController@aikataulu');
Route::get('opas', 'PagesController@opas');
Route::get('turnaukset', 'PagesController@turnaukset');
Route::get('infoscreen', 'PagesController@infoscreen');