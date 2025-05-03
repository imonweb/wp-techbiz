<?php 
/*
================================================
   @package: Techbiz
   @version: 1.0
   @author: Imon
   @author: https://www.vecurosoft.com 
================================================
*/

// Block direct access
if( ! defined( 'ABSPATH') ){
  exit;
}

// Preloader

if( ! function_exists('techbiz_preloader_action_cb')){
  function techbiz_preloader_action_cb(){
    global $techbiz_opt;

    $techbiz_preloader_text = $techbiz_opt['techbiz_preloader_text'];
    // var_dump($techbiz_preloader_text);
    
      echo '<div class="preloader  ">';
          if(! empty($techbiz_preloader_text)){
          echo '<button class="vs-btn preloaderCls">'. esc_html($techbiz_preloader_text) .' </button>';
          }
          echo '<div class="preloader-inner">';
              echo '<span class="loader"></span>';
          echo '</div>';
      echo '</div>';
    
  }
}

// Header

if( ! function_exists('techbiz_header_cb')){
  function techbiz_header_cb(){
    global $techbiz_opt;
    ?>
    <!--==============================
        Header Area
    ==============================-->
    <header class="vs-header header-layout1">
        <!-- Header Top -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center justify-content-between gy-1 text-center text-lg-start">
                    <div class="col-lg-auto">
                        <p class="header-text"><span class="fw-medium">Now Hiring:</span> Are you a driven and motivated
                            1st Line IT Support Engineer?</p>
                    </div>
                    <div class="col-lg-auto">
                        <p class="header-text"><i class="fal fa-clock"></i>Office Hours: 08:00am-6:00pm</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="menu-top">
                <div class="row justify-content-between align-items-center gx-sm-0">

                    <?php 
                      if( has_custom_logo() ){
                        $logo_id = get_theme_mod( 'custom_logo' );
                        $logo_url = wp_get_attachment_image_url( $logo_id, 'full' );
                        // var_dump($logo_id);
                      
                    ?>
                    <div class="col">
                        <div class="header-logo">
                            <a href="<?php echo home_url('/'); ?>"><img src="<?php echo $logo_url ?>" alt="<?php echo esc_attr__( 'Techbiz Logo', 'techbiz' ); ?>" class="logo"></a>
                        </div>
                    </div>
                    <?php 
                      } elseif( class_exists('reduxframework')) {
                        ?>
                          <div class="col">
                              <div class="header-logo">
                                  <a href="<?php echo home_url('/'); ?>"><img src="<?php echo $techbiz_opt['techbiz_logo']['url']; ?>" alt="<?php echo esc_attr__( 'Techbiz Logo', 'techbiz' ); ?>" class="logo"></a>

                                  <?php 
                                    // var_dump($techbiz_opt['techbiz_logo'])
                                  ?>
                              </div>
                          </div>
                        <?php
                      } else {
                        ?>
                          <div class="col">
                              <div class="header-logo">
                                  <h2>
                                    <a href="<?php echo home_url('/'); ?>"><?php echo bloginfo( 'name' );  ?></a>
                                  </h2>
                              </div>
                          </div>
                        <?php
                      }
                    ?>
                    <div class="col-auto header-info ">
                        <div class="header-info_icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="media-body">
                            <span class="header-info_label">Call Anytime 24/7</span>
                            <div class="header-info_link"><a href="tel:+26921562148">(+269) 2156 2148</a></div>
                        </div>
                    </div>
                    <div class="col-auto header-info d-none d-lg-flex">
                        <div class="header-info_icon"><i class="fas fa-envelope"></i></div>
                        <div class="media-body">
                            <span class="header-info_label">Mail Us For Support</span>
                            <div class="header-info_link"><a href="mailto:info@TechBiz.com">info@TechBiz.com</a></div>
                        </div>
                    </div>
                    <div class="col-auto header-info d-none d-xl-flex">
                        <div class="header-info_icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="media-body">
                            <span class="header-info_label">Office Address</span>
                            <div class="header-info_link">259 HGS, Hotland, USA</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <!-- Main Menu Area -->
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <?php  if( has_nav_menu( 'primary_menu' ) ) { ?>
                        <div class="col-auto">
                            <nav class="main-menu menu-style1 d-none d-lg-block">
                              <?php 
                                wp_nav_menu( array(
                                  'theme_location' => 'primary_menu',
                                  'container'      => ''
                                ) );
                              ?>
                            </nav>
                            <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                        </div>
                        <?php } ?>
                        <div class="col-auto ">
                            <form action="#" class="header-search">
                                <input type="text" placeholder="Search here...">
                                <button type="submit" aria-label="search-button"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php
  }
}