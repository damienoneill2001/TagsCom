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
			<h2>Phone</h2>
			<p><?php 
   				if ( $string = get_the_author_meta('phone_number') ) {
      				echo $string;
   				}
			?></p>
		</div>

	
		<div class="details col-xs-12">
			<h2>Breed</h2>
			<p><?php echo strip_tags (
   						get_the_term_list( get_the_ID(), 'breed', "",", " )
				); 
			?></p>
		</div> 
		
		<div class="details col-xs-12">
			<h2>Adoption Fee</h2>
			<p>€<?php echo get_post_meta( $GLOBALS['post']->ID, 'adoption_fee_€', true );?></p>
		</div>  
		
		<div class="details col-xs-12" id="social-details">
			<h2>Social</h2>
			<p style="margin-top:5px"><?php 
   				if ( $string = get_the_author_meta('facebook_page') ) { ?>
      				<a href="<?php echo $string;?>"><img src="https://www.adoptapet.ie/wp-content/themes/adopt_a_pet/images/facebook_square.png" /></a><?php
   				}
			?>
			<?php 
   				if ( $string = get_the_author_meta('twitter') ) { ?>
      		 		<a href="<?php echo $string;?>"><img src="https://www.adoptapet.ie/wp-content/themes/adopt_a_pet/images/twitter_square.png" /></a><?php
   				}
			?>
			<?php 
   				if ( $string = get_the_author_meta('website') ) { ?>
      		 		<a href="<?php echo $string;?>"><img src="https://www.adoptapet.ie/wp-content/themes/adopt_a_pet/images/web_square.png" /></a><?php
   				}
			?></p>
		</div> <!-- Social Details -->

</div> <!-- Shelter Details --> 

<div class="pet_icons col-md-6">
		
	<?php $mystring = get_post_meta( $post->ID, 'age', true ); //already in the meta: age ranges!
 			
		$final_result = get_values( $mystring );
		
 		$counter = 1;
		foreach ($final_result as $result ) {
			$id = strtolower( str_replace( ' ', '-', $result ) );
			echo '<div class="iconBlock"><div data-toggle="tooltip" data-placement="top" title="Age" class="pet-icon-image dogs-'.$counter.'" id="'.$id.'"></div><p> Age</p></div>';
			$counter++;
		}
	?>
		
		<div class="pet-icon-image" data-toggle="tooltip" data-placement="top" title="<?php echo strip_tags (get_the_term_list( get_the_ID(), 'genderDogs', "",", " )); ?>" id="<?php echo strtolower(strip_tags (get_the_term_list( get_the_ID(), 'genderDogs', "",", " ))); ?>"></div>
		
		<?php $mystring = get_post_meta( $post->ID, 'tell_us_more', true ); //already in the meta: Good with Dogs! Good with Cats! Good with Humans!
 				
				$final_result = get_values( $mystring );
 				$counter = 1;
				foreach ($final_result as $result ) {
					$id = strtolower( str_replace( ' ', '-', $result ) );
					echo '<div class="iconBlock"><div data-toggle="tooltip" data-placement="top" title="'. $result .'" class="pet-icon-image dogs-'.$counter.'" id="'.$id.'"></div><p>' . $result .'</p></div>';
					$counter++;
				}
		?>
		<div class="clear clearfix"></div>
		<!-- pet-icon-image -->
	</div><!-- pet Icons -->  
</div> <!-- row -->  