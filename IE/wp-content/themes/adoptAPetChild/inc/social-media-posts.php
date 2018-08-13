<?php

//==================================================================================
//  Custom OG/Twitter Card tags
//==================================================================================

function tes_mb_display() {
 
    global $post;
     
    // retrieve the metadata values if they exist
    $tes_meta_title = get_the_title();
    $ad_images = get_post_meta( get_the_ID(), 'images_dogs', array() );
    if (!empty($ad_images)){
        $tes_meta_img = get_post_meta( $post->ID, 'images_dogs', true );
        $tes_meta_img_url = wp_get_attachment_url($tes_meta_img);
    } else {
        $tes_meta_img_url = 'https://s3-eu-west-1.amazonaws.com/adoptapet.ie/wp-content/uploads/2018/03/28131028/tags_sm_default.jpg';
    }
    if( ! is_page_template( array( 'loop-templates/content.php', 'page-templates/right-sidebarpage.php', 'account-submit.php','account-submit-pet.php' ) ) ){
        $tes_meta_description = get_the_content($post->ID, false);
    }
    $tes_meta_description1 = get_post_meta( $post->ID, 'post_content', true );
 
    echo ' <!-- Tutsplus Easy SEO (author: http://tech4sky.com) -->
    <meta property="og:title" content="' . $tes_meta_title . ' | TAGS" />
    <meta property="og:description" content="' . $tes_meta_description . '" />
    <meta property="og:image" content="' . $tes_meta_img_url . '" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@tagsrescue">
    <meta name="twitter:creator" content="@tagsrescue">
    <meta name="twitter:title" content="' . $tes_meta_title . ' | TAGS">
    <meta name="twitter:description" content="' . $tes_meta_description . '"
    <meta name="twitter:image" content="' . $tes_meta_img_url . '"
    <!-- /Tutsplus Easy SEO -->
    ';

}
add_action( 'wp_head', 'tes_mb_display' );
add_filter('wpseo_opengraph_image' , '__return_false' );
add_filter('wpseo_opengraph_desc', '__return_false' );
add_filter('wpseo_opengraph_title', '__return_false' );