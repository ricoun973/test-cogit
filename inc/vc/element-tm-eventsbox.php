<?php

/* Options */

$allParams = array(
	array(
		"type"        => "dropdown",
		"holder"      => "div",
		"class"       => "",
		"heading"     => esc_html__("Show Pagination",'fixology'),
		"description" => esc_html__("Show pagination links below Event boxes.",'fixology'),
		"param_name"  => "pagination",
		"value"       => array(
			esc_html__('No','fixology')  => 'no',
			esc_html__('Yes','fixology') => 'yes',
		),
		"std"         => "no",
		'dependency'  => array(
			'element'    => 'sortable',
			'value_not_equal_to' => array( 'yes' ),
		),
	),
	array(
		"type"        => "dropdown",
		"holder"      => "div",
		"class"       => "",
		"heading"     => esc_html__("Show Events Item",'fixology'),
		"description" => esc_html__("How many events you want to show.",'fixology'),
		"param_name"  => "show",
		"value"       => array(
			esc_html__('All','fixology') => '-1',
			esc_html__('1','fixology')  => '1',
			esc_html__('2','fixology') => '2',
			esc_html__('3','fixology')=>'3',
			esc_html__('4','fixology')=>'4',
			esc_html__('5','fixology')=>'5',
			esc_html__('6','fixology')=>'6',
			esc_html__('7','fixology')=>'7',
			esc_html__('8','fixology')=>'8',
			esc_html__('9','fixology')=>'9',
			esc_html__('10','fixology')=>'10',
			esc_html__('11','fixology')=>'11',
			esc_html__('12','fixology')=>'12',
			esc_html__('13','fixology')=>'13',
			esc_html__('14','fixology')=>'14',
			esc_html__('15','fixology')=>'15',
			esc_html__('16','fixology')=>'16',
			esc_html__('17','fixology')=>'17',
			esc_html__('18','fixology')=>'18',
			esc_html__('19','fixology')=>'19',
			esc_html__('20','fixology')=>'20',
			esc_html__('21','fixology')=>'21',
			esc_html__('22','fixology')=>'22',
			esc_html__('23','fixology')=>'23',
			esc_html__('24','fixology')=>'24',
		),
		"std"  => "3",
	),
	array(
		"type"        => "dropdown",
		"heading"     => esc_html__("Box Style", "fixology"),
		"description" => esc_html__("Select box style.", "fixology"),
		"group"       => esc_html__( "Box Design", "fixology" ),
		"param_name"  => "view",
		"value"       => array(
			esc_html__("Default Style", "fixology")  => "top-image",
			esc_html__("Detailed Style", "fixology") => "top-image-details",
		),
		"std"         => "default",
	),
	array(
		"type"        => "dropdown",
		"heading"     => esc_html__("Box Spacing", "fixology"),
		"param_name"  => "box_spacing",
		"description" => esc_html__("Spacing between each box.", "fixology"),
		"value"       => array(
			esc_html__("Default", "fixology")                        => "",
			esc_html__("0 pixel spacing (joint boxes)", "fixology")  => "0px",
			esc_html__("5 pixel spacing", "fixology")                => "5px",
			esc_html__("10 pixel spacing", "fixology")               => "10px",
		),
		"std"  => "",
	),
	
);


/**
 * Heading Element
 */
$heading_element = vc_map_integrate_shortcode( 'tm-heading', '', '',
	array(
		'exclude' => array(
			'el_class',
			'css',
			'css_animation'
		),
	)
);

$boxParams = tm_box_params();
$params    = array_merge( $heading_element, $allParams, $boxParams );


// Changing default values
$i = 0;
foreach( $params as $param ){
	$param_name = (isset($param['param_name'])) ? $param['param_name'] : '' ;
	if( $param_name == 'h2' ){
		$params[$i]['std'] = 'Latest Events';
		
	} else if( $param_name == 'h2_use_theme_fonts' ){
		$params[$i]['std'] = 'yes';
		
	} else if( $param_name == 'h4_use_theme_fonts' ){
		$params[$i]['std'] = 'yes';
		
	}
	$i++;
}


global $tm_sc_params_eventsbox;
$tm_sc_params_eventsbox = $params;


vc_map( array(
	"name"     => esc_html__("ThemeMount Events Box", "fixology"),
	"base"     => "tm-eventsbox",
	"icon"     => "icon-thememount-vc",
	'category' => esc_html__( 'ThemeMount Special Elements', 'fixology' ),
	"params"   => $params
) );

