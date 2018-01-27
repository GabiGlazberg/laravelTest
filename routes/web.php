<?php

use App\Task;

Route::get('/task', 'TaskController@index');
Route::get('/task/{task}', 'TaskController@show');

Route::get('/', function () {
    return view('welcome', compact('tasks'));
});
