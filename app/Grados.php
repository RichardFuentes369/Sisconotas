<?php

namespace sisconotas;

use Illuminate\Database\Eloquent\Model;

class Grados extends Model
{
    protected $table = "grados";

    protected $fillable = [
        'id','nombre','anho_id',
    ];

    /**
     * De Anhos a Grados recivo
     */
    public function anhos(){
        return $this->belongsTo('sisconotas\Anhos', 'anho_id');
    }

    /**
     * De Grados a Anhos envio
     */
    public function grados(){
        return $this->hasOne('sisconotas\Grados');
    }  
}
