<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">
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
                        <label for="judul" class="col-sm-4 col-form-label">Judul</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="judul" id="judul" placeholder="Nama Headline" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                        <div class="col-sm-8 kosong">
                            <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi Singkat" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="tombol" class="col-sm-4 col-form-label">Tombol</label>
                        <div class="col-sm-8 kosong">
                            <input type="text" class="form-control" name="tombol" id="tombol" placeholder="Nama Tombol">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="link" class="col-sm-4 col-form-label">Link</label>
                        <div class="col-sm-8 kosong">
                            <input type="text" class="form-control" name="link" id="link" placeholder="Link Tombol">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="imagefile" class="col-sm-4 col-form-label">Foto</label>
                        <div class="col-sm-8">
                            <img id="v_image" width="300px" style="margin-bottom: 10px; border-radius: 5px;">
                            <input type="file" class="form-control btn-file" onchange="loadFile(event)" name="foto" id="foto" placeholder="Image" value="UPLOAD">
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