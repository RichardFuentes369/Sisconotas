<?php

namespace sisconotas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use sisconotas\Colegios;
use sisconotas\User;
use sisconotas\Anhos;
use sisconotas\Grados;
use Laracasts\Flash\Flash;
use Auth;

class ColegiosController extends Controller
{
    /*Listar todos los colegios*/
    public function listarC(){
        $colegios = Colegios::orderBy('id','ASC')->where('id','>','0')->paginate(10);
        return view('Administrador.views.colegios')->with('colegios',$colegios);
    }

    /*Listar todos los rectores*/
    public function listarR(){
        $colegios = Colegios::orderBy('id','ASC')->where('id','>','0')->paginate(100);
        $rectores = User::orderBy('id','ASC')->where('category', 'rector')->paginate(10);
        return view('Administrador.views.rectores')->with('colegios',$colegios)->with('rectores',$rectores);
    }

    /*Listar Secretarias por colegio*/
    public function listarS(){
        $secretarios = User::orderBy('id','ASC')->where('category', 'secretario')->where('colegio_id', Auth::user()->colegios->id )->paginate(10);
        return view('Rector.views.secretarios')->with('secretarios',$secretarios);
    }

    /*Listar Profesores por colegio*/
    public function listarP(){
        $profesores = User::orderBy('id','ASC')->where('category', 'profesor')->where('colegio_id', Auth::user()->colegios->id )->paginate(10);
        return view('Rector.views.profesores')->with('profesores',$profesores);
    }

    /*Listar Profesores por colegio secretario*/
    public function listarPS(){
        $profesores = User::orderBy('id','ASC')->where('category', 'profesor')->where('colegio_id', Auth::user()->colegios->id )->paginate(10);
        return view('Secretario.views.profesores')->with('profesores',$profesores);
    }

    /*Listar Alumnos por colegio*/
    public function listarA(){
        $alumnos = User::orderBy('id','ASC')->where('category', 'alumno')->where('colegio_id', Auth::user()->colegios->id )->paginate(10);
        return view('Rector.views.alumnos')->with('alumnos',$alumnos);
    }

    /*Listar Alumnos por secretario*/
    public function listarAS(){
        $alumnos = User::orderBy('id','ASC')->where('category', 'alumno')->where('colegio_id', Auth::user()->colegios->id )->paginate(10);
        return view('Secretario.views.alumnos')->with('alumnos',$alumnos);
    }

    /*Listar Años por secretario*/
    public function listarCAS(){
        $anhos = Anhos::orderBy('id','ASC')->where('colegio_id', Auth::user()->colegios->id )->paginate(10);
        return view('Secretario.views.anhos')->with('anhos',$anhos);
    }

    /*Listar Cursos por año por secretaria*/
    public function listarCS($id,$anho){
        $curso = Grados::orderBy('id','ASC')->where('anho_id', $id )->paginate(10);
        return view('Secretario.views.grupos',compact('anho','id'))->with('curso',$curso);
    }

    /*ver colegio*/
    public function verC($nit){
        /*consulta*/
        $existe = DB::SELECT('SELECT * FROM Colegios WHERE nit = :varnit',['varnit' => $nit]);
        return view('Administrador.views.vercolegio',compact('existe'));
    }

    /*Registrar colegios*/
    public function registrarC(Request $request){
        $nit = $request->input('nit'); 
        $email = $request->input('correo');
        $ultimo = DB::SELECT('SELECT * FROM Colegios order by id desc limit 1');
        foreach ($ultimo as $ult){
            $ultimoid=$ult->id;
        }
        $existe = DB::SELECT('SELECT * FROM Colegios WHERE correo = :varcorreo or nit = :varnit',['varcorreo' => $email, 'varnit' => $nit]);
        if($existe == false){
            $c = new Colegios();
            if($ultimoid = null){
                $c->id = 1;
            }else{
                $c->id = $ultimoid+1;
            }
            $c->nit = $request->input('nit');
            $c->razon_social = $request->input('razon_social');
            $c->pais = $request->input('pais');  
            $c->departamento = $request->input('departamento');  
            $c->barrio = $request->input('barrio');  
            $c->ciudad = $request->input('ciudad');  
            $c->direccion = $request->input('direccion');  
            $c->telefono = $request->input('telefono');
            $c->correo = $request->input('correo');       
            $c->save();
            Flash::success("Se ha registrado el colegio con nit: " .$c->nit." y nombre: ".$c->razon_social. " de forma correcta");
            return redirect('administrador/colegiosl');
        }else{
            Flash::error("No se pudo registrar el colegio con nit: " .$c->nit);
            return redirect('administrador/colegiosl');
        }
    }

    /*Actualizar colegios*/
    public function colegioA($nit){
        $existe = DB::SELECT('SELECT * FROM Colegios WHERE nit = :varnit',['varnit' => $nit]);
        return view('Administrador.views.actualizarcolegio')->with('existe',$existe);
    }

    public function actualizarC(Request $request){
        $nit = $request->input('nit');
        $razon_social = $request->input('razon');
        $direccion = $request->input('direccion');
        $barrio = $request->input('barrio');
        $telefono = $request->input('telefono');
        $correo = $request->input('correo');
        $actualizar = DB::UPDATE('UPDATE Colegios set razon_social = :varrazon, 
            direccion = :vardireccion, barrio = :varbarrio, correo = :varcorreo, telefono = :vartelefono WHERE nit = :varnit',['varrazon' => $razon_social,'vardireccion' => $direccion,'varbarrio' =>$barrio ,'varcorreo' => $correo,'vartelefono' => $telefono,'varnit' => $nit]);
        Flash::success("Se ha actualizado el colegio con nit: " .$nit);
        return redirect('administrador/colegiosl');
    }
    
    /*Eliminar colegios*/
    public function borrarC($nit){
        $existe = DB::DELETE('DELETE FROM Colegios WHERE nit = :varnit',['varnit' => $nit]);
        Flash::error("Se ha eliminado el colegio con nit: " . $nit . " de forma correcta");
        return redirect('administrador/colegiosl');
    }
}
