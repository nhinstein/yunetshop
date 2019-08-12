@extends('base.app')


@section('content')

<section class="features-area section_gap">
      </section>
      

@if(session()->has('success_message'))
<div class="alert alert-success">
    {{session()->get('success_message')}}
</div>
@endif
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
                                             <img width=100 hegight=100 src="img/img/{{$product->cover}}" alt="">
                                         </div>
                                         <div class="media-body">
                                            <a href="{{route('product.show',$product->slug)}}"><p>{{$product->name}}</p></a>
                                         </div>
                                     </div>
                                    
                                 </td>
                                 <td>
                                    <p>{{$product->formatPrice()}}</p>
                                 </td>
                                 <!-- <td>
                                 </td> -->
                                 <td>
                                    <p>{{$product->stock}}</p>
                                 </td>
                             </tr>
                                                         @endforeach
                         </tbody>
                     </table>
                                                         
                     <div class="pagination">
                             {{$products->links()}}
                             <!-- <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                             <a href="#" class="active">1</a>
                             <a href="#">2</a>
                             <a href="#">3</a>
                             <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                             <a href="#">6</a>
                             <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> -->
                         </div>
                 </div>
             </div>
            @else
            <h5 class="center">Tidak ada order</h5>
            @endif
         </div>
     </section>
@endsection
