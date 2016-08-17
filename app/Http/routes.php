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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');


Route::get('/posts/create', 'PostController@create');
Route::get('/posts', 'PostController@index');
Route::get('/posts/{post}', 'PostController@detail');
Route::post('/posts/{post}/comments', 'CommentController@create');
Route::post('/posts', 'PostController@add');


