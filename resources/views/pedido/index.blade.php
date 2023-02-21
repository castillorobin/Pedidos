
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
    <h1 style="text-align:center">Melo Express</h1>
    
@stop

@section('content')

<h1>Listado de Envios</h1>
<div ><a href="/pedidos/create" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal"> Agregar Envio</a>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar envio</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      


        <div class="container ">
<form action="/pedidos" method="POST">
    @csrf
<div class="row border" style="background-color: white; padding: 15px; border-radius:20px;">

<div class="row mb-4">
    


    <div class="  col-sm-6">
    <label for="inputEmail3" class="col-sm-4 col-form-label">ID DE ENVIO</label>
    <div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/fluency-systems-regular/48/null/checked-identification-documents.png" width="25" /></span>
  </div>
  <input type="text" class="form-control" placeholder="ID" aria-label="Username" aria-describedby="basic-addon1">
</div>
    </div>
    
    <div class="col-sm-4 text-center">
    <label for="inputEmail3" class="col-sm-8 col-form-label">CODIGO DE BARRAS</label>
    <img width="110" src="vendor/adminlte/dist/img/barra.jpg" alt="" >
    </div>

    </div>





<div class="row mb-3">


    <div class="col-sm-12">
    <label for="" class="col-sm-6 col-form-label">NOMBRE DE COMERCIO/TIENDA</label>
    <select id="vende" name="vende" class="form-control">
       <option >-SELECCIONAR COMERCIO-</option>
       
        @foreach($vendedores as $vendedor)
       <option value="{{ $vendedor->nombre }}">{{ $vendedor->nombre }}</option>
       @endforeach
       </select>

    </div>
    </div>

    <div class="row mb-3 text-center">
        <h5>------------------------------DATOS DEL DESTINATARIO-------------------------------</h5>
     
        <P></P>
    
    
    <div class="col-sm-6 ">
    <label for="inputEmail3" class="col-sm-4 col-form-label">DESTINATARIO</label>
    <input type="text" id="tele" name="tele" class="form-control" tabindex="3" placeholder="DESTINATARIO">
    </div>
    
    <div class="col-sm-6">
    <label for="inputEmail3" class="col-sm-4 col-form-label">TELEFONO</label>
    <input type="text" id="what" name="what" class="form-control" tabindex="3" placeholder="TELEFONO">
    </div>
    </div>

    <div class="row mb-3">


<div class="col-sm-12">
<label for="" class="col-sm-6 col-form-label">DIRECCION DE ENTREGA</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/glyph-neue/25/null/order-delivered.png"/></span>
  </div>
  <input type="text" class="form-control" placeholder="DIRECCION" aria-label="Username" aria-describedby="basic-addon1">
</div>

</div>
</div>

<div class="col-sm-6 ">
<label for="" class="col-sm-6 col-form-label">FECHA DE CREACION</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/tear-off-calendar.png"/></span>
  </div>
  <input type="text" class="form-control" placeholder="{{ $date }}" aria-label="Username" aria-describedby="basic-addon1">
</div>
    </div>
    
    <div class="col-sm-6">
    <label for="" class="col-sm-6 col-form-label">FECHA DE ENTREGA</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/tear-off-calendar.png"/></span>
  </div>
  <input type="date" class="form-control" placeholder="ENTREGA" aria-label="Username" aria-describedby="basic-addon1">
</div>
    </div>


    <div class="row">

<div class="col-sm-4">
<label for="" class="col-sm-4 col-form-label">PRECIO</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/cheap-2.png"/></span>
</div>
<input type="text" class="form-control" placeholder="PRECIO" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>



<div class="col-sm-4">
<label for="" class="col-sm-4 col-form-label">ENVIO</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/cheap-2.png"/></span>
</div>
<input type="text" class="form-control" placeholder="ENVIO" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>


<div class="col-sm-4">
<label for="" class="col-sm-4 col-form-label">TOTAL</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/cheap-2.png"/></span>
</div>
<input type="text" class="form-control" placeholder="TOTAL" aria-label="Username" aria-describedby="basic-addon1" disabled>
</div>
</div>


<div class="col-sm-12 text-center">
<h5>------------------------------DATOS INTERNOS-------------------------------</h5>
</div>
<div class="col-sm-6 ">


<label for="" class="col-sm-6 col-form-label">ESTADO DEL ENVIO</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/deliver-food.png"/></span>
  </div>
  <select id="vende" name="vende" class="form-control">
       <option >-SELECCIONAR ESTADO-</option>
       <option >CREADO</option>
       <option >EN RUTA</option>
       <option >ENTREGADO</option>
       <option >NO ENTREGADO EN LOCAL</option>
       <option >REPROGRAMADO</option>
       <option >DEVUELTO AL VENDEDOR</option>
       </select>
</div>
    </div>
    
    <div class="col-sm-6">
    <label for="" class="col-sm-6 col-form-label">ESTADO DEL PAGO</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/cash-in-hand.png"/></span>
  </div>
  <select id="vende" name="vende" class="form-control">
       <option >POR PAGAR</option>
       <option >PAGADO</option>
       </select>
</div>
    </div>



    <div class="col-sm-6 ">


<label for="" class="col-sm-6 col-form-label">TIPO DE SERVICIO</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/online-support.png"/></span>
  </div>
  <select id="vende" name="vende" class="form-control">
       <option >-SELECCIONAR ESTADO-</option>
       <option >RECOLECTA</option>
       <option >ENTREGA</option>
       <option >ENTREGA Y RECOLECTA</option>
  
       </select>
</div>
    </div>
    
    <div class="col-sm-6">
    <label for="" class="col-sm-6 col-form-label">TIPO DE ENVIO</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/25/null/external-delivery-logistic-delivery-kiranshastry-solid-kiranshastry.png"/></span>
  </div>
  <select id="vende" name="vende" class="form-control">
       <option >-SELECCIONAR ESTADO-</option>
       <option >PERSONALIZADO</option>
       <option >PERSONALIZADO DEPARTAMENTAL</option>
       <option >PUNTO FIJO</option>
       <option >CASILLERO</option>
       </select>
</div>
    </div>
    <div class="col-sm-12">
<label for="" class="col-sm-6 col-form-label">NOTA</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/notepad.png"/></span>
  </div>
  <input type="text" class="form-control" placeholder="NOTA" aria-label="Username" aria-describedby="basic-addon1">
</div>

</div>


<div class="col-sm-6 ">


<label for="" class="col-sm-6 col-form-label">INGRESADO POR</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/external-itim2101-lineal-itim2101/25/null/external-operator-logistics-and-delivery-itim2101-lineal-itim2101.png"/></span>
  </div>
  <select id="vende" name="vende" class="form-control">
       <option >-SELECCIONAR ESTADO-</option>
       <option >ERICKº</option>
       <option >KAREN</option>
       <option >ALEIDI</option>
       <option >GABI</option>
     
       </select>
</div>
    </div>
    
    <div class="col-sm-6">
    <label for="" class="col-sm-6 col-form-label">AGENCIA</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/ios-filled/25/null/online-store.png"/></span>
  </div>
  <select id="vende" name="vende" class="form-control">
       <option >-SELECCIONAR ESTADO-</option>
       <option >SAN SALVADOR</option>
       <option >SAN MIGUEL</option>
       <option >SANTA ANA</option>
       </select>
</div>
    </div>


    <div class="col-sm-6 ">


<label for="" class="col-sm-6 col-form-label">REPARTIDOR</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/external-kmg-design-detailed-outline-kmg-design/25/null/external-delivery-man-logistics-delivery-kmg-design-detailed-outline-kmg-design-2.png"/></span>
  </div>
  <select id="vende" name="vende" class="form-control">
       <option >-SELECCIONAR ESTADO-</option>
       <option >ERICK</option>
       <option >KAREN</option>
       <option >CARLOS</option>
       <option >JUAN</option>
     
       </select>
</div>
    </div>
    
    <div class="col-sm-6">
    <label for="" class="col-sm-6 col-form-label">RUTA</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/external-wanicon-lineal-wanicon/25/null/external-map-logistics-wanicon-lineal-wanicon.png"/></span>
  </div>
  <select id="vende" name="vende" class="form-control">
       <option >-SELECCIONAR ESTADO-</option>
       <option >RUTA 1</option>
       <option >RUTA 2</option>
       <option >RUTA 3</option>
       <option >RUTA 4</option>
       </select>
</div>
    </div>


     <P></P>

     <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">FOTO DEL PAQUETE</label>

    <div class="col-sm-8">
    <input type="file" id="foto" name="foto" class="form-control" tabindex="10">
    </div>
    </div>
    <br>


</div>










    </div>


    

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>



</div>


</div>

<br>
<table id="tpedido" class="table table-bordered table-striped shadow-lg mt-4">
<thead class="table-dark">
    <tr >
        <th scope="col">ID</th>
        <th scope="col">Comercio</th>
        <th scope="col">Cliente</th>
        <th scope="col">Direccion</th>
        <th scope="col">Telefono</th>
        <th scope="col">Tipo</th>
        <th scope="col">Estado</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($pedidos as $pedido)
    <tr >
    <td style="font-weight: bolder; color: #0080ff;">{{ $pedido->id }}</td>
    <td style="font-weight: bolder; color: #0080ff;">{{ $pedido->vendedor }}</td>
    <td style="font-weight: bolder; color: #0080ff;">{{ $pedido->destinatario }}</td>
    <td>{{ $pedido->direccion }}</td>
    <td>{{ $pedido->telefono }}</td>
    <td>{{ $pedido->tipo }}</td>

    @if($pedido->estado =='Pendiente') 
    <td style="color: red; font-weight:bolder;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
</svg>  {{ $pedido->estado }}</td>
    @endif
    @if($pedido->estado =='Entregado') 
    <td style="color: #008040; font-weight:bolder;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
  <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
</svg>  {{ $pedido->estado }}</td>
    @endif
    @if($pedido->estado =='En Camino') 
    <td style="color: #F1C40F; font-weight:bolder;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg> {{ $pedido->estado }}</td>
    @endif
    @if($pedido->estado =='Cancelado') 
    <td style="color: black; font-weight:bolder;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg> {{ $pedido->estado }}</td>
    @endif



    <td style="width: 400px; text-align:center;">
        <div style="display:inline-flex; " >
    <form action="{{ route ('pedidos.show', $pedido->id)}}" method="POST">
    @csrf
    @method('GET')
    <button class="btn btn-primary" style="margin-right:10px;">Ver</button>
</form>
        <form action="{{ route ('pedidos.destroy', $pedido->id)}}" method="POST">
        <a href="/pedidos/{{ $pedido->id }}/edit" class="btn btn-info">Editar</a>
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Borrar</button>
        </form>
        &nbsp;&nbsp;
        <form action="/pedido/etiqueta/{{ $pedido->id }}" method="POST">
    @csrf
    @method('GET')
    <button class="btn btn-success" style="margin-right:10px;">Etiqueta de Envio</button>
</form>
    
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
        search: "Buscar pedido:",
        "processing": "Procesando...",
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "No se encontraron resultados",
    "emptyTable": "Ningún dato disponible en esta tabla",
    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
    "search": "Buscar:",
    "infoThousands": ",",
    "loadingRecords": "Cargando...",
    "paginate": {
        "first": "Primero",
        "last": "Último",
        "next": "Siguiente",
        "previous": "Anterior"
    },
    "aria": {
        "sortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad",
        "collection": "Colección",
        "colvisRestore": "Restaurar visibilidad",
        "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
        "copySuccess": {
            "1": "Copiada 1 fila al portapapeles",
            "_": "Copiadas %ds fila al portapapeles"
        },
        "copyTitle": "Copiar al portapapeles",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
            "-1": "Mostrar todas las filas",
            "_": "Mostrar %d filas"
        },
        "pdf": "PDF",
        "print": "Imprimir",
        "renameState": "Cambiar nombre",
        "updateState": "Actualizar",
        "createState": "Crear Estado",
        "removeAllStates": "Remover Estados",
        "removeState": "Remover",
        "savedStates": "Estados Guardados",
        "stateRestore": "Estado %d"
    },
    "autoFill": {
        "cancel": "Cancelar",
        "fill": "Rellene todas las celdas con <i>%d<\/i>",
        "fillHorizontal": "Rellenar celdas horizontalmente",
        "fillVertical": "Rellenar celdas verticalmentemente"
    },
    "decimal": ",",
    "searchBuilder": {
        "add": "Añadir condición",
        "button": {
            "0": "Constructor de búsqueda",
            "_": "Constructor de búsqueda (%d)"
        },
        "clearAll": "Borrar todo",
        "condition": "Condición",
        "conditions": {
            "date": {
                "after": "Despues",
                "before": "Antes",
                "between": "Entre",
                "empty": "Vacío",
                "equals": "Igual a",
                "notBetween": "No entre",
                "notEmpty": "No Vacio",
                "not": "Diferente de"
            },
            "number": {
                "between": "Entre",
                "empty": "Vacio",
                "equals": "Igual a",
                "gt": "Mayor a",
                "gte": "Mayor o igual a",
                "lt": "Menor que",
                "lte": "Menor o igual que",
                "notBetween": "No entre",
                "notEmpty": "No vacío",
                "not": "Diferente de"
            },
            "string": {
                "contains": "Contiene",
                "empty": "Vacío",
                "endsWith": "Termina en",
                "equals": "Igual a",
                "notEmpty": "No Vacio",
                "startsWith": "Empieza con",
                "not": "Diferente de",
                "notContains": "No Contiene",
                "notStartsWith": "No empieza con",
                "notEndsWith": "No termina con"
            },
            "array": {
                "not": "Diferente de",
                "equals": "Igual",
                "empty": "Vacío",
                "contains": "Contiene",
                "notEmpty": "No Vacío",
                "without": "Sin"
            }
        },
        "data": "Data",
        "deleteTitle": "Eliminar regla de filtrado",
        "leftTitle": "Criterios anulados",
        "logicAnd": "Y",
        "logicOr": "O",
        "rightTitle": "Criterios de sangría",
        "title": {
            "0": "Constructor de búsqueda",
            "_": "Constructor de búsqueda (%d)"
        },
        "value": "Valor"
    },
    "searchPanes": {
        "clearMessage": "Borrar todo",
        "collapse": {
            "0": "Paneles de búsqueda",
            "_": "Paneles de búsqueda (%d)"
        },
        "count": "{total}",
        "countFiltered": "{shown} ({total})",
        "emptyPanes": "Sin paneles de búsqueda",
        "loadMessage": "Cargando paneles de búsqueda",
        "title": "Filtros Activos - %d",
        "showMessage": "Mostrar Todo",
        "collapseMessage": "Colapsar Todo"
    },
    "select": {
        "cells": {
            "1": "1 celda seleccionada",
            "_": "%d celdas seleccionadas"
        },
        "columns": {
            "1": "1 columna seleccionada",
            "_": "%d columnas seleccionadas"
        },
        "rows": {
            "1": "1 fila seleccionada",
            "_": "%d filas seleccionadas"
        }
    },
    "thousands": ".",
    "datetime": {
        "previous": "Anterior",
        "next": "Proximo",
        "hours": "Horas",
        "minutes": "Minutos",
        "seconds": "Segundos",
        "unknown": "-",
        "amPm": [
            "AM",
            "PM"
        ],
        "months": {
            "0": "Enero",
            "1": "Febrero",
            "10": "Noviembre",
            "11": "Diciembre",
            "2": "Marzo",
            "3": "Abril",
            "4": "Mayo",
            "5": "Junio",
            "6": "Julio",
            "7": "Agosto",
            "8": "Septiembre",
            "9": "Octubre"
        },
        "weekdays": [
            "Dom",
            "Lun",
            "Mar",
            "Mie",
            "Jue",
            "Vie",
            "Sab"
        ]
    },
    "editor": {
        "close": "Cerrar",
        "create": {
            "button": "Nuevo",
            "title": "Crear Nuevo Registro",
            "submit": "Crear"
        },
        "edit": {
            "button": "Editar",
            "title": "Editar Registro",
            "submit": "Actualizar"
        },
        "remove": {
            "button": "Eliminar",
            "title": "Eliminar Registro",
            "submit": "Eliminar",
            "confirm": {
                "_": "¿Está seguro que desea eliminar %d filas?",
                "1": "¿Está seguro que desea eliminar 1 fila?"
            }
        },
        "error": {
            "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
        },
        "multi": {
            "title": "Múltiples Valores",
            "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
            "restore": "Deshacer Cambios",
            "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
        }
    },
    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
    "stateRestore": {
        "creationModal": {
            "button": "Crear",
            "name": "Nombre:",
            "order": "Clasificación",
            "paging": "Paginación",
            "search": "Busqueda",
            "select": "Seleccionar",
            "columns": {
                "search": "Búsqueda de Columna",
                "visible": "Visibilidad de Columna"
            },
            "title": "Crear Nuevo Estado",
            "toggleLabel": "Incluir:"
        },
        "emptyError": "El nombre no puede estar vacio",
        "removeConfirm": "¿Seguro que quiere eliminar este %s?",
        "removeError": "Error al eliminar el registro",
        "removeJoiner": "y",
        "removeSubmit": "Eliminar",
        "renameButton": "Cambiar Nombre",
        "renameLabel": "Nuevo nombre para %s",
        "duplicateError": "Ya existe un Estado con este nombre.",
        "emptyStates": "No hay Estados guardados",
        "removeTitle": "Remover Estado",
        "renameTitle": "Cambiar Nombre Estado"
    }
    }


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
   
@stop
