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

Route::get('blogUsers', 'BlogUserController@index')->name('blogUsers.index')->middleware('auth');

Route::get('blogUsers/create', 'BlogUserController@create')->name('blogUsers.create')->middleware('auth');

Route::post('blogUsers', 'BlogUserController@store')->name('blogUsers.store')->middleware('auth');

Route::get('blogUsers/{id}', 'BlogUserController@show')->name('blogUsers.show')->middleware('auth');

Route::get('blogUsers/{id}/posts', 'BlogUserController@posts')->name('blogUsers.posts')->middleware('auth');

Route::get('blogUsers/{id}/comments', 'BlogUserController@comments')->name('blogUsers.comments')->middleware('auth');

Route::get('blogUsers/{id}/edit', 'BlogUserController@edit')->name('blogUsers.edit')->middleware('auth');

Route::match(['put', 'patch'], 'blogUsers/{id}', 'BlogUserController@update')->name('blogUsers.update')->middleware('auth');

Route::delete('blogUsers/{id}', 'BlogUserController@destroy')->name('blogUsers.destroy')->middleware('auth');


Route::get('posts', 'PostController@index')->name('posts.index')->middleware('auth');

Route::get('posts/create', 'PostController@create')->name('posts.create')->middleware('auth');

Route::post('posts', 'PostController@store')->name('posts.store')->middleware('auth');

Route::get('posts/{id}', 'PostController@show')->name('posts.show')->middleware('auth');

Route::get('posts/{id}/edit', 'PostController@edit')->name('posts.edit')->middleware('auth');

Route::match(['put', 'patch'], 'posts/{id}', 'PostController@update')->name('posts.update')->middleware('auth');

Route::delete('posts/{id}', 'PostController@destroy')->name('posts.destroy')->middleware('auth');


Route::get('comments', 'CommentController@index')->name('comments.index')->middleware('auth');

Route::get('comments/create', 'CommentController@create')->name('comments.create')->middleware('auth');

Route::post('comments', 'CommentController@store')->name('comments.store')->middleware('auth');

Route::get('comments/{id}', 'CommentController@show')->name('comments.show')->middleware('auth');

Route::get('comments/{id}/edit', 'CommentController@edit')->name('comments.edit')->middleware('auth');

Route::match(['put', 'patch'], 'comments/{id}', 'CommentController@update')->name('comments.update')->middleware('auth');

Route::delete('comments/{id}', 'CommentController@destroy')->name('comments.destroy')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('admin.login');

Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('admin.register');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');

Route::post('/register/admin', 'Auth\RegisterController@createAdmin');

//Route::view('/home', 'home')->middleware('auth');

Route::view('/admin', 'admin')->name('admin');