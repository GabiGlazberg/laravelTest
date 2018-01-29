<?php

use App\Task;

Route::get('/task', 'TaskController@index');
Route::get('/task/{task}', 'TaskController@show');


Route::get('/', 'PostController@index')->name('home');
Route::get('/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('/post/{post}', 'PostController@show');

Route::post('posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');


//Route::get('/', function () {
//    return view('welcome');
//});
