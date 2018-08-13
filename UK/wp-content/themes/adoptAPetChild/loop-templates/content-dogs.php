<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/adoptAPetChild/inc/pet-images/dog-images.php';?>

<div class="row-fluid no-gutters">
<article <?php post_class(' white-block petResults float-left col-sm-12 col-12 col-md-12 col-lg-12'); ?> id="post-<?php the_ID(); ?>">

	<div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 float-left">
		<div class="white-block-media">
			<?php if ( get_post_meta($post->ID, 'pet_reserved', true) ) : ?>
				<div class="reserved_icon">Reserved</div>
			<?php endif; ?>
			<a href="<?php the_permalink();?>"><?php if( !empty( $first_image_dogs_home ) ){
    	                    echo  $first_image_dogs_home;
    	             }  ?></a>
		</div>
	</div>

	<div class="entry-content col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12 float-left no-gutters">
		<div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-xs-12 float-left">
		<?php the_title( sprintf( '<h2 class=""><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h2>' ); ?>

			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

		<div class="postExcerpt">
			<?php the_excerpt();?>
		</div>
		
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 float-left">
			<div class="rescueDetails">
				<?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/adoptAPetChild/inc/author-meta.php';?>
			</div>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
</div>