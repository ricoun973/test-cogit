<?php

/* Options */


$clientsGroupList = array();
if( taxonomy_exists('tm_client_group') ){
	$clientsGroupList_data = get_terms( 'tm_client_group', array( 'hide_empty' => false ) );
	$clientsGroupList      = array();
	foreach($clientsGroupList_data as $cat){
		$clientsGroupList[ esc_html($cat->name) . ' (' . esc_html($cat->count) . ')' ] = esc_html($cat->slug);
	}
}


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

/**
 * Box Design options
 */
$boxParams = tm_box_params();


$allParams = array_merge(
	$heading_element,
	array(
		array(
			"type"        => "checkbox",
			"heading"     => esc_html__("From Group", "fixology"),
			"param_name"  => "category",
			"description" => esc_html__("Select group so it will show client logo from selected group only.", "fixology"),
			"value"       => $clientsGroupList,
			"std"         => "",
		),
		array(
			"type"        => "dropdown",
			"heading"     => esc_html__("Show", "fixology"),
			"param_name"  => "show",
			"description" => esc_html__("Total Clients Logos you want to show.", "fixology"),
			"value"       => array(
				esc_html__("All", "fixology") => "-1",
				esc_html__("1", "fixology")  => "1",
				esc_html__("2", "fixology") => "2",
				esc_html__("3", "fixology") => "3",
				esc_html__("4", "fixology") => "4",
				esc_html__("5", "fixology") => "5",
				esc_html__("6", "fixology") => "6",
				esc_html__("7", "fixology") => "7",
				esc_html__("8", "fixology") => "8",
				esc_html__("9", "fixology") => "9",
				esc_html__("10", "fixology") => "10",
				esc_html__("11", "fixology") => "11",
				esc_html__("12", "fixology") => "12",
				esc_html__("13", "fixology") => "13",
				esc_html__("14", "fixology") => "14",
				esc_html__("15", "fixology") => "15",
				esc_html__("16", "fixology") => "16",
				esc_html__("17", "fixology") => "17",
				esc_html__("18", "fixology") => "18",
				esc_html__("19", "fixology") => "19",
				esc_html__("20", "fixology") => "20",
			),
			"std"  => "10",
		),
		array(
			"type"        => "dropdown",
			"holder"      => "div",
			"class"       => "",
			"heading"     => esc_html__("Client Logo Design",'fixology'),
			"description" => esc_html__("Select Client logo design.",'fixology'),
			"param_name"  => "view",
			"value"       => thememount_global_client_template_list( true ),
			"std"         => "logo-only",
		),
		array(
			"type"        => "dropdown",
			"holder"      => "div",
			"class"       => "",
			"heading"     => esc_html__("Show Tooltip on Logo?",'fixology'),
			"description" => esc_html__("Select YES to show Tooltip on the logo.",'fixology'),
			"param_name"  => "show_tooltip",
			"value"       => array(
				esc_html__("Yes", "fixology") => "yes",
				esc_html__("No", "fixology")  => "no",
			),
			"std"         => "yes",
			'edit_field_class' => 'vc_col-sm-6 vc_column',
		),
		array(
			"type"        => "dropdown",
			"holder"      => "div",
			"class"       => "",
			"heading"     => esc_html__("Add link to all logos?",'fixology'),
			"description" => esc_html__("Select YES to add link to all logos. Please note that link should be added to each client logo. If no link found than the logo will appear without link.",'fixology'),
			"param_name"  => "add_link",
			"value"       => array(
				esc_html__("Yes", "fixology") => "yes",
				esc_html__("No", "fixology")  => "no",
			),
			"std"         => "yes",
			'edit_field_class' => 'vc_col-sm-6 vc_column',
		),
		
		
		
	),
	$boxParams,
	array(
		tm_vc_ele_css_editor_option(),
	)
);


$params = $allParams;



// Changing default values
$i = 0;
foreach( $params as $param ){
	$param_name = (isset($param['param_name'])) ? $param['param_name'] : '' ;
	if( $param_name == 'h2' ){
		$params[$i]['std'] = 'Our Clients';
	
	} else if( $param_name == 'column' ){
		$params[$i]['std'] = 'five';
		
	} else if( $param_name == 'boxview' ){
		$params[$i]['std'] = 'carousel';
		
	} else if( $param_name == 'content' ){
		$params[$i]['std'] = '';
		
	} else if( $param_name == 'carousel_loop' ){
		$params[$i]['std'] = '1';
		
	} else if( $param_name == 'carousel_dots' ){
		$params[$i]['std'] = 'true';
		
	} else if( $param_name == 'carousel_nav' ){
		$params[$i]['std'] = '0';
		
	} else if( $param_name == 'h2_use_theme_fonts' ){
		$params[$i]['std'] = 'yes';
		
	} else if( $param_name == 'h4_use_theme_fonts' ){
		$params[$i]['std'] = 'yes';
			
	} else if( $param_name == 'txt_align' ){
		$params[$i]['std'] = 'center';
		
	}
	
	$i++;
}


global $tm_sc_params_clients;
$tm_sc_params_clients = $params;


vc_map( array(
	"name"     => esc_html__("ThemeMount Client Logo Box", "fixology"),
	"base"     => "tm-clientsbox",
	"icon"     => "icon-thememount-vc",
	'category' => esc_html__( 'ThemeMount Special Elements', 'fixology' ),
	"params"   => $params,
) );