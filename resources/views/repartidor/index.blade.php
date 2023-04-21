
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


.dt-buttons button {
    background: #0275d8;
    color: white;
    border-radius: 5px;
    font-size: 16px;
    float: right;
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
    @foreach ($repartidores as $repartidor)
    
        
    <td>{{ $repartidor->nombre }}</td>
    <td>{{ $repartidor->telefono }}</td>
    <td>{{ $repartidor->direccion }}</td>
    <td>{{ $repartidor->fecha_de_alta }}</td>
    <td>{{ $repartidor->cargo }}</td>
   
    <td>{{ $repartidor->agencia }}</td>
    <td>{{ $repartidor->nota }}</td>    
    <td>
    
    <div class="container text-center" id="cssmenu">
  
  <div class="dropdown text-center" >
    
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <i class="fas fa-stream"></i></a>
    <ul class="dropdown-menu dropdown-menu-center text-center">
    <li><a href="#"><i class="fas fa-pencil-alt"  style="position:absolute; left: 30px; top: 4px;" ></i> Editar</a></li>
	<li><a href="#"><i class="fas fa-eye" style="position:absolute; left: 30px; top: 4px;"></i> Ver</a></li>
    <li><a href="#"><i class="fas fa-trash-alt" style="position:absolute; left: 30px; top: 4px;"></i> Eliminar</a></li>
    </ul>
  </div>
</div>
    </td>

    </tr>
    @endforeach
</tbody>
</table>
</div>








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
