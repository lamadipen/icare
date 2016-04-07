<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Front\HomePageController@index');
Route::get('/home', 'Front\HomePageController@index');
Route::get('contact', 'Front\ContactController@index');
Route::get('categories', 'Front\CategoryController@index');
Route::get('product', 'Front\ProductController@index');
Route::get('product/{id}', 'Front\ProductController@show');
Route::get('fpage/{id}', 'Front\FrontendPageController@show');
Route::resource('inquiry', 'Front\InquiryController');
Route::get('categories/{id}','Front\CategoryController@show');

Route::group(['prefix' => 'admin'], function () {
	Route::get('/','Admin\AdminHomeController@index');
    Route::get('home', 'Admin\AdminHomeController@index');
    Route::resource('user', 'Admin\UserController');
    Route::resource('category', 'Admin\CategoryController');
    Route::resource('page', 'Admin\PageController');
    Route::resource('inquiry', 'Admin\InquiryController');
    Route::resource('product', 'Admin\ProductController');
    
});


Route::controllers([
    'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
