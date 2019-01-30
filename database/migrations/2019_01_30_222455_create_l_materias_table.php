<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l_materias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_materia');
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
        Schema::dropIfExists('l_materias');
    }
}
