<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>@yield('title')</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description"/>
		<meta name="keywords" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title"/>
		<meta property="og:url" content="https://keenthemes.com/products/ceres-html-pro" />
		<meta property="og:site_name"/>
		<link rel="canonical" href="Https://preview.keenthemes.com/ceres-html-free" />
		<link rel="shortcut icon" href="{{ asset('assets/media/logos/ssu-logo.png') }}" />

		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{URL::to('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{URL::to('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{URL::to('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<link href="{{ URL::to('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		
		{{--Font Awesome--}}
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
		 {{-- toaster --}}
		 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	
	<style>
		.avatar-upload {
			position: relative;
			max-width: 205px;
			margin: 0 auto; /* Center the upload area */
		}
		.avatar-edit {
			position: absolute;
			right: 12px;
			z-index: 1;
			top: 10px;
		}
		.avatar-edit input {
			display: none;
		}
		.avatar-edit label {
			display: inline-block;
			width: 34px;
			height: 34px;
			margin-bottom: 0;
			border-radius: 100%;
			background: #FFFFFF;
			border: 1px solid transparent;
			box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
			cursor: pointer;
			font-weight: normal;
			transition: all .2s ease-in-out;
		}
		.avatar-edit label:hover {
			background: #f1f1f1;
			border-color: #d6d6d6;
		}
		.avatar-edit label:after {
			content: "\f040";
			font-family: 'FontAwesome';
			color: #757575;
			position: absolute;
			top: 10px;
			left: 0;
			right: 0;
			text-align: center;
			margin: auto;
		}
		.avatar-preview {
			width: 192px;
			height: 192px;
			position: relative;
			border-radius: 100%;
			border: 6px solid #F8F8F8;
			box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
			overflow: hidden; /* Ensure the image stays within the circle */
		}
		#imagePreview {
			width: 100%;
			height: 100%;
			border-radius: 100%;
			background-size: cover; /* Ensure the image covers the circle */
			background-position: center;
			background-repeat: no-repeat;
			position: absolute; /* Positioning adjustments */
		}
	</style>
	<body id="kt_body" style="background-image: url('{{ asset('assets/media/patterns/header-bg-dark.png') }}');" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
	
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
                    @include('layouts.Partials.Admin.navbar')
					<!--end::Header-->
                        <!--begin::Content-->
                         @yield('content')
                        <!--end::Coontent-->
					<!--begin::Footer-->
					@include('layouts.Partials.Admin.footer')
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		

		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>

		

		<!--end::Scrolltop-->
		<!--end::Main-->
		<script>var hostUrl = "assets/";</script>
		<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{URL::to('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{URL::to('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{URL::to('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{URL::to('assets/js/custom/widgets.js')}}"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
		<script src="{{ URL::to('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		  <!-- toastr script -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

		{{-- AJAX SETUP --}}
		<script type="text/javascript">

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".table").DataTable({
						"language": {
							"lengthMenu": "Show _MENU_",
						},
						"dom":
							"<'row mb-2'" +
							"<'col-sm-6 d-flex align-items-center justify-conten-start dt-toolbar'l>" +
							"<'col-sm-6 d-flex align-items-center justify-content-end dt-toolbar'f>" +
							">" +

							"<'table-responsive'tr>" +

							"<'row'" +
							"<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
							"<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
							">"
					});
				});


				//Password Visibility 
				$(document).ready(function() {
					// Toggle password visibility
					$('.toggle-password').click(function() {
						const input = $(this).siblings('input');
						const type = input.attr('type') === 'password' ? 'text' : 'password';
						input.attr('type', type);
						$(this).toggleClass('fa-eye fa-eye-slash');
					});

					// Image upload preview
					function readURL(input) {
						if (input.files && input.files[0]) {
							var reader = new FileReader();
							reader.onload = function(e) {
								$('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
								$('#imagePreview').hide();
								$('#imagePreview').fadeIn(650);
							}
							reader.readAsDataURL(input.files[0]);
						}
					}
					$("#imageUpload").change(function() {
						readURL(this);
					});
				});

				//Image
				$(document).ready(function() {
					function readURL(input) {
						if (input.files && input.files[0]) {
							var reader = new FileReader();
							reader.onload = function(e) {
								$('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
								$('#imagePreview').hide();
								$('#imagePreview').fadeIn(650);
							}
							reader.readAsDataURL(input.files[0]);
						}
					}
					$("#imageUpload").change(function() {
						readURL(this);
					});
				});

				//Toastr
				@if (Session::has('message'))
					toastr.options.progressBar = true;
					var type = "{{ Session::get('alert-type', 'info') }}";
					switch (type) {
						case 'info':
							toastr.info("{{ Session::get('message') }}");
							break;
						case 'success':
							toastr.success("{{ Session::get('message') }}");
							break;
						case 'warning':
							toastr.warning("{{ Session::get('message') }}");
							break;
						case 'error':
							toastr.error("{{ Session::get('message') }}");
							break;
					}
				@endif



		</script>

		
		 {{-- @yield('script') --}}

		 @stack('script')
	</body>
	<!--end::Body-->
	
</html>