<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<a href="<?php the_permalink(); ?>">
<div id="post-<?php the_ID(); ?>" class="post__list-single" >
	<div class="row expanded">
		<?php //grabbing all content
		$image = get_the_post_thumbnail_url();
		?>
		<?php if( !empty($image) ): ?>
		<div class="large-3 column post-image" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')" />
		</div>
		<div class="large-9 column content">
		<?php else :?>
			<div class="large-12 column content">
		<?php endif;?>
					<header>
					<h2><?php the_title(); ?></h2>
					<?php
					//foundationpress_entry_meta();
					 ?>
				</header>
				<div class="entry-content">
					<?php  the_excerpt(); ?>
				</div>
			
			</div>
</div>
</div>
</a>
