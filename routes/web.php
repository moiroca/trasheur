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

Route::get('/view-profile', function () {
    return view('view-profile');
});

Route::get('/view-post', function () {
    return view('view-post');
});

Route::get('/view-listings', function () {
    return view('view-listings');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('upload', [
	'as'   => 'upload-post', 
	'uses' => 'ImageController@postUpload'
]);

Route::post('upload/delete', [
	'as' => 'upload-remove', 
	'uses' =>'ImageController@deleteUpload'
]);

Route::get('server-images', [
	'as'   => 'server-images', 
	'uses' => 'ImageController@getServerImages'
]);

Route::group(['middleware' => 'auth'], function () {

    Route::get('/posts', [
        'as' => 'posts.index',
        'uses' => 'PostController@index'
    ]);

    Route::get('/posts/create', [
    	'as' => 'posts.get_create',
    	'uses' => 'PostController@get_create'
    ]);

    Route::post('/posts/create', [
    	'as' => 'posts.post_create',
    	'uses' => 'PostController@post_create'
    ]);

    Route::get('/profile', [
        'as' => 'profile',
        'uses' => 'ProfileController@index'
    ]);

    Route::get('/posts/{postId}', [
        'as' => 'post.item',
        'uses' => 'ProfileController@index'
    ]);
});

// Admin
Route::get('/admin', [
    'as'   => 'admin.get_user_posts',
    'uses' => 'Admin\AdminController@index'
]);
Route::get('/admin/posts/{item}', [
    'as'   => 'admin.view_user_posts',
    'uses' => 'Admin\AdminController@getUserItem'
]);
