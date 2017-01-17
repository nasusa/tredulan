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
Route::get('aboutus', 'PagesController@aboutus');
Route::get('info', 'PagesController@info');
Route::get('rules', 'PagesController@rules');
Route::get('schedule', 'PagesController@schedule');
Route::get('guide', 'PagesController@guide');
Route::get('tournaments', 'PagesController@tournaments');
Route::get('infoscreen', 'PagesController@infoscreen');