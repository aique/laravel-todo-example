<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Project;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

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

    public function create() // muestra el formulario de alta
    {
        return view('projects.create');
    }

    public function store() // procesa la petición del formulario de alta
    {
        $input = Input::all();
        Project::create($input);

        return Redirect::route('projects.index')->with('message', 'Project created'); // with pasa una variable flash (de un sólo uso) a la vista
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return Redirect::route('projects.index')->with('message', 'Project deleted'); // with pasa una variable flash (de un sólo uso) a la vista
    }
}
