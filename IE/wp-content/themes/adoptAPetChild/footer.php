<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

//$the_theme = wp_get_theme();
//$container = get_theme_mod( 'understrap_container_type' );
?>

</div> <!--closes .contentBlock in header.php-->
<footer class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row no-gutters">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div id="footer-area">
						<div class="container footer-inner inner row">
							<div class="col-md-3">
								<?php dynamic_sidebar( 'footer-widget-1' ); ?>
							</div>
							<div class="col-md-3">
								<?php dynamic_sidebar( 'footer-widget-2' ); ?>
							</div>
							<div class="col-md-3">
								<?php dynamic_sidebar( 'footer-widget-3' ); ?>
							</div>
							<div class="col-md-3">
								<?php dynamic_sidebar( 'footer-widget-4' ); ?>
							</div>
							
						</div>
					</div><!-- #footer-area -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

<?php get_sidebar( 'footerfull' ); ?>
</footer><!-- wrapper end -->



</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

