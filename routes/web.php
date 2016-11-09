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

Route::get('/create-post', function () {
    return view('create-post');
});

Route::get('/view-post', function () {
    return view('view-post');
});

Route::get('/view-listings', function () {
    return view('view-listings');
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

// Admin
Route::get('/admin', 'Admin\AdminController@index');
Route::get('/admin/{item}', 'Admin\AdminController@getUserItem');
