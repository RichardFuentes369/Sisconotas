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
            $table->double('nota1')->nullable();
            $table->double('nota2')->nullable();
            $table->double('nota3')->nullable();
            $table->double('nota4')->nullable();
            $table->integer('grado_id')->unsigned();
            $table->integer('lmateria_id')->unsigned();
            $table->integer('lalumno_id')->unsigned();

            $table->foreign('grado_id')
                  ->references('id')
                  ->on('grados')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('lmateria_id')
                  ->references('id')
                  ->on('l_materias')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('lalumno_id')
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
