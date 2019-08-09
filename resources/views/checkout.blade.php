@extends('base.app')

    <!-- Start Banner Area -->
    
        @section('content')
        <form class="row contact_form" action="{{route('checkout.store')}}" method="post" id="checkOutForm" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}

	<!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->

    <section class="checkout_area section_gap">
        <div class="container">
					@if(Cart::count()>0)
            <div class="billing_details">
							{{-- <form class="row contact_form" action="{{route('checkout.store')}}" method="post" id="checkOutForm" role="form"> --}}
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>

													
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
                                <input type="number" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP" required>
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
                            @foreach($type_payment as $type)
                            <input type="radio" name="type_bayar" value="{{$type->id}}">{{$type->name}}<br>
                            @endforeach
                            <button type="button" class="primary-btn" data-toggle="modal" data-target="#modalCart">Launch modal</button>
														<!-- <button type="submit" class="primary-btn">Proses Order</button> -->
                        </div>
                    </div>
                </div>

								{{-- </form> --}}
            </div>
						@else
						<h5 class="center">Your Cart is Empty</h5>
						@endif
        </div>

    </section>

    <div class="modal fade" data-backdrop="false" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Your cart</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      {{-- <form class="w3-container w3-display-middle w3-card-4 " method="POST" id="checkOutPaidForm"  action="{{route('checkout.addTransaction')}}" enctype="multipart/form-data"> --}}
      <!-- <form class="row contact_form" action="#" method="post" id="checkOutPaidForm" role="form" enctype="multipart/form-data"> -->
      <div class="modal-body">
        {{ csrf_field() }}
        <h2 class="w3-text-blue">Payment Form</h2>
        <p>Silahkan verifikasi Pembayaran</p>
        <p>      
        <label class="w3-text-blue"><b>Nama</b></label>
        <input type="text" class="form-control" name="t_name"></p>  
        <label class="w3-text-blue"><b>No. Rek</b></label>
        <input type="number" class="form-control" name="t_norek"></p>   
        <label class="w3-text-blue"><b>Total</b></label>
        <input type="number" class="form-control" name="t_total"></p>
        <label class="w3-text-blue"><b>Upload Gambar</b></label>
        <input type="file" name="t_file">
      

      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button id="submitOrder" type="submit" name="btnSubmit" class="btn btn-outline-primary" data-dismiss="modal" value="btn1">Bayar Nanti</button>
        <button id="submitPaid"  type="submit" name="btnSubmit" class="btn btn-primary" value="btn2">Bayar Sekarang</button>
      </div>
    </div>
  </div>
</div>
</form>
	
	@endsection

	@section('modals')
	<!-- Button trigger modal-->


<!-- Modal: modalCart -->

<!-- Modal: modalCart -->
    @endsection
    
</form>

	@section('extrajs')
	<!-- {{-- <script src="{{ URL::asset('js/main.js') }}"></script> --}} -->
<!-- 	
	<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
	<script>paypal.Buttons().render('body');</script> -->
	<script>
	var url = "{{ route("checkout.get_city") }}"
	var url_cek = "{{ route("checkout.get_ongkir") }}"
	</script>
  <script src="{{ URL::asset('js/checkout.js') }}"></script>
  <script>
    submitForms = function(){
    document.getElementById("checkOutForm").submit();
    document.getElementById("checkOutPaidForm").submit();
}
  </script>
	@endsection
