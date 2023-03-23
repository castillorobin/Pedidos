
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
    <h1 style="text-align:center">Melo Express</h1>
@stop

@section('content')



<form action="/pedidos/{{$pedido->id}}" >
    
   
<div class="row mx-5" >
    <h3>Informacion del envio</h3>
      
    </div>
  <br>



    <div class="row mx-5" >
    <h4>Datos del Comercio</h4>
    </div>

    <div class="row border mx-5 py-4" style="background-color: white;" >
    <div class="row">

    
    <div class="  col-sm-6">
    <label for="inputEmail3" class="col-sm-4 col-form-label">Id de envio</label>
        <div class="input-group mb-3 col-5">

            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/fluency-systems-regular/48/null/checked-identification-documents.png" width="25" /></span>
            </div>
        <input type="text" class="form-control" value=" {{$pedido->id}}" aria-label="Username" aria-describedby="basic-addon1" disabled>
        </div>
    </div>
   
                <div class="col-sm-4 text-center">
                    <label for="inputEmail3" class="col-sm-8 col-form-label">Codigo de barras</label>
                <img width="110" src="vendor/adminlte/dist/img/barra.jpg" alt="" >
                </div>

    </div>
    <br><p></p>

<div class="row">

            <div class="col-12">
             <label for="" class="col-12 col-form-label">Nombre de comercio / Tienda *</label>
             
            
             <input type="text" class="form-control" value=" {{$pedido->vendedor}} " aria-label="Username" aria-describedby="basic-addon1" readonly>
       

   

            </div>
 </div>

 </div>

  <div class="row mx-5 mt-4 " >
      <h4>Datos del destinatario</h4>
  </div>

  <div class="row border mx-5 py-4" style="background-color: white;" >
    <div class="row">
    <div class="col-sm-6 ">
    <label for="inputEmail3" class="col-sm-4 col-form-label">Destinatario *</label>
    <input type="text" id="desti" name="desti" class="form-control" tabindex="3" value=" {{$pedido->destinatario}} " readonly>
    </div>
    
    <div class="col-sm-6">
    <label for="inputEmail3" class="col-sm-4 col-form-label">Telefono</label>
    <input type="text" id="telefono" name="telefono" class="form-control" tabindex="3" value=" {{$pedido->telefono}} " readonly>
    </div>


    </div>
    <div class="row">
    <div class="col-sm-12">
<label for="" class="col-sm-6 col-form-label">Direccion de entrega *</label>


<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/glyph-neue/25/null/order-delivered.png"/></span>
  </div>
  <input type="text" id="direccion" name="direccion" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value=" {{$pedido->direccion}} " readonly>
</div>

</div>
                                    

    </div>


   
  </div>

    
  <div class="row mx-5 mt-4 " >
      <h4>Datos del paquete</h4>
</div>

   <div class="row border mx-5 py-4" style="background-color: white;">
   <div class="row">
   <div class="col-sm-6 ">

<label for="" class="col-sm-6 col-form-label">Fecha de creacion</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/tear-off-calendar.png"/></span>
  </div>
  <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" value=" {{  date('Y/m/d', strtotime($pedido->created_at))  }} " readonly>
</div>
    </div>
     
    <div class="col-sm-6">
    <label for="" class="col-sm-6 col-form-label">Fecha de entrega *</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/tear-off-calendar.png"/></span>
  </div>
  <input type="text" id="fentrega" name="fentrega" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value=" {{  date('Y/m/d', strtotime($pedido->fecha_entrega))  }} " readonly>
</div>
    </div>
      </div>        
      




<div class="row">



      
    <div class="col-sm-6 ">


<label for="" class="col-sm-6 col-form-label">Tipo de servicio</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/online-support.png"/></span>
  </div>
  <input type="text" class="form-control" value=" {{$pedido->servicio}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
</div>
    </div>
     
    <div class="col-sm-6">
    <label for="" class="col-sm-6 col-form-label">Tipo de envio</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/25/null/external-delivery-logistic-delivery-kiranshastry-solid-kiranshastry.png"/></span>
  </div>
  <input type="text" class="form-control" value=" {{$pedido->tipo}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
</div>
    </div>                                      
    </div>





<div class="row">

<div class="col-sm-4">
<label for="" class="col-sm-8 col-form-label">Cobro del envio</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/cheap-2.png"/></span>
</div>
<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" readonly>
</div>
</div>



<div class="col-sm-4">
<label for="" class="col-sm-8 col-form-label">Estado del envio</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/deliver-food.png"/></span>
  </div>
  <input type="text" class="form-control" value=" {{$pedido->estado}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
</div>
</div>


<div class="col-sm-4">
<label for="" class="col-sm-8 col-form-label">Estado del pago</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/cash-in-hand.png"/></span>
  </div>
  <input type="text" class="form-control" value=" {{$pedido->pagado}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
</div>
</div>


<div class="row">

<div class="col-sm-4">
<label for="" class="col-sm-8 col-form-label">Precio del paquete</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/cheap-2.png"/></span>
</div>
<input type="text" id="precio" name="precio" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value=" {{$pedido->precio}} " readonly>
</div>
</div>



<div class="col-sm-4">
<label for="" class="col-sm-8 col-form-label">Costo del envio</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/cheap-2.png"/></span>
</div>
<input type="text" id="envio" name="envio" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value=" {{$pedido->precio}} " readonly>
</div>
</div>


<div class="col-sm-4">
<label for="" class="col-sm-8 col-form-label">Total a cobrar</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/cheap-2.png"/></span>
</div>
<input type="text" id="total" name="total" class="form-control" aria-label="Username" aria-describedby="basic-addon1" readonly value=" {{$pedido->total}} " readonly>
</div>
</div>


</div>

</div>

</div>
   
   
<div class="row mx-5 mt-4 " >
      <h4>Datos del internos</h4>
  </div>

   <div class="row border mx-5 py-4" style="background-color: white;">
   <div class="row">
    
   <div class="col-sm-6 ">


<label for="" class="col-sm-6 col-form-label">Usuario que registra</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/external-itim2101-lineal-itim2101/25/null/external-operator-logistics-and-delivery-itim2101-lineal-itim2101.png"/></span>
  </div>
  <input type="text" class="form-control" value=" {{$pedido->ingresado}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
</div>
    </div>
    
    <div class="col-sm-6">
    <label for="" class="col-sm-6 col-form-label">Recepción agencia</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/ios-filled/25/null/online-store.png"/></span>
  </div>
  <input type="text" class="form-control" value=" {{$pedido->agencia}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
</div>
    </div>



   
   </div>   
   
   <div class="row">


   <div class="col-sm-6 ">


<label for="" class="col-sm-6 col-form-label">Repartidor</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/external-kmg-design-detailed-outline-kmg-design/25/null/external-delivery-man-logistics-delivery-kmg-design-detailed-outline-kmg-design-2.png"/></span>
  </div>
  <input type="text" class="form-control" value=" {{$pedido->repartidor}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
</div>
    </div>
    
    <div class="col-sm-6">
    <label for="" class="col-sm-6 col-form-label">Ruta</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/external-wanicon-lineal-wanicon/25/null/external-map-logistics-wanicon-lineal-wanicon.png"/></span>
  </div>
  <input type="text" class="form-control" value=" {{$pedido->ruta}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
</div>
    </div>

   </div>
<div class="row">

<div class="col-sm-6 ">


<label for="" class="col-sm-6 col-form-label">Nota</label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"> <i class="fas fa-file-alt"></i> </span>
  </div>
  <input type="text" id="nota" name="nota" class="form-control" aria-describedby="basic-addon1"  value=" {{$pedido->nota}} " readonly>
</div>
    </div>
    <div class="col-sm-6">
    <label for="" class="col-sm-8 col-form-label">Código de barra del estante</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"> <i class="fas fa-barcode"></i> </span>
  </div>
  <input type="text" id="estante" name="estante" class="form-control" aria-label="Username" aria-describedby="basic-addon1" readonly>
</div>
    </div>

</div>
<div class="row">
  
<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-12 col-form-label">Foto del paquete</label>

    <div class="col-sm-12">
    <input type="file" id="foto" name="foto" class="form-control" tabindex="10">
    </div>
    </div>
    <br>
</div>







<div class="row">
<div class="modal-footer">
        
     
<a href="/pedidos" class="btn btn-primary">Regresar</a> 
        </div>

        </div>
    
   


</form>


@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@stop
