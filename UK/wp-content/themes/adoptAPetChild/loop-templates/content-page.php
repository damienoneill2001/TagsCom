<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class('white-block'); ?> id="post-<?php the_ID(); ?>">
	<?php if(function_exists('bcn_display'))
		{
		bcn_display();
		}
	?>
	<header class="entry-header">

		<?php the_title( '<h1 class="">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->
<?php if ( !is_page(array('141','193', '524','1259','1268','1272', '1838', '18906', '19798' ) ) ){ ?>
	<footer class="entry-footer">

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

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

<div class="white-block">
	<?php //wpb_related_pages(); ?>
</div>
<?php } ?>