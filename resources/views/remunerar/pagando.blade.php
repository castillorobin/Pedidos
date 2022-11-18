


@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
    <h1 style="text-align:center">Melo Express</h1>
@stop

@section('content')

<div class="row mb-12" style="text-align:center;">
													
														<h1>Factura</h1>

													</div>

                                                    <div class="row mb-12">
													<div class="col-xl-3">
													<img alt="Logosss" src="/vendor/adminlte/dist/img/logo.jpg" style="width:200px;"  />
												</div>
													<div class="col-xl-5">
													<h2>Melo Express</h2>
													<h5>Servicios de Encomiendas <br>Centro Comercial Metrogaleria local 3-9, San Salvador<h5>
													</div>
													<div class="col-xl-4" >
													<h2 style="color:red;">No. 0001</h2>
													
													</div>
													</div>
                                                    <br>
													<div class="row mb-12" >
													<br>
                                                    <h3>Cliente: {{ $pedidos[0]->vendedor}}</h3>
														<h3>Fecha: <?php echo date('d-m-Y') ;?></h3>

													</div>

												<table class="table">
													<thead>
                                                    <th scope="col">Comercio</th>
                                                    <th scope="col">Tipo de envío</th>
                                                    <th scope="col">Fecha de entrega</th>
                                                    <th scope="col">Precio</th>
                                                  
													</thead>
													<tbody id="seleccion">
                                                    @foreach ($pedidos as $pedido)
                                                    <tr>
                                                    <td>{{ $pedido->vendedor }}</td>
                                                    <td>{{ $pedido->tipo }}</td>
                                                    <td>{{ $pedido->fecha_entrega }}</td>
                                                    <td>${{ $pedido->precio }}</td>
                                                    
                                                    </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="3" style=" text-align:right; font-weight:bolder;">Total a Pagar</td>
                                                        <td style="font-weight:bolder;"> $ {{ $total }}</td>
                                                    </tr>
													</tbody>

												</table>

													<!--begin::Card-->
													

                                                   
													</div>
													<div class="row mb-12">
                                                        <div  class="col-xl-1">
                                                        <label for="exampleFormControlInput1" class="form-label">Tipo de Pago</label>
                                                        </div>
                                                        <div class="col-xl-3">

                                                    <select class="form-select form-select-lg mb-" name="tpago" id="tpago">
                                                        <option value="">Seleccionar </option>
                                                        <option value="Efectivo">Efectivo</option>
                                                        <option value="Efectivo">Transferencia</option>
                                                        <option value="Efectivo">Tigo Money</option>
                                                        <option value="Efectivo">Chivo Wallet</option>
                                                    </select>
</div>
                                                    </div>
												<!--end::Col-->
											</div>
											<br>
											<button type="submit"  class="btn btn-primary" >Pagar Factura</button>

</div>


                        




@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@stop
