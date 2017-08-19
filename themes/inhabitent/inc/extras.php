<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );
function inhabitent_logo(){
     echo '<style type="text/css">                                                                   
         h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/logos/inhabitent-logo-text-dark.svg) !important; 
         height: 53px !important; width: 300px !important; 
				 background-size:300px 53px !important;}                            
     </style>';
}
add_action( 'login_head', 'inhabitent_logo' );

//links login logo to homepage
function inhabitent_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_logo_url' );


function remove_menu_elements()
{
	remove_submenu_page( 'themes.php', 'theme-editor.php' );
	remove_submenu_page( 'plugins.php','plugin-editor.php' );
}
add_action('admin_init', 'remove_menu_elements', 102);

// //customize the title attribute for the login logo link
//THIS BREAKS MY SITE! -->@return string
// function inhabitent_login_title() {
// 	return 'Inhabitent';
// }
// add_filter( 'login_headertitle', 'inhabitent_login_title' );

/**
 * Make hero image customizable through CFS field or featured image.
 */
function inhabitent_dynamic_css() {
    if ( ! is_page_template( 'page-templates/about.php' ) ) {
        return;
    }
    
    $image = CFS()->get( 'about_header_image' );
    if ( ! $image ) {
        return;
    }
    $hero_css = ".page-template-about .entry-header {
        background:
            linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
            url({$image}) no-repeat center bottom;
        background-size: cover, cover;
    }";
    wp_add_inline_style( 'tent-style', $hero_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_dynamic_css' );

//changing the name of products archive to shop stuff
function inhabitent_archive_title( $title ) {
    if ( is_post_type_archive('product') ) {
        $title = 'Shop Stuff';
    } elseif ( is_tax('product-type') ) {
        $title = single_term_title( '', false );
    }
    return $title;
}
 
add_filter( 'get_the_archive_title', 'inhabitent_archive_title' );

// function get_search_form( $echo = true ) {
    
//     add_action( 'pre_get_search_form' );
 