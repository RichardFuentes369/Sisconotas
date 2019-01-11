<?php

namespace sisconotas\Http\Controllers;

use sisconotas\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class LoginController extends Controller
{

    /*Iniciar Session*/
    public function login(Request $request){
        $credentials = $this->validate(request(), [
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credentials)){
            $consulta = DB::SELECT('SELECT category FROM Users WHERE email = :varemail',['varemail' => $credentials['email']]);
            foreach ($consulta as $con){
                if(($con->category) == 'administrador'){
                    return view('Administrador.views.index');
                }else if(($con->category) == 'rector'){
                    return view('Rector.views.index');
                }else if(($con->category) == 'secretario'){
                    return view('Secretario.views.index');
                }else if(($con->category) == 'profesor'){
                    return view('Profesor.views.index');
                }else if(($con->category) == 'alumno'){
                    return view('Alumno.views.index');
                }
            }
        }else{
            return view('Home.views.login');
        }    
    }

    /*Cerrar Session*/
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    

}

