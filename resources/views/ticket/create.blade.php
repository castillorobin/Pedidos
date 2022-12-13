
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
    <h1 style="text-align:center">Melo Express</h1>
@stop

@section('content')

<h2>Agregar Ticket</h2>

<form action="/tickets" method="POST">
    @csrf
    <div class="row mb-12">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-3 col-form-label required fw-bold fs-6">Comercio</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-8 ">
                                                            <input type="text" name="vende" class="form-control form-control-solid" placeholder="Nombre Vendedor"  />
                                                        </div>
                                                        <!--end::Col-->


                                                    </div>
<br>
                                                    <div class="row mb-12">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-3 col-form-label required fw-bold fs-6">Casillero</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-3 ">
                                                            <input type="text" id="casit" name="casi" class="form-control form-control-solid" placeholder="Cantidad"  />
															
                                                        </div>
														<div class="col-lg-3 ">
														<select id="casipr" name="casip" aria-label="Select a Timezone"  class="form-select ">
														<option value="0.50">Precio</option>		
														<option value="0.50">$0.50</option>
																<option value="1">$1.00</option>
																<option value="1.50">$1.50</option>
																<option value="2">$2.00</option>
														</select>
															
                                                        </div><br>
														<div class="col-lg-3 ">
                                                            <input type="text" id="totalc" name="totalc" class="form-control form-control-solid" placeholder="0" disabled />
															
                                                        </div>
														
                                                        <!--end::Col-->
                                                    </div><br>




                                                    <div class="row mb-12">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-3 col-form-label required fw-bold fs-6">Personalizado</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-3 ">
                                                            <input type="text" id="persoc" name="perso" class="form-control form-control-solid" placeholder="Cantidad"  />
                                                        </div><br>
														<div class="col-lg-3 ">
														<select id="persop" name="casipe" aria-label="Select a Timezone"  class="form-select ">
														<option value="0.50">Precio</option>		
														<option value="1">$1.00</option>
																<option value="2">$2.00</option>
																<option value="2.50">$2.50</option>
																<option value="3">$3.00</option>
														</select>
															
                                                        </div><br>
														<div class="col-lg-3 ">
                                                            <input type="text" id="persot" name="totalc" class="form-control form-control-solid" placeholder="0" disabled/>
															
                                                        </div>
                                                        <!--end::Col-->
                                                    </div><br>

                                                    <div class="row mb-12">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-3 col-form-label required fw-bold fs-6">Punto Fijo</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-3 ">
                                                            <input type="text" id="fijoc" name="pfijo" class="form-control form-control-solid" placeholder="Cantidad"  />
                                                        </div>
														<div class="col-lg-3 ">
														<select id="fijop" name="casif" aria-label="Select a Timezone"  class="form-select ">
														<option value="0.50">Precio</option>		
														<option value="1">$1.00</option>
																<option value="1.50">$1.50</option>
																<option value="2">$2.00</option>
																<option value="2.50">$2.50</option>
														</select>
															
                                                        </div>
														<div class="col-lg-3 ">
                                                            <input type="text" id="fijot" name="totalc" class="form-control form-control-solid" placeholder="0" disabled />
															
                                                        </div>
                                                        <!--end::Col-->
                                                    </div><br>
                                                    <div class="row mb-12">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-3 col-form-label required fw-bold fs-6">Fecha</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-3 ">
                                                            <input type="date" id="fecha" name="fecha" class="form-control form-control-solid"  />
                                                        </div>
														
                                                        <!--end::Col-->
                                                    </div><br>
													<div class="row mb-12">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-3 col-form-label required fw-bold fs-6">Precio Total</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-3 ">
                                                            <input type="text" id="ptotal" name="totalprecio" class="form-control form-control-solid" placeholder="0" readonly />
                                                        </div>
														
                                                        <!--end::Col-->
                                                    </div>



													
													
   
    <br>
   <button type="submit" class="btn btn-primary">Guardar</button>


</form>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
															function calculart() {
																const casic = document.getElementById("casit");
																const casip = document.getElementById("casipr");
 
															}
																

															$(document).ready(function() {
   													 $("#casipr").change(function() {
       												 //alert($(this).val());
														const casic = document.getElementById("casit").value;
														document.getElementById("totalc").value = $(this).val() * casic; 
														const castot = parseFloat(document.getElementById("totalc").value);
														document.getElementById("ptotal").value = castot ; 

    													});


														$("#persop").change(function() {
       												 //alert($(this).val());
														const persotot = document.getElementById("persoc").value;
														document.getElementById("persot").value = $(this).val() * persotot; 
														const castot = parseFloat(document.getElementById("totalc").value);
														const petot = parseFloat(document.getElementById("persot").value);
														document.getElementById("ptotal").value = castot + petot; 
    													});

														$("#fijop").change(function() {
       												 //alert($(this).val());
														const fijotot = document.getElementById("fijoc").value;
														document.getElementById("fijot").value = $(this).val() * fijotot; 
														const castot = parseFloat(document.getElementById("totalc").value);
														const petot = parseFloat(document.getElementById("persot").value);
														const fitot = parseFloat(document.getElementById("fijot").value);
														document.getElementById("ptotal").value = castot + petot + fitot; 
    													});


														
														





														});


															

														</script>
                                                        
@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@stop
