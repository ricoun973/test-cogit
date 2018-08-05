<?php

/* For security */
if ( !defined( 'ABSPATH' ) ) {
	die( 'No direct access allowed' );
}




/**
 * Login page CSS script
 */
if( !function_exists('thememount_login_stylesheet') ){
function thememount_login_stylesheet() {
    wp_enqueue_style( 'fixology-login-style', get_template_directory_uri() . '/style-login.min.css' );
}
}
add_action( 'login_enqueue_scripts', 'thememount_login_stylesheet' );


/*
 *  Check if MIN css or not
 */
if( !function_exists('thememount_min_css') ){
function thememount_min_css(){
	global $fixology_theme_options;
	
	// Checking if MIN enabled
	if(!is_admin()) {
		if( isset($fixology_theme_options['minify']) && $fixology_theme_options['minify']==true ){
			define('TM_MIN', '.min');
		} else {
			define('TM_MIN', '');
		}
	}
}
}
add_action( 'init', 'thememount_min_css' );



/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Fixology 1.0
 *
 * @return void
 */
if( !function_exists('fixology_scripts_styles') ){
function fixology_scripts_styles() {
	global $fixology_theme_options;
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	$thread_comments_option = get_option( 'thread_comments' );
	
	if ( is_singular() && comments_open() && $thread_comments_option ){
		wp_enqueue_script( 'comment-reply' );
	}
	
	// Animsition - Add page translation effect
	if( isset($fixology_theme_options['pagetranslation']) && $fixology_theme_options['pagetranslation']!='no'){
		wp_register_script( 'animsition', get_template_directory_uri() . '/assets/animsition/js/jquery.animsition.min.js', array( 'jquery' ), '', true );
		wp_register_style( 'animsition', get_template_directory_uri() . '/assets/animsition/css/animsition.min.css' );
	}
	
	// Themify and Linecons icon library register
	wp_register_style( 'themify', get_template_directory_uri() . '/assets/themify-icons/themify-icons.css' );
	wp_register_style( 'vc_linecons', get_template_directory_uri() . '/assets/vc-linecons/vc_linecons_icons.min.css' );
	
	
	// Perfect Scrollbar
	wp_enqueue_script( 'perfect-scrollbar', get_template_directory_uri() . '/assets/perfect-scrollbar/perfect-scrollbar.jquery.min.js', array( 'jquery' ), '', true );
	wp_enqueue_style( 'perfect-scrollbar', get_template_directory_uri() . '/assets/perfect-scrollbar/perfect-scrollbar.min.css' );
	
	
	// hower.css : Hover effect (we are using min version)
	wp_register_style( 'hover', get_template_directory_uri() . '/assets/hover/hover-min.css' );
	
	// Chris Bracco Tooltip
	wp_enqueue_style( 'chrisbracco-tooltip', get_template_directory_uri() . '/assets/chrisbracco-tooltip/chrisbracco-tooltip.min.css' );
	
	// multi-columns-row
	wp_enqueue_style( 'multi-columns-row', get_template_directory_uri() . '/css/multi-columns-row.css' );
	
	// Select2
	wp_enqueue_script( 'tm-select2', get_template_directory_uri() . '/assets/select2/select2.min.js', array( 'jquery' ), '', true );
	wp_enqueue_style( 'tm-select2', get_template_directory_uri() . '/assets/select2/select2.min.css' );
	
	// IsoTope
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/isotope/isotope.pkgd.min.js', array( 'jquery' ), '', true );
	
	// jquery-mousewheel
	wp_enqueue_script( 'jquery-mousewheel', get_template_directory_uri() . '/assets/jquery-mousewheel/jquery.mousewheel.min.js', array( 'jquery' ), '', true );
	
	// Flex Slider
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/assets/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true );
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/assets/flexslider/flexslider.css' );
	
	
	// Sticky
	if( !empty($fixology_theme_options['sticky_header']) && $fixology_theme_options['sticky_header']=='y' ){
		wp_enqueue_script( 'sticky-kit', get_template_directory_uri() . '/assets/sticky-kit/jquery.sticky-kit.min.js', array( 'jquery' ) , '', true );
	}
	
	// TM Social Icons CSS Library
	wp_enqueue_style( 'tm-fixology-icons', get_template_directory_uri() . '/assets/tm-fixology-icons/css/tm-fixology-icons.css' );
	
	// animate.css
	if ( !wp_style_is( 'animate-css', 'registered' ) ) { // If library is not registered
		wp_register_style( 'animate-css', get_template_directory_uri() . '/assets/animate/animate.min.css' );
	}
	wp_register_script( 'nivo-slider', get_template_directory_uri() . '/assets/nivo-slider/jquery.nivo.slider.pack.js', array( 'jquery' ), '', true );
	wp_register_style( 'nivo-slider-css', get_template_directory_uri() . '/assets/nivo-slider/nivo-slider.css' );
	wp_register_style( 'nivo-slider-theme', get_template_directory_uri() . '/assets/nivo-slider/themes/default/default.css' );
	
	// Numinate plugin
	if ( !wp_script_is( 'waypoints', 'registered' ) ) { // If library is not registered
		wp_register_script( 'waypoints', get_template_directory_uri() . '/assets/waypoints/jquery.waypoints.min.js', array( 'jquery' ), '', true );
	}
	wp_register_script( 'numinate', get_template_directory_uri() . '/assets/numinate/numinate.min.js', array( 'jquery' ), '', true );
	
	// Slick library
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/slick/slick.min.js', array('jquery'), '', true );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css', array('slick') );
	
	// PrettyPhoto
	if ( !wp_script_is( 'prettyphoto', 'registered' ) ) { // If library is not registered
		$prettyphoto_js = get_template_directory_uri() . '/assets/prettyphoto/js/jquery.prettyPhoto.js';
		if( file_exists( WP_PLUGIN_URL . '/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.js') ){
			$prettyphoto_js = WP_PLUGIN_URL . '/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.js';
		}
		wp_register_script( 'prettyphoto', $prettyphoto_js, array('jquery') , '', true);
	}
	if ( !wp_style_is( 'prettyphoto', 'registered' ) ) { // If library is not registered
		$prettyphoto_css = get_template_directory_uri() . '/assets/prettyphoto/css/prettyPhoto.css';
		if( file_exists( WP_PLUGIN_URL . '/js_composer/assets/lib/prettyphoto/css/prettyPhoto.css') ){
			$prettyphoto_css = WP_PLUGIN_URL . '/js_composer/assets/lib/prettyphoto/css/prettyPhoto.css';
		}
		wp_register_style( 'prettyphoto', $prettyphoto_css );
	}
	
	// CSSgram
	wp_register_style( 'cssgram', get_template_directory_uri() . '/assets/cssgram/cssgram.min.css' );
	
	// Twemoji Awesome
	wp_register_style( 'twemojiawesome', get_template_directory_uri() . '/assets/twemoji-awesome/twemoji-awesome.css' );
	
	// Loading prettyPhoto by default
	wp_enqueue_script( 'prettyphoto' );
	wp_enqueue_style( 'prettyphoto' );
	
}
}
add_action( 'wp_enqueue_scripts', 'fixology_scripts_styles', 10 );




if( !function_exists('fixology_scripts_styles_14') ){
function fixology_scripts_styles_14() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'multi-columns-row', get_template_directory_uri() . '/css/multi-columns-row.min.css', array('bootstrap') );
	wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array('bootstrap') );
	
	if ( file_exists( ABSPATH . 'wp-content/plugins/js_composer/assets/css/js_composer_tta.min.css') ) {
		wp_enqueue_style( 'vc_tta_style',  plugins_url() . '/js_composer/assets/css/js_composer_tta.min.css' );
	}
	
	wp_enqueue_style( 'fixology-base-style', get_template_directory_uri() . '/css/base'.TM_MIN.'.css', array('bootstrap','bootstrap-theme') );
}
}
add_action( 'wp_enqueue_scripts', 'fixology_scripts_styles_14', 14 );







if( !function_exists('fixology_scripts_styles_15') ){
function fixology_scripts_styles_15() {
	global $fixology_theme_options;
	$min = TM_MIN;
	if( is_child_theme() ){
		$min = '';
	}
	if( defined( 'WPB_VC_VERSION' ) ){
		wp_enqueue_style( 'fixology-main-style', get_template_directory_uri() . '/css/main'.TM_MIN.'.css' , array('js_composer_front') );
		wp_register_style( 'fixology-dark', get_template_directory_uri() . '/css/dark'.TM_MIN.'.css' , array('js_composer_front', 'fixology-main-style') );  // Dark
	} else {
		wp_enqueue_style( 'fixology-main-style', get_template_directory_uri() . '/css/main'.TM_MIN.'.css' );
		wp_register_style( 'fixology-dark', get_template_directory_uri() . '/css/dark'.TM_MIN.'.css' , array( 'fixology-main-style') );  // Dark
	}
	
	// Service box animation css
	wp_enqueue_style( 'fixology-servicebox-animation', get_template_directory_uri() . '/css/servicebox-animation'.TM_MIN.'.css', array( 'fixology-main-style') );
	
	// Load dark.css if dark layout
	if( isset($fixology_theme_options['inner_background']['background-color']) && trim($fixology_theme_options['inner_background']['background-color'])!='' && tm_check_dark_color($fixology_theme_options['inner_background']['background-color']) ){
		wp_enqueue_style('fixology-dark');
	}
}
}
add_action( 'wp_enqueue_scripts', 'fixology_scripts_styles_15', 15 );




if( !function_exists('fixology_scripts_styles_17') ){
function fixology_scripts_styles_17() {
	// Responsive
	global $fixology_theme_options;
	
	// Responsive CSS
	wp_enqueue_style( 'fixology-responsive-style', get_template_directory_uri() . '/css/responsive'.TM_MIN.'.css' );
	
	// Loads JavaScript file with functionality specific to Fixology.
	if ( wp_script_is( 'wpb_composer_front_js', 'registered' ) ) {
		wp_enqueue_script( 'fixology-script', get_template_directory_uri() . '/js/functions'.TM_MIN.'.js', array( 'jquery', 'wpb_composer_front_js' ), '1.0', true );
	} else {
		wp_enqueue_script( 'fixology-script', get_template_directory_uri() . '/js/functions'.TM_MIN.'.js', array( 'jquery' ), '1.0', true );
	}
	
	wp_enqueue_style( 'fixology-last-checkpoint', get_template_directory_uri() . '/css/fixology-last-checkpoint.min.css' );
	
	
}
}
add_action( 'wp_enqueue_scripts', 'fixology_scripts_styles_17', 17 );


