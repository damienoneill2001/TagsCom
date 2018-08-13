<?php

//========================================================
// Posted On info
//========================================================
if ( ! function_exists( 'understrap_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function understrap_posted_on() {
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    }
    $time_string = sprintf( $time_string,
        esc_attr( get_the_date( 'c' ) ),
        esc_html( get_the_date() ),
        esc_attr( get_the_modified_date( 'c' ) ),
        esc_html( get_the_modified_date() )
    );
    $posted_on = sprintf(
        esc_html_x( ' %s', 'post date', 'understrap' ),
        $time_string
    );
    $byline = sprintf(
        esc_html_x( ' %s', 'post author', 'understrap' ),
        '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
    );
    echo '<div class="posted-on"><i class="fa fa-calendar"></i> &nbsp;' . $posted_on . '</div></ br><div class="byline"><i class="fa fa-user"></i> &nbsp;' . $byline . '</div>'; // WPCS: XSS OK.
}
endif;


if ( ! function_exists( 'tagsPetsRescueMeta' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function tagsPetsRescueMeta() {

        $user = get_the_author();
    ?>
        <div class="rescueCounty"><i class="fa fa-map-marker"></i>&nbsp;<?php echo get_the_author_meta('county');?></div>
        
        
    <div class="clear clearfix"></div>
<?php  }
endif;