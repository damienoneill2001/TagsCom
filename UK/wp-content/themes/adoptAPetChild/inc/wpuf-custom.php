<?php

/*
==========================================================
Multiple Post Types for the Dashboard
==========================================================
*/
function wpufe_dashboard_post_type( $args ) {
    $args['post_type'] = array( 'dogs', 'cats', 'others');
 
    return $args;
}
 
add_filter( 'wpuf_dashboard_query', 'wpufe_dashboard_post_type' );