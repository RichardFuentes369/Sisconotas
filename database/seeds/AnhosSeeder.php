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
            'fiprimersemestre' => '15-01-2019',
            'ffprimersemestre' => '15-03-2019',
            'ppsemestre' => 25.0,
            'fisegundosemestre' => '16-03-2019',
            'ffsegundosemestre' => '16-06-2019',
            'pssemestre' => 25.0,
            'fitercersemestre' => '17-06-2019',
            'fftercersemestre' => '24-09-2019',
            'ptsemestre' => 25.0,
            'ficuartosemestre' => '25-09-2019',
            'ffcuartosemestre' => '25-11-2019',
            'pcsemestre' => 25.0,
            'fihabilitacion' => '25-11-2019',
            'ffhabilitacion' => '02-12-2019',
            'phabilitacion' => 25.0,
        	]);
        $Anhos0->save();
    }
}
