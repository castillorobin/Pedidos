
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 
  

<div class="container">


                    <div class="row mb-12" style="text-align:center;">
											<div class="col">
													<img alt="Logosss" src="/vendor/adminlte/dist/img/logo.jpg" style="width:200px;"  />
											</div>
											  <div class="col">
													<h2>Melo Express</h2>
													<h5>Servicios de Encomiendas <br>Centro Comercial Metrogaleria local 3-9, San Salvador<h5>
												</div>
													<div class="col" >
													<h2 style="color:red;">No. 0001</h2>
													
											    </div>
										</div>
                                                    <br>


                      <div class="row" style="border: 1px solid black;">
                          <div class="row text-center" style="background-color:#2e5e8d; color:white;">
                                                      <h1>Datos del comercio</h1>
                          </div>
													  <div class="row mb-12" >
													<br>
                                                    <h3>Cliente: {{ $pedidos[0]->vendedor}}</h3>
														<h3>Fecha: <?php echo date('d-m-Y') ;?></h3>

											      </div>
                      </div>
</div>
                        <br>
												<table class="table">
													<thead style="background-color:#2e5e8d; color:white;">
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
													

                                                   
												

                                                    <div class="row mb-3">

    <label for="inputEmail3" class="col-sm-2 col-form-label"> Tipo de Pago </label>

    <div class="col-sm-8">
    
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
  <label class="form-check-label" for="flexRadioDefault1">
   
   Efectivo
   <img src="/imgs/efectivo.png" alt="" width="40">
  </label>
&nbsp; &nbsp; &nbsp;

  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
  <label class="form-check-label" for="flexRadioDefault2">
    Transferencia
    <img src="/imgs/transferencia.png" alt="" width="40">
  </label>

  &nbsp; &nbsp; &nbsp;

  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
  <label class="form-check-label" for="flexRadioDefault2">
    Tigo Money
    <img src="/imgs/tigo.png" alt="" width="60">
  </label>

  &nbsp; &nbsp; &nbsp;

  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
  <label class="form-check-label" for="flexRadioDefault2">
    Chivo Wallet
    <img src="/imgs/chivo.jpg" alt="" width="60">
  </label>
    </div>
    </div>


													
												<!--end::Col-->
											
											<br>
											<button type="submit"  class="btn btn-primary" >Pagar Factura</button>

</div>
</div>

                 
