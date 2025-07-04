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
    	$existe = DB::SELECT('SELECT * FROM anhos WHERE id = :varid',['varid' => $id]);
        return view('Secretario.views.veranho',compact('existe'));
    }
	/*registrar anhos*/
    public function registrarAS(Request $request){
        $anho = $request->input('anho'); 
        $ultimo = DB::SELECT('SELECT * FROM anhos order by id desc limit 1');
        foreach ($ultimo as $ult){
            $ultimoid=$ult->id;
        }
        $existe = DB::SELECT('SELECT * FROM anhos WHERE colegio_id = :varcolegioid and anho = :varanho',['varcolegioid' => Auth::user()->colegio_id, 'varanho' => $anho]);
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
            $a->ppsemestre = $request->input('ppsemestre');
            $a->fisegundosemestre = $request->input('fisegundosemestre');
            $a->ffsegundosemestre = $request->input('ffsegundosemestre');
            $a->pssemestre = $request->input('pssemestre');
            $a->fitercersemestre = $request->input('fitercersemestre');
            $a->fftercersemestre = $request->input('fftercersemestre');
            $a->ptsemestre = $request->input('ptsemestre');
            $a->ficuartosemestre = $request->input('ficuartosemestre');
            $a->ffcuartosemestre = $request->input('ffcuartosemestre');
            $a->pcsemestre = $request->input('pcsemestre');
            $a->fihabilitacion = $request->input('fihabilitacion');
            $a->ffhabilitacion = $request->input('ffhabilitacion');
            $a->phabilitacion = $request->input('phabilitacion');
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
        $existe = DB::SELECT('SELECT * FROM anhos WHERE id = :varid and anho = :varanho',['varid' => $id, 'varanho' => $anho]);
        return view('Secretario.views.actualizarfecha',compact('id'))->with('existe',$existe);
    }
    /*Actualizando Fecha*/
    public function actualizarAS(Request $request){
        $anho = $request->input('anho');
        $idanho = $request->input('idanho');
        $fi1 = $request->input('fiprimersemestre');
        $ff1 = $request->input('ffprimersemestre');
        $pf1 = $request->input('ppsemestre');
        $fi2 = $request->input('fisegundosemestre');
        $ff2 = $request->input('ffsegundosemestre');
        $pf2 = $request->input('pssemestre');
        $fi3 = $request->input('fitercersemestre');
        $ff3 = $request->input('fftercersemestre');
        $pf3 = $request->input('ptsemestre');
        $fi4 = $request->input('ficuartosemestre');
        $ff4 = $request->input('ffcuartosemestre');
        $pf4 = $request->input('pcsemestre');
        $fih = $request->input('fihabilitacion');
        $ffh = $request->input('ffhabilitacion');
        $ph  = $request->input('phabilitacion');
        $actualizar = DB::UPDATE('UPDATE Anhos set fiprimersemestre = :varfi1, ffprimersemestre = :varff1, ppsemestre = :varpf1, fisegundosemestre = :varfi2, ffsegundosemestre = :varff2, pssemestre = :varpf2, fitercersemestre = :varfi3, fftercersemestre = :varff3, ptsemestre = :varpf3, ficuartosemestre = :varfi4, ffcuartosemestre = :varff4, pcsemestre = :varpf4, fihabilitacion = :varfih, ffhabilitacion = :varffh, phabilitacion = :varph WHERE id = :varanho',['varfi1' => $fi1,'varff1' => $ff1,'varpf1' => $pf1,'varfi2' => $fi2,'varff2' => $ff2,'varpf2' => $pf2,'varfi3' => $fi3,'varff3' => $ff3,'varpf3' => $pf3,'varfi4' => $fi4,'varff4' => $ff4,'varpf4' => $pf4,'varfih' => $fih,'varffh' => $ffh,'varph' => $ph,'varanho' => $idanho]);
        Flash::success("Se han actualizado las fechas con id año: ".$idanho);
        return redirect('secretario/anhosl');
    }
    /*borrar anhos*/
    public function borrarAS($id){
    	$existe = DB::DELETE('DELETE FROM anhos WHERE id = :varid',['varid' => $id]);
        Flash::error("Se ha eliminado el año con id " . $id . " de forma correcta");
        return redirect('secretario/anhosl');
    }
}
