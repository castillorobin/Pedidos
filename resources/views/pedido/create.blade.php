
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
    <h1 style="text-align:center">Melo Express</h1>
@stop

@section('content')

<h2>Ingresar Pedidos</h2>

<form action="/pedidos" method="POST">
    @csrf
    <div class="mb-3 col-6" >
        <label for="" class="form-label">Vendedor</label>
        <input type="text" id="vende" name="vende" class="form-control" tabindex="1">
    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Direccion de Entrega</label>
        <input type="text" id="dire" name="dire" class="form-control" tabindex="2">
    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Telefono del Cliente</label>
        <input type="text" id="tele" name="tele" class="form-control" tabindex="3">
    </div>

    <div class="mb-3 col-3">
        <label for="" class="form-label">fecha de entrega</label>
        <input type="date" id="fech" name="fech" class="form-control" tabindex="4">
    </div>
    <div class="mb-3 col-3">
        <label for="" class="form-label">Tipo del paquete</label>
        <input type="text" id="tipo" name="tipo" class="form-control" tabindex="5" >
    </div>

    <div class="mb-3 col-3">
        <label for="" class="form-label">Precio del Paquete</label>
        <input type="text" id="precio" name="precio" class="form-control" tabindex="5" placeholder="$0.00">
    </div>
    <div class="mb-3 col-3">
        <label for="" class="form-label">Envio</label>
        <input type="text" id="envio" name="envio" class="form-control" tabindex="6" placeholder="$0.00">
    </div>
    <div class="mb-3 col-3">
        <label for="" class="form-label">Total</label>
        <input type="text" id="total" name="total" class="form-control" tabindex="7" placeholder="$0.00">
    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Repartidor</label>
        <input type="text" id="repa" name="repa" class="form-control" tabindex="8">
    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Ruta</label>
        <input type="text" id="ruta" name="ruta" class="form-control" tabindex="8">
    </div>

    <div class="mb-3 col-6">
        <label for="" class="form-label">Estado del paquete</label>
        <input type="text" id="estado" name="estado" class="form-control" tabindex="9">
    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Nota</label>
        <input type="text" id="nota" name="nota" class="form-control" tabindex="10">
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
