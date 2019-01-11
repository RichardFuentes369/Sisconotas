<?php

use Illuminate\Database\Seeder;
use sisconotas\Porcentajes;  

class PorcentajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $porcentaje1 = Porcentajes::create([
            'id'		=> 1,
    		'periodo1'	=> 10,
    		'periodo2'	=> 20,
    		'periodo3'	=> 30,
    		'periodo4'	=> 40,
    		'colegio_id' => 1,
    	  ]);
        $porcentaje1->save();

        $porcentaje2 = Porcentajes::create([
            'id'    => 2,
            'periodo1'  => 25,
            'periodo2'  => 25,
            'periodo3'  => 25,
            'periodo4'  => 25,
            'colegio_id' => 2,
        ]);
        $porcentaje2->save();  
    }
}


