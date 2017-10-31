<?php
/**
 * Set up custom post type for staff
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 // Our custom post type function
 function create_posttype() {

  register_post_type( 'testimonials',
  // CPT Options
    array(
      'labels' => array(
        'name' => __( 'Testimonials' ),
        'singular_name' => __( 'Testimonial' )
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'testimonials'),
    )
  );
 }
 // Hooking up our function to theme setup
 add_action( 'init', 'create_posttype' );


 /*
 * Creating a function to create our CPT
 */

 function custom_post_type() {

  // Set UI labels for Custom Post Type
   $testimoniallabels = array(
     'name'                => _x( 'Testimonials', 'Post Type General Name' ),
     'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name' ),
     'menu_name'           => __( 'Testimonials' ),
     'parent_item_colon'   => __( 'Parent Testimonial' ),
     'all_items'           => __( 'All Testimonials' ),
     'view_item'           => __( 'View Testimonial' ),
     'add_new_item'        => __( 'Add New Testimonial' ),
     'add_new'             => __( 'Add New' ),
     'edit_item'           => __( 'Edit Testimonial' ),
     'update_item'         => __( 'Update Testimonial' ),
     'search_items'        => __( 'Search Testimonial' ),
     'not_found'           => __( 'Not Found' ),
     'not_found_in_trash'  => __( 'Not found in Trash' ),
   );

  // Set other options for Custom Post Type

   $testimonialargs = array(
     'label'               => __( 'testimonials' ),
     'description'         => __( 'Testimonial news and reviews' ),
     'labels'              => $testimoniallabels,
     // Features this CPT supports in Post Editor
     'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
     // You can associate this CPT with a taxonomy or custom taxonomy.
     'taxonomies'          => array( 'genres' ),
     /* A hierarchical CPT is like Pages and can have
     * Parent and child items. A non-hierarchical CPT
     * is like Posts.
     */
     'hierarchical'        => false,
     'public'              => true,
     'show_ui'             => true,
     'show_in_menu'        => true,
     'show_in_nav_menus'   => true,
     'show_in_admin_bar'   => true,
     'menu_position'       => 5,
     'can_export'          => true,
     'has_archive'         => true,
     'exclude_from_search' => false,
     'publicly_queryable'  => true,
     'capability_type'     => 'page',
   );

   // Registering your Custom Post Type
   register_post_type( 'testimonials', $testimonialargs );

  }

 /* Hook into the 'init' action so that the function
 * Containing our post type registration is not
 * unnecessarily executed.
 */

 add_action( 'init', 'custom_post_type', 0 );
