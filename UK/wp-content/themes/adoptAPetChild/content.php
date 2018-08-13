<?php
/**
 * @package dazzling
 */
?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/adoptAPetChild/inc/pet-images/dog-images.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/adoptAPetChild/inc/pet-images/cat-images.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/adoptAPetChild/inc/pet-images/other-images.php';?>

<?php 
$post_type = get_query_var('overview_posttype');
$taxonomy = get_query_var('overview_taxonomy');
$post_type_url = $post->post_type;
$term_name_found = strtolower(get_post_meta( $post->ID, 'what_did_you_find_', true ));
$term_name_lost = strtolower(get_post_meta( $post->ID, 'what_have_you_lost_', true ));
$term_list = wp_get_post_terms($post->ID, array('location', 'locationcats', 'locationothers'), array("fields" => "all"));
					foreach($term_list as $term_single) {
					 
					}

$title = get_the_title();
$author_id = $post->post_author;
?>
<article class="col-xs-12 col-sm-6 col-md-4 col-lg-3" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="white-block ad-box">

	<div class="white-block-media">
		<?php
		echo '<div class="ad-badges">';
			//classifieds_get_featured_badge( get_the_ID() );
			//classifieds_get_verified_badge( get_the_author_meta( 'ID' ) );

		echo '</div>';
		?>
		<?php if ( get_post_meta($post->ID, 'pet_reserved', true) ) : ?>
				<div class="reserved_icon">Reserved</div>
			<?php endif; ?>
		<a href="<?php echo the_permalink();?>">
			<?php 
                if( !empty( $first_image_dogs_home ) && $ad_images = get_post_meta( get_the_ID(), 'images_dogs', array() ) ){
                       echo  $first_image_dogs_home;
                } else if( !empty( $first_image_cats_home ) && $ad_images = get_post_meta( get_the_ID(), 'images_cats', array() ) ){
                       echo  $first_image_cats_home;
                } else if( !empty( $first_image_others_home ) && $ad_images = get_post_meta( get_the_ID(), 'images_others', array() ) ){
                       echo  $first_image_others_home;
                }
            ?></a>
	</div>
	
	<div class="white-block-content">

		<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
			<h5><?php echo mb_strimwidth($title, 0, 40, '...'); ?></h5>
		</a><br />
		
		<a href=""><?php the_author_meta( 'nickname' , $author_id );?></a><br />
		<a href="/<?php echo $post_type_url; ?>/county-<?php echo $post_type_url; ?>/<?php echo $term_single->name; ?>">
			<span class="block-county"><?php echo $term_single->name; ?> |</span>
		</a>
		<span class="block-time"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ); ?></span>
		<div class="clear clearfix"></div>
		<a href="/<?php echo $post_type_url; ?>/<?php echo str_replace('_',"-", $term_name_found); ?>s-<?php echo $post_type_url; ?>">
			<span class="block-category">
				<?php if ($term_name_found) :
					echo ucwords(str_replace('_'," ", $term_name_found));
				elseif ($term_name_lost) :
					echo ucwords(str_replace('_'," ", $term_name_lost));
				endif;
				?>
			</span>
		</a>
		


		<?php
			wp_link_pages( array(
				'before'            => '<div class="page-links">'.__( 'Pages:', 'dazzling' ),
				'after'             => '</div>',
				'link_before'       => '<span>',
				'link_after'        => '</span>',
				'pagelink'          => '%',
				'echo'              => 1
       		) );
    	?>
	</div><!-- .white-block-content -->
	

</div>
</article><!-- #post-## -->
