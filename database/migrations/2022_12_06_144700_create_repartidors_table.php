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
            $table -> string  ('nombre',150);
            $table -> string  ('direccion',300);
            $table -> string  ('telefono', 15); 
            $table -> string  ('dui', 25);
            $table -> string  ('nit', 35);
            $table -> string  ('tipo_contrato',25);
            $table -> string  ('agencia',25);
            $table -> string  ('num_seguro',35);
            $table -> string  ('num_afp',35);
            $table -> string  ('cargo',50);
            $table -> date    ('fecha_de_alta');
            $table -> float   ('salario');
            $table -> date    ('fecha_de_baja');
            $table -> text    ('nota')->nullable();
            $table -> string  ('tipo_vehiculo',35);
            $table -> string  ('asigno_unidad',5);
            $table -> string  ('num_placa',25);
            $table -> string  ('num_tarjeta',25);
            $table -> string  ('num_licencia',25);
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
