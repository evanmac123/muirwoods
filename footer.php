<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
	//controlled in the widget sections
?>

		</section>
		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<div id="footer-form" class="footer-form">
			  <div class="row expanded">
					<?php dynamic_sidebar( 'form-footer-widgets' ); ?>
				</div>
			</div>
				<div class="footer-upper hide-for-small-only">
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


		</div><!-- Close off-canvas content -->
	</div><!-- Close off-canvas wrapper -->



<?php wp_footer(); ?>

<!-- Begin Keymetric Tracking Code -->
<script type = 'text/javascript' >
    function onKeyMetricComplete() {
    if (window.location.pathname == "/thank-you/") {
        km_LogData('101');
    };
    if (window.location.pathname == "/thank-submitting-insurance-information/") {
        km_LogData('102');
    };
}
var KmHost = (("https:" == document.location.protocol) ? "https://km14221" : "http://km14221");
var kmscr = document.createElement('script');
kmscr.type = 'text/javascript';
kmscr.src = KmHost + ".keymetric.net/KeyMetric.js";
document.body.appendChild(kmscr);

</script>
<!-- End Keymetric Tracking Code -->



<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
