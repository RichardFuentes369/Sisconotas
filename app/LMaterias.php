<?php

namespace sisconotas;

use Illuminate\Database\Eloquent\Model;

class LMaterias extends Model
{
    protected $table = "l_materias";

    protected $fillable = [
        'id','nombre_materia','grado_id',
    ];
}
