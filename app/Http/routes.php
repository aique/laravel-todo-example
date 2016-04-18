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

// asocia un modelo a una ruta

Route::model('tasks', 'Task');
Route::model('projects', 'Project');

Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController'); // rutas anidadas

// sustituyen los identificadores por slugs

Route::bind('tasks', function($value) {
	return App\Task::whereSlug($value)->first();
});

Route::bind('projects', function($value) {
	return App\Project::whereSlug($value)->first();
});