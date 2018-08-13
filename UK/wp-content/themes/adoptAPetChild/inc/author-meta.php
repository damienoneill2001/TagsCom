
	<?php
		$user = get_the_author();
	?>
		<div class="rescueAvatar"><?php echo get_wp_user_avatar($user->ID);?></div>
		<div class="rescueName"><?php echo get_the_author_meta('nickname');?></div>
		<div class="rescueCounty"><?php echo get_the_author_meta('county');?></div>
	<div class="clear clearfix"></div>

	<a class="pull-left" href="<?php echo  $author_url ?>">
		
	</a>
	<div class="media-body">
		
	</div>
