<?php

namespace sisconotas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use sisconotas\User;
use Auth;
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

    /*Actualizar Profesor*/   
    public function profesorAM($id){
        $existe = DB::SELECT('SELECT * FROM Grados WHERE id = :varid',['varid' => $id]);
        $profesores = User::orderBy('id','ASC')->where('category', 'profesor')->where('colegio_id', Auth::user()->colegios->id )->paginate(10);
        return view('Secretario.views.actualizarprofesorencargado')->with('existe',$existe)->with('profesores',$profesores)->with('id',$id);
    } 
    /*Actualizando Profesor*/
    public function actualizarAS(Request $request){
        $id = $request->input('idactualizar');
        $dni = $request->input('dni');
        $consulta = DB::SELECT('SELECT * FROM Users WHERE dni = :varid',['varid' => $dni]);
        foreach ($consulta as $cons){
            $nombre=$cons->name;
            $apellido=$cons->lastname;
            $documento=$cons->dni;
        }
        $actualizar = DB::UPDATE('UPDATE Grados set nombre_profesor = :varname, dni_profesor = :vardni WHERE id = :varid',['varname' => $nombre." ".$apellido,'vardni' => $documento,'varid' => $id]);
        
        Flash::success("Se ha actualizado el profesor del grupo con id: ".$id." de forma correcta");
        return redirect('secretario/anhosl');
    }  
}
        
