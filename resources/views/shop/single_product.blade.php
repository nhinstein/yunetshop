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

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						@foreach($product->images as $image)
						<div class="single-prd-item">
							<img width="700" height="700" class="img-fluid" src="../{{$image->src}}" alt="">
						</div>
						@endforeach
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>{{ $product->name }}</h3>
						<h2>{{ $product->formatPrice() }}</h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Kategori</span> : {{$product->category->name}}</a></li>
							<li><a href="#"><span>Stok</span> : {{$product->stock}}</a></li>
						</ul>
						<p>{{ $product->description }}</p>
						@if(auth()->user() and auth()->user()->isAdmin())
						@else
						<form action="{{route('cart.store')}}" method="POST">
							{{ csrf_field() }}
						<div class="product_count">
							<label for="qty">Jumlah:</label>
							<input type="number" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
							 class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
						</div>
						<div class="card_area d-flex align-items-center">
							<!-- <a class="primary-btn" href="#">Add to Cart</a> -->
								<input type="hidden" name="id" value="{{ $product->id}}">
								<input type="hidden" name="name" value="{{ $product->name}}">
								<input type="hidden" name="price" value="{{ $product->price}}">
								<button type="submit" class="primary-btn">Add to Cart</button>
						</div>
						</form>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!-- Start related-product Area -->
	<section class="related-product-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Produk Terrkait</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						@foreach ($dealsofweek as $item)
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img width=70 height=70 src="../img/img/{{$item->cover}}" alt=""></a>
								<div class="desc">
									<a href="{{ route('shop.show', $item->slug )}}" class="title">{{$item->name}}</a>
									<div class="price">
										<h6>{{$item->formatPrice()}}</h6>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End related-product Area -->
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
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script> -->
{{-- <script src="{{ URL::asset('js/gmaps.min.js') }}"></script> --}}
<script src="{{ URL::asset('js/main.js') }}"></script>
	@endsection
