
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
<div ><a href="/repartidores/create" data-toggle="modal" data-target="#addrepartidor" class="btn btn-primary float-right" > <i class="fa-solid fa-user-plus"></i> Agregar Repartidor</a></div>
<br>
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


<!-- Modal -->
<div class="modal fade" id="addrepartidor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><h3>Datos Repartidor:</h3></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <div class="container">
          <form>
         
           
            <div class="row">
                  <div class="col-6">
                  
              {{-- Input de Nombre  --}}
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-user"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Nombre">
                </div>
              </div>
  
                  </div>
  
                  <div class="col-6">
                  {{-- Input de Direccion  --}}
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa-sharp fa-solid fa-house"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Direccion">
              </div>
            </div> 
  
  
            </div>
  
            </div>    
  
  <br>
            <div class="row">
             
              <div class="col-6 col-md-4">
  
           {{-- Input de Telefono --}}
           <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-sharp fa-solid fa-phone"></i>
                </span>
              </div>
              <input type="email" class="form-control" placeholder="Telefono">
            </div>
          </div>
              </div>
  
  
              <div class="col-6 col-md-4">
               {{-- Input de dui  --}}
               <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa-solid fa-id-card"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="DUI">
                </div>
              </div>
  
              </div>
  
              <div class="col-6 col-md-4">
        {{-- Input de tipo de NIT  --}}
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa-regular fa-id-card"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="NIT">
                  </div>
                </div>
  
              </div>
  
            </div>
  <br>
            <div class="row">
          {{-- INICIO ROW  --}}
  
              <div class="col-6">
  
              {{-- Input de tipo de contrato  --}}
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa-solid fa-building"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="tipo de contrato:">
                </div>
              </div> 
               {{--FIN Input de tipo de contrato  --}}
              </div>
  
              <div class="col-6">
              {{-- Input de agencia  --}}
              <div class="input-group">
                <select class="form-select" id="inputGroupSelect04" >
                  <option selected>Agencia</option>
                  <option value="1">San Salvador</option>
                  <option value="2">San Miguel</option>
                  <option value="3">Santa Ana</option>
                </select>
              </div>
              {{-- FIN Input de agencia  --}}
              </div>
  
  
            </div>{{-- FIN ROW  --}}
  <br>
            <div class="row">
              {{-- INICIO ROW  --}}
      
                  <div class="col">{{-- INICIO COL  --}}

              {{-- Input de numero de seguro  --}}
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa-regular fa-id-card"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Numero de Seguro">
                </div>
              </div>

                    
                  </div>{{-- FIN COL  --}}

                  <div class="col">{{-- INICIO COL  --}}

              {{-- Input de numero de AFP  --}}
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa-solid fa-id-card-clip"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Numero de AFP:">
                </div>
              </div>
                          
                        </div>{{-- FIN COL  --}}


                        <div class="col">{{-- INICIO COL  --}}

                      {{-- Input de numero de Cargo  --}}
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="fa-sharp fa-solid fa-house"></i>
            </span>
          </div>
          <input type="text" class="form-control" placeholder="Cargo">
        </div>
      </div>
                                      
                                    </div>{{-- FIN COL  --}}

  
                  </div>{{-- FIN ROW  --}}
<br>


                      <div class="row">
                        {{-- INICIO ROW  --}}
                
                            <div class="col">{{-- INICIO COL  --}}
          {{-- Input de  Fecha de alta  --}}
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-solid fa-calendar-check"></i>
                  &nbsp;&nbsp;&nbsp; Fecha de Alta
                </span>
              </div>
              <input id="startDate" class="form-control" type="date" />
            </div>
          </div>
                              
                            </div>{{-- FIN COL  --}}



                            <div class="col">{{-- INICIO COL  --}}

                      {{-- Input de Salario   --}}
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="fa-regular fa-money-bill-1"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Salario">
                        </div>
                      </div>
                            </div>{{-- FIN COL  --}}


                            <div class="col">{{-- INICIO COL  --}}
                    
          {{-- Input de  Fecha de baja  --}}
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-solid fa-calendar-days"> </i>
                  &nbsp;&nbsp;&nbsp;Fecha de Baja
                </span>
              </div>
              <input id="startDate" class="form-control" type="date" />
            </div>
          </div>

                              </div>{{-- FIN COL  --}}

    
                          </div>{{-- FIN ROW  --}}
<br>

                          <div class="row">
                            {{-- INICIO ROW  --}}
                    
                                <div class="col">{{-- INICIO COL  --}}
              
                            {{-- Input de numero de notas --}}
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="fa-regular fa-note-sticky"></i>
                                  </span>
                                </div>
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Escribe tu nota aqui." rows="3"></textarea>
                              </div>
                            </div>
              
                                  
                                </div>{{-- FIN COL  --}}
        
                              </div>{{-- FIN ROW  --}}

                              <div class="row">
                              {{-- INICIO ROW  --}}
                      
                                  <div class="col">{{-- INICIO COL  --}}
                
                              {{-- Input de tipo de vehiculo  --}}
                              <div class="input-group">
                                <select class="form-select" id="inputtipo_vehiculo" >
                                  <option selected>Tipo de vehiculo</option>
                                  <option value="1">Motocicleta</option>
                                  <option value="2">Vehiculo</option>
                                  <option value="3">Santa Ana</option>
                                </select>
                              </div>
                
                                    
                                  </div>{{-- FIN COL  --}}
      
      
      
              <div class="col">{{-- INICIO COL  --}}
                
                {{-- Input de numero de seguro  --}}
                <div class="input-group">
                  <select class="form-select" id="inputGroupSelect04" >
                    <option selected>Asigno unidad</option>
                    <option value="1">Si</option>
                    <option value="2">No</option>
                    
                  </select>
                </div>
                      
                      
                    </div>{{-- FIN COL  --}}
          
            </div>{{-- FIN ROW  --}}





<br>
                      <div class="row">
                        {{-- INICIO ROW  --}}
                
                            <div class="col">{{-- INICIO COL  --}}
                            <center><h4>DATOS DEL VEHICULO</h4></center>
<center><h4>_____________________________________________________________________________________________________</h4></center> 
                            </div>{{-- FIN COL  --}}

                          </div>{{-- FIN ROW  --}}
    
                          <br>
                      <br>
                          <div class="row">
                            {{-- INICIO ROW  --}}
                    
                                <div class="col">{{-- INICIO COL  --}}
          {{-- Input de numero de placa  --}}
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-solid fa-car-side"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Numero de Placa:">
            </div>
          </div>
                                </div>{{-- FIN COL  --}}
                                
                                <div class="col">{{-- INICIO COL  --}}

         {{-- Input de numero de tarjeta  --}}
  
          
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-solid fa-hashtag"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Numero de tarjeta:">
            </div>
          </div>

                                </div>{{-- FIN COL  --}}

                                <div class="col">{{-- INICIO COL  --}}
             
          {{-- Input numero de licencia  --}}
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-solid fa-id-card"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="numero de licencia de conducir:">
            </div>
          </div>                       
                                </div>{{-- FIN COL  --}}
                              </div>{{-- FIN ROW  --}}

            </div>
         
      
                </form> 
  
              </div>


<br>
<br>
      
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
