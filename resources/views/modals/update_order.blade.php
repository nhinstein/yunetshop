<div class="modal fade" data-backdrop="false" id="modalUpdateOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <!--Header-->
         <div class="modal-header">
           <h4 class="modal-title" id="myModalLabel">Update Order</h4>
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <!--Body-->
         <form class="w3-container w3-display-middle w3-card-4" action="{{route('order.update', $order->id)}}" method="post" id="updateOrderForm" role="form">
            {{csrf_field()}}
         <div class="modal-body">
           <!-- <h2 class="w3-text-blue">Validasi Pembayaran</h2> -->
             
           <div class="form-group {{ $errors->has('no_resi') ? ' has-error' : '' }}">
               <label class="w3-text-blue"><b>No Resi</b></label>
               <input type="text" class="form-control" id="no_resi" name="no_resi" value="{{$order->no_resi}}"></p> 
           </div> 
         <div class="form-group{{ $errors->has('status_id') ? ' has-error' : '' }}">
            <label class="w3-text-blue"><b>Status</b></label>
            <div class="wrapper1">
                <select id="status" class="category_select country_select" name="status_id" required>
                    @foreach($status_list as $status)
                    <option value="{{$status->id}}" {{$status->id == $order->status_id? 'selected':''}}>{{$status->name}}</option>
                    @endforeach
                </select>
              </div>
         </div><!--Footer-->
         <div class="modal-footer">
         <button class="btn btn-primary" data-dismiss="modal">Batal</button>
           <button id="submitUpdate" type="submit" class="btn btn-primary">Update</button>
         </div>
       </div>
    </form>
    </div>
     </div>
    </div>