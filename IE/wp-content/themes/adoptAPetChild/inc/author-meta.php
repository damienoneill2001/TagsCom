
	<?php
		$user = get_the_author();
	?>
		<div class="rescueAvatar"><?php echo get_wp_user_avatar($user->ID);?></div>
		<?php echo get_favorites_button($post_id, $site_id);?>
		<!--<div class="rescueName"><?php //echo get_the_author_meta('nickname');?></div>
		<div class="rescueCounty"><?php //echo get_the_author_meta('county');?></div>-->
	<div class="clear clearfix"></div>