<!DOCTYPE html>
<html lang="en">
  <head>
   <?php wp_head();?>
    <title>About</title>
  </head>
  <body>
    <div class="main-container">
      <!-- header -->
      <header>  
        <div class="navbar navbar-about">
          <div class="nav-about">
            <div class="logo-about">
              <a href="<?php echo site_url()?>"> <img src="<?php echo get_theme_file_uri('/images/logo.svg')?>" alt="logo" /></a>
            </div>
            <ul class="about-links">
              <li><a href="<?php echo site_url('/about')?>">About</a></li>
              <li><a href="<?php echo site_url('/store')?>">Store</a></li>
              <li><a href="<?php echo site_url('/booking')?>">Booking</a></li>
              <li><a href="<?php echo site_url('/give')?>">Give</a></li>
              <li><a href="<?php echo site_url('/contact')?>">Contact Us</a></li>
            </ul>
            <div class="burger-about">
              <div class="burger1"></div>
              <div class="burger2"></div>
              <div class="burger3"></div>
            </div>
          </div>
        </div>
      </header>
      <!-- </header> -->

      <section class="about-page">
        <div class="about-page-container">
          <span class="h2_animate">About us</span>
          <hr class="section_seperation">
       
          <div class="about-para-top">
              <?php while(have_posts()){
                the_post();?>
                  <p><?php the_content()?></p>
                
                   <?php }
                    ?>
            
          </div>
       
         
        </div>
      </section>
      <hr>

      <div class="about-us-hero ">
        <img src="<?php echo get_theme_file_uri('/images/about-us-hero.svg')?>" alt="" />
      </div>
      <section class="aboutmore">
        
        <div class="about-more-top">
       
          <p><?php the_field('about-more-top')?>
         
          </p>
        </div>
        <div class="about-more-bottom">
          <p>
            <?php the_field('about-more-bottom')?>
          </p>
        </div>
      </section>

      <section class="about-images">
        <div class="about-images-container">
         
          <?php
            $left_iamge_group = get_field('left_side_image');
            $right_image_group = get_field('right_side_image');
            
           
            if( $left_iamge_group ): ?>
             <div class="about-images-left">
                <img src="<?php echo ($left_iamge_group['image']['url']);?>" alt="" />
                        <h3><?php  echo $left_iamge_group['caption'];?></h3>
                </div>
              <?php endif; ?>
              <?php if($right_image_group):?>
              <div class="about-images-right">
                  <img src="<?php echo  $right_image_group['image']['url'];?>" alt="" />
                    <h3>
                        <?php echo $right_image_group['caption'];?>
                      </h3>
                </div>
              <?php endif;?>
       
       
           
        
          
      </section>
      <div class="about-paragraph">
    
        <p>
          <?php the_field("about-paragraph")?>
        </p>
      </div>
      <section class="give">
        <div class="give-page-wrapper">
          <div class="give-page-container">
            <h1>Booking</h1>
            <p>
              Amet minim mollit non deserunt ullamco est sit aliqua dolor do
              amet sint.
            </p>
            <div class="donate">
              <img src="<?php echo get_theme_file_uri('/images/give-arrow.svg')?>" alt="" /><a href="">Book now</a>
            </div>
          </div>
        </div>

        <div class="store-page-wrapper">
          <h1>Contact Us</h1>
          <p>
            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
            sint.
          </p>
          <div class="store-btn">
            <img src="<?php echo get_theme_file_uri('/images/give-arrow.svg')?>" alt="" /><a href="">Contacts</a>
          </div>
        </div>
      </section>
      <!-- footer -->
      <footer>
        <div class="footer-logo">
          <a href="#"><img src="<?php echo get_theme_file_uri('/images/logo-footer.svg')?>" alt="logo" /></a>
        </div>
        <div class="footer-links">
          <div class="footer-links-navigation">
            <li><a href="home.html">Home</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="Store.html">Store</a></li>
            <li><a href="Booking.html">Booking</a></li>
            <li><a href="give.html">Give</a></li>
            <li><a href="Contact_Us.html">Contact Us</a></li>
          </div>
          <div class="footer-right-links">
            <div class="footer-address">
              <h2>20601 West Paoli Lane Weimar, CA 95736</h2>
              <a
                href="tel:+1-(530) 422-7923
                      "
                >+1-(530) 422-7923</a
              >
              <a href="mailto:info@weimar.edu">info@weimar.edu</a>
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
        <a href="#"><img src="<?php echo get_theme_file_uri('/images/icon-chevron-top.svg')?>" alt="" /></a>
      </div>
    </div>
        <?php get_footer();?>
    <script src="js/app1.js"></script>
  </body>
</html>
