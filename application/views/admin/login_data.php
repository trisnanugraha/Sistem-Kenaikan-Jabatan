<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $aplikasi->title; ?> | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-5.5.0/css/all.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-4.3.0/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <!-- Body style -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/stylearyo.css"> -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/custom-style.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css">
  <style>
    .login-box {
      width: auto;
      text-align: center;
    }

    .btn-style {
      margin: 0 20px;
      width: 150px;
      background-color: #98B909;
      font-size: 1.2rem;
      color: #fff;
    }

    .btn-form {
      margin: 0 20px;
      width: 150px;
      font-size: 1.2rem;
    }

    .btn-style:hover {
      background-color: #698009;
      color: #fff;
    }
  </style>
</head>

<body class="hold-transition login-page" style="background-color: #00CF17;">

  <div class="login-box">
    <img src="<?php echo base_url(); ?>/assets/foto/logo-labuhan-batu.png" height="300px" alt="">
    <h3 style="margin-top: 20px; color: #fff;">Pendaftaran Penaikan Jabatan</h3>
    <div style="margin-top: 50px;">
      <button type="button" class="btn btn-success btn-style">Bantuan</button>
      <button type="button" class="btn btn-success btn-style" onclick="daftar()">Daftar</button>
      <button type="button" class="btn btn-success btn-style">Login</button>
    </div>
    <!-- /.login-logo -->
    <!-- /.card -->
  </div>

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
    <!-- End Bootstrap modal -->
    <!-- End Bootstrap modal -->
    <!-- /.login-box -->
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- jquery-validation -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>


    <script type="text/javascript">
      function daftar() {
        $('.modal-title').text('Daftar Akun Baru');
        $('#modal_daftar').modal('show'); // show bootstrap modal
      }

      function simpan() {
        $('#btn_simpan').text('Menyimpan...'); //change button text
        $('#btn_simpan').attr('disabled', true); //set button disable 
        var url = "<?php echo site_url('daftar/simpan') ?>";;

        var formdata = new FormData($('#form_daftar')[0]);
        // ajax adding data to database
        $.ajax({
          url: url,
          type: "POST",
          data: formdata,
          dataType: "JSON",
          cache: false,
          contentType: false,
          processData: false,
          success: function(data) {

            if (data.status) //if success close modal and reload ajax table
            {
              $('#modal_daftar').modal('hide');
              Toast.fire({
                icon: 'success',
                title: 'Data Produk Berhasil Disimpan!'
              });
            } else {
              for (var i = 0; i < data.inputerror.length; i++) {
                $('[name="' + data.inputerror[i] + '"]').addClass('is-invalid');
                $('[name="' + data.inputerror[i] + '"]').closest('.kosong').append('<span></span>');
                $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]).addClass('invalid-feedback');
              }
            }
            $('#btn_simpan').text('Simpan'); //change button text
            $('#btn_batal').text('Keluar'); //change button text
            $('#btn_simpan').attr('disabled', false); //set button enable 


          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert('Error adding / update data');
            $('#btn_simpan').text('Simpan'); //change button text
            $('#btn_batal').text('Keluar'); //change button text
            $('#btn_simpan').attr('disabled', false); //set button enable 

          }
        });
      }

      function batal() {
        $('#form_daftar')[0].reset();
      }
    </script>
</body>

</html>