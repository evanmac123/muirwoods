<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<header class="featured-hero" role="banner" data-interchange="[http://muirwoodteen.com/wp-content/themes/muir-wood_2017-09-05_11-17/assets/images/blog-background.jpg, small], [http://muirwoodteen.com/wp-content/themes/muir-wood_2017-09-05_11-17/assets/images/blog-background.jpg, medium], [http://muirwoodteen.com/wp-content/themes/muir-wood_2017-09-05_11-17/assets/images/blog-background.jpg, large], [http://muirwoodteen.com/wp-content/themes/muir-wood_2017-09-05_11-17/assets/images/blog-background.jpg, xlarge]" style="background-image: url(&quot;http://muirwoodteen.com/wp-content/themes/muir-wood_2017-09-05_11-17/assets/images/blog-background.jpg&quot;);"> </header>

<div class="main-wrap" role="main">
	<article class="main-content">
		<header  class="large-12 column">
		    <h1 class="entry-title"><?php _e( 'Archive:', 'foundationpress' ); ?> <?php echo get_search_query(); ?></h1>
		</header>
	<div class="large-8 column">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>
	</div>
	<div class="large-4 column">
		<?php dynamic_sidebar( 'blog-right-widgets' ); ?>
	</div>
	</article>

</div>

<?php get_footer();
