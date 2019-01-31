<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l_notas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nota1');
            $table->string('nota2');
            $table->string('nota3');            
            $table->string('nota4');
            $table->integer('id_materia')->unsigned();
            $table->integer('id_alumno')->unsigned();
            $table->integer('grado_id')->unsigned();
            $table->foreign('grado_id')
                  ->references('id')
                  ->on('grados')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('id_materia')
                  ->references('id')
                  ->on('l_materias')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('id_alumno')
                  ->references('id')
                  ->on('l_alumnos')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('l_notas');
    }
}
