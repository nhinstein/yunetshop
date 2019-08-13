<div class="modal fade" data-backdrop="false" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <!--Header-->
         <div class="modal-header">
           <h4 class="modal-title" id="myModalLabel">Validasi Pembayaran</h4>
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <!--Body-->
         {{-- <form class="w3-container w3-display-middle w3-card-4 " method="POST" id="checkOutPaidForm"  action="{{route('checkout.addTransaction')}}" enctype="multipart/form-data"> --}}
         <form class="w3-container w3-display-middle w3-card-4" action="" method="post" id="validasiForm" role="form" enctype="multipart/form-data">
            {{csrf_field()}}
         <div class="modal-body">
           <h2 class="w3-text-blue">Validasi Pembayaran</h2>
           <p>Silahkan verifikasi Pembayaran<br>
           Total yang harus dibayarkan : <span id="total_order"></span></p>
             
           <div class="form-group {{ $errors->has('t_name') ? ' has-error' : '' }}">
               <label class="w3-text-blue"><b>Nama</b></label>
               <input type="text" class="form-control" id="t_name" name="t_name" readonly></p> 
           </div> 
             
           <div class="form-group{{ $errors->has('t_norek') ? ' has-error' : '' }}">
               <label class="w3-text-blue"><b>No. Rek</b></label>
               <input type="number" class="form-control" name="t_norek" id="t_norek" readonly></p>  
           </div>  
             
           <div class="form-group {{ $errors->has('t_total') ? ' has-error' : '' }}">
               <label class="w3-text-blue"><b>Total</b></label>
               <input type="number" class="form-control" id="t_total" name="t_total"  readonly></p>
           </div>
           
           <a href="#" ><img width=300 height=300 src="" alt="" id="tsrc"></a>
           {{-- </div> --}}
        

         <!--Footer-->
         <div class="modal-footer">
         <button id="submitPaid"  type="submit" name="btnSubmit" class="btn btn-primary" value="btnReject">Reject</button>
           <button id="submitPaid"  type="submit" name="btnSubmit" class="btn btn-primary" value="btnValid">Valid</button>
         </div>
       </div>
    </form>
    </div>
     </div>
    </div>