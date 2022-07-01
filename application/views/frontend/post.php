<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>complete responsive coffee shop website design</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

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
      <a href="<?php echo site_url(); ?>#beranda">Beranda</a>
      <a href="<?php echo site_url(); ?>#tentang-kami">Tentang Kami</a>
      <a href="<?php echo site_url(); ?>#biji-kopi">Biji Arabika</a>
      <a href="<?php echo site_url(); ?>#produk-kopi">Kopi Arabika</a>
      <!-- <a href="#menu">menu</a> -->
      <!-- <a href="#products">products</a> -->
      <a href="<?php echo site_url(); ?>#testimoni">Testimoni</a>
      <a href="<?php echo site_url(); ?>#artikel">Artikel</a>
      <a href="<?php echo site_url(); ?>#hubungi-kami">Hubungi Kami</a>
    </nav>

    <div class="icons">
      <!-- <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div> -->
      <div class="fas fa-bars" id="menu-btn"></div>
    </div>
  </header>

  <!-- header section ends -->

  <!-- home section starts  -->

  <section class="home" id="beranda" style="background: linear-gradient(
    to bottom,
    rgba(0,0,0, 0),
    rgba(0,0,0, 100)
  ), url(<?php echo base_url(); ?>/assets/images/<?php echo $artikel->thumbnail; ?>) no-repeat; background-size: cover;">
    <div class="content">
      <h3><?php echo $artikel->judul_artikel; ?></h3>
      <p>Ditulis Oleh : <?php echo $artikel->author; ?> | Pada <?php echo tgl_indonesia($artikel->tanggal_terbit); ?></p>
    </div>
  </section>

  <!-- home section ends -->
  <article style="margin: 4rem;">
    <div id="article-content" style="color: white; font-size: 2rem; margin: 0 auto; width: 75%; text-align: justify;">
      <?php echo $artikel->deskripsi; ?>
    </div>
  </article>
  <!-- about section starts  -->

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

  <!-- custom js file link  -->
  <script src="<?php echo base_url(); ?>assets/dist/js/frontend/script.js"></script>
</body>

</html>