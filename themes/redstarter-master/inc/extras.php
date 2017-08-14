<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );
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

