<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Penaikan Jabatan</title>
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
    <div class="row">
      <div class="mr-5">
        <div class="form-group">
          <h3 class="text-white mb-5">Bantuan</h3>
        </div>
        <div class="form-group">
          <button type="button" style="height: 80px;" class="btn btn-success btn-style" onclick="caraDaftar()">Cara Mendaftar</button>
        </div>
        <div class="form-group">
          <button type="button" style="height: 80px;" class="btn btn-success btn-style" onclick="tahapPengurusan()">Tahapan Pengurusan</button>
        </div>
        <div class="form-group">
          <button type="button" style="height: 80px;" class="btn btn-success btn-style" onclick="berkasBatal()">Berkas Batal</button>
        </div>
        <div class="form-group">
          <button type="button" style="height: 80px;" class="btn btn-success btn-style" onclick="berkasSelesai()">Berkas Selesai</button>
        </div>
      </div>
      <div>
        <div>
          <div>
            <div class="form-group">
              <img src="<?php echo base_url(); ?>/assets/foto/logo-labuhan-batu.png" height="300px" alt="">
              <h3 style="margin-top: 20px; color: #fff;">Pendaftaran Penaikan Jabatan</h3>
              <div style="margin-top: 50px;">
                <button type="button" class="btn btn-success btn-style" onclick="keluar()">Keluar</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <?php echo $cara_daftar; ?>
  <?php echo $tahap_pengurusan; ?>
  <?php echo $berkas_batal; ?>
  <?php echo $berkas_selesai; ?>
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
    function keluar() {
      var url = '<?php echo site_url() ?>';
      window.location = url;
    }

    function caraDaftar() {
      $('.modal-title').text('Cara Mendaftar');
      $('#modal_cara_mendaftar').modal('show'); // show bootstrap modal
    }

    function tahapPengurusan() {
      $('.modal-title').text('Tahap Pengurusan');
      $('#modal_tahap_pengurusan').modal('show'); // show bootstrap modal
    }

    function berkasBatal() {
      $('.modal-title').text('Berkas Batal');
      $('#modal_berkas_batal').modal('show'); // show bootstrap modal
    }

    function berkasSelesai() {
      $('.modal-title').text('Berkas Selesai');
      $('#modal_berkas_selesai').modal('show'); // show bootstrap modal
    }
  </script>
</body>

</html>