<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
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
	@include('partials.header')
		<!-- <div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div> -->
	</header>
	<!-- End Header Area -->

  @yield('content')

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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
 	<!-- <script src="{{ URL::asset('js/vendor/bootstrap.min.js') }}"></script> -->
	<script src="{{ URL::asset('js/app.js')}}"></script>
	<script src="{{ URL::asset('js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
 <!-- <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
   <script src="{{ URL::asset('js/jquery.ajaxchimp.min.js') }}"></script>

  <script src="{{ URL::asset('js/jquery.sticky.js') }}"></script>
   <script src="{{ URL::asset('js/nouislider.min.js') }}"></script>

  <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ URL::asset('js/gmaps.min.js') }}"></script>
  <script src="{{ URL::asset('js/main.js') }}"></script> -->
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	@yield('extrajs')
</body>

</html>
