<?php

if ( ! function_exists('dogs_cpt') ) {

// Register Custom Post Type
function dogs_cpt() {

	$labels = array(
		'name'                  => 'Dogs',
		'singular_name'         => 'Dog',
		'menu_name'             => 'Dogs',
		'name_admin_bar'        => 'Dogs',
		'archives'              => 'Item Archives',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Items',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'view_items'            => 'View Items',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$rewrite = array(
		'slug'                  => 'dogs',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Dog',
		'description'           => 'CPT for the Dogs',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( 'breed', 'location', 'size-dogs', 'sexes-dogs' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'dogs',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'dogs', $args );

}
add_action( 'init', 'dogs_cpt', 0 );

}

/*
==========================================================================================
Register Dogs Custom Taxononies
==========================================================================================
*/

/* Breeds */

function my_taxonomies_breed() {
	$labels = array(
		'name'              => _x( 'Breeds', 'taxonomy general name' ),
		'singular_name'     => _x( 'Breed', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Breeds' ),
		'all_items'         => __( 'All Breeds' ),
		'parent_item'       => __( 'Parent Breeds' ),
		'parent_item_colon' => __( 'Parent Breed:' ),
		'edit_item'         => __( 'Edit Breed' ), 
		'update_item'       => __( 'Update Breed' ),
		'add_new_item'      => __( 'Add New Breed' ),
		'new_item_name'     => __( 'New Breed' ),
		'menu_name'         => __( 'Breeds' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'breed', 'dogs', $args );
}
add_action( 'init', 'my_taxonomies_breed', 0 );

/* Locations */

function my_taxonomies_location() {
	$labels = array(
		'name'              => _x( 'Locations', 'taxonomy general name' ),
		'singular_name'     => _x( 'Location', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Locations' ),
		'all_items'         => __( 'All Locations' ),
		'parent_item'       => __( 'Parent Locations' ),
		'parent_item_colon' => __( 'Parent Location:' ),
		'edit_item'         => __( 'Edit Location' ), 
		'update_item'       => __( 'Update Location' ),
		'add_new_item'      => __( 'Add New Location' ),
		'new_item_name'     => __( 'New Location' ),
		'menu_name'         => __( 'Locations' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'location', 'dogs', $args );
}
add_action( 'init', 'my_taxonomies_location', 0 );

/* Dog Sizes */

function my_taxonomies_size_dogs() {
	$labels = array(
		'name'              => _x( 'Sizes', 'taxonomy general name' ),
		'singular_name'     => _x( 'Size', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Sizes' ),
		'all_items'         => __( 'All Sizes' ),
		'parent_item'       => __( 'Parent Sizes' ),
		'parent_item_colon' => __( 'Parent Size:' ),
		'edit_item'         => __( 'Edit Size' ), 
		'update_item'       => __( 'Update Size' ),
		'add_new_item'      => __( 'Add New Size' ),
		'new_item_name'     => __( 'New Size' ),
		'menu_name'         => __( 'Sizes' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'rewrite'      => array( 'slug' => 'size-dogs' ),
	);
	register_taxonomy( 'sizedogs', 'dogs', $args );
}
add_action( 'init', 'my_taxonomies_size_dogs', 0 );

/* Dog Sexes */

function my_taxonomies_sexes_dogs() {
	$labels = array(
		'name'              => _x( 'Genders', 'taxonomy general name' ),
		'singular_name'     => _x( 'Gender', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Genders' ),
		'all_items'         => __( 'All Genders' ),
		'parent_item'       => __( 'Parent Genders' ),
		'parent_item_colon' => __( 'Parent Gender:' ),
		'edit_item'         => __( 'Edit Gender' ), 
		'update_item'       => __( 'Update Gender' ),
		'add_new_item'      => __( 'Add New Gender' ),
		'new_item_name'     => __( 'New Gender' ),
		'menu_name'         => __( 'Gender' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'rewrite'      => array( 'slug' => 'gender-dogs' ),
	);
	register_taxonomy( 'genderdogs', 'dogs', $args );
}
add_action( 'init', 'my_taxonomies_sexes_dogs', 0 );


/*
==========================================================================================
Register Cats Custom Post Type
==========================================================================================
*/

if ( ! function_exists('cats_cpt') ) {

// Register Custom Post Type
function cats_cpt() {

	$labels = array(
		'name'                  => 'Cats',
		'singular_name'         => 'Cat',
		'menu_name'             => 'Cats',
		'name_admin_bar'        => 'Cats',
		'archives'              => 'Item Archives',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Items',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'view_items'            => 'View Items',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$rewrite = array(
		'slug'                  => 'cats',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Cat',
		'description'           => 'CPT for the Cats',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( 'sex-cats','location-cats' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'cats',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'cats', $args );

}
add_action( 'init', 'cats_cpt', 0 );

}

/*
==========================================================================================
Register Cats Custom Taxononies
==========================================================================================
*/

/* Cats Sex */

function my_taxonomies_sex_cats() {
	$labels = array(
		'name'              => _x( 'Genders', 'taxonomy general name' ),
		'singular_name'     => _x( 'Gender', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Gender' ),
		'all_items'         => __( 'All Genders' ),
		'parent_item'       => __( 'Parent Genders' ),
		'parent_item_colon' => __( 'Parent Gender:' ),
		'edit_item'         => __( 'Edit Gender' ), 
		'update_item'       => __( 'Update Gender' ),
		'add_new_item'      => __( 'Add New Gender' ),
		'new_item_name'     => __( 'New Gender' ),
		'menu_name'         => __( 'Gender' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'rewrite'      => array( 'slug' => 'gender-cats' ),
	);
	register_taxonomy( 'gendercats', 'cats', $args );
}
add_action( 'init', 'my_taxonomies_sex_cats', 0 );

/* Cats Location */

function my_taxonomies_location_cats() {
	$labels = array(
		'name'              => _x( 'Locations', 'taxonomy general name' ),
		'singular_name'     => _x( 'Location', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Locations' ),
		'all_items'         => __( 'All Locations' ),
		'parent_item'       => __( 'Parent Locations' ),
		'parent_item_colon' => __( 'Parent Location:' ),
		'edit_item'         => __( 'Edit Location' ), 
		'update_item'       => __( 'Update Location' ),
		'add_new_item'      => __( 'Add New Location' ),
		'new_item_name'     => __( 'New Location' ),
		'menu_name'         => __( 'Locations' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'rewrite'      => array( 'slug' => 'location-cats' ),
	);
	register_taxonomy( 'locationcats', 'cats', $args );
}
add_action( 'init', 'my_taxonomies_location_cats', 0 );


/*
==========================================================================================
Register Others Custom Post Type
==========================================================================================
*/

if ( ! function_exists('others_cpt') ) {

// Register Custom Post Type
function others_cpt() {

	$labels = array(
		'name'                  => 'Others',
		'singular_name'         => 'Other',
		'menu_name'             => 'Others',
		'name_admin_bar'        => 'Others',
		'archives'              => 'Item Archives',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Items',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'view_items'            => 'View Items',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$rewrite = array(
		'slug'                  => 'others',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Other',
		'description'           => 'CPT for the Others',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( 'other-type','location-others' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'others',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'others', $args );

}
add_action( 'init', 'others_cpt', 0 );

}


/*
==========================================================================================
Register Others Custom Taxononies
==========================================================================================
*/

/* Others Pet Type */

function my_taxonomies_other_type() {
	$labels = array(
		'name'              => _x( 'Other Types', 'taxonomy general name' ),
		'singular_name'     => _x( 'Other Type', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Other Types' ),
		'all_items'         => __( 'All Other Types' ),
		'parent_item'       => __( 'Parent Other Types' ),
		'parent_item_colon' => __( 'Parent Other Type:' ),
		'edit_item'         => __( 'Edit Other Type' ), 
		'update_item'       => __( 'Update Other Type' ),
		'add_new_item'      => __( 'Add New Other Type' ),
		'new_item_name'     => __( 'New Other Type' ),
		'menu_name'         => __( 'Other Types' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'rewrite'      => array( 'slug' => 'other-pets-type' ),
	);
	register_taxonomy( 'otherpetstype', 'others', $args );
}
add_action( 'init', 'my_taxonomies_other_type', 0 );

/* Others Location */

function my_taxonomies_location_others() {
	$labels = array(
		'name'              => _x( 'Locations', 'taxonomy general name' ),
		'singular_name'     => _x( 'Location', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Locations' ),
		'all_items'         => __( 'All Locations' ),
		'parent_item'       => __( 'Parent Locations' ),
		'parent_item_colon' => __( 'Parent Location:' ),
		'edit_item'         => __( 'Edit Location' ), 
		'update_item'       => __( 'Update Location' ),
		'add_new_item'      => __( 'Add New Location' ),
		'new_item_name'     => __( 'New Location' ),
		'menu_name'         => __( 'Locations' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'rewrite'      => array( 'slug' => 'location-others' ),
	);
	register_taxonomy( 'locationothers', 'others', $args );
}
add_action( 'init', 'my_taxonomies_location_others', 0 );
