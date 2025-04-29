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