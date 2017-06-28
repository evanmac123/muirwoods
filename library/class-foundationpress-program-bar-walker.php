<?php
/**
 * Customize the output of menus for Foundation Program bar
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/**
 * Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker
 */


 function add_menu_description( $item_output, $item, $depth, $args ) {
     global $description;
		 global $title;
		 $title = __( $item->title );
     $description = __( $item->post_content );
     return $item_output;
 }

 add_filter( 'walker_nav_menu_start_el', 'add_menu_description', 10, 4);

if ( ! class_exists( 'Foundationpress_Program_Bar_Walker' ) ) :
	class Foundationpress_Program_Bar_Walker extends Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $args = array() ) {
	         $indent = str_repeat("\t", $depth);
	         global $description;
					 global $title;
	         $output .= "\n$indent<ul class='sub-menu'><div class='sub-menu-label'><div class='sub-menu-title'>".$title."</div> <div class='sub-menu-description'>".$description."</div></div><div class='sub-menu-items'>\n";
	     }
	     function end_lvl( &$output, $depth = 0, $args = array() ) {
	         $indent = str_repeat("\t", $depth);
	         $output .= "$indent</div><li><div class='clear'></div></li></ul>\n";
	     }
	}
endif;
