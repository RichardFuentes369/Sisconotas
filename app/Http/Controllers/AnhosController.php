<?php

namespace sisconotas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use sisconotas\Anhos;
use Auth;
use Laracasts\Flash\Flash;


class AnhosController extends Controller
{  

    /**----------------------------------SECRETARIA---------------------------------------------------**/
    /*ver anhos*/
    public function verAS($id){
    	$existe = DB::SELECT('SELECT * FROM Anhos WHERE id = :varid',['varid' => $id]);
        return view('Secretario.views.veranho',compact('existe'));
    }
	/*registrar anhos*/
    public function registrarAS(Request $request){
        $anho = $request->input('anho'); 
        $ultimo = DB::SELECT('SELECT * FROM Anhos order by id desc limit 1');
        foreach ($ultimo as $ult){
            $ultimoid=$ult->id;
        }
        $existe = DB::SELECT('SELECT * FROM Anhos WHERE colegio_id = :varcolegioid and anho = :varanho',['varcolegioid' => Auth::user()->colegio_id, 'varanho' => $anho]);
        if($existe == false){
            $a = new Anhos();
            if($ultimo == null){
                $a->id == 1;
            }else{
                $a->id = $ultimoid + 1;
            }
            $a->anho = $request->input('anho');
            $a->fiprimersemestre = $request->input('fiprimersemestre');
            $a->ffprimersemestre = $request->input('ffprimersemestre');
            $a->fisegundosemestre = $request->input('fisegundosemestre');
            $a->ffsegundosemestre = $request->input('ffsegundosemestre');
            $a->fitercersemestre = $request->input('fitercersemestre');
            $a->fftercersemestre = $request->input('fftercersemestre');
            $a->ficuartosemestre = $request->input('ficuartosemestre');
            $a->ffcuartosemestre = $request->input('ffcuartosemestre');
            $a->colegio_id = Auth::user()->colegios->id;
            $a->save();
            Flash::success("Se ha registrado el año: ".$a->anho. " de forma correcta");
            return redirect('secretario/anhosl');
        }else{
            Flash::error("No se pudo registrar el año: ".$anho);
            return redirect('secretario/anhosl');
        }
    }   
    /*Actualizar Fecha corte anhos*/
    public function fechacorteAS($id,$anho){
        $existe = DB::SELECT('SELECT * FROM Anhos WHERE id = :varid and anho = :varanho',['varid' => $id, 'varanho' => $anho]);
        return view('Secretario.views.actualizarfecha',compact('id'))->with('existe',$existe);
    }
    /*Actualizando Fecha*/
    public function actualizarAS(Request $request){
        $anho = $request->input('anho');
        $idanho = $request->input('idanho');
        $fi1 = $request->input('fiprimersemestre');
        $ff1 = $request->input('ffprimersemestre');
        $fi2 = $request->input('fisegundosemestre');
        $ff2 = $request->input('ffsegundosemestre');
        $fi3 = $request->input('fitercersemestre');
        $ff3 = $request->input('fftercersemestre');
        $fi4 = $request->input('ficuartosemestre');
        $ff4 = $request->input('ffcuartosemestre');
        $actualizar = DB::UPDATE('UPDATE Anhos set fiprimersemestre = :varfi1, ffprimersemestre = :varff1, fisegundosemestre = :varfi2, ffsegundosemestre = :varff2, fitercersemestre = :varfi3, fftercersemestre = :varff3, ficuartosemestre = :varfi4, ffcuartosemestre = :varff4 WHERE id = :varanho',['varfi1' => $fi1,'varff1' => $ff1,'varfi2' => $fi2,'varff2' => $ff2,'varfi3' => $fi3,'varff3' => $ff3,'varfi4' => $fi4,'varff4' => $ff4,'varanho' => $idanho]);
        Flash::success("Se han actualizado las fechas con id año: ".$idanho);
        return redirect('secretario/anhosl');
    }
    /*borrar anhos*/
    public function borrarAS($id){
    	$existe = DB::DELETE('DELETE FROM Anhos WHERE id = :varid',['varid' => $id]);
        Flash::error("Se ha eliminado el año con id " . $id . " de forma correcta");
        return redirect('secretario/anhosl');
    }
}
