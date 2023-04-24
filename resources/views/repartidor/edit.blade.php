
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
    <h1 style="text-align:center">Melo Express</h1>
@stop

@section('content')

    
    <form action="/repartidores/{{$repartidor->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')   
     
   
    <div class="row mx-5" >
    <h3>Editar Empleado</h3>
      <div class="alert alert-danger" role="alert">
      <i class="fas fa-exclamation-circle"></i> Estimado usuario los campos con * son obligatorios
      </div>
    </div>
  <br>



  <div class="row mx-5" >
    <h4>Datos del Empleado</h4>
    </div>

    <div class="row border mx-5 py-4" style="background-color: white;" >
    <div class="row">

    <div class="row">


<div class="col-sm-4">
<label for="" class="col-sm-6 col-form-label">ID Empleado</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
  <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/fluency-systems-regular/48/null/checked-identification-documents.png" width="25" /></span>
</div>
<input type="text" class="form-control" placeholder="{{$repartidor->id}}" aria-label="Username" aria-describedby="basic-addon1" disabled>
</div>
</div>
 
 

</div><!-- termina fila  -->

    <div class="mb-3 col-12" >
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" tabindex="1"  value=" {{$repartidor->nombre}} ">
    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Direccion</label>
        <input type="text" id="dire" name="dire" class="form-control" tabindex="2" value=" {{$repartidor->direccion}} ">
    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Telefono*</label>
        <input type="text" id="tele" name="tele" class="form-control" tabindex="2" value=" {{$repartidor->telefono}} ">
    </div>
    <div class="mb-3 col-4" >
        <label for="" class="form-label">Correo Electronico</label>
        <input type="text" id="correo" name="correo" class="form-control" tabindex="1"  value=" {{$repartidor->correo}} ">
    </div>
    <div class="mb-3 col-4">
        <label for="" class="form-label">Numero de DUI</label>
        <input type="text" id="dui" name="dui" class="form-control" tabindex="2" value=" {{$repartidor->dui}} ">
    </div>
    <div class="mb-3 col-4">
        <label for="" class="form-label">Numero de NIT</label>
        <input type="text" id="nit" name="nit" class="form-control" tabindex="2" value=" {{$repartidor->nit}} ">
    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Tipo de contrato</label>
        <input type="text" id="tipo_contrato" name="tipo_contrato" class="form-control" tabindex="2" value=" {{$repartidor->tipo_contrato}} ">
    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Agencia</label>
        
        <select class="form-select " id="agencia" name="agencia" tabindex="7">
        <option value="{{$repartidor->agencia}}" selected >{{$repartidor->agencia}}</option>
        <option value="San Salvador">San Salvador</option>
      <option value="San Miguel">San Miguel</option>
      <option value="Santa Ana">Santa Ana</option>
    </select>
    </div>

    <div class="mb-3 col-4" >
        <label for="" class="form-label">Nº de ISSS</label>
        <input type="text" id="num_seguro" name="num_seguro" class="form-control" tabindex="1"  value=" {{$repartidor->num_seguro}} ">
    </div>
    <div class="mb-3 col-4">
        <label for="" class="form-label">Nº de AFP</label>
        <input type="text" id="num_afp" name="num_afp" class="form-control" tabindex="2" value=" {{$repartidor->num_afp}} ">
    </div>
    <div class="mb-3 col-4">
        <label for="" class="form-label">Cargo</label>
        
        <select class="form-select " id="cargo" name="cargo" tabindex="10">
        <option value="{{$repartidor->cargo}}" selected >{{$repartidor->cargo}}</option>
    <option value="Ceo">Ceo</option>
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
    </div> 

    <div class="mb-3 col-4" >
        <label for="" class="form-label">Fecha de Alta</label>
        <input type="text" id="fecha_de_alta" name="fecha_de_alta" class="form-control" tabindex="1"  value=" {{ date('d/m/Y', strtotime($repartidor->fecha_de_alta))}} ">
    </div>
    <div class="mb-3 col-4">
        <label for="" class="form-label">Salario</label>
        <input type="text" id="salario" name="salario" class="form-control" tabindex="2" value=" {{$repartidor->salario}} ">
    </div>
    <div class="mb-3 col-4">
        <label for="" class="form-label">Fecha de Baja</label>
        <input type="text" id="fecha_de_baja" name="fecha_de_baja" class="form-control" tabindex="2" value=" {{$repartidor->fecha_de_baja}} ">
    </div>

    <div class="mb-3 col-12">
        <label for="" class="form-label">Nota</label>
        <textarea rows="3" id="nota" name="nota" class="form-control" tabindex="2" >{{$repartidor->nota}}</textarea>
    </div>


    </div>
</div>


   
<div class="row mx-5 mt-4 " >
      <h4>Datos del vehiculo</h4>
  </div>


   
   
  <div class="row border mx-5 py-4" style="background-color: white;" >
    <div class="row">

    <div class="mb-3 col-6">
        <label for="" class="form-label">Tipo de Vehiculo</label>
        <select class="form-select " id="tipo_vehiculo" name="tipo_vehiculo" tabindex="15" >
        <option value="{{$repartidor->tipo_vehiculo}}" selected >{{$repartidor->tipo_vehiculo}}</option>
                                  
                                  <option value="Motocicleta">Motocicleta</option>
                                  <option value="Vehiculo">Vehiculo</option>
                                  <option value="Camion">Camion</option>
                                </select>
    </div>

    <div class="mb-3 col-6">
        <label for="" class="form-label">Equipo es asignado</label>
        <select class="form-select" id="asigno_unidad" name="asigno_unidad" tabindex="16">
        <option value="{{$repartidor->asigno_unidad}}" selected >{{$repartidor->asigno_unidad}}</option>   
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                    
                  </select>
    </div>
    
    <div class="mb-3 col-4" >
        <label for="" class="form-label">Numero de placa</label>
        <input type="text" id="num_placa" name="num_placa" class="form-control" tabindex="1"  value=" {{$repartidor->num_placa}} ">
    </div>
    <div class="mb-3 col-4">
        <label for="" class="form-label">Numero de tarjeta</label>
        <input type="text" id="num_tarjeta" name="num_tarjeta" class="form-control" tabindex="2" value=" {{$repartidor->num_tarjeta}} ">
    </div>
    <div class="mb-3 col-4">
        <label for="" class="form-label">Numero de licencia</label>
        <input type="text" id="num_licencia" name="num_licencia" class="form-control" tabindex="2" value=" {{$repartidor->num_licencia}} ">
    </div>

    <div class="mb-3 col-4">
        <label for="" class="form-label">Foto</label>
        <input type="file" id="foto" name="foto" class="form-control" tabindex="2" >
    </div>
 


   

   </div> 

    
   

<br>



<div class="modal-footer px-4">
<a href="/repartidores" class="btn btn-primary">Cancelar</a>
    
  &nbsp; &nbsp;
    <button type="submit" class="btn btn-primary">Editar</button>
  </div>

  

</div>

</form>


@endsection


@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@stop
