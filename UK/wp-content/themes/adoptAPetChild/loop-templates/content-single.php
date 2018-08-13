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
	<!--<div class="white-block noPaddingTopBottom">
		<div class="row">
    	    <div class="col-lg-9 col-md-9 col-sm-12">
    	        <div class="images-list">

    	             <?php 
    	             if( !empty( $first_image ) ){
    	                    echo  ( function_exists('slb_activate') ) ? slb_activate( $first_image)  : $first_image;
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
    </div>   -->    

	

	<div class="entry-content white-block">
	
	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

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
        
	</footer><!-- .entry-footer -->
</div>
<div class="col-sm-12 col-md-12 col-lg-4">
    <?php dynamic_sidebar('right-sidebar') ;?>
</div>
</article><!-- #post-## -->
