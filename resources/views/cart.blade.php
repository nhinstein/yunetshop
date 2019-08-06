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
                                             <img width=100 hegight=100 src="img/img/{{$item->model->image_src}}" alt="">
                                         </div>
                                         <div class="media-body">
                                             <a href="{{route('shop.show', $item->model->slug)}}"><p>{{$item->model->name}}</p></a>
                                         </div>
                                     </div>
                                 </td>
                                 <td>
                                     <h5>{{$item->model->formatPrice()}}</h5>
                                 </td>
                                 <td>
                                     <select class="qty" data-id="{{$item->rowId}}">

																			 <option {{$item->qty == 1 ? 'selected' : ''}}>1</option>
																			 <option {{$item->qty == 2 ? 'selected' : ''}}>2</option>
																			 <option {{$item->qty == 3 ? 'selected' : ''}}>3</option>
																			 <option {{$item->qty == 4 ? 'selected' : ''}}>4</option>
																			 <option {{$item->qty == 5 ? 'selected' : ''}}>5</option>
																				 <option {{$item->qty == 6 ? 'selected' : ''}}>6</option>
																				 <option {{$item->qty == 7 ? 'selected' : ''}}>7</option>
																				 <option {{$item->qty == 8 ? 'selected' : ''}}>8</option>
																				 <option {{$item->qty == 9 ? 'selected' : ''}}>9</option>
																				 <option {{$item->qty == 10 ? 'selected' : ''}}>10</option>
																					 <option {{$item->qty == 11 ? 'selected' : ''}}>11</option>
																					 <option {{$item->qty == 12 ? 'selected' : ''}}>12</option>
																					 <option {{$item->qty == 13 ? 'selected' : ''}}>13</option>
																					 <option {{$item->qty == 14 ? 'selected' : ''}}>14</option>
																					 <option {{$item->qty == 15 ? 'selected' : ''}}>15</option>
																					 <option {{$item->qty == 16 ? 'selected' : ''}}>16</option>
																					 <option {{$item->qty == 17 ? 'selected' : ''}}>17</option>
																					 <option {{$item->qty == 19 ? 'selected' : ''}}>18</option>
																		 </select>
                                 </td>
                                 <td>
                                     <h5>{{$item->model->formatCart($item->subtotal)}}</h5>
                                 </td>
                                 <td>
																		 <form action="{{route('cart.destroy', $item->rowId)}}" method="POST">
																			 {{csrf_field()}}
																			 {{method_field('DELETE')}}
																			 <button type="submit">Remove</button>
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
	(function(){
		const classname = document.querySelectorAll('.qty')
		Array.from(classname).forEach(function(element){
			element.addEventListener('change', function(){
				const dataId = element.getAttribute('data-id')
				axios.patch(`/cart/${dataId}`, {
					qty : this.value
				})
				.then(function(response){
					console.log(response);
					window.location.href ="{{route('cart.index')}}"
				})
				.catch(function(error){
					console.log(error);
				});
			})
		})
	})();
	</script>
	@endsection
