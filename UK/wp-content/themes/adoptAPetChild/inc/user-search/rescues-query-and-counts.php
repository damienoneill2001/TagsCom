<?php
//====================================================================================
// Array for the search
//====================================================================================

$current_page = get_query_var('paged') ? (int) get_query_var('paged') : 1;
$users_per_page = 20;

if (isset($_GET['s_value'])){
   $metavalue = $_GET['s_value'];
   //$args['meta_query'][][][] = $metavalue;

} 
if (isset($_GET['type_value'])){
    $metavalueType = $_GET['type_value'];
   //$args['meta_query'][][][] = $metavalueType;
}
if ( ((isset($_GET['type_value']) && empty($_GET['type_value'])) && (isset($_GET['s_value']) && empty($_GET['s_value']))) || (!isset($_GET['type_value']) && !isset($_GET['s_value'])) ){
    $args = array(  
        'number'        => $users_per_page, // How many per page
        'paged'         => $current_page, // What page to get, starting from 1.
        'orderby'       => 'user_nicename',
        'count_total'   => true,
        'meta_key'      => 'rescue_pound_vet',
        'meta_value'    => 'rescue',
        );
    //echo 'main |';
}


//===========================
// Counties only
//===========================
if ( isset($_GET['s_value']) && !empty($_GET['s_value']) && isset($_GET['type_value']) && empty($_GET['type_value']) ){
    //$metavalue = $_GET['s_value'];
    $args = array(  
        'number'        => $users_per_page, // How many per page
        'paged'         => $current_page, // What page to get, starting from 1.
        'orderby'       => 'user_nicename',
        'count_total'   => true,
        'meta_key'      => 'rescue_pound_vet',
        'meta_value'    => 'rescue',
        );
    $args['meta_query'] = array(
                            'key'=>'county',
                            'value'=>$metavalue,
                            );
    //echo 'counties';
}

//===========================
// Dog Type only
//===========================
if ( isset($_GET['type_value']) && $_GET['type_value']=="Dogs" && empty($_GET['s_value']) ){
    $args = array(  
        'number'        => $users_per_page, // How many per page
        'paged'         => $current_page, // What page to get, starting from 1.
        'orderby'       => 'user_nicename',
        'count_total'   => true,
        'meta_key'      => 'rescue_pound_vet',
        'meta_value'    => 'rescue',
        );
      $args['meta_query'] = array(
                            'key'=>'petType1',
                            'value'=>'dogs',
                            );
    //echo 'dogs |';  
      
}

//===========================
// Cat Type only
//===========================
if ( isset($_GET['type_value']) && $_GET['type_value']=="Cats" && empty($_GET['s_value']) ){
    $args = array(  
        'number'        => $users_per_page, // How many per page
        'paged'         => $current_page, // What page to get, starting from 1.
        'orderby'       => 'user_nicename',
        'count_total'   => true,
        'meta_key'      => 'rescue_pound_vet',
        'meta_value'    => 'rescue',
        );
      $args['meta_query'] = array(
                            'key'=>'petType2',
                            'value'=>'cats',
                            );
    //echo 'cats |';  
     
}
//===========================
// Smallies Type only
//===========================
if ( isset($_GET['type_value']) && $_GET['type_value']=="Small Animals" && empty($_GET['s_value'])){
    $args = array(  
        'number'        => $users_per_page, // How many per page
        'paged'         => $current_page, // What page to get, starting from 1.
        'orderby'       => 'user_nicename',
        'count_total'   => true,
        'meta_key'      => 'rescue_pound_vet',
        'meta_value'    => 'rescue',
        );
      $args['meta_query'] = array(
                            'key'=>'petType3',
                            'value'=>'smallAnimals',
                            );
    //echo 'wildlife |';  
    
}

//===========================
// Horses Type only
//===========================
if ( isset($_GET['type_value']) && $_GET['type_value']=="Horses/Donkeys" && empty($_GET['s_value'])){
    $args = array(  
        'number'        => $users_per_page, // How many per page
        'paged'         => $current_page, // What page to get, starting from 1.
        'orderby'       => 'user_nicename',
        'count_total'   => true,
        'meta_key'      => 'rescue_pound_vet',
        'meta_value'    => 'rescue',
        );
      $args['meta_query'] = array(
                            'key'=>'petType4',
                            'value'=>'horses',
                            );
    //echo 'wildlife |';  
    
}

//===========================
// Wildlife Type only
//===========================
if ( isset($_GET['type_value']) && $_GET['type_value']=="Wildlife" && empty($_GET['s_value'])){
    $args = array(  
        'number'        => $users_per_page, // How many per page
        'paged'         => $current_page, // What page to get, starting from 1.
        'orderby'       => 'user_nicename',
        'count_total'   => true,
        'meta_key'      => 'rescue_pound_vet',
        'meta_value'    => 'rescue',
        );
      $args['meta_query'] = array(
                            'key'=>'petType5',
                            'value'=>'wildlife',
                            );
    //echo 'wildlife |';  
    
}

//===========================
// Dog Type & County
//===========================
if ( isset($_GET['type_value']) && $_GET['type_value']=="Dogs" && isset($_GET['s_value']) && !empty($_GET['s_value']) ){

      $args['meta_query'] = array(
                                array(
                                    'key'=>'petType1',
                                    'value'=>'dogs',
                                ),
                                array(
                                    'key'=>'county',
                                    'value'=>$metavalue,
                                ),
                                'relation'=>'AND',
                            );
    //echo 'dogs and county |';  
     
}

//===========================
// Cat Type & County
//===========================
if ( isset($_GET['type_value']) && $_GET['type_value']=="Cats" && isset($_GET['s_value']) && !empty($_GET['s_value']) ){

      $args['meta_query'] = array(
                                array(
                                    'key'=>'petType2',
                                    'value'=>'cats',
                                ),
                                array(
                                    'key'=>'county',
                                    'value'=>$metavalue,
                                ),
                                'relation'=>'AND',
                            );
    //echo 'cats and county |';  
    
}

//===========================
// Smallies Type & County
//===========================
if ( isset($_GET['type_value']) && $_GET['type_value']=="Small Animals" && isset($_GET['s_value']) && !empty($_GET['s_value']) ){

      $args['meta_query'] = array(
                                array(
                                    'key'=>'petType3',
                                    'value'=>'smallAnimals',
                                ),
                                array(
                                    'key'=>'county',
                                    'value'=>$metavalue,
                                ),
                                'relation'=>'AND',
                            );
    //echo 'cats and county |';  
    
}
//===========================
// Horse Type & County
//===========================
if ( isset($_GET['type_value']) && $_GET['type_value']=="Horses/Donkeys" && isset($_GET['s_value']) && !empty($_GET['s_value']) ){

      $args['meta_query'] = array(
                                array(
                                    'key'=>'petType4',
                                    'value'=>'horses',
                                ),
                                array(
                                    'key'=>'county',
                                    'value'=>$metavalue,
                                ),
                                'relation'=>'AND',
                            );
    //echo 'cats and county |';  
    
}
//===========================
// Wildlife Type & County
//===========================
if ( isset($_GET['type_value']) && $_GET['type_value']=="Wildlife" && isset($_GET['s_value']) && !empty($_GET['s_value'])){
    
      $args['meta_query'] = array(
                                array(
                                    'key'=>'petType3',
                                    'value'=>'wildlife',
                                ),
                                array(
                                    'key'=>'county',
                                    'value'=>$metavalue,
                                ),
                                'relation'=>'AND',
                            );
    //echo 'wildlife and county |';  
    }  


//var_dump ($args);         


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