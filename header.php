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
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	</head>
	<body <?php body_class(); ?>>

    <!-- Google Analytics Code Begins -->
    <script>
        (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o), m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-39767596-1', 'auto');
ga('require', 'displayfeatures');
ga('send', 'pageview');
    </script>
        <!-- Google Analytics Code Ends -->

	<?php do_action( 'foundationpress_after_body' ); ?>


	<div class="off-canvas-wrapper">
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>


	<?php do_action( 'foundationpress_layout_start' ); ?>
	<?php foundationpress_call_bar(); ?>
	<header class="site-header" role="banner">
		<div class="site-title-bar show-for-small show-for-medium-up" >
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
						// Display the Custom Logo, default logo, or the site's name
						if ( has_custom_logo() ) {
                            the_custom_logo();
                        } else { ?>
                            <img width="130" height="130" src="http://www.muirwoodteen.com/wp-content/uploads/2017/07/cropped-logo-1-3.png" class="custom-logo" alt="Muir Wood Logo" itemprop="logo" />
                        <?php } ?>
                    </a>
				</div>
			</div>
		</nav>
	</div>
	</header>
	<section class="container">
        <div class="hide-for-large row">
            <div id="mobile-logo" class="column small-6 medium-4 small-centered">
                <img width="130" height="130" src="http://www.muirwoodteen.com/wp-content/uploads/2017/07/cropped-logo-1-3.png" class="custom-logo" alt="Muir Wood Logo" itemprop="logo" />
            </div>
        </div>
		<?php do_action( 'foundationpress_after_header' );
