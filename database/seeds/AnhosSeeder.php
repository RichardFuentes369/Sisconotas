<?php

use Illuminate\Database\Seeder;
use sisconotas\Anhos;

class AnhosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            $Anhos0 = Anhos::create([
    		'id'		=> 1,
            'anho'      => '2019',
    		'colegio_id' => '1',
            'fiprimersemestre' => '2019-01-15',
            'ffprimersemestre' => '2019-03-15',
            'ppsemestre' => 25.0,
            'fisegundosemestre' => '2019-03-16',
            'ffsegundosemestre' => '2019-06-16',
            'pssemestre' => 25.0,
            'fitercersemestre' => '2019-06-17',
            'fftercersemestre' => '2019-09-24',
            'ptsemestre' => 25.0,
            'ficuartosemestre' => '2019-09-25',
            'ffcuartosemestre' => '2019-11-25',
            'pcsemestre' => 25.0,
            'fihabilitacion' => '2019-11-25',
            'ffhabilitacion' => '2019-12-02',
            'phabilitacion' => 25.0,
        	]);
        $Anhos0->save();

    
    }
}
