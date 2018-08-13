<?php
/**
 * Template Name: Right Sidebar Layout
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<!--<div class="bannerAd">
			<div id='div-gpt-ad-1505297328566-1' style='height:90px; max-width:728px;margin:0 auto;'>
				<script>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1505297328566-1'); });
				</script>
			</div>
		</div>-->
		<div class="row">
		
			<div
				class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 content-area"
				id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>


					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
			<?php echo dynamic_sidebar('right-sidebar'); ?>
		</div>

		</div><!-- .row -->
	<!--<div class="bannerAd">
			<div id='div-gpt-ad-1505297328566-1' style='height:90px; max-width:728px;margin:0 auto;'>
				<script>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1505297328566-1'); });
				</script>
			</div>
		</div>-->
	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
