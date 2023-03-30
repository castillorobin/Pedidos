
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
    
    
@stop

@section('content')
<style>
    /*
    .dropdown-menu-center {
  left: 2% !important;
  right: auto !important;
  text-align: center !important;
  transform: translate(-50%, 0) !important;
        margin-top: 25px;
}
*/
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
.cambiar {
   
    float: left;
      
    }

.cambiar2 {
   
   float: right;
     
}

input[type="date"]::-webkit-calendar-picker-indicator {
    background: transparent;
    bottom: 0;
    color: transparent;
    cursor: pointer;
    
    left: 0;
    position: absolute;
    right: 50px;
    top: 0;
    border-radius: 0px;
   
}

</style>
<div class="row" > <br></div>
<div class="row mx-3 " style="background-color: white;">
<h6 ><i class="fas fa-home"></i> Inicio / Almacen / Envíos</h6>
<div class="row " style="background-color: white;">
    <hr>
<div class="  col-sm-6" >
<h3>Envíos del día</h3>
</div>
<div class="col-sm-6">
<a href="/pedidos/create" class="btn btn-primary float-right" ><i class="fas fa-database"></i> Agregar Envio</a>
</div>
<hr>
</div>

<div class="row" style="background-color: white;">

<div class="col-sm-3 ">
<form action="/pedido/filtrar" method="GET" >
@csrf
    @method('GET')
<label for="" class="col-sm-6 col-form-label">Filtrar por dia:</label>
<div class="input-group mb-2">

  <div class="input-group-prepend ">
    <span class="input-group-text" id="basic-addon1" style="height:40px ">  <img src="https://img.icons8.com/ios-filled/25/null/tear-off-calendar.png"/></span>
  </div>
  <div class="input-group-prepend ">
  <input type="date" name="filtrodia" id="filtrodia" style="width: 200px; height:40px; border-radius: 0px;"  class="form-control" > 
  </div>
  
  &nbsp; &nbsp;
  <button type="submit" class="btn btn-primary " style="width: 150px; height:40px"> <i class="fas fa-search"></i> Consultar</button>
</div>

    </div>



</form>


</div>
<div class="row" style="background-color: white;">

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
        <th scope="col">Ruta</th>
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
    <td> {{ $pedido->ruta }}</td>
    <td class="opciones">
    
    
  
 
    <a href="" class="dropdown-toggle" data-toggle="dropdown">

    <i class="fas fa-list"></i></a>
    <ul class="dropdown-menu">
     <div class="botones"> 
    <li class="botones">
    &nbsp;
    <i class="fas fa-edit"></i>
    &nbsp;&nbsp;
    <a href="/pedidos/{{ $pedido->id }}/edit" ><button>Editar</button></a></li> 
    </div>  
	<li class="botones">
    <form action="{{ route ('pedidos.show', $pedido->id)}}" method="POST">
    @csrf
    @method('GET')
    &nbsp;
    <i class="fas fa-eye"></i>
    &nbsp;&nbsp;
    <button>Ver</button>
</form>
</li>
<li class="botones">
    <form action="{{ route ('pedidos.destroy', $pedido->id)}}" method="POST">
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
    @endforeach
</tbody>
</table>


</div>

</div>
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
