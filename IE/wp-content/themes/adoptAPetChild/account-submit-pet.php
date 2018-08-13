<?php
/**
 * Template Name: Account Submit - Pet
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			<?php if (is_user_logged_in()) { ?>
			<!-- Do the left sidebar check -->
			<div class="col-md-12 col-sm-12 col-lg-5 col-xl-4">
				<div class="white-block">
				<?php include('inc/user-meta.php'); ?>
				<div class="separator clearfix"><hr></div>
				<ul>
					<li><img src="https://s3-eu-west-1.amazonaws.com/adoptapet.ie/wp-content/uploads/2018/03/13103033/dog-puppy-blue.jpg" /> <a href="/account/posts/">My Pets</a></li>
					<li><i class="fa fa-pencil" style="color:#00a9e0;"></i>&nbsp;&nbsp;&nbsp;<a href="/account/submit/">Submit a Pet</a></li>
					<li><i class="fa fa-user-circle" style="color:#00a9e0;"></i>&nbsp;&nbsp;&nbsp;<a href="/account/your-profile/">My Profile</a></li>
					<li><i class="fa fa-sign-out" style="color:#00a9e0;"></i>&nbsp;&nbsp;&nbsp;<a href="/wp-login.php?action=logout">Log Out</a></li>
				</ul>
			</div>
			</div>

			<main class="col-md-12 col-sm-12 col-lg-7 col-xl-8" id="main">

				<?php 
				while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

				

			</main><!-- #main -->
			<?php } else{
				wp_redirect( 'https://www.adoptapet.ie/login/' );
			} ?>
		</div><!-- #primary -->

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
