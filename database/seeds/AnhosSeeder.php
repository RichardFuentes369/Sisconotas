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
            'fiprimersemestre' => '5-04-2019',
            'ffprimersemestre' => '10-04-2019',
            'fisegundosemestre' => '5-06-2019',
            'ffsegundosemestre' => '10-06-2019',
            'fitercersemestre' => '5-09-2019',
            'fftercersemestre' => '10-09-2019',
            'ficuartosemestre' => '5-11-2019',
            'ffcuartosemestre' => '10-11-2019',
        	]);
        $Anhos0->save();
    }
}
