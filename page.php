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

/*  
* Header Area
*/

get_header();

echo '<div class="page-content">';

if( have_posts() ){
  while( have_posts() ){
    the_post();
    // Load Content
    the_content();
  }
  wp_reset_postdata();
}

/*  
* Footer Area
*/

get_footer();