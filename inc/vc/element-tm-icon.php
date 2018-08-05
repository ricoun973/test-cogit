<?php

/* Options for ThemeMount Icon */


/*
 * Icon Element
 * @since 4.4
 */


/**
 *  Show selected icon library only
 */
global $fixology_theme_options;

// Temporary new list of icon libraries
$icon_library_array = array( // all icon library list array
	'themify'        => array( esc_html__( 'Themify icons', 'fixology' ),   'themifyicon ti-thumb-up'),
	'linecons'       => array( esc_html__( 'Linecons', 'fixology' ), 'vc_li vc_li-star'),
);


$icon_library = array();
if( isset($fixology_theme_options['icon_library']) && is_array($fixology_theme_options['icon_library']) && count($fixology_theme_options['icon_library'])>0 ){
	// if selected icon library
	foreach( $fixology_theme_options['icon_library'] as $i_library ){
		$icon_library[$i_library] = $icon_library_array[$i_library];
	}
}

$icon_element_array  = array();
$icon_dropdown_array = array( esc_html__( 'Font Awesome', 'fixology' )    => 'fontawesome' );

if( is_array($icon_library) && count($icon_library)>0 ){
foreach( $icon_library as $library_id=>$library ){
	
	$icon_dropdown_array[$library[0]] = $library_id;
	
	$icon_element_array[]  = array(
		'type'        => 'thememount_iconpicker',
		'heading'     => esc_html__( 'Icon', 'fixology' ),
		'param_name'  => 'icon_'.$library_id,
		'value'       => $library[1], // default value to backend editor admin_label
		'settings'    => array(
			'emptyIcon'    => false, // default true, display an "EMPTY" icon?
			'type'         => $library_id,
		),
		'dependency'  => array(
			'element'   => 'type',
			'value'     => $library_id,
		),
		'description' => esc_html__( 'Select icon from library.', 'fixology' ),
		'edit_field_class' => 'vc_col-sm-9 vc_column',
	);
	
	
}
}
/* Select icon library code end here */




// All icon related elements
$icon_elements = array_merge(
	array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Icon library', 'fixology' ),
			'value'       => $icon_dropdown_array,
			'std'         => '',
			'admin_label' => true,
			'param_name'  => 'type',
			'description' => esc_html__( 'Select icon library.', 'fixology' ),
			'edit_field_class' => 'vc_col-sm-3 vc_column',
		)
	),
	array(
		array(  // Font Awesome icons
			'type'       => 'thememount_iconpicker',
			'heading'    => esc_html__( 'Icon', 'fixology' ),
			'param_name' => 'icon_fontawesome',
			'value'      => 'fa fa-thumbs-o-up', // default value to backend editor admin_label
			'settings'   => array(
				'emptyIcon'    => false, // default true, display an "EMPTY" icon?
				'type'         => 'fontawesome',
			),
			'dependency' => array(
				'element'  => 'type',
				'value'    => 'fontawesome',
			),
			'description' => esc_html__( 'Select icon from library.', 'fixology' ),
			'edit_field_class' => 'vc_col-sm-9 vc_column',
		)
	),
	
	$icon_element_array
	
	
);


$allparams = array(
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Icon color', 'fixology' ),
		'param_name'  => 'color',
		'value'       => array_merge( array(
			esc_html__( 'Classic Grey', 'fixology' ) => 'bar_grey',
			esc_html__( 'Classic Blue', 'fixology' ) => 'bar_blue',
			esc_html__( 'Classic Turquoise', 'fixology' ) => 'bar_turquoise',
			esc_html__( 'Classic Green', 'fixology' ) => 'bar_green',
			esc_html__( 'Classic Orange', 'fixology' ) => 'bar_orange',
			esc_html__( 'Classic Red', 'fixology' ) => 'bar_red',
			esc_html__( 'Classic Black', 'fixology' ) => 'bar_black',
		), tm_getVcShared( 'colors' ), array( esc_html__( 'Custom color', 'fixology' ) => 'custom' ) ),
		'std'         => 'skincolor',
		'description' => esc_html__( 'Select icon color.', 'fixology' ),
		'param_holder_class' => 'tm_vc_colored-dropdown',
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Custom color', 'fixology' ),
		'param_name'  => 'custom_color',
		'description' => esc_html__( 'Select custom icon color.', 'fixology' ),
		'dependency'  => array(
			'element'   => 'color',
			'value'     => 'custom',
		),
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Background shape', 'fixology' ),
		'param_name'  => 'background_style',
		'value'       => array(
			esc_html__( 'None', 'fixology' ) => '',
			esc_html__( 'Circle', 'fixology' ) => 'rounded',
			esc_html__( 'Square', 'fixology' ) => 'boxed',
			esc_html__( 'Rounded', 'fixology' ) => 'rounded-less',
			esc_html__( 'Outline Circle', 'fixology' ) => 'rounded-outline',
			esc_html__( 'Outline Square', 'fixology' ) => 'boxed-outline',
			esc_html__( 'Outline Rounded', 'fixology' ) => 'rounded-less-outline',
		),
		'std'         => '',
		'description' => esc_html__( 'Select background shape and style for icon.', 'fixology' ),
		'param_holder_class' => 'tm-simplify-textarea',
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Background color', 'fixology' ),
		'param_name'  => 'background_color',
		'value'       => array_merge( array( esc_html__( 'Transparent', 'fixology' ) => 'transparent' ), tm_getVcShared( 'colors' ), array( esc_html__( 'Custom color', 'fixology' ) => 'custom' ) ),
		'std'         => 'grey',
		'description' => esc_html__( 'Select background color for icon.', 'fixology' ),
		'param_holder_class' => 'tm_vc_colored-dropdown',
		'dependency'  => array(
			'element'   => 'background_style',
			'not_empty' => true,
		),
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Custom background color', 'fixology' ),
		'param_name'  => 'custom_background_color',
		'description' => esc_html__( 'Select custom icon background color.', 'fixology' ),
		'dependency'  => array(
			'element'   => 'background_color',
			'value'     => 'custom',
		),
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Size', 'fixology' ),
		'param_name'  => 'size',
		'value'       => array_merge( tm_getVcShared( 'sizes' ), array( 'Extra Large' => 'xl' ) ),
		'std'         => 'md',
		'description' => esc_html__( 'Icon size.', 'fixology' )
	),
	array(
		'type'       => 'dropdown',
		'heading'    => esc_html__( 'Icon alignment', 'fixology' ),
		'param_name' => 'align',
		'value'      => array(
			esc_html__( 'Left', 'fixology' )   => 'left',
			esc_html__( 'Right', 'fixology' )  => 'right',
			esc_html__( 'Center', 'fixology' ) => 'center',
		),
		'std'         => 'left',
		'description' => esc_html__( 'Select icon alignment.', 'fixology' ),
	),
	array(
		'type'        => 'vc_link',
		'heading'     => esc_html__( 'URL (Link)', 'fixology' ),
		'param_name'  => 'link',
		'description' => esc_html__( 'Add link to icon.', 'fixology' )
	),
	vc_map_add_css_animation(),
	tm_vc_ele_extra_class_option(),
	tm_vc_ele_css_editor_option(),
);


// All params
$params = array_merge( $icon_elements, $allparams );

	
	
global $tm_sc_params_icon;
$tm_sc_params_icon = $params;


	
	

vc_map( array(
	'name'     => esc_html__( 'ThemeMount Icon', 'fixology' ),
	'base'     => 'tm-icon',
	'icon'     => 'icon-thememount-vc',
	'category' => array( esc_html__( 'ThemeMount Special Elements', 'fixology' ) ),
	'admin_enqueue_css' => array(get_template_directory_uri().'/assets/themify-icons/themify-icons.css', get_template_directory_uri().'/assets/twemoji-awesome/twemoji-awesome.css' ),
	'params'   => $params,
	'js_view'  => 'VcIconElementView_Backend',
) );
