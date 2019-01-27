<?php

namespace sisconotas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use sisconotas\Users;
use sisconotas\Grados;
use Laracasts\Flash\Flash;

class CursosController extends Controller
{
   	/*registrar cursos por año*/
    public function registrarCS(Request $request){
        $grupo = $request->input('grupo'); 
        $anho = $request->input('id_anho'); 
        $dni = $request->input('name');
        $consulta_usuario = DB::SELECT('SELECT * FROM Users WHERE dni = :vardni',['vardni'=>$dni]);
        foreach ($consulta_usuario as $c_u){
            $datos_usuario= [$c_u->name,$c_u->lastname,$c_u->dni];
        }
        $consulta_grado = DB::SELECT('SELECT * FROM Grados');
        foreach ($consulta_grado as $c_g){
            $datos_grado = $c_g->id;
        }
        $g = new Grados();
        if($consulta_grado == null){
            $g->id == 1;
        }else{
            $g->id = $datos_grado + 1;
        }
        $g->nombre = $grupo;
        $g->nombre_profesor = $datos_usuario[0]." ".$datos_usuario[1];
        $g->dni_profesor = $datos_usuario[2];
        $g->anho_id = $anho;
        $g->save();
        Flash::success("Se ha registrado el grado: ".$grupo." <br> y el profesor encargado es: ".$g->nombre_profesor. " <br> en el grado con id ".$g->id);
        return back();
    }

    /*borrar cursos*/
    public function borrarCS($id){
        $existe = DB::DELETE('DELETE FROM Grados WHERE id = :varid',['varid' => $id]);
        Flash::error("Se ha eliminado el grado con id " . $id . " de forma correcta");
        return back();
    }   
}
        
