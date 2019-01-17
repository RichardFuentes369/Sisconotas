<?php

namespace sisconotas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use sisconotas\Grados;
use Laracasts\Flash\Flash;

class CursosController extends Controller
{
   	/*registrar cursos por año*/
    public function registrarCS(Request $request){
        $grupo = $request->input('grupo'); 
        $anho_id = $request->input('id'); 
        $ultimo = DB::SELECT('SELECT * FROM Grados order by id desc limit 1');
        foreach ($ultimo as $ult){
            $ultimoid=$ult->id;
        }
        $existe = DB::SELECT('SELECT * FROM Grados WHERE nombre = :varnombre and anho_id = :varanho',['varnombre' => $grupo, 'varanho' => $anho_id]);
        if($existe == false){
            $g = new Grados();
            if($ultimo == null){
                $g->id == 1;
            }else{
                $g->id = $ultimoid + 1;
            }
            $g->nombre = $request->input('grupo');
            $g->anho_id = $request->input('id');
            $g->save();
            Flash::success("Se ha registrado el grupo: ".$g->nombre." del año ".$g->Anhos->anho." </br>de forma correcta");
            return back();
        }else{
            Flash::error("El grupo: ".$grupo. " ya existe");
            return back();            
        }
    }   
}
        