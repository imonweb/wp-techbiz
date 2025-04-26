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

// Preloader Action
add_action( 'techbiz_preloader_action', 'techbiz_preloader_action_cb', 10 );