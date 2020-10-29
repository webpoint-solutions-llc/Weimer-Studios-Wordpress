

<?php 

get_header();?>
<section class="give-page">
            <div class="give-section-wrapper"><?php
                while(have_posts()){
                    the_post();?>
                <h1><?php the_title();?></h1>
                <p><?php the_content();?></p>
                <div class="give-section-bottom-p">
                  <p>If you would like to support our mission you can donate at:</p>

              <?php  }
            
            ?>

                
                
                </div>                  
                    <a href="give.weimar.org" target="_blank"><img src="images/icon-give-arow-right.svg" alt="">give.weimar.org</a>
                </div>
        </section>
<?php get_footer();
?>