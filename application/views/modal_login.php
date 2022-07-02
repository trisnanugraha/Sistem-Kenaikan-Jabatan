<!-- Bootstrap modal -->
<div class="modal fade" id="modal_login" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color: #00CF17;">

            <div class="modal-header">
                <h3 class="modal-title" style="color: #fff;">Form</h3>
                <button type="button" onclick="tutup()" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body modal_login">
                <form action="" id="form_login" method="POST" class="form-horizontal">
                    <div class="text-center mb-2">
                        <img src="<?php echo base_url(); ?>/assets/foto/logo-labuhan-batu.png" height="200px" alt="">
                    </div>
                    <div class="form-group text-center">
                        <label for="email" class="col-form-label text-white">Email</label>
                        <div class="kosong" style="margin-left: 100px; margin-right: 100px;">
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <label for="password" class="col-form-label text-white">Password</label>
                        <div class="kosong" style="margin-left: 100px; margin-right: 100px;">
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                    </div>
                    <br>
                    <div class="modal-footer justify-content-center">
                        <button type="submit" id="btn_login" class="btn btn-style">Login</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->