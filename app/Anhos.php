<?php

namespace sisconotas;

use Illuminate\Database\Eloquent\Model;

class anhos extends Model
{
    protected $table = "anhos";

    protected $fillable = [
        'id','anho','colegio_id',
    ];

    /**
     * De Colegio a Anhos recivo
     */
    public function colegios(){
        return $this->belongsTo('sisconotas\Colegios', 'colegio_id');
    }

    /**
     * De Anhos a Colegios envio
     */
    public function anhos(){
        return $this->hasOne('sisconotas\Anhos');
    }  

    /**
     * De Grados a Anhos recivo
     */
    public function grados(){
        return $this->belongsTo('sisconotas\Anhos', 'anho_id');
    }

    /**
     * De Anhos a Grados envio
     */
    public function anhos2(){
        return $this->hasOne('sisconotas\Grados');
    }  
    
}
