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

echo '<div class="page-content space">';
  echo '<div class="container">';
    echo '<div class="row">';

if( have_posts() ){
  while( have_posts() ){
    the_post();
    // Load Content
    the_content();
  }
  wp_reset_postdata();
}

    echo '</div>';
  echo '</div>';
echo '</div>';

/*  
* Footer Area
*/

get_footer();