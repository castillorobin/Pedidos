
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
    <h1 style="text-align:center">Melo Express</h1>
    
@stop

@section('content')

{{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/> --}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css"/>
<link rel="stylesheet" href="https://kit.fontawesome.com/b64093b700.css" crossorigin="anonymous">
 







<h1>Listado de Repartidores</h1>
<div ><a href="/repartidores/create" data-toggle="modal" data-target="#addrepartidor" class="btn btn-primary float-right" > Agregar Repartidor</a></div>
<br>
{{-- <table id="trepartidor" class="display responsive nowrap" style="width:100%"> --}}
  <div class="table-responsive">
<table id="trepartidor" class="table table-bordered table-striped display responsive nowrap" style="width:100%">
<thead class="table-dark">
    <tr >
      <th></th>
      <th>Acciones</th>
      <th scope="col">:ID</th>
        <th scope="col">Nombre:</th>
        <th scope="col">Direccion:</th>
         <th scope="col">Telefono:</th>
        <th scope="col">DUI:</th>
        <th scope="col">NIT:</th> 
        <th scope="col">tipo de contrato:</th>
        <th scope="col">agencia:</th>
        <th scope="col">numero de seguro:</th>
        <th scope="col">AFP:</th> 
        <th scope="col">cargo:</th>
        <th scope="col">fecha de alta:</th>
        <th scope="col">salario:</th>
        <th scope="col">fecha de baja:</th>
        <th scope="col">nota:</th>
        <th scope="col">tipo de vehiculo:</th>
        <th scope="col">asigno unidad:</th>
        <th scope="col">numero de placa:</th>
        <th scope="col">numero de tarjeta:</th>
        <th scope="col">numero de licencia:</th>
        <th scope="col">foto</th>


    </tr>
</thead>
<tbody>
    @foreach ($repartidores as $repartidor)
    <tr data-id="{{ $repartidor->id  }}">
        <td></td>
      <td>
        <div style="display:inline-flex;">
    <form action="{{ route ('repartidor.modal', $repartidor->id)}}" method="POST">
    @csrf
    @method('GET')
    {{-- <button  type="button" class="btn btn-success rounded-circle" data-toggle="modal" data-target="#modalVerMasData">
      <b> + </b>
      </button>                                                                      --}}
</form>
        <form action="{{ route ('repartidores.destroy', $repartidor->id)}}" method="POST">
        <a href="/repartidores/{{ $repartidor->id }}/edit" class="btn btn-primary rounded-circle"><i class="fa-regular fa-pen-to-square"></i></a>
        @csrf
        @method('DELETE')
        <button class="btn btn-danger rounded-circle"><i class="fa-solid fa-trash"></i></button>
        </form>
        </div>
    </td>
    <td>{{ $repartidor->id }}</td>
    <td>{{ $repartidor->nombre }}</td>
    <td>{{ $repartidor->direccion }}</td>
    <td>{{ $repartidor->telefono }}</td>
    <td>{{ $repartidor->dui }}</td>
    <td>{{ $repartidor->nit }}</td> 
    <td>{{ $repartidor->tipo_contrato }}</td>
    <td>{{ $repartidor->agencia }}</td>
    <td>{{ $repartidor->num_seguro }}</td>
    <td>{{ $repartidor->num_afp }}</td>
    <td>{{ $repartidor->cargo }}</td>
    <td>{{ $repartidor->fecha_de_alta }}</td>
    <td>${{ $repartidor->salario }}.00</td>
    <td>{{ $repartidor->fecha_de_baja }}</td>
    <td>{{ $repartidor->nota }}</td>
    <td>{{ $repartidor->tipo_vehiculo }}</td>
    <td>{{ $repartidor->asigno_unidad }}</td>
    <td>{{ $repartidor->num_placa }}</td>
    <td>{{ $repartidor->num_tarjeta }}</td>
    <td>{{ $repartidor->num_licencia }}</td> 
    <td>{{ $repartidor->foto }}</td>    
    </tr>
    @endforeach
</tbody>
</table>
</div>


{{-- aqui empieza el modal --}}



<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="addrepartidor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <form>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-user"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Username">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-trash"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Username">
            </div>
          </div>


          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-envelope"></i>
                </span>
              </div>
              <input type="email" class="form-control" placeholder="Email">
            </div>
          </div>
        </form> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>









<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://kit.fontawesome.com/b64093b700.js" crossorigin="anonymous"></script> 

<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js" defer></script>

<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js" defer></script>








<script src="https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"></script>



<script>
       

$(document).ready(function() {

  $('#trepartidor').DataTable( {
    responsive: true
} );



} );
    
    </script>

@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
   
@stop
