<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,300,400,700" rel="stylesheet">
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>
	<?php foundationpress_call_bar(); ?>
	<header class="site-header" role="banner">
		<div class="site-title-bar show-for-small show-for-medium-up" >
			<div class="title-bar-left">
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?> </a>
				</span>
			</div>
			<div class="title-bar-right">
				<button class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
			</div>
		<nav class="site-navigation top-bar" role="navigation">

			<div class="top-bar-right">
				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
				<?php foundationpress_top_bar_r(); ?>
				<?php foundationpress_program_bar_r(); ?>
			</div>
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php
						// Display the Custom Logo
						the_custom_logo();
						// No Custom Logo, just display the site's name
						if (!has_custom_logo()) {
							bloginfo('name');
						} ?>
				</div>
			</div>
		</nav>
	</div>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
