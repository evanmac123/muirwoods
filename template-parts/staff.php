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

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<?php //grabbing all content
	$image = get_field('staff_photo');
	$position = get_field('staff_position');
	$name = get_field('staff_name');
	$email = get_field('staff_email');
	$description = get_field('staff_description');?>

	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php echo $name ?></a></h2>
	</header>
	<div class="entry-content">

		<?php //displaying advanced custom fields
		if( !empty($image) ): ?>
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php endif;
		if( !empty($position) ): ?>
			<div class="staff__position">
				<?php echo $position; ?>
			</div>
		<?php endif;
		if( !empty($email) ): ?>
			<div class="staff__email">
				<?php echo $email; ?>
			</div>
		<?php endif;
		if( !empty($description) ): ?>
			<div class="staff__description">
				<?php echo $description; ?>
			</div>
		<?php endif; ?>

	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</div>
