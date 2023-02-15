<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RepartidorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            
            'nombre'        => $this ->faker->name,      
            'direccion'     => $this ->faker->address,    
            'telefono'      => $this ->faker->phonenumber,   
            'dui'           => $this ->faker->ean8,
            'nit'           => $this ->faker->isbn13,   
            'tipo_contrato' => $this ->faker->name,
            'agencia'       => $this ->faker->name,  
            'num_seguro'    => $this ->faker->isbn13, 
            'num_afp'       => $this ->faker->ean8,  
            'cargo'         => $this ->faker->ean8,  
            'fecha_de_alta' => $this ->faker->date(), 
            'salario'       => $this ->faker->numberBetween($min = 1, $max = 20),  
            'fecha_de_baja' => $this ->faker->date(),  
            'nota'          => $this ->faker->sentence($nbWords = 6, $variableNbWords = true),  
            'tipo_vehiculo' => $this ->faker->name,  
            'asigno_unidad' => $this ->faker->name,         
            'num_placa'     => $this ->faker->isbn13,  
            'num_tarjeta'   => $this ->faker->ean8,  
            'num_licencia'  => $this ->faker->ean8,  
            'foto'          => $this ->faker->sentence





        ];
    }
}
