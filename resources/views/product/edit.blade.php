@extends('base.app')
	@section('extracss')
	<link rel="stylesheet" href="{{ URL::asset('css/linearicons.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('css/themify-icons.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('css/nice-select.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('css/nouislider.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('css/ion.rangeSlider.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
	@endsection
	<!-- Start Banner Area -->
	@section('content')

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
	</section>
	<!-- End Banner Area -->

	{!!Form::model($product,['url'=> ['product.update',$product->id],'method'=>'PUT'])!!}
	{!!Form::close()!!}
	<!--================End Single Product Area =================-->

	@endsection

	@section('extrajs')
	<script src="{{ URL::asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="{{ URL::asset('js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.sticky.js') }}"></script>
	<script src="{{ URL::asset('js/nouislider.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
{{-- <script src="{{ URL::asset('js/gmaps.min.js') }}"></script> --}}
<script src="{{ URL::asset('js/main.js') }}"></script>
	@endsection
