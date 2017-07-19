<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>

 <div class="main-wrap" role="main">

 <?php do_action( 'foundationpress_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
    <header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
      <?php
				while ( have_rows("flexible_content") ) : the_row();
				if( get_row_layout() == 'standard_row_full_width' ): ?>
				<div class="row">
					<div class='large-12 column'><?php the_sub_field('full_width'); ?>
					</div>
				</div>
			<?php elseif( get_row_layout() == 'row_2_columns' ): ?>
				<div class="row">
					<div class='
          '><?php the_sub_field('left_column_2'); ?></div>
					<div class='large-6 column'><?php the_sub_field('right_column_2'); ?></div>
				</div>
				<?php
				elseif( get_row_layout() == 'row_3_columns' ):?>
					<div class="row">
						<div class='large-4 column'><?php the_sub_field('left_column_3'); ?></div>
						<div class='large-4 column'><?php the_sub_field('center_column_3'); ?></div>
						<div class='large-4 column'><?php the_sub_field('right_column_3'); ?></div>
					</div><?php
				elseif( get_row_layout() == 'row_4_columns' ): ?>
				<div class="row">
					<div class='large-3 column'><?php the_sub_field('left_column_4'); ?></div>
					<div class='large-3 column'><?php the_sub_field('center_left_column_4'); ?></div>
					<div class='large-3 column'><?php the_sub_field('center_right_column_4'); ?></div>
					<div class='large-3 column'><?php the_sub_field('right_column_4'); ?></div>
				</div>
				<?php endif;
endwhile;?>
		</div>
		<footer>
			<?php
				wp_link_pages(
					array(
						'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
						'after'  => '</p></nav>',
					)
				);
			?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php do_action( 'foundationpress_page_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_page_after_comments' ); ?>
	</article>
 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>
 <?php get_sidebar(); ?>

 </div>

 <?php get_footer();
