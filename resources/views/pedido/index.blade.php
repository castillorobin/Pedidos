
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
    <h6 ><i class="fas fa-home"></i> Inicio / Almacen / Envíos</h6>
    
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
<h3>Envíos del día</h3>
</div>
<div class="  col-sm-6">
<a href="/pedidos/create" class="btn btn-primary float-right" ><i class="fas fa-database"></i> Agregar Envio</a>
</div>
<hr>
</div>

 


<br>
<table id="tpedido" class="table shadow-lg mt-4 responsive">
<thead class="table-secondary">
    <tr >
        
        <th scope="col">Comercio</th>
        <th scope="col">Destinatario</th>
        <th scope="col">Direccion</th>
        
        <th scope="col">Tipo</th>
        <th scope="col">Estado del envio</th>
        <th scope="col">Fecha de entrega</th>
        <th scope="col">Agencia</th>
        <th scope="col">Repartidor</th>
        <th scope="col">Opciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($pedidos as $pedido)
    <tr >
    
    <td style="font-weight: bolder; color: #484f55;">{{ $pedido->vendedor }}</td>
    <td style="font-weight: bolder; color: #484f55;">{{ $pedido->destinatario }}</td>
    <td>{{ $pedido->direccion }}</td>
    <td>{{ $pedido->tipo }}</td>
    <td> {{ $pedido->estado }}</td>
    <td> {{ $pedido->fecha_entrega }}</td>
    <td> {{ $pedido->agencia }}</td>
    <td> {{ $pedido->repartidor }}</td>
    <td >
    
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


	
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"></script>



<script>
       


        $(document).ready(function () {
    $('#tpedido').DataTable(
        {
            language: {
            "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
           
        },
        
        dom: '<"cambiar" f><"cambiar2" l>trip',
        responsive: true

       

        } /*hasata aqui*/
    );
});




    </script>

@endsection


@section('css')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.min.css" /> 

<link rel="stylesheet" href="vendor/adminlte/dist/css/core.css">
    <link rel="stylesheet" href="vendor/adminlte/dist/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
   
@stop
