<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="modal-title">Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id" id="id" />
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul Artikel</label>
                        <div class="col-sm-10 kosong">
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Artikel">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="imagefile" class="col-sm-2 col-form-label">Thumbnail</label>
                        <div class="col-sm-10">
                            <img id="v_image" name="v_image" height="150px" style="margin-bottom: 10px; border-radius: 5px;">
                            <input type="file" class="form-control btn-file" onchange="loadFile(event)" name="thumbnail" id="thumbnail" placeholder="Image" value="UPLOAD">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="author" class="col-sm-2 col-form-label">Author</label>
                        <div class="col-sm-10 kosong">
                            <input type="text" class="form-control" name="author" id="author" placeholder="Contoh : John Doe">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="tanggal_terbit" class="col-sm-2 col-form-label">Tanggal Terbit</label>
                        <div class="col-sm-10 kosong">
                            <input type="date" class="form-control" name="tanggal_terbit" id="tanggal_terbit">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <div id="deskripsi">
                                <p name="deskripsi"></p>
                            </div>
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

<script>
    let getDeskripsi;
    ClassicEditor
        .create(document.querySelector('#deskripsi'))
        .then(deskripsiBaru => {
            getDeskripsi = deskripsiBaru;
        })
        .catch(error => {
            console.error(error);
        });
</script>