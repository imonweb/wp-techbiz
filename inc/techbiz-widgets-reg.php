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

/**
 * Add a sidebar.
 */
function techbiz_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Sidebar', 'techbiz' ),
		'id'            => 'techbiz-footer-1',
		'description'   => __( 'Widgets in this area will be shown in footer area', 'techbiz' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget_title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'techbiz_widgets_init' );