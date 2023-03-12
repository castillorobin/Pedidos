<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha_ingreso');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('tipovende');
            $table->string('titular');
            $table->string('cuenta');
            $table->string('banco');
            $table->string('tcuenta');
            $table->string('whatsapp');
            $table->date('falta');
            $table->date('fbaja');
            $table->string('correo');
            $table->string('chivo');
            $table->string('tmoney');
            $table->string('empresa');
            $table->string('giro');
            $table->string('dui');
            $table->string('niva');
            $table->string('nrc');
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
        Schema::dropIfExists('vendedors');
    }
}
