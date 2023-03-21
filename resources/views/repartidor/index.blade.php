
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')

<h5 ><i class="fas fa-home"></i> Inicio / Almacen / Empleados</h5>
    
@stop

@section('content')


{{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/> --}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css"/>
<link rel="stylesheet" href="https://kit.fontawesome.com/b64093b700.css" crossorigin="anonymous">



<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>

@if (session('exito')=='ok')
<script>
  alertify.set('notifier','position', 'top-center');
  alertify.success('Datos cargados con exito!');
</script>
@else
@if (session('agregado')=='ok')
<script>
  alertify.set('notifier','position', 'top-right');
  alertify.error('');
</script> 
@endif
@endif


@if (session('agregado')=='error')
<script>
  alertify.set('notifier','position', 'top-right');
  alertify.success('Repartidor no fue ingresado!');
</script>
@endif 

@if (session('eliminar')=='ok')
<script>
  alertify.set('notifier','position', 'top-right');
    alertify.error('Repartidor Eliminado con exito!');
</script>
@endif 

<style> 
  .modal-img img{
    z-index: 1;
  }

 .modal-img.active{
  position: fixed;
  width:100vw;
  height: 100vh;
  display:flex;
  align-items:center;
  top:0;
  left:0;
 }


  .modal-img.active::after{
    content:'';
    position: fixed;
    width:100%;
    height: 100vh;
    top: 0;
    left: 0;
    background-color: rgba(0,0,0,0.70);
    z-index: 0;
    overflow-y: scroll;
  }
</style>




<div class="row">
    <hr>
<div class="  col-sm-6">
<h3>Control de empleados</h3>
</div>
<div class="  col-sm-6">


<div ><a href="/repartidores/create" data-toggle="modal" data-target="#addrepartidor" class="btn btn-primary float-right" > <i class="fa-solid fa-user-plus"></i> Agregar Empleado</a></div>
<br>
</div>
<hr>
<br>
</div>






{{-- <table id="trepartidor" class="display responsive nowrap" style="width:100%"> --}}
  <div class="table-responsive">
<table id="trepartidor" class="table table-bordered table-striped display responsive " style="width:100%">
<thead>
    <tr >
      <th></th>
     
      
        <th scope="col">Nombre</th>
        <th scope="col">Telefono</th> 
        <th scope="col">Fecha de alta</th>
        <th scope="col">Cargo</th>
       
        <th scope="col">Agencia</th>
        <th scope="col">Nota</th>
        <th scope="col">Opciones</th>
        
    </tr>
</thead>
<tbody>
    @foreach ($repartidores as $repartidor)
    <tr data-id="{{ $repartidor->id  }}">
        
    <td>{{ $repartidor->nombre }}</td>
    <td>{{ $repartidor->telefono }}</td>
    <td>{{ $repartidor->direccion }}</td>
    <td>{{ $repartidor->fecha_de_alta }}</td>
    <td>{{ $repartidor->cargo }}</td>
   
    <td>{{ $repartidor->agencia }}</td>
    <td>{{ $repartidor->nota }}</td>    
    <td>
    <ul > 
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="fas fa-stream"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#" data-toggle="modal" data-target="#modal_iconified" onclick="">
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
    
        </div> 
    </td>

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
      <div class="alert alert-danger" role="alert">
<i class="fas fa-exclamation-circle"></i> Estimado usuario los campos con * son obligatorios
</div>

        <div class="container">
          <form method="POST" action="{{ route('repartidores.store') }}" enctype="multipart/form-data">
            @csrf
         
           
            <div class="row">
                  <div class="col-12">
                  
              {{-- Input de Nombre  --}}
              <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 col-form-label">Nombre del empleado *</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-user"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" placeholder="Nombre">
                      @error('nombre')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                </div>
              </div>
  
                  </div>
  
          
  
            </div>    
  
  <br>



  <div class="row">
  <div class="col-6">
                  {{-- Input de Direccion  --}}
            <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Direccion *</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa-sharp fa-solid fa-house"></i>
                  </span>
                </div>
                <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion" placeholder="Direccion">
                @error('direccion')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div> 
            </div>
            <div class="col-6">
  
  {{-- Input de Telefono --}}
  <div class="form-group">
  <label for="inputEmail3" class="col-sm-4 col-form-label">Telefono*</label>
   <div class="input-group">
     <div class="input-group-prepend">
       <span class="input-group-text">
         <i class="fa-sharp fa-solid fa-phone"></i>
       </span>
     </div>
     <input type="text" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" placeholder="Telefono" maxlength="9">
     @error('telefono')
     <span class="invalid-feedback" role="alert">
       <strong>{{ $message }}</strong>
     </span>
     @enderror
   </div>
 </div>
     </div>

  </div>





            <div class="row">
             
             
  
  
              <div class="col-6 ">
               {{-- Input de dui  --}}
               <div class="form-group">
               <label for="inputEmail3" class="col-sm-4 col-form-label">Numero de DUI *</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa-solid fa-id-card"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control @error('dui') is-invalid @enderror" id="dui" name="dui" placeholder="DUI">
                  @error('dui')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
  
              </div>
  
              <div class="col-6">
        {{-- Input de tipo de NIT  --}}
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Numero de NIT *</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa-regular fa-id-card"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control @error('nit') is-invalid @enderror" id="nit" name="nit" placeholder="NIT">
                    @error('nit')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
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
              <label for="inputEmail3" class="col-sm-4 col-form-label">Tipo de contrato</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa-solid fa-building"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control @error('tipo_contrato') is-invalid @enderror" id="tipo_contrato" name="tipo_contrato" placeholder="tipo de contrato:">
                  @error('tipo_contrato')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div> 
               {{--FIN Input de tipo de contrato  --}}
              </div>
  
              <div class="col-6">
              {{-- Input de agencia  --}}
              <label for="inputEmail3" class="col-sm-4 col-form-label">Agencia</label>
              <div class="input-group">

                <select class="form-select @error('agencia') is-invalid @enderror" id="agencia" name="agencia" >
                  <option selected>Agencia</option>
                  <option value="San Salvador">San Salvador</option>
                  <option value="San Miguel">San Miguel</option>
                  <option value="Santa Ana">Santa Ana</option>
                </select>
              </div>
              @error('agencia')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
              {{-- FIN Input de agencia  --}}
              </div>
  
  
            </div>{{-- FIN ROW  --}}
  <br>
            <div class="row">
              {{-- INICIO ROW  --}}
      
                  <div class="col">{{-- INICIO COL  --}}

              {{-- Input de numero de seguro  --}}
              <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 col-form-label">Nº de ISSS</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa-regular fa-id-card"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control @error('num_seguro') is-invalid @enderror" id="num_seguro" name="num_seguro" placeholder="Numero de Seguro">
                  @error('num_seguro')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

                    
                  </div>{{-- FIN COL  --}}

                  <div class="col">{{-- INICIO COL  --}}

              {{-- Input de numero de AFP  --}}
              <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 col-form-label">Nº de AFP</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa-solid fa-id-card-clip"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control @error('num_afp') is-invalid @enderror" id="num_afp" name="num_afp" placeholder="Numero de AFP:">
                  @error('num_afp')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
                          
                        </div>{{-- FIN COL  --}}


                        <div class="col">{{-- INICIO COL  --}}

                      {{-- Input de numero de Cargo  --}}
      <div class="form-group">
      <label for="inputEmail3" class="col-sm-4 col-form-label">Cargo *</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="fa-sharp fa-solid fa-house"></i>
            </span>
          </div>
             <select class="form-select @error('cargo') is-invalid @enderror" id="cargo" name="cargo" >
                  <option selected>Ceo</option>
                  <option value="Gerente general">Gerente General</option>
                  <option value="gerente">Gerente</option>
                  <option value="Supervisor">Supervisor</option>
                  <option value="Repartidor">Repartidor</option>
                  <option value="Auxiliar">Auxiliar</option>
                  <option value="Cajero">Cajero</option>
                  <option value="Atencion al cliente">Atencion al cliente</option>
                  <option value="Digitador">Digitador</option>
                  <option value="Bodeguero">Bodeguero</option>
                  <option value="Oficios Varios">Oficios varios</option>
                  <option value="Seguridad">Seguridad</option>
                </select>


          @error('cargo')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
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
          <label for="inputEmail3" class="col-sm-6 col-form-label">Fecha de Alta</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-solid fa-calendar-check"></i>
                  &nbsp;&nbsp;&nbsp; Fecha de Alta
                </span>
              </div>
              <input  class="form-control @error('fecha_de_alta') is-invalid @enderror" id="fecha_de_alta" 
                      name="fecha_de_alta" type="date" />
                      @error('fecha_de_alta')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
            </div>
          </div>
                              
                            </div>{{-- FIN COL  --}}



                            <div class="col">{{-- INICIO COL  --}}

                      {{-- Input de Salario   --}}
                      <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 col-form-label">Salario</label>
                        <div class="input-group">

                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="fa-regular fa-money-bill-1"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control @error('salario') is-invalid @enderror"
                                 id="salario" name="salario" placeholder="Salario">
                                 @error('salario')
                                 <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                                </div>
                      </div>
                            </div>{{-- FIN COL  --}}


                            <div class="col">{{-- INICIO COL  --}}
                    
          {{-- Input de  Fecha de baja  --}}
          <div class="form-group">
          <label for="inputEmail3" class="col-sm-6 col-form-label">Fecha de baja</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-solid fa-calendar-days"> </i>
                  &nbsp;&nbsp;&nbsp;Fecha de Baja
                </span>
              </div>
              <input class="form-control @error('fecha_de_baja') is-invalid @enderror"
                     id="fecha_de_baja" name="fecha_de_baja" type="date" />
                     @error('fecha_de_baja')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                     </span>
                     @enderror
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
                            <label for="inputEmail3" class="col-sm-6 col-form-label">Nota</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="fa-regular fa-note-sticky"></i>
                                  </span>
                                </div>
                                <textarea class="form-control" id="nota" name="nota" placeholder="Escribe tu nota aqui." rows="3"></textarea>
                              </div>
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
                                  <label for="inputEmail3" class="col-sm-6 col-form-label">Tipo de Vehiculo</label>
                              {{-- Input de tipo de vehiculo  --}}
                              <div class="input-group">
                              
                                <select class="form-select @error('tipo_vehiculo') is-invalid @enderror" id="tipo_vehiculo" name="tipo_vehiculo" >
                                  <option value="" selected>Tipo de vehiculo</option>
                                  <option value="Motocicleta">Motocicleta</option>
                                  <option value="Vehiculo">Vehiculo</option>
                                  <option value="Camion">Camion</option>
                                </select>
                                @error('tipo_vehiculo')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                              </div>
                
                                    
                                  </div>{{-- FIN COL  --}}
      
      
      
              <div class="col">{{-- INICIO COL  --}}
              <label for="inputEmail3" class="col-sm-6 col-form-label">Equipo es asignado</label>
                {{-- Input de numero de seguro  --}}
                <div class="input-group">
                
                  <select class="form-select @error('asigno_unidad') is-invalid @enderror" id="asigno_unidad" name="asigno_unidad" >
                    <option value="" selected>Asigno unidad</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                    
                  </select>
                  @error('asigno_unidad')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                      
                      
                    </div>{{-- FIN COL  --}}
          
            </div>{{-- FIN ROW  --}}
<br>

                          <div class="row">
                            {{-- INICIO ROW  --}}
                    
                                <div class="col">{{-- INICIO COL  --}}
          {{-- Input de numero de placa  --}}
          <div class="form-group">
          <label for="inputEmail3" class="col-sm-6 col-form-label">Numero de placa</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-solid fa-car-side"></i>
                </span>
              </div>
              <input type="text" class="form-control @error('num_placa') is-invalid @enderror"  id="num_placa" name="num_placa" placeholder="Numero de Placa:">
              @error('num_placa')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
                                </div>{{-- FIN COL  --}}
                                
                                <div class="col">{{-- INICIO COL  --}}

         {{-- Input de numero de tarjeta  --}}
  
          
          <div class="form-group">
          <label for="inputEmail3" class="col-sm-6 col-form-label">Numero de tarjeta</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-solid fa-hashtag"></i>
                </span>
              </div>
              <input type="text" class="form-control @error('num_tarjeta') is-invalid @enderror" id="num_tarjeta" 
                     name="num_tarjeta" placeholder="Numero de tarjeta:">
              @error('num_tarjeta')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
                    </div>
          </div>

          </div>{{-- FIN COL  --}}

          <div class="col">{{-- INICIO COL  --}}   
          {{-- Input numero de licencia  --}}
          <div class="form-group">
          <label for="inputEmail3" class="col-sm-6 col-form-label">Numero de licencia</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-solid fa-id-card"></i>
                </span>
              </div>
              <input type="text" class="form-control @error('num_licencia') is-invalid @enderror" id="num_licencia" 
                     name="num_licencia" placeholder="Licencia de conducir:">
                     @error('num_licencia')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                    </div>
          </div>                       
          </div>{{-- FIN COL  --}}
          </div>{{-- FIN ROW  --}}

<br>
      <div class="row">
        {{-- INICIO ROW  --}}
        <div class="col">{{-- INICIO COL  --}}
      
          <div class="input-group mb-3">
          <label for="inputEmail3" class="col-sm-6 col-form-label">Fotografia del Equipo</label>
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa-solid fa-image"></i></span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input @error('foto') is-invalid @enderror" id="foto" name="foto">
              <label class="custom-file-label" for="foto">seleccionar la foto....</label>
              @error('foto')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

        </div>{{-- FIN COL  --}}
      </div>{{-- FIN ROW  --}}



              </div>


              
              </div>


                                 
  
  
  



<br>
<br>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-primary">Guardar Datos</button>
      </div>
    </form> 
    </div>
  </div>
</div>









<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://kit.fontawesome.com/b64093b700.js" crossorigin="anonymous"></script> 

<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js" defer></script>

<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.6.0/cleave.min.js" ></script>








<script src="https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"></script>
<script>



var cleave = new Cleave('#telefono', {
  blocks: [4,4]
});

var cleave = new Cleave('#dui', {
  delimiter: '-',  
  blocks: [8, 1],
});


var cleave = new Cleave('#nit', {
  delimiter: '-',  
  blocks: [4,6,3,1],
    uppercase: true
});

var cleave = new Cleave('#num_seguro', {
  blocks: [9],
  uppercase: true
});

var cleave = new Cleave('#num_afp', {
  blocks: [12],
  uppercase: true
});

</script>



<script>
       

$(document).ready(function() {

  $('#trepartidor').DataTable( {
    responsive: true



} );



} );
    
    </script>


<script>

  document.querySelectorAll(".modal-img img").forEach(el => {
    el.addEventListener("click",function(ev){
      ev.stopPropagation();
      this.parentNode.classList.add("active");
    })
  });

document.querySelectorAll(".modal-container").forEach(el=>{
  el.addEventListener("click",function(ev){
    this.classList.remove("active");
    console.log("Click");
  })
})


</script>


@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
@stop
