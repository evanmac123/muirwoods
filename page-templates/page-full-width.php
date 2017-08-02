<?php
/*
Template Name: Full Width
*/
get_header(); ?>
<div class="full-width">
	<div class="full-width__header-container" style="background-image:url('<?php the_field("header-image"); ?>')">

	<div class="full-width__header-title">
		<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
				<header>
					<div class="row">
					<h1 style="color:<?php echo  get_field_object('header-dark-or-light-background')['value'];?>;" class="entry-title column large-10"><?php the_title(); ?></h2>
					</div>
				</header>
		<?php endwhile;?>
		</div>
		<div class="row">
		<h4 style="color:<?php echo get_field_object('header-dark-or-light-background')['value'];?>;"  class="full-width__header-description column large-8">
			<?php the_field("header-description"); ?>
		</h4>
	</div>
</div>
</div>

<div class="main-wrap" role="main">

<?php do_action( "foundationpress_before_content" ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class("main-content") ?> id="post-<?php the_ID(); ?>">

		<?php do_action( "foundationpress_page_before_entry_content" ); ?>
		<div class="entry-content column large-12">
			<?php
				while ( have_rows("flexible_content") ) : the_row();
				if( get_row_layout() == 'standard_row_full_width' ): ?>
				<div class="row">
					<div class='large-12 column'><?php the_sub_field('full_width'); ?>
					</div>
				</div>
			<?php elseif( get_row_layout() == 'row_2_columns' ): ?>
				<div class="row">
					<div class='large-6 column'><?php the_sub_field('left_column_2'); ?></div>
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
						"before" => "<nav id='page-nav'><p>" . __( "Pages:", "foundationpress" ),
						"after"  => "</p></nav>",
					)
				);
			?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php do_action( "foundationpress_page_before_comments" ); ?>
		<?php comments_template(); ?>
		<?php do_action( "foundationpress_page_after_comments" ); ?>
	</article>
<?php endwhile;?>

<?php do_action( "foundationpress_after_content" ); ?>

</div>
<section>
		<nav>
				<div class="row">
					<?php foundationpress_bottom_nav(); ?>
				</div>
		</nav>
</section>
<?php get_footer();
