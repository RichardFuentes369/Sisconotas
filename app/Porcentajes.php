<?php

namespace sisconotas;

use Illuminate\Database\Eloquent\Model;

class Porcentajes extends Model
{
    protected $table = "porcentajes";

    protected $fillable = [
        'id','periodo1','periodo2','periodo3','periodo4','colegio_id'
    ];

    /**
     * De Colegio a Porcentajes recivo
     */
    public function colegios(){
        return $this->belongsTo('sisconotas\Colegios', 'colegio_id');
    }

    /**
     * De Porcentajes a Colegios envio
     */
    public function porcentajes(){
        return $this->hasOne('sisconotas\Porcentajes');
    }  


}
