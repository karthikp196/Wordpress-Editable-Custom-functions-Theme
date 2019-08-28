<?php 
/**
* Customizer additions.
*/
require get_template_directory() . '/inc/customizer.php';


function siam_scripts() {
	 
	/**
	 * Load the stylesheets.
	 */
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-style',get_template_directory_uri().'/css/bootstrap.min.css','all' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', 'all' );
	wp_enqueue_style( 'lineicons',  get_template_directory_uri() . '/css/LineIcons.css', 'all');
	wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/css/owl.carousel.css', 'all' );
    wp_enqueue_style( 'owltheme',  get_template_directory_uri() . '/css/owl.theme.css' , 'all');
    wp_enqueue_style( 'magnific',  get_template_directory_uri() . '/css/magnific-popup.css', 'all' );
    wp_enqueue_style( 'nivo',  get_template_directory_uri() . '/css/nivo-lightbox.css', 'all' );
    wp_enqueue_style( 'main',  get_template_directory_uri() . '/css/main.css' , 'all');
    wp_enqueue_style( 'responsive',  get_template_directory_uri() . '/css/responsive.css',  'all' );
    wp_enqueue_style( 'style',  get_template_directory_uri() . '/style.css', 'all' );


	/**
	 * Register scripts.
	 */
	wp_register_script( 'jquery-min',get_template_directory_uri() . '/js/jquery-min.js', array(), false, true );
	wp_register_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array(), false, true );
 	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true );
    wp_register_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array(), false, true );
    wp_register_script( 'nav-js',get_template_directory_uri() . '/js/jquery.nav.js', array(), false, true );
    wp_register_script( 'scroll',get_template_directory_uri() . '/js/scrolling-nav.js', array(), false, true );
    wp_register_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array(), false, true );
    wp_register_script( 'nivo', get_template_directory_uri() . '/js/nivo-lightbox.js', array(), false, true );
    wp_register_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), false, true );
    wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array(), false, true );

	/**
	 * Load the custom scripts.
	 */
	wp_enqueue_script( 'jquery-min' );
	wp_enqueue_script( 'popper' );
	wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'owl-carousel' );
    wp_enqueue_script( 'nav-js' );
    wp_enqueue_script( 'scroll' );
    wp_enqueue_script( 'easing' );
    wp_enqueue_script( 'nivo' );
    wp_enqueue_script( 'magnific-popup' );
    wp_enqueue_script( 'main' );

}

add_action( 'wp_enqueue_scripts', 'siam_scripts' );

//adding theme supports
function theme_support() {


    register_nav_menus(array(
    'primary'=> __('main_menu'),
	'footer-1'=> __('footer-1'),
	'footer-2'=> __('footer-2'),
	'footer-3'=> __('footer-3'),
    ));

    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme','theme_support');

add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );


add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );

add_theme_support('menus');


//function for customizable service section in theme customization section



//custom widgets



?>