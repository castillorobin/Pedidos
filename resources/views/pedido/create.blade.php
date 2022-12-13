
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
    <h1 style="text-align:center">Melo Express</h1>
@stop

@section('content')

<h2>Ingresar Envios</h2>
<div class="container ">
<form action="/pedidos" method="POST">
    @csrf
<div class="row border" style="background-color: white; padding: 15px; border-radius:20px;">
<div class="row mb-3">
<label for="" class="col-sm-2 col-form-label">COMERCIO</label>

    <div class="col-sm-4">
    <select id="vende" name="vende" class="form-control">
       <option >-SELECCIONAR COMERCIO-</option>
        @foreach($vendedores as $vendedor)
       <option value="{{ $vendedor->nombre }}">{{ $vendedor->nombre }}</option>
       @endforeach
       </select>

    </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">DESTINATARIO</label>

    <div class="col-sm-8">
    <input type="text" id="destino" name="destino" class="form-control" tabindex="2" placeholder="NOMBRE DEL DESTINATARIO">
    </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">DIRECCION DE ENTREGA</label>

    <div class="col-sm-8">
    <input type="text" id="dire" name="dire" class="form-control" tabindex="1" placeholder="DIRECCION" >
    </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">TELEFONO</label>

    <div class="col-sm-8">
    <input type="text" id="tele" name="tele" class="form-control" tabindex="1" placeholder="TELEFONO" >
    </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">TIPO DE ENVIO</label>

    <div class="col-sm-4">
    <select id="tipo" name="tipo" class="form-control">
       <option >-SELECCIONAR TIPO-</option>
        @foreach($tipos as $tipo)
       <option value="{{ $tipo->nombre }}">{{ $tipo->nombre }}</option>
       @endforeach
       </select>

    </div>
    </div>
    
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">FECHA DE RECEPCION</label>

    

    <div class="col-sm-4">
        <input type="text"  class="form-control" placeholder="{{ $date }}" DISABLED>
   
    </div>
    </div>
</div>
<br>
<div class="row border" style="background-color: white; padding: 15px; border-radius:20px;">
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">PRECIO </label>

    <div class="col-sm-4">
    <input type="text" id="precio" name="precio" class="form-control" tabindex="5" placeholder="$0.00">
    </div>
    </div> 

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">ENVIO </label>

    <div class="col-sm-4">
    <input type="text" id="envio" name="envio" class="form-control" tabindex="6" placeholder="$0.00">
    </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">TOTAL </label>

    <div class="col-sm-4">
    <input type="text" id="total" name="total" class="form-control" tabindex="7" placeholder="$0.00" DISABLED>
    </div>
    </div>
    </div>
<br>
<div class="row border" style="background-color: white; padding: 15px; border-radius:20px;">
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">TIPO DE SERVICIO </label>

    <div class="col-sm-4" >
    <select name="tipos" id="tipos" class="form-control">
    <option >-SELECCIONAR TIPO-</option>
        <option value="ENTREGA">ENTREGA</option>
        <option value="RECOELCTA">RECOLECTA</option>
        <option value="RECOLECTA Y ENTREGA">RECOLECTA Y ENTREGA</option>
    </select>
    </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">ESTADO DEL ENVIO </label>

    <div class="col-sm-4">
    <select id="estado" name="estado" class="form-control">
       <option >-SELECCIONAR ESTADO-</option>
        @foreach($estados as $estado)
       <option value="{{ $estado->nombre }}">{{ $estado->nombre }}</option>
       @endforeach
       </select>

    </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NOTA </label>

    <div class="col-sm-8">
    <input type="text" id="nota" name="nota" class="form-control" tabindex="10">
    </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">SOLICITUD DE PAGO </label>

    <div class="col-sm-4">
    <select id="estado" name="estado" class="form-control">
       <option >-SELECCIONAR PAGO-</option>
       <option value="EFECTIVO">EFECTIVO</option>
       <option value="TRANSFERENCIA">TRANSFERENCIA</option>
       <option value="TIGO MONEY">TIGO MONEY</option>
       <option value="CHIVO WALLET">CHIVO WALLET</option>
       </select>

    </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">RUTA </label>

    <div class="col-sm-4">
    <select id="ruta" name="ruta" class="form-control">
       <option >-SELECCIONAR RUTA-</option>
        @foreach($rutas as $ruta)
       <option value="{{ $tipo->nombre }}">{{ $ruta->nombre }}</option>
       @endforeach
       </select>
    </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">REPARTIDOR</label>

    <div class="col-sm-8">
    <select id="ruta" name="ruta" class="form-control">
       <option >-SELECCIONAR REPARTIDOR-</option>
        @foreach($repartidores as $repartidor)
       <option value="{{ $repartidor->nombre }}">{{ $repartidor->nombre }}</option>
       @endforeach
       </select>
    </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">FOTO DEL PAQUETE</label>

    <div class="col-sm-8">
    <input type="file" id="foto" name="foto" class="form-control" tabindex="10">
    </div>
    </div>
    <br>
    <p></p>
    <div class="row mb-3">
    
    
    
    <button type="submit" class="col-sm-2 btn btn-primary">Guardar</button>
    </div>
</form>

<br>
    





</div> 
<br>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
                                                $(document).ready(function() {
   													 $("#envio").change(function() {
       												 //alert($(this).val());
														const preci = parseFloat(document.getElementById("precio").value);
														                                                    
                                                        const envi =parseFloat($(this).val()); 

                                                        document.getElementById("total").value = preci + envi;

														//const castot = parseFloat(document.getElementById("totalc").value);
														//document.getElementById("ptotal").value = castot ; 

    													});
                                                
                                            });
</script>

@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@stop
