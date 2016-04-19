<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // especifica qué campos serán almacenados en la base de datos, evita errores del tipo MassAssignment

    protected $fillable = ['name', 'slug'];

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
