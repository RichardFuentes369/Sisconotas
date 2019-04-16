<?php

use Illuminate\Database\Seeder;
use sisconotas\Materias;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materias1 = Materias::create([
            'id' => 1,
    		'nombre_materia' => 'Español',
    		'colegio_id' => 2,
    	  ]);
        $materias1->save();

        $materias2 = Materias::create([
            'id' => 2,
            'nombre_materia' => 'Matematicas',
            'colegio_id' => 2,
        ]);
        $materias2->save(); 

        $materias3 = Materias::create([
            'id' => 3,
            'nombre_materia' => 'Quimica',
            'colegio_id' => 2,
          ]);
        $materias3->save();

        $materias4 = Materias::create([
            'id' => 4,
            'nombre_materia' => 'Fisica',
            'colegio_id' => 2,
          ]);
        $materias4->save();

        $materias5 = Materias::create([
            'id' => 5,
            'nombre_materia' => 'Sociales',
            'colegio_id' => 2,
          ]);
        $materias5->save();

        $materias6 = Materias::create([
            'id' => 6,
            'nombre_materia' => 'Filosofia',
            'colegio_id' => 2,
          ]);
        $materias6->save();

        $materias7 = Materias::create([
            'id' => 7,
            'nombre_materia' => 'Religion',
            'colegio_id' => 2,
          ]);
        $materias7->save();

        $materias8 = Materias::create([
            'id' => 8,
            'nombre_materia' => 'Trigonometria',
            'colegio_id' => 2,
          ]);
        $materias8->save();

        $materias9 = Materias::create([
            'id' => 9,
            'nombre_materia' => 'Artistica',
            'colegio_id' => 2,
          ]);
        $materias9->save();

        $materias10 = Materias::create([
            'id' => 10,
            'nombre_materia' => 'Asistencia',
            'colegio_id' => 2,
          ]);
        $materias10->save();
    }
}
