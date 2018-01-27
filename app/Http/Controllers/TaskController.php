<?php

namespace App\Http\Controllers;

use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('task/index', compact('tasks'));
    }

    public function show(Task $task)
    {
        return view('task/show', compact('task'));
    }
}
