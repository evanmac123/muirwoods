<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );
require_once( 'library/class-foundationpress-program-bar-walker.php' );
require_once( 'library/class-foundationpress-sub-menu-left-walker.php' );
require_once( 'library/class-foundationpress-sub-menu-bottom-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Custom Post Type:Staff */
require_once( 'library/custom-post-types.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

add_filter("wp_nav_menu_objects",'my_wp_nav_menu_objects_start_in',10,2);
function my_wp_nav_menu_objects_start_in( $sorted_menu_items, $args ) {
    if (isset($args->start_in) && $args->start_in != 0) {
        $menu_item_parents = array();
        foreach ($sorted_menu_items as $key => $item) {
            if ($item->object_id == (int)$args->start_in) $menu_item_parents[] = $item->ID;
            if (in_array($item->menu_item_parent, $menu_item_parents)) {
                $menu_item_parents[] = $item->ID;
            } else {
                unset($sorted_menu_items[$key]);
            }
        }
        return $sorted_menu_items;
    } else {
        return $sorted_menu_items;
    }
}

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<div><a class="read-more" href="%1$s">%2$s</a></div>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
add_theme_support( 'post-thumbnails' );




/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );
