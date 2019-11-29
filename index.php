<?php

/* Template Name: Home */

get_header();

?>
<div class="se-pre-con"></div>

<div class="fullpage">
  <!-- header section -->
  <header>
      <!-- background video of the header area -->
    <section class="video-fullpage">
        <!-- Background video -->
        <video class="videoplayer" autoplay muted  loop id="myVideo">
          <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/backgrounds/one400.mov" type="video/mp4">
        </video>
        <div class="video-background"></div>
      </section>
  </header>
  <!-- Main Slider -->
  <section class="header-slider section">
      <!-- slide 01-->
      <div class="tab slide header-content fadeInDown animated" data-anchor="slide1">
        <div class="container">
            <div class="content">
                <div class="tab-navigation fadeInDown animated">
                  <ul>
                    <li onclick="slideTab(1)" class="slide1"><span><!-- SERVICE BY SEGMENT --></span></li>
                    <li onclick="slideTab(2)" class="slide2"></li>
                    <li onclick="slideTab(3)" class="slide3"></li>
                    <li onclick="slideTab(4)" class="slide4"></li>
                  </ul>
                </div>
                <h3 class="title fadeInDown animated">Fueling the Future of Legal Technology</h3>
                <h5 class="fadeInDown animated">Explore services crafted for your specific segment.</h5>
                <div class="fadeInDown animated right-content">
                    Business leaders turn to ONE400 for guidance as they build the successful organizations of tomorrow.
                    <br>
                    <a href="#" class="modal-open link">Contact us</a>
                  </div>
                  <div class="segment-dropdown">
                      <div class="selectbox">
                        <div> <h5>Choose your segment</h5></div>
                        <i class="fa fa-chevron-right fa-rotate-90"></i>
                      </div>
                      <div class="contentwrapper">
                        <div class="dropdown-menu">
                            <ul>
                              <li>
                                <a href="#"> <p>Solo + Small firm </p>
                               
                                <picture>
                                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/webp/man1.webp" type="image/webp">
                                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/man1.png"pngtype="image/png"> 
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/webp/man1.webp" alt="">
                                </picture>
                              </a>
                              </li>
                              <li>
                                <a href="#"> <p>Solo + Small firm </p>
                                <picture>
                                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/webp/man3.webp" type="image/webp">
                                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/man3.png"pngtype="image/png"> 
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/webp/man3.webp" alt="">
                                </picture>
                                </a>
                              </li>
                              <li>
                                <a href="#"> <p>Solo + Small firm </p>
                                <picture>
                                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/webp/woman.webp" type="image/webp">
                                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/woman.png"pngtype="image/png"> 
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/webp/woman.webp" alt="">
                                </picture>
                              </a>
                              </li>
                              <li>
                                <a href="#"> <p>Solo + Small firm </p>
                                <picture>
                                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/webp/man2.webp" type="image/webp">
                                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/man2.png"pngtype="image/png"> 
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/webp/man2.webp" alt="">
                                </picture>
                              </a>
                              </li>
                              <li>
                                <a href="#"> <p>Solo + Small firm </p>
                                <picture>
                                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/webp/man1.webp" type="image/webp">
                                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/man1.png"pngtype="image/png"> 
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/webp/man1.webp" alt="">
                                </picture>
                              </a>
                              </li>
                              <li>
                                <a href="#"> <p>Solo + Small firm </p>
                                <picture>
                                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/webp/woman.webp" type="image/webp">
                                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/woman.png"pngtype="image/png"> 
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/webp/woman.webp" alt="">
                                </picture>
                                </a>
                              </li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    <div class="featured-image">
                      <picture>
                          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/webp/ONE400_technology.webp" type="image/webp">
                          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/ONE400_technology.png"pngtype="image/png"> 
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ONE400_technology.png" alt="Alt Text!">
                        </picture>
                    </div>
              </div>
        </div>
         
      </div>
      <!-- slide 02-->
      <div class="tab slide header-content fadeInDown animated" data-anchor="slide2">
        <div class="container">
          <div class="content">
            <div class="tab-navigation">
              <ul>
                <li onclick="slideTab(1)" class="slide1"></li>
                <li onclick="slideTab(2)" class="slide2"><span><!-- SERVICE BY SEGMENT --></span></li>
                <li onclick="slideTab(3)" class="slide3"></li>
                <li onclick="slideTab(4)" class="slide4"></li>
              </ul>
            </div>
            <h3 class="title">Empowering Creative Businesses</h3>
            <h5>Counsel for Creators goal is to reinvent the law firm experience for creative businesses of all sizes.</h5>
            <a class="link" href="#">View the case study<i class="fas fa-arrow-right" aria-hidden="true"></i></a>
            <div class="featured-image2">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/webp/slider2.webp" type="image/webp">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/slider2.png"pngtype="image/png"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider2.png" alt="Alt Text!">
                  </picture>
            </div>
          </div>
        </div>
      </div>
        <!-- slide 03-->
      <div class="tab slide header-content fadeInDown animated" data-anchor="slide3">
          <div class="container">
              <div class="content">
                  <div class="tab-navigation">
                    <ul>
	                    <li onclick="slideTab(1)" class="slide1"></li>
	                    <li onclick="slideTab(2)" class="slide2"></li>
	                    <li onclick="slideTab(3)" class="slide3"><span><!-- SERVICE SPOTLIGHT --></span></li>
	                	<li onclick="slideTab(4)" class="slide4"></li>
                    </ul>
                  </div>
                  <h3 class="title">Legal Hosting & Management</h3>
                  <h5>A premium level of support and management built for the legal industry. Fast, reliable and secure.</h5>
                  <a class="link" href="#">Read the article<i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                   
                      <div class="featured-image2">
                          <picture>
                              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/webp/slider3.webp" type="image/webp">
                              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/slider3.png"pngtype="image/png"> 
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider3.png" alt="Alt Text!">
                            </picture>
                      </div>
                </div>
          </div>
      </div>
   <!-- slide 04-->
   <div class="tab slide header-content " data-anchor="slide3">
    <div class="container">
      <div class="content">
        <div class="tab-navigation">
          <ul>
            <li onclick="slideTab(1)" class="slide1"></li>
            <li onclick="slideTab(2)" class="slide2"></li>
            <li onclick="slideTab(3)" class="slide3"></li>
            <li onclick="slideTab(4)" class="slide4"><span><!-- ARTICLE --></span></li>
          </ul>
        </div>
        <h3 class="title">How the latest tech will shake up legal</h3>
        <h5>Read on to see our predictions for the future of legal tech.</h5>
        <a class="link" href="#">Read the article<i class="fas fa-arrow-right" aria-hidden="true"></i></a>
        <div class="featured-image">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/webp/ONE400_technology.webp" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/ONE400_technology.png"pngtype="image/png"> 
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ONE400_technology.png" alt="Alt Text!">
              </picture>
        </div>
      </div>
    </div>
  </div>
      <!-- Services tabs on the home page banner area -->
      <div class="service-rollovers">
          <div class="tab pd-l-tab">
            <span>Strategy + Consulting</span>
            <div class="inner">
                <span>
                <p>Strategic Planning</p>
                <p>Legal Technology Consulting</p>
                <p>Optimization Strategy</p>
                </span>
                <a class="link" href="#">Learn more <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="tab">
            <span>Brand + Experience Design</span>
            <div class="inner">
                <span>
                  <p>Website + Mobile Design</p>
                  <p>UX Strategy + Design</p>
                  <p>Brand Research + Strategy</p>
                </span>
                <a class="link" href="#">Learn more <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="tab">
            <span>Technology</span>
            <div class="inner">
                <span>
                  <p>Product Development</p>
                  <p>Web Development</p>
                  <p>Legal Hosting + Management</p>
                </span> 
                <a class="link" href="#">Learn more <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="tab pd-r-tab">
            <span>Digital Marketing</span>
            <div class="inner pd-r">
                <span>
                  <p>Content Creation + Automation</p>
                  <p>SEO (Search Engine Optimization)</p>
                  <p>PPC (Pay Per Click)</p>
                </span>
                <a class="link" href="#">Learn more <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
            </div>
          </div>
      </div> 
    </section>

    <!-- home page main content block -->
    <section class="block home-top-content fp-auto-height section">
      <div class="container">
          <div class="content">
            <h2 class="h2">Design a plan for the present and future of your organization</h2>
            <article class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor consectetur adipiscing elitconsectetur adipiscing elit.</article>

            <div class="mobile-only"> <a class="btn btn-block btn-primary">Explore all services</a> </div>
          </div>
      </div>
    </section>
    <!-- home page main content block -->
    <!-- home page case studies section  -->
    <section class="case-study-section section">
      <!-- slide - case study -->
      <div class="slide" id="slide0" data-anchor="slide0" 
      <?php if( strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) { ?>
        style="background: url(<?php echo get_template_directory_uri(); ?>/assets/webp/home-case-study.webp);"
          <?php } else { ?>
        style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/home-case-study.jpg);"
        <?php } ?>
      >
        <!-- inner content of the case study slider -->
        <div class="inner-content">
          <div class="container">
              <div class="content">
                  <small>Signature Resolution</small>
                  <h1>A modern redesign for a sophisticated brand</h1>
                  <a class="btn btn-primary" href="#">View the case study</a>
                  <span>
                    <a class="link" href="#">View all featured case studies <i class="fas fa-arrow-right"></i> </a>
                  </span>
              </div>
          </div>
        </div>
      </div>
    <!-- slide - case study -->
    <div class="slide" id="slide1" data-anchor="slide1" 
    <?php if( strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) { ?>
        style="background: url(<?php echo get_template_directory_uri(); ?>/assets/webp/home-case-study.webp);"
          <?php } else { ?>
        style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/home-case-study.jpg);"
        <?php } ?>    
      >
      <!-- inner content of the case study slider -->
      <div class="inner-content">
        <div class="container">
        <div class="content">
            <small>Signature Resolution</small>
            <h1>A modern redesign for a sophisticated brand</h1>
            <a class="btn btn-primary" href="#">View the case study</a>
            <span>
              <a class="link" href="#">View all featured case studies <i class="fas fa-arrow-right"></i> </a>
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- slide - case study -->
    <div class="slide" id="slide2" data-anchor="slide2" 
      <?php if( strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) { ?>
        style="background: url(<?php echo get_template_directory_uri(); ?>/assets/webp/home-case-study.webp);"
          <?php } else { ?>
        style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/home-case-study.jpg);"
        <?php } ?>    
      >
      <!-- inner content of the case study slider -->
      <div class="inner-content">
          <div class="container">
          <div class="content">
              <small>Signature Resolution</small>
              <h1>A modern redesign for a sophisticated brand</h1>
              <a class="btn btn-primary" href="#">View the case study</a>
              <span>
                <a class="link" href="#">View all featured case studies <i class="fas fa-arrow-right"></i> </a>
              </span>
            </div>
          </div>
        </div>
    </div>
    <!-- slide - case study -->
    <div class="slide" id="slide3" data-anchor="slide3" 
    <?php if( strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) { ?>
      style="background: url(<?php echo get_template_directory_uri(); ?>/assets/webp/home-case-study.webp);"
        <?php } else { ?>
      style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/home-case-study.jpg);"
      <?php } ?>
    >
      <!-- inner content of the case study slider -->
      <div class="inner-content">
          <div class="container">
          <div class="content">
              <small>Signature Resolution</small>
              <h1>A modern redesign for a sophisticated brand</h1>
              <a class="btn btn-primary" href="#">View the case study</a>
              <span> 
                <a class="link" href="#">View all featured case studies <i class="fas fa-arrow-right"></i></a>
              </span>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!-- STARTS CASE STUDIES SECTION  -->
  <section class="section fp-auto-height research-section">
    <div class="title-block">
      <div class="container">
        <h2>Research & Insights</h2>
      </div>
    </div>
    <div class="research-blocks">	
      <!-- reasarch-left-block -->
      <div class="reasarch-left-block">
     	<?php 
		
		//getting first 3 blogs

		$args = array(
		    'post_type'=> 'blog',
		    'areas'    => '',
		    'order'    => 'ASC',
		    'showposts' => 3, 
		    'orderby' => 1
		    );              

		$blog_query = new WP_Query( $args );

		if($blog_query->have_posts() ) : 

			$firstPost = true;
			$_index_no = 1;
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
			while ( $blog_query->have_posts() ) : 
			
				$blog_query->the_post(); 
		?>


	
	<?php if($firstPost) { ?>

          <div class="image mobile-only">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/webp/post-right.webp" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/post-right.png" type="image/jpeg"> 
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/post-right.png" alt="Alt Text!"> -->
                  <img src="<?php echo $featured_img_url; ?>" />
              </picture>
          </div>

        <div class="content-back-img" ></div>
        <div class="post content pd-l pd-r ">
          <h5>Tranding</h5>
          <h2><?php the_title(); ?></h2>
          <div class="content-info">
              <span><?php echo get_the_date( 'd.m.y' ) ?></span> |  <span> Article in <a href="#"><?php the_category(',') ?> </a> </span>
          </div>
          <a href=" <?php the_permalink(); ?> " class="desktop-only link">Read the post <i class="fas fa-arrow-right"></i> </a>
        </div>
        <div class="overlay"></div>


		<?php } ?>

		<?php if ($_index_no == 2) { ?>

			 <div class="content-bottom-block pd-l pd-r">
		          <div class="inner-content">
		           	<h2><?php the_title(); ?></h2>
		            <P><?php the_content(); ?></P>
		            <div class="content-info">
		                <span><?php echo get_the_date( 'd.m.y' ) ?>  </span> |  <span>Article in <?php the_category(',') ?></span>
		            </div>
		          </div>
		          <?php if ($_index_no == 3) { ?>
		          <div class="inner-content mobile-only">
		            <h2><?php the_title(); ?></h2>
		            <P><?php the_content(); ?></P>
		            <div class="content-info">
		                <span><?php echo get_the_date( 'd.m.y' ) ?> </span> |  <span>Article in  <?php the_category(',') ?> </span>
		            </div>
		          </div>
		          <?php } ?>
		          <div class="image">
		            <picture>
		                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/webp/post-left.webp" type="image/webp">
		                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/post-left.png" type="image/jpeg"> 
		                <img src="<?php echo $featured_img_url; ?>" />
		              </picture>
		          </div>
		        </div>
		<?php } ?>
		<?php 

			$firstPost = false;
			$_index_no++;
			endwhile; 
			endif; 
			wp_reset_postdata(); 
		?>
 		</div>

      <!-- reasarch-right-block -->
      <div class="reasarch-right-block">


      	<?php 
		
		//getting first 3 blogs

		$args = array(
		    'post_type'=> 'blog',
		    'areas'    => '',
		    'order'    => 'ASC',
		    'showposts' => 3, 
		    'orderby' => 1
		    );              

		$blog_query = new WP_Query( $args );

		if($blog_query->have_posts() ) : 

			$_index_no = 1;

			while ( $blog_query->have_posts() ) : 
			
				$blog_query->the_post(); 
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 

		?>


        <div class="image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/webp/post-right.webp" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/post-right.png" type="image/jpeg"> 
             <?php if ($_index_no == 1) {  ?>
              <img src="<?php echo $featured_img_url; ?>" />
             <?php } ?>
          </picture>
        </div>

        <?php if ($_index_no == 3) { ?>
          <div class="content-bottom-block pd-r">
              <div class="inner-content">
                <h2><?php the_title(); ?></h2>

                <div class="content-info">
                    <span> <?php echo get_the_date( 'd.m.y' ) ?> </span> |  <span>Article in <?php the_category(',') ?> </span>
                </div>
                <a class="btn btn-secondary desktop-only" href="#"> Explore all research + insights <i class="fas fa-arrow-right"></i> </a>
                <a href="#" class="link mobile-only">View all articles <i class="fas fa-arrow-right" aria-hidden="true"></i> </a>
              </div>
          </div>
      	<?php 
      		} 

			$_index_no++;
			endwhile; 
			endif; 
			wp_reset_postdata(); 
		?>
		</div>
    </div>
  </section>

  <!-- ENDS CASE STUDIES SECTION  -->
  <!-- STARTS BECOME A CLIENT SECTION -->
  <section class="become-a-click-block fp-auto-height section">
    <div class="content">
      <h2>ONE400 is a trusted advisor and a resource for legal organizations nationally and globally.</h2>
      <h4>Learn more about how we can help you achieve your most mission-critical priorities.</h4>
      <a class="btn btn-primary" href="#">Become a client </a>
    </div>
  </section>
  <!-- ENDS BECOME A CLIENT SECTION -->
  <!-- STARTS EXPLORE ONE400 AREA -->
  <section class="block explore-one-400 fp-auto-height section">
      <div class="row">
        <div class="left"> 
          <div class="image">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/webp/image-explore.webp" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/image-explore.jpg" type="image/jpeg"> 
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-explore.jpg" alt="Alt Text!">
              </picture>
          </div>
        </div>
        <div class="right">
            <h2 class="text-center">Explore ONE400</h2>
            <h6 class="text-center">Innovation doesn’t start with technology, it starts with people. At ONE400 we have dedicated team members whose very job is to innovate and contribute to our clients success on a daily basis.</h6>
            <a href="#" class="link desktop-only">Learn more about us <i class="fas fa-arrow-right"></i> </a>
            <a href="#"class="btn mobile-only btn-has-icon btn-secondary">Learn more about us <i class="fas fa-arrow-right"></i> </a>
            <a href="#" class="link">Meet the team <i class="fas fa-arrow-right"></i> </a>
        </div>
      </div>
  </section>
  <!-- ENDS EXPLORE ONE400 AREA -->
  <!-- START HOW CAN WE HELP BLOCK -->
  <section class="block how-can-we-help-section fp-auto-height section">
    <div class="container">
      <div class="row">
        <div class="left">
            <h2 class="text-center">How can we help you?</h2>
            <h6 class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h6>
        </div>
        <div class="right"> <a href="#"  class="btn modal-open contactmodalopen btn-primary">Contact Us</a> </div>
      </div>
    </div>
  </section>
  <!-- ENDS HOW CAN WE HELP BLOCK -->


<?php
get_footer();

?>
