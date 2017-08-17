<?php
/**
 * The header for our theme.
 *
 * @package Inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
			<div class="top-menu-container">

				<div class="site-branding">
					<h1 class="site-title screen-reader-text"></h1>									
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="nav-logo-container">
						<img src=<?php echo get_stylesheet_directory_uri();?>/images/logos/inhabitent-logo-tent.svg alt="Inhabitent logo"/></a>
					</div>
					<div class="nav-items-container">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</div>
				</nav><!-- #site-navigation -->

		<!--ADD SEARCH FORM!!!-->

			<!---<i class="fa fa-search"></i>-->

				</div><!--front-menu-container-->
			</header><!-- #masthead -->

			<div id="content" class="site-content">

<!--
header container
	nav bar container
		logo container
			logo
		nav items container
			shop container
				a
			journal container
				a
			about container
				a
			find us container
				a
		searchbar container
			search-->

			