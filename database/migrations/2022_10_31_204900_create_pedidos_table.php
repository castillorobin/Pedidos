<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('vendedor');
            $table->string('direccion');
            $table->string('telefono');
            $table->date('fecha_entrega');
            $table->string('tipo');
            $table->double('precio');
            $table->double('envio');
            $table->double('total');
            $table->string('repartidor');
            $table->string('ruta');
            $table->string('estado');
            $table->string('nota');
            $table->string('destinatario');
            $table->string('pagado');
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
        Schema::dropIfExists('pedidos');
    }
}
