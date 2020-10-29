<!DOCTYPE html>
<html lang="en">
  <head>
   <?php wp_head();?>
  </head>
  <body>
    <div class="main-container">
      <!-- header -->
      <header>
        <div class="contact-home-hero">
          <img src="<?php echo get_theme_file_uri('images/give-hero.svg')?>" alt="hero" />
          <div class="navbar">
            <div class="navbar-wrapper">

           
            <div class="nav-container">
              <div class="logo-wrapper">
                <a href="/"> <img src="<?php echo get_theme_file_uri('images/logo-footer.svg')?>" alt="logo" /></a>
              </div>
              <ul class="main-links">
              <li><a href="<?php echo site_url('/about');?>">About</a></li>
                <li><a href="<?php echo site_url('/store');?>">Store</a></li>
                <li><a href="<?php echo site_url('/booking');?>">Booking</a></li>
                <li><a href="<?php echo site_url('/give');?>">Give</a></li>
                <li><a href="<?php echo site_url('contacts');?>">Contact Us</a></li>
              </ul>
              <div class="burger">
                <div class="burger1"></div>
                <div class="burger2"></div>
                <div class="burger3"></div>
              </div>
            </div>
         
          </div>
        </div>
        </div>

     
        <section class="give-page">
            <div class="give-section-wrapper">
                <h1>Give</h1><?php 
                    while(have_posts()){
                      the_post();?>
                   <p><?php the_content();?></p>
                <?php }
                ?>           
               
                <div class="give-section-bottom-p">
                  <p><?php the_field('excerpt')?></p>
                </div>
               
                  
                <a href="give.weimar.org" target="_blank"><img src="<?php echo get_theme_file_uri('images/icon-give-arow-right.svg')?>" alt="">give.weimar.org</a>
                  
                    
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
        <a href="#"><img src="images/icon-chevron-top.svg" alt="" /></a>
      </div>
    </div>
   
    <script src="js/app.js"></script>
  </body>
</html>
