<?php

/* Options */



$allParams1 =  array(
	array(
		'type'			=> 'textfield',
		'holder'		=> 'div',
		'class'			=> '',
		'heading'		=> esc_html__('Header (optional)', 'fixology'),
		'param_name'	=> 'title',
		'std'			=> esc_html__('Title Text', 'fixology'),
		'description'	=> esc_html__('Enter text for the title. Leave blank if no title is needed.', 'fixology')
	),
	array(
		"type"			=> "dropdown",
		"holder"		=> "div",
		"class"			=> "",
		"heading"		=> esc_html__("Design", 'fixology'),
		"param_name"	=> "view",
		"description"	=> esc_html__('Select box design.' , 'fixology'),
		'value' => array(
			esc_html__( 'Top Center icon', 'fixology' )           => 'topicon',
			esc_html__( 'Left icon', 'fixology' )                 => 'lefticon',
			esc_html__( 'Right icon', 'fixology' )                => 'righticon',
			esc_html__( 'Center icon', 'fixology' )				=> 'centericon',
			esc_html__( 'Left icon with separator', 'fixology' )  => 'lefticon-border',
			esc_html__( 'Right icon with separator', 'fixology' ) => 'righticon-border',
		),
		'std'           => 'topicon',
	),
	array(
		'type'       => 'checkbox',
		'heading'    => esc_html__( 'Add icon?', 'fixology' ),
		'param_name' => 'add_icon',
		'std'        => 'true',
		'edit_field_class'	=> 'vc_col-sm-6 vc_column',
	),
	array(
		'type'       => 'checkbox',
		'heading'    => esc_html__( 'Add border?', 'fixology' ),
		'param_name' => 'add_border',
		'std'        => 'true',
		'edit_field_class'	=> 'vc_col-sm-6 vc_column',
	),
	

	
);


$icons_params = vc_map_integrate_shortcode( 'tm-icon', 'i_', '', array(
	'include_only_regex' => '/^(type|icon_\w*)/',
	// we need only type, icon_fontawesome, icon_blabla..., NOT color and etc
), array(
	'element' => 'add_icon',
	'value' => 'true',
) );

$icons_params_new = array();

/* Adding class for two column */
foreach( $icons_params as $param ){
	$param['edit_field_class'] = 'vc_col-sm-6 vc_column';
	$icons_params_new[] = $param;
}



$allParams2 = array(
			array(
				'type'				=> 'textfield',
				'holder'			=> 'div',
				'class'				=> '',
				'heading'			=> esc_html__('Rotating Number', 'fixology'),
				'param_name'		=> 'digit',
				'std'				=> '100',
				'description'		=> esc_html__('Enter rotating number digit here.', 'fixology'),
			),
			array(
				'type'				=> 'textfield',
				'holder'			=> 'div',
				'heading'			=> esc_html__('Text Before Number', 'fixology'),
				'param_name'		=> 'before',
				'description'		=> esc_html__('Enter text which appear just before the rotating numbers.', 'fixology'),
				'edit_field_class'	=> 'vc_col-sm-6 vc_column',
			),
			array(
				"type"			=> "dropdown",
				"holder"		=> "div",
				"heading"		=> esc_html__("Text Style",'fixology'),
				"param_name"	=> "beforetextstyle",
				"description"	=> esc_html__('Select text style for the text.', 'fixology') . '<br>' . esc_html__('Superscript text appears half a character above the normal line, and is rendered in a smaller font.','fixology') . '<br>' . esc_html__('Subscript text appears half a character below the normal line, and is sometimes rendered in a smaller font.','fixology'),
				'value' => array(
					esc_html__( 'Superscript', 'fixology' ) => 'sup',
					esc_html__( 'Subscript', 'fixology' )   => 'sub',
					esc_html__( 'Normal', 'fixology' )      => 'span',
				),
				'std' => 'sup',
				'edit_field_class'	=> 'vc_col-sm-6 vc_column',
			),
			array(
				'type'				=> 'textfield',
				'holder'			=> 'div',
				'class'				=> '',
				'heading'			=> esc_html__('Text After Number', 'fixology'),
				'param_name'		=> 'after',
				'description'		=> esc_html__('Enter text which appear just after the rotating numbers.', 'fixology'),
				'edit_field_class'	=> 'vc_col-sm-6 vc_column',
			),
			array(
				"type"			=> "dropdown",
				"holder"		=> "div",
				"class"			=> "",
				"heading"		=> esc_html__("Text Style",'fixology'),
				"param_name"	=> "aftertextstyle",
				"description"	=> esc_html__('Select text style for the text.', 'fixology') . '<br>' . esc_html__('Superscript text appears half a character above the normal line, and is rendered in a smaller font.','fixology') . '<br>' . esc_html__('Subscript text appears half a character below the normal line, and is sometimes rendered in a smaller font.','fixology'),
				'value' => array(
					esc_html__( 'Superscript', 'fixology' ) => 'sup',
					esc_html__( 'Subscript', 'fixology' )   => 'sub',
					esc_html__( 'Normal', 'fixology' )      => 'span',
				),
				'std' => 'sub',
				'edit_field_class'	=> 'vc_col-sm-6 vc_column',
			),
			array(
				'type'			=> 'textfield',
				'holder'		=> 'div',
				'class'			=> '',
				'heading'		=> esc_html__('Rotating digit Interval', 'fixology'),
				'param_name'	=> 'interval',
				'std'			=> '5',
				'description'	=> esc_html__('Enter rotating interval number here.', 'fixology')
			)
);



// merging all options
$params = array_merge( $allParams1, $icons_params_new, $allParams2 );

// merging extra options like css animation, css options etc
$params = array_merge(
	$params,
	array( vc_map_add_css_animation() ),
	array( tm_vc_ele_extra_class_option() ),
	array( tm_vc_ele_css_editor_option() )
);




global $tm_sc_params_facts_in_digits;
$tm_sc_params_facts_in_digits = $params;






vc_map( array(
	'name'		=> esc_html__( 'ThemeMount Facts in digits', 'fixology' ),
	'base'		=> 'tm-facts-in-digits',
	'class'		=> '',
	'icon'		=> 'icon-thememount-vc',
	'category'	=> esc_html__( 'ThemeMount Special Elements', 'fixology' ),
	'params'	=> $params
) );

