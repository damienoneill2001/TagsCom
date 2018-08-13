<?php

$ad_images = get_post_meta( get_the_ID(), 'images_dogs', true ); 


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
    
        $img_counter++;

        $full_image_data = wp_get_attachment_image_src( $ad_images, 'full' );
        $medium_image_data = wp_get_attachment_image_src( $ad_images, 'medium' );

        $first_image_dogs .= '<a class="single-ad-image '.( empty( $first_image_dogs ) ? '' : 'hidden' ).' item-'.esc_attr__( $img_counter ).'"  href="'.esc_url( $full_image_data[0] ).'">';
        $first_image_dogs .= '<img src="'. esc_url($medium_image_data[0] ).'" width="'.esc_attr__( $medium_image_data[1] ).'" height="'.esc_attr__( $medium_image_data[2] ).'" alt="">';
        $first_image_dogs .= '</a>';

        $first_image_dogs_home .= '<span class="single-ad-image '.( empty( $first_image_dogs_home ) ? '' : 'hidden' ).' item-'.esc_attr__( $img_counter ).'">';
        $first_image_dogs_home .= '<img src="'. esc_url( $medium_image_data[0] ).'" width="'.esc_attr__( $medium_image_data[1] ).'" height="'.esc_attr__( $medium_image_data[2] ).'" alt="">';
        $first_image_dogs_home .= '</span>';

        if( $item_count == 4 ){
            $item_count = 0;
            $current_column++;
        }
        $item_count++;

        if( empty( $owl_items[$current_column] ) ){
            $owl_items[$current_column] = '';
        }

        $owl_items[$current_column] .= '<div class="img-owl-wrap">'.wp_get_attachment_image( $ad_image, 'laf-ad-owl-thumb', false, array( 'class' => 'single-ad-thumb', 'data-item' => $img_counter ) ).'</div>';

    
}

if (empty ($ad_images)){
    $first_image_dogs .= '<a class="single-ad-image '.( empty( $first_image_dogs ) ? '' : 'hidden' ).' item-'.esc_attr__( $img_counter ).'"  href="'.esc_url( $full_image_data[0] ).'">';
    $first_image_dogs .= '<img src="https://d2j37zjdcvs0ag.cloudfront.net/wp-content/uploads/2017/09/24154019/placeholder.png"  alt="">';
    $first_image_dogs .= '</a>';
    
}