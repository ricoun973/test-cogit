<?php

/* Options for ThemeMount Button */



global $tm_pixel_icons;
$icons_params = vc_map_integrate_shortcode( 'tm-icon', 'i_', '',
	array(
		'include_only_regex' => '/^(type|icon_\w*)/',
		// we need only type, icon_fontawesome, icon_blabla..., NOT color and etc
	), array(
		'element' => 'add_icon',
		'value' => 'true',
	)
);
// populate integrated tm-icons params.
if ( is_array( $icons_params ) && ! empty( $icons_params ) ) {
	foreach ( $icons_params as $key => $param ) {
		if ( is_array( $param ) && ! empty( $param ) ) {
			if ( 'i_type' === $param['param_name'] ) {
				// Do nothing
			}
			if ( isset( $param['admin_label'] ) ) {
				// remove admin label
				unset( $icons_params[ $key ]['admin_label'] );
			}

		}
	}
}
$params = array_merge(
	array(
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Text', 'fixology' ),
			'param_name' => 'title',
			'value'      => esc_html__( 'Text on the button', 'fixology' ),
		),
		array(
			'type' => 'vc_link',
			'heading' => esc_html__( 'URL (Link)', 'fixology' ),
			'param_name' => 'link',
			'description' => esc_html__( 'Add link to button.', 'fixology' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Style', 'fixology' ),
			'description' => esc_html__( 'Select button display style.', 'fixology' ),
			'param_name' => 'style',
			'std'		 => 'flat',
			'value' => array(
				esc_html__( 'Flat', 'fixology' ) => 'flat',
				esc_html__( 'Modern', 'fixology' ) => 'modern',
				esc_html__( 'Classic', 'fixology' ) => 'classic',
				esc_html__( 'Outline', 'fixology' ) => 'outline',
				esc_html__( '3d', 'fixology' ) => '3d',
				esc_html__( 'Simple Text', 'fixology' ) => 'text',
				esc_html__( 'Custom', 'fixology' ) => 'custom',
				esc_html__( 'Outline custom', 'fixology' ) => 'outline-custom',
				esc_html__( 'Gradient', 'fixology' ) => 'gradient',
				esc_html__( 'Gradient Custom', 'fixology' ) => 'gradient-custom',
			),
		),
		
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Gradient Color 1', 'fixology' ),
			'param_name' => 'gradient_color_1',
			'description' => esc_html__( 'Select first color for gradient.', 'fixology' ),
			'param_holder_class' => 'tm_vc_colored-dropdown vc_btn3-colored-dropdown',
			'value' => getVcShared( 'colors-dashed' ),
			'std' => 'turquoise',
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'gradient' ),
			),
			'edit_field_class' => 'vc_col-sm-6 vc_column',
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Gradient Color 2', 'fixology' ),
			'param_name' => 'gradient_color_2',
			'description' => esc_html__( 'Select second color for gradient.', 'fixology' ),
			'param_holder_class' => 'tm_vc_colored-dropdown vc_btn3-colored-dropdown',
			'value' => getVcShared( 'colors-dashed' ),
			'std' => 'blue',
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'gradient' ),
			),
			'edit_field_class' => 'vc_col-sm-6 vc_column',
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Gradient Color 1', 'fixology' ),
			'param_name' => 'gradient_custom_color_1',
			'description' => esc_html__( 'Select first color for gradient.', 'fixology' ),
			'param_holder_class' => 'tm_vc_colored-dropdown vc_btn3-colored-dropdown',
			'value' => '#dd3333',
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'gradient-custom' ),
			),
			'edit_field_class' => 'vc_col-sm-4 vc_column',
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Gradient Color 2', 'fixology' ),
			'param_name' => 'gradient_custom_color_2',
			'description' => esc_html__( 'Select second color for gradient.', 'fixology' ),
			'param_holder_class' => 'tm_vc_colored-dropdown vc_btn3-colored-dropdown',
			'value' => '#eeee22',
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'gradient-custom' ),
			),
			'edit_field_class' => 'vc_col-sm-4 vc_column',
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Button Text Color', 'fixology' ),
			'param_name' => 'gradient_text_color',
			'description' => esc_html__( 'Select button text color.', 'fixology' ),
			'param_holder_class' => 'tm_vc_colored-dropdown vc_btn3-colored-dropdown',
			'value' => '#ffffff',
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'gradient-custom' ),
			),
			'edit_field_class' => 'vc_col-sm-4 vc_column',
		),
		
		
		
		
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Background', 'fixology' ),
			'param_name' => 'custom_background',
			'description' => esc_html__( 'Select custom background color for your element.', 'fixology' ),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'custom' )
			),
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'std' => '#ededed',
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Text', 'fixology' ),
			'param_name' => 'custom_text',
			'description' => esc_html__( 'Select custom text color for your element.', 'fixology' ),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'custom' )
			),
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'std' => '#666',
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Outline and Text', 'fixology' ),
			'param_name' => 'outline_custom_color',
			'description' => esc_html__( 'Select outline and text color for your element.', 'fixology' ),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'outline-custom' )
			),
			'edit_field_class' => 'vc_col-sm-4 vc_column',
			'std' => '#666',
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Hover background', 'fixology' ),
			'param_name' => 'outline_custom_hover_background',
			'description' => esc_html__( 'Select hover background color for your element.', 'fixology' ),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'outline-custom' )
			),
			'edit_field_class' => 'vc_col-sm-4 vc_column',
			'std' => '#666',
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Hover text', 'fixology' ),
			'param_name' => 'outline_custom_hover_text',
			'description' => esc_html__( 'Select hover text color for your element.', 'fixology' ),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'outline-custom' )
			),
			'edit_field_class' => 'vc_col-sm-4 vc_column',
			'std' => '#fff',
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Shape', 'fixology' ),
			'description' => esc_html__( 'Select button shape.', 'fixology' ),
			'param_name' => 'shape',
			'std'		 => 'square',
			'value' => array(
				esc_html__( 'Square', 'fixology' ) => 'square',
				esc_html__( 'Rounded', 'fixology' ) => 'rounded',
				esc_html__( 'Round', 'fixology' ) => 'round',
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Color', 'fixology' ),
			'param_name' => 'color',
			'description' => esc_html__( 'Select button color.', 'fixology' ),
			'param_holder_class' => 'tm_vc_colored-dropdown vc_btn3-colored-dropdown',
			'value' => array(
							esc_html__( '[Skin Color]', 'fixology' ) => 'skincolor',
							esc_html__( 'Classic Grey', 'fixology' ) => 'default',
							esc_html__( 'Classic Blue', 'fixology' ) => 'primary',
							esc_html__( 'Classic Turquoise', 'fixology' ) => 'info',
							esc_html__( 'Classic Green', 'fixology' ) => 'success',
							esc_html__( 'Classic Orange', 'fixology' ) => 'warning',
							esc_html__( 'Classic Red', 'fixology' ) => 'danger',
							esc_html__( 'Classic Black', 'fixology' ) => 'inverse'
					   ) + tm_getVcShared( 'colors-dashed' ),
			'std' => 'skincolor',
			'dependency' => array(
				'element' => 'style',
				'value_not_equal_to' => array( 'custom', 'outline-custom' )
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Button Size', 'fixology' ),
			'param_name' => 'size',
			'description' => esc_html__( 'Select button display size.', 'fixology' ),
			'std' => 'md',
			'value' => tm_getVcShared( 'sizes' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Alignment', 'fixology' ),
			'param_name' => 'align',
			'description' => esc_html__( 'Select button alignment.', 'fixology' ),
			'value' => array(
				esc_html__( 'Inline', 'fixology' ) => 'inline',
				esc_html__( 'Left', 'fixology' ) => 'left',
				esc_html__( 'Right', 'fixology' ) => 'right',
				esc_html__( 'Center', 'fixology' ) => 'center'
			),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Set full width button?', 'fixology' ),
			'param_name' => 'button_block',
			'dependency' => array(
				'element'            => 'align',
				'value_not_equal_to' => 'inline',
			),
			'value'      => array(
				esc_html__( 'No', 'fixology' )  => 'false',
				esc_html__( 'Yes', 'fixology' ) => 'true',
			),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Add icon?', 'fixology' ),
			'param_name' => 'add_icon',
			'value'      => array(
				esc_html__( 'No',  'fixology' ) => '',
				esc_html__( 'Yes', 'fixology' ) => 'true',
			),
		),
		
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Icon Alignment', 'fixology' ),
			'description' => esc_html__( 'Select icon alignment.', 'fixology' ),
			'param_name' => 'i_align',
			'value' => array(
				esc_html__( 'Left', 'fixology' ) => 'left',
				// default as well
				esc_html__( 'Right', 'fixology' ) => 'right',
			),
			'dependency' => array(
				'element' => 'add_icon',
				'value' => 'true',
			),
		),
	),
	
	$icons_params,
	
	array(
		vc_map_add_css_animation(),
		tm_vc_ele_extra_class_option(),
		tm_vc_ele_css_editor_option(),
	)
);











// Changing modifying, adding extra options
$i = 0;
foreach( $params as $param ){
	
	$param_name = (isset($param['param_name'])) ? $param['param_name'] : '' ;
	
	
	// Button Icon
	if( $param_name == 'i_align' ){
		$params[$i]['std'] = 'right';
	
	} else if( $param_name == 'i_type' ){
		$params[$i]['std'] = 'themify';
		
	} else if( $param_name == 'i_icon_themify' ){
		$params[$i]['std']   = 'themifyicon ti-arrow-right';
		$params[$i]['value'] = 'themifyicon ti-arrow-right';

	}
	
	
	$i++;
} // Foreach











	
global $tm_sc_params_btn;
$tm_sc_params_btn = $params;



vc_map( array(
	'name'     => esc_html__( 'ThemeMount Button', 'fixology' ),
	'base'     => 'tm-btn',
	'icon'     => 'icon-thememount-vc',
	'category' => array( esc_html__( 'ThemeMount Special Elements', 'fixology' ) ),
	'params'   => $params,
	'js_view'  => 'VcButton3View',
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><button class="vc_general vc_btn3 vc_btn3-size-sm vc_btn3-shape-{{ params.shape }} vc_btn3-style-{{ params.style }} vc_btn3-color-{{ params.color }}">{{{ params.title }}}</button></div>',
) );


