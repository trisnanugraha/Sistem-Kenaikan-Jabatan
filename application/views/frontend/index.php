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
      <div class="box">
        <!-- <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div> -->
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/images/product-1.png" alt="" />
        </div>
        <div class="content">
          <h3>ARUTALA Kopi Arabika Gayo</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price">Rp123.456 <span>Rp999.999</span></div>
        </div>
      </div>

      <div class="box">
        <!-- <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div> -->
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/images/product-2.png" alt="" />
        </div>
        <div class="content">
          <h3>Sakha Arabica Toraja Coffee Roast Bean</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price">Rp123.456 <span>Rp999.999</span></div>
        </div>
      </div>

      <div class="box">
        <!-- <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div> -->
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/images/product-3.png" alt="" />
        </div>
        <div class="content">
          <h3>Maharaja Coffee Kopi Arabika Papua Wamena</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price">Rp123.456 <span>Rp999.999</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- review section starts  -->

  <section class="review" id="testimoni">
    <h1 class="heading">Testimoni</h1>

    <div class="box-container">
      <div class="box">
        <img src="<?php echo base_url(); ?>assets/images/quote-img.png" alt="" class="quote" />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla
          sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi
          quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.
        </p>
        <img src="<?php echo base_url(); ?>assets/images/pic-1.png" class="user" alt="" />
        <h3>john deo</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
      </div>

      <div class="box">
        <img src="<?php echo base_url(); ?>assets/images/quote-img.png" alt="" class="quote" />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla
          sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi
          quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.
        </p>
        <img src="<?php echo base_url(); ?>assets/images/pic-2.png" class="user" alt="" />
        <h3>john deo</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
      </div>

      <div class="box">
        <img src="<?php echo base_url(); ?>assets/images/quote-img.png" alt="" class="quote" />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla
          sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi
          quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.
        </p>
        <img src="<?php echo base_url(); ?>assets/images/pic-3.png" class="user" alt="" />
        <h3>john deo</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- review section ends -->

  <!-- contact section starts  -->

  <!-- contact section ends -->

  <!-- blogs section starts  -->

  <section class="blogs" id="artikel">
    <h1 class="heading">Artikel <span>Terbaru</span></h1>

    <div class="box-container">
      <div class="box">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/images/blog-1.jpeg" alt="" />
        </div>
        <div class="content">
          <a href="#" class="title">tasty and refreshing coffee</a>
          <span>by admin / 21st may, 2021</span>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
            dicta.
          </p>
          <a href="#" class="btn">read more</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/images/blog-2.jpeg" alt="" />
        </div>
        <div class="content">
          <a href="#" class="title">tasty and refreshing coffee</a>
          <span>by admin / 21st may, 2021</span>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
            dicta.
          </p>
          <a href="#" class="btn">read more</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/images/blog-3.jpeg" alt="" />
        </div>
        <div class="content">
          <a href="#" class="title">tasty and refreshing coffee</a>
          <span>by admin / 21st may, 2021</span>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
            dicta.
          </p>
          <a href="#" class="btn">read more</a>
        </div>
      </div>
    </div>
  </section>

  <section class="contact" id="hubungi-kami">
    <h1 class="heading"><span>Hubungi</span> Kami</h1>

    <div class="row">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126921.16447334258!2d106.8302336!3d-6.22592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sNational%20Monument!5e0!3m2!1sen!2sid!4v1654091997103!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>

      <form action="">
        <h3>Kirim Pesan</h3>
        <div class="inputBox">
          <span class="fas fa-user"></span>
          <input type="text" placeholder="Nama Lengkap" />
        </div>
        <div class="inputBox">
          <span class="fas fa-envelope"></span>
          <input type="email" placeholder="email" />
        </div>
        <div class="inputBox">
          <span class="fas fa-phone"></span>
          <input type="number" placeholder="nomor telepon" />
        </div>
        <input type="submit" value="Kirim Sekarang" class="btn" />
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

  <!-- custom js file link  -->
  <script src="<?php echo base_url(); ?>assets/dist/js/frontend/script.js"></script>
</body>

</html>