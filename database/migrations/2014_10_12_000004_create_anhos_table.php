<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anhos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('anho');
            $table->date('fiprimersemestre');
            $table->date('ffprimersemestre');
            $table->date('fisegundosemestre');
            $table->date('ffsegundosemestre');
            $table->date('fitercersemestre');
            $table->date('fftercersemestre');
            $table->date('ficuartosemestre');
            $table->date('ffcuartosemestre');
            $table->integer('colegio_id')->unsigned();
            $table->foreign('colegio_id')
                  ->references('id')
                  ->on('colegios')
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
        Schema::dropIfExists('anhos');
    }
}
