<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<div class="footer-form">
			  <div class="row">
					
				<?php dynamic_sidebar( 'form-footer-widgets' ); ?>

				</div>
			</div>
				<div class="footer-upper">
					 <div class="row-16">
				<?php dynamic_sidebar( 'upper-footer-widgets' ); ?>
					</div>
			</div>
			<div class="footer-lower">
				 <div class="row">
				<?php dynamic_sidebar( 'lower-footer-widgets' ); ?>
				</div>
			</div>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas content -->
	</div><!-- Close off-canvas wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
