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
    return view('pages.index');
});
Route::get('posts','PostsController@index');
Route::post('posts','PostsController@store');
Route::get('posts/create','PostsController@create');
Route::get('posts/{post}','PostsController@show');
Route::post('posts/{post}','PostsController@update');
Route::get('posts/{post}/edit','PostsController@edit');
Route::delete('posts/{post}','PostsController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
