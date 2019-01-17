<?php

namespace sisconotas;

use Illuminate\Database\Eloquent\Model;

class Agrupacion extends Model
{
    protected $table = "agrupacions";

    protected $fillable = [
        'id', 'nombre_alumno', 'apellido_alumno', 'dni', 'periodo1', 'periodo2', 'periodo3', 'periodo4', 'grado_id', 
    ];
}

