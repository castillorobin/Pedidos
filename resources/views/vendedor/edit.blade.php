
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
    <h1 style="text-align:center">Melo Express</h1>
@stop

@section('content')

    
    <form action="/vendedores/{{$vendedor->id}}" method="POST">
    @csrf
    @method('PUT')   
    
   
    <div class="row mx-5" >
    <h3>Editar Comercio</h3>
      <div class="alert alert-danger" role="alert">
      <i class="fas fa-exclamation-circle"></i> Estimado usuario los campos con * son obligatorios
      </div>
    </div>
  <br>



  <div class="row mx-5" >
    <h4>Datos del Comercio</h4>
    </div>

    <div class="row border mx-5 py-4" style="background-color: white;" >
    <div class="row">

    <div class="row">


<div class="col-sm-4">
<label for="" class="col-sm-6 col-form-label">ID Comercio</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
  <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/fluency-systems-regular/48/null/checked-identification-documents.png" width="25" /></span>
</div>
<input type="text" class="form-control" placeholder="{{ $uid }}" aria-label="Username" aria-describedby="basic-addon1" disabled>
</div>
</div>
 
 

</div><!-- termina fila  -->









    <div class="mb-3 col-12" >
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" tabindex="1"  value=" {{$vendedor->nombre }} ">
    </div>
    <div class="mb-3 col-12">
        <label for="" class="form-label">Direccion</label>
        <input type="text" id="dire" name="dire" class="form-control" tabindex="2" value=" {{$vendedor->direccion }} ">
    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Telefono</label>
        <input type="text" id="tele" name="tele" class="form-control" tabindex="3" value=" {{$vendedor->telefono }} ">
    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Whatsapp</label>
        <input type="text" id="what" name="what" class="form-control" tabindex="3" value=" {{$vendedor->whatsapp }} ">
    </div>
    <div class="mb-3 col-4">
        <label for="" class="form-label">Fecha de alta</label>
        <input type="text" id="falta" name="falta" class="form-control" tabindex="4" value=" {{  date('d/m/Y', strtotime($vendedor->created_at))  }} ">
    </div>
    <div class="mb-3 col-4">
        <label for="" class="form-label">Fecha de baja</label>
        <input type="text" id="fbaja" name="fbaja" class="form-control" tabindex="4" value=" {{  date('d/m/Y', strtotime($vendedor->fbaja))  }} ">
    </div>
    <div class="mb-3 col-4">
        <label for="" class="form-label">Tipo de Comercio</label>
        <select id="tvende" name="tvende" class="form-control">
        <option value="{{$vendedor->tipovende }}" selected >{{$vendedor->tipovende }}</option>
       <option value="Pequeño">Pequeño</option>
       <option value="Mediano">Mediano</option>
       <option value="Grande">Grande</option>
       
       </select>
    </div>

    <div class="mb-3 col-8">
        <label for="" class="form-label">Correo</label>
        <input type="text" id="correo" name="correo" class="form-control" tabindex="7" value=" {{$vendedor->correo }} ">
    </div>
    <div class="mb-3 col-4">
        <label for="" class="form-label">Estado del Comercio</label>
        
        <select id="estado" name="estado" class="form-control">
        <option value="{{$vendedor->estado }}" selected >{{$vendedor->estado }}</option>
        <option value="Alta">Alta</option>
       <option value="Baja">Baja</option>
       <option value="Lista negra">Lista negra</option>
        
       </select>
    </div>
    <div class="mb-3 col-8">
        <label for="" class="form-label">Nota</label>
        <input type="text" id="tipov" name="tipov" class="form-control" tabindex="7" value=" {{$vendedor->nota }} ">
    </div>
    <div class="mb-3 col-4">
        <label for="" class="form-label">Agencia de registro</label>
        
        <select id="agen" name="agen" class="form-control">
        <option value="{{$vendedor->agencia }}" selected >{{$vendedor->agencia }}</option>
       <option value="San Salvador">San Salvador</option>
       <option value="San Miguel">San Miguel</option>
       <option value="Santa Ana">Santa Ana</option>
        
       </select>
       </select>
    </div>
</div>
</div>


   
<div class="row mx-5 mt-4 " >
      <h4>Información Bancaria</h4>
  </div>


  <div class="row border mx-5 py-4" style="background-color: white;" >
    <div class="row">

    <div class="mb-3 col-12">
        <label for="" class="form-label">Nombre del titular de la cuenta</label>
        <input type="text" id="titular" name="titular" class="form-control" tabindex="6" value=" {{$vendedor->titular }} ">
    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Nombre del banco</label>
        <input type="text" id="banco" name="banco" class="form-control" tabindex="7" value=" {{$vendedor->banco }} ">
    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Número de cuenta</label>
        <input type="text" id="cuenta" name="cuenta" class="form-control" tabindex="7" value=" {{$vendedor->cuenta }} ">
    </div>

    <div class="mb-3 col-4">
        <label for="" class="form-label">Tipo de cuenta</label>
        <input type="text" id="tcuenta" name="tcuenta" class="form-control" tabindex="7" value=" {{$vendedor->tcuenta }} ">
    </div>
    <div class="mb-3 col-4">
        <label for="" class="form-label"># de chivo</label>
        <input type="text" id="chivo" name="chivo" class="form-control" tabindex="7" value=" {{$vendedor->chivo }} ">
    </div>
    <div class="mb-3 col-4">
        <label for="" class="form-label"># de tigo money</label>
        <input type="text" id="money" name="money" class="form-control" tabindex="7" value=" {{$vendedor->tmoney }} ">
    </div>


   
    </div>
</div>


   
<div class="row mx-5 mt-4 " >
      <h4>Información Fiscal</h4>
  </div>


   
   
  <div class="row border mx-5 py-4" style="background-color: white;" >
    <div class="row">
    
    <div class="mb-3 col-12">
        <label for="" class="form-label">Nombre de la empresa</label>
        <input type="text" id="empresa" name="empresa" class="form-control" tabindex="7" value=" {{$vendedor->empresa }} ">
    </div>

    <div class="mb-3 col-8">
        <label for="" class="form-label">Giro</label>
        <input type="text" id="tcuenta" name="tcuenta" class="form-control" tabindex="7" value=" {{$vendedor->giro }} ">
    </div>
    <div class="mb-3 col-4">
        <label for="" class="form-label">Tipo de contribuyente</label>
        
        <select id="contri" name="contri" class="form-control">
        
       <option value="Pequeño">Pequeño</option>
       <option value="Mediano">Mediano</option>
       <option value="Grande">Grande</option>
        
       </select>
    </div>

    <div class="mb-3 col-4">
        <label for="" class="form-label">Número de (DUI)</label>
        <input type="text" id="dui" name="dui" class="form-control" tabindex="7" value=" {{$vendedor->dui }} ">
    </div>
    <div class="mb-3 col-4">
        <label for="" class="form-label">Número de (IVA)</label>
        <input type="text" id="iva" name="iva" class="form-control" tabindex="7" value=" {{$vendedor->niva }} ">
    </div>
    <div class="mb-3 col-4">
        <label for="" class="form-label">Número de registro (NRC)</label>
        <input type="text" id="nrc" name="nrc" class="form-control" tabindex="7" value=" {{$vendedor->nrc }} ">
    </div>

    <div class="mb-3 col-12">
        <label for="" class="form-label">Dirección fiscal</label>
        <input type="text" id="dfiscal" name="dfiscal" class="form-control" tabindex="7" value="  ">
    </div>



   </div> 

    
   

    <br>
   


   <div class="modal-footer px-4">
<a href="/vendedores" class="btn btn-primary">Cancelar</a>
        
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
