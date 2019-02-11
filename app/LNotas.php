<?php

namespace sisconotas;

use Illuminate\Database\Eloquent\Model;

class LNotas extends Model
{
    protected $table = "l_notas";

    protected $fillable = [
        'id','nota1','nota2','nota3','nota4','grado_id', 'lmateria_id', 'lalumno_id',
    ];
}
