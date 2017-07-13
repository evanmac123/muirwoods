<?php
/**
 * The default template for displaying content
 *

 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div  class="large-4 column" id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<?php //grabbing all content
	$image = get_field('staff_photo');
	$position = get_field('staff_position');
	$name = get_field('staff_name');
	$email = get_field('staff_email');
	$description = get_field('staff_description');?>
	<a class="staff-list" href="<?php the_permalink(); ?>">
			<div class="staff__image">
			<?php if( !empty($image) ): ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php else :?>
			<?php endif;?>
			</div>
		<h4 class=staff-list__title>
			<?php echo $name ?>
		</h4>
		<?php //displaying advanced custom fields
		if( !empty($position) ): ?>
			<div class="staff-list__position">
				<?php echo $position; ?>
			</div>
		<?php endif;
		if( !empty($email) ): ?>
			<div class="staff-list__email">
				<?php echo $email; ?>
			</div>
		<?php endif;?>
	</div>
</div>
</a>
