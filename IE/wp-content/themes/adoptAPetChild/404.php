<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package dazzling
 */

get_header(); ?>
<?php // print_r($wp_query); ?>

<div class="container">
		<div id="primary" class="content-area col-sm-12 col-md-12">
			<main id="main" class="site-main" role="main">
				<article class="white-block">
				<section class="error-404 not-found">
					<h1 style="text-align:center; font-size:7em;">404</h1>
					<header class="page-header">
						<h1 class="page-title" style="text-align:center;"><?php _e( 'Oh dear!  How did you manage to get here?', 'dazzling' ); ?></h1>
					</header><!-- .page-header -->

					<div class="entry-content">
						<div class="rowlinks row">
    						<div class="col-md-4">
    						    <div class="links404 btn"><a href="https://www.adoptapet.ie" title="Lost and Found Homepage">Go back to Home</a></div>
    						</div>
    						<div class="col-md-4">
    						    <div class="links404 btn"><a href="https://www.adoptapet.ie/rescues" title="Lost and Found - Lost Items">Search for Rescues</a></div>
    						</div>
    						<div class="col-md-4">
    						    <div class="links404 btn"><a href="https://www.adoptapet.ie/dogs" title="Lost and Found - Found Items">Search for Dogs</a></div>
    						</div>
						</div>

						

					</div><!-- .page-content -->
				</section><!-- .error-404 -->
				</article>
			</main><!-- #main -->
		</div><!-- #primary -->
		
</div>
<?php get_footer(); ?>