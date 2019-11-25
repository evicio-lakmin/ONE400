<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ONE400</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">
	<!-- font awesome link -->
  <script src="https://kit.fontawesome.com/d25f4dcc2b.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Main NavBar -->
<nav class="main-navbar">   
  <div class="nav-container desktop-only">
    <div class="logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav-logo.svg" alt=""></a></div>       
    <div class="search-area">
      <div class="search-container">
        <input class="search-input" type="text" placeholder="Search...">
        <div class="search-icon"></div>
      </div>
    </div> 
    <div>
      <a href="#menu" class="menu-link">
        <span>Menu</span>
      </a>
    </div>
  </div>
</nav>
<div class="fixed-header"> 
    <div id="menu" class="panel">
      <div class="menu-container">
        <div class="panel-logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav-logo_b.png" alt=""></a></div>
        <!-- Main Menu Items -->
        <div class="menu-items menu-tab desktop-only">
            <nav>
                <ul class="menu-gap desktop">
                      <li><a data-scroll href="#" class="tablinks active" onmouseover="showInfo(event, 'Services')">Services</a></li>
                      <li><a data-scroll href="#" class="tablinks" onmouseover="showInfo(event, 'Work')">Work</a></li>
                      <li><a data-scroll href="#" class="tablinks" onmouseover="showInfo(event, 'Insights')">Insights</a></li>
                      <li><a data-scroll href="#" class="tablinks" onmouseover="showInfo(event, 'About')">About</a></li>
                      <li><a data-scroll href="#" class=" modal-open tablinks" onmouseover="showInfo(event, 'ContactUs')">Contact Us</a></li>
                  </ul>
              </nav>
        </div>
        <!-- Main Menu Items Info -->
        <div class="menu-item-info">
          <!-- Services -->
            <div id="Services" class="tabcontent">
                <div class="info-content">
                  <h3>Core Services</h3>
                  <ul>
                    <li>Strategy + Consulting</li>
                    <li>Brand + Experience Design</li>
                    <li>Technology</li>
                    <li>Marketing </li>
                  </ul>
                </div>
                <div class="info-content">
                  <h3>Service by Segment</h3>
                  <ul>
                    <li>Solo + Small Firms</li>
                    <li>Mid-Size + Large Firms</li>
                    <li>Class Action Firms</li>
                    <li>Legal Tech Organizations</li>
                    <li>Bar Associations</li>
                    <li>Legal Support Professionals</li>
                  </ul>
                </div>
              </div>
              <!-- Work -->
              <div id="Work" class="tabcontent">
                  <div class="info-content">
                    <h3>Design a plan for the present and future of your organization</h3>
                    <ul>
                      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                          Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</li>
                    </ul>
                  </div>
              </div>
              <!-- Insights -->
              <div id="Insights" class="tabcontent">
                  <div class="info-content">
                    <h3>Your trusted resource for the latest ideas on everything legal tech. </h3>
                    <ul>
                      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                          Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</li>
                    </ul>
                  </div>
              </div>
              <!-- About -->
              <div id="About" class="tabcontent">
                  <div class="info-content">
                    <h3>Innovation doesn’t start with technology, it starts with people.</h3>
                    <ul>
                      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                          Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</li>
                    </ul>
                  </div>
              </div>
              <!-- Contact Us -->
              <div id="ContactUs" class="tabcontent">
                  <div class="info-content">
                    <h3>Contact us to help you achieve your most mission-critical priorities. </h3>
                    <ul>
                      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                          Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</li>
                    </ul>
                  </div>
              </div>
        </div>
        <!-- Mobile Main Menu -->
        <div class="mobile-only">
          <header class="nav-top mobile-only">            
            <div class="mob-logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav-logo.svg" alt=""></a></div> 
            <a class="mob-menu-ham" id="ham"><span></span></a>    
          </header>
          <nav class="nav-drill">
            <ul class="nav-items nav-level-1">
              <li class="nav-item nav-expand">
                <a class="nav-link nav-expand-link" href="#">Services</a>
                <ul class="nav-items nav-expand-content">
                  <li class="nav-item nav-expand">
                      <input id="collapsible1" class="toggle" type="checkbox">
                      <label for="collapsible1" class="nav-link-collapse nav-expand-link">
                        CORE SEVICES
                        <i class="fas fa-plus mobile-only " aria-hidden="true"></i>
                      </label>
                      <div class="collapsible-content">
                        <ul>
                            <li class="nav-sub-link">
                                <a href="#">Strategy + Consulting</a>
                            </li>
                            <li class="nav-sub-link">
                                <a href="#">Brand + Experience Design</a>
                            </li>
                            <li class="nav-sub-link">
                                <a href="#">Technology</a>
                            </li>
                            <li class="nav-sub-link">
                                <a href="#">Marketing </a>
                            </li>
                        </ul>
                      </div>
                      <ul class="nav-items nav-expand-content"></ul>
                  </li>
                  <li class="nav-item nav-expand">
                      <input id="collapsible2" class="toggle" type="checkbox">
                      <label for="collapsible2" class="nav-link-collapse nav-expand-link">
                          SERVICE BY SEGMENT
                        <i class="fas fa-plus mobile-only " aria-hidden="true"></i>
                      </label>
                      <div class="collapsible-content">
                        <ul>
                            <li class="nav-sub-link">
                                <a href="#">Solo + Small Firm</a>
                            </li>
                            <li class="nav-sub-link">
                                <a href="#">Mid-Size + Large Firm</a>
                            </li>
                            <li class="nav-sub-link">
                                <a href="#">Class Action</a>
                            </li>
                            <li class="nav-sub-link">
                                <a href="#">Legal Tech Organization </a>
                            </li>
                            <li class="nav-sub-link">
                                <a href="#">Bar Association </a>
                            </li>
                            <li class="nav-sub-link">
                                <a href="#">Legal Support Professionals </a>
                            </li>
                        </ul>
                      </div>
                      <ul class="nav-items nav-expand-content"></ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Work</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Insights</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> Contact Us</a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- END: Mobile Main Menu -->
      </div>   
    </div>
</div>
<!-- fullpage Js - Main div -->