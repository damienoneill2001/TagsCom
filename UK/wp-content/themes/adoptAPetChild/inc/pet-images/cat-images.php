<?php
$ad_images = get_post_meta( get_the_ID(), 'images_cats', array() ); 


$first_image = '';
$owl_items = array();
$item_count = 0;
$current_column = 0;
$columns = 0;
$img_counter = 0;

$items_sum = 0;
if( !empty( $ad_images ) ){
    $items_sum += sizeof( $ad_images );
}


$columns = ceil( $items_sum / 4 );

if( !empty( $ad_images ) ){
    foreach( $ad_images as $ad_image ){
        $img_counter++;

        $full_image_data = wp_get_attachment_image_src( $ad_image, 'full' );
        $medium_image_data = wp_get_attachment_image_src( $ad_image, 'laf-ad-single' );

        $first_image_cats .= '<a class="single-ad-image '.( empty( $first_image_cats ) ? '' : 'hidden' ).' item-'.esc_attr__( $img_counter ).'"  href="'.esc_url( $full_image_data[0] ).'">';
        $first_image_cats .= '<img src="'.esc_url( $medium_image_data[0] ).'" width="'.esc_attr__( $medium_image_data[1] ).'" height="'.esc_attr__( $medium_image_data[2] ).'" alt="">';
        $first_image_cats .= '</a>'; //This goes into the anchor tag if needed for BootStrap Lightbox - data-toggle="lightbox" data-gallery="example-gallery"

        $first_image_cats_home .= '<span class="single-ad-image '.( empty( $first_image_cats_home ) ? '' : 'hidden' ).' item-'.esc_attr__( $img_counter ).'">';
        $first_image_cats_home .= '<img src="'.esc_url( $medium_image_data[0] ).'" width="'.esc_attr__( $medium_image_data[1] ).'" height="'.esc_attr__( $medium_image_data[2] ).'" alt="">';
        $first_image_cats_home .= '</span>';

        if( $item_count == 4 ){
            $item_count = 0;
            $current_column++;
        }
        //$item_count++;

        if( empty( $owl_items[$current_column] ) ){
            $owl_items[$current_column] = '';
        }

        $owl_items[$current_column] .= '<div class="img-owl-wrap">'.wp_get_attachment_image( $ad_image, 'laf-ad-owl-thumb', false, array( 'class' => 'single-ad-thumb', 'data-item' => $img_counter ) ).'</div>';

    }
}

if (empty ($ad_images)){
    $first_image_cats .= '<a class="single-ad-image '.( empty( $first_image_cats ) ? '' : 'hidden' ).' item-'.esc_attr__( $img_counter ).'"  href="'.esc_url( $full_image_data[0] ).'">';
    $first_image_cats .= '<img src="https://d2j37zjdcvs0ag.cloudfront.net/wp-content/uploads/2017/09/24154019/placeholder.png"  alt="">';
    $first_image_cats .= '</a>'; //This goes into the anchor tag if needed for BootStrap Lightbox - data-toggle="lightbox" data-gallery="example-gallery"
    
}