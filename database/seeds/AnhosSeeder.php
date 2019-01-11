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
        	]);
        $Anhos0->save();
    }
}
