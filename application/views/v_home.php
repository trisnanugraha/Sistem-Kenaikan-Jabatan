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
    <img src="<?php echo base_url(); ?>/assets/foto/logo-labuhan-batu.png" height="300px" alt="">
    <h3 style="margin-top: 20px; color: #fff;">Pendaftaran Penaikan Jabatan</h3>
    <div style="margin-top: 50px;">
      <button type="button" class="btn btn-success btn-style" onclick="bantuan()">Bantuan</button>
      <button type="button" class="btn btn-success btn-style" onclick="daftar()">Daftar</button>
      <button type="button" class="btn btn-success btn-style" onclick="login()">Login</button>
    </div>
    <!-- /.login-logo -->
    <!-- /.card -->
  </div>
  <?php echo $modal_daftar; ?>
  <?php echo $modal_login; ?>
  <?php
  if (!empty($pesan)) {
    echo $pesan;
  } ?>
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
    $(document).ready(function() {
      $("input").change(function() {
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
        $(this).removeClass('is-invalid');
      });
    });

    function daftar() {
      $('.modal-title').text('Daftar Akun Baru');
      $('#modal_daftar').modal('show'); // show bootstrap modal
    }

    function bantuan() {
      var url = '<?php echo site_url('bantuan') ?>';
      window.location = url;
    }

    function login() {
      $('.modal-title').text('Login');
      $('#modal_login').modal('show'); // show bootstrap modal
    }

    function simpan() {
      $('#btn_simpan').text('Menyimpan...'); //change button text
      $('#btn_simpan').attr('disabled', true); //set button disable 
      var url = "<?php echo site_url('home/simpan') ?>";;

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
          if (data.status) {
            $('#form_daftar')[0].reset(); // reset form on modals
            Swal.fire({
              icon: 'success',
              title: 'Pendaftaran Akun Berhasil!',
              text: 'Silakan Login Menggunakan Email dan Password',
            }).then(function() {
              var url = '<?php echo base_url() ?>';
              window.location = url;
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

    $("#form_login").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: '<?php echo base_url('home/login') ?>',
        type: 'POST',
        data: $('#form_login').serialize(),
        dataType: 'JSON',
        success: function(data) {
          if (data.status) {
            toastr.success('Login Berhasil!');
            var url = data.url;
            window.location = url;
          } else if (data.error) {
            toastr.error(
              data.pesan
            );
          } else {
            for (var i = 0; i < data.inputerror.length; i++) {
              $('[name="' + data.inputerror[i] + '"]').addClass('is-invalid');
              $('[name="' + data.inputerror[i] + '"]').closest('.kosong').append('<span></span>');
              $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]).addClass('invalid-feedback');
            }
          }
        }
      });

    });

    function batal() {
      $('#form_daftar')[0].reset();
    }

    function tutup() {
      $('#form_login')[0].reset();
    }
  </script>
</body>

</html>