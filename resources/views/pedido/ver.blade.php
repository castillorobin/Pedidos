
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
<h6 ><i class="fas fa-home"></i> Inicio / Almacen / Ver</h6>
@stop

@section('content')
<style>
    .datos{
        color:#787878
    }
    
</style>


<form action="/pedidos/{{$pedido->id}}" >
    
   
<div class="row mx-5" style="background:#a8a8a8">
    <h3>Detalle del envio</h3>
      
    </div>
  <br>



<div class="row mx-5" style="font-size:20px;"> <!--  Inicia el row general  -->

<div class="col-6"> <!--  Inicia la primera columna  -->

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Id de envio</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->id}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Nombre de comercio / Tienda</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->vendedor}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Destinatario </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->destinatario}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Telefono </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->telefono}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Direccion de entrega </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->direccion}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Fecha de creacion </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{  date('d/m/Y', strtotime($pedido->created_at))  }}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Fecha de entrega </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{  date('d/m/Y', strtotime($pedido->fecha_entrega))  }}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Tipo de servicio </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->servicio}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Tipo de envio </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->tipo}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Cobro del envio </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" ></label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Estado del envio </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->estado}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Estado del pago </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->pagado}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Precio del paquete </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->precio}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Costo del envio</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->precio}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Total a cobrar</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->total}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Usuario que registra</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->ingresado}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Recepción agencia</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->agencia}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Repartidor</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->repartidor}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Ruta</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->ruta}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Nota</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->nota}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Nota</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->nota}}</label>
    </div>
</div>



</div> <!--  Fin de la primera columna  -->


<div class="col-6"> <!--  Inicia la segunda columna  -->



</div> <!--  Fin de la segunda columna  -->
<div class="row">

<div class="modal-footer">
        
     
<a href="/pedidos" class="btn btn-primary">Regresar</a> 
        </div>

    
        </div>

<br><p></p>

</div> <!--  Termina el row general  -->



</form>


@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@stop
