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

Route::get('/', function () {
    return view('welcome');
});

Route::get('blogUsers', 'BlogUserController@index')->name('blogUsers.index');

Route::get('blogUsers/create', 'BlogUserController@create')->name('blogUsers.create');

Route::post('blogUsers', 'BlogUserController@store')->name('blogUsers.store');

Route::get('blogUsers/{id}', 'BlogUserController@show')->name('blogUsers.show');


