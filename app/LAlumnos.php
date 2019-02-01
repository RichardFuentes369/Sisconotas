<?php

namespace sisconotas;

use Illuminate\Database\Eloquent\Model;

class LAlumnos extends Model
{
    protected $table = "l_alumnos";

    protected $fillable = [
        'id','nombre_alumno','apellido_alumno', 'dni', 'grado_id',
    ];
}
