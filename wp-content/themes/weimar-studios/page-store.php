<!DOCTYPE html>
<html lang="en">
  <head>
   <?php wp_head();?>
   <title>Store</title>
  </head>
  <body>
    <div class="main-container">
      <!-- header -->
      <header>
        <div class="navbar">
          <div class="nav-about">
            <div class="logo-about">
              <a href="<?php echo site_url('home')?>"> <img src="<?php echo get_theme_file_uri('images/logo.svg')?>" alt="logo" /></a>
            </div>
            <ul class="about-links">
                <li><a href="<?php echo site_url('/about');?>">About</a></li>
                <li><a href="<?php echo site_url('/store');?>">Store</a></li>
                <li><a href="<?php echo site_url('/booking');?>">Booking</a></li>
                <li><a href="<?php echo site_url('/give');?>">Give</a></li>
                <li><a href="<?php echo site_url('contacts');?>">Contact Us</a></li>
            </ul>
            <div class="burger-about">
              <div class="burger1"></div>
              <div class="burger2"></div>
              <div class="burger3"></div>
            </div>
          </div>
        </div>

      
        <section class="store-page">
        <div class="store-container">
          <h1>Store</h1>
          <p>
            Find our latest products at our very own store with audio
            productions ranging from musical groups to podcasts and much more.
          </p>
          <div class="listening-platforms">
            <h2>Streaming platforms</h2>
            <div class="liestening-links">
              <a href=""><img src="<?php echo get_theme_file_uri('images/icon-spotify-big.svg')?>" alt="" /></a>
              <a href="" target="_blank"
                ><img src="<?php echo get_theme_file_uri('images/icon-apple-music-big.svg')?>" alt=""
              /></a>
            </div>
          </div>
          <div class="store-products">
            <div class="store-products-display">
              <div class="product-large-display">
                <img src="<?php echo get_theme_file_uri('images/store-product-big.svg')?>" alt="" />
              </div>
              <div class="product-small-display">
                <div class="small-display-top">
                  <img src="<?php echo get_theme_file_uri('images/store-product small.svg')?>" alt="" />
                </div>
                <div class="small-display-bottom">
                  <img src="<?php echo get_theme_file_uri('images/store-product-small2.svg')?>" alt="" />
                </div>
              </div>
              <div class="product-large-display">
                <img src="<?php echo get_theme_file_uri('images/store-product-big.svg')?>" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>
          <!-- footer -->
      <footer class="give-footer">
        <div class="footer-logo">
          <a href="#"><img src="<?php echo get_theme_file_uri('images/logo-footer.svg')?>" alt="logo" /></a>
        </div>
        <div class="footer-links">
          <div class="footer-links-navigation">
            <li><a href="<?php echo site_url()?>">Home</a></li>
            <li><a href="<?php echo site_url('/about')?>">About</a></li>
            <li><a href="<?php echo site_url('/store')?>">Store</a></li>
            <li><a href="<?php echo site_url('/booking')?>">Booking</a></li>
            <li><a href="<?php echo site_url('/give')?>">Give</a></li>
            <li><a href="<?php echo site_url('/contacts')?>">Contact Us</a></li>
          </div>
          <div class="footer-right-links">
            <div class="footer-address">
              <h2><?php the_field('address')?></h2>
              <a
                href="tel:<?php the_field('contact_number')?>"
                ><?php the_field('contact_number')?></a
              >
              <a href="mailto:info@weimar.edu"><?php the_field('website')?></a>
            </div>
            <div class="footer-social">
              <a href="#">Instagram</a>
              <a href="#">Facebook</a>
              <a href="#">Youtube</a>
            </div>
          </div>
        </div>
        <div class="copyright">
          <h2>© weimar studio. All rights reserved 2020</h2>
        </div>
      </footer>
      <div class="backtotop">
        <a href="#"><img src="<?php echo get_theme_file_uri('images/icon-chevron-top.svg')?>" alt="" /></a>
      </div>
    </div>
   
    <script src="js/app.js"></script>
  </body>
</html>
