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

         @if(session()->has('errors'))
		 <div class="alert alert-danger">
         @foreach(session()->get('errors') as $error)
             {{$error}}<br>
         @endforeach
		 </div>
		 @endif

     <!--================Cart Area =================-->
     <section class="cart_area">
         <div class="container">
					 @if(Cart::count()>0)
             <div class="cart_inner">
                 <div class="table-responsive">
                     <table class="table">
                         <thead>
                             <tr>
                                 <th scope="col">Product</th>
                                 <th scope="col">Price</th>
                                 <th scope="col">Quantity</th>
                                 <th scope="col">Sub Total</th>
                             </tr>
                         </thead>
                         <tbody>
													 @foreach(Cart::content() as $item)
                             <tr>
                                 <td>
                                     <div class="media">
                                         <div class="d-flex">
                                             <img width=100 height=100 src="img/img/{{$item->model->cover}}" alt="">
                                         </div>
                                         <div class="">
                                                <a href="{{route('shop.show', $item->model->slug)}}"><p>{{ str_limit($item->model->name, $limit = 20, $end = '...') }}</p></a>
                                         </div>
                                     </div>
                                 </td>
                                 <td>
                                     <h5>{{$item->model->formatPrice()}}</h5>
                                 </td>
                                 <td>
                                        <div class="wrapper">
                                     <select id="qty" class="qty" data-id="{{$item->rowId}}" data-stock="{{$item->model->stock}}">
                                        @for($i=1; $i<11; $i++)
                                        <option {{$item->qty == $i ? 'selected' : ''}}>{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                </td>
                                 <td>
                                     <h5>{{$item->model->formatCart($item->subtotal)}}</h5>
                                 </td>
                                 <td>
																		 <form action="{{route('cart.destroy', $item->rowId)}}" method="POST">
																			 {{csrf_field()}}
																			 {{method_field('DELETE')}}
																			 <button class="genric-btn danger small" type="submit">Remove</button>
																		 </form>
	       															 <!-- <form action="{{route('cart.update', $item->rowId)}}" method="POST">
																				 {{method_field('UPDATE')}}
																				 {{csrf_field()}}
																				 <button type="submit">update</button>
																			 </form> -->
                                 </td>
                             </tr>
														 @endforeach
                             <tr>
                                 <td>

                                 </td>
                                 <td>

                                 </td>
                                 <td>
                                     <h5>Total</h5>
                                 </td>
                                 <td>
                                     <h5>{{Cart::total()}}</h5>
                                 </td>
                             </tr>
                             <tr class="out_button_area">
                                 <td>

                                 </td>
                                 <td>

                                 </td>
                                 <td>

                                 </td>
                                 <td>
                                     <div class="checkout_btn_inner d-flex align-items-center">
                                         <a class="gray_btn" href="{{route('shop.index')}}">Lanjut Belanja</a>
                                         <a class="primary-btn" href="{{route('checkout.index')}}">Checkout</a>
                                     </div>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
						 @else
						 <h5 class="center">Cart is Empty</h5>
						 @endif
         </div>
     </section>
     <!--================End Cart Area =================-->
	@endsection

    @section('extrajs')
    <script>
    var url_cart = "{{route('cart.index')}}"</script>
    <script src="{{ URL::asset('js/cart_add.js') }}"></script>
	@endsection
