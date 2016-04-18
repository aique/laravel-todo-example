<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;

use App\Http\Requests;

class TasksController extends Controller
{
    public function show(Project $project, Task $task)
    {
        return view('tasks.show', compact('project', 'task')); // se pasa el modelo a la vista
    }
}
