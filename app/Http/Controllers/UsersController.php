<?php

namespace sisconotas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use sisconotas\User;
use Carbon\Carbon;
use Auth;
use Laracasts\Flash\Flash;

class usersController extends Controller
{
    /********************************************ADMINISTRADOR**********************************************/
    public function verR($dni){
        $existe = DB::SELECT('SELECT * FROM users WHERE dni = :vardni',['vardni' => $dni]);
        return view('Administrador.views.verrector',compact('existe'));
    }
    public function registrarR(Request $request){
        $dni = $request->input('dni'); 
        $email = $request->input('email');
        $ultimo = DB::SELECT('SELECT * FROM users order by id desc limit 1');
        foreach ($ultimo as $ult){
            $ultimoid=$ult->id;
        }
        $existe = DB::SELECT('SELECT * FROM users WHERE email = :varcorreo or dni = :vardni',['varcorreo' => $email, 'vardni' => $dni]);
        if($existe == false){
            $u = new User();
            $u->id = $ultimoid+1;
            $u->name = $request->input('name');
            $u->lastname = $request->input('lastname');
            $u->email = $request->input('email');  
            $u->birthdate = $request->input('birthdate');
            $u->dni = $request->input('dni');       
            $u->sexo = $request->input('sexo');
            $u->category = 'rector';
            $u->phone = $request->input('phone');
            $u->cellphone = $request->input('cellphone');
            $u->colegio_id = $request->input('idColegio');
            $u->save();
            Flash::success("Se ha registrado el rector con dni: " .$u->dni." y correo: ".$u->email. " de forma correcta");
            return redirect('administrador/rectoresl');
        }else{
            Flash::error("No se pudo registrar el rector con dni: " .$dni);
            return redirect('administrador/rectoresl');
        }
    }
    public function usuariosA($dni){
        $existe = DB::SELECT('SELECT * FROM users WHERE dni = :vardni',['vardni' => $dni]);
        return view('Administrador.views.actualizarrector')->with('existe',$existe);
    }
    public function actualizarR(Request $request){
        $dni = $request->input('dni');
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $password = $request->input('password');
        $passwd = bcrypt($password);
        if($password == ''){
            $actualizar = DB::UPDATE('UPDATE users set name = :varname, lastname = :varlastname, email = :varcorreo 
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'vardni' =>$dni]);
        }else{
            $actualizar = DB::UPDATE('UPDATE users set name = :varname, lastname = :varlastname, email = :varcorreo, password = :varpassword 
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'vardni' =>$dni,'varpassword' => $passwd]);
        }
        Flash::success("Se ha actualizado el rector con dni: " .$dni);
        return redirect('administrador/rectoresl');
    }
    public function borrarR($dni){
        $existe = DB::DELETE('DELETE FROM users WHERE dni = :vardni',['vardni' => $dni]);
        Flash::error("Se ha eliminado el usuario con cc " . $dni . " de forma correcta");
        return redirect('administrador/rectoresl');
    }
    public function actualizarA(Request $request){    
        $name = $request->input('name');
        $lastname = $request->input('lastname');  
        $email = $request->input('email');  
        $dni = $request->input('dni');
        $sexo = $request->input('sexo');
        $phone = $request->input('phone');
        $birthdate = $request->input('birthdate');
        $cellphone = $request->input('cellphone');
        $password = $request->input('password');
        $passwordencriptada = bcrypt($password);
        $actualizar = DB::UPDATE('UPDATE users set name = :varname, lastname = :varlastname, email = :varcorreo,
             sexo = :varsexo, phone = :varphone, cellphone = :varcellphone, birthdate = :varbirthdate, password = :varpassword
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'varcorreo' => $email,'varsexo' => $sexo,'varphone' => $phone,'varbirthdate' => $birthdate,'varcellphone' => $cellphone,'varpassword' => $passwordencriptada, 'vardni' =>$dni]);
        Auth::logout();
        return redirect('/');
    }

    /********************************************RECTOR**********************************************/
    public function verS($dni){
        $existe = DB::SELECT('SELECT * FROM users WHERE dni = :vardni',['vardni' => $dni]);
        return view('Rector.views.versecretario',compact('existe'));
    }
    public function registrarS(Request $request){
        $dni = $request->input('dni'); 
        $email = $request->input('email');
        $ultimo = DB::SELECT('SELECT * FROM users order by id desc limit 1');
        foreach ($ultimo as $ult){
            $ultimoid=$ult->id;
        }        
        $existe = DB::SELECT('SELECT * FROM users WHERE email = :varcorreo or dni = :vardni',['varcorreo' => $email, 'vardni' => $dni]);
        if($existe == false){
            $u = new User();
            $u->id = $ultimoid+1;
            $u->name = $request->input('name');
            $u->lastname = $request->input('lastname');
            $u->email = $request->input('email');  
            $u->birthdate = $request->input('birthdate');
            $u->dni = $request->input('dni');       
            $u->sexo = $request->input('sexo');
            $u->category = 'secretario';
            $u->phone = $request->input('phone');
            $u->cellphone = $request->input('cellphone');
            $u->colegio_id = Auth::user()->colegios->id;
            $u->save();
            Flash::success("Se ha registrado la secretaria con dni: " .$u->dni." y correo: ".$u->email. " de forma correcta");
            return redirect('rector/secretariasl');
        }else{
            Flash::error("No se pudo registrar la secretaria con dni: " .$dni);
            return redirect('rector/secretariasl');
        }
    }
    public function secretarioA($dni){
        $existe = DB::SELECT('SELECT * FROM users WHERE dni = :vardni',['vardni' => $dni]);
        return view('Rector.views.actualizarsecretario')->with('existe',$existe);
    } 
    public function actualizarS(Request $request){
        $dni = $request->input('dni');
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $password = $request->input('password');
        $passwd = bcrypt($password);
        if($password == ''){
            $actualizar = DB::UPDATE('UPDATE users set name = :varname, lastname = :varlastname, email = :varcorreo 
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'vardni' =>$dni]);
        }else{
            $actualizar = DB::UPDATE('UPDATE users set name = :varname, lastname = :varlastname, email = :varcorreo, password = :varpassword 
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'vardni' =>$dni,'varpassword' => $passwd]);
        }
        Flash::success("Se ha actualizado el secretario con dni: " .$dni);
        return redirect('rector/secretariasl');
    }  
    public function borrarS($dni){
        $existe = DB::DELETE('DELETE FROM users WHERE dni = :vardni',['vardni' => $dni]);
        Flash::error("Se ha eliminado el secretadio con DNI: " . $dni . " de forma correcta");
        return redirect('rector/secretariasl');
    }
    public function verP($dni){
        $existe = DB::SELECT('SELECT * FROM users WHERE dni = :vardni',['vardni' => $dni]);
        return view('Rector.views.verprofesor',compact('existe'));
    }
    public function registrarP(Request $request){
        $dni = $request->input('dni'); 
        $email = $request->input('email');
        $ultimo = DB::SELECT('SELECT * FROM users order by id desc limit 1');
        foreach ($ultimo as $ult){
            $ultimoid=$ult->id;
        }
        $existe = DB::SELECT('SELECT * FROM users WHERE email = :varcorreo or dni = :vardni',['varcorreo' => $email, 'vardni' => $dni]);
        if($existe == false){
            $u = new User();
            $u->id = $ultimoid+1;
            $u->name = $request->input('name');
            $u->lastname = $request->input('lastname');
            $u->email = $request->input('email');  
            $u->birthdate = $request->input('birthdate');
            $u->dni = $request->input('dni');       
            $u->sexo = $request->input('sexo');
            $u->category = 'profesor';
            $u->phone = $request->input('phone');
            $u->cellphone = $request->input('cellphone');
            $u->colegio_id = Auth::user()->colegios->id;
            $u->save();
            Flash::success("Se ha registrado el profesor con dni: " .$u->dni." y correo: ".$u->email. " de forma correcta");
            return redirect('rector/profesoresl');
        }else{
            Flash::error("No se pudo registrar el profesor con dni: " .$dni);
            return redirect('rector/profesoresl');
        }
    }     
    public function profesorA($dni){
        $existe = DB::SELECT('SELECT * FROM users WHERE dni = :vardni',['vardni' => $dni]);
        return view('Rector.views.actualizarprofesor')->with('existe',$existe);
    } 
    public function actualizarP(Request $request){
        $dni = $request->input('dni');
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $password = $request->input('password');
        $passwd = bcrypt($password);
        if($password == ''){
            $actualizar = DB::UPDATE('UPDATE users set name = :varname, lastname = :varlastname, email = :varcorreo 
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'vardni' =>$dni]);
        }else{
            $actualizar = DB::UPDATE('UPDATE users set name = :varname, lastname = :varlastname, email = :varcorreo, password = :varpassword 
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'vardni' =>$dni,'varpassword' => $passwd]);
        }
        Flash::success("Se ha actualizado el profesor con dni: " .$dni);
        return redirect('rector/profesoresl');
    }  
    public function borrarP($dni){
        $existe = DB::DELETE('DELETE FROM users WHERE dni = :vardni',['vardni' => $dni]);
        Flash::error("Se ha eliminado el profesor con DNI: " . $dni . " de forma correcta");
        return redirect('rector/profesoresl');
    }
    public function actualizarRe(Request $request){    
        $name = $request->input('name');
        $lastname = $request->input('lastname');  
        $email = $request->input('email');  
        $dni = $request->input('dni');
        $sexo = $request->input('sexo');
        $phone = $request->input('phone');
        $birthdate = $request->input('birthdate');
        $cellphone = $request->input('cellphone');
        $password = $request->input('password');
        $passwordencriptada = bcrypt($password);
        $actualizar = DB::UPDATE('UPDATE users set name = :varname, lastname = :varlastname, email = :varcorreo,
             sexo = :varsexo, phone = :varphone, cellphone = :varcellphone, birthdate = :varbirthdate, password = :varpassword
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'varcorreo' => $email,'varsexo' => $sexo,'varphone' => $phone,'varbirthdate' => $birthdate,'varcellphone' => $cellphone,'varpassword' => $passwordencriptada, 'vardni' =>$dni]);
        Auth::logout();
        return redirect('/');
    }

    /********************************************SECRETARIO**********************************************/
    public function verPS($dni){
        $existe = DB::SELECT('SELECT * FROM users WHERE dni = :vardni',['vardni' => $dni]);
        return view('Secretario.views.verprofesor',compact('existe'));
    }
    public function registrarPS(Request $request){
        $dni = $request->input('dni'); 
        $email = $request->input('email');
        $ultimo = DB::SELECT('SELECT * FROM users order by id desc limit 1');
        foreach ($ultimo as $ult){
            $ultimoid=$ult->id;
        }
        $existe = DB::SELECT('SELECT * FROM users WHERE email = :varcorreo or dni = :vardni',['varcorreo' => $email, 'vardni' => $dni]);
        if($existe == false){
            $u = new User();
            $u->id = $ultimoid+1;
            $u->name = $request->input('name');
            $u->lastname = $request->input('lastname');
            $u->email = $request->input('email');  
            $u->birthdate = $request->input('birthdate');
            $u->dni = $request->input('dni');       
            $u->sexo = $request->input('sexo');
            $u->category = 'profesor';
            $u->phone = $request->input('phone');
            $u->cellphone = $request->input('cellphone');
            $u->colegio_id = Auth::user()->colegios->id;
            $u->save();
            Flash::success("Se ha registrado el profesor con dni: " .$u->dni." y correo: ".$u->email. " de forma correcta");
            return redirect('secretario/profesoresl');
        }else{
            Flash::error("No se pudo registrar el profesor con dni: " .$dni);
            return redirect('secretario/profesoresl');
        }
    }     
    public function profesorAS($dni){
        $existe = DB::SELECT('SELECT * FROM users WHERE dni = :vardni',['vardni' => $dni]);
        return view('Secretario.views.actualizarprofesor')->with('existe',$existe);
    } 
    public function actualizarPS(Request $request){
        $dni = $request->input('dni');
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $password = $request->input('password');
        $passwd = bcrypt($password);
        if($password == ''){
            $actualizar = DB::UPDATE('UPDATE users set name = :varname, lastname = :varlastname, email = :varcorreo 
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'vardni' =>$dni]);
        }else{
            $actualizar = DB::UPDATE('UPDATE users set name = :varname, lastname = :varlastname, email = :varcorreo, password = :varpassword 
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'vardni' =>$dni,'varpassword' => $passwd]);
        }
        Flash::success("Se ha actualizado el profesor con dni: " .$dni);
        return redirect('secretario/profesoresl');
    }  
    public function verAS($dni){
        $existe = DB::SELECT('SELECT * FROM users WHERE dni = :vardni',['vardni' => $dni]);
        return view('Secretario.views.veralumno',compact('existe'));
    }
    public function registrarAS(Request $request){
        $dni = $request->input('dni'); 
        $email = $request->input('email');
        $ultimo = DB::SELECT('SELECT * FROM users order by id desc limit 1');
        foreach ($ultimo as $ult){
            $ultimoid=$ult->id;
        }
        $existe = DB::SELECT('SELECT * FROM users WHERE email = :varcorreo or dni = :vardni',['varcorreo' => $email, 'vardni' => $dni]);
        if($existe == false){
            $u = new User();
            $u->id = $ultimoid+1;
            $u->name = $request->input('name');
            $u->lastname = $request->input('lastname');
            $u->email = $request->input('email');  
            $u->birthdate = $request->input('birthdate');
            $u->dni = $request->input('dni');       
            $u->sexo = $request->input('sexo');
            $u->category = 'alumno';
            $u->phone = $request->input('phone');
            $u->cellphone = $request->input('cellphone');
            $u->colegio_id = Auth::user()->colegios->id;
            $u->save();
            Flash::success("Se ha registrado el profesor con dni: " .$u->dni." y correo: ".$u->email. " de forma correcta");
            return redirect('secretario/alumnosl');
        }else{
            Flash::error("No se pudo registrar el profesor con dni: " .$dni);
            return redirect('secretario/alumnosl');
        }
    }     
    public function alumnoAS($dni){
        $existe = DB::SELECT('SELECT * FROM users WHERE dni = :vardni',['vardni' => $dni]);
        return view('Secretario.views.actualizaralumno')->with('existe',$existe);
    } 
    public function actualizarAS(Request $request){
        $dni = $request->input('dni');
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $password = $request->input('password');
        $passwd = bcrypt($password);
        if($password == ''){
            $actualizar = DB::UPDATE('UPDATE users set name = :varname, lastname = :varlastname, email = :varcorreo 
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'vardni' =>$dni]);
        }else{
            $actualizar = DB::UPDATE('UPDATE users set name = :varname, lastname = :varlastname, email = :varcorreo, password = :varpassword 
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'vardni' =>$dni,'varpassword' => $passwd]);
        }
        Flash::success("Se ha actualizado el alumno con dni: " .$dni);
        return redirect('secretario/alumnosl');
    }  
    public function borrarAS($dni){
        $existe = DB::DELETE('DELETE FROM users WHERE dni = :vardni',['vardni' => $dni]);
        Flash::error("Se ha eliminado el usuario con cc " . $dni . " de forma correcta");
        return redirect('secretario/alumnosl');
    }
    public function borrarPS($dni){
        $existe = DB::DELETE('DELETE FROM users WHERE dni = :vardni',['vardni' => $dni]);
        Flash::error("Se ha eliminado el profesor con DNI: " . $dni . " de forma correcta");
        return redirect('secretario/profesoresl');
    }
    public function actualizarSe(Request $request){    
        $name = $request->input('name');
        $lastname = $request->input('lastname');  
        $email = $request->input('email');  
        $dni = $request->input('dni');
        $sexo = $request->input('sexo');
        $phone = $request->input('phone');
        $birthdate = $request->input('birthdate');
        $cellphone = $request->input('cellphone');
        $password = $request->input('password');
        $passwordencriptada = bcrypt($password);
        $actualizar = DB::UPDATE('UPDATE users set name = :varname, lastname = :varlastname, email = :varcorreo,
             sexo = :varsexo, phone = :varphone, cellphone = :varcellphone, birthdate = :varbirthdate, password = :varpassword
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'varcorreo' => $email,'varsexo' => $sexo,'varphone' => $phone,'varbirthdate' => $birthdate,'varcellphone' => $cellphone,'varpassword' => $passwordencriptada, 'vardni' =>$dni]);
        Auth::logout();
        return redirect('/');
    }

    /********************************************PROFESOR**********************************************/
    public function verAP(Request $request){
        $fecha = Carbon::parse($request->fecha);
        $anho = $fecha->year;
        $dniProfesor = Auth::user()->dni; 
        $consulta = DB::SELECT('SELECT DISTINCT *
                FROM  l_alumnos, grados, anhos, colegios
                WHERE l_alumnos.grado_id = grados.id
                AND grados.anho_id = anhos.id
                AND anhos.colegio_id = colegios.id
                AND anhos.anho = :varanho
                AND dni_profesor = :vardni
                order by l_alumnos.apellido_alumno asc', ['vardni' => $dniProfesor,'varanho' => $anho]);

        $consultagrado = DB::SELECT('SELECT * FROM grados, anhos WHERE dni_profesor = :vardni
                                    AND grados.anho_id = anhos.id
                                    AND anhos.anho = :varanho', ['vardni' => $dniProfesor, 'varanho' => $anho]);
        return view('Profesor.views.alumnos',compact('consulta'))->with('consultagrado',$consultagrado);
    }
    public function actualizarPr(Request $request){    
        $name = $request->input('name');
        $lastname = $request->input('lastname');  
        $email = $request->input('email');  
        $dni = $request->input('dni');
        $sexo = $request->input('sexo');
        $phone = $request->input('phone');
        $birthdate = $request->input('birthdate');
        $cellphone = $request->input('cellphone');
        $password = $request->input('password');
        $passwordencriptada = bcrypt($password);
        $actualizar = DB::UPDATE('UPDATE users set name = :varname, lastname = :varlastname, email = :varcorreo,
             sexo = :varsexo, phone = :varphone, cellphone = :varcellphone, birthdate = :varbirthdate, password = :varpassword
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'varcorreo' => $email,'varsexo' => $sexo,'varphone' => $phone,'varbirthdate' => $birthdate,'varcellphone' => $cellphone,'varpassword' => $passwordencriptada, 'vardni' =>$dni]);
        Auth::logout();
        return redirect('/');
    }

    /********************************************ALUMNO**********************************************/
    public function actualizarAl(Request $request){    
        $name = $request->input('name');
        $lastname = $request->input('lastname');  
        $email = $request->input('email');  
        $dni = $request->input('dni');
        $sexo = $request->input('sexo');
        $phone = $request->input('phone');
        $birthdate = $request->input('birthdate');
        $cellphone = $request->input('cellphone');
        $password = $request->input('password');
        $passwordencriptada = bcrypt($password);
        $actualizar = DB::UPDATE('UPDATE users set name = :varname, lastname = :varlastname, email = :varcorreo,
             sexo = :varsexo, phone = :varphone, cellphone = :varcellphone, birthdate = :varbirthdate, password = :varpassword
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'varcorreo' => $email,'varsexo' => $sexo,'varphone' => $phone,'varbirthdate' => $birthdate,'varcellphone' => $cellphone,'varpassword' => $passwordencriptada, 'vardni' =>$dni]);
        Auth::logout();
        return redirect('/');
    }
}