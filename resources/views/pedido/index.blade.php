
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
    margin-right: 45px;
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
.opciones a:link, a:visited, a:active {
            text-decoration:none;
            color: black;
        }
.cambiar {
   
    float: left;
      
    }

.cambiar2 {
   
    float: right;
    margin-right: 170px;
    margin-bottom: 15px; 
    margin-top: -5px; 
}
/*
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


::-webkit-calendar-picker-indicator {
    display: none;
}
*/
.pagina1{
    margin-bottom: 30px;
    margin-top: -30px;
}
.pagina2{
    
    margin-bottom: -25px;
    padding-top: 10px
}
.pagina3{
    margin-bottom: 0px;
    margin-top: 0px;
    
}


input[type="date"]::-webkit-calendar-picker-indicator {
        display: block;
        background: transparent;
        bottom: 0;
        color: transparent;
        cursor: pointer;
        height: auto;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: auto;
    }



</style>
<br>

    <div class="row  p-0" style="background-color: white; border: 1px solid;">
            <h8 style="font-size:14px"><i class="fas fa-home"></i> Inicio / Almacen / Envíos</h8>
            <div class="col-12">
        <div class="row " style="background-color: white; " >
    <hr>
            <div class="  col-sm-6 " style="">
                <h3>Envíos del día</h3>
            </div>
            <div class="col-sm-5">
    
            </div>
        </div>
        </div>
<hr>

<div class="col-12">
<div class="row" style="background-color: white; p-0">

    <div class="col-3 ">
        <form action="/pedido/filtrar" method="GET" >
        @csrf
        @method('GET')
        
        <div class="input-group mb-2">

            <div class="input-group-prepend ">
            <span class="input-group-text" id="basic-addon1" style="height:40px ">  <img src="https://img.icons8.com/ios-filled/25/null/tear-off-calendar.png"/></span>
            </div>
      

    <input type="date" name="filtrodia" id="filtrodia" style="width: 180px; height:40px; border-radius: 0px;"  class="form-control" > 

        </div>
    </div>


  <div class="col-2 p-0">
      
        
        <div class="input-group mb-2">

            <div class="input-group-prepend ">
            <span class="input-group-text" id="basic-addon1" style="height:40px "> <i class="fas fa-route"></i></span>
            </div>
      
            <select id="route" name="route" style="width: 170px; height:40px; border-radius: 0px;" >
            <option value="seleccionar">Seleccionar ruta</option>
       <option value="Ruta 1">Ruta 1</option>
       <option value="Ruta 2">Ruta 2</option>
       <option value="Ruta 3">Ruta 3</option>
       <option value="Ruta 4">Ruta 4</option>
       <option value="Ruta 5">Ruta 5</option>
       </select>
    
        </div>
    </div>

    


    <div class="col-3">
        <button type="submit" class="btn btn-primary " style="width: 150px; height:40px; border-radius: 5px;" > <i class="fas fa-search"></i> Consultar</button>      
        
    </div>
</form>
    
<div class="col-4 d-flex justify-content-end">
    
    <div class="opciones ">
     
    <a href="" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" style="border-radius: 5px; color:white;">

<i class="fas fa-list"></i>&nbsp;Opciones</a>
<ul class="dropdown-menu">

 <div class="botones"> 
<li class="botones">
&nbsp;
<i class="fas fa-database"></i>
&nbsp;&nbsp;
<a href="/pedidos/create" >Agregar Nuevo</a></li> 

</div>  


<li class="botones">


<a href="/pedido/lista/{{ $pedidof }}/{{ $rutaf }}" >

    <i class="fas fa-print" style="margin-left: 10px;"></i> 
      
<button style="padding: 0px;">&nbsp; Imprimir Reporte</button></a></li> 


    </li>
</ul>


</div>



    </div>
  
</div>

</div>   
    

 
</form>




<div class="col-12">

<div class="row" style="background-color: white;">
<hr>
<br>
<table id="tpedido" class="table table-bordered shadow-lg mt-4">
<thead >
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
        <th scope="col">Nota</th>
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
    <td> {{ $pedido->nota }}</td>
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
        
        dom: '<"cambiar" f><"pagina2" p><"cambiar2"l>tri<"pagina1" p>',
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
