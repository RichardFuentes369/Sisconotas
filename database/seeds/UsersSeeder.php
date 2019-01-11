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
            'name'      => 'Prueba',
    		    'lastname'		=> 'Admininstrador',
            'email' => 'prueba1@gmail.com',
            'birthdate' => '1996-06-01',
            'dni' => '111111111111',
            'sexo' => 'M',
            'category' => 'administrador',
    		    'phone'	=> '6390751',
    		    'cellphone'	=> '3203897291',
            'colegio_id' => 0,
    		]);

        $user1->save();

        $user2 = User::create([
           'id'        => 2,
           'name'      => 'Prueba',
           'lastname'      => 'Rector 1',
           'email' => 'prueba2@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '222222222222',
           'sexo' => 'M',
           'category' => 'rector',
           'phone' => '6390752',
           'cellphone' => '3203897292',
           'colegio_id' => 1,
           ]);

        $user2->save();

        $user3 = User::create([
           'id'        => 3,
           'name'      => 'Prueba',
           'lastname'      => 'Secretaria 1',
           'email' => 'prueba3@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '333333333333',
           'sexo' => 'M',
           'category' => 'secretario',
           'phone' => '6390753',
           'cellphone' => '3203897293',
           'colegio_id' => 1,
           ]);

        $user3->save();

         $user4 = User::create([
            'id'        => 4,
            'name'      => 'Prueba',
            'lastname'      => 'Profesor 1',
            'email' => 'prueba4@gmail.com',
            'birthdate' => '1996-06-01',
            'dni' => '444444444444',
            'sexo' => 'M',
            'category' => 'profesor',
            'phone' => '6390754',
            'cellphone' => '3203897294',
            'colegio_id' => 1,
            ]);

        $user4->save();

        $user5 = User::create([
           'id'        => 5,
           'name'      => 'Prueba',
           'lastname'      => 'Estudiante 1',
           'email' => 'prueba5@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '555555555555',
           'sexo' => 'M',
           'category' => 'alumno',
           'phone' => '6390755',
           'cellphone' => '3203897295',
           'colegio_id' => 1,
           ]);

        $user5->save();

        $user6 = User::create([
           'id'        => 6,
           'name'      => 'Prueba',
           'lastname'      => 'Rector 2',
           'email' => 'prueba6@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '666666666666',
           'sexo' => 'M',
           'category' => 'rector',
           'phone' => '6390756',
           'cellphone' => '3203897296',
           'colegio_id' => 2,
           ]);

        $user6->save();

        $user7 = User::create([
           'id'        => 7,
           'name'      => 'Prueba',
           'lastname'      => 'Secretaria 2',
           'email' => 'prueba7@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '777777777777',
           'sexo' => 'M',
           'category' => 'secretario',
           'phone' => '6390757',
           'cellphone' => '3203897297',
           'colegio_id' => 2,
           ]);

        $user7->save();

         $user8 = User::create([
            'id'        => 8,
            'name'      => 'Prueba',
            'lastname'      => 'Profesor 2',
            'email' => 'prueba8@gmail.com',
            'birthdate' => '1996-06-01',
            'dni' => '888888888888',
            'sexo' => 'M',
            'category' => 'profesor',
            'phone' => '6390758',
            'cellphone' => '3203897298',
            'colegio_id' => 2,
            ]);

        $user8->save();

        $user9 = User::create([
           'id'        => 9,
           'name'      => 'Prueba',
           'lastname'      => 'Estudiante 2',
           'email' => 'prueba9@gmail.com',
           'birthdate' => '1996-06-01',
           'dni' => '999999999999',
           'sexo' => 'M',
           'category' => 'alumno',
           'phone' => '6390759',
           'cellphone' => '3203897299',
           'colegio_id' => 2,
           ]);

        $user9->save();
    }
}
