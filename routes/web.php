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

Route::get('blogUsers/{id}/edit', 'BlogUserController@edit')->name('blogUsers.edit');

Route::match(['put', 'patch'], 'blogUsers/{id}', 'BlogUserController@update')->name('blogUsers.update');

Route::delete('blogUsers/{id}', 'BlogUserController@destroy')->name('blogUsers.destroy');


Route::get('posts', 'PostController@index')->name('posts.index');

Route::get('posts/create', 'PostController@create')->name('posts.create');

Route::post('posts', 'PostController@store')->name('posts.store');

Route::get('posts/{id}', 'PostController@show')->name('posts.show');

Route::delete('posts/{id}', 'PostController@destroy')->name('posts.destroy');


Route::get('comments', 'CommentController@index')->name('comments.index');

Route::get('comments/create', 'CommentController@create')->name('comments.create');

Route::post('comments', 'CommentController@store')->name('comments.store');

Route::get('comments/{id}', 'CommentController@show')->name('comments.show');

Route::delete('comments/{id}', 'CommentController@destroy')->name('comments.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
