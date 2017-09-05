<?php
/*
Template Name: Blog
*/

get_header(); ?>
<header class="featured-hero" role="banner" data-interchange="[http://muirwoodteen.com/wp-content/themes/muir-wood_2017-09-05_11-17/assets/images/blog-background.jpg, small], [http://muirwoodteen.com/wp-content/themes/muir-wood_2017-09-05_11-17/assets/images/blog-background.jpg, medium], [http://muirwoodteen.com/wp-content/themes/muir-wood_2017-09-05_11-17/assets/images/blog-background.jpg, large], [http://muirwoodteen.com/wp-content/themes/muir-wood_2017-09-05_11-17/assets/images/blog-background.jpg, xlarge]" style="background-image: url(&quot;http://muirwoodteen.com/wp-content/themes/muir-wood_2017-09-05_11-17/assets/images/blog-background.jpg&quot;);"> </header>

<div class="main-wrap" role="main">
	<article class="main-content">
		<header  class="large-12 column">
		    <h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
	<div class="large-8 column">
		<?php
	// the query
	$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

	<?php if ( $wpb_all_query->have_posts() ) : ?>
		<!-- the loop -->
		<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>
		<!-- end of the loop -->

		<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	</div>
	<div class="large-4 column">
		<?php dynamic_sidebar( 'blog-right-widgets' ); ?>
	</div>
	</article>
	<?php get_sidebar(); ?>

</div>

<?php get_footer();
