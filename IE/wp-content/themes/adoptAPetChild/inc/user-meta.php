<div class="media">
	<div class="userDetails row no-gutters">
		<?php
			if ( is_user_logged_in() ):
            $current_user = wp_get_current_user();
			
			if ( ($current_user instanceof WP_User) ) { ?>
				<div class="col-4 float-left">
					<?php echo get_avatar( $current_user->user_email, 200 ); ?>
				</div>
				<div class="col-8 float-left">
					<?php echo '<div class="userWelcome">Hi ' . $current_user->display_name . '!<br /></div>';
    					  //echo 'User email: ' . $current_user->user_email . '<br />';
    					  //echo 'User first name: ' . $current_user->user_firstname . '<br />';
    					  //echo 'User last name: ' . $current_user->user_lastname . '<br />';
    					  //echo 'User login: ' . $current_user->user_login . '<br />';
    					  //echo 'User ID: ' . $current_user->ID . '<br />';
    				?>
    			</div>
				
			<?php	}
        	endif;
		?>
	</div>
</div>