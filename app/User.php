<?php

namespace sisconotas;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name','lastname','email','birthdate','dni','sexo','category','phone','cellphone','colegio_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
    ];

    /**
     * De Usuario a Colegios envio
     */
    public function user(){
        return $this->hasOne('sisconotas\Colegios');
    }

    /**
     * De Colegios a Usuario recivo
     */
    public function colegios(){
        return $this->belongsTo('sisconotas\Colegios', 'colegio_id');
    }
}
