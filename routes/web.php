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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/post', 'PostController')->middleware('can:create-post')->except(['index']);

Route::get('/post', 'PostController@index')->name('post.index');

Route::post('/post/{post}/comments', 'CommentsController@store');

Route::resource('/admin', 'AdministrateController')->middleware('can:administrate-users');




