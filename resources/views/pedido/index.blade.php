
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')

    
@stop

@section('content')
<style>
    @media print{
@page {
size: landscape;
}
}
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
.pagina3{
    margin-bottom: 0px;
    margin-top: 0px;
    
}
.dataTables_paginate a:hover {
    color: white !important;
    background:#0d6efd !important;
    
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

.dt-buttons button {
    background: #0275d8;
    color: white;
    border-radius: 5px;
    font-size: 16px;
    float: right;
}
.imprimir{
    float: right;
    margin-top: -70px;
    margin-right: -200px;
}

.headt td {
  height: 15px !important;
  padding: 0px;
 font-size: 14px;
 background: #ffffff;
}
</style>
<br>
 
    <div class="row " style="background-color: white; border: 1px solid; ">
            <h8 style="font-size:14px"><i class="fas fa-home"></i> Inicio / Almacen / Envíos</h8>
        
            <div class="col-12">
           
                <div class="row " style="background-color: white; border-top: 1px solid; border-top-color:#bbb5bb; " >
        
                    <div class="  col-sm-6 " style="">
                    <h3>Reporte de envíos</h3>
                    </div>
                    <div class="col-sm-5">
    
                    </div>
                </div>
            </div>
    
 
<div class="col-12">
<form action="/pedido/filtrar" method="GET" >
        @csrf
        @method('GET')
        
<table >
    <tr>
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
        &nbsp; &nbsp;
            <div class="input-group-prepend ">
                <span class="input-group-text" id="basic-addon1" style="height:40px "> <i class="fas fa-route"></i></span>
            </div>

            <select id="route" name="route" style="width: 190px; height:40px; border-radius: 0px;" >
                <option value="seleccionar">Seleccionar ruta</option>
                <option value="Ruta 1">Ruta 1</option>
                <option value="Ruta 2">Ruta 2</option>
                <option value="Ruta 3">Ruta 3</option>
                <option value="Ruta 4">Ruta 4</option>
                <option value="Ruta 5">Ruta 5</option>
            </select>

        </div>

 
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
        <a href="/pedidos" class="btn btn-danger " style="width:45px; height:40px; border-radius: 5px;" > <i class="fas fa-times" style="color: #ffffff;"></i></a>     
        
        </td>

        <td align='right'>

        <div class="col-4 d-flex justify-content-end">
    
    <div class="opciones ">
     
    <a href="" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" style="border-radius: 5px; color:white;">

<i class="fas fa-list"></i>&nbsp;Opciones</a>
<ul class="dropdown-menu">

 <div class="botones" style="width:300px;"> 
<li class="botones">
&nbsp;
<i class="fas fa-database"></i>
&nbsp; &nbsp;
<a href="/pedidos/create" > <span style="font-size:15px;"> Agregar Nuevo</span></a></li> 

</div>  


<li class="botones">
&nbsp;
<i class="fas fa-print" ></i> 

<a href="/pedido/lista/{{ $pedidof }}/{{ $rutaf }}/{{ $repaf }}" ><span style="font-size:15px;">Imprimir Reporte</span></a></li> 


    </li>

 

</div>
</ul>


    </div>
        </td>
    </tr>
</table>






   

   
</form>
    

  
</div>




<div class="col-12">

<div class="row pt-2" style="background-color: white; border-top: 1px solid; border-top-color:#bbb5bb;">

<br>
<table id="tpedido" class="table table-bordered shadow-lg mt-4 cell-border">
<thead >
    <tr >
        
        <th scope="col">ID</th>
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
    
    @for ($i=0; $i< count($pedidos); $i++)
    <tr >
    <td style="font-weight: bolder; color: #484f55;">{{ $pedidos[$i]->id }}</td>
    <td style="font-weight: bolder; color: #484f55;">{{ $pedidos[$i]->vendedor }}</td>
    <td style="font-weight: bolder; color: #484f55;">{{ $pedidos[$i]->destinatario }}</td>
    <td>{{ $pedidos[$i]->direccion }}</td>
    <td>{{ $pedidos[$i]->tipo }}</td>
    <td style="background: #e3e8e7"> {{ $pedidos[$i]->estado }}</td>
    <td> {{ date('d/m/Y', strtotime($pedidos[$i]->fecha_entrega)) }}</td>
    <td> {{ $pedidos[$i]->agencia }}</td>
    <td> {{ $pedidos[$i]->repartidor }}</td>
    <td> {{ $pedidos[$i]->ruta }}</td>
    <td> {{ $pedidos[$i]->nota }}</td>
    <span hidden id="nom{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->vendedor }}</span>
    <span hidden id="des{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->destinatario }}</span>
    <span hidden id="tel{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->telefono }}</span>
    <span hidden id="dir{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->direccion}}</span>
    <span hidden id="fec{{ $pedidos[$i]->id }}"> {{  date('d/m/Y', strtotime($pedidos[$i]->created_at))  }}</span>
    <span hidden id="fece{{ $pedidos[$i]->id }}"> {{  date('d/m/Y', strtotime($pedidos[$i]->fecha_entrega))}}</span>
    <span hidden id="tip{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->tipo}}</span>
    <span hidden id="este{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->estado}}</span>
    <span hidden id="estp{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->pagado}}</span>
    <span hidden id="pre{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->precio}}</span>
    <span hidden id="env{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->envio}}</span>
    <span hidden id="tot{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->total}}</span>
    <span hidden id="ing{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->ingresado}}</span>
    <span hidden id="ang{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->agencia}}</span>
    <span hidden id="rep{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->repartidor}}</span>
    <span hidden id="rut{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->ruta}}</span>
    <span hidden id="not{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->nota}}</span>
    <span hidden id="fot{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->foto}}</span>
    <span hidden id="fot2{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->foto2}}</span>
    <span hidden id="fot3{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->foto3}}</span>

    <td class="opciones text-center" style="">
    
    
  
 
    <a href="" class="dropdown-toggle" data-toggle="dropdown">

    <i class="fas fa-list"></i></a>
    <ul class="dropdown-menu">
     <div class="botones"> 
    <li class="botones">
    &nbsp;
    <i class="fas fa-edit"></i>
    &nbsp;&nbsp;
    <a href="/pedidos/{{ $pedidos[$i]->id }}/edit" ><button>Editar</button></a></li> 
    </div>  
	<li class="botones">
    <!--
    <form action="{{ route ('pedidos.show', $pedidos[$i]->id)}}" method="POST">
    @csrf
    @method('GET')
-->
    &nbsp;
    <i class="fas fa-eye"></i>
    &nbsp;&nbsp;
    <button type="button" class="edit" data-bs-toggle="modal" value="{{ $pedidos[$i]->id }}" data-bs-target="#exampleModal">Ver</button>
</form>
</li>
<li class="botones">
    <form action="{{ route ('pedidos.destroy', $pedidos[$i]->id)}}" method="POST">
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
                    <td  colspan="3"><h4>Datos del Comercio</h4>
                        <hr>
                    </td>
                    
                </tr>

                <tr class="headt">
                    <td width="230px">Nombre de comercio / Tienda </td>
                    <td> <span ></span> <label for="" id="nombre"></label> </td>
                    <td rowspan="15"> <span ></span> <label for="" > </label> <img  alt="" id="fotos" width="250"> 
                    <br> <img  alt="" id="fotos2" width="250">
                    <br> <img  alt="" id="fotos3" width="250"></td>
                </tr>

                <tr class="headt">
                    <td width="230px">Dirección </td>
                    <td> <span ></span> <label for="" id="dire"></label> </td>
                    
                </tr>
                

                <tr class="headt">
                    <br>
                    <td  colspan="3" class="pt-2"> <h4> Datos del destinatario</h4>
                        <hr>
                    </td>
                      
                </tr>

                <tr class="headt">
                    <td width="230px">Destinatario </td>
                    <td> <span ></span> <label for="" id="desti"></label> </td>
                    
                </tr>
                <tr class="headt">
                    <td width="230px">Telefono </td>
                    <td> <span ></span> <label for="" id="telef"></label> </td>
                    
                </tr>
                <tr class="headt">
                    <td width="230px">Direccion de entrega </td>
                    <td> <span ></span> <label for="" id="direc"></label> </td>
                    
                </tr>
                

                <tr class="headt">
                    <br>
                    <td  colspan="3" class="pt-2"> <h4> Datos del paquete</h4>
                        <hr>
                    </td>
                      
                </tr>

                <tr class="headt">
                    <td width="230px">Fecha de creacion </td>
                    <td> <span ></span> <label for="" id="fecha"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Fecha de entrega </td>
                    <td> <span ></span> <label for="" id="fechen"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Tipo de envio </td>
                    <td> <span ></span> <label for="" id="tipoe"></label> </td>  
                </tr>
                </tr>
                <tr class="headt">
                    <td width="230px">Estado del envio </td>
                    <td> <span ></span> <label for="" id="este"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Estado del pago </td>
                    <td> <span ></span> <label for="" id="estp"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Precio del paquete </td>
                    <td> <span ></span> <label for="" id="preci"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Costo del envio </td>
                    <td> <span ></span> <label for="" id="envio"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Total a cobrar </td>
                    <td> <span ></span> <label for="" id="total"></label> </td>  
                </tr>

                <tr class="headt">
                    <br>
                    <td  colspan="3" class="pt-2"> <h4> Datos internos</h4>
                        <hr>
                    </td>
                      
                </tr>

                <tr class="headt">
                    <td width="230px">Usuario que registró </td>
                    <td> <span ></span> <label for="" id="ingre"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Recepción agencia </td>
                    <td> <span ></span> <label for="" id="agen"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Repartidor </td>
                    <td> <span ></span> <label for="" id="repar"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Ruta </td>
                    <td> <span ></span> <label for="" id="ruta1"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Nota </td>
                    <td> <span ></span> <label for="" id="nota1"></label> </td>  
                </tr>


            </table>


        </div>



       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times" style="color: #ffffff;"></i> &nbsp; Cerrar</button>
        <a id="impri" class="btn btn-primary" style="color: #ffffff;">Imprimir</a>
      </div>
    </div>
  </div>
</div>


<!-- Termina Modal -->








</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>




	
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />


    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" defer></script>
\
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js" defer></script>

                 
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js" defer></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" defer></script>

    
    
                 

    <!--
 <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js" defer></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js" defer></script>
-->



<script>
       
        
$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
		var nomb=$('#nom'+id).text();
        var dest=$('#des'+id).text();
        var tele=$('#tel'+id).text();
        var dire=$('#dir'+id).text();
        var fech=$('#fec'+id).text();
        var feche=$('#fece'+id).text();
        var tipo=$('#tip'+id).text();
        var est=$('#este'+id).text();
        var esp=$('#estp'+id).text();
        var prec=$('#pre'+id).text();
        var envi=$('#env'+id).text();
        var tota=$('#tot'+id).text();
        var ingr=$('#ing'+id).text();
        var ange=$('#ang'+id).text();
        var repa=$('#rep'+id).text();
        var ruta=$('#rut'+id).text();
        var nota=$('#not'+id).text();
        var foto=$('#fot'+id).text();
        var foto2=$('#fot2'+id).text();
        var foto3=$('#fot3'+id).text();
        //foti= '/imgs/fotos/';

		
	
		$('#edit').modal('show');
		$('#nombre').text(nomb);
        $('#desti').text(dest);
        $('#telef').text(tele);
        $('#direc').text(dire);
        $('#fecha').text(fech);
        $('#fechen').text(feche);
        $('#tipoe').text(tipo);
        $('#este').text(est);
        $('#estp').text(esp);
        $('#preci').text(prec);  
        $('#envio').text(envi);
        $('#total').text(tota);
        $('#ingre').text(ingr);
        $('#agen').text(ange);
        $('#repar').text(repa);
        $('#ruta1').text(ruta);
        $('#nota1').text(nota);

        $('#empresa').text(empre);
        $('#giro').text(gir);   
 
        $('#nrc').text(nr);
        //$('#fotos').src(fot);
        var ide = '/repartidor/imprimir/'+id ;
		$('#fotos').attr("src", foto);
        $('#fotos2').attr("src", foto2);
        $('#fotos3').attr("src", foto3);

        //$('#impri a').prop("href", ide);
        //$('.paginacion a').prop('href','http://nuevaUrl.com');

        document.getElementById("impri").href = ide;
	});
});
 


        $(document).ready(function () {
    $('#tpedido').DataTable(
        {
            language: {
            "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
           
        },
        
        dom: '<"cambiar" f><"pagina2" p><"cambiar2"l>tri<"pagina1" p>',
        buttons: [
            { extend: 'print', text: 'Imprimir reporte',
                orientation: 'landscape',
                
                customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' )
                        .prepend(
                            '<h2>probando sonido</h2>'
                        );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact')
                        .css( 'font-size', 'inherit', );
                },
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9 ]
                }
            
            },
           
        ]

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
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" />
    
                                                 
    <!--
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" />
-->
   
@stop
