<?php

namespace sisconotas;

use Illuminate\Database\Eloquent\Model;

class LNotas extends Model
{
    protected $table = "l_notas";

    protected $fillable = [
        'id','id_materia','id_alumno','nota1','nota1','nota2','nota3','total',
    ];
}
