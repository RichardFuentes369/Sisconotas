<?php

namespace sisconotas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use sisconotas\Agrupacion;
use Auth;
use Laracasts\Flash\Flash;
use sisconotas\User;

class AgrupacionController extends Controller
{
	/**Listar alumnos propios del colegio x**/
    public function listarAC($anho,$grupo,$id){
    	$var = Auth::user()->colegios->id;
    	$var2 = "alumno";
    	$listagrupo = DB::SELECT('SELECT * FROM Agrupacions WHERE grado_id = :varid',['varid' => $id]);
    	$listaralumnos = DB::SELECT('SELECT * FROM Users WHERE colegio_id = :varcolegio and category = :varcategoria',['varcolegio' => $var, 'varcategoria' => $var2]);
        return view('Secretario.views.notas',compact('anho','grupo','id'))->with('listagrupo',$listagrupo)->with('listaralumnos',$listaralumnos);
    }

    /**Insertar alumno**/
    public function registrarAC(Request $request){
        $dni = $request->input('dni'); 
        $grado_id = $request->input('grado');
        $ultimo = DB::SELECT('SELECT * FROM agrupacions order by id desc limit 1');
        foreach ($ultimo as $ult){
            $ultimoid=$ult->id;
        }
        $usuario = DB::SELECT('SELECT * FROM users where dni = :vardni',['vardni' => $dni]);
	    foreach ($usuario as $user){
	    	$vector = [$user->name, $user->lastname,$user->dni];;
	    }
        $a = new Agrupacion();
        if($ultimo == null){
            $a->id == 1;
        }else{
            $a->id = $ultimoid + 1;
        }
        $a->grado_id = $grado_id;
        $a->nombre_alumno = $vector[0];
        $a->apellido_alumno = $vector[1];
        $a->dni = $vector[2];
        $a->save();
        Flash::success("Se ha registrado el año: ".$a->anho. " de forma correcta");
        return back();
    }   
}
