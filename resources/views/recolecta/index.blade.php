
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
<h5 ><i class="fas fa-home"></i> Inicio / Almacen / Recolectas</h5>
     
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
      
    }

.cambiar2 {
   
   float: right;
     
}


</style>
<div class="row">
    <hr>
<div class="  col-sm-6">
<h3>Listado de Recolectas</h3>
</div>
<div class="  col-sm-6">
<a href="/recolectas/create" class="btn btn-primary float-right"><i class="fas fa-database"></i> Agregar Recolecta</a>
</div>
<hr>
</div>



<br>
<table id="tvendedor" class="table shadow-lg mt-4">
<thead class="table-secondary">
    <tr >
        <th scope="col">Comercio</th>
        <th scope="col">Dirección de recolecta</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Fecha de recolecta</th>
        <th scope="col">Fecha de entrega</th>
        <th scope="col">Estado de recoelecta</th>
        <th scope="col">Agencia</th>
        <th scope="col">Opciones</th>
    </tr>
</thead>
<tbody> 
    @foreach ($recolectas as $recolecta)
    <tr>
    <td>{{ $recolecta->nombre }}</td>
    <td>{{ $recolecta->direccion }}</td>
    <td>{{ $recolecta->telefono }}</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>

   
    <td>
        
    
    <div class="container text-center" id="cssmenu">
  
  <div class="dropdown text-center">
    
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

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js" defer></script>



<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"></script>



<script>
       


        $(document).ready(function () {
    $('#tvendedor').DataTable(
        {
            language: {
            "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
           
        },
        
        dom: '<"cambiar" f><"cambiar2" l>trip'
           



        }
    );
});




    </script>

@endsection


@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.min.css" /> 

<link rel="stylesheet" href="vendor/adminlte/dist/css/core.css">
    <link rel="stylesheet" href="vendor/adminlte/dist/css/admin_custom.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
   
@stop
