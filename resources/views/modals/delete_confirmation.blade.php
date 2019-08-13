<form class="w3-container w3-display-middle w3-card-4" action="" method="POST" id="deleteForm" role="form">
<div class="modal fade" data-backdrop="false" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <!--Header-->
         <div class="modal-header">
           <h4 class="modal-title" id="myModalLabel">Konfirmasi Penghapusan</h4>
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <!--Body-->
          
          {{csrf_field()}}
          {{method_field('DELETE')}}
            <div class="modal-body">
           <!-- <h2 class="w3-text-blue">Tambah Produk Baru</h2> -->
           <p>Apakan anda  yakin ingin menghapus produk di bawah ini?:
           <span id="dataProduk"></span>
           <p>
         <!--Footer-->
         <div class="modal-footer">
         <button class="btn btn-primary" data-dismiss="modal">Batal</button>
           <button id="submitHapus"  class="btn btn-primary">Hapus</button>
         </div>
       </div>
    </div>
     </div>
    </div>
</form>