<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//protected routes
Route::group(['before' => 'auth'], function(){
    Route::get('members', 'UsersController@members');
    Route::get('profile', 'UsersController@profile');
});

//authentication routes
Route::get('login', 'UsersController@login');
Route::get('register', 'UsersController@register');
Route::post('register', 'UsersController@store');
Route::get('logout', 'UsersController@logout');
Route::post('login', 'UsersController@authenticate');
Route::get('contact', 'PagesController@contact');
Route::post('contact', 'PagesController@postContact');

//todo: create route to view user profiles
Route::get('profile/{user}', 'UsersController@viewProfile');

//password reset routes
Route::group(['prefix' => 'password'], function(){
    Route::get('/reset', ['uses' => 'PasswordController@remind', 'as' => 'password.remind']);
    Route::post('reset', ['uses' => 'PasswordController@request', 'as' => 'password.request']);
    Route::get('reset/{token}', ['uses' => 'PasswordController@reset', 'as' => 'password.reset']);
    Route::post('reset/{token}', ['uses' => 'PasswordController@update', 'as' => 'password.update']);
});

//home route
Route::get('/', 'HomeController@index');