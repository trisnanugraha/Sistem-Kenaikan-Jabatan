<!-- Bootstrap modal -->
<div class="modal fade" id="modal_daftar" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color: #00CF17;">

            <div class="modal-header">
                <h3 class="modal-title" style="color: #fff;">Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body modal_daftar">
                <form action="#" id="form_daftar" class="form-horizontal">
                    <input type="hidden" value="" name="id" />
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label text-white">Nama Lengkap</label>
                        <div class="col-sm-9 kosong">
                            <input type="text" class="form-control" name="nama" id="nama">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="nip" class="col-sm-3 col-form-label text-white">NIP</label>
                        <div class="col-sm-9 kosong">
                            <input type="text" class="form-control" name="nip" id="nip">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="email" class="col-sm-3 col-form-label text-white">Email</label>
                        <div class="col-sm-9 kosong">
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="password" class="col-sm-3 col-form-label text-white">Password</label>
                        <div class="col-sm-9 kosong">
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="verify_pass" class="col-sm-3 col-form-label text-white">Verifikasi Password</label>
                        <div class="col-sm-9 kosong">
                            <input type="password" class="form-control" name="verify_pass" id="verify_pass">
                        </div>
                    </div>

                </form>
                <div class="modal-footer justify-content-between">
                    <button type="button" id="btn_simpan" onclick="simpan()" class="btn btn-style">Daftar</button>
                    <button type="button" id="btn_batal" class="btn btn-default btn-form" onclick="batal()" data-dismiss="modal">Keluar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->