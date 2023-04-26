<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .principal{
          
           width: 700px;
            
        }
        
        .headt td {
  height: 30px !important;
  padding: 0px;
 font-size: 18px;
 background: #ffffff;
 width: 200px;
 padding-left:15px;
}
    </style>

</head>
<body>
<div class="principal ">
  <table class="table table-borderless" >
    
    <tr>
    
    <td style=" font-size: 20px;">
            
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="float: left;"></h1> &nbsp; &nbsp; &nbsp;
        <span style="float: right; text-align: right;"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></span>
      </div>
      <div class="modal-body">
        <div class="row p-3 m-3" style="border: solid 1px; width:660px">
           
            <table class="table table-borderless" >
                <tr>
                    <td  colspan="3"><h3>&nbsp; &nbsp; Informacion del empleado </h3>
                        <hr style="color: #d7d7d7; background-color:  #d7d7d7; width:95%;">
                    </td>
                    
                </tr>
                <tr class="headt">
                    <td >Nombre del empleado </td>
                    <td> <span ></span> <label >{{ $repartidor->nombre }}</label> </td>
                    <td rowspan="15"> <span ></span> <label for="" > </label> <img src="imgs/fotos/{{ $repartidor->foto }}"  width="200"> </td>
                </tr>
                <tr class="headt">
                    <td >Dirección </td>
                    <td> <span ></span> <label for="" id="dire">{{ $repartidor->direccion }}</label> </td>
                    
                </tr>
                <tr class="headt">
                    <td >Teléfono </td>
                    <td> <span ></span> <label for="" id="tele">{{ $repartidor->telefono }}</label> </td>
                    
                </tr>
                <tr class="headt">
                    <td >Correo</td>
                    <td> <label for="" id="corre"></label>{{ $repartidor->correo }} </td>
                </tr>
                <tr class="headt">
                    <td >Numero de DUI </td>
                    <td> <label for="" id="dui"></label> {{ $repartidor->dui }}</td>
                </tr>
                <tr tr class="headt">
                    <td> Numero de NIT </td>
                    <td><label for="" id="iva">{{ $repartidor->nit }}</label> </td>
                </tr>
                <tr class="headt">
                    <td >Tipo de Contrato</td>
                    <td> <span ></span> <label for="" id="alta">{{ $repartidor->tipo_contrato }}</label> </td>
                </tr>
                <tr class="headt">
                    <td >Agencia</td>
                    <td> <span ></span> <label for="" id="baja">{{ $repartidor->agencia }}</label> </td>
                </tr>
                <tr class="headt">
                    <td >Nº de ISSS</td>
                    <td> <span ></span> <label for="" id="tipo">{{ $repartidor->num_seguro }}</label> </td>
                </tr>
                
                <tr class="headt">
                    <td >Nº de AFP</td>
                    <td> <label for="" id="estado">{{ $repartidor->num_afp }}</label> </td>
                </tr>
                <tr class="headt">
                    <td >Cargo</td>
                    <td> <label for="" id="agenci">{{ $repartidor->cargo }}</label> </td>
                </tr>
                <tr class="headt">
                    <td >Fecha de Alta</td>
                    <td> <label for="" id="titul">{{ $repartidor->fecha_de_alta }}</label> </td>
                </tr>
                <tr class="headt">
                    <td >Salario</td>
                    <td> <label for="" id="banco">{{ $repartidor->salario }}</label> </td>
                </tr>
                <tr class="headt">
                    <td >Fecha de Baja</td>
                    <td> <label for="" id="cuenta">{{ $repartidor->fecha_de_baja }}</label> </td>
                </tr>
                <tr class="headt">
                    <td >Nota </td>
                    <td> <label for="" id="tcuenta">{{ $repartidor->nota }}</label> </td>
                </tr>
                <tr>
                    <td  colspan="3"><h3>&nbsp; &nbsp; Datos del vehiculo </h3>
                        <hr style="color: #d7d7d7; background-color:  #d7d7d7; width:95%;">
                    </td>
                    
                </tr>
                
                <tr class="headt">
                    <td >Tipo de Vehiculo </td>
                    <td> <label for="" id="chivo">{{ $repartidor->tipo_vehiculo }}</label> </td>
                </tr>
                <tr class="headt">
                    <td >Equipo es asignado </td>
                    <td> <label for="" id="tmoney">{{ $repartidor->asigno_unidad }}</label> </td>
                </tr>
                
                <tr class="headt">
                    <td >Numero de placa</td>
                    <td> <label for="" id="empresa">{{ $repartidor->num_placa }}</label> </td>
                </tr>
                <tr class="headt">
                    <td >Numero de tarjeta</td>
                    <td> <label for="" id="giro">{{ $repartidor->num_tarjeta }}</label> </td>
                </tr>
               
                <tr class="headt">
                    <td >Numero de licencia </td>
                    <td> <label for="" id="nrc">{{ $repartidor->num_licencia }}</label> </td>
                </tr>


            </table>


        </div>



       
      </div>
     
    </div>
  </div>
</div>






      
        </td>
       
        
    </tr>
       


  </table>
 
  
    
    
</div>

<script>
/*
window.print();
setTimeout(saludos, 3000);

function saludos(){
    window.location.href = '/pedidos';
}
*/
</script>

</body>

</html>