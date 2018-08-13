<?php
/**
 * Template Name: Home
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

		<div class="jumbotron jumbotron-fluid">
  			<div class="container">
  			  <h1 class="display-3">Welcome to TAGS</h1>
  			  <p class="lead">Not just a place to rescue a pet, but to find a best friend</p>
  			  	
  			</div><!--container-->

		</div><!--Jumbotron -->
        <div class="container hpPetLinks">
          <div class="homepage-hero__pet-links row">
            <span class="col-lg-3">Find a best friend</span>
          <a class="homepage-hero__pet-links__item dogs col-lg-3 col-md-4 col-sm-4 col-6" href="/dogs"><img src="https://s3-eu-west-1.amazonaws.com/adoptapet.ie/wp-content/uploads/2018/03/01111258/dog-puppy.png" /> Find a dog</a>
          <a class="homepage-hero__pet-links__item cats col-lg-3 col-md-4 col-sm-4 col-6" href="/cats"><img src="https://s3-eu-west-1.amazonaws.com/adoptapet.ie/wp-content/uploads/2018/03/01111259/laying-cat.png" /> Find a cat</a>
          <a class="homepage-hero__pet-links__item other col-lg-3 col-md-4 col-sm-4 col-12" href="/others"><img src="https://s3-eu-west-1.amazonaws.com/adoptapet.ie/wp-content/uploads/2018/03/01111256/bird1.png" /> Other pets</a>
          <!--<div class="homepage-hero__pet-links__item search find-by-petrescue-id">
            <form action='#'>
              <div class='search-wrapper'>
                <input class='animal_id' id='animal_id_dashboard' placeholder='eg. 302491' type='text' />
                <button class='submit' type='submit'>Go</button>
              </div>
                <label for='animal_id'>Search PetRescue ID</label>
            </form>
          </div> homepage-hero__pet-links__item search find-by-petrescue-id-->
        </div><!--homepage-hero__pet-links -->
      </div>


<div id="homeBlock4" class="" style="padding:30px 0px; background:white;">  
  <div class="container" style="padding:0px;">
    <div class="bannerAd">
      <div id='div-gpt-ad-1520856984371-0'>
        <script>
          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1520856984371-0'); });
        </script>
      </div>
    </div><!--closes banner ad -->
  </div><!--container-->
</div><!--homeBlock4-->

<div id="homeBlock5" class="container desktop" style="margin-bottom:30px;">  
  <div class="row no-gutters">
    <div class="col-md-4 white-block">
      <h2>Welcome to TAGS</h2>
      <p class="">Formerly AdoptAPet.ie, we are now called TAGS - Ireland's Largest Pet Adoption website.</p>
      <a href="/about-us/" title="About Tags Pet Resuce and Adoption" class="btn btn-primary active" role="button" aria-pressed="true">Read More</a>
    </div>
  </div>
</div><!--homeBlock5 desktop-->

<div id="homeBlock5" class="container mobile" style="margin-bottom:30px;">  
  <div class="row no-gutters">
    <div class="col-sm-12 col-12 topImage"></div>
    <div class="col-sm-12 col-12 white-block">
      <h2>Welcome to TAGS</h2>
      <p class="">Formerly AdoptAPet.ie, we are now called TAGS - Ireland's Largest Pet Adoption website.</p>
      <a href="/about-us/" title="About Tags Pet Resuce and Adoption" class="btn btn-primary active" role="button" aria-pressed="true">Read More</a>
    </div>
  </div>
</div><!--homeBlock5 mobile-->

<div id="homeBlock2" class="">	
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		
        	<div class="inner row">
                <div class="container text-center" style="margin-top:50px">
                    <h2>Pets To Adopt</h2>
        		</div>
                            
                <?php 
                            
                    // WP_Query arguments
                    $args = array (
                       			'post_type'              => array( 'dogs', 'cats', 'others' ),
                       			'posts_per_page'         => '4',
                       			'orderby'                => 'date',
                       			//'meta_key'               => 'images_cats',
                            );

                    // The Query
                    $pets_query = new WP_Query( $args );

                    if ( $pets_query->have_posts() ) {
                        while ( $pets_query->have_posts() ) {
                            $pets_query->the_post(); ?>

                    <?php
                    /* Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'content', get_post_format() );
                    	
                     }
             
                     } else {
                                    // no posts found
                                }
                     // Restore original Post Data
                         wp_reset_postdata();

                         ?>
                            

                    <div class="clear clearfix"></div>
                        
          	</div><!--inner-->
       </div> <!-- Container end -->

</div><!--homeblock-->


<div id="homeBlock3" class="">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		
        <div class="inner row how-it-works">
               <div class="container text-center" style="margin-top:50px">
                   <h2>How Pet Adoption Works</h2>
        		</div>
                
                	
          				<div class="col-lg-4">
          				  <h3 class="get-the-app">Search</h3>
          				  <p>Search through our pet listings and see who's available from our full list of rescues and pounds. </p>
          				</div>
          				<div class="col-lg-4">
          				  <h3 class="find-pup-nearby">Contact</h3>
          				  <p>Send an enquiry to the rescue using our inbuilt contact forms or give them a call.</p>
          				</div>
          				<div class="col-lg-4">
          				  <h3 class="meet-bestfriend">Meet</h3>
          				  <p>Visit your potential new pet, prepare for a home visit and get ready for the love!</p>
          				</div>
       				            
               <div class="clear clearfix"></div>
                       
          </div><!--inner-->
       

	</div><!-- Container end -->
</div> <!--homeblock-->


<?php get_footer(); ?>
