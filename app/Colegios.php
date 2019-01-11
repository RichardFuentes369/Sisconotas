<?php

namespace sisconotas;

use Illuminate\Database\Eloquent\Model;

class colegios extends Model
{
    protected $table = "colegios";

    protected $fillable = [
        'id','nit','razon_social','direccion','barrio','telefono','correo'
    ];

    /**
     * De Colegio a Usuarios recivo
     */
    public function colegio(){
        return $this->belongsTo('sisconotas\Colegios');
    }
    
    /**
     * De Usuarios a Colegio envio
     */
    public function user(){
        return $this->hasOne('sisconotas\User');
    }   

    /**
     * De Porcentajes a Colegios recivo
     */
    public function porcentajes(){
        return $this->belongsTo('sisconotas\Colegios');
    }

    /**
     * De Colegio a Porcentajes envio
     */
    public function colegio2(){
        return $this->hasOne('sisconotas\Porcentajes');
    }

    /**
     * De Anho a Colegios recivo
     */
    public function anho(){
        return $this->belongsTo('sisconotas\Colegios');
    }

    /**
     * De Colegio a Anho envio
     */
    public function colegio3(){
        return $this->hasOne('sisconotas\Anho');
    }
    


}


