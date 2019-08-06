@extends('base.app')

	<!-- Start Banner Area -->
	@section('content')

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
	</section>
	<!-- End Banner Area -->

	<!--================Order Details Area =================-->
	<section class="order_details section_gap">
		<div class="container">
			<h3 class="title_confirmation">Thank you. Your order has been received.</h3>
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Order Info</h4>
						<ul class="list">
							<li><a href="#"><span>No. Order</span> : {{$order->id}}</a></li>
							<li><a href="#"><span>Tanggal</span> : {{$order->created_at}}</a></li>
							<li><a href="#"><span>Total</span> : {{$order->total}}</a></li>
							<li><a href="#"><span>Pengiriman</span> : {{$order->courier}}</a></li>
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
									<p>{{$product->name}}</p>
								</td>
								<td>
									<h5>{{$order->quantity}}</h5>
								</td>
								<td>
									<p>{{$product->price}}</p>
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
									<p>{{$order->total}}</p>
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
									<p>{{$order->ongkir}}</p>
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
	<!--================End Order Details Area =================-->
	@endsection
