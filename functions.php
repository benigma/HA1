<?php

// adding functionality for nav menus on the admin area

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 370, 250 );

function register_theme_menus () {

	register_nav_menus(
		array(
				'primary-menu' => __( 'Primary Menu' )
			)
		);
}

add_action( 'init', 'register_theme_menus' );

function wp_get_attachment( $attachment_id ) {

    $attachment = get_post( $attachment_id );
    return array(
        'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
        'caption' => $attachment->post_excerpt,
        'description' => $attachment->post_content,
        'title' => $attachment->post_title
    );
}

function remove_admin_bar_style_frontend() { 
  echo '<style type="text/css" media="screen">
  html { margin-top: 0px !important; }
  * html body { margin-top: 0px !important; }
  </style>';
}

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

add_filter('wp_head','remove_admin_bar_style_frontend', 99);
add_filter('show_admin_bar', '__return_false');


function pagination($pages = '', $range = 4) {
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '') {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages) {
             $pages = 1;
         }
     }   
 
     if(1 != $pages) {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++) {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

// Harrow Login Logo
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/site-login-logo.png');
		    height:96px;
		    width:250px;
		    background-size: 250px 96px;
		    background-repeat: no-repeat;
        	padding-bottom: 8px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Harrow Business Improvement District';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// Footer Info
function change_footer_admin () {
  echo 'Harrow - Business Improvement District';
}  
add_filter('admin_footer_text', 'change_footer_admin');


//Yoast UK 
add_filter('wpseo_locale', 'override_og_locale');
function override_og_locale($locale)
{
    return "en_GB";
}

?>