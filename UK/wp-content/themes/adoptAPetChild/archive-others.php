<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="bannerAd row">
			<div id='div-gpt-ad-1520856984371-0'>
				<script>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1520856984371-0'); });
				</script>
			</div>
    	</div><!--closes banner ad -->
		<div class="row">
				<div class="col-12">
					<div class="white-block rescues-sidebar" role="complementary">
						<?php dynamic_sidebar( 'others-sidebar' ); ?>
					</div><!-- .widget-area .first -->
				</div>
			</div>

		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
				<div class="skyscraperAd sticky-top">
					<!-- /21632054740/laf_wide_skyscraper -->
					<div id='div-gpt-ad-1521992962735-0' style="margin-left:-10px;">
						<script>
							googletag.cmd.push(function() { googletag.display('div-gpt-ad-1521992962735-0'); });
						</script>
					</div>
				</div>
			</div>
			<!-- Do the left sidebar check -->
			
			
			<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12 facetwp-template">

				<?php if ( have_posts() ) : ?>

					<!--<header class="page-header">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header>--><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', 'others' );
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			<div class="clear clearfix"></div>

			<!-- The pagination component -->
			<?php //understrap_pagination(); 
				echo do_shortcode('[facetwp pager="true"]');
			?>

		</div><!-- #primary -->

	</div> <!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
