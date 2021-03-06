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

Route::get('/', 'WelcomeController@index');

Route::get('dashboard', ['as'   => 'dashboard_path',
                         'uses' => 'DashboardController@index']);

Route::resource('cyberpunks', 'CyberpunksController');
Route::resource('courses', 'CoursesController');

Route::controllers([
	'auth'     => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
