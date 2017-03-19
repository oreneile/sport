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


use Illuminate\Support\Facades\Route;
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::any('/about','HomeController@about');
Route::any('/events','HomeController@event');
Route::any('/gallery','HomeController@gallery');
Route::any('/contacts','HomeController@contact');

Route::any('/dashboard/events','AdminController@event');
Route::any('/dashboard/gallery','AdminController@gallery');
Route::any('/dashboard/about','AdminController@about');
Route::any('/dashboard/about/store','AdminController@aboutStore');
Route::any('/delete/event/{id}','AdminController@delete');
Route::any('/new/event/','AdminController@create');
Route::any('/new/event/store','AdminController@newStore');
Route::any('/edit/event/{id}','AdminController@edit');



Route::any('dashboards','AdminController@index');