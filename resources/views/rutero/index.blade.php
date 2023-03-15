
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
    <h1 style="text-align:center">Melo Express</h1>
    
@stop

@section('content')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Rutero</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
<div class="row mb-3">


<div class="col-sm-4">
<label for="" class="col-sm-6 col-form-label">ID RUTERO</label>
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
<label for="" class="col-sm-6 col-form-label">NOMBRE DEL RUTERO</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <i class="fas fa-user-tie"></i></span>
  </div>
  <input type="text" class="form-control" placeholder="NOMBRE" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>
</div>


<div class="row mb-3">
<div class="col-sm-12">
<label for="" class="col-sm-6 col-form-label">DIRECCION</label>
<div class="input-group mb-3">
<span class="input-group-text" id="basic-addon1"> <i class="fas fa-home"></i> </span>
  
  <input type="text" class="form-control" placeholder="DIRECCION" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>
</div>






<div class="row mb-3 text-center">

<div class="col-sm-4">
<label for="" class="col-sm-4 col-form-label">TELEFONO</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <i class="fas fa-phone-square-alt"></i> </span>
</div>
<input type="text" class="form-control" placeholder="TELEFONO" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>



<div class="col-sm-4">
<label for="" class="col-sm-4 col-form-label">DUI</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <i class="fas fa-address-card"></i> </span>
</div>
<input type="text" class="form-control" placeholder="DUI" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>


<div class="col-sm-4">
<label for="" class="col-sm-4 col-form-label">NIT</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <i class="far fa-address-card"></i> </span>
</div>
<input type="text" class="form-control" placeholder="NIT" aria-label="Username" aria-describedby="basic-addon1" >
</div>
</div>
</div>



<div class="row mb-3 text-center">
<div class="col-sm-6 ">
    <label for="inputEmail3" class="col-sm-6 col-form-label">TIPO DE CONTRATO</label>
    <div class="input-group mb-3">

  <div class="input-group-prepend">
  <span class="input-group-text" id="basic-addon1"> <i class="fas fa-briefcase"></i> </span>
  </div>
  <input type="text" class="form-control" placeholder="CONTRATO" aria-label="Username" aria-describedby="basic-addon1">
</div>
    </div>
    
    <div class="col-sm-6">
    <label for="inputEmail3" class="col-sm-6 col-form-label">AGENCIA</label>
    <div class="input-group mb-3">

  <div class="input-group-prepend">
  <span class="input-group-text" id="basic-addon1"> <i class="fas fa-landmark"></i> </span>
  </div>
  <select id="vende" name="vende" class="form-control">
       <option >SAN SALVADOR</option>
       <option >SAN MIGUEL</option>
       <option >SANTA ANA</option>
        
       </select>
</div>
    </div>
    </div>




    <div class="row mb-3 text-center">
<div class="col-sm-6 ">
    <label for="inputEmail3" class="col-sm-6 col-form-label">Nº DE SEGURO</label>
    <div class="input-group mb-3">

  <div class="input-group-prepend">
  <span class="input-group-text" id="basic-addon1"> <i class="fas fa-hospital"></i> </span>
  </div>
  <input type="text" class="form-control" placeholder="SEGURO" aria-label="Username" aria-describedby="basic-addon1">
</div>
    </div>
    
    <div class="col-sm-6">
    <label for="inputEmail3" class="col-sm-6 col-form-label">Nº DE AFP</label>
    <div class="input-group mb-3">

  <div class="input-group-prepend">
  <span class="input-group-text" id="basic-addon1"> <i class="	fas fa-building"></i> </span>
  </div>
  <input type="text" class="form-control" placeholder="AFP" aria-label="Username" aria-describedby="basic-addon1">
</div>
    </div>
    </div>




     
    <div class="row mb-3 text-center">

<div class="col-sm-4">
<label for="" class="col-sm-4 col-form-label">FECHA DE ALTA</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/material/24/null/upload-2--v1.png"/></span>
</div>
<input type="text" class="form-control" placeholder="ALTA" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>

<div class="col-sm-4">
<label for="" class="col-sm-4 col-form-label">SALARIO</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <i class="fas fa-donate"></i> </span>
</div>
<input type="text" class="form-control" placeholder="SALARIO" aria-label="Username" aria-describedby="basic-addon1" >
</div>
</div>

<div class="col-sm-4">
<label for="" class="col-sm-4 col-form-label">FECHA DE BAJA</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/material/24/null/download-2--v1.png"/></span>
</div>
<input type="text" class="form-control" placeholder="BAJA" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>
</div>

<div class="row mb-3">
<div class="col-sm-12">
<label for="" class="col-sm-6 col-form-label">NOTA</label>
<div class="input-group mb-3">
<span class="input-group-text" id="basic-addon1"> <i class="fas fa-receipt"></i> </span>
  
  <input type="text" class="form-control" placeholder="NOTA" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>
</div>


<div class="row mb-3 text-center">
<h6>DATOS DEL VEHICULO</h6>
<HR></HR>
<div class="col-sm-6 ">
    <label for="inputEmail3" class="col-sm-6 col-form-label">TIPO DE VEHICULO</label>
    <div class="input-group mb-3">

  <div class="input-group-prepend">
  <span class="input-group-text" id="basic-addon1"> <i class="fas fa-truck"></i> </span>
  </div>
  <select id="vende" name="vende" class="form-control">
       <option >MOTO</option>
       <option >VEHICULO</option>
       <option >CAMION</option>
        
       </select>
</div>
    </div>
    
    <div class="col-sm-6">
    <label for="inputEmail3" class="col-sm-6 col-form-label">SE ASIGNO UNIDAD</label>
    <div class="input-group mb-3">

  <div class="input-group-prepend">
  <span class="input-group-text" id="basic-addon1"> <i class="fas fa-car-side"></i> </span>
  </div>
  <select id="vende" name="vende" class="form-control">
       <option >SI</option>
       <option >NO</option>
       
        
       </select>
</div>
    </div>
    </div>


    <div class="row mb-3 text-center">

<div class="col-sm-4">
<label for="" class="col-sm-4 col-form-label"># DE PLACA</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <i class="	fas fa-ruler-horizontal"></i> </span>
</div>
<input type="text" class="form-control" placeholder="PLACA" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>



<div class="col-sm-4">
<label for="" class="col-sm-4 col-form-label"># DE TARJETA</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <i class="fas fa-address-card"></i> </span>
</div>
<input type="text" class="form-control" placeholder="TARJETA" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>


<div class="col-sm-4">
<label for="" class="col-sm-4 col-form-label"># DE LICENCIA</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <i class="far fa-address-card"></i> </span>
</div>
<input type="text" class="form-control" placeholder="LICENCIA" aria-label="Username" aria-describedby="basic-addon1" >
</div>
</div>
</div>


<div class="row mb-3">
<div class="col-sm-12">
<label for="" class="col-sm-6 col-form-label">FOTO</label>
<div class="input-group mb-3">
<span class="input-group-text" id="basic-addon1"> <i class="	fas fa-file-image"></i> </span>
  
  <input type="FILE" class="form-control" placeholder="FOTO" aria-label="Username" aria-describedby="basic-addon1">
</div>
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



<h1>Listado de Ruteros</h1>
<div ><a href="" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal"> Agregar Rutero</a></div>
<br>
<table id="tvendedor" class="table table-bordered table-striped shadow-lg mt-4">
<thead class="table-dark">
    <tr >
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Direccion</th>
        <th scope="col">Telefono</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody> 
    @foreach ($ruteros as $rutero)
    <tr>
    <td>{{ $rutero->id }}</td>
    <td>{{ $rutero->nombre }}</td>
    <td>{{ $rutero->direccion }}</td>
    <td>{{ $rutero->telefono }}</td>
   
    <td>
        <!--
        <div style="display:inline-flex;">
    <form action="{{ route ('vendedores.show', $vendedor->id)}}" method="POST">
    @csrf
    @method('GET')
    <button class="btn btn-primary" style="margin-right:10px;">Ver</button>
</form>
        <form action="{{ route ('vendedores.destroy', $vendedor->id)}}" method="POST">
        <a href="/vendedores/{{ $vendedor->id }}/edit" class="btn btn-info">Editar</a>
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Borrar</button>
        </form>
        </div>
-->
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