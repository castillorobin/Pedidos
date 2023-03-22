
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
<h6 ><i class="fas fa-home"></i> Inicio / Almacen / Agregar envios</h6>
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
    /*
function myFunction() {
  document.getElementById("myForm").reset();
}


const tprecio = document.getElementById("precio");
const tenvio = document.getElementById("envio");
const ttotal = document.getElementById("total");

tenvio.addEventListener("change", (e) => {
 // iva.value = parseInt(base.value) * 0.19;
  ttotal.value = parseInt(tprecio.value) + parseInt(tenvio.value);
});

</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
function myFunction() {
  document.getElementById("myForm").reset();
}


 $(document).ready(function() {
   					$("#envio").change(function() {
       												 //alert($(this).val());
          const tenv = document.getElementById("tenvio").value;
					const preci = parseFloat(document.getElementById("precio").value);						                                                    
          const envi =parseFloat($(this).val()); 
          
          if(tenv=="Personalizado")
          {
            document.getElementById("total").value = preci;
          }else{
            document.getElementById("total").value = preci + envi;
          }
                    

														//const castot = parseFloat(document.getElementById("totalc").value);
														//document.getElementById("ptotal").value = castot ; 

    				});
                                                
                                            });
</script>






<div class="container">

<form action="/pedidos" method="POST" id="myForm">
    @csrf
<div class="row border" style="background-color: white; padding: 15px; border-radius:20px;">
<div class="  col-sm-6">
<h3>Agregar envio</h3>
</div>
<div class="row">

<div class="alert alert-danger" role="alert">
<i class="fas fa-exclamation-circle"></i> Estimado usuario los campos con * son obligatorios
</div>

<h5 class="linea"><span>Datos del Comercio</span></h5>



    <div class="  col-sm-6">
    <label for="inputEmail3" class="col-sm-4 col-form-label">Id de envio</label>
    <div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/fluency-systems-regular/48/null/checked-identification-documents.png" width="25" /></span>
  </div>
  <input type="text" class="form-control" placeholder="{{ $uid }}" aria-label="Username" aria-describedby="basic-addon1" disabled>
</div>
    </div>
    
    <div class="col-sm-4 text-center">
    <label for="inputEmail3" class="col-sm-8 col-form-label">Codigo de barras</label>
    <img width="110" src="vendor/adminlte/dist/img/barra.jpg" alt="" >
    </div>

    </div>
 




<div class="row">


    <div class="col-12">
    <label for="" class="col-12 col-form-label">Nombre de comercio / Tienda *</label>
    <select id="comer" name="comer" class="form-control">
       <option >-Seleccionar comercio-</option>
       
        @foreach($vendedores as $vendedor)
       <option value="{{ $vendedor->nombre }}">{{ $vendedor->nombre }}</option>
       @endforeach
       </select>

    </div>
    </div>


    <div class="row mb-3 ">
      
<br>
<p></p>

        <h5 class="linea"><span>Datos del destinatario</span></h5>

        <P></P>
    
        
    <div class="col-sm-6 ">
    <label for="inputEmail3" class="col-sm-4 col-form-label">Destinatario *</label>
    <input type="text" id="desti" name="desti" class="form-control" tabindex="3" placeholder="">
    </div>
    
    <div class="col-sm-6">
    <label for="inputEmail3" class="col-sm-4 col-form-label">Telefono</label>
    <input type="text" id="telefono" name="telefono" class="form-control" tabindex="3" placeholder="Ingrese teléfono del destinatario">
    </div>
    </div>

    <div class="row mb-3">


<div class="col-sm-12">
<label for="" class="col-sm-6 col-form-label">Direccion de entrega *</label>


<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/glyph-neue/25/null/order-delivered.png"/></span>
  </div>
  <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Ingrese la dirección de entrega del destinatario
" aria-label="Username" aria-describedby="basic-addon1">
</div>

</div>







<h5 class="linea"><span>Datos del paquete</span></h5>
<div class="col-sm-6 ">

<label for="" class="col-sm-6 col-form-label">Fecha de creacion</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/tear-off-calendar.png"/></span>
  </div>
  <input type="text" class="form-control" placeholder="{{ $date }}" aria-label="Username" aria-describedby="basic-addon1" disabled>
</div>
    </div>
     
    <div class="col-sm-6">
    <label for="" class="col-sm-6 col-form-label">Fecha de entrega *</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/tear-off-calendar.png"/></span>
  </div>
  <input type="date" id="fentrega" name="fentrega" class="form-control" placeholder="ENTREGA" aria-label="Username" aria-describedby="basic-addon1">
</div>
    </div>




    <div class="col-sm-6 ">


<label for="" class="col-sm-6 col-form-label">Tipo de servicio</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/online-support.png"/></span>
  </div>
  <select id="servicio" name="servicio" class="form-control">
     
       <option value="Entrega">Entrega</option>
       <option value="Entrega y recoelcta">Entrega y recoelcta</option>
  
       </select>
</div>
    </div>
     
    <div class="col-sm-6">
    <label for="" class="col-sm-6 col-form-label">Tipo de envio</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/25/null/external-delivery-logistic-delivery-kiranshastry-solid-kiranshastry.png"/></span>
  </div>
  <select id="tenvio" name="tenvio" class="form-control">
      
       <option value="Personalizado">Personalizado</option>
       <option value="Personalizado departamental">Personalizado departamental</option>
       <option value="Punto fijo">Punto fijo</option>
       <option value="Casillero">Casillero</option>
       <option value="Casillero San Salvador">Casillero San Salvador</option>
       <option value="Casillero San Miguel">Casillero San Miguel</option>
       <option value="Casillero Santa Ana">Casillero Santa Ana</option>
       </select>
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
<select id="cenvio" name="cenvio" class="form-control">
       <option value="Pendiente">Pendiente</option>
       <option value="Pagado">Pagado</option>
       <option value="Casillero pendiente">Casillero pendiente</option>
      
       </select>
</div>
</div>



<div class="col-sm-4">
<label for="" class="col-sm-8 col-form-label">Estado del envio</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/deliver-food.png"/></span>
  </div>
  <select id="estado" name="estado" class="form-control">
      
       <option value="Creado" >Creado</option>
       <option value="En ruta">En ruta</option>
       <option value="Entregado">Entregado</option>
       <option value="Reprogramado">Reprogramado</option>
       <option value="Agencia San Salvador">Agencia San Salvador</option>
       <option value="Agencia San Miguel">Agencia San Miguel</option>
       <option value="Agencia Santa Ana">Agencia Santa Ana</option>
       <option value="No retirado agencia San Salvador">No retirado agencia San Salvador</option>
       <option value="No retirado agencia San Miguel">No retirado agencia San Miguel</option>
       <option value="No retirado agencia Santa Ana">No retirado agencia Santa Ana</option>
       <option value="No retirado Centro logístico">No retirado Centro logístico</option>
       <option value="Casillero San Salvador">Casillero San Salvador</option>
       <option value="Casillero San Miguel">Casillero San Miguel</option>
       <option value="Casillero Santa Ana">Casillero Santa Ana</option>
       </select>
</div>
</div>


<div class="col-sm-4">
<label for="" class="col-sm-8 col-form-label">Estado del pago</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/cash-in-hand.png"/></span>
  </div>
  <select id="pagado" name="pagado" class="form-control">
       <option value="Por pagar">Por pagar</option>
       <option value="Pagado">Pagado</option>
       <option value="Trans. a la empresa">Trans. a la empresa</option>
       <option value="Trans. al comercio">Trans. al comercio</option>
       </select>
</div>
</div>

</div>

    <div class="row">

<div class="col-sm-4">
<label for="" class="col-sm-8 col-form-label">Precio del paquete</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/cheap-2.png"/></span>
</div>
<input type="text" id="precio" name="precio" class="form-control" placeholder="Precio" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>



<div class="col-sm-4">
<label for="" class="col-sm-8 col-form-label">Costo del envio</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/cheap-2.png"/></span>
</div>
<input type="text" id="envio" name="envio" class="form-control" placeholder="Envio" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>


<div class="col-sm-4">
<label for="" class="col-sm-8 col-form-label">Total a cobrar</label>
<div class="input-group mb-3">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/cheap-2.png"/></span>
</div>
<input type="text" id="total" name="total" class="form-control" aria-label="Username" aria-describedby="basic-addon1" readonly>
</div>
</div>


<div class="col-sm-12 text-center">
<h5 class="linea"><span> Datos Internos </span></h5>
</div>


<div class="col-sm-6 ">


<label for="" class="col-sm-6 col-form-label">Usuario que registra</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/external-itim2101-lineal-itim2101/25/null/external-operator-logistics-and-delivery-itim2101-lineal-itim2101.png"/></span>
  </div>
  <select id="ingresado" name="ingresado" class="form-control">
       
       <option value="ERICK">Erick</option>
       <option value="KAREN">Karen</option>
       <option value="ALEIDI">Aleidi</option>
       <option value="GABI">Gabi</option>
     
       </select>
</div>
    </div>
    
    <div class="col-sm-6">
    <label for="" class="col-sm-6 col-form-label">Recepción agencia</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/ios-filled/25/null/online-store.png"/></span>
  </div>
  <select id="agencia" name="agencia" class="form-control">
       
       <option value="San Salvador">San Salvador</option>
       <option value="San Miguel">San Miguel</option>
       <option value="Santa Ana">Santa Ana</option>
       </select>
</div>
    </div>


    <div class="col-sm-6 ">


<label for="" class="col-sm-6 col-form-label">Repartidor</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/external-kmg-design-detailed-outline-kmg-design/25/null/external-delivery-man-logistics-delivery-kmg-design-detailed-outline-kmg-design-2.png"/></span>
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
    <label for="" class="col-sm-6 col-form-label">Ruta</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/external-wanicon-lineal-wanicon/25/null/external-map-logistics-wanicon-lineal-wanicon.png"/></span>
  </div>
  <select id="ruta" name="ruta" class="form-control">
       <option value="RUTA 1">RUTA 1</option>
       <option value="RUTA 2">RUTA 2</option>
       <option value="RUTA 3">RUTA 3</option>
       <option value="RUTA 4">RUTA 4</option>
       <option value="RUTA 5">RUTA 5</option>
       </select>
</div>
    </div>


    
    <div class="col-sm-6 ">


<label for="" class="col-sm-6 col-form-label">Nota</label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"> <i class="fas fa-file-alt"></i> </span>
  </div>
  <input type="text" id="nota" name="nota" class="form-control" placeholder="Ingresar nota" aria-describedby="basic-addon1" >
</div>
    </div>
    <div class="col-sm-6">
    <label for="" class="col-sm-8 col-form-label">Código de barra del estante</label>
<div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"> <i class="fas fa-barcode"></i> </span>
  </div>
  <input type="text" id="estante" name="estante" class="form-control" placeholder="Barras" aria-label="Username" aria-describedby="basic-addon1" >
</div>
    </div>

    

     <P></P>

     <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-12 col-form-label">Foto del paquete</label>

    <div class="col-sm-12">
    <input type="file" id="foto" name="foto" class="form-control" tabindex="10">
    </div>
    </div>
    <br>


</div>










    

    

      
      <div class="modal-footer">
        <a href="/vendedores/create" class="btn btn-primary">Registrar nuevo comercio</a>
        &nbsp; &nbsp;
      <input type="button" class="btn btn-primary" onclick="myFunction()" value="Limpiar">
      &nbsp; &nbsp;
        <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

        </div>
        
      </div>
    </div>
  </div>
</div>



</div>


</div>







@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@stop
