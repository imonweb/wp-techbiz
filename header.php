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
            <div class="vs-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home 1 - Layerslider</a></li>
                            <li><a href="index-slickslider.html">Home 1 - Slickslider</a></li>
                            <li><a href="index-2.html">Home 2 - Layerslider</a></li>
                            <li><a href="index-2-slickslider.html">Home 2 - Slickslider</a></li>
                            <li><a href="index-3.html">Home 3 - Layerslider</a></li>
                            <li><a href="index-3-slickslider.html">Home 3 - Slickslider</a></li>
                            <li><a href="index-4.html">Home 4 - Layerslider</a></li>
                            <li><a href="index-4-slickslider.html">Home 4 - Slickslider</a></li>
                            <li><a href="index-5.html">Home 5 - Layerslider</a></li>
                            <li><a href="index-5-slickslider.html">Home 5 - Slickslider</a></li>
                            <li><a href="index-6.html">Home 6</a></li>
                            <li><a href="index-7.html">Home 7 <span class="new-label">new</span></a></li>
                            <li><a href="index-8.html">Home 8 <span class="new-label">new</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.html">About Us</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="blog.html">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog List</a></li>
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="blog.html#none">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="price-plan.html">Pricing Plans</a></li>
                            <li><a href="project.html">Projects</a></li>
                            <li><a href="project-details.html">Projects Details</a></li>
                            <li><a href="service.html">Service</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="blog.html#none"><span class="has-new-lable">Elements<span
                                    class="new-label">new</span></span></a>
                        <ul class="sub-menu">
                            <li><a href="element-typography.html">Typography</a></li>
                            <li><a href="element-buttons.html">Buttons</a></li>
                            <li><a href="element-columns.html">Columns</a></li>
                            <li><a href="element-messagebox.html">Message Box</a></li>
                            <li><a href="element-separators.html">Separators</a></li>
                            <li><a href="element-services.html">Services Card</a></li>
                            <li><a href="element-testimonials.html">Testimonials</a></li>
                            <li><a href="element-projectbox.html">Project Box</a></li>
                            <li><a href="element-priceplan.html">Price Plan</a></li>
                            <li><a href="element-counters.html">Counters</a></li>
                            <li><a href="https://html.vecurosoft.com/techbiz/demo/element-accordions.html">Accordions</a></li>
                            <li><a href="element-team.html">Team</a></li>
                            <li><a href="element-process.html">Process</a></li>
                            <li><a href="element-blogcard.html">Blog Card</a></li>
                            <li><a href="element-ctas.html">Call To Actions</a></li>
                            <li><a href="element-map.html">Google Map</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
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