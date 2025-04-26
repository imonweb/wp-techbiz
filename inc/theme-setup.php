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

// Callback Functions

if( ! function_exists( 'techbiz_theme_setup' ) ){
  function techbiz_theme_setup(){
    add_theme_support( 'title-tag' );
  }
}
add_action( 'after_setup_theme', 'techbiz_theme_setup', 10 );