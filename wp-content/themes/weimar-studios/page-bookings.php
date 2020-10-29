
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
        <div class="navbar navbar-about">
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
      </header>

      <section class="booking-page">
        <div class="booking-wrapper">
          <h1>Booking</h1>
          <p>
            <?php the_field('paragraph')?>
          </p>
          <div class="booking-wrapper-bottom">
            <p>
             <?php the_field('final_paragraph')?>
            </p>
          </div>
          <div class="booking-form-container">
            <form action="">
              <div class="input-box">
                <img src="<?php echo get_theme_file_uri('images/icon-clipboard.svg')?>" alt="" />
                <div class="select-drop-down-img">
                  <img src="<?php echo get_theme_file_uri('images/icon-dropdown.svg')?>" alt="" />
                </div>

                <select name="service" id="service">
                  <option value="service">service</option>
                  <option value="service">service</option>
                </select>
              </div>
              <div class="input-box">
                <img src="<?php echo get_theme_file_uri('images/icon-calender.svg')?>" alt="" />
                <input
                  type="date"
                  name="date"
                  id="date"
                  placeholder="Date & Time"
                />
              </div>
              <div class="time-container">
                <a href="">Sunday</a>
                <a href="">Monday</a>
                <a href="">Tuesdsay</a>
                <a href="">Wednesday</a>
                <a href="">Thrusday</a>
                <a href="">Friday</a>
              </div>
              <div class="input-box">
                <img src="<?php echo get_theme_file_uri('images/icon-user.svg')?>" alt="" />
                <input type="text" name="user" id="user" placeholder="name" />
              </div>
              <div class="input-type-group">
                <div class="input-box">
                  <img src="<?php echo get_theme_file_uri('images/icon-email.svg')?>" alt="" />
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="email"
                  />
                </div>
                <div class="input-box">
                  <img src="<?php echo get_theme_file_uri('images/icon-phone.svg')?>" alt="" />
                  <input
                    type="tel"
                    name="phone"
                    id="phone"
                    placeholder="phone"
                  />
                </div>
              </div>
            </form>
          </div>
          <div class="payment-form-container">
            <form action="">
              <h1>Payment</h1>
              <div class="radio-btn-options">
               <div class="radio-btn-left">
                <input
                type="radio"
                id="payment"
                name="payment"
                value="Credit/Debit Cart "
              />
              <label for="payment">Credit/Debit Cart</label>
               </div>
               <div class="radio-btn-right">
                <input
                  type="radio"
                  id="payment"
                  name="payment"
                  value="paypal "
                />
                <label for="payment"
                  ><img src="<?php echo get_theme_file_uri('images/icon-paypal.svg')?>" alt=""
                /></label>
                </div>
              </div>

              <div class="input-box">
                <img src="<?php echo get_theme_file_uri('images/icon-credit-card.svg')?>" alt="" />
                <input
                  type="number"
                  name="card-number"
                  id="card-number"
                  placeholder="Card Number"
                />
              </div>
              <div class="input-type-group">
                <div class="input-box">
                  <img src="<?php echo get_theme_file_uri('images/icon-calender.svg')?>" alt="" />
                  <input
                    type="date"
                    name="expiry"
                    id="expiry"
                    placeholder="Expire date"
                  />
                </div>
                <div class="input-box">
                  <img src="<?php echo get_theme_file_uri('images/icon-lock.svg')?>" alt="" />
                  <input
                    type="number"
                    name="cvc"
                    id="cvc"
                    placeholder="CVC/CVV"
                  />
                </div>
              </div>
              <a href=""
                >Book now <img src="<?php echo get_theme_file_uri('images/icon-chevron-right-white.svg')?>" alt=""
              /></a>
            </form>
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
  
        <button onclick="backtoTop()" id="myBtn"><img src="<?php echo get_theme_file_uri('images/icon-chevron-top.svg')?>" alt="" /></button>
      </div>
    </div>
    
   <?php wp_footer();?>
  </body>
</html>
