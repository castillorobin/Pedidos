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

<table id="tpedido" class="table table-bordered shadow-lg mt-4">
<thead >
    <tr >
        
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
    
    <td style="font-weight: bolder; color: #0080ff;">{{ $pedido->vendedor }}</td>
    <td style="font-weight: bolder; color: #0080ff;">{{ $pedido->destinatario }}</td>
    <td>{{ $pedido->direccion }}</td>
    <td>{{ $pedido->telefono }}</td>
    <td>{{ $pedido->tipo }}</td>
    <td>{{ $pedido->estado }}</td>
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


