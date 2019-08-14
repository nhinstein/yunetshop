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
                                @foreach($array as $status => $transactions)
                                <li><a class="nav-item nav-link {{$status == 'All' ? 'active' : ''}}" id="nav-{{$status}}-tab" data-toggle="tab" href="#nav-{{$status}}" role="tab" aria-controls="nav-{{$status}}" aria-selected={{$status == 'All' ? 'true' : 'false'}}>{{$status}}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            @foreach($array as $status => $transactions)
                            <div class="tab-pane fade {{$status == 'All' ? 'show active' : ''}}" id="nav-{{$status}}" role="tabpanel" aria-labelledby="nav-{{$status}}-tab">
                            @if($transactions->count()>0)
                            <table class="table">
                         <thead>
                             <tr>
                                 <th scope="col">Kode</th>
                                 <th scope="col">Order</th>
                                 <th scope="col">No Rek</th>
                                 <th scope="col">Nama</th>
                                 <th scope="col">Status</th>
                             </tr>
                         </thead>
                         <tbody>
													 @foreach($transactions as $transaction)
                             <tr>
                                 <td>
                                    <p>{{$transaction->id}}</p>
                                 </td>
                                 <td>
                                    <p>{{$transaction->order->invoice->kode}}</p>
                                 </td>
                                 <td>
                                     <p>{{$transaction->no_rekening}}</p>
                                 </td>
                                 <td>
                                     <p>{{$transaction->name}}</p>
                                 </td>
                                 <td>
                                     <p>{{$transaction->status->name}}</p>
                                 </td>
                             </tr>
                                                         @endforeach
                         </tbody>
                     </table>
                     {{-- {{$orders->links()}} --}}
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
     {{-- @if(auth()->user()->isAdmin())
     @include('modals.admin_validate')
     @elseif(auth()->user()->isCustomer())
     @include('modals.customer_pay')
     @endif --}}

     
    {{-- @endsection
    @section('extrajs')
    <script>
    var url = "{{ route("order.index") }}"</script>
    @if(auth()->user()->isAdmin())
    <script src="{{ URL::asset('js/validasi.js') }}"></script>
    @elseif(auth()->user()->isCustomer())
    <script src="{{ URL::asset('js/add_transaction.js') }}"></script>
    @endif
    @endsection --}}