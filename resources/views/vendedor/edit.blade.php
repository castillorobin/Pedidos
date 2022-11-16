
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
    <h1 style="text-align:center">Melo Express</h1>
@stop

@section('content')

<h2>Editar Comercio</h2>

<form action="/vendedores/{{$vendedor->id}}" method="POST">
@csrf
    @method('PUT')
    <div class="mb-3 col-6" >
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" tabindex="1"  value=" {{$vendedor->nombre }} ">
    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Direccion</label>
        <input type="text" id="dire" name="dire" class="form-control" tabindex="2" value=" {{$vendedor->direccion }} ">
    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Telefono</label>
        <input type="text" id="tele" name="tele" class="form-control" tabindex="3" value=" {{$vendedor->telefono }} ">
    </div>

    <div class="mb-3 col-3">
        <label for="" class="form-label">Fecha de ingreso</label>
        <input type="text" id="fech" name="fech" class="form-control" tabindex="4" value=" {{$vendedor->fecha_ingreso }} ">
    </div>
    <div class="mb-3 col-3">
        <label for="" class="form-label">Tipo de vendedor</label>
        <input type="text" id="tipov" name="tipov" class="form-control" tabindex="7" value=" {{$vendedor->tipovende }} ">
    </div>

    <div class="mb-3 col-3">
        <label for="" class="form-label"><strong> Datos Bancarios</strong></label>
        
    </div>
    <div class="mb-3 col-3">
        <label for="" class="form-label">Nombre del Titular</label>
        <input type="text" id="titular" name="titular" class="form-control" tabindex="6" value=" {{$vendedor->titular }} ">
    </div>
    <div class="mb-3 col-3">
        <label for="" class="form-label">Número de cuenta</label>
        <input type="text" id="cuenta" name="cuenta" class="form-control" tabindex="7" value=" {{$vendedor->cuenta }} ">
    </div>

    <div class="mb-3 col-3">
        <label for="" class="form-label">Banco</label>
        <input type="text" id="banco" name="banco" class="form-control" tabindex="7" value=" {{$vendedor->banco }} ">
    </div>

    <div class="mb-3 col-3">
        <label for="" class="form-label">Tipo de cuenta</label>
        <input type="text" id="tcuenta" name="tcuenta" class="form-control" tabindex="7" value=" {{$vendedor->tcuenta }} ">
    </div>
   
    <br>
   <button type="submit" class="btn btn-primary">Guardar</button>


</form>


@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@stop
