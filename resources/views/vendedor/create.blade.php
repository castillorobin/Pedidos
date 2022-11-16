
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
    <h1 style="text-align:center">Melo Express</h1>
@stop

@section('content')

<h2>Agregar Comercio</h2>

<form action="/vendedores" method="POST">
    @csrf
    <div class="mb-3 col-6" >
        <label for="" class="form-label">Nombre</label>
        
        <input type="text" id="nombre" name="nombre" class="form-control" tabindex="1">
    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Direccion</label>
        <input type="text" id="dire" name="dire" class="form-control" tabindex="2">
    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Telefono</label>
        <input type="text" id="tele" name="tele" class="form-control" tabindex="3">
    </div>

    <div class="mb-3 col-3">
        <label for="" class="form-label">Fecha de ingreso</label>
        <input type="date" id="fech" name="fech" class="form-control" tabindex="4">
    </div>
    <div class="mb-3 col-3">
        <label for="" class="form-label">Tipo de vendedor</label>
        <select id="tipo" name="tipo" aria-label="Select a Timezone"  class="form-select ">
			<option value="Corriente">Seleccionar tipo</option>		
			<option value="Pequeño">Pequeño</option>
            <option value="Grande">Grande</option>
			<option value="Nuevo">Nuevo</option>
			
		</select>
    </div>

    <div class="mb-3 col-3">
        <label for="" class="form-label"><strong> Datos Bancarios</strong></label>
        
    </div>
    <div class="mb-3 col-3">
        <label for="" class="form-label">Nombre del Titular</label>
        <input type="text" id="titular" name="titular" class="form-control" tabindex="6" >
    </div>
    <div class="mb-3 col-3">
        <label for="" class="form-label">Número de cuenta</label>
        <input type="text" id="cuenta" name="cuenta" class="form-control" tabindex="7">
    </div>

    <div class="mb-3 col-3">
        <label for="" class="form-label">Banco</label>
        <select id="banco" name="banco" aria-label="Select a Timezone"  class="form-select ">
			<option value="sele">Seleccionar Banco</option>		
			<option value="Davivienda">Davivienda</option>
			<option value="Agricola">Agricola</option>
			<option value="America Central">America Central</option>
			<option value="Cuscatlan">Cuscatlan</option>
		</select>
    </div>

    <div class="mb-3 col-3">
        <label for="" class="form-label">Tipo de cuenta</label>
        <select id="tipoc" name="tipoc" aria-label="Select a Timezone"  class="form-select ">
			<option value="Corriente">Seleccionar tipo</option>		
			<option value="Ahorro">Ahorro</option>
            <option value="Corriente">Corriente</option>
			<option value="Agricola">Otra</option>
			
		</select>
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
