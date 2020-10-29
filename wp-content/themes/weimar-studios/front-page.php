
 
<?php 

get_header();?>
<div class="main-container">
    <section class="hero-img-vid"></section>
    <section id="about">
      <div class="about-us">
        <h1>About us</h1>

        <div class="about-us-para-big">
          <!-- <p>
            <?php 
              // $post   = get_post( 42 );

              // $output =  apply_filters( 'the_content', $post->post_content );

              // echo $output; 
              // wp_reset_query();  ?>
          <p> -->
          <p><?php the_field("about-more-top",5)?></p>
        </div>
        <div class="about-us-para-small">
          
        <p><?php the_field('about-more-bottom',5)?></p>
         
        </div>
    
      </div>
    </section>
<!-- Carosel Section! -->
<!-- learnmore Section! -->
    <section class="learnmore">
   
      <div class="learn-more-btn">
        <a href="<?php echo site_url('/about')?>">Learn More <img src="<?php echo get_theme_file_uri('images/icon-chevron-right-black.svg')?>" alt=""></a>
      </div>

    </section>
<!-- booking section -->
    <section id="booking">
      <div class="actions">


        <div class="book">
          <h1>Book</h1>
          <p>Amet minim mollit non deserunt ullamco est sit </p>
          <a href="#">Learn More <img src="<?php echo get_theme_file_uri('images/icon-chevron-right-white.svg')?>" alt=""></a>
        </div>
        <div class="Explore">
          <h1>Explore</h1>
          <p>Amet minim mollit non deserunt ullamco est sit </p>
          <div class="music-streaming">
            <a href=""><img src="<?php echo get_theme_file_uri('images/Spotify_logo.svg')?>" alt="" /></a>
            <a href=""><img src="<?php echo get_theme_file_uri('images/Apple_Music_logo.svg')?>" alt="" /></a>
          </div>
        </div>
      </div>
    </section>

<!-- services section -->
    <section class="services">
      <div class="services-container">
        <h1>Services</h1>
        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint</p>
        <div class="tabs">
          <a href="#">Recording</a>
          <a href="#">Production</a>
          <a href="#">Mixing</a>
          <a href="#">Video Shoots</a>
        </div>
        <div class="book-btn">
          <a href="">Book Today <img src="<?php echo get_theme_file_uri('images/icon-chevron-right-black.svg')?>" alt=""></a>
        </div>

      </div>
    </section>
<!-- contact section -->
<section id="contacts">
      <div class="contacts-container">
        <h1>Contacts</h1>
        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint</p>
        <div class="contacts-wrapper">


          <form class="contact-form">
            <div class="form-group-name">
              <div class="name-group">

                <input type="text" name="name" id="name">
                <label for="name">Your Name*</label>
              </div>
              <div class="email-group">

                <input type="email" name="email" id="email">
                <label for="email-group">Email*</label>
              </div>
            </div>
            <div class="form-group-message">

              <input type="text" name="subject" id="subject">
              <label for="subject">Subject*</label>
            </div>
            <div class="form-group-message">

              <input type="text" name="message" id="message">
              <label for="subject">message*</label>
            </div>
            <button type="submit">Submit</button>
            <a href="#">Clear form</a>

          </form>
          <div class="contact-location">
            <div class="location-to">
              <h2><?php  the_field('address',47);?></h2>
              <a href=""><?php the_field('contact_number',47);?></a>
              <a href=""> <?php the_field('website',47)?></a>
            </div>
            <div class="contact-social">
              <a href="">Instagram</a>
              <a href="">Facebook</a>
              <a href="">Youtube</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  
<!-- igive section -->
    <section id="give">
      <div class="give-wrapper">

        <div class="give-container">

          <h1>Give</h1>
          <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
          <div class="donate">
            <img src="<?php echo get_theme_file_uri('images/give-arrow.svg')?>" alt=""><a href="">Give & Donate</a>
          </div>
        </div>
      </div>

      <div id="store-wrapper">
        <h1>Store</h1>
        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
        <div class="store-btn">
          <img src="<?php echo get_theme_file_uri('images/give-arrow.svg')?>" alt=""><a href="">Go to Store</a>
        </div>

      </div>
    </section>




</div>
    
<?php get_footer();
?>