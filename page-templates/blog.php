<?php
/*
Template Name: Blog
*/

get_header(); ?>
<header class="featured-hero" role="banner" alt="Hands typing on a laptop" data-interchange="[http://muirwoodteen.com/wp-content/uploads/2017/08/blog-banner-640x167.jpg, small], [http://muirwoodteen.com/wp-content/uploads/2017/08/blog-banner-1024-268.jpg, medium], [http://muirwoodteen.com/wp-content/uploads/2017/08/blog-banner-1200-314.jpg, large]" style="background-image: url(&quot;http://muirwoodteen.com/wp-content/uploads/2017/08/blog-banner.jpg&quot;);"> </header>

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
