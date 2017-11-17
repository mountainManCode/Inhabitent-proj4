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

	//Inhabitent Log-in logo
function inhabitent_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-text-dark.svg);
		height:57px;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
        	padding-bottom: 10px;
        }
    </style>
<?php }
add_action( 'login_head', 'inhabitent_login_logo' );
	
	//Inhabitent logo url
function inhabitent_logo_url() {
	return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_logo_url' );

function inhabitent_login_title() {
	return 'Inhabitent';
}
add_filter( 'login_headertitle', 'inhabitent_login_title' );

/* 
*Make hero image customizable through CFS field or featured image
*/
/* Front page hero image */

// function inhabitent_front_page_dynamic_css() {
// 	if ( ! is_page_template( 'front-page.php' )) {
// 		return;
// 	}

// 	$image = CFS()->get( 'front_hero_banner_image' );

// 	if ( ! $image ) {
// 		return;
// 	}

// 	$hero_banner_css = ".page-template-about .custom-front-hero {
// 		background:
// 			linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
// 			url({$image}) no-repeat center bottom;
// 		background-size: cover, cover;
// 	}";

// 	wp_add_inline_style( 'tent-style', $hero_banner_css );
// }
// add_action( 'wp_enqueue_scripts', 'inhabitent_front_page_dynamic_css' );

/* About page hero image */

function inhabitent_about_dynamic_css() {
	if ( ! is_page_template( 'page-templates/about.php' )) {
		return;
	}

	$image = CFS()->get( 'about_header_image' );

	if ( ! $image ) {
		return;
	}

	$hero_css = ".page-template-about .custom-hero {
		background:
			linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
			url({$image}) no-repeat center bottom;
		background-size: cover, cover;
	}";

	wp_add_inline_style( 'tent-style', $hero_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_about_dynamic_css' );

