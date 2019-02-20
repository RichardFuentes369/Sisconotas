<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ColegiosSeeder::class);
        $this->call(MateriasSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(AnhosSeeder::class);
        $this->call(GradosSeeder::class);
    }
}
