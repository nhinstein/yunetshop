<div class="modal fade" data-backdrop="false" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <!--Header-->
         <div class="modal-header">
           <h4 class="modal-title" id="myModalLabel">Your cart</h4>
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <!--Body-->
         {{-- <form class="w3-container w3-display-middle w3-card-4 " method="POST" id="checkOutPaidForm"  action="{{route('checkout.addTransaction')}}" enctype="multipart/form-data"> --}}
          <form class="w3-container w3-display-middle w3-card-4" action="{{route('product.store')}}" method="post" id="bayarForm" role="form" enctype="multipart/form-data">
         {{csrf_field()}}
            <div class="modal-body">
           <h2 class="w3-text-blue">Tambah Produk Baru</h2>
           <p>Isi dengan lengkap form di bawah ini
           <p>
           <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
               <label class="w3-text-blue"><b>Nama</b></label>
               <input type="text" class="form-control" name="name"></p> 
           </div> 
           <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
               <label class="w3-text-blue"><b>Harga</b></label>
               <input type="number" class="form-control" name="price"></p>  
           </div>  
             
           <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
               <label class="w3-text-blue"><b>Berat</b></label>
               <input type="number" class="form-control" name="weight"></p>  
           </div>  
             
           <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
               <label class="w3-text-blue"><b>Stok</b></label>
               <input type="number" class="form-control" name="stock"></p>  
           </div>  
             
           <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
               <label class="w3-text-blue"><b>Upload Gambar</b></label>
               <input type="file" name="file[]" multiple>
         </div>
         
         <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
            <label class="w3-text-blue"><b>Category</b></label>
            <div class="wrapper1">
                <select id="category" class="category_select country_select" name="category" required>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                  </select>
              </div>
         </div>
         <!--Footer-->
         <div class="modal-footer">
           <button id="submitProduk"  type="submit" name="btnSubmit" class="btn btn-primary" value="btn3">Simpan</button>
         </div>
       </div>
    </div>
     </div>
    </div>