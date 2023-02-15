<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepartidorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repartidors', function (Blueprint $table) {
           
            $table -> id();
            $table -> string  ('nombre');
            $table -> string  ('direccion');
            $table -> string  ('telefono', 15); 
            $table -> string  ('dui', 25);
            $table -> string  ('nit', 100);
            $table -> string  ('tipo_contrato');
            $table -> string  ('agencia');
            $table -> string  ('num_seguro');
            $table -> string  ('num_afp');
            $table -> string  ('cargo');
            $table -> date    ('fecha_de_alta');
            $table -> float   ('salario');
            $table -> date    ('fecha_de_baja');
            $table -> text    ('nota')->nullable();
            $table -> string  ('tipo_vehiculo');
            $table -> string  ('asigno_unidad');
            $table -> string  ('num_placa');
            $table -> string  ('num_tarjeta');
            $table -> string  ('num_licencia');
            $table -> string  ('foto')->nullable();   
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
        Schema::dropIfExists('repartidors');
    }
}
