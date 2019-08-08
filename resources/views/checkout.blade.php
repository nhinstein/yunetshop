@extends('base.app')

	<!-- Start Banner Area -->
	@section('content')

	<!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->

    <section class="checkout_area section_gap">
        <div class="container">
					@if(Cart::count()>0)
            <div class="billing_details">
							<form class="row contact_form" action="{{route('checkout.store')}}" method="post" id="contactForm" role="form">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>

													{{ csrf_field() }}
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="first" name="name" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="number" class="form-control" id="number" name="number" placeholder="No Hp" required>
                            </div>
													  <div class="col-md-12 form-group p_star">
															@if(Auth::user())
                                <input type="email" class="form-control" id="email" name="email" value="{{auth()->user()->email}}" readonly>
																@else
																<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
																@endif
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="courir_select country_select" name="courir" required> 
																	@foreach($courierlist as $key => $courir)
																	<option value="{{$key}}">{{$courir}}</option>
																		@endforeach
                                </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
							<div class="wrapper1">
								<select id="province" class="province_select country_select" name="province" required>
																	@foreach($provinces as $province)
																	<option value="{{$province->id}}">{{$province->name}}</option>
																		@endforeach
                                </select>
							</div>
                                
                            </div>
                            <div class="col-md-12 form-group p_star">
								
							<div class="wrapper2">
                                <select id="city" class="city_select country_select" name="city">
                                </select>
							</div>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="alamat" placeholder="Alamat" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP" required>
                            </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
													{{Cart::total()}}
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">Product <span>Subtotal</span></a></li>
																@foreach(Cart::content() as $item)
                                <li><a href="#">{{ str_limit($item->model->name, $limit = 10, $end = '...') }} <span class="middle">x {{$item->qty}}</span> <span class="last">{{$item->model->formatCart($item->subtotal)}}</span></a></li>
																@endforeach
																<!-- <li><a href="#">Fresh Tomatoes <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                                <li><a href="#">Fresh Brocoli <span class="middle">x 02</span> <span class="last">$720.00</span></a></li> -->
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Berat <span>{{$item->model->totalWeight($item->qty)}}</span></a></li>
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Ongkir <span id='ongkir'></span></a></li>
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Total <span id=total>{{$item->model->formatCart($item->total)}}</span></a></li>
                            </ul>
														<button type="submit" class="primary-btn">Proses Order</button>
                        </div>
                    </div>
                </div>

								</form>
            </div>
						@else
						<h5 class="center">Your Cart is Empty</h5>
						@endif
        </div>
    </section>

	@endsection

	@section('extrajs')
	<!-- {{-- <script src="{{ URL::asset('js/main.js') }}"></script> --}} -->
	<script>
	var url = "{{ route("checkout.get_city") }}"
	var url_cek = "{{ route("checkout.get_ongkir") }}"
	</script>
	<script src="{{ URL::asset('js/checkout.js') }}"></script>
	<!-- <script>
	$(function() {
		$('.province_select').on('change', function(){
			$province = this.value
			var url = '{{ route("checkout.get_city") }}';
			var url_cek = '{{ route("checkout.get_ongkir") }}';
			console.log(url);
			$.ajax({
				type: 'GET',
				url: url,
				data: {
					province : this.value
				},
				success: function(data){
							$('.city_select').empty();
							var cities = data.cities;
							$.each(cities, function(key, value) {
						$('.city_select')
							.append($("<option></option>")
												.attr("value", value.id)
												.text(value.name));
												
							
							});
							$('select').niceSelect('update');
				},
				error: function(xhr){
					console.log(xhr.responseText);
				}
			});
			})
	});
	</script>
	<script>
	(function(){
		const classname = document.querySelectorAll('.city_select')
		Array.from(classname).forEach(function(element){
			element.addEventListener('change', function(){
				var courir = $('.courir_select option:selected').val();
				var city = this.value;
				var url_cek = '{{ route("checkout.get_ongkir") }}';
				$.ajax({
						type: 'GET',
						url: url_cek,
						data: {
							destination : city,
							courir : courir
						},
						success: function(data){
							var ongkir = data.ongkir;
							var sum = data.sum;
								document.getElementById("ongkir").innerHTML = ongkir;
								 $('#total').empty();
								$('#total').append('<p>' + sum + '</p>');
						},
						error: function(xhr){
								console.log(xhr.responseText);
						}
				});
			})
		})
	})();
	</script> --}}
		 <script>
		(function(){
			const cityname = document.querySelectorAll('.city_select')
			Array.from(cityname).forEach(function(el2){
				el2.addEventListener('change', function(){
					var courir = $('.courir_select option:selected').val()
					console.log(courir, this.value)
					axios.post('/checkout/get_ongkir', {
						destination : this.value,
						courir : courir
					})
					.then(function(response){
						var ongkir = response.data.ongkir[0].costs[1].cost[0].value;
							document.getElementById("ongkir").innerHTML = ongkir;
							console.log(ongkir);
					})
					.catch(function(error){
						console.log(error);
					});
				})
			})
		})();	
		</script> -->
		@endsection
