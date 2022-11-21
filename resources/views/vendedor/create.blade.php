
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
    <h1 style="text-align:center">Melo Express</h1>
@stop

@section('content')

<h2>Agregar Comercio</h2>
<br>
<div class="container ">
<form action="/vendedores" method="POST">
    @csrf
  <div class="row border" style="background-color: white; padding: 15px; border-radius:20px;">
   
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NOMBRE</label>

    <div class="col-sm-8">
    <input type="text" id="nombre" name="nombre" class="form-control" tabindex="1" placeholder="NOMBRE DEL COMERCIO" >
    </div>
    </div>
    
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">DIRECCION</label>

    <div class="col-sm-8">
    <input type="text" id="dire" name="dire" class="form-control" tabindex="1" placeholder="DIRECCION" >
    </div>
    </div>
    
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">TELEFONO</label>
    
    <div class="col-sm-3">
    <input type="text" id="tele" name="tele" class="form-control" tabindex="3" placeholder="TELEFONO">
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label">WHATSAPP</label>
    <div class="col-sm-3">
    <input type="text" id="what" name="what" class="form-control" tabindex="3" placeholder="WHATSAPP">
    </div>

    </div>
   

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">LONGITUD</label>
    
    <div class="col-sm-3">
    <input type="text" id="lon" name="lon" class="form-control" tabindex="3" placeholder="LONGITUD">
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label">LATITUD</label>
    <div class="col-sm-3">
    <input type="text" id="lat" name="lat" class="form-control" tabindex="3" placeholder="LATITUD">
    </div>

    </div>
   
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">FECHA DE INGRESO</label>
    
    <div class="col-sm-3">
    <input type="date" id="fech" name="fech" class="form-control" tabindex="1"  >
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label">TIPO DE VENDEDOR</label>
    <div class="col-sm-3">
    <select id="tipo" name="tipo" aria-label="Select a Timezone"  class="form-select ">
			<option value="Corriente">Seleccionar tipo</option>		
			<option value="Pequeño">Pequeño</option>
            <option value="Grande">Grande</option>
			<option value="Nuevo">Nuevo</option>
			
		</select>
    </div>

    </div>


    <div class="row mb-3">
    

    <div class="col-sm-8">
    
    </div>
    </div>




  </div>
  <br>
  <div class="row border" style="background-color: white; padding: 15px; border-radius:20px;">
  <label for="" class="form-label"><strong> DATOS BANCARIOS</strong></label>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NOMBRE DEL TITULAR</label>

    <div class="col-sm-8">
    <input type="text" id="titular" name="titular" class="form-control" tabindex="1" placeholder="TITULAR" >
    </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NUMERO DE CUENTA</label>

    <div class="col-sm-8">
    <input type="text" id="cuenta" name="cuenta" class="form-control" tabindex="1" placeholder="# DE CUENTA" >
    </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">TIPO DE CUENTA</label>

    <div class="col-sm-8">
    <select id="tipoc" name="tipoc" aria-label="Select a Timezone"  class="form-select ">
			<option value="sele">SELECCIONAR TIPO</option>		
			<option value="Davivienda">AHORRO</option>
			<option value="Agricola">CORRIENTE</option>
			
		</select>
    </div>
    </div>


</div>


<br>
  <div class="row border" style="background-color: white; padding: 15px; border-radius:20px;">
  <label for="" class="form-label"><strong> DATOS CHIVO WALLET</strong></label>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NOMBRE</label>

    <div class="col-sm-8">
    <input type="text" id="nchivo" name="nchivo" class="form-control" tabindex="1" placeholder="NOMBRE" >
    </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">DUI</label>
    
    <div class="col-sm-3">
    <input type="text" id="dchivo" name="dchivo" class="form-control" tabindex="3" placeholder="DUI">
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label">TELEFONO</label>
    <div class="col-sm-3">
    <input type="text" id="tchivo" name="tchivo" class="form-control" tabindex="3" placeholder="TELEFONO">
    </div>

    </div>

</div>


<br>
  <div class="row border" style="background-color: white; padding: 15px; border-radius:20px;">
  <label for="" class="form-label"><strong> DATOS TIGO MONEY</strong></label>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NOMBRE</label>

    <div class="col-sm-8">
    <input type="text" id="ntigo" name="ntigo" class="form-control" tabindex="1" placeholder="NOMBRE" >
    </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">DUI</label>
    
    <div class="col-sm-3">
    <input type="text" id="dtigo" name="dtigo" class="form-control" tabindex="3" placeholder="DUI">
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label">TELEFONO</label>
    <div class="col-sm-3">
    <input type="text" id="ttigo" name="ttigo" class="form-control" tabindex="3" placeholder="TELEFONO">
    </div>

    </div>

</div>
 
<br>
   <button type="submit" class="btn btn-primary">Guardar</button>


</form>
</div>


   

   
  


@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@stop
