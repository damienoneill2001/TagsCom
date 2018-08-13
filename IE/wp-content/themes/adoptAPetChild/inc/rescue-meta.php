<div class="media">
	<?php
		$user ='1';
		
		echo '<img src="' . get_avatar_url($user) .'" />';
		echo get_the_author_meta($user, 'id');
		echo get_user_meta($user, 'county', true);


	?>
	<a class="pull-left" href="<?php echo  '' ?>">
		
	</a>
	<div class="media-body">
		
	</div>
</div>