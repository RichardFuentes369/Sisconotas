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
            'dni' => '1098634578',
            'sexo' => 'M',
            'category' => 'administrador',
    		    'phone'	=> '6387596',
    		    'cellphone'	=> '3226589746',
            'colegio_id' => 0,
    		]);

        $user1->save();

        $user2 = User::create([
           'id'        => 2,
           'name'      => 'Jorge Enrique',
           'lastname'      => 'Baron Fuentes',
           'email' => 'prueba2@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '1098987548',
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
           'dni' => '1098987546',
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
            'dni' => '1098524478',
            'sexo' => 'M',
            'category' => 'profesor',
            'phone' => '6588799',
            'cellphone' => '3168574889',
            'colegio_id' => 1,
            ]);

        $user4->save();

        $user5 = User::create([
           'id'        => 5,
           'name'      => 'Mark',
           'lastname'      => 'Zuckerberg Sinisterra',
           'email' => 'prueba5@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '1098751248',
           'sexo' => 'M',
           'category' => 'alumno',
           'phone' => '6390852',
           'cellphone' => '3203687952',
           'colegio_id' => 1,
           ]);

        $user5->save();

        $user10 = User::create([
           'id'        => 10,
           'name'      => 'Alan',
           'lastname'      => 'Turing',
           'email' => 'prueba10@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '10987512428',
           'sexo' => 'M',
           'category' => 'alumno',
           'phone' => '6390852',
           'cellphone' => '3203687952',
           'colegio_id' => 1,
           ]);

        $user10->save();

        $user6 = User::create([
           'id'        => 6,
           'name'      => 'Eliot',
           'lastname'      => 'Bautista Jaimes',
           'email' => 'prueba6@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '1098364258',
           'sexo' => 'M',
           'category' => 'rector',
           'phone' => '6852200',
           'cellphone' => '3208756325',
           'colegio_id' => 2,
           ]);

        $user6->save();

        $user7 = User::create([
           'id'        => 7,
           'name'      => 'Henry',
           'lastname'      => 'Ford Mustang',
           'email' => 'prueba7@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '1098763254',
           'sexo' => 'M',
           'category' => 'secretario',
           'phone' => '6395893',
           'cellphone' => '3203658964',
           'colegio_id' => 1,
           ]);

        $user7->save();

         $user8 = User::create([
            'id'        => 8,
            'name'      => 'Dennis',
            'lastname'      => 'Buenaventura Solis',
            'email' => 'prueba8@gmail.com',
            'birthdate' => '1996-06-01',
            'dni' => '1095632578',
            'sexo' => 'M',
            'category' => 'profesor',
            'phone' => '6632008',
            'cellphone' => '3013256964',
            'colegio_id' => 1,
            ]);

        $user8->save();

        $user9 = User::create([
           'id'        => 9,
           'name'      => 'Felix',
           'lastname'      => 'Quintero Agames',
           'email' => 'prueba9@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '124785789',
           'sexo' => 'M',
           'category' => 'alumno',
           'phone' => '6390000',
           'cellphone' => '3203589979',
           'colegio_id' => 1,
           ]);

        $user9->save();
    }
}
