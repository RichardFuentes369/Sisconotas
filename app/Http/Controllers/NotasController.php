<?php

namespace sisconotas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use sisconotas\User;
use Carbon\Carbon;
use Auth;
use Laracasts\Flash\Flash;

class NotasController extends Controller
{
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

    public function listarMN(Request $request,$grado_id,$id,$dni){
        $fecha = Carbon::parse($request->fecha);
        $anho = $fecha->year;
        $consulta_materias = DB::SELECT('SELECT * FROM l_materias WHERE grado_id = :vargrado', ['vargrado' => $grado_id]);
        return view('Profesor.views.notas')->with('dni',$dni)->with('consulta_materias',$consulta_materias);
    }

    public function listarND(Request $request,$grado_id,$id_materia,$nombre_materia,$dni){
        $consulta_idalumno =DB::SELECT('SELECT id FROM l_alumnos WHERE dni = :vardni',['vardni' => $dni]); 
        foreach ($consulta_idalumno as $idal){
            $ultimoid=$idal->id;
        }
        $consulta_notas = DB::SELECT('SELECT * FROM l_notas WHERE grado_id = :vargrado 
                            AND  lalumno_id = :varalumno AND lmateria_id = :varmateria',['vargrado' => $grado_id, 'varalumno' => $ultimoid, 'varmateria' => $id_materia]);
        return view('Profesor.views.misnotas',compact('consulta_notas'))->with('nombre_materia',$nombre_materia);
    }

    public function profesorAN(Request $request, $id){
        $existe = DB::SELECT('SELECT * FROM l_notas WHERE id = :varid',['varid' => $id]);
        return view('Profesor.views.actualizarnota',compact('existe'))->with('id',$id);
    }

    public function actualizarAS(Request $request){
        $id = $request->input('id');
        $nota1 = $request->input('nota1');
        $nota2 = $request->input('nota2');
        $nota3 = $request->input('nota3');
        $nota4 = $request->input('nota4');
        $actualizar = DB::UPDATE('UPDATE l_notas set nota1 = :varnota1, nota2 = :varnota2, nota3 = :varnota3, nota4 = :varnota4 
            WHERE id = :varid',['varnota1' => $nota1,'varnota2' => $nota2,'varnota3' => $nota3,'varnota4' => $nota4,'varid' => $id]);
        Flash::success("Se ha actualizado la nota con de forma correcta");
        return redirect('profesor/listarAN');
    }
}

