<!DOCTYPE html>
<html lang="en">
  <head>
   <?php wp_head();?>
    <title><?php the_title();?></title>
  </head>
  <body>
    <div class="main-container">
      <!-- header -->
      <header>
        <div class="contact-home-hero">
          <img src="<?php echo get_theme_file_uri('images/contact-hero.svg')?>" alt="hero" />
          <div class="navbar">
            <div class="navbar-wrapper">

           
            <div class="nav-container">
              <div class="logo-wrapper">
                <a href="<?php echo site_url();?>"> <img src="<?php echo get_theme_file_uri('images/logo-footer.svg')?>" alt="logo" /></a>
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
      
      </header>
      <section class="contact">
        <div class="contact-container">
          <h1>Contacts</h1>
         <?php  the_field('contact_notes',47)?> 
        </div>
          <div class="contact-wrapper">
            <?php the_field('contact_form',47)?>

          
            <div class="contact-location">
              <div class="location-to">
                <h2><?php the_field('address',47);?></h2>
                <a href=""><?php the_field('contact_number',47);?> </a>
                <a href=""> <?php the_field('website',47)?></a>
              </div>
              <div class="contact-social">
                <a href="">Instagram</a>
                <a href="">Facebook</a>
                <a href="">Youtube</a>
              </div>
            </div>
          </div>
        
      </section>
      <section class="follow-instagram">
          <h1>Follow us on Instagram</h1>
          <div class="instagram-posts">
           <div class="instagram-single1">
               <img src="<?php echo get_theme_file_uri('images/instagram-post1.svg')?>" alt="">
           </div>
           <div class="instagram-single2">
            <img src="<?php echo get_theme_file_uri('images/instagram-post-2.svg')?>" alt="">
           </div>
           <div class="instagram-single3">
            <img src="<?php echo get_theme_file_uri('images/instagram-post1.svg')?>" alt="">
           </div>
           <div class="instagram-single4">
            <img src="<?php echo get_theme_file_uri('images/instagram-post-2.svg')?>" alt="">
           </div>
           <div class="instagram-single5">
            <img src="<?php echo get_theme_file_uri('images/instagram-post1.svg')?>" alt="">
           </div>
           <div class="instagram-single6">
            <img src="<?php echo get_theme_file_uri('images/instagram-post-2.svg')?>" alt="">
           </div>
           <div class="instagram-single7">
            <img src="<?php echo get_theme_file_uri('images/instagram-post1.svg')?>" alt="">
           </div>
           <div class="instagram-single8">
            <img src="<?php echo get_theme_file_uri('images/instagram-post-2.svg')?>" alt="">
           </div>
           <div class="instagram-single9">
            <img src="<?php echo get_theme_file_uri('images/instagram-post1.svg')?>" alt="">
           </div>
           <div class="instagram-single10">
            <img src="<?php echo get_theme_file_uri('images/instagram-post-2.svg')?>" alt="">
           </div>
               
              </div>
          </div>
      </section>
      <!-- footer -->
      <footer>
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
    
   <?php wp_footer();?>
  </body>
</html>
