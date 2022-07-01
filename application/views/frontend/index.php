<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>complete responsive coffee shop website design</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/frontend/style.css">

</head>

<body>
  <!-- header section starts  -->

  <header class="header">
    <a href="#" class="logo">
      <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" />
    </a>

    <nav class="navbar">
      <a href="#beranda">Beranda</a>
      <a href="#tentang-kami">Tentang Kami</a>
      <a href="#biji-kopi">Biji Arabika</a>
      <a href="#produk-kopi">Kopi Arabika</a>
      <!-- <a href="#menu">menu</a> -->
      <!-- <a href="#products">products</a> -->
      <a href="#testimoni">Testimoni</a>
      <a href="#artikel">Artikel</a>
      <a href="#hubungi-kami">Hubungi Kami</a>
    </nav>

    <div class="icons">
      <!-- <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div> -->
      <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <!-- <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div> -->

    <!-- <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-1.png" alt="">
            <div class="content">
                <h3>cart item 01</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-2.png" alt="">
            <div class="content">
                <h3>cart item 02</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-3.png" alt="">
            <div class="content">
                <h3>cart item 03</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-4.png" alt="">
            <div class="content">
                <h3>cart item 04</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <a href="#" class="btn">checkout now</a>
    </div> -->
  </header>

  <!-- header section ends -->

  <!-- home section starts  -->

  <section class="home" id="beranda">
    <div class="content">
      <h3><?php echo $banner->judul; ?></h3>
      <p>
        <?php echo $banner->deskripsi; ?>
      </p>
      <a href="<?php echo $banner->link; ?>" class="btn" target="_blank"><?php echo $banner->judul_tombol; ?></a>
    </div>
  </section>

  <!-- home section ends -->

  <!-- about section starts  -->

  <section class="about" id="tentang-kami">
    <h1 class="heading"><span>tentang</span> kami</h1>

    <div class="row">
      <div class="image">
        <img src="<?php echo base_url(); ?>assets/images/<?php echo $tentang->foto; ?>" alt="" />
      </div>

      <div class="content">
        <h3><?php echo $tentang->judul; ?></h3>
        <p>
          <?php echo $tentang->deskripsi; ?>
        </p>
        <a href="<?php echo $tentang->link; ?>" class="btn"><?php echo $tentang->judul_tombol; ?></a>
      </div>
    </div>
  </section>

  <section class="about" id="biji-kopi">
    <h1 class="heading"><span>biji</span> arabika</h1>

    <div class="row">
      <div class="image">
        <img src="<?php echo base_url(); ?>assets/images/<?php echo $biji->foto; ?>" alt="" />
      </div>

      <div class="content">
        <h3><?php echo $biji->judul; ?></h3>
        <p>
          <?php echo $biji->deskripsi; ?>
        </p>
        <a href="<?php echo $biji->link; ?>" class="btn"><?php echo $biji->judul_tombol; ?></a>
      </div>
    </div>
  </section>

  <!-- about section ends -->

  <!-- menu section starts  -->

  <!-- <section class="menu" id="menu">

    <h1 class="heading"> our <span>menu</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/menu-1.png" alt="">
            <h3>tasty and healty</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/menu-2.png" alt="">
            <h3>tasty and healty</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/menu-3.png" alt="">
            <h3>tasty and healty</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/menu-4.png" alt="">
            <h3>tasty and healty</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/menu-5.png" alt="">
            <h3>tasty and healty</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/menu-6.png" alt="">
            <h3>tasty and healty</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

    </div>

</section> -->

  <!-- menu section ends -->

  <section class="products" id="produk-kopi">
    <h1 class="heading">kopi arabika <span>pilihan</span></h1>

    <div class="box-container">
      <?php foreach ($produk as $p) { ?>
        <div class="box">
          <!-- <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div> -->
          <div class="image">
            <img src="<?php echo base_url(); ?>assets/images/<?php echo $p->foto_produk; ?>" alt="" />
          </div>
          <div class="content">
            <h3><?php echo $p->nama_produk; ?></h3>
            <div class="stars">
              <?php
              $rating = $p->rating_produk;
              $state = true;
              while ($state)
                if ($rating != 0 && $rating <= 5) {
                  if ($rating < 1) { ?>
                  <i class="fas fa-star-half-alt"></i>
                <?php }
                  if ($rating >= 1) { ?>
                  <i class="fas fa-star"></i>
                <?php }
                ?>
              <?php
                  $rating -= 1;
                  if ($rating <= 0) {
                    $state = false;
                  }
                }
              ?>
            </div>
            <div class="price"><?php echo "Rp" . rupiah($p->diskon); ?> <span><?php echo rupiah($p->harga_produk); ?></span></div>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>

  <!-- review section starts  -->

  <section class="review" id="testimoni">
    <h1 class="heading">Testimoni</h1>

    <div class="box-container">
      <?php foreach ($testimonial as $t) { ?>
        <div class="box">
          <img src="<?php echo base_url(); ?>assets/images/quote-img.png" alt="" class="quote" />
          <p>
            <?php echo $t->deskripsi; ?>
          </p>
          <img src="<?php echo base_url(); ?>assets/images/<?php echo $t->foto_pengirim; ?>" class="user" alt="" />
          <h3><?php echo $t->nama_pengirim; ?></h3>
          <div class="stars">
            <?php
            $rating = $t->rating;
            $state = true;
            while ($state)
              if ($rating != 0 && $rating <= 5) {
                if ($rating < 1) { ?>
                <i class="fas fa-star-half-alt"></i>
              <?php }
                if ($rating >= 1) { ?>
                <i class="fas fa-star"></i>
              <?php }
              ?>
            <?php
                $rating -= 1;
                if ($rating <= 0) {
                  $state = false;
                }
              }
            ?>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>

  <!-- review section ends -->

  <!-- contact section starts  -->

  <!-- contact section ends -->

  <!-- blogs section starts  -->

  <section class="blogs" id="artikel">
    <h1 class="heading">Artikel <span>Terbaru</span></h1>

    <div class="box-container">
      <?php foreach ($artikel as $a) { ?>
        <div class="box">
          <div class="image">
            <img src="<?php echo base_url(); ?>assets/images/<?php echo $a->thumbnail; ?>" alt="" />
          </div>
          <div class="content">
            <a href="<?php echo base_url(); ?>post/data/<?php echo $a->id_artikel; ?>" class="title"><?php echo $a->judul_artikel; ?></a>
            <span>Oleh <?php echo $a->author; ?> / <?php echo tgl_indonesia($a->tanggal_terbit); ?></span>
            <p style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
              <?php echo $a->deskripsi; ?>
            </p>
            <a href="<?php echo base_url(); ?>post/data/<?php echo $a->id_artikel; ?>" class="btn" target="_blank">Baca Lebih Lanjut</a>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>

  <section class="contact" id="hubungi-kami">
    <h1 class="heading"><span>Hubungi</span> Kami</h1>

    <div class="row">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126921.16447334258!2d106.8302336!3d-6.22592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sNational%20Monument!5e0!3m2!1sen!2sid!4v1654091997103!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>

      <form id="form_pesan" name="form_pesan" action="" method="POST" role="form">
        <h3>Kirim Pesan</h3>
        <div class="inputBox">
          <span class="fas fa-user"></span>
          <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" required />
        </div>
        <div class="inputBox">
          <span class="fas fa-envelope"></span>
          <input type="email" name="email" id="email" placeholder="email" required />
        </div>
        <div class="inputBox">
          <span class="fas fa-phone"></span>
          <input type="number" name="no_hp" id="no_hp" placeholder="nomor telepon" required />
        </div>
        <div class="inputBox">
          <span class="fas fa-comment"></span>
          <input type="text" name="pesan" id="pesan" placeholder="Pesan Kamu" required></textarea>
        </div>
        <button type="submit" id="btnSave" class="btn btn-primary">Kirim Sekarang</button>
      </form>
    </div>
  </section>

  <!-- blogs section ends -->

  <!-- footer section starts  -->

  <section class="footer">
    <div class="share">
      <?php
      foreach ($socialmedia as $soc) { ?>
        <a href="<?php echo $soc->link; ?>" class="<?php echo $soc->icon; ?>" target="_blank"></a>
      <?php }
      ?>
    </div>

    <div class="links">
      <a href="#beranda">Beranda</a>
      <a href="#tentang-kami">Tentang Kami</a>
      <a href="#biji-kopi">Biji Arabika</a>
      <a href="#produk-kopi">Kopi Arabika</a>
      <!-- <a href="#menu">menu</a> -->
      <!-- <a href="#products">products</a> -->
      <a href="#testimoni">Testimoni</a>
      <a href="#artikel">Artikel</a>
      <a href="#hubungi-kami">Hubungi Kami</a>
    </div>

    <div class="credit">Dibuat oleh <span>Pecinta Kopi Indonesia</span></div>
  </section>

  <!-- footer section ends -->
  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- custom js file link  -->
  <script src="<?php echo base_url(); ?>assets/dist/js/frontend/script.js"></script>
  <script>
    $("#form_pesan").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: '<?php echo base_url('home/kirim') ?>',
        type: 'POST',
        data: $('#form_pesan').serialize(),
        dataType: 'JSON',
        success: function(data) {
          if (data.status) {
            Swal.fire({
              icon: 'success',
              title: 'Pesan Berhasil Dikirim!'
            }).then(function() {
              location.reload();
            });
          } else if (data.error) {
            toastr.error(
              data.pesan
            );
          } else {
            for (var i = 0; i < data.inputerror.length; i++) {
              $('[name="' + data.inputerror[i] + '"]').addClass('is-invalid');
              $('[name="' + data.inputerror[i] + '"]').closest('.kosong').append('<span></span>');
              $('[name="' + data.inputerror[i] + '"]').next().next().text(data.error_string[i]).addClass('invalid-feedback');
            }
          }
        }
      });

    });
  </script>
</body>

</html>