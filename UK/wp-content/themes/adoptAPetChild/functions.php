<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

    // Get the theme data
    $the_theme = wp_get_theme();

    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_style( 'child-adoptapet-styles', get_stylesheet_directory_uri() . '/style.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js');
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array(), '', true);
    wp_enqueue_script( 'ekkoLightbox', get_stylesheet_directory_uri() . '/js/lightbox/ekko-lightbox.js');
    wp_enqueue_style( 'owl-css', get_stylesheet_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style( 'ekkoLightbox-css', get_stylesheet_directory_uri() . '/js/lightbox/ekko-lightbox.css');
    


}



function first_paragraph($content){
    return preg_replace('/<p([^>]+)?>/', '<p$1 class="intro-content">', $content, 1);
}
add_filter('the_content', 'first_paragraph');



/*********
* Adding extra widgets on top of the understrap defaults
************/
if ( ! function_exists( 'draft_widgets_init' ) ) {
    /**
     * Initializes themes widgets.
     */
    function draft_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Navbar right', 'understrap' ),
            'id'            => 'navbar-right',
            'description'   => 'Widget area in the top right navbar corner',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );

    }
} // endif function_exists( 'understrap_widgets_init' ).
add_action( 'widgets_init', 'draft_widgets_init' );


//==================================================================================
//  Enqueue Google Fonts
//==================================================================================
function wpb_add_google_fonts() {

//wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,700', false );
wp_enqueue_style( 'lato', 'https://fonts.googleapis.com/css?family=Lato:400,700', false );  
wp_enqueue_style( 'bubblegumSane', 'https://fonts.googleapis.com/css?family=Bubblegum+Sans', false);
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

//==================================================================================
//  Add Code directly to header
//==================================================================================

function add_code_wp_head(){

    ?>
    
<?php
header('X-Frame-Options: SAMEORIGIN');
?>

<script type="text/javascript" src="https://www.tagsrescue.com/uk/wp-content/themes/adoptAPetChild/js/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="https://www.tagsrescue.com/uk/wp-content/themes/adoptAPetChild/js/bootstrap-multiselect/css/bootstrap-multiselect.css" type="text/css"/>

<!-- Initialize the plugin: -->
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#s_value').multiselect({
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            maxHeight: 500,
            inheritClass: true,
            enableClickableOptGroups: true,
            nonSelectedText: 'Select a County',
            numberDisplayed: 2,
        });
        jQuery('.multiselect-native-select').addClass('form-control col-xl-3 clo-lg-3 col-md-3 col-sm-12 col-12 float-left');
    });

</script>


<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>

<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>
<script type='text/javascript'>
var gptAdSlots = [];
    googletag.cmd.push(function() {
    // Create size mapping for Billboard position. If viewport is above 1000x768 show banner 1000x300. If viewport is above 728x300 (but bellow 1000x768) show banner 728x90, if viewport is lower than 728x300 show banner 320x100
    var billboardsizes = googletag.sizeMapping().addSize([1024, 768], [970, 90]).addSize([980, 690], [728, 90]).addSize([640, 480], [320, 100]).addSize([0, 0], [320, 50]).build();

    // Create size mapping for Rectangle position. If viewport is above 1000x768 (considered as desktop, you may lower the height) show 300x250 OR 300x600. If the viewport is smaller than 1000x768 show 300x250 only.
    var rectanglesizes = googletag.sizeMapping().addSize([1000, 768], [[300, 60], [300, 250]]).addSize([0, 0], [300, 250]).build();

    var skyscraperAndBox = googletag.sizeMapping().addSize([992, 600], [160, 600]).addSize([0, 0], [300, 250]).build();

    var squareSizes = googletag.sizeMapping().addSize([0, 0], [300, 250]).build();

    // Create size mapping for Smallbanner position. If viewport is above 468x300 (considered as desktop + bigger tablets) show 468x60. If smaller, don't show banner.
    var smallbannersizes = googletag.sizeMapping().addSize([468, 300], [468, 60]).addSize([0, 0], []).build();  

    // Now create the first slot. Please note that we add all the sizes described in the size mapping. This should be set in the DFP Ad Unit configuration as well. Please also note the part of the code: .defineSizeMapping(billboardsizes) - it tells DFP what banner to serve on what device size.
    gptAdSlots[0] = googletag.defineSlot('/21632054740/adoptAPetResponsive', [[320, 100], [320, 50], [728, 90], [970, 90]], 'div-gpt-ad-1520856984371-0').defineSizeMapping(billboardsizes).addService(googletag.pubads());

    // Now create the first slot. Please note that we add all the sizes described in the size mapping. This should be set in the DFP Ad Unit configuration as well. Please also note the part of the code: .defineSizeMapping(skyscraperAndBox) - it tells DFP what banner to serve on what device size.
    gptAdSlots[1] = googletag.defineSlot('/21632054740/laf_wide_skyscraper', [[160, 600], [300, 250]], 'div-gpt-ad-1521992962735-0').defineSizeMapping(skyscraperAndBox).addService(googletag.pubads());

    // Now create the second slot. Please note that we add all the sizes described in the size mapping. This should be set in the DFP Ad Unit configuration as well. Please also note the part of the code: .defineSizeMapping(rectanglesizes) - it tells DFP what banner to serve on what device size. We also incremented gptAdSlots[1] by one and the last number of the div id by 1.
    gptAdSlots[2] = googletag.defineSlot('/21632054740/tags_300_1', [[300, 250]], 'div-gpt-ad-1521989953517-0').defineSizeMapping(squareSizes).addService(googletag.pubads());

    // Now create the third slot. Please note that we add all the sizes described in the size mapping. This should be set in the DFP Ad Unit configuration as well. Please also note the part of the code: .defineSizeMapping(smallbannersizes) - it tells DFP what banner to serve on what device size. We also incremented gptAdSlots[1] by one and the last number of the div id by 1.   
    //gptAdSlots[2] = googletag.defineSlot('/4421777/smallbanner', [468, 60], 'div-gpt-ad-1520696658787-0').defineSizeMapping(smallbannersizes).addService(googletag.pubads());

    googletag.pubads().enableSingleRequest();
    googletag.companionAds().setRefreshUnfilledSlots(true); 
    googletag.pubads().enableVideoAds();    
    googletag.enableServices();
  });   
</script>

<script>
  googletag.cmd.push(function() {
    //googletag.defineSlot('/21632054740/laf_wide_skyscraper', [160, 600], 'div-gpt-ad-1505297328566-0').addService(googletag.pubads());
    googletag.defineSlot('/21632054740/laf_leaderboard', [728, 90], 'div-gpt-ad-1505297328566-1').addService(googletag.pubads());
    //googletag.defineSlot('/21632054740/adoptAPetResponsive', [[320, 100], [728, 90], [320, 50], [970, 90]], 'div-gpt-ad-1520696658787-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<script>
// GPT slots
 
</script>
<!--<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>-->
    <?php 
}
add_action('wp_head', 'add_code_wp_head');

function add_code_wp_footer(){ ?>



<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37069810-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<?php 
}
add_action('wp_footer', 'add_code_wp_footer');
/*
==========================================================
                   Includes
==========================================================
*/

include 'inc/custom-post-types.php';
include 'inc/user-account-fields.php';
include 'inc/social-media-posts.php';
include 'inc/register-sidebars.php';
include 'inc/wpuf-custom.php';
include 'inc/custom-excerpts.php';
include 'inc/posted-on.php';
include 'inc/remove-author-base.php';


/*
==========================================================
                Add Image Size
==========================================================
*/

add_image_size( 'pet_thumb', 423, 350, array( 'center', 'center' ) ); // (cropped)
add_image_size( 'result_thumb', 180, 120, array( 'center', 'center' ) ); // (cropped)


/*
==========================================================
Add New Section in WPUF Account
==========================================================
*/
add_filter( 'wpuf_account_sections', 'wpuf_my_page' );

function wpuf_my_page( $sections ) {
    $sections = array_merge( $sections, array( array( 'slug' => 'submit', 'label' => 'Submit a Pet' ) ) );

    return $sections;
}


//========================================================
//Explode Checkbox Values
//========================================================

function get_values( $mystring ) {
    $array = explode( '|', $mystring );
    $array = array_map('trim', $array);
    $array = array_filter( $array );
 
    return $array;
}


//========================================================
// Dynamically pull rescue email and name for the form
//========================================================

add_filter( 'gform_field_value_author_email', 'populate_post_author_email' );
function populate_post_author_email( $value ) {
    global $post;
 
    $author_email = get_the_author_meta( 'email', $post->post_author );
 
    return $author_email;
}
add_filter( 'gform_field_value_author_name', 'populate_post_author_name' );
function populate_post_author_name( $value ) {
    global $post;
 
    $author_name = get_the_author_meta( 'nickname', $post->post_author );
 
    return $author_name;
}

//========================================================
// Rescue Search
//========================================================
add_shortcode('user_search','My_User_search');
function My_User_search($atts = null){
    $out = user_search_form();

    $args = array(
        'meta_query'    => array(
            array(
                'key'     => 'rescue_pound_vet',
                'value'   => 'rescue'
            )
        )
    );

    if (isset($_GET['user_search']) && $_GET['user_search'] == "search_users" ){
        global $wpdb;
        $metakey = $_GET['search_by'];
        $args = array(
        'meta_query'    => array(
            'relation'  => 'AND',
            array( 
                'key'     => 'county',
            ),
            array(
                'key'     => 'rescue_pound_vet',
                'value'   => 'rescue'
            )
        )
    );
}
         if (isset($_GET['s_value'])){
            $metavalue = $_GET['s_value'];
            $args['meta_value'] = $metavalue;
         } 

        $search_users = get_users($args);
        
        $out .= '<div class="user_search_results">';
        if (count($search_users) >0){

            // here we loop over the users found and return whatever you want eg:
            $out .= '<ul>';
            foreach ($search_users as $user) {
                $out .= '<li>' . $user->user_nicename . '</li>';
                $out .= '<li>' . $user->county . '</li>';
            }
            $out .= '</ul>';
        }else{
            $out .= 'No users found, try searching for something else.';
        }
        $out .= '</div>';
    
    return $out;
}

//function to display user search form
function user_search_form(){


    $metavalue = '';

    if (isset($_GET['s_value'])){
        $metavalue = $_GET['s_value'];
    }
    $re = '<div class="user_search"><form action="" name="user_s" method="get">

        <select id="s_value" name="s_value">
            <option selected="selected" value="">All Rescues</option>
            <option value="kildare">Kildare</option>
            <option value="dublin">Dublin</option>
            <option value="antrim">Antrim</option>
            <option value="down">Down</option>
            <option value="kerry">Kerry</option>

        </select>
            <input name="user_search" id="user_search" type="hidden" value="search_users"/>
            <input id="submit" type="submit" value="Search" />
        </form></div>';
    return $re;
}


//========================================================================================
//Display different menus for logged in users
//========================================================================================

function my_wp_nav_menu_args( $args = '' ) {
    
    if ($args['theme_location'] == 'primary') {
    if( is_user_logged_in() ) {
        $args['menu'] = 'Logged In Menu';
    } else {
        $args['menu'] = 'Primary Header Menu';
    }}
    return $args;
    }

add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

// LOGOUT LINK IN MENU
add_action('check_admin_referer', 'logout_without_confirm', 10, 2);
function logout_without_confirm($action, $result)
{
    /**
     * Allow logout without confirmation
     */
    if ($action == "log-out" && !isset($_GET['_wpnonce'])) {
        $redirect_to = isset($_REQUEST['redirect_to']) ? $_REQUEST['redirect_to'] : 'https://www.tagsrescue.com/uk/dogs';
        $location = str_replace('&amp;', '&', wp_logout_url($redirect_to));
        header("Location: $location");
        die;
    }
}

/**
 * Redirect non-admins to the homepage after logging into the site.
 *
 * @since   1.0
 */
function acme_login_redirect( $redirect_to, $request, $user  ) {
    return ( is_array( $user->roles ) && in_array( 'administrator', $user->roles ) ) ? admin_url() : site_url('/account/posts/');
}
//add_filter( 'login_redirect', 'acme_login_redirect', 10, 3 );

//==================================================================================
//  Redirects users based on their role
//==================================================================================

add_filter('wpuf_login_redirect', 'login_redirect');

function login_redirect($redirect){

   
        $redirect =    home_url('account/posts/') ; 
        return $redirect;
    
}

//==================================================================================
//  Disable Toolbar
//==================================================================================
add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  add_filter('show_admin_bar', '__return_false');
}
}

//==================================================================================
//  Change email address and name on sent emails
//==================================================================================
 
function wpb_sender_email( $original_email_address ) {
    return 'hello@tagsrescue.ie';
}
 
// Function to change sender name
function wpb_sender_name( $original_email_from ) {
    return 'TAGS';
}
 
// Hooking up our functions to WordPress filters 
add_filter( 'wp_mail_from', 'wpb_sender_email' );
add_filter( 'wp_mail_from_name', 'wpb_sender_name' );

//==================================================================================
//  HTTP2 Plugin Code
//==================================================================================
add_filter('http2_render_resource_hints', '__return_true');


//==================================================================================
//  Related Pages
//==================================================================================

// add tag support to pages
function tags_support_all() {
    register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query) {
    if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

// tag hooks
/*add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');

function wpb_related_pages() { 
    $orig_post = $post;
    global $post;
    $tags = wp_get_post_tags($post->ID);

    if ($tags) {
        $tag_ids = array();
        
        foreach($tags as $individual_tag)
                $tag_ids[] = $individual_tag->term_id;

                $args=array(
                    'post_type' => 'page',
                    'tag__in' => $tag_ids,
                    'post__not_in' => array($post->ID),
                    'posts_per_page'=>5
                );

        $my_query = new WP_Query( $args );

        if( $my_query->have_posts() ) {
            
            echo '<div id="relatedpages"><h3>Related Pages</h3><ul>';
            
            while( $my_query->have_posts() ) {
                    $my_query->the_post(); ?>
                
                <li><div class="relatedthumb"><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail('thumb'); ?></a></div>
                    <div class="relatedcontent">
                        <h3><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_time('M j, Y') ?>
                    </div>
                </li>
        <? }
            echo '</ul></div>';
        } else { 
            echo "No Related Pages Found:";
        }
        }
    
    $post = $orig_post;
    wp_reset_query(); 
}*/