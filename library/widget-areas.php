<?php
/**
 * Register widget areas
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
function foundationpress_sidebar_widgets() {
	register_sidebar(array(
		'id' => 'sidebar-widgets',
		'name' => __( 'Sidebar widgets', 'foundationpress' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));

	register_sidebar(array(
		'id' => 'upper-footer-widgets',
		'name' => __( 'Upper Footer widgets', 'foundationpress' ),
		'description' => __( 'Drag sponser images to this footer container', 'foundationpress' ),
		'before_widget' => '<article id="%1$s" class=" widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));

	register_sidebar(array(
		'id' => 'lower-footer-widgets',
		'name' => __( 'Lower Footer widgets', 'foundationpress' ),
		'description' => __( 'Drag info and image to this footer container', 'foundationpress' ),
		'before_widget' => '<article id="%1$s" class="large-3 columns widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));
	register_sidebar(array(
		'id' => 'form-footer-widgets',
		'name' => __( 'Form Footer widgets', 'foundationpress' ),
		'description' => __( 'Drag form widgets to this footer container', 'foundationpress' ),
		'before_widget' => '<div class="row"> <article id="%1$s" class="large-8 left large-offset-2 columns widget %2$s">',
		'after_widget' => '</article></div>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
