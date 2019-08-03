@extends('base.app')

	<!-- Start Banner Area -->
	@section('content')

	<!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>
                        <form class="row contact_form" action="#" method="post">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="first" name="name" placeholder="Nama Lengkap">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="number" name="number" placeholder="No Hp">
                            </div>
													  <div class="col-md-12 form-group p_star">
															@if(Auth::user())
                                <input type="text" class="form-control" id="email" name="email" value="{{auth()->user()->email}}" readonly>
																@else
																<input type="text" class="form-control" id="email" name="email" placeholder="Email">
																@endif
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="courir_select country_select">
																	@foreach($courierlist as $key => $courir)
																	<option value="{{$key}}">{{$courir}}</option>
																		@endforeach
                                </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="province_select country_select">
																	<option value="">---------</option>
																	@foreach($provinces as $province)
																	<option value="{{$province->id}}">{{$province->name}}</option>
																		@endforeach
                                </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="city_select country_select">
                                </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="add1">
                                <span class="placeholder" data-placeholder="Alamat"></span>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
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
                            <a class="primary-btn" href="#">Proses Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	@endsection

	@section('extrajs')
	<!-- <script src="{{ URL::asset('js/main.js') }}"></script> -->
	<script>
	(function(){
		const classname = document.querySelectorAll('.province_select')
		Array.from(classname).forEach(function(element){
			element.addEventListener('change', function(){
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
				        console.log(data.data);
								$('.city_select').empty();
								var cities = data.cities;
								$('.city_select')
								 .append($("<option></option>")
														.attr("value", "")
														.text("---------"));
								$.each(cities, function(key, value) {
							$('.city_select')
							 .append($("<option></option>")
													.attr("value", value.id)
													.text(value.name));
								});
				    },
				    error: function(xhr){
				        console.log(xhr.responseText);
				    }
				});
			})
		})
	})();
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
							var ongkir = data.ongkir[0].costs[1].cost[0].value;
								document.getElementById("ongkir").innerHTML = ongkir;
								$total_order = $item->model->formatCart(($item->total + ongkir));
								document.getElementById("total").innerHTML = $total_order;
								console.log(ongkir);
						},
						error: function(xhr){
								console.log(xhr.responseText);
						}
				});
			})
		})
	})();
	</script>
		<!-- <script>
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
