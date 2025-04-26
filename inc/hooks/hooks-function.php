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
    ?>
      <div class="preloader  ">
          <button class="vs-btn preloaderCls">Cancel Preloader </button>
          <div class="preloader-inner">
              <span class="loader"></span>
          </div>
      </div>
    <?php
  }
}