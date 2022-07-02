<!-- Bootstrap modal -->
<div class="modal fade" id="modal_berkas_selesai" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color: #00CF17;">

            <div class="modal-header">
                <h3 class="modal-title" style="color: #fff;">Form</h3>
                <button type="button" onclick="tutup()" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body modal_berkas_selesai">
                <div class="row ml-5">
                    <label class="col-form-label text-white" for="inputSuccess" style="font-size: 1.2rem;"><i class="fas fa-arrow-alt-circle-right mr-3"></i> Jika berkas telah terdaftar, mohon tunggu berkas terverifikasi dari Pusat</label>
                </div>
            </div><!-- /.modal-content -->
            <div class="modal-footer">
                <button type="button" id="btn_batal" class="btn btn-default btn-form" data-dismiss="modal">Keluar</button>
            </div>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->