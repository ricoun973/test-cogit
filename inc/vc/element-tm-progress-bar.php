<?php



// Icon picker
$icons_params = vc_map_integrate_shortcode( 'tm-icon', 'i_', '',
	array(
		'include_only_regex' => '/^(type|icon_\w*)/',
		// we need only type, icon_fontawesome, icon_blabla..., NOT color and etc
	), array(
		'element' => 'add_icon',
		'value' => 'true',
	)
);

// each progress bar options
$param_group = array(
	array(
		'type' => 'textfield',
		'heading' => esc_html__( 'Label', 'fixology' ),
		'param_name' => 'label',
		'description' => esc_html__( 'Enter text used as title of bar.', 'fixology' ),
		'admin_label' => true,
	),
	array(
		'type' => 'textfield',
		'heading' => esc_html__( 'Value', 'fixology' ),
		'param_name' => 'value',
		'description' => esc_html__( 'Enter value of bar.', 'fixology' ),
		'admin_label' => true,
	),
	array(
		'type' => 'dropdown',
		'heading' => esc_html__( 'Color', 'fixology' ),
		'param_name' => 'color',
		'value' => array(
				__( 'Default', 'fixology' ) => '',
			) + array(
				__( 'Classic Grey', 'fixology' ) => 'bar_grey',
				__( 'Classic Blue', 'fixology' ) => 'bar_blue',
				__( 'Classic Turquoise', 'fixology' ) => 'bar_turquoise',
				__( 'Classic Green', 'fixology' ) => 'bar_green',
				__( 'Classic Orange', 'fixology' ) => 'bar_orange',
				__( 'Classic Red', 'fixology' ) => 'bar_red',
				__( 'Classic Black', 'fixology' ) => 'bar_black',
			) + tm_getVcShared( 'colors-dashed' ) /*+ array(
				__( 'Custom Color', 'fixology' ) => 'custom',
			)*/,
		'description' => esc_html__( 'Select single bar background color.', 'fixology' ),
		'admin_label' => true,
		'param_holder_class' => 'vc_colored-dropdown',
	),
	
	// Show / Hide icon
	array(
		'type'       => 'dropdown',
		'heading'    => esc_html__( 'Show Icon?', 'fixology' ),
		'param_name' => 'add_icon',
		'value'      => array(
			esc_html__( 'Yes', 'fixology' ) => 'true',
			esc_html__( 'No', 'fixology' )  => 'false',
		),
		'std'         => 'true',
		'description' => esc_html__( 'Want to show icon with the progress bar.', 'fixology' ),
	)
);



// Merging icon with other options
$param_group = array_merge( $param_group, $icons_params );






$params =  array(
	array(
		'type' => 'textfield',
		'heading' => esc_html__( 'Widget title', 'fixology' ),
		'param_name' => 'title',
		'description' => esc_html__( 'Enter text used as widget title (Note: located above content element).', 'fixology' ),
	),
	array(
		'type' => 'param_group',
		'heading' => esc_html__( 'Values', 'fixology' ),
		'param_name' => 'values',
		'description' => esc_html__( 'Enter values for graph - value, title and color.', 'fixology' ),
		'value' => urlencode( json_encode( array(
			array(
				'label' => esc_html__( 'Development', 'fixology' ),
				'value' => '90',
			),
			array(
				'label' => esc_html__( 'Design', 'fixology' ),
				'value' => '80',
			),
			array(
				'label' => esc_html__( 'Marketing', 'fixology' ),
				'value' => '70',
			),
		) ) ),
		'params' => $param_group,
	),
	array(
		'type' => 'textfield',
		'heading' => esc_html__( 'Units', 'fixology' ),
		'param_name' => 'units',
		'description' => esc_html__( 'Enter measurement units (Example: %, px, points, etc. Note: graph value and units will be appended to graph title).', 'fixology' ),
	),
	array(
		'type' => 'dropdown',
		'heading' => esc_html__( 'Color', 'fixology' ),
		'param_name' => 'bgcolor',
		'std' => 'skincolor',
		'value' => array(
				__( 'Classic Grey', 'fixology' ) => 'bar_grey',
				__( 'Classic Blue', 'fixology' ) => 'bar_blue',
				__( 'Classic Turquoise', 'fixology' ) => 'bar_turquoise',
				__( 'Classic Green', 'fixology' ) => 'bar_green',
				__( 'Classic Orange', 'fixology' ) => 'bar_orange',
				__( 'Classic Red', 'fixology' ) => 'bar_red',
				__( 'Classic Black', 'fixology' ) => 'bar_black',
			) + tm_getVcShared( 'colors-dashed' ) /* + array(
				__( 'Custom Color', 'fixology' ) => 'custom',
			)*/ ,
		'description' => esc_html__( 'Select bar background color.', 'fixology' ),
		'admin_label' => true,
		'param_holder_class' => 'vc_colored-dropdown',
	),
	array(
		'type' => 'checkbox',
		'heading' => esc_html__( 'Options', 'fixology' ),
		'param_name' => 'options',
		'value' => array(
			esc_html__( 'Add stripes', 'fixology' ) => 'striped',
			esc_html__( 'Add animation (Note: visible only with striped bar).', 'fixology' ) => 'animated',
		),
	),
);



$params = array_merge(
	$params,
	array( vc_map_add_css_animation() ),
	array( tm_vc_ele_extra_class_option() ),
	array( tm_vc_ele_css_editor_option() )
);
		


global $tm_sc_params_progressbar;
$tm_sc_params_progressbar = $params;


vc_map( array(
	'name'		=> esc_html__( 'ThemeMount Progress Bar', 'fixology' ),
	'base'		=> 'tm-progress-bar',
	'class'		=> '',
	'icon'		=> 'icon-thememount-vc',
	'category'	=> esc_html__( 'ThemeMount Special Elements', 'fixology' ),
	'params'	=> $params
) );
