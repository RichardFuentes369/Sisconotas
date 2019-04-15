<?php

use Illuminate\Database\Seeder;
use sisconotas\Colegios; 

class ColegiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colegio1 = colegios::create([
    		'id'		=> 1,
            'nit'      => '*-***********',
    		'razon_social'		=> '*************',
            'direccion' => '*************',
            'barrio' => '*************',
            'departamento' => '*************',
            'ciudad' => '*************',
            'pais' => '*************',
            'telefono' => '*************',
            'correo' => '*************',
        	]);
        $colegio1->save();

        $colegio2 = colegios::create([
    		'id'		=> 2,
            'nit'      => '1-00000002',
    		'razon_social'		=> 'Colegio Gabriela Mistral',
            'direccion' => 'Calle 12 a # 25-34',
            'barrio' => 'Casco Urbano Floridablanca',
            'departamento' => 'Santander',
            'ciudad' => 'Floridablanca',
            'pais' => 'Colombia',
            'telefono' => '6792500',
            'correo' => 'colegiogabrielamistral@gmail.com',
        	]);
        $colegio2->save();

        $colegio3 = colegios::create([
            'id'        => 3,
            'nit'      => '1-00000003',
            'razon_social'      => 'Colegio Vicente Azuero',
            'direccion' => 'Calle 56 a # 23-34',
            'barrio' => 'Casco Urbano Floridablanca',
            'departamento' => 'Santander',
            'ciudad' => 'Floridablanca',
            'pais' => 'Colombia',
            'telefono' => '6792500',
            'correo' => 'colegiovicenteazuero@gmail.com',
            ]);
        $colegio3->save();

        $colegio4 = colegios::create([
            'id'        => 4,
            'nit'      => '1-00000004',
            'razon_social'      => 'Colegio Metropolitano del Sur',
            'direccion' => 'cra 21 # 23-34',
            'barrio' => 'Casco Urbano Floridablanca',
            'departamento' => 'Santander',
            'ciudad' => 'Floridablanca',
            'pais' => 'Colombia',
            'telefono' => '6792500',
            'correo' => 'colegiometropolitanodelsur@gmail.com',
            ]);
        $colegio4->save();
    }
}
