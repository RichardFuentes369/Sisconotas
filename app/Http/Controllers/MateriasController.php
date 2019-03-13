<?php

namespace sisconotas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use sisconotas\Materias;
use Laracasts\Flash\Flash;
use Auth;

class MateriasController extends Controller
{
    /***********************************************SECRETARIO*****************************************************/
    /*Listar materias*/
    public function listarMS(){
    	$var = Auth::user()->colegios->id; 
        $materias = Materias::orderBy('id','ASC')->where('colegio_id','=', $var)->paginate(5);
        return view('Secretario.views.materias')->with('materias',$materias);
    }
    /*registrar materia*/
    public function registrarMS(Request $request){
        $colegioid = $request->input('idColegio');
        $nombre_materia = $request->input('materia');        
        $ultimo = DB::SELECT('SELECT * FROM Materias order by id desc limit 1');
        foreach ($ultimo as $ult){
            $ultimoid=$ult->id;
        }
        $existe = DB::SELECT('SELECT * FROM Materias WHERE colegio_id = :varid and nombre_materia = :varnombre',['varid' => $colegioid, 'varnombre' => $nombre_materia]);
        if($existe == false){
            $m = new Materias();
            if($ultimo == null){
                $m->id == 1;
            }else{
                $m->id = $ultimoid + 1;
            }
            $m->colegio_id = $colegioid;
            $m->nombre_materia = $nombre_materia;
            $m->save();
            Flash::success("Se ha registrado la materia ".$m->nombre_materia." de forma correcta");
            return redirect('secretario/materiasl');
        }else{
            Flash::error("No se pudo registrar la materia:  porque ya existe");
            return redirect('secretario/materiasl');
        }
    }
    /*Eliminar materia*/
    public function borrarMS($id){
        /*Consultas BD*/
        $existe = DB::DELETE('DELETE FROM Materias WHERE id = :varid',['varid' => $id]);

        Flash::error("Se ha eliminado la materia con id: " . $id . " de forma correcta");
        return redirect('secretario/materiasl');
    }
}

