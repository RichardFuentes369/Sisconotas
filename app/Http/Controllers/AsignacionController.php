<?php

namespace sisconotas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use sisconotas\LAlumnos;
use sisconotas\LMaterias;
use sisconotas\Materias;
use Auth;
use Laracasts\Flash\Flash;
use sisconotas\User;

class AsignacionController extends Controller
{
    /**---------------------------------------Alummnos----------------------------------------**/

	/**Listar alumnos propios del colegio x**/
    public function listarAS($anho,$grupo,$id){
    	$var = Auth::user()->colegios->id;
    	$var2 = "alumno";
    	$listagrupo = DB::SELECT('SELECT * FROM l_alumnos WHERE grado_id = :varid',['varid' => $id]);
    	$listaralumnos = DB::SELECT('SELECT * FROM Users WHERE colegio_id = :varcolegio and category = :varcategoria',['varcolegio' => $var, 'varcategoria' => $var2]);
        return view('Secretario.views.listaalumnos',compact('anho','grupo','id'))->with('listagrupo',$listagrupo)->with('listaralumnos',$listaralumnos);
    }

    /**Insertar alumno**/
    public function registrarAS(Request $request){
        $dni = $request->input('dni'); 
        $grado_id = $request->input('grado');
        $ultimo = DB::SELECT('SELECT * FROM l_alumnos order by id desc limit 1');
        foreach ($ultimo as $ult){
            $ultimoid=$ult->id;
        }
        $usuario = DB::SELECT('SELECT * FROM users where dni = :vardni',['vardni' => $dni]);
	    foreach ($usuario as $user){
	    	$vector = [$user->name, $user->lastname,$user->dni];;
	    }
        $a = new LAlumnos();
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

    /*borrar alumno del curso*/
    public function borrarAS($id){
        $existe = DB::DELETE('DELETE FROM l_alumnos WHERE id = :varid',['varid' => $id]);
        Flash::error("Se ha eliminado el estudiante con id " . $id . " de forma correcta");
        return back();
    } 


    /**---------------------------------------Materias----------------------------------------**/

    /**Listar materias propias del colegio x**/
    public function listarMS($anho,$grupo,$id){
        $var = Auth::user()->colegios->id;
        $listarmaterias = DB::SELECT('SELECT * FROM Materias WHERE colegio_id = :varid',['varid' => $var]);
        $mismaterias = DB::SELECT('SELECT * FROM l_materias WHERE  grado_id = :varid',['varid' => $id ]);
        return view('Secretario.views.listamaterias',compact('anho','grupo','id'))->with('listarmaterias',$listarmaterias)->with('mismaterias',$mismaterias);
    }

    /**Insertar Materia**/
    public function registrarMS(Request $request){
        $materia = $request->input('nombre_materia'); 
        $grado_id = $request->input('grado');
        $ultimo = DB::SELECT('SELECT * FROM l_materias order by id desc limit 1');
        foreach ($ultimo as $ult){
            $ultimoid=$ult->id;
        }
        $m = new LMaterias();
        if($ultimo == null){
            $m->id == 1;
        }else{
            $m->id = $ultimoid + 1;
        }
        $m->nombre_materia = $materia;
        $m->grado_id = $grado_id;
        $m->save();
        Flash::success("Se ha registrado la materia: ".$materia. " de forma correcta");
        return back();
    }

    public function borrarMS($id){
        return 'borrando materia';
    }
}
