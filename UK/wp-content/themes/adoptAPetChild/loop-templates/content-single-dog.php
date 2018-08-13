<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */
?>

<?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/adoptAPetChild/inc/pet-images/dog-images.php';?>

<article <?php post_class('row'); ?> id="post-<?php the_ID(); ?>">
<div class="col-sm-12 col-md-12 col-lg-8">
	<div class="white-block noPaddingTopBottom">
		<div class="row">
    	    <div class="col-lg-9 col-md-9 col-sm-12">
    	        <div class="images-list">
                    <?php if ( get_post_meta($post->ID, 'pet_reserved', true) ) : ?>
                        <div class="reserved_icon">Reserved</div>
                    <?php endif; ?>
    	             <?php 
    	             if( !empty( $first_image_dogs ) ){
    	                    echo  ( function_exists('slb_activate') ) ? slb_activate( $first_image_dogs)  : $first_image_dogs;
    	             } 
    	             ?>
    	        </div>
    	    </div>
    	    <div class="col-lg-3 col-md-3 col-sm-12">
    	        <div class="ad-single-thumbs responsiveClass-576">
    	        <?php 
    	        if( !empty( $owl_items ) ){
    	            foreach( $owl_items as $owl_item ){
    	                echo '<div>'.$owl_item.'</div>';
    	            }
    	        } 
    	        ?>  
    	    
    	        </div>                  
    	    </div>
    	</div> 
    </div>       

	

	<div class="entry-content white-block">
	
	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<span class="updated"><?php understrap_posted_on(); ?></span>

		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	
	<div class="separator">
		<hr />
	</div>

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer white-block">
        <h2>Additional Information</h2>
        <div class="separator">
            <hr />
        </div>
        <div class="container">
		<?php //understrap_entry_footer(); 
			include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/adoptAPetChild/inc/pet-details/dog-details.php';
		?>
        </div>
	</footer><!-- .entry-footer -->
</div>
<div class="col-sm-12 col-md-12 col-lg-4">
	<div class="white-block">
		<?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/adoptAPetChild/inc/author-meta.php'; 
		?>
	</div>

    <div class="white-block">
        <h2>Contact <strong><?php echo get_the_author_meta('nickname'); ?></strong> about <?php the_title();?>.</h2>
        <?php gravity_form( 2, false, false, false, '', false );?>
    </div>
    <div class="ad">
        <!-- /21632054740/laf_wide_skyscraper -->
        <div id='div-gpt-ad-1521989953517-0' style="margin:0 auto 20px auto;text-align:center;display:block;">
            <script>
                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1521989953517-0'); });
            </script>
        </div>
    </div>
	<!--<div class="white-block map">
        <?php echo get_the_author_meta( 'googleMap'); ?>
    </div>-->
    <div class="white-block">
        <div id="share">
            <ul class="list-unstyled share-networks animation <?php echo is_singular( 'post' ) ? 'opened' : ''; ?>">
                <li>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ) ?>" class="share facebook" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="http://twitter.com/intent/tweet?text=<?php echo urlencode( get_permalink() ) ?>" class="share twitter" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://plus.google.com/share?url=<?php echo urlencode( get_permalink() ) ?>" class="share google-plus" target="_blank">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
	<script>
jQuery(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    jQuery(this).ekkoLightbox();
});
</script>
</div>
</article><!-- #post-## -->
