@extends('base.app')

	<!-- Start Banner Area -->
	@section('content')

	<!-- Start Banner Area -->
     <section class="banner-area organic-breadcrumb">
     </section>
     <!-- End Banner Area -->
		 @if(session()->has('success_message'))
		 <div class="alert alert-success">
			 {{session()->get('success_message')}}
		 </div>
		 @endif

     <!--================Cart Area =================-->
     <section class="order_details section_gap">
		<div class="container">
			<div class="row order_d_inner">
				<div class="col-lg-6">
					<div class="details_item">
						<h4>Order Info</h4>
						<ul class="list">
							<li><a href=""><span>No. Invoice</span> : {{$order->invoice->kode}}</a></li>
							<li><a href=""><span>Tanggal</span> : {{$order->created_at}}</a></li>
							<li><a href=""><span>Total</span> : {{$order->formatPrice($order->total_order)}}</a></li>
							<li><a href=""><span>Pengiriman</span> : {{$order->courier}}</a></li>
							<li><a href=""><span>No Resi</span> : {{$order->no_resi}}</a></li>
							<li><a href=""><span>Status</span> : {{$order->status->name}}</a></li>
							@if(auth()->user()->isAdmin())
							<button class="delete-product genric-btn success radius" data-toggle="modal" data-target="#modalUpdateOrder" data-oid="{{$order->id}}" data-oresi="{{$order->no_resi}}"
							data-status="{{$order->status->id}}">Update Order</button>
							<!-- <form class="row contact_form" method="POST" id="contactForm" role="form">
							{{ csrf_field() }}
							<li><a href=""><span>No Resi</span> : </a><input type="text" class="form-control" id="no_resi" name="no_resi" value="{{$order->no_resi}}"></li><br>
							<li><a href=""><span>Status</span> : </a>
                            <select class="country_select" name="status_id">
																@foreach($status_list as $status)
							<option {{$status->id == $order->status_id ? 'selected' : ''}} value="{{$status->id}}">{{$status->name}}</option>
								@endforeach
                                </select></li><br>
							<li><button type="submit" class="genric-btn primary small" action="{{route('order.update', $order->id)}}">Simpan</button></li>

              				  </form> -->
							@endif
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="details_item">
						<h4>Alamat</h4>
						<ul class="list">
							<li><a href="#"><span>Alamat</span> : {{$order->address}}</a></li>
							<li><a href="#"><span>Kota</span> : {{$order->city->name}}</a></li>
							<li><a href="#"><span>Provinsi</span> : {{$order->province->name}}</a></li>
							<li><a href="#"><span>Kode Pos </span> : {{$order->postalcode}}</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Detail Order</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Produk</th>
								<th scope="col">Jumlah</th>
								<th scope="col">Sub Total</th>
							</tr>
						</thead>
						<tbody>
						@foreach($order->products as $product)
							<tr>
								<td>
                                <a href="{{route('shop.show', $product->slug)}}"><p>{{$product->name}}</p></a>
							    </td>
								<td>
									<h5>{{$product->pivot->quantity}}</h5>
								</td>
								<td>
									<p>{{$product->formatPrice()}}</p>
								</td>
							</tr>
						@endforeach
							<tr>
								<td>
									<h4>Total Product</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>{{$order->formatPrice($order->total)}}</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Ongkir</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>{{$order->formatPrice($order->ongkir)}}</p>
								</td>
							</tr>
							<!-- <tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>$2210.00</p>
								</td>
							</tr> -->
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	 <!--================End Cart Area =================-->
	 @if(auth()->user() and auth()->user()->isAdmin())
	 @include('modals.update_order')
	 @endif
	@endsection

@section('extrajs')
<!-- <script>
$("#updateBtn").on('click', function(){
    $("#addProduct").submit();
});</script> -->
@endsection

	