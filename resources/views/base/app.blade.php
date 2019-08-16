<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<!-- <link rel="shortcut icon" href="img/fav.png"> -->
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Yunet Shop</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!--
		CSS
		============================================= -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="{{ URL::asset('css/linearicons.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ URL::asset('css/themify-icons.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ URL::asset('css/nice-select.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ URL::asset('css/nouislider.min.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
    @yield('extracss')
</head>

<body>

	<!-- Start Header Area -->
	@if(auth()->user())
	@if(auth()->user()->isAdmin())
	@include('partials.admin_header')
	@elseif(auth()->user()->isCustomer())
	@include('partials.customer_header')
	@endif
	@else
	@include('partials.other_header')
	@endif
	


  @yield('content')
  @yield('modals')

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="{{ URL::asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
 	<script src="{{ URL::asset('js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('js/app.js')}}"></script>
	<script src="{{ URL::asset('js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
 <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
   <script src="{{ URL::asset('js/jquery.ajaxchimp.min.js') }}"></script>

  <script src="{{ URL::asset('js/jquery.sticky.js') }}"></script>
   <script src="{{ URL::asset('js/nouislider.min.js') }}"></script>

  <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ URL::asset('js/gmaps.min.js') }}"></script>
  <script src="{{ URL::asset('js/main.js') }}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	
	@yield('extrajs')
</body>

</html>
