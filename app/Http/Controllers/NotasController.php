<?php

namespace sisconotas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use sisconotas\User;
use sisconotas\LNotas;
use Carbon\Carbon;
use Auth;
use Laracasts\Flash\Flash;

class NotasController extends Controller
{
    /*******************************************+PROFESORES******************************************++++*/
    /*Listar Alumnos*/
    public function listarA(Request $request){
    	$fecha = Carbon::parse($request->fecha);
        $anho = $fecha->year;
        $dniProfesor = Auth::user()->dni; 
        $consulta = DB::SELECT('SELECT DISTINCT l_alumnos.id,l_alumnos.nombre_alumno,l_alumnos.apellido_alumno,l_alumnos.dni,l_alumnos.grado_id
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
        return view('Profesor.views.alumnos-notas',compact('consulta'))->with('consultagrado',$consultagrado);
    }
    /*Listar materias profesor*/
    public function listarMN(Request $request,$grado_id,$id,$dni){
        $fecha = Carbon::parse($request->fecha);
        $anho = $fecha->year;
        $consulta_materias = DB::SELECT('SELECT * FROM l_materias WHERE grado_id = :vargrado', ['vargrado' => $grado_id]);
        return view('Profesor.views.notas')->with('dni',$dni)->with('consulta_materias',$consulta_materias);
    }
    /*Listar notas profesor*/
    public function listarND(Request $request,$grado_id,$id_materia,$nombre_materia,$dni){
        $fecha = Carbon::parse($request->fecha);
        $anho = $fecha->year;
        $colegio_id = Auth::user()->colegio_id;
        $consulta_idalumno =DB::SELECT('SELECT id FROM l_alumnos WHERE dni = :vardni',['vardni' => $dni]); 
        foreach ($consulta_idalumno as $idal){
            $ultimoid=$idal->id;
        }
        $consulta_notas = DB::SELECT('SELECT * FROM l_notas WHERE grado_id = :vargrado 
                            AND  lalumno_id = :varalumno AND lmateria_id = :varmateria',['vargrado' => $grado_id, 'varalumno' => $ultimoid, 'varmateria' => $id_materia]);
        $consulta_alumnoid = DB::SELECT('SELECT * FROM l_alumnos WHERE grado_id = :vargradoid and dni = :vardni',['vargradoid' => $grado_id, 'vardni' => $dni]);
        foreach ($consulta_alumnoid as $id){
            $idalumno=$id->id;
        }
        $consultaporcentajes = DB::SELECT('SELECT anhos.ppsemestre,anhos.pssemestre,anhos.ptsemestre,anhos.pcsemestre,
            anhos.phabilitacion FROM anhos WHERE anhos.anho = :varanho AND anhos.colegio_id = :varcolegio',['varanho' => $anho,'varcolegio' => $colegio_id]);

        return view('Profesor.views.misnotas',compact('consulta_notas'))->with('nombre_materia',$nombre_materia)->with('id_materia',$id_materia)->with('idalumno',$idalumno)->with('grado_id',$grado_id)->with('consultaporcentajes',$consultaporcentajes);
    }
    /*actualizar nota */
    public function profesorAN(Request $request, $id){
        $existe = DB::SELECT('SELECT * FROM l_notas WHERE id = :varid',['varid' => $id]);
        return view('Profesor.views.actualizarnota',compact('existe'))->with('id',$id);
    }
    /*Actualizando nota*/
    public function actualizarAS(Request $request){
        $id = $request->input('id');
        $nota1 = $request->input('nota1');
        $nota2 = $request->input('nota2');
        $nota3 = $request->input('nota3');
        $nota4 = $request->input('nota4');
        $habilitacion = $request->input('habilitacion');
        $actualizar = DB::UPDATE('UPDATE l_notas set nota1 = :varnota1, nota2 = :varnota2, nota3 = :varnota3, nota4 = :varnota4, habilitacion = :varhabilitacion 
            WHERE id = :varid',['varnota1' => $nota1,'varnota2' => $nota2,'varnota3' => $nota3,'varnota4' => $nota4,'varid' => $id, 'varhabilitacion' => $habilitacion]);
        Flash::success("Se ha actualizado la nota con de forma correcta");
        return redirect('profesor/listarAN');
    }
    /*registrar nota*/
    public function registrarNAP(Request $request){
        $existe = DB::SELECT('SELECT * FROM l_notas order by id desc limit 1');
        foreach ($existe as $ult){
            $ultimoid=$ult->id;
        }
        $n = new LNotas();
        if($existe == null){
            $n->id == 1;
        }else{
            $n->id = $ultimoid + 1;
        }
        $n->lmateria_id = $request->input('idmateria');
        $n->lalumno_id = $request->input('idalumno');
        $n->nota1 = $request->input('nota1');  
        $n->grado_id = $request->input('idgrado');
        $n->save();
        Flash::success("Se ha registrado la nota con de forma correcta");
        return redirect('profesor/listarAN');
    }

    /*********************************************************ALUMNOS*******************************************/
    /*Ver cursos*/
    public function verCursosA(Request $request){
        $fecha = Carbon::parse($request->fecha);
        $anho = $fecha->year;
        $dni = Auth::user()->dni; 

        $consulta = DB::SELECT('SELECT grados.id, grados.nombre, grados.nombre_profesor
                     FROM l_alumnos,grados,anhos WHERE  l_alumnos.grado_id = grados.id  
                     AND grados.anho_id = anhos.id AND anhos.anho = :varanho
                     AND l_alumnos.dni = :vardni',['varanho' => $anho, 'vardni' => $dni]);
        return view('Alumno.views.gradoactual',compact('consulta'));
    }
    /*Listar materias*/
    public function verMateriasA(Request $request,$id){
        $consulta = DB::SELECT('SELECT * FROM l_materias WHERE grado_id = :vargradoid',['vargradoid' => $id]);
        return view('Alumno.views.materias',compact('consulta'));   
    }
    /*Listar Notas*/
    public function verNotaA(Request $request,$materia_id,$nombre_materia){
        $fecha = Carbon::parse($request->fecha);
        $anho = $fecha->year;
        $dnie = Auth::user()->dni;
        $colegio_id = Auth::user()->colegio_id;
        $consultagrado = DB::SELECT('SELECT grados.id, grados.nombre, grados.nombre_profesor
                     FROM l_alumnos,grados,anhos WHERE  l_alumnos.grado_id = grados.id  
                     AND grados.anho_id = anhos.id AND anhos.anho = :varanho
                     AND l_alumnos.dni = :vardni',['varanho' => $anho, 'vardni' => $dnie]);
        foreach ($consultagrado as $cons){
            $gradoid=$cons->id;
        }

        $consultalalumnoid = DB::SELECT('SELECT * FROM l_alumnos WHERE  l_alumnos.grado_id = :vargradoid AND l_alumnos.dni = :vardni',['vargradoid' => $gradoid, 'vardni' => $dnie]);
        foreach ($consultalalumnoid as $cons){
            $alumnoid=$cons->id;
        }

        $consultanotas = DB::SELECT('SELECT l_notas.id,l_notas.nota1,l_notas.nota2,l_notas.nota3,l_notas.nota4,l_notas.habilitacion
                FROM l_notas
                WHERE l_notas.grado_id = :vargradoid AND l_notas.lmateria_id = :varmateriaid AND l_notas.lalumno_id = :varalumnoid',['vargradoid' => $gradoid, 'varmateriaid' => $materia_id, 'varalumnoid' => $alumnoid]);

        $consultaporcentajes = DB::SELECT('SELECT anhos.ppsemestre,anhos.pssemestre,anhos.ptsemestre,anhos.pcsemestre,anhos.phabilitacion FROM anhos WHERE anhos.anho = :varanho AND anhos.colegio_id = :varcolegio',['varanho' => $anho,'varcolegio' => $colegio_id]);

        return view('Alumno.views.notas-materia',compact('consultanotas'))->with('nombre_materia',$nombre_materia)->with('consultaporcentajes',$consultaporcentajes);
    }

}