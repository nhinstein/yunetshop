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
     <section class="cart_area">
         <div class="container">
					 @if($orders->count()>0)
             <div class="cart_inner">
                 <div class="table-responsive">
                     <table class="table">
                         <thead>
                             <tr>
                                 <th scope="col">Invoice</th>
                                 <th scope="col">Tanggal</th>
                                 <th scope="col">Status</th>
                                 <th scope="col">Total</th>
                                 <th scope="col">Aksi</th>
                             </tr>
                         </thead>
                         <tbody>
													 @foreach($orders as $order)
                             <tr>
                                 <td>
                                    <a href="{{route('order.show', $order->id)}}"><p>{{$order->invoice}}</p></a>
                                 </td>
                                 <td>
                                    <p>{{$order->created_at}}</p>
                                 </td>
                                 <td>
                                     <p>{{$order->status->name}}</p>
                                 </td>
                                 <td>
                                     <h5>{{$order->total}}</h5>
                                 </td>
                                 <td>
                                     <a href="{{route('invoice.show', $order->id)}}">Lihat Invoice</a>
                                 </td>
                             </tr>
                                                         @endforeach
                         </tbody>
                     </table>
                     {{$orders->render()}}
                 </div>
             </div>
            @else
            <h5 class="center">Tidak ada order</h5>
            @endif
         </div>
     </section>
     <!--================End Cart Area =================-->
	@endsection