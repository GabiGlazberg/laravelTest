<?php

use App\Task;

Route::get('/task', 'TaskController@index');
Route::get('/task/{task}', 'TaskController@show');


Route::get('/', 'PostController@index');
Route::get('/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('/post/{post}', 'PostController@show');

Route::post('posts/{post}/comments', 'CommentsController@store');

//Route::get('/', function () {
//    return view('welcome');
//});
