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
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                @foreach($status_list as $status)
                                <a class="nav-item nav-link" id="nav-{{$status->name}}-tab" data-toggle="tab" href="#nav-{{$status->name}}" role="tab" aria-controls="nav-{{$status->name}}" aria-selected="false">{{$status->name}}</a>
                                @endforeach
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            @foreach($status_list as $status)
                            <div class="tab-pane fade" id="nav-{{$status->name}}" role="tabpanel" aria-labelledby="nav-{{$status->name}}-tab">
                            @if($status->orders->count()>0)
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
													 @foreach($status->orders as $order)
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
                     {{$status->orders->links()}}
                     @else
                    <h5 class="center">Tidak ada order</h5>
                    @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
    </div>
</div>
</section>
     <!-- <section class="cart_area">
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
     </section> -->
     <!--================End Cart Area =================-->
	@endsection