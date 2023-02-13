<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repartidor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_empleado'
        ,'nombre'          
        ,'direccion'       
        ,'telefono'        
        ,'dui'             
        ,'dui'             
        ,'tipo_contrato'   
        ,'agencia'         
        ,'num_seguro'      
        ,'num_afp'         
        ,'cargo'           
        ,'fecha_de_alta'   
        ,'salario'         
        ,'fecha_de_baja'   
        ,'nota'            
        ,'tipo_vehiculo'   
        ,'asigno_unidad'   
        ,'num_placa'       
        ,'num_tarjeta'     
        ,'num_licencia'    
        ,'foto'];

}
