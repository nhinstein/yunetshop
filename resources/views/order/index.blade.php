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
                        <nav>
                            <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                                @foreach($array as $status => $orders)
                                <li><a class="nav-item nav-link {{$status == 'All' ? 'active' : ''}}" id="nav-{{$status}}-tab" data-toggle="tab" href="#nav-{{$status}}" role="tab" aria-controls="nav-{{$status}}" aria-selected={{$status == 'All' ? 'true' : 'false'}}>{{$status}}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            @foreach($array as $status => $orders)
                            <div class="tab-pane fade {{$status == 'All' ? 'show active' : ''}}" id="nav-{{$status}}" role="tabpanel" aria-labelledby="nav-{{$status}}-tab">
                            @if($orders->count()>0)
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
                                    <a href="{{route('order.show', $order->id)}}"><p>{{$order->invoice->kode}}</p></a>
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
                                     <a href="{{route('invoice.show', $order->id)}}">Lihat Invoice</a><br>
                                     @if($order->invoice->status=='pending')
                                     <a href="{{route('invoice.show', $order->id)}}">Bayar Sekarang</a>
                                     @endif
                                 </td>
                             </tr>
                                                         @endforeach
                         </tbody>
                     </table>
                     {{$orders->links()}}
                     @else
                    <h5 class="center">Tidak ada order</h5>
                    @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
    </div>
</div>
     <!--================End Cart Area =================-->
     <div class="section_gap">
     </div>
	@endsection