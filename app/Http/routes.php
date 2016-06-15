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

Route::get("/","UserController@getUser");
Route::Post("/login","UserController@loginUser");
Route::Post("/logout","UserController@logout");
Route::get("/sign_in","UserController@signIn");
Route::get("/sign_up","UserController@signUp");
Route::get("/sign_in_params","UserController@signInParams");
Route::get("/article","ArticleController@index");
