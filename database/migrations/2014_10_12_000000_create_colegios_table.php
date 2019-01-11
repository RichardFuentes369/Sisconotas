<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nit')->unique();
            $table->string('razon_social');
            $table->string('direccion');
            $table->string('barrio');
            $table->string('departamento');
            $table->string('ciudad');
            $table->string('pais');
            $table->string('telefono');
            $table->string('correo');
            
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
        Schema::dropIfExists('colegios');
    }
}
