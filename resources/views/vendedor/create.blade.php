
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
<h6 ><i class="fas fa-home"></i> Inicio / Almacen / Agregar Comercio</h6>
@stop

@section('content')
<style>
h5 {
  font: 24px sans-serif;
  margin-top: 10px;
  text-align: center;
}
h5.linea {
  position: relative;
  z-index: 1;

}
h5.linea:before {
  border-top: 2px solid #000000;
  content: "";
  margin: 0 auto;
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  z-index: -1;
}
h5.linea span {

  background: #fff;
  padding: 0 2px;
}
</style>
<script>
function myFunction() {
  document.getElementById("myForm").reset();
}
</script>
<br>
<div class="container ">
<form action="/vendedores" method="POST" id="myForm">
    @csrf
    <div class="row border" style="background-color: white; padding: 15px; border-radius:20px;">
<div class="  col-sm-6">
<h3>Agregar Comercio</h3>
</div>
    
<div class="row mb-3">

<div class="alert alert-danger" role="alert">
<i class="fas fa-exclamation-circle"></i> Estimado usuario los campos con * son obligatorios
</div>

<div class="col-sm-4">
<label for="" class="col-sm-6 col-form-label">ID Comercio</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/fluency-systems-regular/48/null/checked-identification-documents.png" width="25" /></span>
  </div>
  <input type="text" class="form-control" placeholder="{{ $uid }}" aria-label="Username" aria-describedby="basic-addon1" disabled>
</div>
</div>
</div>


<div class="row mb-3">


<div class="col-sm-12">
<label for="" class="col-sm-6 col-form-label">Comercio/Tienda *</label>
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
<label for="" class="col-sm-6 col-form-label">Direccion del comercio *</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/glyph-neue/25/null/order-delivered.png"/></span>
  </div>
  <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Ingrese direccion del comercio" aria-label="Username" aria-describedby="basic-addon1">
</div>

</div>
</div>

<div class="row mb-3">
<div class="col-sm-6 ">
    <label for="inputEmail3" class="col-sm-4 col-form-label">Telefono *</label>
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
<input type="text" id="falta" name="falta" class="form-control" placeholder="{{ $date}}" aria-label="Username" aria-describedby="basic-addon1" disabled>
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



<div class="row mb-3">
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


    <div class="row mb-3 ">
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


<div class="row mb-3 ">
        
        <h5 class="linea"><span>Información Bancaria</span></h5>
     
        
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


<div class="row mb-3 ">
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
    
    <div class="row mb-3 ">

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

<div class="row mb-3">
        
     
        <h5 class="linea"><span>Información Fiscal</span></h5>
    
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
<input type="text" id="giro" name="giro" class="form-control" placeholder="Ingrese el giro de la empresa" aria-label="Username" aria-describedby="basic-addon1" >
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
    



    <div class="row mb-3 ">

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







<div class="modal-footer">
        
        &nbsp; &nbsp;
        <input type="button" class="btn btn-primary" onclick="myFunction()" value="Limpiar">
      &nbsp; &nbsp;
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>

      </div>
</div>
</div>
</div>


</form>
</div>


   

   
  


@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@stop
