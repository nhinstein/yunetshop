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
          <form class="w3-container w3-display-middle w3-card-4" action="" method="post" id="bayarForm" role="form" enctype="multipart/form-data">
         {{csrf_field()}}
            <div class="modal-body">
           <h2 class="w3-text-blue">Payment Form</h2>
           <p>Silahkan verifikasi Pembayaran ke :<br>
           No Rekening BCA : 4682358625<br>
           Atas nama : Sri Wahyuni<br>
           Total yang harus dibayarkan : <span id="total_order"></span><br>
           <p>
           <div class="form-group {{ $errors->has('t_name') ? ' has-error' : '' }}">
               <label class="w3-text-blue"><b>Nama</b></label>
               <input type="text" class="form-control" name="t_name"></p> 
           </div> 
             
           <div class="form-group{{ $errors->has('t_norek') ? ' has-error' : '' }}">
               <label class="w3-text-blue"><b>No. Rek</b></label>
               <input type="number" class="form-control" name="t_norek"></p>  
           </div>  
             
           <div class="form-group {{ $errors->has('t_total') ? ' has-error' : '' }}">
               <label class="w3-text-blue"><b>Total</b></label>
               <input type="number" class="form-control" name="t_total"></p>
           </div>  
             
           <div class="form-group{{ $errors->has('t_file') ? ' has-error' : '' }}">
               <label class="w3-text-blue"><b>Upload Gambar</b></label>
               <input type="file" name="t_file">
         </div>
         <!--Footer-->
         <div class="modal-footer">
           <button id="submitPaid"  type="submit" name="btnSubmit" class="btn btn-primary" value="btn3">Bayar Sekarang</button>
         </div>
       </div>
    </div>
     </div>
    </div>