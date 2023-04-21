
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')

    
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
.pagina1{
    margin-bottom: 30px;
    margin-top: -30px;
    
}
.pagina2{
    
    margin-bottom: 5px;
    padding-top: 15px;
    
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
.headt td {
  height: 15px !important;
  padding: 0px;
 font-size: 14px;
 background: #ffffff;
}
</style>

  
<div class="row" style="background-color: white; border: 1px solid;">
<h8 style="font-size:14px" ><i class="fas fa-home"></i> Inicio / Almacen / Comercios</h8>
   
    <div class="  col-sm-6 py-3" style="border-top: 1px solid; border-top-color:#bbb5bb; ">
        <h3>Listado de Comercios</h3>
    </div>
    <div class="  col-sm-6 py-3" style="border-top: 1px solid; border-top-color:#bbb5bb; ">
    <a href="/vendedores/create" class="btn btn-primary float-right" style="color:white;"><i class="fas fa-database"></i> Agregar Comercio</a>
</div>




<div class="col-12" style="border-top: 1px solid; border-top-color:#bbb5bb; ">
<br>
    <table id="tvendedor" class="table table-bordered shadow-lg mt-4 cell-border">
        <thead>
    <tr >
        
        <th scope="col">Comercio</th>
        <th scope="col">Direccion</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Whatsapp</th>
        <th scope="col">Tipo de comercio</th>
        <th scope="col">Estado del comercio</th>
        <th scope="col">Fecha de alta</th>
        <th scope="col">Fecha de baja</th>
        <th scope="col">Agencia</th>
        
        <th scope="col">Opciones</th>
    </tr>
        </thead>
    <tbody>
    @for ($i=0; $i< count($vendedores); $i++)
    <tr>
    
    <td><span id="firstname{{ $vendedores[$i]->id }}">{{ $vendedores[$i]->nombre }} </span></td>
    <td><span id="dire{{ $vendedores[$i]->id }}">{{ $vendedores[$i]->direccion }}</span></td>
    <td><span id="tele{{ $vendedores[$i]->id }}">{{ $vendedores[$i]->telefono }}</span></td>
    <td><span id="what{{ $vendedores[$i]->id }}">{{ $vendedores[$i]->whatsapp }}</span></td>
    <td><span id="tipo{{ $vendedores[$i]->id }}">{{ $vendedores[$i]->tipovende }}</span></td>
    <td><span id="estado{{ $vendedores[$i]->id }}">{{ $vendedores[$i]->estado }}</span></td>
    <td><span id="alta{{ $vendedores[$i]->id }}">{{  date("d/m/Y", strtotime($vendedores[$i]->created_at))  }} </span></td>
    <td><span id="baja{{ $vendedores[$i]->id }}">{{  date("d/m/Y", strtotime($vendedores[$i]->fbaja))  }}</span></td>
    <td><span id="agen{{ $vendedores[$i]->id }}">{{ $vendedores[$i]->agencia }}</span></td>
    
    <span hidden id="correo{{ $vendedores[$i]->id }}"> {{ $vendedores[$i]->correo }}</span>
    <span hidden id="titular{{ $vendedores[$i]->id }}"> {{ $vendedores[$i]->titular }}</span>
    <span hidden id="banco{{ $vendedores[$i]->id }}"> {{ $vendedores[$i]->banco }}</span>
    <span hidden id="cuenta{{ $vendedores[$i]->id }}"> {{ $vendedores[$i]->cuenta }}</span>
    <span hidden id="tcuenta{{ $vendedores[$i]->id }}"> {{ $vendedores[$i]->tcuenta }}</span>
    <span hidden id="chivo{{ $vendedores[$i]->id }}"> {{ $vendedores[$i]->chivo }}</span>
    <span hidden id="tmoney{{ $vendedores[$i]->id }}"> {{ $vendedores[$i]->tmoney }}</span>
    <span hidden id="empresa{{ $vendedores[$i]->id }}"> {{ $vendedores[$i]->empresa }}</span>
    <span hidden id="giro{{ $vendedores[$i]->id }}"> {{ $vendedores[$i]->giro }}</span>
    <span hidden id="dui{{ $vendedores[$i]->id }}"> {{ $vendedores[$i]->dui }}</span>
    <span hidden id="iva{{ $vendedores[$i]->id }}"> {{ $vendedores[$i]->niva }}</span>
    <span hidden id="nrc{{ $vendedores[$i]->id }}"> {{ $vendedores[$i]->nrc }}</span>



    <td class="opciones text-center" style="">
    
   
   
 
    <a href="" class="dropdown-toggle" data-toggle="dropdown">

    <i class="fas fa-list"></i></a>
    <ul class="dropdown-menu">
     <div class="botones"> 
    <li class="botones">
    &nbsp;
    <i class="fas fa-edit"></i>
    &nbsp;&nbsp;
    <a href="/vendedores/{{ $vendedores[$i]->id }}/edit" ><button>Editar</button></a></li> 
    </div>  
	<li class="botones">
    <form >
   
    &nbsp;
    <i class="fas fa-eye"></i>
    &nbsp;&nbsp;
    <button type="button" class="edit" data-bs-toggle="modal" value="{{ $vendedores[$i]->id }}" data-bs-target="#exampleModal">Ver</button>
 
    
    </form>
            </li>
        <li class="botones">
    <form action="{{ route ('vendedores.destroy', $vendedores[$i]->id)}}" method="POST">
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
                    <td  colspan="2"><h4>Informacion del Comercio </h4>
                        <hr>
                    </td>
                    
                </tr>
                <tr class="headt">
                    <td width="230px">Comercio / tienda </td>
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
                    <td width="200px">Whatsapp</td>
                    <td> <span ></span> <label for="" id="what"></label> </td>
                    
                </tr>
                <tr class="headt">
                    <td width="200px">Fecha de Alta</td>
                    <td> <span ></span> <label for="" id="alta"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Fecha de Baja</td>
                    <td> <span ></span> <label for="" id="baja"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Tipo de Comercio</td>
                    <td> <span ></span> <label for="" id="tipo"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Correo</td>
                    <td> <label for="" id="corre"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Estado del comercio </td>
                    <td> <label for="" id="estado"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Agencia </td>
                    <td> <label for="" id="agenci"></label> </td>
                </tr>

                <tr class="headt">
                    <br>
                    <td  colspan="2" class="pt-2"> <h4> Datos Bancarios</h4>
                        <hr>
                    </td>
                    
                </tr>
                <tr class="headt">
                    <td width="230px">Nombre del titular de la cuenta </td>
                    <td> <label for="" id="titul"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Nombre del Banco </td>
                    <td> <label for="" id="banco"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Número de cuenta </td>
                    <td> <label for="" id="cuenta"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Tipo de cuenta </td>
                    <td> <label for="" id="tcuenta"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Numero de Chivo Wallet </td>
                    <td> <label for="" id="chivo"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Numero de Tigo Money </td>
                    <td> <label for="" id="tmoney"></label> </td>
                </tr>
                <tr class="headt">
                    <td  colspan="2" class="pt-2"> <h4>Información Fiscal</h4>
                        <hr>
                    </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Nombre de la empresa</td>
                    <td> <label for="" id="empresa"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Giro</td>
                    <td> <label for="" id="giro"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Numero de DUI </td>
                    <td> <label for="" id="dui"></label> </td>
                </tr>
                <tr tr class="headt">
                    <td width="200px">Numero de IVA </td>
                    <td><label for="" id="iva"></label> </td>
                </tr>
                <tr class="headt">
                    <td width="200px">Numero de NRC </td>
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





<script src="https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"></script>



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>




	
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />


    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" defer></script>

    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js" defer></script>

<script>
       


       $(document).ready(function () {
    $('#tvendedor').DataTable(
        {
            language: {
            "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
           
        },
        
        dom: '<"cambiar" f><"pagina2" p><"cambiar2"l>tri<"pagina1" p>',
       

        } /*hasata aqui*/
    );
});



  
$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
		var first=$('#firstname'+id).text();
        var direc=$('#dire'+id).text();
        var telef=$('#tele'+id).text();
        var whats=$('#what'+id).text();
        var alt=$('#alta'+id).text();
        var baj=$('#baja'+id).text();
        var tip=$('#tipo'+id).text();
        var email=$('#correo'+id).text();
        var esta=$('#estado'+id).text();
        var agenc=$('#agen'+id).text();
        var titu=$('#titular'+id).text();
        var banc=$('#banco'+id).text();
        var cuent=$('#cuenta'+id).text();
        var tcuent=$('#tcuenta'+id).text();
        var chiv=$('#chivo'+id).text();
        var tmon=$('#tmoney'+id).text();
        var empre=$('#empresa'+id).text();
        var gir=$('#giro'+id).text();
        var du=$('#dui'+id).text();
        var iv=$('#iva'+id).text();
        var nr=$('#nrc'+id).text();
		
	
		$('#edit').modal('show');
		$('#efirstname').text(first);
        $('#dire').text(direc);
        $('#tele').text(telef);
        $('#what').text(whats);
        $('#alta').text(alt);
        $('#baja').text(baj);
        $('#tipo').text(tip);
        $('#corre').text(email);
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
        $('#dui').text(du);
        $('#iva').text(iv);
        $('#nrc').text(nr);
		
	});
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
    
   
@stop
