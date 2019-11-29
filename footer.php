<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage ONE400
 * @since 1.0.0
 */

?>

<!-- FOOTER -->
<footer class="section fp-auto-height fp-auto-height-responsive">
    <div class="container">
      <div class="footer-rows">
        <!-- left-column -->
      <div class="left-column">
          <span class="logo-footer"><a href="https://one-400.com/ "><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="ONE400 Logo"></a></span>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</span>
          <span class="mobile-contact-no mobile-only number">(626) 578.5040</span>
           <div class="subscribe-links">
              <h5 onclick="expandList(this)">Subscribe</h5>
              <i class="fas mobile-only fa-plus"></i>
             <!--  <p>Receive monthly updates<br> from ONE400: </p> -->
              <div class="subscribe-serch">
                <input type="text" placeholder="Your email address"><button>Submit</button>
              </div>
          </div>
        
          <ul class="social-media-icons">
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        <!-- right-column -->
        <div class="right-column">
          <div class="contact-links">
            <h5 onclick="expandList(this)">Contact</h5>
            <i class="fas mobile-only fa-plus"></i>
            <p>Interested in becoming a client? <a class="link" href="#">Let’s connect</a></p>
            <p>Curious about working at <br>  ONE400? <a class="link" href="#">View openings</a></p>
            <p>Other inquiries <a class="link" href="#">Contact us</a></p>
          </div>
          <div class="location-links">
            <h5 onclick="expandList(this)">Locations</h5>
            <i class="fas mobile-only fa-plus"></i>
            <p>
              Los Angeles <br />
              300 S. Raymond Ave #8 <br />
              Pasadena, CA 91105 <br />
              1.626.578.5040
            </p>
            <p>
              New York<br />
              576 Fifth Ave Suite <br />
              903<br />
              New York, NY 10036 
            </p>
            <p>
              Guadalajara<br />
              576 Fifth Ave Suite 903 <br />
              New York, NY 10036 <br />
              1.646.374.2512 
            </p>
          </div>
          <div class="link-section">
            <h5 onclick="expandList(this)">Services</h5>
            <i class="fas mobile-only fa-plus"></i>
            <ul>
              <li><a href="#">Strategy + Consulting</a></li>
              <li><a href="#">Brand + Design</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">Digital Marketing </a></li>
            </ul>
          </div>
          <div class="link-section">
            <h5 onclick="expandList(this)">Segments</h5>
            <i class="fas mobile-only fa-plus"></i>
            <ul>
              <li><a href="#">Solo + Small Firms</a></li>
              <li><a href="#">Mid-Size + Large Firms</a></li>
              <li><a href="#">Class Action Firms</a></li>
              <li><a href="#">Legal Tech Organizations</a></li>
              <li><a href="#">Bar Associations</a></li>
              <li><a href="#">Legal Support Professionals</a></li>
            </ul>
          </div> 

            <ul class="mobile-only social-media-icons">
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
         
        </div>
      </div>
    </div>
  </footer>
  <div class="copyrights  fp-auto-height section" >
    <div class="container">
        <div class="sublinks"> <a href="#" class="modal-open">Contact Us</a>  |  <a href="#">Privacy Policy</a>  |  <a href="#">Cookie Policy</a>  |  <a href="#">Accessibility Statement</a> </div>
        <span>© Copyright  <?php echo date("Y"); ?> ONE400</span>
    </div>
  </div>
   <!-- FOOTER -->
</div>
<!-- Modal HTML embedded directly into document -->
<div id="contact" class="contact-modal panel">
    <div class="modal-overlay absolute w-full h-full bg-white opacity-95"></div>
    <div class="menu-container">
      <div class="panel-logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav-logo_b.png" alt=""></a></div>
      <!-- Main Menu Items -->
      <div class="modal-close">
          <i class="fa fa-close"></i>
        </div>
      <div class="inner-content">
          <div class="content-left">
              <h2>Let’s Connect</h2>
              <h5>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed.</h5>
              <div class="location-links">
                  <!-- <h5 >Locations</h5> -->
                  <address>
                    <strong>Los Angeles</strong> <br />
                    300 S. Raymond Ave #8 <br />
                    Pasadena, CA 91105 <br />
                    1.626.578.5040
                  </address>
                  <address>
                      <strong>New York</strong><br />
                    576 Fifth Ave Suite 903 <br />
                    New York, NY 10036 <br />
                    1.646.374.2512 
                  </address> 
                  <address>
                      <strong>Guadalajara</strong><br />
                    576 Fifth Ave Suite 903 <br />
                    New York, NY 10036 <br />
                    1.646.374.2512 
                  </address>
                </div>
                <ul class="social-media-icons">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul>
          </div>
          <div class="content-right">
              
            <div class="form">
                <form class="contact100-form validate-form">
                  <div class="wrap-input100 validate-input" data-validate="Please enter your name">
                    <input class="input100" type="text" name="name" placeholder="Name of Business*">
                    <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Please enter your email: e@a.x">
                    <input class="input100" type="text" name="email" placeholder="E-mail*">
                    <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Please enter your phone">
                    <input class="input100" type="text" name="phone" placeholder="Phone">
                    <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Please enter your message">
                    <textarea class="input100" name="message" placeholder="How can we help you?"></textarea>
                    <span class="focus-input100"></span>
                    </div>
                    <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn btn btn-primary">
                    <span>
                    <!-- <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i> -->
                    Submit
                    </span>
                    </button>
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
      <!-- END: Mobile Main Menu -->
    </div>   
  </div>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/menuFullpage.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fullpage.extensions.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fullpage.scrollHorizontally.min.js"> </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script> 
<?php wp_footer(); ?>

</body>
</html>
