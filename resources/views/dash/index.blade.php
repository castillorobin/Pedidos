@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
   
@stop

@section('content')
    <p></p>

<!--  **********Inicio de contenido central ********** -->



<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Row-->
								<div class="row gy-5 g-xl-10">
									<!--begin::Col-->
									<div class="col-xl-4 mb-xl-10">
										<!--begin::Engage widget 3-->
										<div class="card bg-primary h-md-100">
											<!--begin::Body-->
											<div class="card-body d-flex flex-column pt-13 pb-14">
												<!--begin::Heading-->
												<div class="m-0">
													<!--begin::Title-->
													<h2 class="fw-bold text-white text-center ">Melo Express
													<br />
													
                                                </h2>
                                                <h3 class="fw-bold text-white text-center "><span class="fw-boldest ">Servicios de Encomiendas</span></h3>
													<!--end::Title-->
													<!--begin::Illustration-->
													<div class=" text-center "> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="260" height="260"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M112 0C85.5 0 64 21.5 64 48V96H16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 272c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 48c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 240c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 208c8.8 0 16 7.2 16 16s-7.2 16-16 16H64V416c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H112zM544 237.3V256H416V160h50.7L544 237.3zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48zm368-48c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48z"/></svg>
                                                            </div>
													<!--end::Illustration-->
												</div><br> 
												<!--end::Heading-->
												<!--begin::Links-->
												<div class="text-center">
													<!--begin::Link-->
													<a class="btn btn-light" data-bs-target="#kt_modal_invite_friends" data-bs-toggle="modal">Ingresar Paquetes</a>
													<!--end::Link-->
													<!--begin::Link-->
													<a class="btn btn-info" href="/#">Estadisticas</a>
													<!--end::Link-->
												</div>
                                                <br>
												<!--end::Links-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Engage widget 3-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-8 mb-5 mb-xl-10">
										<!--begin::Chart widget 11-->
										<div class="card card-flush h-xl-100">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-dark">Paquetes</span>
													<span class="text-gray-400 mt-1 fw-bold fs-6">del dia</span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pb-0 pt-4">
												<!--begin::Tab content-->
												<div class="tab-content">
													
													<div class="tab-pane fade active show" id="kt_chart_widget_11_tab_content_3" role="tabpanel">
														<!--begin::Statistics-->
														<div class="mb-2">
															<!--begin::Statistics-->
															<span class="fs-2hx fw-bolder d-block text-gray-800 me-2 mb-2 lh-1 ls-n2"></span>
															<!--end::Statistics-->
															<!--begin::Description-->
															<span class="fs-6 fw-bold text-gray-400"></span>
															<!--end::Description-->
														</div>
														<!--end::Statistics-->
														<!--begin::Chart-->
														<div id="kt_chart_widget_11_chart_3" class="ms-n5 me-n3 min-h-auto" style="height: 300px">
                                                    <table class="table table-bordered table-striped shadow-lg mt-4">
                                                        <thead>
                                                        <tr >
        <th scope="col">ID</th>
        <th scope="col">Vendedor</th>
        <th scope="col">Direccion</th>
        <th scope="col">Telefono</th>
        <th scope="col">Tipo</th>
        <th scope="col">Estado</th>
       
    </tr>
</thead>
<tbody>
    @foreach ($pedidos as $pedido)
    <tr>
    <td>{{ $pedido->id }}</td>
    <td>{{ $pedido->vendedor }}</td>
    <td>{{ $pedido->direccion }}</td>
    <td>{{ $pedido->telefono }}</td>
    <td>{{ $pedido->tipo }}</td>
    <td>{{ $pedido->estado }}</td>
    </tr>                                 
    @endforeach 
    </tbody> 
    </table>                                       
                                                    </div>
														<!--end::Chart-->
													</div>
													<!--end::Tab pane-->
												</div>
												<!--end::Tab content-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Chart widget 11-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row gy-5 g-xl-10">
									<!--begin::Col-->
									<div class="col-xl-4 mb-xl-10">
										<!--begin::List widget 16-->
										<div class="card card-flush h-xl-100">
											<!--begin::Header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-gray-800">Rastreo de Paquetes</span>
													<span class="text-gray-400 mt-1 fw-bold fs-6"> Entregas en Camino</span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div class="card-toolbar">
													<a href="/#" class="btn btn-sm btn-light" data-bs-toggle='tooltip' data-bs-dismiss='click' data-bs-custom-class="tooltip-dark" title="Delivery App is coming soon"></a>
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-4 px-0">
												<!--begin::Nav-->
												
												<!--end::Nav-->
												<!--begin::Tab Content-->
												<div class="tab-content px-9 hover-scroll-overlay-y pe-7 me-3 mb-2" style="height: 454px">
                                              <table class="table table-bordered table-striped shadow-lg mt-4">
                                                        <thead>
                                                        <tr >
        <th scope="col">ID</th>
        <th scope="col">Vendedor</th>
        <th scope="col">Direccion</th>
        
        <th scope="col">Tipo</th>
        
       
    </tr>
</thead>
<tbody>
    @foreach ($pedidos as $pedido)
    @if($pedido->estado =='En Camino')  
    <tr>
    <td>{{ $pedido->id }}</td>
    <td>{{ $pedido->vendedor }}</td>
    <td>{{ $pedido->direccion }}</td>
    
    <td>{{ $pedido->tipo }}</td>
   
    </tr>   
    @endif
    
    @endforeach 
    </tbody> 
    </table>  
													
												</div>
												<!--end::Tab Content-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::List widget 16-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-8 mb-5 mb-xl-10">
										<!--begin::Chart widget 32-->
										<div class="card card-flush h-xl-100">
											<!--begin::Header-->
											<div class="card-header pt-7 mb-3">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-gray-800">Paquetes por categoria</span>
													<span class="text-gray-400 mt-1 fw-bold fs-6">Total 0 Entregados</span>
												</h3>
												<!--end::Title-->
											
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body d-flex flex-column justify-content-between pb-5 px-0">
												<!--begin::Nav-->
												<ul class="nav nav-pills nav-pills-custom mb-3 mx-9">
													<!--begin::Item-->
													<li class="nav-item mb-3 me-3 me-lg-6">
														<!--begin::Link-->
														<a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" id="kt_charts_widget_32_tab_1" href="#kt_charts_widget_32_tab_content_1">
															<!--begin::Icon-->
															<div class="nav-icon mb-3">
																<i class="fonticon-truck fs-1 p-0"></i>
															</div>
															<!--end::Icon-->
															<!--begin::Title-->
															<span class="nav-text text-gray-800 fw-bolder fs-6 lh-1">Rutero</span>
															<!--end::Title-->
															<!--begin::Bullet-->
															<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
															<!--end::Bullet-->
														</a>
														<!--end::Link-->
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item mb-3 me-3 me-lg-6">
														<!--begin::Link-->
														<a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_32_tab_2" href="#kt_charts_widget_32_tab_content_2">
															<!--begin::Icon-->
															<div class="nav-icon mb-3">
																<i class="fonticon-bicycle fs-1 p-0"></i>
															</div>
															<!--end::Icon-->
															<!--begin::Title-->
															<span class="nav-text text-gray-800 fw-bolder fs-6 lh-1">Repartidor</span>
															<!--end::Title-->
															<!--begin::Bullet-->
															<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
															<!--end::Bullet-->
														</a>
														<!--end::Link-->
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													
													<!--end::Item-->
												</ul>
												<!--end::Nav-->
												<!--begin::Tab Content-->
												<div class="tab-content ps-4 pe-6">
													<!--begin::Tap pane-->
													<div class="tab-pane fade active show" id="kt_charts_widget_32_tab_content_1">
														<!--begin::Chart-->
														<div id="kt_charts_widget_32_chart_1" class="min-h-auto" style="height: 375px"></div>
														<!--end::Chart-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_charts_widget_32_tab_content_2">
														<!--begin::Chart-->
														<div id="kt_charts_widget_32_chart_2" class="min-h-auto" style="height: 375px"></div>
														<!--end::Chart-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_charts_widget_32_tab_content_3">
														<!--begin::Chart-->
														<div id="kt_charts_widget_32_chart_3" class="min-h-auto" style="height: 375px"></div>
														<!--end::Chart-->
													</div>
													<!--end::Tap pane-->
												</div>
												<!--end::Tab Content-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Chart widget 32-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row gy-5 g-xl-10">
									<!--begin::Col-->
									<div class="col-xl-4 mb-xl-10">
										<!--begin::List widget 17-->
										<div class="card card-flush h-xl-100">
											<!--begin::Header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-gray-800">Paquetes por categoria</span>
													<span class="text-gray-400 mt-1 fw-bold fs-6">entregados</span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-0">
												<!--begin::Content-->
												
												<!--end::Content-->
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<!--begin::Wrapper-->
													
													<!--end::Wrapper-->
													<!--begin::Value-->
													
													<!--end::Value-->
												</div>
												<!--end::Item-->
												<!--begin::Separator-->
											
												<!--end::Separator-->
												<!--begin::Item-->
												
												<!--end::Item-->
												<!--begin::Separator-->
												<div class="separator separator-dashed my-4"></div>
												<!--end::Separator-->
												<!--begin::Item-->
												Personalizado:
												<!--end::Item-->
												<!--begin::Separator-->
												<div class="separator separator-dashed my-4"></div>
												<!--end::Separator-->
												<!--begin::Item-->
												Casillero:
												<!--end::Item-->
												<!--begin::Separator-->
												<div class="separator separator-dashed my-4"></div>
												<!--end::Separator-->
												<!--begin::Item-->
												Punto Fijo:
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::List widget 17-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-8 mb-5 mb-xl-10">
										<!--begin::Tables widget 6-->
										<div class="card card-flush h-xl-100">
											<!--begin::Header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-gray-800">Vendedores con mas paquetes entregados</span>
													<br>
                                                    <span class="text-gray-400 mt-1 fw-bold fs-6">Total 0 Entregas</span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body">
												<!--begin::Nav-->
												
												<!--end::Nav-->
												<!--begin::Tab Content-->
												<div class="tab-content">
													<!--begin::Tap pane-->
													<div class="tab-pane fade active show" id="kt_stats_widget_6_tab_1">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table table-bordered table-striped shadow-lg mt-4">
																<!--begin::Table head-->
																<thead>
																	
                                                                <tr >
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Nombre</th>
                                                            <th scope="col">Telefono</th>
                                                            <th scope="col">Tipo</th>
                                                             </tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	
																@foreach ($vendedores as $vendedor)
                                                                <tr>
                                                                <td>{{ $vendedor->id }}</td>
                                                                <td>{{ $vendedor->nombre }}</td>
                                                                <td>{{ $vendedor->telefono }}</td>
                                                                
                                                                <td>{{ $vendedor->tipo }}</td>
                                                               
                                                                </tr>                                 
                                                                @endforeach 
																
																	
																	
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_stats_widget_6_tab_2">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																<!--begin::Table head-->
																<thead>
																	<tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
																		<th class="p-0 w-200px w-xxl-450px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-190px"></th>
																		<th class="p-0 w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-40px me-3">
																					<img src="assets/media/avatars/300-11.jpg" class="" alt="" />
																				</div>
																				<div class="d-flex justify-content-start flex-column">
																					<a href="/#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Guy Hawkins</a>
																					<span class="text-muted fw-bold text-muted d-block fs-7">Zuid Area</span>
																				</div>
																			</div>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block mb-1 fs-6">2,954</span>
																			<span class="fw-bold text-gray-400 d-block">Deliveries</span>
																		</td>
																		<td>
																			<a href="/#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$59,634</a>
																			<span class="text-muted fw-bold text-muted d-block fs-7">Earnings</span>
																		</td>
																		<td>
																			<div class="rating">
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																			</div>
																			<span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Rating</span>
																		</td>
																		<td class="text-end">
																			<a href="/#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																				<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
																						<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-40px me-3">
																					<img src="assets/media/avatars/300-13.jpg" class="" alt="" />
																				</div>
																				<div class="d-flex justify-content-start flex-column">
																					<a href="/#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Marvin McKinney</a>
																					<span class="text-muted fw-bold text-muted d-block fs-7">Zuid Area</span>
																				</div>
																			</div>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block mb-1 fs-6">822</span>
																			<span class="fw-bold text-gray-400 d-block">Deliveries</span>
																		</td>
																		<td>
																			<a href="/#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$19,842</a>
																			<span class="text-muted fw-bold text-muted d-block fs-7">Earnings</span>
																		</td>
																		<td>
																			<div class="rating">
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																			</div>
																			<span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Rating</span>
																		</td>
																		<td class="text-end">
																			<a href="/#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																				<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
																						<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-40px me-3">
																					<img src="assets/media/avatars/300-1.jpg" class="" alt="" />
																				</div>
																				<div class="d-flex justify-content-start flex-column">
																					<a href="/#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
																					<span class="text-muted fw-bold text-muted d-block fs-7">Zuid Area</span>
																				</div>
																			</div>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block mb-1 fs-6">1,240</span>
																			<span class="fw-bold text-gray-400 d-block">Deliveries</span>
																		</td>
																		<td>
																			<a href="/#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$5,400</a>
																			<span class="text-muted fw-bold text-muted d-block fs-7">Earnings</span>
																		</td>
																		<td>
																			<div class="rating">
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																			</div>
																			<span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Rating</span>
																		</td>
																		<td class="text-end">
																			<a href="/#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																				<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
																						<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-40px me-3">
																					<img src="assets/media/avatars/300-2.jpg" class="" alt="" />
																				</div>
																				<div class="d-flex justify-content-start flex-column">
																					<a href="/#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Annette Black</a>
																					<span class="text-muted fw-bold text-muted d-block fs-7">Zuid Area</span>
																				</div>
																			</div>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block mb-1 fs-6">6,074</span>
																			<span class="fw-bold text-gray-400 d-block">Deliveries</span>
																		</td>
																		<td>
																			<a href="/#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$174,074</a>
																			<span class="text-muted fw-bold text-muted d-block fs-7">Earnings</span>
																		</td>
																		<td>
																			<div class="rating">
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																			</div>
																			<span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Rating</span>
																		</td>
																		<td class="text-end">
																			<a href="/#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																				<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
																						<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-40px me-3">
																					<img src="assets/media/avatars/300-12.jpg" class="" alt="" />
																				</div>
																				<div class="d-flex justify-content-start flex-column">
																					<a href="/#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Esther Howard</a>
																					<span class="text-muted fw-bold text-muted d-block fs-7">Zuid Area</span>
																				</div>
																			</div>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block mb-1 fs-6">357</span>
																			<span class="fw-bold text-gray-400 d-block">Deliveries</span>
																		</td>
																		<td>
																			<a href="/#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$2,737</a>
																			<span class="text-muted fw-bold text-muted d-block fs-7">Earnings</span>
																		</td>
																		<td>
																			<div class="rating">
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																			</div>
																			<span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Rating</span>
																		</td>
																		<td class="text-end">
																			<a href="/#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																				<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
																						<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_stats_widget_6_tab_3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																<!--begin::Table head-->
																<thead>
																	<tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
																		<th class="p-0 w-200px w-xxl-450px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-190px"></th>
																		<th class="p-0 w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-40px me-3">
																					<img src="assets/media/avatars/300-1.jpg" class="" alt="" />
																				</div>
																				<div class="d-flex justify-content-start flex-column">
																					<a href="/#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
																					<span class="text-muted fw-bold text-muted d-block fs-7">Zuid Area</span>
																				</div>
																			</div>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block mb-1 fs-6">1,240</span>
																			<span class="fw-bold text-gray-400 d-block">Deliveries</span>
																		</td>
																		<td>
																			<a href="/#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$5,400</a>
																			<span class="text-muted fw-bold text-muted d-block fs-7">Earnings</span>
																		</td>
																		<td>
																			<div class="rating">
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																			</div>
																			<span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Rating</span>
																		</td>
																		<td class="text-end">
																			<a href="/#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																				<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
																						<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-40px me-3">
																					<img src="assets/media/avatars/300-11.jpg" class="" alt="" />
																				</div>
																				<div class="d-flex justify-content-start flex-column">
																					<a href="/#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Guy Hawkins</a>
																					<span class="text-muted fw-bold text-muted d-block fs-7">Zuid Area</span>
																				</div>
																			</div>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block mb-1 fs-6">2,954</span>
																			<span class="fw-bold text-gray-400 d-block">Deliveries</span>
																		</td>
																		<td>
																			<a href="/#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$59,634</a>
																			<span class="text-muted fw-bold text-muted d-block fs-7">Earnings</span>
																		</td>
																		<td>
																			<div class="rating">
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																			</div>
																			<span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Rating</span>
																		</td>
																		<td class="text-end">
																			<a href="/#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																				<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
																						<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-40px me-3">
																					<img src="assets/media/avatars/300-13.jpg" class="" alt="" />
																				</div>
																				<div class="d-flex justify-content-start flex-column">
																					<a href="/#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Marvin McKinney</a>
																					<span class="text-muted fw-bold text-muted d-block fs-7">Zuid Area</span>
																				</div>
																			</div>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block mb-1 fs-6">822</span>
																			<span class="fw-bold text-gray-400 d-block">Deliveries</span>
																		</td>
																		<td>
																			<a href="/#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$19,842</a>
																			<span class="text-muted fw-bold text-muted d-block fs-7">Earnings</span>
																		</td>
																		<td>
																			<div class="rating">
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																			</div>
																			<span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Rating</span>
																		</td>
																		<td class="text-end">
																			<a href="/#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																				<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
																						<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-40px me-3">
																					<img src="assets/media/avatars/300-12.jpg" class="" alt="" />
																				</div>
																				<div class="d-flex justify-content-start flex-column">
																					<a href="/#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Esther Howard</a>
																					<span class="text-muted fw-bold text-muted d-block fs-7">Zuid Area</span>
																				</div>
																			</div>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block mb-1 fs-6">357</span>
																			<span class="fw-bold text-gray-400 d-block">Deliveries</span>
																		</td>
																		<td>
																			<a href="/#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$2,737</a>
																			<span class="text-muted fw-bold text-muted d-block fs-7">Earnings</span>
																		</td>
																		<td>
																			<div class="rating">
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																			</div>
																			<span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Rating</span>
																		</td>
																		<td class="text-end">
																			<a href="/#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																				<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
																						<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-40px me-3">
																					<img src="assets/media/avatars/300-2.jpg" class="" alt="" />
																				</div>
																				<div class="d-flex justify-content-start flex-column">
																					<a href="/#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Annette Black</a>
																					<span class="text-muted fw-bold text-muted d-block fs-7">Zuid Area</span>
																				</div>
																			</div>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block mb-1 fs-6">6,074</span>
																			<span class="fw-bold text-gray-400 d-block">Deliveries</span>
																		</td>
																		<td>
																			<a href="/#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$174,074</a>
																			<span class="text-muted fw-bold text-muted d-block fs-7">Earnings</span>
																		</td>
																		<td>
																			<div class="rating">
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																				<div class="rating-label me-1 checked">
																					<i class="bi bi-star-fill fs-6s"></i>
																				</div>
																			</div>
																			<span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Rating</span>
																		</td>
																		<td class="text-end">
																			<a href="/#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																				<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
																						<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
												</div>
												<!--end::Tab Content-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Tables widget 6-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row gy-5 g-xl-10">
									<!--begin::Col-->
									<div class="col-xl-4">
										<!--begin::List widget 18-->
										<div class="card card-flush h-xl-100">
											<!--begin::Header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-gray-800">Ruteros con mas paquetes</span>
													<span class="text-gray-400 mt-1 fw-bold fs-6"></span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div class="card-toolbar">
													<ul class="nav me-n1" id="kt_chart_widget_11_tabs">
														<li class="nav-item">
															<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bolder px-4 me-1" data-bs-toggle="tab" id="kt_list_widget_18_tab_1" href="#kt_list_widget_18_tab_content_1">2022</a>
														</li>
														<li class="nav-item">
															<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bolder px-4 me-1 active" data-bs-toggle="tab" id="kt_list_widget_18_tab_2" href="#kt_list_widget_18_tab_content_2">Mes</a>
														</li>
													</ul>
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-4">
												<!--begin::Tab Content-->
												<div class="tab-content">
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_list_widget_18_tab_content_1">
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-5">
																<!--begin::Flag-->
																<img src="assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																<!--end::Flag-->
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="/#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Abstergo Ltd.</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Video Channel</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
															</div>
															<!--end::Section-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bolder fs-4 me-3">1,578</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->4.1%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-4"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-5">
																<!--begin::Flag-->
																<img src="assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																<!--end::Flag-->
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="/#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Barone LLC.</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Messanger</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
															</div>
															<!--end::Section-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bolder fs-4 me-3">794</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->0.2%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-4"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-5">
																<!--begin::Flag-->
																<img src="assets/media/svg/brand-logos/plurk.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																<!--end::Flag-->
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="/#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Big Kahuna Burger</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Social Network</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
															</div>
															<!--end::Section-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bolder fs-4 me-3">2,047</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->1.9%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-4"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-5">
																<!--begin::Flag-->
																<img src="assets/media/svg/brand-logos/vimeo.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																<!--end::Flag-->
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="/#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Biffco Enterprises</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Social Network</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
															</div>
															<!--end::Section-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bolder fs-4 me-3">3,458</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->8.3%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-4"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-5">
																<!--begin::Flag-->
																<img src="assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																<!--end::Flag-->
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="/#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Abstergo Ltd.</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Community</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
															</div>
															<!--end::Section-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bolder fs-4 me-3">579</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->2.6%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-4"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-5">
																<!--begin::Flag-->
																<img src="assets/media/svg/brand-logos/telegram-2.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																<!--end::Flag-->
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="/#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Binford Ltd.</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Social Media</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
															</div>
															<!--end::Section-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bolder fs-4 me-3">2,588</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-danger fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
																			<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->0.4%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_list_widget_18_tab_content_2">
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-5">
																<!--begin::Flag-->
																<img src="assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																<!--end::Flag-->
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="/#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Abstergo Ltd.</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Community</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
															</div>
															<!--end::Section-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bolder fs-4 me-3">579</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->2.6%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-4"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-5">
																<!--begin::Flag-->
																<img src="assets/media/svg/brand-logos/telegram-2.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																<!--end::Flag-->
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="/#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Binford Ltd.</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Social Media</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
															</div>
															<!--end::Section-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bolder fs-4 me-3">2,588</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-danger fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
																			<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->0.4%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-4"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-5">
																<!--begin::Flag-->
																<img src="assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																<!--end::Flag-->
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="/#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Barone LLC.</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Messanger</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
															</div>
															<!--end::Section-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bolder fs-4 me-3">794</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->0.2%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-4"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-5">
																<!--begin::Flag-->
																<img src="assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																<!--end::Flag-->
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="/#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Abstergo Ltd.</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Video Channel</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
															</div>
															<!--end::Section-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bolder fs-4 me-3">1,578</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->4.1%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-4"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-5">
																<!--begin::Flag-->
																<img src="assets/media/svg/brand-logos/vimeo.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																<!--end::Flag-->
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="/#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Biffco Enterprises</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Social Network</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
															</div>
															<!--end::Section-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bolder fs-4 me-3">3,458</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->8.3%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-4"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-5">
																<!--begin::Flag-->
																<img src="assets/media/svg/brand-logos/plurk.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																<!--end::Flag-->
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href=/#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Big Kahuna Burger</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Social Network</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
															</div>
															<!--end::Section-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bolder fs-4 me-3">2,047</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->1.9%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Tap pane-->
												</div>
												<!--end::Tab Content-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::List widget 18-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-8">
										<!--begin::Chart widget 17-->
										<div class="card card-flush h-xl-100">
											<!--begin::Header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-dark">Sales Statistics</span>
													<span class="text-gray-400 pt-2 fw-bold fs-6">Top Selling Products</span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
														<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
														<span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
																<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
																<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
																<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu 3-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
														<!--begin::Heading-->
														<div class="menu-item px-3">
															<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
														</div>
														<!--end::Heading-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="/#" class="menu-link px-3">Create Invoice</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="/#" class="menu-link flex-stack px-3">Create Payment
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="/#" class="menu-link px-3">Generate Bill</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
															<a href="/#" class="menu-link px-3">
																<span class="menu-title">Subscription</span>
																<span class="menu-arrow"></span>
															</a>
															<!--begin::Menu sub-->
															<div class="menu-sub menu-sub-dropdown w-175px py-4">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="/#" class="menu-link px-3">Plans</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="/#" class="menu-link px-3">Billing</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="/#" class="menu-link px-3">Statements</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator my-2"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3">
																		<!--begin::Switch-->
																		<label class="form-check form-switch form-check-custom form-check-solid">
																			<!--begin::Input-->
																			<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																			<!--end::Input-->
																			<!--end::Label-->
																			<span class="form-check-label text-muted fs-6">Recuring</span>
																			<!--end::Label-->
																		</label>
																		<!--end::Switch-->
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu sub-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3 my-1">
															<a href="/#" class="menu-link px-3">Settings</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu 3-->
													<!--end::Menu-->
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-5">
												<!--begin::Chart container-->
												<div id="kt_charts_widget_17_chart" class="w-100 h-400px"></div>
												<!--end::Chart container-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Chart widget 17-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Container-->
						</div>







<!-- **************Fin del contenido central ******** -->  

<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>


@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
@stop


