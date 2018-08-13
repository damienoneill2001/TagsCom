<?php

get_header();

// Set the Current Author Variable $curauth
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div class="wrapper" id="page-wrapper">
	
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="bannerAd">
			<div id='div-gpt-ad-1520856984371-0'>
				<script>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1520856984371-0'); });
				</script>
			</div>
    	</div><!--closes banner ad -->
    	<?php if(function_exists('bcn_display'))
				{
				bcn_display();
				}
			?>
		<div class="row">
    
			<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
				<div class="row white-block no-gutters">
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
						<div class="author-photo">
			    			<?php echo get_avatar( $curauth->user_email , '200 '); ?>
			    		</div>
					</div>

					<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
						<h2><?php echo $curauth->display_name; ?></h2>
			    				<p><?php if($string = $curauth->userDescription){ echo $string.'<br />';} ?></p>
			    				<p><strong>Address:</strong><br /><?php if($string = $curauth->address){ echo $string.'<br />'; } ?>
			    											<?php if($string = $curauth->addressLine2){ echo $string.'<br />'; } ?>
			    											<?php if($string = $curauth->town){ echo $string.'<br />'; } ?>
			    											<?php if($string = $curauth->county){ echo ucfirst($string).'<br />'; } ?>
			    											<?php if($string = $curauth->postcode){ echo $string; } ?>
			    				</p>
			    				<?php if(!isset($curauth->hidePhone)) { ?>
			    				<p><strong>Phone Number:</strong> <?php if( ($stringPN = $curauth->phone_number) && ($stringMN = empty($curauth->mobile_number)) ){
			    														echo $stringPN;
			    													} else if(($stringPN = empty($curauth->phone_number)) && ($stringMN = $curauth->mobile_number)) {
																		echo $stringMN;
			    													} else if(($stringPN = $curauth->phone_number) && ($stringMN = $curauth->mobile_number)) {
			    														echo $stringPN .'/'. $stringMN;
			    													} else {
			    														echo 'Not available';
			    													}
			    													?>
			    				</p>
								<?php } ?>
			    					<!--<a href="tel:<?php echo $curauth->mobile_number; ?>"><?php echo $curauth->mobile_number; ?></a>-->


			    				<p><strong>Email:</strong> <a href="mailto:<?php echo $curauth->email; ?>"><?php echo $curauth->email; ?></a></p>
			    				<?php if(!isset($curauth->hideCharity)) { ?>
			    				<p><strong>Charity No.:</strong> <?php if ($string = $curauth->charity_number) {
			    														echo $string; 
			    													} else {
			    														echo 'Not Available';
			    													}
			    													?>
			    				</p>
			    				<?php } ?>
			    				<p>
								<?php 
   									if ( $string = $curauth->facebook_page ) { ?>
      									<a href="<?php echo $string;?>" target="_blank" title="<?php echo $curauth->display_name;?>'s Facebook Page"><i class="fa fa-facebook" style="background:#3b5998;color:white;padding:10px 15px; border-radius:3px;"></i></a><?php
   									}
								?>
								<?php 
   									if ( $string = $curauth->twitter ) { ?>
      							 		<a href="<?php echo $string;?>" target="_blank" title="<?php echo $curauth->display_name;?>'s Twitter Page"><i class="fa fa-twitter" style="background:#00aced;color:white;padding:10px 14px; border-radius:3px;"></i></a><?php
   									}
								?>
								<?php 
   									if ( $string = $curauth->website ) { ?>
      							 		<a href="<?php echo $string;?>" target="_blank" title="<?php echo $curauth->display_name;?>'s website"><i class="fa fa-laptop" style="background:#d7571d;color:white;padding:10px 13px; border-radius:3px;"></i></a><?php
   									}
								?></p>
								    				
					</div>
				</div>
     		
			<h2 class="white-block">Pets for adoption at <?php echo $curauth->display_name; ?></h2>
 			<?php // WP_Query arguments
				$args = array(
					'post_type'              => array( 'dogs', 'cats', 'others' ),
					'nopaging'               => false,
					'author'				 => $curauth->ID,
					'posts_per_page'         => '50',
				);
				
				// The Query
				$postTypeQuery = new WP_Query( $args );
				
				// The Loop
				if ( $postTypeQuery->have_posts() ) {
					while ( $postTypeQuery->have_posts() ) {
						$postTypeQuery->the_post();?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
						?>
					<?php }
				} else {
					// no posts found
				}
				
				// Restore original Post Data
				wp_reset_postdata();
			?>
			</div>
		<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
			<?php echo dynamic_sidebar('right-sidebar'); ?>
		</div>
	</div><!-- .row -->
	
</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>