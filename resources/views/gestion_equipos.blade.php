<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Sistema de Gestión Kunaq
		</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description" content="Initialized with local json data">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
		<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico" />
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header "  m-minimize-offset="200" m-minimize-mobile-offset="200"  style="background-color:#D5161E">
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark " style="background-color:#f2f3f8;">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="index.html" class="m-brand__logo-wrapper">
										<img alt="" src="assets/app/media/img/logos/logo-kunaq-medio.png" style="width:10rem;"/>
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block 
					 ">
										<span></span>
									</a>
									<!-- END -->
							<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
							<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
			<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>
									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>
						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav" >
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt=""/>
												</span>
												<span class="m-topbar__username m--hide">
													Nick
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="color:#D5161E"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background-color: #D5161E; background-size: cover;">
														<div class="m-card-user m-card-user--skin-dark">
															<div class="m-card-user__pic">
																<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt=""/>
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">
																	Mark Andre
																</span>
																<a href="" class="m-card-user__email m--font-weight-300 m-link">
																	mark.andre@gmail.com
																</a>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">
																		Section
																	</span>
																</li>
																<li class="m-nav__item">
																	<a href="header/profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-user-settings"></i>
																		<span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">
																					Mi perfil
																				</span>
																			</span>
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="header/profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-interface-3"></i>
																		<span class="m-nav__link-text">
																			Control de accesos
																		</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="{{ url('') }}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-danger m-btn--bolder">
																		Salir
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
										{{-- <li id="m-quick-sidebar-toggle" class="m-nav__item">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-icon">
													<i class="flaticon-grid-menu"></i>
												</span>
											</a>
										</li>
									</ul>                          sidebar toggle                     --}}
								</div>
							</div>
							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>
			<!-- END: Header -->		
		<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark " style="background-color:white;"> 
					<!-- BEGIN: Aside Menu -->
	<div 
		id="m_ver_menu" 
		class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " 
		m-menu-vertical="1"
		 m-menu-scrollable="0" m-menu-dropdown-timeout="500">
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow " >
							<li class="m-menu__section">
								<h2 class="m-menu__section-text">
									Sistema de gestión
								</h2>
								<i class="m-menu__section-icon flaticon-more-v3"></i>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"   m-menu-submenu-toggle="hover">
								<a  href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa fa-desktop"></i>
									<span class="m-menu__link-text">
										General
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu" >
									<span class="m-menu__arrow" style="color:#D5161E"></span>
									<ul class="m-menu__subnav"  style="color:#D5161E">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
											<span class="m-menu__link">
												<span class="m-menu__link-text">
													General
												</span>
											</span>
										</li>
                                        <li class="m-menu__item " aria-haspopup="true" >
											<a  href="#" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Perfil
												</span>
											</a>
										</li>
										<li class="m-menu__item " aria-haspopup="true" >
											<a  href="#" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Control de acceso
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
								<a  href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa fa-cog"></i>
									<span class="m-menu__link-text">
										Soporte Técnico
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu ">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
											<span class="m-menu__link">
												<span class="m-menu__link-text">
													Soporte Técnico
												</span>
											</span>
										</li>
										<li class="m-menu__item " aria-haspopup="true" >
											<a  href="#" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Gestión de equipos
												</span>
											</a>
										</li>
										<li class="m-menu__item " aria-haspopup="true" >
											<a  href="#" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Resumen de inventario
												</span>
											</a>
										</li>
										<li class="m-menu__item " aria-haspopup="true" >
											<a  href="#" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Control de licenciamiento
												</span>
											</a>
										</li>
										<li class="m-menu__item " aria-haspopup="true" >
											<a  href="#" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Control de visitas
												</span>
											</a>
										</li>
                                        <li class="m-menu__item " aria-haspopup="true" >
											<a  href="#" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Gestión de incidencias
												</span>
											</a>
										</li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
											<a  href="javascript:;" class="m-menu__link m-menu__toggle">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Resumen de soporte técnico
												</span>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu ">
												<span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true" >
														<a  href="#" class="m-menu__link ">
															<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																<span></span>
															</i>
															<span class="m-menu__link-text">
																Resumen técnico
															</span>
														</a>
													</li>
													<li class="m-menu__item " aria-haspopup="true" >
														<a  href="#" class="m-menu__link ">
															<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																<span></span>
															</i>
															<span class="m-menu__link-text">
																Tipo de atención
															</span>
														</a>
													</li>
													<li class="m-menu__item " aria-haspopup="true" >
														<a  href="#" class="m-menu__link ">
															<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																<span></span>
															</i>
															<span class="m-menu__link-text">
																Modalidad de atención
															</span>
														</a>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
								<a  href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa fa-area-chart"></i>
									<span class="m-menu__link-text">
										SG5 Software ERP
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu ">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
											<span class="m-menu__link">
												<span class="m-menu__link-text">
													SG5 Software ERP
												</span>
											</span>
										</li>
										<li class="m-menu__item " aria-haspopup="true" >
											<a  href="#" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Control de bolsa de horas
												</span>
											</a>
										</li>
										<li class="m-menu__item " aria-haspopup="true" >
											<a  href="components/buttons/dropdown.html" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Documentación SG5
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
					<!-- END: Aside Menu -->
				</div>
				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Gestión de equipos
								</h3>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
                                        <div class="m-stack m-stack--ver m-stack--general m-stack--demo">
                                            <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                                <button type="button" class="btn m-btn--square  btn-warning btn-lg">
                                                    Almacen
                                                </button>
                                            </div>
                                            <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                                <button type="button" class="btn m-btn--square  btn-success btn-lg">
                                                    Asignados
                                                </button>
                                            </div>
                                            <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                                <button type="button" class="btn m-btn--square  btn-danger btn-lg">
                                                    Baja
                                                </button>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
							<div class="m-portlet__body">
								<!--begin: Search Form -->
								<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
									<div class="row align-items-center">
										<div class="col-xl-10 order-2 order-xl-1">
											<div class="form-group m-form__group row align-items-center">
												<div class="col-md-3">
													<div class="m-form__group m-form__group--inline">
														<div class="m-form__label">
															<label>
																Periféricos:
															</label>
														</div>
														<div class="m-form__control">
															<select class="form-control m-bootstrap-select" id="m_form_periferico">
																<option value="">Todos</option>
																<option value="Laptop">
																	Laptop
																</option>
																<option value="Desktop">
																	Desktop
																</option>
															</select>
														</div>
													</div>
													<div class="d-md-none m--margin-bottom-10"></div>
												</div>
												<div class="col-md-3">
													<div class="m-form__group m-form__group--inline">
														<div class="m-form__label">
															<label class="m-label m-label--single">
																Marca:
															</label>
														</div>
														<div class="m-form__control">
															<select class="form-control m-bootstrap-select" id="m_form_marca">
																<option value="">
																	Todos
																</option>
																<option value="Microsoft">Microsoft</option>
																<option value="HP Hewlett-Packard">HP Hewlett-Packard</option>
																<option value="Linux">Linux</option>
																<option value="ESET">ESET</option>
																<option value="Oracle">Oracle</option>
																<option value="6">Kaspersky Lab</option>
																<option value="7">Dell</option>
																<option value="8">Lenovo</option>
																<option value="9">Kyocera</option>
																<option value="10">Konica Minolta</option>
																<option value="11">Compatible</option>
																<option value="12">Samsung</option>
																<option value="13">LG</option>
																<option value="14">ViewSonic</option>
																<option value="15">Cisco</option>
																<option value="16">TP-Link</option>
																<option value="17">DLink</option>
																<option value="18">Ubiquiti Networks</option>
																<option value="19">Sony</option>
																<option value="20">Apple</option>
																<option value="21">Epson</option>
																<option value="22">Adobe</option>
																<option value="23">Sybase</option>
																<option value="24">Autodesk</option>
																<option value="26">Acer</option>
															</select>
														</div>
													</div>
													<div class="d-md-none m--margin-bottom-10"></div>
												</div>
												<div class="col-md-3">
													<div class="m-form__group m-form__group--inline">
														<div class="m-form__label">
															<label class="m-label m-label--single">
																Estado:
															</label>
														</div>
														<div class="m-form__control">
															<select class="form-control m-bootstrap-select" id="m_form_estado">
																<option value="">
																	Todos
																</option>
																<option value="Asignado">
																	Asignado
																</option>
																<option value="Almacén">
																	Almacén
																</option>
																<option value="Baja">
																	Baja
																</option>
															</select>
														</div>
													</div>
													<div class="d-md-none m--margin-bottom-10"></div>
												</div>
												<div class="col-md-3">
													<div class="m-input-icon m-input-icon--left">
														<input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
														<span class="m-input-icon__icon m-input-icon__icon--left">
															<span>
																<i class="la la-search"></i>
															</span>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 order-1 order-xl-2 m--align-right">
											<a href="#" class="btn btn-success m-btn m-btn--icon btn-lg m-btn--icon-only">
												<i class="la la-file-excel-o"></i>
											</a>
											<a href="#" class="btn btn-danger m-btn m-btn--icon btn-lg m-btn--icon-only">
												<i class="la la-file-pdf-o"></i>
											</a>
											<a href="#" class="btn btn-metal m-btn m-btn--icon btn-lg m-btn--icon-only">
												<i class="la la-plus"></i>
											</a>
											<div class="m-separator m-separator--dashed d-xl-none"></div>
										</div>
									</div>
								</div>
								<!--end: Search Form -->
		                        <!--begin: Datatable -->
								<div class="m_datatable" id="local_data"></div>
								<!--end: Datatable -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end:: Body -->
<!-- begin::Footer -->
			<footer class="m-grid__item		m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								&copy; 2022 | Todos los derechos reservados | Kunaq & Asociados S.A.C
							</span>
						</div>
						{{-- <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
							<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											About
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#"  class="m-nav__link">
										<span class="m-nav__link-text">
											Privacy
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											T&C
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											Purchase
										</span>
									</a>
								</li>
								<li class="m-nav__item m-nav__item">
									<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
										<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
									</a>
								</li>
							</ul>
						</div> --}}
					</div>
				</div>
			</footer>
			<!-- end::Footer -->
		</div>
		<!-- end:: Page -->
    		        <!-- begin::Quick Sidebar -->
		<div id="m-quick-sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
			<div class="m-quick-sidebar__content">
				<span id="m-quick-sidebar_close" class="m-quick-sidebar__close"  onclick="hideSidebar();">
					<i class="la la-close"></i>
				</span>
				<ul id="m-quick-sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m-quick-sidebar-tabs_detalle" role="tab">
							Detalles
						</a>
					</li>
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link" data-toggle="tab" href="#m-quick-sidebar-tabs_asignaciones" role="tab">
							Asignaciones
						</a>
					</li>
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link" data-toggle="tab" href="#m-quick-sidebar-tabs_mttos" role="tab">
							Mantenimientos
						</a>
					</li>
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link" data-toggle="tab" href="#m-quick-sidebar-tabs_software" role="tab">
							Software
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active m-scrollable" id="m-quick-sidebar-tabs_detalle" role="tabpanel">
						<div class="m-list-settings">
							<div class="m-list-settings__group">
								<div class="m-list-settings__heading" style=" border-bottom: dashed 1px #ebedf2;font-size: 1.5rem;">
									<p id="dscEquipGestEquipo"></p>
								</div>
								<div class="m-list-settings__item row">
									<span class="m-list-settings__item-label  col-md-3">
										Sucursal
									</span>
									<span class="m-list-settings__item-control  col-md-9">
										<input type="text" class="form-control m-input" id="sucursalGestEquipo">
									</span>								
								</div>
								<div class="m-list-settings__item row">
									<span class="m-list-settings__item-label  col-md-3">
										Ubicación
									</span>
									<span class="m-list-settings__item-control  col-md-9">
										<input type="text" class="form-control m-input" id="ubicacionGestEquipo">
									</span>								
								</div>
								<div class="row">
									<div class="m-list-settings__item col-md-6">
										<span class="m-list-settings__item-label col-md-3">
											Estado
										</span>
										<span class="m-list-settings__item-control  col-md-3">
											<input type="text" class="form-control m-input" style="margin-left:-0.5rem;" id="estadoGestEquipo">
										</span>								
									</div>
									<div class="m-list-settings__item col-md-6">
										<span class="m-list-settings__item-label  col-md-3">
											Periférico
										</span>
										<span class="m-list-settings__item-control  col-md-3">
											<input type="text" class="form-control m-input" style="margin-left:-2rem;" id="perifericoGestEquipo">
										</span>								
									</div>
								</div>
								<div class="row">
									<div class="m-list-settings__item col-md-6">
										<span class="m-list-settings__item-label  col-md-3">
											Marca
										</span>
										<span class="m-list-settings__item-control  col-md-3">
											<input type="text" class="form-control m-input" style="margin-left:-0.5rem;" id="marcaGestEquipo">
										</span>								
									</div>
									<div class="m-list-settings__item col-md-6">
										<span class="m-list-settings__item-label  col-md-3">
											Cod. Inventario
										</span>
										<span class="m-list-settings__item-control  col-md-3">
											<input type="text" class="form-control m-input" style="margin-left:-2rem;" id="codInvGestEquipo">
										</span>								
									</div>
								</div>
								<div class="row">
									<div class="m-list-settings__item col-md-6">
										<span class="m-list-settings__item-label  col-md-3">
											Cod. Activo
										</span>
										<span class="m-list-settings__item-control  col-md-3">
											<input type="text" class="form-control m-input" style="margin-left:-0.5rem;" id="codActvGestEquipo">
										</span>								
									</div>
									<div class="m-list-settings__item col-md-6">
										<span class="m-list-settings__item-label  col-md-3">
											Serie
										</span>
										<span class="m-list-settings__item-control  col-md-3">
											<input type="text" class="form-control m-input" style="margin-left:-2rem;" id="serieGestEquipo">
										</span>								
									</div>
								</div>
								<div class="row">
									<div class="m-list-settings__item col-md-6">
										<span class="m-list-settings__item-label  col-md-3">
											Procesador
										</span>
										<span class="m-list-settings__item-control  col-md-3">
											<input type="text" class="form-control m-input" style="margin-left:-0.5rem;" id="procesadorGestEquipo">
										</span>								
									</div>
									<div class="m-list-settings__item col-md-6">
										<span class="m-list-settings__item-label  col-md-3">
											Velocidad
										</span>
										<span class="m-list-settings__item-control col-md-3">
											<div class="input-group m-input-group "style="margin-left:-2rem;">
												<div class="input-group-prepend">
													<span class="input-group-text">
														GHz
													</span>
												</div>
												<input type="text" class="form-control m-input" id="velocidadGestEquipo">
											</div>
										</span>								
									</div>
								</div>
								<div class="row">
									<div class="m-list-settings__item col-md-6">
										<span class="m-list-settings__item-label  col-md-3">
											Disco duro
										</span>
										<span class="m-list-settings__item-control col-md-3">
											<div class="input-group m-input-group "style="margin-left:-0.5rem;">
												<div class="input-group-prepend">
													<span class="input-group-text">
														Gb
													</span>
												</div>
												<input type="text" class="form-control m-input" id="discoDuroGestEquipo">
											</div>
										</span>								
									</div>
									<div class="m-list-settings__item col-md-6">
										<span class="m-list-settings__item-label  col-md-3">
											Tamaño
										</span>
										<span class="m-list-settings__item-control  col-md-3">
											<input type="text" class="form-control m-input" style="margin-left:-2rem;" id="tamanioGestEquipo">
										</span>								
									</div>
								</div>
								<div class="row">
									<div class="m-list-settings__item col-md-6">
										<span class="m-list-settings__item-label  col-md-3">
											Fecha Compra
										</span>
										<span class="m-list-settings__item-control  col-md-3">
											<input type="text" class="form-control m-input" style="margin-left:-0.5rem;" id="fchCompraGestEquipo">
										</span>								
									</div>
									<div class="m-list-settings__item col-md-6">
										<span class="m-list-settings__item-label  col-md-3">
											Fecha Instal.
										</span>
										<span class="m-list-settings__item-control  col-md-3">
											<input type="text" class="form-control m-input" style="margin-left:-2rem;" id="fchInstGestEquipo">
										</span>								
									</div>
								</div>
								<div class="row">
									<div class="m-list-settings__item col-md-6">
										<span class="m-list-settings__item-label  col-md-3">
											Propiedad
										</span>
										<span class="m-list-settings__item-control  col-md-3">
											<input type="text" class="form-control m-input" style="margin-left:-0.5rem;" id="tipoPropiedadGestEquipo">
										</span>								
									</div>
									<div class="m-list-settings__item col-md-6">
										<span class="m-list-settings__item-label  col-md-3">
											Contrato
										</span>
										<span class="m-list-settings__item-control  col-md-3">
											<input type="text" class="form-control m-input" style="margin-left:-2rem;" id="contratoGestEquipo">
										</span>								
									</div>
								</div>
								<div class="row">
									<div class="m-list-settings__item col-md-6">
										<span class="m-list-settings__item-label  col-md-3">
											Vcmto. Contrato
										</span>
										<span class="m-list-settings__item-control  col-md-3">
											<input type="text" class="form-control m-input" style="margin-left:-0.5rem;" id="fchVcmtoCttoGestEquipo">
										</span>								
									</div>
									<div class="m-list-settings__item col-md-6">
										<span class="m-list-settings__item-label  col-md-3">
											Cuota
										</span>
										<span class="m-list-settings__item-control  col-md-3">
											<input type="text" class="form-control m-input" style="margin-left:-2rem;" id="cuotaGestEquipo">
										</span>								
									</div>
								</div>
								<div class="row">
									<div class="m-list-settings__item col-md-6">
										<span class="m-list-settings__item-label  col-md-3">
											Costo Equip.
										</span>
										<span class="m-list-settings__item-control  col-md-3">
											<input type="text" class="form-control m-input" style="margin-left:-0.5rem;" id="costoEquipGestEquipo">
										</span>								
									</div>
									<div class="m-list-settings__item col-md-6">
										<span class="m-list-settings__item-label  col-md-3">
											Cod. Equipo
										</span>
										<span class="m-list-settings__item-control  col-md-3">
											<input type="text" class="form-control m-input" style="margin-left:-2rem;" id="codEquipoGestEquipo">
										</span>								
									</div>
								</div>
								<div class="m-list-settings__item row">
									<span class="m-list-settings__item-label  col-md-3">
										Detalle
									</span>
									<span class="m-list-settings__item-control  col-md-9">
										<textarea class="form-control m-input" id="detalleGestEquipo" rows="3"></textarea>
									</span>								
								</div>
							</div>

						</div>
					</div>
					<div class="tab-pane  m-scrollable" id="m-quick-sidebar-tabs_asignaciones" role="tabpanel">
						<div class="m-list-timeline">
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading" style="border-bottom: dashed 1px #ebedf2;font-size: 1.5rem;">
									<p id="dscEquipGestEquipo1"><p>
								</div>
								<div id="historicoAsignacion">
									<div class="m-list-timeline__heading">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
											<p class="m-list-timeline__text">
												Blas Cesia
												<span class="m-badge m-badge--success m-badge--wide">
													Asignado
												</span>
											</p>
									</div>
									<div class="m-list-timeline__items" style="margin-bottom: 1rem;">
										<div class="m-list-timeline__item">
											<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
											<p class="m-list-timeline__text">
												Fecha de inicio
											</p>
											<span class="m-list-timeline__time">
												2022-09-01
											</span>
										</div>
										<div class="m-list-timeline__item">
											<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
											<p class="m-list-timeline__text">
												Fecha fin
											</p>
											<span class="m-list-timeline__time">
												2022-09-30
											</span>
										</div>
										<div class="m-list-timeline__item">
											<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
											<p class="m-list-timeline__text">
												Observación: 
											</p>
											<span class="m-list-timeline__time" style="width: 25rem;text-align: justify;">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</span>
										</div>

									</div>
									<div class="m-list-timeline__heading">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
											<p class="m-list-timeline__text">
												Fernández Cabrera Jaime
											</p>
									</div>
									<div class="m-list-timeline__items" style="margin-bottom: 1rem;">
										<div class="m-list-timeline__item">
											<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
											<p class="m-list-timeline__text">
												Fecha de inicio
											</p>
											<span class="m-list-timeline__time">
												2021-04-01
											</span>
										</div>
										<div class="m-list-timeline__item">
											<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
											<p class="m-list-timeline__text">
												Fecha fin
											</p>
											<span class="m-list-timeline__time">
												2021-12-31
											</span>
										</div>
										<div class="m-list-timeline__item">
											<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
											<p class="m-list-timeline__text">
												Observación: 
											</p>
											<span class="m-list-timeline__time" style="width: 25rem;text-align: justify;">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
											</span>
										</div>

									</div>
									<div class="m-list-timeline__heading">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
											<p class="m-list-timeline__text">
												Gil Edith
											</p>
									</div>
									<div class="m-list-timeline__items" style="margin-bottom: 1rem;">
										<div class="m-list-timeline__item">
											<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
											<p class="m-list-timeline__text">
												Fecha de inicio
											</p>
											<span class="m-list-timeline__time">
												2021-01-01
											</span>
										</div>
										<div class="m-list-timeline__item">
											<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
											<p class="m-list-timeline__text">
												Fecha fin
											</p>
											<span class="m-list-timeline__time">
												2021-03-31
											</span>
										</div>
										<div class="m-list-timeline__item">
											<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
											<p class="m-list-timeline__text">
												Observación: 
											</p>
											<span class="m-list-timeline__time" style="width: 25rem;text-align: justify;">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
											</span>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane  m-scrollable" id="m-quick-sidebar-tabs_mttos" role="tabpanel">
						<div class="m-list-timeline">
							<div class="m-list-timeline__heading" style="border-bottom: dashed 1px #ebedf2;font-size: 1.5rem;">
								<p id="dscEquipGestEquipo2"></p>
							</div>
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<p class="m-list-timeline__text">
											Mantenimiento Preventivo
											<span class="m-badge m-badge--success m-badge--wide">
												Finalizado
											</span>
										</p>
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<p class="m-list-timeline__text">
											Fecha Programada
										</p>
										<span class="m-list-timeline__time">
											2021-01-10
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<p class="m-list-timeline__text">
											Fecha de Ejecución
										</p>
										<span class="m-list-timeline__time">
											2021-01-10
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
										<p class="m-list-timeline__text">
											Costo
										</p>
										<span class="m-list-timeline__time">
											S/ 20.00
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<p class="m-list-timeline__text">
											Observaciones 
										</p>
										<span class="m-list-timeline__time" style="width: 20rem;text-align: justify;">
											Mantenimiento lógico del equipo
										</span>
									</div>
								</div>
							</div>
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<p class="m-list-timeline__text">
											Mantenimiento Preventivo
											<span class="m-badge m-badge--warning m-badge--wide">
												Pendiente
											</span>
										</p>
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<p class="m-list-timeline__text">
											Fecha Programada
										</p>
										<span class="m-list-timeline__time">
											2021-01-10
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<p class="m-list-timeline__text">
											Fecha de Ejecución
										</p>
										<span class="m-list-timeline__time">
											
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
										<p class="m-list-timeline__text">
											Costo
										</p>
										<span class="m-list-timeline__time">
											S/ 20.00
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<p class="m-list-timeline__text">
											Observaciones 
										</p>
										<span class="m-list-timeline__time" style="width: 20rem;text-align: justify;">
											Mantenimiento lógico del equipo. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane  m-scrollable" id="m-quick-sidebar-tabs_software" role="tabpanel">
						<div class="m-list-timeline">
							<div class="m-list-timeline__heading" style="border-bottom: dashed 1px #ebedf2;font-size: 1.5rem;">
								<p id="dscEquipGestEquipo3"></p>
							</div>
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<p class="m-list-timeline__text">
											Windows 10 Professional x 64bits
										</p>
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<p class="m-list-timeline__text">
											Categoria
										</p>
										<span class="m-list-timeline__time">
											Sistema Operativo
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<p class="m-list-timeline__text">
											Fecha Instalación
										</p>
										<span class="m-list-timeline__time">
											2022-08-31
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<p class="m-list-timeline__text">
											Observación
										</p>
										<span class="m-list-timeline__time" style="width: 20rem;text-align: justify;">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										</span>
									</div>
								</div>
							</div>
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<p class="m-list-timeline__text">
											Kaspersky Endpoint Security
										</p>
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<p class="m-list-timeline__text">
											Categoria
										</p>
										<span class="m-list-timeline__time">
											Antivirus
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<p class="m-list-timeline__text">
											Fecha Instalación
										</p>
										<span class="m-list-timeline__time">
											2022-08-31
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<p class="m-list-timeline__text">
											Observación
										</p>
										<span class="m-list-timeline__time" style="width: 20rem;text-align: justify;">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</span>
									</div>
								</div>
							</div>
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<p class="m-list-timeline__text">
											Kaspersky Endpoint Security
										</p>
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<p class="m-list-timeline__text">
											Categoria
										</p>
										<span class="m-list-timeline__time">
											Antivirus
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<p class="m-list-timeline__text">
											Fecha Instalación
										</p>
										<span class="m-list-timeline__time">
											2022-08-31
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<p class="m-list-timeline__text">
											Observación
										</p>
										<span class="m-list-timeline__time" style="width: 20rem;text-align: justify;">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										</span>
									</div>
								</div>
							</div>
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<p class="m-list-timeline__text">
											Microsoft 365 Estandar
										</p>
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<p class="m-list-timeline__text">
											Categoria
										</p>
										<span class="m-list-timeline__time">
											Microsoft 365
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<p class="m-list-timeline__text">
											Fecha Instalación
										</p>
										<span class="m-list-timeline__time">
											2019-05-01
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<p class="m-list-timeline__text">
											Observación
										</p>
										<span class="m-list-timeline__time" style="width: 20rem;text-align: justify;">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										</span>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end::Quick Sidebar -->		    
	    <!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->		    <!-- begin::Quick Nav -->
		{{-- <ul class="m-nav-sticky" style="margin-top: 30px;">
			<!--
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Showcase" data-placement="left">
				<a href="">
					<i class="la la-eye"></i>
				</a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Pre-sale Chat" data-placement="left">
				<a href="" >
					<i class="la la-comments-o"></i>
				</a>
			</li>
			-->
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
				<a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank">
					<i class="la la-cart-arrow-down"></i>
				</a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
				<a href="https://keenthemes.com/metronic/documentation.html" target="_blank">
					<i class="la la-code-fork"></i>
				</a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
				<a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank">
					<i class="la la-life-ring"></i>
				</a>
			</li>
		</ul> --}}
		<!-- begin::Quick Nav -->	
    	<!--begin::Base Scripts -->
		<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->   
        <!--begin::Page Resources -->
		{{-- <script src="assets/demo/default/custom/components/datatables/base/data-local.js" type="text/javascript"></script> --}}
		<!--end::Page Resources -->
		<script type="text/javascript">
			var datos1 =[ 
				@foreach ($lista as $l)
					{
						"dsc_equipo":"{{$l->dsc_equipo}}",
						"fch_compra":"{{$l->fch_compra}}",
						"dsc_estado":"{{$l->dsc_estado}}",
						"serie":"{{$l->serie}}",
						"dsc_modelo":"{{$l->dsc_modelo}}",
						"dsc_marca":"{{$l->dsc_marca}}",
						"dsc_periferico":"{{$l->dsc_periferico}}",
						"nombres":"{{$l->nombres}} {{$l->apellidos}}",
						"ver":1,
						"mas":'<div id="m-quick-sidebar_toggle" class="m-nav__item"><a href="#" onclick="mostrarSidebar({{$l->id}});" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m-dropdown__toggle" title="Más"><i class="la la-eye"></i></a></div>'
					},					
				@endforeach
				];
			var mQuickSidebargestEquip = function() {
				var n = $("#m-quick-sidebar")
				, o = $("#m-quick-sidebar_tabs")
				, t = n.find(".m-quick-sidebar__content");
				return {
					init: function() {
							new mOffcanvas("m-quick-sidebar",{
							overlay: !0,
							baseClass: "m-quick-sidebar",
							closeBy: "m-quick-sidebar_close"
						}).one("afterShow", function() {
							mApp.block(n),
							setTimeout(function() {
								mApp.unblock(n),
								t.removeClass("m--hide")
							}, 1e3)
						})
					}
				}
			}();

			function hideSidebar(){
				$("#m-quick-sidebar").removeClass("m-quick-sidebar--on");
			}

			function mostrarSidebar(a){
				hideSidebar();
				$("#m-quick-sidebar").addClass("m-quick-sidebar--on");
				$.post(" {{ route('detalleEquipo') }} ",{id_equipo:a, _token: '{{csrf_token()}}'},function(respuesta) {
					//console.log(respuesta);
					document.getElementById("dscEquipGestEquipo").innerHTML = respuesta[0].dsc_equipo;
					document.getElementById("dscEquipGestEquipo1").innerHTML = respuesta[0].dsc_equipo;
					document.getElementById("dscEquipGestEquipo2").innerHTML = respuesta[0].dsc_equipo;
					document.getElementById("dscEquipGestEquipo3").innerHTML = respuesta[0].dsc_equipo;
					$("#sucursalGestEquipo").val(respuesta[0].dsc_sucursal);
					$("#ubicacionGestEquipo").val(respuesta[0].dsc_ubicaciones);
					$("#estadoGestEquipo").val(respuesta[0].dsc_estado);
					$("#perifericoGestEquipo").val(respuesta[0].dsc_periferico);
					$("#marcaGestEquipo").val(respuesta[0].dsc_marca);
					$("#codInvGestEquipo").val(respuesta[0].nro_inventario);
					$("#codActvGestEquipo").val(respuesta[0].cod_activo);
					$("#serieGestEquipo").val(respuesta[0].serie);
					$("#procesadorGestEquipo").val(respuesta[0].dsc_procesador);
					$("#velocidadGestEquipo").val(respuesta[0].velocidad_procesador);
					$("#discoDuroGestEquipo").val(respuesta[0].disco_duro);
					$("#tamanioGestEquipo").val(respuesta[0].tamanio);
					$("#fchCompraGestEquipo").val(respuesta[0].fch_compra);
					$("#fchInstGestEquipo").val(respuesta[0].fch_instalacion);
					$("#tipoPropiedadGestEquipo").val(respuesta[0].dsc_tipo_propiedad);
					$("#contratoGestEquipo").val(respuesta[0].contrato);
					$("#fchVcmtoCttoGestEquipo").val(respuesta[0].fch_vcmto_mes);
					$("#cuotaGestEquipo").val(respuesta[0].dsc_abrev+' '+respuesta[0].cuota_mes);
					$("#costoEquipGestEquipo").val(respuesta[0].dsc_abrev+' '+respuesta[0].costo_equipo);
					var codigo = (respuesta[0].id).toString();
					codigo = codigo.padStart(10,0);
					$("#codEquipoGestEquipo").val(codigo);
					$("#detalleGestEquipo").val(respuesta[0].observaciones);
				});

				$.post(" {{ route('asignacionEquipo') }} ",{id_equipo:a, _token: '{{csrf_token()}}'},function(respuesta){
					//console.log(respuesta);
					var histAsignacion = '';
					$.each(respuesta, function(){
						console.log(asig.fch_inicio);
						// histAsignacion +='<div class="m-list-timeline__heading">'+
						// 				'<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>'+
						// 					'<p class="m-list-timeline__text">'+
						// 						Blas Cesia
						// 						<span class="m-badge m-badge--success m-badge--wide">
						// 							Asignado
						// 						</span>
						// 					</p>
						// 			</div>
						// 			<div class="m-list-timeline__items" style="margin-bottom: 1rem;">
						// 				<div class="m-list-timeline__item">
						// 					<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
						// 					<p class="m-list-timeline__text">
						// 						Fecha de inicio
						// 					</p>
						// 					<span class="m-list-timeline__time">
						// 						2022-09-01
						// 					</span>
						// 				</div>
						// 				<div class="m-list-timeline__item">
						// 					<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
						// 					<p class="m-list-timeline__text">
						// 						Fecha fin
						// 					</p>
						// 					<span class="m-list-timeline__time">
						// 						2022-09-30
						// 					</span>
						// 				</div>
						// 				<div class="m-list-timeline__item">
						// 					<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
						// 					<p class="m-list-timeline__text">
						// 						Observación: 
						// 					</p>
						// 					<span class="m-list-timeline__time" style="width: 25rem;text-align: justify;">
						// 						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						// 					</span>
						// 				</div>

						// 			</div>
						// ';

					});
				});
			}

			var DatatableGestionEquipos={init:function(){var e,a,i;e=datos1,
				a=$(".m_datatable").mDatatable({data:{type:"local",source:e,pageSize:10},
				layout:{theme:"default",class:"",scroll:!1,footer:!1},
				sortable:!0,pagination:!0,search:{input:$("#generalSearch")},
				columns:[
					//{field:"ver",width:10,title:"",sortable:!1,overflow:"visible"},
					{field:"mas",title:"",width:35,textAlign:"center"},
					{field:"dsc_equipo",title:"Equipo",textAlign:"center"},
					{field:"dsc_periferico",title:"Periférico",textAlign:"center"},
					{field:"dsc_marca",title:"Marca",textAlign:"center"},
					{field:"dsc_modelo",title:"Modelo",textAlign:"center"},
					{field:"dsc_estado",title:"Estado",textAlign:"center"},
					{field:"nombres",title:"Usuario",textAlign:"center"},
					//codigo activo no esta en la consulta de la BD
					{{-- {field:"codActivo",title:"Cod. Activo",textAlign:"center"}, --}}
					{field:"serie",title:"Serie",textAlign:"center"},
					{field:"fch_compra",title:"Fec. Compra",type:"date",format:"DD/MM/YYYY"}
				]}),
				i=a.getDataSourceQuery(),
				$("#m_form_periferico").on("change",function(){a.search($(this).val(),"dsc_periferico")}).val(void 0!==i.Status?i.Status:""),
				$("#m_form_marca").on("change",function(){a.search($(this).val(),"dsc_marca")}).val(void 0!==i.Type?i.Type:""),
				$("#m_form_estado").on("change",function(){a.search($(this).val(),"dsc_estado")}).val(void 0!==i.Type?i.Type:""),
				$("#m_form_periferico, #m_form_marca, #m_form_estado").selectpicker()	
			}};
			mQuickSidebargestEquip.init();
			jQuery(document).ready(function(){DatatableGestionEquipos.init()});
		</script>
	</body>
	<!-- end::Body -->
</html>
