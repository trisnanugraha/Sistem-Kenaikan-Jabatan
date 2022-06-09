<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="modal-title">Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id" />
                    <div class="form-group row ">
                        <label for="nama" class="col-sm-4 col-form-label">Nama Social Media</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Contoh : Facebook" readonly>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="link" class="col-sm-4 col-form-label">Link URL</label>
                        <div class="col-sm-8 kosong">
                            <input type="text" class="form-control" name="link" id="link" placeholder="Contoh : https://facebook.com/username">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="icon" class="col-sm-4 col-form-label">Icon</label>
                        <div class="col-sm-8 kosong">
                            <input type="text" class="form-control" name="icon" id="icon" placeholder="Contoh : fab fa-facebook-f">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button>
                <button type="button" id="btnCancel" class="btn btn-danger" onclick="batal()" data-dismiss="modal">Batal</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->