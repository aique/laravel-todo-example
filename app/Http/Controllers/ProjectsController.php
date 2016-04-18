<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Project;
use Illuminate\Routing\Controller;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects')); // se pasan todos los proyectos a la vista
    }

    public function edit(Project $project)
    {
        return view('projects.show', compact('project')); // se pasa el modelo a la vista
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project')); // se pasa el modelo a la vista
    }
}
