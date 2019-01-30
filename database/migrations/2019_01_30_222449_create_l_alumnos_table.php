<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l_alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_alumno');
            $table->string('apellido_alumno');
            $table->string('dni');
            $table->integer('grado_id')->unsigned();
            $table->foreign('grado_id')
                  ->references('id')
                  ->on('grados')
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
        Schema::dropIfExists('l_alumnos');
    }
}
