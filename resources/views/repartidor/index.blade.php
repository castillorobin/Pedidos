
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
@stop

@section('content')

<style>
    .dropdown-menu-center {
  left: 50% !important;
  /*right: auto !important;*/
  text-align: center !important;
  transform: translate(-50%, 0) !important;
        margin-top: 15px;
}
.cambiar {
   
   float: left;
   margin-top: 15px;
     
   }

.cambiar2 {
   float: right;
   margin-right: 20px;
   margin-top: 5px;
  /*
   
   margin-right: 300px;
   margin-bottom: 15px; 
   margin-top: -15px; 
   
   */
}

.pagina1{
    margin-bottom: 30px;
    margin-top: -30px;
    
}
.pagina2{
    
    margin-bottom: -25px;
    padding-top: 10px;
    
}
.nocolor a:link, a:visited, a:active {
    text-decoration:none; 
    color:black;
            
        }

        .dataTables_paginate a:hover {
    color: white !important;
    background:#0d6efd !important;
    
}

.opciones li {
 display: block;
 transition-duration: 0.5s;
text-align: left;
 
}

.opciones li:hover {
  cursor: pointer;
  background:#b2b2b2;
}

.opciones ul li ul {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  transition: all 0.5s ease;
  margin-top: 1rem;
  left: 0;
  display: none;
  
}

.opciones ul li:hover > ul,
ul li ul:hover {
  visibility: visible;
  opacity: 1;
  display: block;
  
}

.dt-buttons button {
    background: #0275d8;
    color: white;
    border-radius: 5px;
    font-size: 16px;
    float: right;
}
.headt td {
  height: 15px !important;
  padding: 0px;
 font-size: 14px;
 background: #ffffff;
}
</style>

<style> 
  body {
  font-family: 'Roboto', sans-serif;
}
</style>

<div class="row" style="background-color: white; border: 1px solid;">
<h8 style="font-size:14px" ><i class="fas fa-home"></i> Inicio / Almacen / Empleados</h8>
   
    <div class="  col-sm-6 py-3" style="border-top: 1px solid; border-top-color:#bbb5bb; ">
        <h3>Listado de empleados</h3>
    </div>
    <div class="  col-sm-6 py-3" style="border-top: 1px solid; border-top-color:#bbb5bb; ">
    <a href="/repartidores/create" class="btn btn-primary float-right" style="color:white;"><i class="fas fa-database"></i> Agregar Empleado</a>
</div>







  <div class="table-responsive" style="border-top: 1px solid; border-top-color:#bbb5bb; ">
<table id="trepartidor" class="table table-bordered shadow-lg mt-4 cell-border" >
<thead >
    <tr >
      
     
       
        <th scope="col">Nombre</th>
        <th scope="col">Telefono</th> 
        <th scope="col">Direccion</th>
        <th scope="col">Fecha de alta</th>
        <th scope="col">Cargo</th>
       
        <th scope="col">Agencia</th>
        <th scope="col">Nota</th>
        <th scope="col">Opciones</th>
        
    </tr>
</thead>
<tbody>
@for ($i=0; $i< count($repartidores); $i++)
    
         
    <td><span id="nombre{{$repartidores[$i]->id}}">{{ $repartidores[$i]->nombre }}</span></td>
    <td><span id="tele{{$repartidores[$i]->id}}">{{ $repartidores[$i]->telefono }}</span></td>
    <td><span id="dire{{$repartidores[$i]->id}}">{{ $repartidores[$i]->direccion }}</span></td>
    <td>{{ $repartidores[$i]->fecha_de_alta }}</td>
    <td>{{ $repartidores[$i]->cargo }}</td>
   
    <td>{{ $repartidores[$i]->agencia }}</td>
    <td>{{ $repartidores[$i]->nota }}</td>    
    <span hidden id="correo{{ $repartidores[$i]->id }}"> {{ $repartidores[$i]->correo }}</span>
    <span hidden id="dui{{ $repartidores[$i]->id }}"> {{ $repartidores[$i]->dui }}</span>
    <span hidden id="nit{{ $repartidores[$i]->id }}"> {{ $repartidores[$i]->nit }}</span>
    <span hidden id="tipoc{{ $repartidores[$i]->id }}"> {{ $repartidores[$i]->tipo_contrato }}</span>
    <span hidden id="agencia{{ $repartidores[$i]->id }}"> {{ $repartidores[$i]->agencia }}</span>
    <span hidden id="isss{{ $repartidores[$i]->id }}"> {{ $repartidores[$i]->num_seguro }}</span>
    <span hidden id="afp{{ $repartidores[$i]->id }}"> {{ $repartidores[$i]->num_afp }}</span>
    <span hidden id="cargo{{ $repartidores[$i]->id }}"> {{ $repartidores[$i]->cargo }}</span>
    <span hidden id="falta{{ $repartidores[$i]->id }}"> {{ $repartidores[$i]->fecha_de_alta }}</span>
    <span hidden id="sala{{ $repartidores[$i]->id }}"> {{ $repartidores[$i]->salario }}</span>
    <span hidden id="fbaja{{ $repartidores[$i]->id }}"> {{ $repartidores[$i]->fecha_de_baja }}</span>
    <span hidden id="nota{{ $repartidores[$i]->id }}"> {{ $repartidores[$i]->nota }}</span>
    <span hidden id="tvehi{{ $repartidores[$i]->id }}"> {{ $repartidores[$i]->tipo_vehiculo }}</span>
    <span hidden id="equipo{{ $repartidores[$i]->id }}"> {{ $repartidores[$i]->asigno_unidad }}</span>
    <span hidden id="placa{{ $repartidores[$i]->id }}"> {{ $repartidores[$i]->num_placa }}</span>
    <span hidden id="tarjeta{{ $repartidores[$i]->id }}"> {{ $repartidores[$i]->num_tarjeta }}</span>
    <span hidden id="licencia{{ $repartidores[$i]->id }}"> {{ $repartidores[$i]->num_licencia }}</span>



    <td class="opciones text-center" style="">
    
   
   
 
    <a href="" class="dropdown-toggle" data-toggle="dropdown">

    <i class="fas fa-list"></i></a>
    <ul class="dropdown-menu">
     <div class="botones"> 
    <li class="botones">
    &nbsp;
    <i class="fas fa-edit"></i>
    &nbsp;&nbsp;
    <a href="/repartidores/{{ $repartidores[$i]->id }}/edit" ><button>Editar</button></a></li> 
    </div>  
	<li class="botones">
    <form >
   
    &nbsp;
    <i class="fas fa-eye"></i>
    &nbsp;&nbsp;
    <button type="button" class="edit" data-bs-toggle="modal" value="{{ $repartidores[$i]->id }}" data-bs-target="#exampleModal">Ver</button>
  
    
    </form>
            </li>
        <li class="botones">
    <form action="{{ route ('repartidores.destroy', $repartidores[$i]->id)}}" method="POST">
        @csrf
        @method('DELETE')
        &nbsp;
        <i class="fas fa-trash-alt"></i> 
        &nbsp;&nbsp;
        <button >Eliminar</button>
        </form>
        </li>
    </ul>
 
   
    </td>

    </tr>
    @endfor
</tbody>
</table>
</div>



<!-- Inicio Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="float: left;"></h1> &nbsp; &nbsp; &nbsp;
        <span style="float: right; text-align: right;"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></span>
      </div>
      <div class="modal-body">
        <div class="row p-3 m-3" style="border: solid 1px;">
           
            <table class="table table-borderless" >
                <tr>
                    <td  colspan="2"><h4>Informacion del empleado </h4>
                        <hr>
                    </td>
                    
                </tr>
                <tr class="headt">
                    <td width="230px">Nombre del empleado </td>
                    <td> <span ></span> <label for="" id="efirstname"></label> </td>
                    
                </tr>
                <tr class="headt">
                    <td width="230px">Dirección </td>
                    <td> <span ></span> <label for="" id="dire"></label> </td>
                    
                </tr>
                <tr class="headt">
                    <td width="200px">Teléfono </td>
                    <td> <span ></span> <label for="" id="tele"></label> </td>
                    
                </tr>
                <tr class="headt">
                    <td width="200px">Correo</td>
                    <td> <label for="" id="corre"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Numero de DUI </td>
                    <td> <label for="" id="dui"></label> </td>
                </tr>
                <tr tr class="headt">
                    <td width="200px">Numero de NIT </td>
                    <td><label for="" id="iva"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Tipo de Contrato</td>
                    <td> <span ></span> <label for="" id="alta"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Agencia</td>
                    <td> <span ></span> <label for="" id="baja"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Nº de ISSS</td>
                    <td> <span ></span> <label for="" id="tipo"></label> </td>
                </tr>
                
                <tr class="headt">
                    <td width="200px">Nº de AFP</td>
                    <td> <label for="" id="estado"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Cargo</td>
                    <td> <label for="" id="agenci"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="230px">Fecha de Alta</td>
                    <td> <label for="" id="titul"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Salario</td>
                    <td> <label for="" id="banco"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Fecha de Baja</td>
                    <td> <label for="" id="cuenta"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Nota </td>
                    <td> <label for="" id="tcuenta"></label> </td>
                </tr>

                <tr class="headt">
                    <br>
                    <td  colspan="2" class="pt-2"> <h4> Datos del vehiculo</h4>
                        <hr>
                    </td>
                      
                </tr>
                <tr class="headt">
                    <td width="200px">Tipo de Vehiculo </td>
                    <td> <label for="" id="chivo"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Equipo es asignado </td>
                    <td> <label for="" id="tmoney"></label> </td>
                </tr>
                
                <tr class="headt">
                    <td width="200px">Numero de placa</td>
                    <td> <label for="" id="empresa"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Numero de tarjeta</td>
                    <td> <label for="" id="giro"></label> </td>
                </tr>
               
                <tr class="headt">
                    <td width="200px">Numero de licencia </td>
                    <td> <label for="" id="nrc"></label> </td>
                </tr>


            </table>


        </div>



       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times" style="color: #ffffff;"></i> &nbsp; Cerrar</button>
        <button type="button" class="btn btn-primary"><i class="fas fa-print"></i> &nbsp; Imprimir</button>
      </div>
    </div>
  </div>
</div>


<!-- Termina Modal -->





<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://kit.fontawesome.com/b64093b700.js" crossorigin="anonymous"></script> 




<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" defer></script>

    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js" defer></script>

                 
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js" defer></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" defer></script>

<!--
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js" defer></script>

<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.6.0/cleave.min.js" ></script>








<script src="https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"></script>
<script>



</script>

-->

<script>
    
  
$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
		var first=$('#nombre'+id).text();
        var direc=$('#dire'+id).text();
        var telef=$('#tele'+id).text();
        var email=$('#correo'+id).text();
        var du=$('#dui'+id).text();
        var ni=$('#nit'+id).text();
        var alt=$('#tipoc'+id).text();
        var baj=$('#agencia'+id).text();
        var tip=$('#isss'+id).text();
        var esta=$('#afp'+id).text();
        var agenc=$('#cargo'+id).text();
        var titu=$('#falta'+id).text();
        var banc=$('#sala'+id).text();
        var cuent=$('#fbaja'+id).text();
        var tcuent=$('#nota'+id).text();
        var chiv=$('#tvehi'+id).text();
        var tmon=$('#equipo'+id).text();
        var empre=$('#placa'+id).text();
        var gir=$('#tarjeta'+id).text();

        var nr=$('#licencia'+id).text();
		
	
		$('#edit').modal('show');
		$('#efirstname').text(first);
        $('#dire').text(direc);
        $('#tele').text(telef);
        $('#corre').text(email);
        $('#dui').text(du);
        $('#iva').text(ni);
        $('#alta').text(alt);
        $('#baja').text(baj);
        $('#tipo').text(tip);
        $('#estado').text(esta);  
        $('#agenci').text(agenc);
        $('#titul').text(titu);
        $('#banco').text(banc);
        $('#cuenta').text(cuent);
        $('#tcuenta').text(tcuent);
        $('#chivo').text(chiv);
        $('#tmoney').text(tmon);
        $('#empresa').text(empre);
        $('#giro').text(gir);   

        $('#nrc').text(nr);
		
	});
});
       

$(document).ready(function() {

  $('#trepartidor').DataTable( {
    language: {
            "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
           
        },
        
        dom: '<"cambiar" f><"pagina2" p><"cambiar2"l>tri<"pagina1" p>',
           

    //responsive: true



} );



} );
    
    </script>




@endsection


@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.min.css" /> 

<link rel="stylesheet" href="vendor/adminlte/dist/css/core.css">
    <link rel="stylesheet" href="vendor/adminlte/dist/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" />
<!--
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
-->
@stop
