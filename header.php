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
                    <div class="col">
                        <div class="header-logo">
                            <a href="index.html"><img src="assets/img/logo.png" alt="TechBiz" class="logo"></a>
                        </div>
                    </div>
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
                        <div class="col-auto">
                            <nav class="main-menu menu-style1 d-none d-lg-block">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="index.html"><span class="has-new-lable">Home<span
                                                    class="new-label">new</span></span></a>
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
                                            <li><a href="index-6.html">Home 6 - Layerslider</a></li>
                                            <li>
                                                <a href="index-7.html">
                                                    Home 7 - Slickslider
                                                    <span class="new-label">new</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-8.html">
                                                    Home 8 - Slickslider
                                                    <span class="new-label">new</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about.html">About Us</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="service.html">Service</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Service</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children mega-menu-wrap">
                                        <a href="blog.html#">Pages</a>
                                        <ul class="mega-menu">
                                            <li><a href="https://html.vecurosoft.com/techbiz/demo/shop.html">Pagelist 1</a>
                                                <ul>
                                                    <li><a href="index.html">Home 1 - Layerslider</a></li>
                                                    <li><a href="index-slickslider.html">Home 1 - Slickslider
                                                            <span class="new-label">new</span></a></li>
                                                    <li><a href="index-2.html">Home 2 - Layerslider</a></li>
                                                    <li><a href="index-2-slickslider.html">Home 2 - Slickslider
                                                            <span class="new-label">new</span></a></li>
                                                    <li><a href="index-3.html">Home 3 - Layerslider</a></li>
                                                    <li><a href="index-3-slickslider.html">Home 3 - Slickslider
                                                            <span class="new-label">new</span></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html#">Pagelist 2</a>
                                                <ul>
                                                    <li><a href="index-4.html">Home 4 - Layerslider <span
                                                                class="new-label">new</span></a></li>
                                                    <li><a href="index-4-slickslider.html">Home 4 - Slickslider
                                                            <span class="new-label">new</span></a></li>
                                                    <li><a href="index-5.html">Home 5 - Layerslider <span
                                                                class="new-label">new</span></a></li>
                                                    <li><a href="index-5-slickslider.html">Home 5 - Slickslider
                                                            <span class="new-label">new</span></a></li>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="price-plan.html">Pricing Plans</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html#">Pagelist 3</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog List</a></li>
                                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                    <li><a href="service.html">Service</a></li>
                                                    <li><a href="service-details.html">Service Details</a></li>
                                                    <li><a href="team.html">Team</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html#">Pagelist 4</a>
                                                <ul>
                                                    <li><a href="team-details.html">Team Details</a></li>
                                                    <li><a href="project.html">Projects</a></li>
                                                    <li><a href="project-details.html">Projects Details</a></li>
                                                    <li><a href="contact.html">Contact Us</a></li>
                                                    <li><a href="error.html">Error Page</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children mega-menu-wrap">
                                        <a href="blog.html#"><span class="has-new-lable">Elements<span
                                                    class="new-label">new</span></span></a>
                                        <ul class="mega-menu">
                                            <li><a href="https://html.vecurosoft.com/techbiz/demo/shop.html">Elements</a>
                                                <ul>
                                                    <li><a href="element-typography.html">Typography</a></li>
                                                    <li><a href="element-buttons.html">Buttons</a></li>
                                                    <li><a href="element-columns.html">Columns</a></li>
                                                    <li><a href="element-messagebox.html">Message Box</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html#">Elements</a>
                                                <ul>
                                                    <li><a href="element-separators.html">Separators</a></li>
                                                    <li><a href="element-services.html">Services Card</a></li>
                                                    <li><a href="element-testimonials.html">Testimonials</a>
                                                    </li>
                                                    <li><a href="element-projectbox.html">Project Box</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="blog.html#">Elements</a>
                                                <ul>
                                                    <li><a href="element-priceplan.html">Price Plan</a></li>
                                                    <li><a href="element-counters.html">Counters</a></li>
                                                    <li><a href="https://html.vecurosoft.com/techbiz/demo/element-accordions.html">Accordions</a></li>
                                                    <li><a href="element-team.html">Team</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="blog.html#">Elements</a>
                                                <ul>
                                                    <li><a href="element-process.html">Process</a></li>
                                                    <li><a href="element-blogcard.html">Blog Card</a></li>
                                                    <li><a href="element-ctas.html">Call To Actions</a></li>
                                                    <li><a href="element-map.html">Google Map</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                        </div>
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