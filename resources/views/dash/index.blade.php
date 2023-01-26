@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
   
@stop

@section('content')
    <p></p>

<!--  **********Inicio de contenido central ********** -->
<body class="sidebar-xs has-detached-right">
	
<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">
<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="panel panel-body bg-blue-400 has-bg-image">
							<div class="media no-margin">
								<div class="media-body">
									
									<h3 class="no-margin">$ 0,000.00</h3>
									<span class="text-uppercase text-size-mini">USD EN CAJA</span>
								</div>

								<div class="media-right media-middle">
									<i class="icon-cash icon-3x opacity-75"></i>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3">
						<div class="panel panel-body bg-danger-400 has-bg-image">
							<div class="media no-margin">
								<div class="media-body">
									<h3 class="no-margin">000000</h3>
									<span class="text-uppercase text-size-mini">PEDIDOS </span>
								</div>

								<div class="media-right media-middle">
									<i class="icon-bag icon-3x opacity-75"></i>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3">
						<div class="panel panel-body bg-success-400 has-bg-image">
							<div class="media no-margin">
								<div class="media-left media-middle">
									<i class="icon-cash3 icon-3x opacity-75"></i>
								</div>

								<div class="media-body text-right">
									<h3 class="no-margin">000000</h3>
									<span class="text-uppercase text-size-mini">PEDIDOS RECIBIDOS</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3">
						<div class="panel panel-body bg-indigo-400 has-bg-image">
							<div class="media no-margin">
								<div class="media-left media-middle">
									<i class="icon-price-tags icon-3x opacity-75"></i>
								</div>

								<div class="media-body text-right">
									<h3 class="no-margin">0000000</h3>
									<span class="text-uppercase text-size-mini">COMERCIOS</span>
								</div>
							</div>
						</div>
					</div>


					<div class="col-sm-6 col-md-3">
						<div class="panel panel-body bg-teal-400 has-bg-image">
							<div class="media no-margin">
								<div class="media-left media-middle">
									<i class="icon-truck icon-3x opacity-75"></i>
								</div>

								<div class="media-body text-right">
									<h3 class="no-margin">0000000</h3>
									<span class="text-uppercase text-size-mini">REPARTIDORES</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3">
						<div class="panel panel-body bg-green-400 has-bg-image">
							<div class="media no-margin">
								<div class="media-left media-middle">
									<i class="icon-cc icon-3x opacity-75"></i>
								</div>

								<div class="media-body text-right">
									<h3 class="no-margin">32.00</h3>
									<span class="text-uppercase text-size-mini">Marcas</span>
								</div>
							</div>
						</div>
					</div>

					 <div class="col-sm-6 col-md-3">
						<div class="panel panel-body bg-orange-400 has-bg-image">
							<div class="media no-margin">
								<div class="media-left media-middle">
									<i class="icon-stack-star icon-3x opacity-75"></i>
								</div>

								<div class="media-body text-right">
									<h3 class="no-margin">00000000</h3>
									<span class="text-uppercase text-size-mini">ENVIOS COMPLETADOS</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3">
						<div class="panel panel-body bg-slate-400 has-bg-image">
							<div class="media no-margin">
								<div class="media-left media-middle">
									<i class="icon-box icon-3x opacity-75"></i>
								</div>

								<div class="media-body text-right">
									<h3 class="no-margin">00000000</h3>
									<span class="text-uppercase text-size-mini">ENVIOS INGRESADOS</span>
								</div>
							</div>
						</div>
					</div>


					<h1>Últimos Envios</h1>
<div ><a href="/pedidos/create" class="btn btn-primary float-right" > Agregar Envio</a></div>
<br>
<table id="tpedido" class="table table-bordered  shadow-lg mt-4">
<thead >
    <tr >
        <th scope="col">ID</th>
        <th scope="col">Comercio</th>
        <th scope="col">Cliente</th>
        <th scope="col">Direccion</th>
        <th scope="col">Telefono</th>
        <th scope="col">Tipo</th>
        <th scope="col">Estado</th>
        
    </tr>
</thead>
<tbody>
    @foreach ($pedidos as $pedido)
    <tr >
    <td style="font-weight: bolder; color: #0080ff;">{{ $pedido->id }}</td>
    <td style="font-weight: bolder; color: #0080ff;">{{ $pedido->vendedor }}</td>
    <td style="font-weight: bolder; color: #0080ff;">{{ $pedido->destinatario }}</td>
    <td>{{ $pedido->direccion }}</td>
    <td>{{ $pedido->telefono }}</td>
    <td>{{ $pedido->tipo }}</td>

    @if($pedido->estado =='Pendiente') 
    <td style="color: red; font-weight:bolder;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
</svg>  {{ $pedido->estado }}</td>
    @endif
    @if($pedido->estado =='Entregado') 
    <td style="color: #008040; font-weight:bolder;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
  <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
</svg>  {{ $pedido->estado }}</td>
    @endif
    @if($pedido->estado =='En Camino') 
    <td style="color: #F1C40F; font-weight:bolder;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg> {{ $pedido->estado }}</td>
    @endif
    @if($pedido->estado =='Cancelado') 
    <td style="color: black; font-weight:bolder;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg> {{ $pedido->estado }}</td>
    @endif



    
    </tr>
    @endforeach
</tbody>
</table>				



					
				</div>
				</div>
				</div>

<!-- **************Fin del contenido central ******** -->  

<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>


@stop

@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin_custom.css">
	<link rel="stylesheet" href="vendor/adminlte/dist/css/core.css">
	
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
@stop


