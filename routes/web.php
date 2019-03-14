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

Route::group(['middleware' => 'auth'], function () {
Route::get('/posts', 'PostsController@index')->name('posts.index')-> middleware('auth');
Route::get('/posts/create', 'PostsController@create')->name('posts.create');
Route::get('/posts/{post}', 'PostsController@show')->name('posts.show');
Route::get('/posts/{post}/edit', 'PostsController@edit')->name('posts.edit');
Route::post('/posts/store', 'PostsController@store')->name('posts.store');
Route::get('/posts/post/{id}', 'PostsController@destroy')->name('posts.destroy');
Route::put('/posts/{id}', 'PostsController@update')->name('posts.update');
});
Auth::routes();
Route::get('/home','PostsController@index')->name('home');
