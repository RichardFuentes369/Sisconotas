<?php

namespace sisconotas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use sisconotas\Porcentajes;
use sisconotas\Colegios;
use Laracasts\Flash\Flash;

class PorcentajesController extends Controller
{
    /*Listar Porcentajes*/
    public function listarP(){
        $porcentajes = Porcentajes::orderBy('id','ASC')->paginate(100);
        $colegios = Colegios::orderBy('id','ASC')->where('id','>','0')->paginate(100);
        return view('Administrador.views.porcentajes')->with('porcentajes',$porcentajes)->with('colegios',$colegios);
    }
    /*registrar porcentaje*/
    public function registrarP(Request $request){
        $colegioid = $request->input('idColegio');        
        $existe = DB::SELECT('SELECT * FROM Porcentajes WHERE colegio_id = :varid',['varid' => $colegioid]);
        $ultimo = DB::SELECT('SELECT * FROM Porcentajes order by id desc limit 1');
        foreach ($ultimo as $ult){
            $ultimoid=$ult->id;
        }
        if($existe == false){
            $p = new Porcentajes();
            if($ultimoid = null){
                $p->id = 1;
            }else{
                $p->id = $ultimoid + 1;
            }
            $p->colegio_id = $request->input('idColegio');
            $p->periodo1 = $request->input('nota1');
            $p->periodo2 = $request->input('nota2');
            $p->periodo3 = $request->input('nota3');
            $p->periodo4 = $request->input('nota4');  
            $p->save();
            Flash::success("Se ha registrado el valor de cada periodo del colegio: ".$colegioid." de forma correcta");
            return redirect('administrador/porcentajesl');
        }else{
            Flash::error("No se pudo registrar el valor de cada periodo del colegio: ".$colegioid." <br> porque ya se asigaron anteriormente los valores");
            return redirect('administrador/porcentajesl');
        }
    }
    /*Actualizar porcentajes*/
    public function porcentajesA($id){
        $existe = DB::SELECT('SELECT * FROM Porcentajes WHERE id = :varid',['varid' => $id]);
        return view('Administrador.views.actualizarporcentaje')->with('existe',$existe);
    }

    public function actualizarP(Request $request){
        $id = $request->input('id');
        $periodo1 = $request->input('periodo1');
        $periodo2 = $request->input('periodo2');
        $periodo3 = $request->input('periodo3');
        $periodo4 = $request->input('periodo4');

        $actualizar = DB::UPDATE('UPDATE porcentajes set periodo1 = :varperiodo1, 
            periodo2 = :varperiodo2, periodo3 = :varperiodo3, periodo4 = :varperiodo4 WHERE id = :varid',['varid' => $id,'varperiodo1' => $periodo1,'varperiodo2' =>$periodo2 ,'varperiodo3' => $periodo3,'varperiodo4' => $periodo4,'varid' => $id]);

        Flash::success("Se ha actualizar el porcentaje con id: " .$id." de forma correcta");
        return redirect('administrador/porcentajesl');
    }
    /*Eliminar porcentaje*/
    public function borrarP($id){
        /*Consultas BD*/
        $existe = DB::DELETE('DELETE FROM Porcentajes WHERE colegio_id = :varid',['varid' => $id]);

        Flash::error("Se ha eliminado el valor del porcentaje de el colegio: " . $id . " de forma correcta");
        return redirect('administrador/porcentajesl');
    }
}
