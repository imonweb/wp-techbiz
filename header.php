<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- <title>TechBiz - IT Solution & Service HTML Template - Blog List</title> -->

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->

  <?php 
    /*
    ================================================
      Hook
      Hook Name: techbiz_preload_action
      Callback function techbiz_preloader_action_cb 
    ================================================
    */

    do_action( 'techbiz_preloader_action' );

    /*
    ================================================
      Hook
      Hook Name: techbiz_preload_action
      Callback function techbiz_header_cb 
    ================================================
    */

    do_action( 'techbiz_header' );
  ?>


 
    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="assets/img/logo.png" alt="TechBiz" class="logo"></a>
            </div>
             <?php  if( has_nav_menu( 'mobile_menu' ) ) { ?>
            <div class="vs-mobile-menu">
                <?php 
                    wp_nav_menu( array(
                        'theme_location'    =>  'mobile_menu',
                        'container'         =>  ''
                    ));
                ?>
            </div>
            <?php } ?>
        </div>
    </div>
    
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Blog List</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>Blog List</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>