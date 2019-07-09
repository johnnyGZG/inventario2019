<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

/*oute::group([
	'prefix' => 'admin', 
	'namespace' => 'Admin', 
	'middleware' => 'auth'
], function(){
	Route::get('/', 'AdminController@index')->name('dashboard');
	Route::get('posts', 'PostsController@index')->name('admin.posts.index');
	Route::get('posts/create', 'PostsController@create')->name('admin.posts.create');
	Route::post('posts', 'PostsController@store')->name('admin.posts.store');
	Route::get('posts/{post}', 'PostsController@edit')->name('admin.posts.edit');
	Route::put('posts/{post}', 'PostsController@update')->name('admin.posts.update');
	Route::delete('posts/{post}', 'PostsController@destroy')->name('admin.posts.destroy');
	Route::post('posts/{post}/photos', 'PhotosController@store')->name('admin.posts.photos.store');
	Route::delete('posts/{photo}','PhotosController@destroy')->name('admin.photos.destroy');
});*/

Route::group([
	'prefix' => 'admin',
	'namespace' => 'Admin',
	'middleware' => 'auth'
], function(){
	Route::get('/', 'AdminController@index')->name('dashboard');
	Route::get('producto/create', 'ProductoController@create')->name('admin.productos.create');
	Route::post('producto', 'ProductoController@store')->name('admin.productos.store');
});


// Authentication Routes...
//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//Route::post('login', 'Auth\LoginController@login');
//Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');