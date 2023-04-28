
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')

     
@stop

@section('content')

<style>
 
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

    input[type="date"]::before {
	color: #999999;
	content: attr(placeholder) !important;
}
input[type="date"] {
	color: #ffffff;
    
}
input[type="date"]:focus,
input[type="date"]:valid {
	color: #666666;
    
}
input[type="date"]:focus::before,
input[type="date"]:valid::before {
	content: "" !important;
}

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
</style>

<style> 
  body {
  font-family: 'Roboto', sans-serif;
}
</style>


<div class="row" style="background-color: white; border: 1px solid;">
<h8 style="font-size:14px" ><i class="fas fa-home"></i> Inicio / Almacen / Recolectas</h8>
   
    <div class="  col-sm-6 py-3" style="border-top: 1px solid; border-top-color:#bbb5bb; ">
        <h3>Listado de Recolectas</h3>
    </div>

 
    <div class="col-12">
<form action="/recolecta/filtrar" method="GET" >
        @csrf
        @method('GET')
        
<table >
    <tr >
        <td style="width: 250px; float:left;">
            <div class="input-group mb-2 " style="width: 250px;">

            <div class="input-group-prepend ">
                <span class="input-group-text" id="basic-addon1" style="height:40px ">  <img src="https://img.icons8.com/ios-filled/25/null/tear-off-calendar.png"/></span>
            </div>


            <input type="date" name="filtrodia" id="filtrodia" style="height:40px; border-radius: 0px;" class="form-control" placeholder="Seleccionar Fecha" aria-describedby="basic-addon1"> 

            </div>
                &nbsp; &nbsp;
        </td>

        
        <td style="width: 250px; float:left;">
        
            <div class="input-group mb-2" style="width: 250px;">
                &nbsp;
                <div class="input-group-prepend ">
                  <span class="input-group-text" id="basic-addon1" style="height:40px ">  <i class="fas fa-truck"></i></span>
                </div>

            <select id="filtrorepa" name="filtrorepa" style="width: 190px; height:40px; border-radius: 0px;">
                <option value="seleccionar">Sin asignar</option>
                @foreach($repartidores as $repartidor)
                <option value="{{ $repartidor->nombre }}">{{ $repartidor->nombre }}</option>
                @endforeach
            </select>


            </div>

        </td>

        <td style="width: 250px; float:left;">
            <button type="submit" class="btn btn-primary " style="width:45px; height:40px; border-radius: 5px;" > <i class="fas fa-search"></i></button>      
            <a href="/recolectas" class="btn btn-danger " style="width:45px; height:40px; border-radius: 5px;" > <i class="fas fa-times" style="color: #ffffff;"></i></a>     
        
        </td>

        <td align='right'>

            <div class="d-flex justify-content-end">
    
            <div >
                <a href="/recolectas/create" class="btn btn-primary float-right" style="color:white;"><i class="fas fa-database"></i> Agregar Recolecta</a>
            </div>

            </div>
        </td>
    </tr>
</table>


   
</form>
    

 
</div>



   




 


  <div class="table-responsive" style="border-top: 1px solid; border-top-color:#bbb5bb; ">



<table id="tvendedor" class="table table-bordered shadow-lg mt-4 cell-border">
<thead >
    <tr >
        <th scope="col">Comercio</th>
        <th scope="col">Dirección de recolecta</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Fecha de recolecta</th>
        <th scope="col">Fecha de entrega</th>
        <th scope="col" >Estado de recolecta</th>
        <th scope="col">Agencia</th>
        <th scope="col">Opciones</th>
    </tr>
</thead>
<tbody> 
   
    @for ($i=0; $i< count($recolectas ); $i++)
    <tr>
    <td>{{ $recolectas[$i]->nombre }}</td>
    <td>{{ $recolectas[$i]->direccion }}</td>
    <td>{{ $recolectas[$i]->telefono }}</td>
    <td>{{  date('d/m/Y', strtotime($recolectas[$i]->created_at))  }} </td>
    <td>{{  date('d/m/Y', strtotime($recolectas[$i]->fechaent))  }}</td>
    <td style="background: #e3e8e7">{{ $recolectas[$i]->estado }}</td>
    <td>{{ $recolectas[$i]->agencia }}</td>

    

    <td class="opciones text-center" style="">
    
   
   
 
    <a href="" class="dropdown-toggle" data-toggle="dropdown">

    <i class="fas fa-list"></i></a>
    <ul class="dropdown-menu">
     <div class="botones"> 
    <li class="botones">
    &nbsp;
    <i class="fas fa-edit"></i>
    &nbsp;&nbsp;
    <a href="/recolectas/{{ $recolectas[$i]->id }}/edit" ><button>Editar</button></a></li> 
    </div>  
	<li class="botones">
    <form >
   
    &nbsp;
    <i class="fas fa-eye"></i>
    &nbsp;&nbsp;
    <button type="button" class="edit" data-bs-toggle="modal" value="{{ $recolectas[$i]->id }}" data-bs-target="#exampleModal">Ver</button>
  
    
    </form>
            </li>
        <li class="botones">
    <form action="{{ route ('recolectas.destroy', $recolectas[$i]->id)}}" method="POST">
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










<script src="https://code.jquery.com/jquery-3.5.1.js"></script>



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

  $('#tvendedor').DataTable( {
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
