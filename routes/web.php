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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/posts/create', [
    	'as' => 'posts.get_create',
    	'uses' => 'PostController@get_create'
    ]);

    Route::post('/posts/create', [
    	'as' => 'posts.post_create',
    	'uses' => 'PostController@post_create'
    ]);
});