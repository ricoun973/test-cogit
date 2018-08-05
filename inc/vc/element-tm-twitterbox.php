<?php

/* Options */



$allParams = array(
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class"			=> "",
			"heading"		=> esc_html__("Twitter handle (Twitter Username)",'fixology'),
			"param_name"	=> "username",
			"description"	=> esc_html__('Twitter user name. Example "envato".','fixology')
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class"			=> "",
			"heading"		=> esc_html__('"Follow us" text after big icon','fixology'),
			"param_name"	=> "followustext",
			"description"	=> esc_html__('(optional) Follow us text after the big Twitter icon so user can click on it and go to Twitter profile page.','fixology')
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class"			=> "",
			"heading"		=> esc_html__("Show Tweets",'fixology'),
			"param_name"	=> "show",
			"description"	=> esc_html__('How many Tweets you like to show.','fixology'),
			'value' => array(
				esc_html__( '1', 'fixology' ) => '1',
				esc_html__( '2', 'fixology' ) => '2',
				esc_html__( '3', 'fixology' ) => '3',
				esc_html__( '4', 'fixology' ) => '4',
				esc_html__( '5', 'fixology' ) => '5',
				esc_html__( '6', 'fixology' ) => '6',
				esc_html__( '7', 'fixology' ) => '7',
				esc_html__( '8', 'fixology' ) => '8',
				esc_html__( '9', 'fixology' ) => '9',
				esc_html__( '10', 'fixology' ) => '10',
			),
			'std' => '3',
		),
		
	);


$boxParams  = tm_box_params();
$css_editor = array( tm_vc_ele_css_editor_option() );

$params = array_merge( $allParams, $boxParams, $css_editor );



// Changing default values
$i = 0;
foreach( $params as $param ){
	
	$param_name = (isset($param['param_name'])) ? $param['param_name'] : '' ;
	
	if( $param_name == 'column' ){
		$params[$i]['std'] = 'one';
	
	} else if( $param_name == 'view' ){
		$params[$i]['std'] = 'carousel';
		
	} else if( $param_name == 'carousel_dots' ){
		$params[$i]['std'] = 'true';
		
	} else if( $param_name == 'carousel_nav' ){ // Removing "About Carousel" option as it's not used here.
		unset( $params[$i]['value']["Above Carousel"] );
		
	}
	
	
	
	
	$i++;
}



global $tm_sc_params_twitterbox;
$tm_sc_params_twitterbox = $params;




vc_map( array(
	"name"        => esc_html__("ThemeMount Twitter Box",'fixology'),
	"base"        => "tm-twitterbox",
	"class"       => "",
	'category' => esc_html__( 'ThemeMount Special Elements', 'fixology' ),
	"icon"        => "icon-thememount-vc",
	"params"      => $params,
) );