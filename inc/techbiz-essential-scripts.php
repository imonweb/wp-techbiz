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

function techbiz_enqueue_scripts() {

  // CSS File
  wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'techbiz_enqueue_scripts', 99 );