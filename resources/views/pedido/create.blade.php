
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
<h6 ><i class="fas fa-home"></i> Inicio / Almacen / Agregar envios</h6>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>         
@stop

@section('content')


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
body {
  font-family: 'Roboto', sans-serif;
}

input[type="date"]::-webkit-calendar-picker-indicator {
        display: block;
        background: transparent;
        bottom: 0;
        color: transparent;
        cursor: pointer;
        height: auto;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: auto;
    }

    input[type="date"]::before {
	color: #999999;
	content: attr(placeholder);
}
input[type="date"] {
	color: #ffffff;
}
input[type="date"]:focus,
input[type="date"]:valid {
	color: #666666;
}
input[type="date"]:focus::before,
input[type="date"]:valid::before {
	content: "" !important;
}

.select2-selection{
  height: 35px !important;
 
}
</style>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
   $('.js-example-basic-single').select2({
 placeholder: "Busca alguno de tus lugares",
 });
</script>
<script>

function myFunction() {
  document.getElementById("myForm").reset();
}
 $(document).ready(function() {
  
   					$("#envio").change(function() {
       												 //alert($(this).val());
          const tenv = document.getElementById("cenvio").value;
					const preci = parseFloat(document.getElementById("precio").value);						                                                    
          const envi =parseFloat($(this).val()); 
          
          if(tenv=="Pagado")
          {
            document.getElementById("total").value = preci;
          }else{
            document.getElementById("total").value = preci - envi;
          }
                    

														//const castot = parseFloat(document.getElementById("totalc").value);
														//document.getElementById("ptotal").value = castot ; 

    				});

            $("#precio").change(function() {
       												 //alert($(this).val());
          const tenv2 = document.getElementById("cenvio").value;
					const envi2 = parseFloat(document.getElementById("envio").value);						                                                    
          const preci2 =parseFloat($(this).val()); 
          
          if(tenv2=="Pagado")
          {
            document.getElementById("total").value = preci2;
          }else{
            document.getElementById("total").value = preci2 - envi2;
          }
                    

														//const castot = parseFloat(document.getElementById("totalc").value);
														//document.getElementById("ptotal").value = castot ; 

    				});


            $("#cenvio").change(function() {
       												 //alert($(this).val());
          const tenv3 = document.getElementById("precio").value;
					const envi3 = parseFloat(document.getElementById("envio").value);						                                                    
          const preci3 =document.getElementById("cenvio").value; 
          
          if(preci3=="Pagado")
          {
            document.getElementById("total").value = tenv3;
          }else{
            document.getElementById("total").value = tenv3 - envi3;
          }
                    

														//const castot = parseFloat(document.getElementById("totalc").value);
														//document.getElementById("ptotal").value = castot ; 

    				});
              
                                            });
  

  
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>  
jQuery(document).ready(function($){
    $(document).ready(function() {
        $('.mi-selector').select2();
    });
});
</script>

<script>
  $(document).ready(function() {
  $("input").focusout(function() {
    var value = $(this).val();
    if (value.length == 0) {
      $(this).addClass("is-invalid");
      $(this).removeClass("is-valid");
    } else {
      $(this).removeClass("is-invalid");
      $(this).addClass("is-valid");
    }
    /*
           
    */
    console.log('Este campo es obligatorio');
  });
});

$(document).ready(function() {
  $("select").focusout(function() {
    var value = $(this).val();
    if (value.length == 0) {
      $(this).addClass("is-invalid");
      $(this).removeClass("is-valid");
    } else {
      $(this).removeClass("is-invalid");
      $(this).addClass("is-valid");
    }
    /*
           
    */
    console.log('Este campo es obligatorio');
  });
});
</script>



<form action="/pedidos" method="POST" id="myForm" enctype="multipart/form-data" >
    @csrf

       
  <div class="row mx-5" >
    <h3>Agregar envio</h3>
      <div class="alert alert-danger" role="alert">
      <i class="fas fa-exclamation-circle"></i> Estimado usuario los campos con * son obligatorios
      </div>
  </div>
  <br>



  <div class="row mx-5" >
    <h4>Datos del Comercio</h4>
  </div>
  
<div class="col-12">
    <div class="row border mx-5 py-4" style="background-color: white;" >
      <div class="col-12">
        <div class="row">
        <div class="  col-sm-6">
          <label for="inputEmail3" class="col-sm-4 col-form-label">Id de envio</label>
            <div class="input-group mb-3 col-5">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/fluency-systems-regular/48/null/checked-identification-documents.png" width="25" /></span>
              </div>
              <input type="text" class="form-control" placeholder="{{ $uid }}" aria-label="Username" aria-describedby="basic-addon1" disabled>
            </div>
        </div>
   
        <div class="col-sm-4 text-center">
          <label for="inputEmail3" class="col-sm-8 col-form-label">Codigo de barras</label>

        </div>

        </div>

      </div>

      <div class="col-12">
        <div class="row py-4" style="background-color: white;" >

        <div class="col-10">
          <label for="" class="col-10 col-form-label">Nombre de comercio / Tienda *</label>
   
          <select id="comer" name="comer" class="form-control mi-selector" data-placeholder="Please select..." required tabindex="1">
            <option value="">-Seleccionar comercio-</option>
     
            @foreach($vendedores as $vendedor)
            <option value="{{ $vendedor->nombre }}">{{ $vendedor->nombre }}</option>
            @endforeach
          </select>
          <div class="invalid-feedback">Este campo es obligatorio.</div>
      <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div>  
        </div>

        <div class="col-2 pt-4" style="display: flex; align-items: center; ">
            <a href="/pedido/desdeenvio">+ Crear</a>
        </div>
        
        </div>
      </div>
    </div>
</div> 

  <div class="row mx-5 mt-4 " >
      <h4>Datos del destinatario</h4>
  </div>

  <div class="col-12">
  <div class="row border mx-5 py-4" style="background-color: white;" >
    <div class="row">
      <div class="col-sm-6 ">
      <label for="inputEmail3" class="col-sm-4 col-form-label">Destinatario *</label>
      <input type="text" id="desti" name="desti" class="form-control" tabindex="2" placeholder="Ingrese el nombre del destinatario" required>
      <div class="invalid-feedback">Este campo es obligatorio.</div>
      <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div>      
      </div>
    
      <div class="col-sm-6">
      <label for="inputEmail3" class="col-sm-4 col-form-label">Telefono</label>
     <input type="text" id="telefono" name="telefono" class="form-control" tabindex="3" placeholder="Ingrese teléfono del destinatario">
     <div class="invalid-feedback">Este campo es obligatorio.</div>
      <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div>    
      </div>


    </div>

    <div class="row">
      <div class="col-sm-12">
      <label for="" class="col-sm-6 col-form-label">Direccion de entrega *</label>


      <div class="input-group mb-3">

        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/glyph-neue/25/null/order-delivered.png"/></span>
          </div>
          <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Ingrese la dirección de entrega del destinatario" aria-label="Username" aria-describedby="basic-addon1" tabindex="4" required>
          <div class="invalid-feedback">Este campo es obligatorio.</div>
          <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div>      
        </div>
      </div>

    </div>
                                    

    </div>
    </div>
  

  
  <div class="row mx-5 mt-4 " >
      <h4>Datos del paquete</h4>
  </div>


  <div class="col-12">
    <div class="row border mx-5 py-4" style="background-color: white;">

      <div class="row">
        <div class="col-sm-6 ">
          <label for="" class="col-sm-6 col-form-label">Fecha de creacion</label>

          <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/tear-off-calendar.png"/></span>
          </div>
  
          <input type="text" class="form-control" value="{{ date('d/m/Y') }}" aria-label="Username" aria-describedby="basic-addon1" readonly>
          <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div>   
          </div>
        
        </div>
    
        <div class="col-sm-6">
            <label for="" class="col-sm-6 col-form-label">Fecha de entrega *</label>
          <div class="input-group mb-3">

            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/tear-off-calendar.png"/></span>
            </div>
              <input type="date" id="fentrega" name="fentrega" tabindex="5" class="form-control" placeholder="Seleccionar Fecha" aria-label="Username" aria-describedby="basic-addon1" required>
              <div class="invalid-feedback">Este campo es obligatorio.</div>
      <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div>                                       
          </div>

        </div>
   
      </div>        
    </div>     
  </div>  


  <div class="col-12">
    <div class="row border mx-5 py-4" style="background-color: white;">

    <div class="row">
     
      <div class="col-sm-6 ">
        <label for="" class="col-sm-6 col-form-label">Tipo de servicio</label>
          <div class="input-group mb-3">

            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/online-support.png"/></span>
            </div>
            <select id="servicio" name="servicio" class="form-control" tabindex="6">
     
            <option value="Entrega">Entrega</option>
            <option value="Entrega y recolecta">Entrega y recolecta</option>
  
            </select>
            <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div> 
          </div>
      </div>
     
      <div class="col-sm-6">
        <label for="" class="col-sm-6 col-form-label">Tipo de envio</label>
        <div class="input-group mb-3">

          <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/25/null/external-delivery-logistic-delivery-kiranshastry-solid-kiranshastry.png"/></span>
          </div>
          <select id="tenvio" name="tenvio" class="form-control" tabindex="7">
      
          <option value="Personalizado">Personalizado</option>
          <option value="Personalizado departamental">Personalizado departamental</option>
          <option value="Punto fijo">Punto fijo</option>
          <option value="Casillero departamental">Casillero departamental</option>
          <option value="Casillero San Salvador">Casillero San Salvador</option>
          <option value="Casillero San Miguel">Casillero San Miguel</option>
          <option value="Casillero Santa Ana">Casillero Santa Ana</option>
          <option value="Casillero centro logístico">Casillero centro logístico</option>
          </select>
          <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div> 
        </div>
      </div>                                      
    </div>
    </div>
    </div>
 

    <div class="col-12">
    <div class="row mx-5 " style="background-color: white;">
    <div class="row">

      <div class="col-sm-4">
        <label for="" class="col-sm-8 col-form-label">Cobro del envio</label>
        <div class="input-group mb-3">

          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/cheap-2.png"/></span>
          </div>
          <select id="cenvio" name="cenvio" class="form-control" tabindex="8">
          <option value="Pendiente">Pendiente</option>
          <option value="Pagado">Pagado</option>
          </select>
          <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div>  
        </div>
      </div>

      <div class="col-sm-4">
        <label for="" class="col-sm-8 col-form-label">Estado del envio</label>
        <div class="input-group mb-3">

          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/deliver-food.png"/></span>
          </div>
          <select id="estado" name="estado" class="form-control" tabindex="9">
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
          <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div>  
        </div>
      </div>


      <div class="col-sm-4">
        <label for="" class="col-sm-8 col-form-label">Estado del pago</label>
        <div class="input-group mb-3">

          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/cash-in-hand.png"/></span>
          </div>
          <select id="pagado" name="pagado" class="form-control" tabindex="10">
            <option value="Por pagar">Por pagar</option>
            <option value="Pagado">Pagado</option>
            <option value="Trans. a la empresa">Trans. a la empresa</option>
            <option value="Trans. al comercio">Trans. al comercio</option>
            
          </select>
          <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div>  
        </div>
      </div>

    </div>
    </div>
    </div>


    <div class="col-12">
    <div class="row mx-5 " style="background-color: white;">
    <div class="row">

    <div class="col-sm-4">
      <label for="" class="col-sm-8 col-form-label">Precio del paquete</label>
    
      <div class="input-group mb-3">

    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/cheap-2.png"/></span>
    </div>
      <input type="text" id="precio" name="precio" class="form-control" placeholder="Precio"  value="0" tabindex="11">
      <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div>  
  </div>
  </div>

  <div class="col-sm-4">
    <label for="" class="col-sm-8 col-form-label">Costo del envio</label>
    <div class="input-group mb-3">

    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/cheap-2.png"/></span>
    </div>
      <input type="text" id="envio" name="envio" class="form-control" placeholder="Envio" aria-label="Username" value="0" tabindex="12">
      <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div>  
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


</div>
</div>
</div>


<div class="row mx-5 mt-4 " >
      <h4>Datos del internos</h4>
  </div>

  <div class="col-12">
  <div class="row border mx-5 py-4" style="background-color: white;">
    <div class="row">
    
    <div class="col-sm-6 ">
      <label for="" class="col-sm-6 col-form-label">Usuario que registra</label>
      <div class="input-group mb-3">

        <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/external-itim2101-lineal-itim2101/25/null/external-operator-logistics-and-delivery-itim2101-lineal-itim2101.png"/></span>
        </div>
        <select id="ingresado" name="ingresado" class="form-control" tabindex="13">
       
       <option value="ERICK">Erick</option>
       <option value="KAREN">Karen</option>
       <option value="ALEIDI">Aleidi</option>
       <option value="GABI">Gabi</option>
     
        </select>
        <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div>  
      </div>
    </div>
    
    <div class="col-sm-6">
      <label for="" class="col-sm-6 col-form-label">Recepción agencia</label>
      <div class="input-group mb-3">

        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/ios-filled/25/null/online-store.png"/></span>
        </div>
        <select id="agencia" name="agencia" class="form-control" tabindex="14">
       
         <option value="San Salvador">San Salvador</option>
          <option value="San Miguel">San Miguel</option>
          <option value="Santa Ana">Santa Ana</option>
        </select>
        <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div>  
      </div>
    </div>



   </div>   
  </div> 
  </div> 


  <div class="col-12">
  <div class="row border mx-5 py-4" style="background-color: white;">
    <div class="row">
      <div class="col-sm-6 ">
        <label for="" class="col-sm-6 col-form-label">Repartidor</label>
        <div class="input-group mb-3">

          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/external-kmg-design-detailed-outline-kmg-design/25/null/external-delivery-man-logistics-delivery-kmg-design-detailed-outline-kmg-design-2.png"/></span>
          </div>
          <select id="repartidor" name="repartidor" class="form-control" tabindex="15">
            <option value="">-Sin asignar-</option>
            @foreach($repartidores as $repartidor)
            <option value="{{ $repartidor->nombre }}">{{ $repartidor->nombre }}</option>
            @endforeach
          </select>
          <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div>  
        </div>
      </div>
    
      <div class="col-sm-6">
        <label for="" class="col-sm-6 col-form-label">Ruta</label>
        <div class="input-group mb-3">

          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/external-wanicon-lineal-wanicon/25/null/external-map-logistics-wanicon-lineal-wanicon.png"/></span>
          </div>
          <select id="ruta" name="ruta" class="form-control" tabindex="16"> 
            <option value="Ruta 1">Ruta 1</option>
            <option value="Ruta 2">Ruta 2</option>
            <option value="Ruta 3">Ruta 3</option>
            <option value="Ruta 4">Ruta 4</option>
            <option value="Ruta 5">Ruta 5</option>
          </select>
          <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div>  
        </div>
      </div>

   </div>
   </div>


   <div class="row border mx-5 py-4" style="background-color: white;">
    <div class="row">

      <div class="col-sm-6 ">
        <label for="" class="col-sm-6 col-form-label">Nota</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"> <i class="fas fa-file-alt"></i> </span>
          </div>
          <input type="text" id="nota" name="nota" class="form-control" placeholder="Ingresar nota" aria-describedby="basic-addon1" tabindex="17">
          <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div>  
        </div>
      </div>

      <div class="col-sm-6">
        <label for="" class="col-sm-8 col-form-label">Código de barra del estante</label>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"> <i class="fas fa-barcode"></i> </span>
        </div>
        <input type="text" id="estante" name="estante" class="form-control" placeholder="Barras" aria-label="Username" aria-describedby="basic-addon1" tabindex="18">
        <div class="valid-feedback"><i class="fas fa-check-circle"></i>&nbsp;Correcto</div>  
        </div>
      </div>

    </div>
    </div>
    </div>


    <div class="col-12">
  <div class="row border mx-5 py-4" style="background-color: white;">
    <div class="row">
      <label for="inputEmail3" class="col-sm-12 col-form-label">Fotos del paquete</label>

      <div class="col-sm-6">
      <input type="file" name="foto" class="form-control" tabindex="19">
      </div>
      <div class="col-sm-6">
      <input type="file" name="foto2" class="form-control" tabindex="20">
      </div>
      
      <br>
    </div>
  </div>
  </div>

  <div class="col-12">
  <div class="row border mx-5 py-4" style="background-color: white;">
  <div class="row">
    <div class="modal-footer">


        <a href="/pedidos" class="btn btn-primary">Cancelar</a>
        &nbsp; &nbsp;
        <!--
      <input type="button" class="btn btn-primary" onclick="myFunction()" value="Limpiar">
-->
<a href="/pedidos/create" class="btn btn-primary">Limpiar</a>
      &nbsp; &nbsp;
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>

  </div>
  </div>
  </div>


   

<p></p> 



                                        

   
</form>
   



<br>
<p></p>

<!--
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

-->

@endsection


@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    @stop