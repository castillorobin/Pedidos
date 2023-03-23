
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
<h6 ><i class="fas fa-home"></i> Inicio / Almacen / Agregar recolecta</h6>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
@stop

@section('content')
<style>
body {
  font-family: 'Roboto', sans-serif;
}
</style>

<script>

</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
function myFunction() {
  document.getElementById("myForm").reset();
}


</script>



      <form action="/recolectas" method="POST" id="myForm">
    @csrf

    <div class="row mx-5" >
    <h3>Agregar Recolecta</h3>
      <div class="alert alert-danger" role="alert">
      <i class="fas fa-exclamation-circle"></i> Estimado usuario los campos con * son obligatorios
      </div>
    </div>
  <br>
<!-- empieza row general  -->
<div class="row border mx-5 py-4" style="background-color: white;" >
  <div class="row">

  <div class="col-sm-12">
<label for="" class="col-sm-4 col-form-label">Comercio / tienda</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <i class="fas fa-user"></i> </span>
</div>
<select id="nombre" name="nombre" class="form-control">
       <option >-Seleccionar comercio-</option>
       
       @foreach($vendedores as $vendedor)
       <option value="{{ $vendedor->nombre }}">{{ $vendedor->nombre }}</option>
       @endforeach
       </select>
</div>
</div>
  </div><!-- termina fila  -->

  <div class="row">
    
<div class="col-sm-7 ">
    <label for="inputEmail3" class="col-sm-6 col-form-label">Dirección de recolecta</label>
    <div class="input-group mb-3">

  <div class="input-group-prepend">
  <span class="input-group-text" id="basic-addon1"> <i class="fas fa-map-marker-alt"></i> </span>
  </div>
  <input type="text" class="form-control" name="direccion" placeholder="Ingrese la dirección de recolecta" aria-label="Username" aria-describedby="basic-addon1">
</div>
    </div>
    
    <div class="col-sm-5">
    <label for="inputEmail3" class="col-sm-6 col-form-label">Teléfono</label>
    <div class="input-group mb-3">

  <div class="input-group-prepend">
  <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-square-alt"></i> </span>
  </div>
  <input type="text" class="form-control" name="telefono" placeholder="Ingrese teléfono del comercio" aria-label="Username" aria-describedby="basic-addon1">
</div>
    </div>
  </div><!-- termina fila  -->

  <div class="row">
    
<div class="col-sm-6">
<label for="" class="col-sm-4 col-form-label">Fecha de recolecta</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <i class="fas fa-dolly"></i> </span>
</div>
<input type="text" class="form-control" placeholder="{{ $date }}" aria-label="Username" aria-describedby="basic-addon1" disabled>
</div>
</div>


<div class="col-sm-6">
<label for="" class="col-sm-4 col-form-label">Fecha de entrega</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <i class="fas fa-archive"></i> </span>
</div>
<input type="date" class="form-control" name="fechaen" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>
  </div><!-- termina fila  -->

  <div class="row">
    
<div class="col-sm-6">
<label for="" class="col-sm-4 col-form-label">Repartidor</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <i class="fas fa-dolly"></i> </span>
</div>
<select id="repartidor" name="repartidor" class="form-control">
<option >-Seleccionar repartidor-</option>
       @foreach($repartidores as $repartidor)
       <option value="{{ $repartidor->id }}">{{ $repartidor->nombre }}</option>
       @endforeach
     
       </select>
</div>
</div>


<div class="col-sm-6">
<label for="" class="col-sm-4 col-form-label">Estado</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <i class="fas fa-archive"></i> </span>
</div>
<select id="estado" name="estado" class="form-control">
       <option value="Creada">Creada</option>
       <option value="Recolectada">Recolectada</option>
       <option value="Reprogramada">Reprogramada</option>
        
       <option value="No recolectada">No recolectada</option>
       </select>
</div>
</div>
  </div><!-- termina fila  -->

  <div class="row">
    
<div class="col-sm-8">
<label for="" class="col-sm-4 col-form-label">Nota</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <i class="fas fa-book"></i> </span>
</div>
<input type="text" class="form-control" name="nota" placeholder="Ingrese nota, indicación, etc." aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>


<div class="col-sm-4">
<label for="" class="col-sm-4 col-form-label">Agencia</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <i class="fas fa-book"></i> </span>
</div>
<select id="agencia" name="agencia" class="form-control">
       <option value="San Salvador">San Salvador</option>
       <option value="San Miguel">San Miguel</option>
       <option value="Santa Ana">Santa Ana</option>
       </select>
</div>
</div>
  </div><!-- termina fila  -->

  <div class="row">
     
<br>
<div class="modal-footer" >
&nbsp; &nbsp;
        <input type="button" class="btn btn-primary" onclick="myFunction()" value="Limpiar">
      &nbsp; &nbsp;
<button type="submit" class="btn btn-primary">Guardar</button>

</div>
  </div><!-- termina fila  -->



  </div><!--termina row general  -->






<br>
 



</form>


@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@stop