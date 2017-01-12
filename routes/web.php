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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return "Hello Andra";
});

Route::get('social', function () {
    return view('andrasocial');
});

Route::get('nama','NamaController@nama');

Route::get('index','TaskController@index');

Route::get('ask','TaskController@ask');

Route::get('tes','TaskController@tes');
