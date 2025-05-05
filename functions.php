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
* Include File
*/

require_once get_parent_theme_file_path('inc/techbiz-essential-scripts.php');

// Theme Setup
require_once get_parent_theme_file_path( 'inc/theme-setup.php');

// Register Sidebar
require_once get_parent_theme_file_path( 'inc/techbiz-widgets-reg.php');

// Hooks Function
require_once get_parent_theme_file_path( 'inc/hooks/hooks-function.php' );
require_once get_parent_theme_file_path( 'inc/hooks/hooks.php' );

// Techbiz Options
require_once get_parent_theme_file_path( 'inc/techbiz-framework/techbiz-option/techbiz-options.php' );