@extends('base.app')


@section('content')
<section class="cart_area">
         <div class="container">
					 @if($products->count()>0)
             <div class="cart_inner">
                 <div class="table-responsive">
                     <table class="table">
                         <thead>
                             <tr>
                                 <th scope="col">Nama</th>
                                 <th scope="col">Harga</th>
                                 <!-- <th scope="col">Status</th> -->
                                 <th scope="col">Stok</th>
                             </tr>
                         </thead>
                         <tbody>
													 @foreach($products as $product)
                             <tr>
                                 <td>
                                   
                                    <div class="media">
                                         <div class="d-flex">
                                             <img width=100 hegight=100 src="img/img/{{$product->image_src}}" alt="">
                                         </div>
                                         <div class="media-body">
                                            <a href="#"><p>{{$product->name}}</p></a>
                                         </div>
                                     </div>
                                    
                                 </td>
                                 <td>
                                    <p>{{$product->price}}</p>
                                 </td>
                                 <!-- <td>
                                 </td> -->
                                 <td>
                                     <h5>{{$product->quantity}}</h5>
                                 </td>
                             </tr>
														 @endforeach
                         </tbody>
                     </table>
                 </div>
             </div>
            @else
            <h5 class="center">Tidak ada order</h5>
            @endif
         </div>
     </section>
<section class="features-area section_gap">
  <div class="container">
  </div>
</section>
<div class="container">

    <div class="card bg-light mt-3">

        <div class="card-header">

            Excel Import

        </div>

        <div class="card-body">

            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">

              {{ csrf_field() }}
              {{ method_field('post') }}

                <input type="file" name="file" class="form-control">

                <br>

                <button class="btn btn-success">Import Products</button>

            </form>

        </div>

    </div>

</div>
<section class="features-area section_gap">
  <div class="container">
  </div>
</section>
@endsection
