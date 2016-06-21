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

Route::get("/","UserController@index");
Route::Post("/login","UserController@loginUser");
Route::Post("/logout","UserController@logout");
Route::get("/sign_in","UserController@signIn");
Route::get("/sign_up","UserController@signUp");
Route::Post("/createUser","UserController@createUser");

Route::get("/article","ArticleController@article");
Route::Post("/article","ArticleController@getArticleListByCatalogue");
Route::Post("/article/new","ArticleController@newArticle");
Route::get("/article/{id}","ArticleController@getArticle");
Route::get("/addArticle","ArticleController@addArticle");

Route::get("/creation","SharedCreationController@sharedCreation");
Route::Post("/creation","SharedCreationController@getByCatalogue");
Route::get("/creation/{id}","SharedCreationController@getCreation");

Route::get("/member",function(){
  return view('footer/member');
});
Route::get("/link",function(){
  return view('footer/link');
});
Route::get("/siteMap",function(){
  return view('footer/siteMap');
});
