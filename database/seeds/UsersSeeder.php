<?php

use Illuminate\Database\Seeder;
use sisconotas\User;   

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
    		    'id'		=> 1,
            'name'      => 'Javier Ricardo',
    		    'lastname'		=> 'Baron Fuentes',
            'email' => 'prueba1@gmail.com',
            'birthdate' => '1996-06-01',
            'dni' => '11111111',
            'sexo' => 'M',
            'category' => 'administrador',
    		    'phone'	=> '6387596',
    		    'cellphone'	=> '3226589746',
            'colegio_id' => 0,
    		]);

        $user1->save();

        /*$user2 = User::create([
           'id'        => 2,
           'name'      => 'Jorge Enrique',
           'lastname'      => 'Baron Fuentes',
           'email' => 'prueba2@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '22222222',
           'sexo' => 'M',
           'category' => 'rector',
           'phone' => '6387452',
           'cellphone' => '3209687854',
           'colegio_id' => 1,
           ]);

        $user2->save();

        $user3 = User::create([
           'id'        => 3,
           'name'      => 'Jorge Enrique',
           'lastname'      => 'Baron Robles',
           'email' => 'prueba3@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '33333333',
           'sexo' => 'M',
           'category' => 'secretario',
           'phone' => '6578423',
           'cellphone' => '3112548761',
           'colegio_id' => 1,
           ]);

        $user3->save();

         $user4 = User::create([
            'id'        => 4,
            'name'      => 'Bettsy',
            'lastname'      => 'Fuentes Porras',
            'email' => 'prueba4@gmail.com',
            'birthdate' => '1996-06-01',
            'dni' => '44444444',
            'sexo' => 'M',
            'category' => 'profesor',
            'phone' => '6588799',
            'cellphone' => '3168574889',
            'colegio_id' => 1,
            ]);

        $user4->save();

        $user5 = User::create([
            'id'        => 5,
            'name'      => 'Esperanza',
            'lastname'      => 'Fuentes Porras',
            'email' => 'prueba5@gmail.com',
            'birthdate' => '1996-06-01',
            'dni' => '55555555',
            'sexo' => 'F',
            'category' => 'profesor',
            'phone' => '6588799',
            'cellphone' => '3168574889',
            'colegio_id' => 1,
            ]);

        $user5->save();

        $user6 = User::create([
           'id'        => 6,
           'name'      => 'Mark',
           'lastname'      => 'Rodriguez Molano',
           'email' => 'prueba6@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '66666666',
           'sexo' => 'M',
           'category' => 'alumno',
           'phone' => '6390852',
           'cellphone' => '3203687952',
           'colegio_id' => 1,
           ]);

        $user6->save();

        $user7 = User::create([
           'id'        => 7,
           'name'      => 'Alan',
           'lastname'      => 'Turing',
           'email' => 'prueba7@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '77777777',
           'sexo' => 'M',
           'category' => 'alumno',
           'phone' => '6390852',
           'cellphone' => '3203687952',
           'colegio_id' => 1,
           ]);

        $user7->save();

        $user8 = User::create([
           'id'        => 8,
           'name'      => 'Eliot',
           'lastname'      => 'Bautista Jaimes',
           'email' => 'prueba8@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '88888888',
           'sexo' => 'M',
           'category' => 'alumno',
           'phone' => '6852200',
           'cellphone' => '3208756325',
           'colegio_id' => 1,
           ]);

        $user8->save();

        $user9 = User::create([
           'id'        => 9,
           'name'      => 'Enrique',
           'lastname'      => 'Velez Cifuentes',
           'email' => 'prueba9@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '99999999',
           'sexo' => 'M',
           'category' => 'rector',
           'phone' => '6387452',
           'cellphone' => '3209687854',
           'colegio_id' => 2,
           ]);

        $user9->save();

        $user10 = User::create([
           'id'        => 10,
           'name'      => 'Samuel',
           'lastname'      => 'Ortiz Moreno',
           'email' => 'prueba10@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '10101010',
           'sexo' => 'M',
           'category' => 'secretario',
           'phone' => '6578423',
           'cellphone' => '3112548761',
           'colegio_id' => 2,
           ]);

        $user10->save();

         $user11 = User::create([
            'id'        => 11,
            'name'      => 'Salome',
            'lastname'      => 'Camargo Solano',
            'email' => 'prueba11@gmail.com',
            'birthdate' => '1996-06-01',
            'dni' => '01010101',
            'sexo' => 'F',
            'category' => 'profesor',
            'phone' => '6588799',
            'cellphone' => '3168574889',
            'colegio_id' => 2,
            ]);

        $user11->save();

        $user12 = User::create([
            'id'        => 12,
            'name'      => 'Rebeca',
            'lastname'      => 'Rojas Porras',
            'email' => 'prueba12@gmail.com',
            'birthdate' => '1996-06-01',
            'dni' => '12121212',
            'sexo' => 'F',
            'category' => 'profesor',
            'phone' => '6588799',
            'cellphone' => '3168574889',
            'colegio_id' => 2,
            ]);

        $user12->save();

        $user13 = User::create([
           'id'        => 13,
           'name'      => 'Dulio',
           'lastname'      => 'Palacios Sinisterra',
           'email' => 'prueba13@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '13131313',
           'sexo' => 'M',
           'category' => 'alumno',
           'phone' => '6390852',
           'cellphone' => '3203687952',
           'colegio_id' => 2,
           ]);

        $user13->save();

        $user14 = User::create([
           'id'        => 14,
           'name'      => 'Gilgerto',
           'lastname'      => 'Santarrosa',
           'email' => 'prueba14@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '14141414',
           'sexo' => 'M',
           'category' => 'alumno',
           'phone' => '6390852',
           'cellphone' => '3203687952',
           'colegio_id' => 2,
           ]);

        $user14->save();

        $user15 = User::create([
           'id'        => 15,
           'name'      => 'Dennis',
           'lastname'      => 'Jaimes Palacios',
           'email' => 'prueba15@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '15151515',
           'sexo' => 'M',
           'category' => 'alumno',
           'phone' => '6852200',
           'cellphone' => '3208756325',
           'colegio_id' => 2,
           ]);

        $user15->save();*/

    }
}
