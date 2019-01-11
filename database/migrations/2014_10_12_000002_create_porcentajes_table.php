<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePorcentajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porcentajes', function (Blueprint $table) {
            $table->increments('id');
            $table->double('periodo1',8,2);
            $table->double('periodo2',8,2);
            $table->double('periodo3',8,2);
            $table->double('periodo4',8,2);
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
        Schema::dropIfExists('porcentajes');
    }
}
