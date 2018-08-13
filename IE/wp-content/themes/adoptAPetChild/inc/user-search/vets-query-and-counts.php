<?php
//====================================================================================
// Array for the search
//====================================================================================

$current_page = get_query_var('paged') ? (int) get_query_var('paged') : 1;
$users_per_page = 20;
$args = array(  
        'number' 		=> $users_per_page, // How many per page
    	'paged' 		=> $current_page, // What page to get, starting from 1.
		'orderby'       => 'user_nicename',
		'count_total'   => true,
		'meta_key'     	=> 'rescue_pound_vet',
    	'meta_value'   	=> 'vet',
		);

if (isset($_GET['s_value'])){
	global $wpdb;
    $args = array(
        	'number'		=> $users_per_page, // How many per page
    		'paged' 		=> $current_page, // What page to get, starting from 1.
			'orderby'       => 'user_nicename',
			'count_total'   => true,
        	'meta_query'    => array(
            					'relation'  => 'AND',
            						array( 
                						'key'     => 'county',
            						),
            						array(
                						'key'     => 'rescue_pound_vet',
                						'value'   => 'vet'
            						)
        						)
    		);
}
         
if (isset($_GET['s_value'])){
    $metavalue = $_GET['s_value'];
    $args['meta_value'] = $metavalue;
} 

//====================================================================================
// Used to create the count
//====================================================================================

$search_users = new WP_User_Query( $args );
$total_users = $search_users->get_total(); // How many users we have in total (beyond the current page)
$num_pages = ceil($total_users / $users_per_page); // How many pages of users we will need
$start_user_num = (($current_page-1) * $users_per_page) + 1;
$end_user_num = $start_user_num + count($search_users->get_results())-1;
$key = 'county';

if ($total_users < $users_per_page) {
	$users_per_page = $total_users;
} ?>

<div class="rescueCount row no-gutters">            
    <div class="col-4 float-left pageNum"><p>Page <?php echo $current_page; ?> of <?php echo $num_pages; ?></p></div>
    <div class="col-8 float-right userCount"><p>Displaying <?php echo $start_user_num; ?> to <?php echo $end_user_num; ?> of <?php echo $total_users; ?> users</p></div>
</div>