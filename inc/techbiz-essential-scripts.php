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
  wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/assets/css/bootstrap.min.css' ), array(), '5.0.0' );
  wp_enqueue_style( 'fontawesome', get_theme_file_uri( '/assets/css/fontawesome.min.css' ), array(), '2.0.0' );
  wp_enqueue_style( 'magnific-popup', get_theme_file_uri( '/assets/css/magnific-popup.min.css' ), array(), '1.0.0' );
  wp_enqueue_style( 'techbiz-main', get_theme_file_uri( '/assets/css/style.css' ), array(), '1.0.0' );

  // JS File 
  wp_enqueue_script( 'bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js'), array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'isotope-pkgd', get_theme_file_uri('/assets/js/isotope.pkgd.min.js'), array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'jquery-magnific-popup', get_theme_file_uri('/assets/js/jquery.magnific-popup.min.js'), array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'jquery-marquee', get_theme_file_uri('/assets/js/jquery-marquee.min.js'), array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'layerslider-kreaturamedia', get_theme_file_uri('/assets/js/layerslider.kreaturamedia.min.js'), array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'layerslider-transitions', get_theme_file_uri('/assets/js/layerslider-transitions.min.js'), array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'layerslider-utils', get_theme_file_uri('/assets/js/layerslider-utils.min.js'), array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'slick', get_theme_file_uri('/assets/js/slick.js'), array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'wow', get_theme_file_uri('/assets/js/wow.min.js'), array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'techbizmain', get_theme_file_uri('/assets/js/main.js'), array( 'jquery' ), '1.0.0', true );


}

add_action( 'wp_enqueue_scripts', 'techbiz_enqueue_scripts', 99 );