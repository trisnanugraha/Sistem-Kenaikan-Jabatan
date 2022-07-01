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
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Produk</label>
                        <div class="col-sm-9 kosong">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Produk">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="imagefile" class="col-sm-3 col-form-label">Foto Produk</label>
                        <div class="col-sm-9">
                            <img id="v_image" height="150px" style="margin-bottom: 10px; border-radius: 5px;">
                            <input type="file" class="form-control btn-file" onchange="loadFile(event)" name="foto" id="foto" placeholder="Image" value="UPLOAD">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="rating" class="col-sm-3 col-form-label">Rating</label>
                        <div class="col-sm-9 kosong">
                            <input type="text" class="form-control" name="rating" id="rating" placeholder="Contoh : 4.5 (Menggunakan Titik)">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-9 kosong">
                            <input type="text" class="form-control" name="harga" id="harga" placeholder="Contoh : 100000 (Tanpa Titik atau Koma)">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="diskon" class="col-sm-3 col-form-label">Diskon %</label>
                        <div class="col-sm-9 kosong">
                            <input type="text" class="form-control" name="diskon" id="diskon" placeholder="Contoh : 15 (Tanpa Tanda Persen)">
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