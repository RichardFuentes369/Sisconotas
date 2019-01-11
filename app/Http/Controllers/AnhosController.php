<?php

namespace sisconotas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use sisconotas\Anhos;
use Auth;
use Laracasts\Flash\Flash;


class AnhosController extends Controller
{  
    /*ver anhos*/
    public funcTion verAS($id){
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
            $a->colegio_id = Auth::user()->colegios->id;
            $a->save();
            Flash::success("Se ha registrado el año: ".$a->anho. " de forma correcta");
            return redirect('secretario/anhosl');
        }else{
            Flash::error("No se pudo registrar el año: ".$anho);
            return redirect('secretario/anhosl');
        }
    }   

    /*actualizar anhos*/
    public funcTion anhoAS($id){
    	$existe = DB::SELECT('SELECT * FROM Anhos WHERE id = :varid',['varid' => $id]);
        return view('Secretario.views.actualizaranho')->with('existe',$existe);
    }

    /*actualizado anhos*/
    public funcTion actualizarAS(Request $request){
    	$anho = $request->input('anho');
        $actualizar = DB::UPDATE('UPDATE Anhos set anho = :varanho WHERE id = :varid',['varanho' => $anho,'varid' =>$id]);
        Flash::success("Se ha actualizado el año con id: " .$id);
        return redirect('secretario/anhosl');
    }

    /*borrar anhos*/
    public function borrarAS($id){
    	$existe = DB::DELETE('DELETE FROM Anhos WHERE id = :varid',['varid' => $id]);
        Flash::error("Se ha eliminado el año con id " . $id . " de forma correcta");
        return redirect('secretario/anhosl');
    }
}
