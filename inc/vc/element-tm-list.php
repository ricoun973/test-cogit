<?php

/* Options */

$allParams = array(
	array(
		'type'       => 'dropdown',
		'heading'    => esc_html__( 'List Type', 'fixology' ),
		'param_name' => 'type',
		'value'      => array(
			esc_html__( 'None', 'fixology' )                    => 'none',
			esc_html__( 'Icon', 'fixology' )                    => 'icon',
			esc_html__( 'Disc', 'fixology' )                    => 'disc',
			esc_html__( 'Circle', 'fixology' )                  => 'circle',
			esc_html__( 'Square', 'fixology' )                  => 'square',
			esc_html__( 'Decimal (1, 2, 3, 4)', 'fixology' )    => 'decimal',
			esc_html__( 'Alphabetic (A, B, C, D)', 'fixology' ) => 'upper-alpha',
			esc_html__( 'Roman (I, II, III, IV)', 'fixology' )  => 'roman',
		),
		'std'         => 'icon',
		'description' => esc_html__( 'Select list style.', 'fixology' ),
	),

	array(
		'type'       => 'dropdown',
		'heading'    => esc_html__( 'List icon color', 'fixology' ),
		'param_name' => 'icon_color',
		'value'      => array( esc_html__( 'Default (same as text color)', 'fixology' ) => '' ) + tm_getVcShared( 'colors' ),
		'std'         => 'skincolor',
		'description' => esc_html__( 'Select icon color.', 'fixology' ),
		'param_holder_class' => 'tm_vc_colored-dropdown',
		'edit_field_class'   => 'vc_col-sm-6 vc_column',
	),
	array(
		"type"        => "dropdown",
		"heading"     => esc_html__("Text Color", "fixology"),
		"description" => esc_html__("Select text color.", "fixology"),
		"param_name"  => "tm_textcolor",
		'value'       => array( esc_html__( 'Default', 'fixology' ) => '' ) + tm_getVcShared( 'colors' ),
		'param_holder_class' => 'tm_vc_colored-dropdown',
		'edit_field_class'   => 'vc_col-sm-6 vc_column',
	),
	
	
	array(
		'type'       => 'dropdown',
		'heading'    => esc_html__( 'List Font size', 'fixology' ),
		'param_name' => 'textsize',
		'value'      => array(
			esc_html__( 'Default', 'fixology' )     => '',
			esc_html__( 'Small', 'fixology' )       => 'small',
			esc_html__( 'Medium', 'fixology' )      => 'medium',
			esc_html__( 'Large', 'fixology' )       => 'large',
			esc_html__( 'Extra Large', 'fixology' ) => 'xlarge',
		),
		'std'         => '',
		'description' => esc_html__( 'Select list font size. This will also apply to icon too', 'fixology' ),
	),
);

$icon_options = vc_map_integrate_shortcode(
	'tm-icon',
	'icon_',
	'',
	array(
		'include_only' => array(
			'type',
			'icon_fontawesome',
			'icon_linecons',
			'icon_themify',
		),
	),
	array(
		'element' => 'type',
		'value'   => 'icon',
	)
);

// Setting default icon for Font Awesome icon
foreach( $icon_options as $index=>$icon_option ){
	if( isset($icon_option['param_name']) && $icon_option['param_name']=='icon_icon_fontawesome' ){
		$icon_options[$index]['value'] = 'fa fa-angle-right';
	}
}




// each line
$lines = array();
$total = 20;
for( $x=1; $x <= $total ; $x++ ){
	$lines[] = array(
		'type'        => 'textarea_raw_html',
		'heading'     => sprintf( esc_html__( 'List Line %s','fixology' ), $x ),
		'param_name'  => 'line'.$x,
		'description' => esc_html__( 'Enter text for the list line. Some HTML tags are allowed.', 'fixology' ),
		'std'         => '',
		'value'       => '',
		'param_holder_class' => 'tm-simplify-textarea',
	);
}

// Merge all parameters
$params = array_merge( $allParams, $icon_options, $lines, array( vc_map_add_css_animation() ), array( tm_vc_ele_extra_class_option() ), array( tm_vc_ele_css_editor_option() ) );



// Changing default values
$i = 0;
foreach( $params as $param ){
	
	$param_name = (isset($param['param_name'])) ? $param['param_name'] : '' ;
	
	if( $param_name == 'icon_type' ){
		$params[$i]['std']   = 'fontawesome';
	
	} else if( $param_name == 'icon_icon_fontawesome' ){
		$params[$i]['value'] = 'fa fa-caret-right';
		$params[$i]['std']   = 'fa fa-caret-right';
		
	} else if( $param_name == 'icon_icon_linecons' ){
		$params[$i]['value'] = 'vc_li vc_li-location';
		$params[$i]['std']   = 'vc_li vc_li-location';
	
	} else if( $param_name == 'icon_icon_themify' ){
		$params[$i]['value'] = 'themifyicon ti-angle-double-right';
		$params[$i]['std']   = 'themifyicon ti-angle-double-right';

	}
	
	$i++;
}



global $tm_sc_params_list;
$tm_sc_params_list = $params;




vc_map( array(
	'name'		=> esc_html__( 'ThemeMount List', 'fixology' ),
	'base'		=> 'tm-list',
	'class'		=> '',
	'icon'		=> 'icon-thememount-vc',
	'category'	=> esc_html__( 'ThemeMount Special Elements', 'fixology' ),
	'params'	=> $params
) );