<?php

namespace sisconotas;

use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    protected $table = "materias";

    protected $fillable = [
        'id','nombre_materia','colegio_id',
    ];

    /**
     * De Colegio a Materias recivo
     */
    public function colegios(){
        return $this->belongsTo('sisconotas\Colegios', 'colegio_id');
    }

    /**
     * De Materias a Colegios envio
     */
    public function materias(){
        return $this->hasOne('sisconotas\Materias');
    }   

}
