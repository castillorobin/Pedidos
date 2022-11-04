
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
    <h1 style="text-align:center">Melo Express</h1>
@stop

@section('content')

<h2>Ver Ticket</h2>
<br>
<form action="/tickets/{{$ticket->id}}" >
    
<div class="row mb-12">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-3 col-form-label required fw-bold fs-6">Vendedor</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-8 ">
                                                            <input type="text" name="vende" class="form-control form-control-solid" value=" {{$ticket->vendedor}} " readonly />
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
                                                            <input type="text" id="casit" name="casi" class="form-control form-control-solid" value=" {{$ticket->casillero}} " readonly />
															
                                                        </div>
														<br>
														
                                                        <!--end::Col-->
                                                    </div><br>




                                                    <div class="row mb-12">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-3 col-form-label required fw-bold fs-6">Personalizado</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-3 ">
                                                            <input type="text" id="persoc" name="perso" class="form-control form-control-solid" value=" {{$ticket->personalizado}} " readonly />
                                                        </div>
                                                        <!--end::Col-->
                                                    </div><br>

                                                    <div class="row mb-12">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-3 col-form-label required fw-bold fs-6">Punto Fijo</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-3 ">
                                                            <input type="text" id="fijoc" name="pfijo" class="form-control form-control-solid" value=" {{$ticket->punto_fijo}} " readonly />
                                                        </div>
														
                                                        <!--end::Col-->
                                                    </div><br>
                                                    <div class="row mb-12">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-3 col-form-label required fw-bold fs-6">Fecha</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-3 ">
                                                            <input type="text" id="fecha" name="fecha" class="form-control form-control-solid"  value=" {{$ticket->fecha}} " readonly />
                                                        </div>
														
                                                        <!--end::Col-->
                                                    </div><br>
													<div class="row mb-12">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-3 col-form-label required fw-bold fs-6">Precio Total</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-3 ">
                                                            <input type="text" id="ptotal" name="totalprecio" class="form-control form-control-solid" value=" {{$ticket->total}} " readonly />
                                                        </div>
														
                                                        <!--end::Col-->
                                                    </div>



													
													
   
    <br>
    <br>
   <a href="/tickets" class="btn btn-primary">Regresar</a> 


</form>


@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@stop
