<?php
/**
 * Template Name: Rescue List
 *
 * This is the template that displays all the Rescues
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div class="wrapper" id="page-wrapper">
	
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="bannerAd row">
			<div id='div-gpt-ad-1520856984371-0'>
				<script>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1520856984371-0'); });
				</script>
			</div>
    	</div><!--closes banner ad -->
		<div class="row">
			<!-- Do the left sidebar check -->
			<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
				<div class="white-block clearfix" role="complementary">
					<?php //dynamic_sidebar( 'rescues-sidebar' ); ?>
					<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 float-left">
						<?php include('inc/user-search/user-search-form.php'); ?>
					</div>
					<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 float-left">
						<?php include('inc/user-search/rescues-query-and-counts.php'); ?>
					</div>
				</div><!-- .white-block -->
			</div>

			<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col xs-12">
				<div class="skyscraperAd sticky-top">
					<!-- /21632054740/laf_wide_skyscraper -->
					<div id='div-gpt-ad-1521992962735-0' style="margin-left:-10px;">
						<script>
							googletag.cmd.push(function() { googletag.display('div-gpt-ad-1521992962735-0'); });
						</script>
					</div>
				</div>
			</div>
			
			<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12">
				<?php
					// Array of WP_User objects.
					//' /*. esc_url( get_avatar_url($user) ) . */' <-- that needs to be added back in for the user image when ready

					foreach ( $search_users->results as $user ) {

						echo '<div class="row no-gutters">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 float-left ">
									<div class="col-md-12 listing white-block clearfix">
										<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 float-left" style="padding:0px;">
									   		<a href="' . esc_url( get_author_posts_url( $user->ID ) ) . '"><div class="card-img-top">'. get_avatar( $user->user_email , '200') .'</div></a>
										</div>

  										<div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-xs-12 card-body float-left">
    										<h2 class="card-title"><a href="' . esc_url( get_author_posts_url( $user->ID ) ) . '">' . esc_html( $user->display_name ) . '</a></h2>
    										<p class="card-text">' . esc_html( $user->userDescription ) . '</p>
    										<h3>County: '. get_user_meta( $user->ID, $key , true ) .'</h3>
  										</div>
  									</div>
							  	</div>
							  </div>';
					    
					} ?>
			</div>


			
			<?php
        // Previous page
        if ( $current_page > 1 ) {
            echo '<a href="'. add_query_arg(array('paged' => $current_page-1)) .'">Previous Page</a>';
        }

        

        // grab the current query parameters
		$query_string = $_SERVER['QUERY_STRING'];
		
		// The $base variable stores the complete URL to our page, including the current page arg
		
		// if in the admin, your base should be the admin URL + your page
		//$base = admin_url('your-page-path') . '?' . remove_query_arg('p', $query_string) . '%_%';
		
		// if on the front end, your base is the current page
		//$base = get_permalink( get_the_ID() ) . '?' . remove_query_arg('p', $query_string) . '%_%';
		
		/*echo paginate_links( array(
		    'base' => $base, // the base URL, including query arg
		    'format' => '/page/%#%', // this defines the query parameter that will be used, in this case "p"
		    'prev_text' => __('&laquo; Previous'), // text for previous page
		    'next_text' => __('Next &raquo;'), // text for next page
		    'total' => $num_pages, // the total number of pages we have
		    'current' => $page, // the current page
		    'end_size' => 1,
		    'mid_size' => 5,
		));*/

		// Next page
        if ( $current_page < $num_pages ) {
            echo '<a href="'. add_query_arg(array('paged' => $current_page+1)) .'">Next Page</a>';
        }
        ?>

		</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->
<?php get_footer(); ?>