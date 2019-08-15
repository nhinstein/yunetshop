
<form class="w3-container w3-display-middle w3-card-4 w3-padding-16" method="POST" id="payment-form"
action="{!! URL::to('paypal') !!}">
{{ csrf_field() }}
<div class="modal fade" data-backdrop="false" id="modalPaypal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <!--Header-->
         <div class="modal-header">
           <h4 class="modal-title" id="myModalLabel">Payment Form</h4>
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <div class="modal-body">
            <div class="w3-container">
                @if ($message = Session::get('success'))
                <div class="w3-panel w3-green w3-display-container">
                    <span onclick="this.parentElement.style.display='none'"
                    class="w3-button w3-green w3-large w3-display-topright">&times;</span>
                    <p>{!! $message !!}</p>
                </div>
                <?php Session::forget('success');?>
                @endif
        
                @if ($message = Session::get('error'))
                <div class="w3-panel w3-red w3-display-container">
                    <span onclick="this.parentElement.style.display='none'"
                    class="w3-button w3-red w3-large w3-display-topright">&times;</span>
                    <p>{!! $message !!}</p>
                </div>
                <?php Session::forget('error');?>
                @endif
        
            
                <div class="form-group {{ $errors->has('amount') ? ' has-error' : '' }}">
                   <label class="w3-text-blue"><b>Enter Amount</b></label>
                   <input type="text" class="form-control" name="amount" required></p> 
               </div>  
              
            </div>
         </div><!--Footer-->
         <div class="modal-footer">
         <button class="btn btn-primary" data-dismiss="modal">Batal</button>
           <button id="submitPaypal" type="submit" class="btn btn-primary">Pay Now</button>
         </div>
       </div>
    </div>
     </div>
    </div>
  </form>