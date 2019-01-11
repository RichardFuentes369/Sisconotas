<?php

use Illuminate\Database\Seeder;
use sisconotas\Grados;

class GradosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grado1colegio1 = grados::create([
    		'id'		=> 1,
    		'nombre'		=> '9-1',
            'anho_id' => '1',
        	]);
        $grado1colegio1->save();
    }
}