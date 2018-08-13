<div class="row">
		
<div class="shelter_details col-md-6"> 
	 
		<div class="details col-xs-12">
			<h2>Shelter</h2>
			<p><?php 
   				if ( $string = get_the_author_meta('nickname') ) {
      				echo $string;
   				}
			?></p>
		</div>
			
		<div class="details col-xs-12">
			<h2>Pet Location</h2>
			<p><?php 
   				if ( $string = get_the_author_meta('county') ) {
      				echo $string;
   				}
			?></p>
		</div>
		<div class="details col-xs-12">
			<?php if(empty(get_the_author_meta('hidePhone'))){
   				if ( ($string = get_the_author_meta('phone_number')) && ($string1 = empty(get_the_author_meta('mobile_number'))) ) { ?>
   					<h2>Phone</h2>
      				<p><?php echo $string;?></p>
   				<?php } else if ( ($string = empty(get_the_author_meta('phone_number'))) && ($string1 = get_the_author_meta('mobile_number')) ) { ?>
   					<h2>Phone</h2>
   					<p><?php echo $string1;?></p>
   				<?php } else if ( ($string = get_the_author_meta('phone_number')) && ($string1 = get_the_author_meta('mobile_number')) ) { ?>
   					<h2>Phone</h2>
   					<p><?php echo $string .'/'. $string1; ?></p>
   				<?php } 
   			}
			?>
		</div> 
		
		<div class="details col-xs-12">
			<h2>Adoption Fee</h2>
			<p>€<?php echo get_post_meta( $GLOBALS['post']->ID, 'adoption_fee_€', true );?></p>
		</div>  
		
		<div class="details col-xs-12" id="social-details">
			<h2>Social</h2>
			<p style="margin-top:5px"><?php 
   				if ( $string = get_the_author_meta('facebook_page') ) { ?>
      				<a href="<?php echo $string;?>"><i class="fa fa-facebook" style="background:#3b5998;color:white;padding:10px 15px; border-radius:3px;"></i></a><?php
   				}
			?>
			<?php 
   				if ( $string = get_the_author_meta('twitter') ) { ?>
      		 		<a href="<?php echo $string;?>"><i class="fa fa-twitter" style="background:#00aced;color:white;padding:10px 14px; border-radius:3px;"></i></a><?php
   				}
			?>
			<?php 
   				if ( $string = get_the_author_meta('website') ) { ?>
      		 		<a href="<?php echo $string;?>"><i class="fa fa-laptop" style="background:#d7571d;color:white;padding:10px 13px; border-radius:3px;"></i></a><?php
   				}
			?></p>
		</div> <!-- Social Details -->

</div> <!-- Shelter Details --> 

<div class="pet_icons col-md-6">
		
		<div class="clear clearfix"></div>
		<!-- pet-icon-image -->
	</div><!-- pet Icons -->  
</div> <!-- row -->  