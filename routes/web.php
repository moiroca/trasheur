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

Route::get('/', [
	'as'   => 'upload', 
	'uses' => 'ImageController@getUpload'
]);

Route::post('upload', [
	'as'   => 'upload-post', 
	'uses' => 'ImageController@postUpload'
]);

Route::post('upload/delete', [
	'as' => 'upload-remove', 
	'uses' =>'ImageController@deleteUpload'
]);

Route::get('server-images', [
	'as' => 'server-images', 
	'uses' => 'ImageController@getServerImages'
]);

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