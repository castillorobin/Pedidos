
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
<h5 ><i class="fas fa-home"></i> Inicio / Almacen / Comercios</h5>
    
@stop

@section('content')
<div class="row">
    <hr>
<div class="  col-sm-6">
<h3>Listado de Comercios</h3>
</div>
<div class="  col-sm-6">
<a href="" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-database"></i> Agregar Comercio</a>
</div>
<hr>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Comercio</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/comercio/guardar" method="GET">
    @csrf
<div class="row mb-3">


<div class="col-sm-4">
<label for="" class="col-sm-6 col-form-label">ID COMERCIO</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/fluency-systems-regular/48/null/checked-identification-documents.png" width="25" /></span>
  </div>
  <input type="text" class="form-control" placeholder="ID" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>
</div>


<div class="row mb-3">


<div class="col-sm-12">
<label for="" class="col-sm-6 col-form-label">Comercio/Tienda</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/material/25/null/gender-neutral-user--v1.png"/></span>
  </div>
  <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese nombre del comercio" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>
</div>

<div class="row mb-3">
<div class="col-sm-12">
<label for="" class="col-sm-6 col-form-label">Direccion del comercio</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/glyph-neue/25/null/order-delivered.png"/></span>
  </div>
  <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Ingrese direccion del comercio" aria-label="Username" aria-describedby="basic-addon1">
</div>

</div>
</div>

<div class="row mb-3 text-center">
<div class="col-sm-6 ">
    <label for="inputEmail3" class="col-sm-4 col-form-label">Telefono</label>
    <div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/material/24/null/phone--v1.png"/></span>
  </div>
  <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Ingrese telefono" aria-label="Username" aria-describedby="basic-addon1">
</div>
    </div>
    
    <div class="col-sm-6">
    <label for="inputEmail3" class="col-sm-4 col-form-label">Whatsapp</label>
    <div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/material/24/null/whatsapp--v1.png"/></span>
  </div>
  <input type="text" id="whatsapp" name="whatsapp" class="form-control" placeholder="Ingrese whatsapp" aria-label="Username" aria-describedby="basic-addon1">
</div>
    </div>
    </div>
    
    
    <div class="row mb-3">

<div class="col-sm-4">
<label for="" class="col-sm-6 col-form-label">Fecha de alta</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/material/24/null/upload-2--v1.png"/></span>
</div>
<input type="date" id="falta" name="falta" class="form-control" placeholder="ALTA" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>



<div class="col-sm-4">
<label for="" class="col-sm-6 col-form-label">Fecha de baja</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/material/24/null/download-2--v1.png"/></span>
</div>
<input type="date" id="fbaja" name="fbaja" class="form-control" placeholder="BAJA" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>


<div class="col-sm-4">
<label for="" class="col-sm-6 col-form-label">Tipo de comercio</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/material/24/null/climbing-wall.png"/></span>
</div>
<select id="tipoven" name="tipoven" class="form-control">
       <option value="Pequeño">Pequeño</option>
       <option value="Mediano">Mediano</option>
       <option value="Grande">Grande</option>
        
       </select>
</div>
</div>
</div>



<div class="row mb-3 text-center">
<div class="col-sm-8 ">
    <label for="inputEmail3" class="col-sm-4 col-form-label">Correo</label>
    <div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/metro/25/null/email.png"/></span>
  </div>
  <input type="text" id="correo" name="correo" class="form-control" placeholder="Ingrese telefono" aria-label="Username" aria-describedby="basic-addon1">
</div>
    </div>
    
    <div class="col-sm-4">
    <label for="inputEmail3" class="col-sm-8 col-form-label">Estado del comercio</label>
    <div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/material/24/null/whatsapp--v1.png"/></span>
  </div>
  <select id="estado" name="estado" class="form-control">
       <option value="Alta">Alta</option>
       <option value="Baja">Baja</option>
       <option value="Lista negra">Lista negra</option>
        
       </select>
</div>
    </div>
    </div>


    <div class="row mb-3 text-center">
<div class="col-sm-8 ">
    <label for="inputEmail3" class="col-sm-4 col-form-label">Nota</label>
    <div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/metro/25/null/email.png"/></span>
  </div>
  <input type="text" id="nota" name="nota" class="form-control" placeholder="Ingrese una nota" aria-label="Username" aria-describedby="basic-addon1">
</div>
    </div>
    
    <div class="col-sm-4">
    <label for="inputEmail3" class="col-sm-8 col-form-label">Agencia de registro</label>
    <div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/material/24/null/whatsapp--v1.png"/></span>
  </div>
  <select id="agenr" name="agenr" class="form-control">
       <option value="San Salvador">San Salvador</option>
       <option value="San Miguel">San Miguel</option>
       <option value="Santa Ana">Santa Ana</option>
        
       </select>
</div>
    </div>
    </div>


<div class="row mb-3 text-center">
        <h6>------------------------------Información Bancaria-------------------------------</h6>
     
        
        <div class="col-sm-12">
<label for="" class="col-sm-6 col-form-label">Nombre del titular de la cuenta</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/material/24/null/bank-building.png"/></span>
  </div>
  <input type="text" id="titular" name="titular" class="form-control" placeholder="Ingrese el nombre del titular de la cuenta" aria-label="Username" aria-describedby="basic-addon1">
</div>

</div>
</div>


<div class="row mb-3 text-center">
<div class="col-sm-6 ">
    <label for="inputEmail3" class="col-sm-6 col-form-label">Nombre del banco</label>
    <div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/material/24/null/money-box--v1.png"/></span>
  </div>
  <input type="text" id="banco" name="banco" class="form-control" placeholder="Ingrese el nombre del banco" aria-label="Username" aria-describedby="basic-addon1">
</div>
    </div>
    
    <div class="col-sm-6">
    <label for="inputEmail3" class="col-sm-6 col-form-label">Número de cuenta</label>
    <div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/material/24/null/100.png"/></span>
  </div>
  <input type="text" id="ncuenta" name="ncuenta" class="form-control" placeholder="Ingrese el número de cuenta" aria-label="Username" aria-describedby="basic-addon1">
</div>
    </div>
    </div>
    
    <div class="row mb-3 text-center">

<div class="col-sm-4">
<label for="" class="col-sm-6 col-form-label">Tipo de cuenta</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/material/24/null/merchant-account.png"/></span>
</div>
<select id="tcuenta" name="tcuenta" class="form-control">
<option value="Ahorros">Ahorros</option>
       <option value="Corriente">Corriente</option>
       
        
       </select>

</div>
</div>



<div class="col-sm-4 ">
<label for="" class="col-sm-6 col-form-label"># de chivo</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/material/24/null/bitcoin--v1.png"/></span>
</div>
<input type="text" id="chivo" name="chivo" class="form-control" placeholder="CHIVO" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>


<div class="col-sm-4">
<label for="" class="col-sm-6 col-form-label"># de tigo money</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/material/24/null/stack-of-money.png"/></span>
</div>
<input type="text" id="tmoney" name="tmoney" class="form-control" placeholder="TIGO MONEY" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>
</div>

<div class="row mb-3 text-center">
        <h6>------------------------------Información Fiscal-------------------------------</h6>
     
  
    
    <div class="col-sm-12 ">
    <label for="inputEmail3" class="col-sm-8 col-form-label">Nombre de la empresa</label>
    <div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/material/24/null/shop-department.png"/></span>
</div>
<input type="text" id="empresa" name="empresa" class="form-control" placeholder="Ingrese el nombre de la empresa o persona natural" aria-label="Username" aria-describedby="basic-addon1" >
</div>
    </div>
    
    



    <div class="col-sm-8 ">
    <label for="inputEmail3" class="col-sm-8 col-form-label">Giro</label>
    <div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/material/24/null/shop-department.png"/></span>
</div>
<input type="text" id="empresa" name="empresa" class="form-control" placeholder="Ingrese el giro de la empresa" aria-label="Username" aria-describedby="basic-addon1" >
</div>
    </div>
    
    <div class="col-sm-4">
    <label for="inputEmail3" class="col-sm-8 col-form-label">Tipo de contribuyente</label>
    <div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/material/24/null/business-network.png"/></span>
</div>
<select id="agenr" name="agenr" class="form-control">
       <option value="Pequeño">Pequeño</option>
       <option value="Mediano">Mediano</option>
       <option value="Grande">Grande</option>
        
       </select>
</div>
    </div>
    </div>
    



    <div class="row mb-3 text-center">

<div class="col-sm-4">
<label for="" class="col-sm-8 col-form-label">Número de (DUI)</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/material/24/null/merchant-account.png"/></span>
</div>
<input type="text" id="dui" name="dui" class="form-control" placeholder="Ingrese número de DUI" aria-label="Username" aria-describedby="basic-addon1">

</div>
</div>



<div class="col-sm-4 ">
<label for="" class="col-sm-8 col-form-label">Número de (IVA)</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/material/24/null/bitcoin--v1.png"/></span>
</div>
<input type="text" id="niva" name="niva" class="form-control" placeholder="Ingrese el NIT de la empresa" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>


<div class="col-sm-4">
<label for="" class="col-sm-10 col-form-label">Número de registro (NRC)</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/material/24/null/stack-of-money.png"/></span>
</div>
<input type="text" id="nrc" name="nrc" class="form-control" placeholder="Ingrese el NRC de la empresa" aria-label="Username" aria-describedby="basic-addon1" >
</div>
</div>
</div>

<div class="col-sm-12 ">
    <label for="inputEmail3" class="col-sm-8 col-form-label">Dirección fiscal</label>
    <div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/material/24/null/shop-department.png"/></span>
</div>
<input type="text" id="empresa" name="empresa" class="form-control" placeholder="Ingrese la dirección fiscal de la empresa" aria-label="Username" aria-describedby="basic-addon1" >
</div>
    </div>






</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
</div>
</div>
</div>

<br>
<table id="tvendedor" class="table table-bordered shadow-lg mt-4">
<thead>
    <tr >
        
        <th scope="col">Comercio</th>
        <th scope="col">Direccion</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Tipo de comercio</th>
        <th scope="col">Estado del comercio</th>
        <th scope="col">Fecha de alta</th>
        <th scope="col">Agencia</th>
        <th scope="col">Opciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($vendedores as $vendedor)
    <tr>
    
    <td>{{ $vendedor->nombre }}</td>
    <td>{{ $vendedor->direccion }}</td>
    <td>{{ $vendedor->telefono }}</td>
    <td>{{ $vendedor->tipovende }}</td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align:center;">
    
    <ul class="icons-list " style="text-align:center;"> 
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="fas fa-stream"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a
													href="#" data-toggle="modal" data-target="#modal_iconified"
													onclick="">
												   <i class="fas fa-pencil-alt">
											       </i> Editar</a></li>
													<li><a
													href="javascript:;" data-toggle="modal" data-target="#modal_iconified"
													onclick=" ">
													<i class="fas fa-eye">
													</i> Ver</a></li>
												</ul>
											</li>
										</ul>

        &nbsp;&nbsp;
   
        
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
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
   
@stop
