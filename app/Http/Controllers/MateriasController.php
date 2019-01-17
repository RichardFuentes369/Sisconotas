<?php

namespace sisconotas\Http\Controllers;

use Illuminate\Http\Request;
use sisconotas\Materias;

class MateriasController extends Controller
{
    /*Listar Porcentajes*/
    public function listarMS($var){ 
        $materias = Materias::orderBy('id','ASC')->where('colegio_id','=', $var)->paginate(100);
        return view('Secretario.views.materias')->with('materias',$materias);
    }
}

