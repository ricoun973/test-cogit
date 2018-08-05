<?php

/* Options for ThemeMount Call To Action */


$h2_custom_heading = vc_map_integrate_shortcode( 'tm-custom-heading', 'h2_', esc_html__( 'Heading', 'fixology' ),
	array(
		'exclude' => array(
			'source',
			'text',
			'css',
		),
	),
	array(
		'element' => 'use_custom_fonts_h2',
		'value'   => 'true',
	)
);

// This is needed to remove custom heading _tag and _align options.
if ( is_array( $h2_custom_heading ) && ! empty( $h2_custom_heading ) ) {
	foreach ( $h2_custom_heading as $key => $param ) {
		if ( is_array( $param ) && isset( $param['type'] ) && 'font_container' === $param['type'] ) {
			$h2_custom_heading[ $key ]['value'] = '';
			if ( isset( $param['settings'] ) && is_array( $param['settings'] ) && isset( $param['settings']['fields'] ) ) {
				$sub_key = array_search( 'tag', $param['settings']['fields'] );
				if ( false !== $sub_key ) {
					unset( $h2_custom_heading[ $key ]['settings']['fields'][ $sub_key ] );
				} elseif ( isset( $param['settings']['fields']['tag'] ) ) {
					unset( $h2_custom_heading[ $key ]['settings']['fields']['tag'] );
				}
				$sub_key = array_search( 'text_align', $param['settings']['fields'] );
				if ( false !== $sub_key ) {
					unset( $h2_custom_heading[ $key ]['settings']['fields'][ $sub_key ] );
				} elseif ( isset( $param['settings']['fields']['text_align'] ) ) {
					unset( $h2_custom_heading[ $key ]['settings']['fields']['text_align'] );
				}
			}
		}
	}
}
$h4_custom_heading = vc_map_integrate_shortcode( 'tm-custom-heading', 'h4_', esc_html__( 'Subheading', 'fixology' ),
	array(
		'exclude' => array(
			'source',
			'text',
			'css',
		),
	),
	array(
		'element' => 'use_custom_fonts_h4',
		'value' => 'true',
	)
);

// This is needed to remove custom heading _tag and _align options.
if ( is_array( $h4_custom_heading ) && ! empty( $h4_custom_heading ) ) {
	foreach ( $h4_custom_heading as $key => $param ) {
		if ( is_array( $param ) && isset( $param['type'] ) && 'font_container' === $param['type'] ) {
			$h4_custom_heading[ $key ]['value'] = '';
			if ( isset( $param['settings'] ) && is_array( $param['settings'] ) && isset( $param['settings']['fields'] ) ) {
				$sub_key = array_search( 'tag', $param['settings']['fields'] );
				if ( false !== $sub_key ) {
					unset( $h4_custom_heading[ $key ]['settings']['fields'][ $sub_key ] );
				} elseif ( isset( $param['settings']['fields']['tag'] ) ) {
					unset( $h4_custom_heading[ $key ]['settings']['fields']['tag'] );
				}
				$sub_key = array_search( 'text_align', $param['settings']['fields'] );
				if ( false !== $sub_key ) {
					unset( $h4_custom_heading[ $key ]['settings']['fields'][ $sub_key ] );
				} elseif ( isset( $param['settings']['fields']['text_align'] ) ) {
					unset( $h4_custom_heading[ $key ]['settings']['fields']['text_align'] );
				}
			}
		}
	}
}
$params = array_merge(
	array(
		array(
			'type'             => 'textfield',
			'heading'          => esc_html__( 'Heading', 'fixology' ),
			'admin_label'      => true,
			'param_name'       => 'h2',
			'value'            => '',
			'description'      => esc_html__( 'Enter text for heading line.', 'fixology' ),
			'edit_field_class' => 'vc_col-sm-9 vc_column',
		),
		array(
			'type'             => 'checkbox',
			'heading'          => esc_html__( 'Use custom font?', 'fixology' ),
			'param_name'       => 'use_custom_fonts_h2',
			'description'      => esc_html__( 'Enable Google fonts.', 'fixology' ),
			'edit_field_class' => 'vc_col-sm-3 vc_column',
		),

	),
	$h2_custom_heading,
	array(
		array(
			'type'             => 'textfield',
			'heading'          => esc_html__( 'Subheading', 'fixology' ),
			'param_name'       => 'h4',
			'value'            => '',
			'description'      => esc_html__( 'Enter text for subheading line.', 'fixology' ),
			'edit_field_class' => 'vc_col-sm-9 vc_column',
		),
		array(
			'type'             => 'checkbox',
			'heading'          => esc_html__( 'Use custom font?', 'fixology' ),
			'param_name'       => 'use_custom_fonts_h4',
			'description'      => esc_html__( 'Enable custom font option.', 'fixology' ),
			'edit_field_class' => 'vc_col-sm-3 vc_column',
		),
	),
	$h4_custom_heading,
	array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Text alignment', 'fixology' ),
			'param_name'  => 'txt_align',
			'value'       => tm_getVcShared( 'text align' ), // default left
			'description' => esc_html__( 'Select text alignment in "Call to Action" block.', 'fixology' ),
		),
		array(
			'type'             => 'checkbox',
			'heading'          => esc_html__( 'Reverse heading order', 'fixology' ),
			'param_name'       => 'reverse_heading',
			'description'      => esc_html__( 'Show sub-heading before heading.', 'fixology' ),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Shape', 'fixology' ),
			'param_name' => 'shape',
			'std'        => 'rounded',
			'value'      => array(
				esc_html__( 'Square', 'fixology' )  => 'square',
				esc_html__( 'Rounded', 'fixology' ) => 'rounded',
				esc_html__( 'Round', 'fixology' )   => 'round',
			),
			'description' => esc_html__( 'Select call to action shape.', 'fixology' ),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Style', 'fixology' ),
			'param_name' => 'style',
			'value' => array(
				esc_html__( 'Classic', 'fixology' ) => 'classic',
				esc_html__( 'Flat', 'fixology' )    => 'flat',
				esc_html__( 'Outline', 'fixology' ) => 'outline',
				esc_html__( '3d', 'fixology' )      => '3d',
			),
			'std'         => 'classic',
			'description' => esc_html__( 'Select call to action display style.', 'fixology' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Color', 'fixology' ),
			'param_name'  => 'color',
			'value'       => array_merge( array( esc_html__('Transparent', 'fixology' ) => 'transparent' ), tm_getVcShared( 'colors-dashed' ) ),
			'std'         => 'transparent',
			'description' => esc_html__( 'Select color for button.', 'fixology' ),
			'param_holder_class' => 'tm_vc_colored-dropdown vc_cta3-colored-dropdown',
			'dependency'  => array(
				'element'            => 'style',
				'value_not_equal_to' => array( 'custom' )
			),
		),
		array(
			'type'       => 'textarea_html',
			'heading'    => esc_html__( 'Text', 'fixology' ),
			'param_name' => 'content',
			'value'      => esc_html__( 'I am promo text. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'fixology' )
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Width', 'fixology' ),
			'param_name' => 'el_width',
			'value'      => array(
					'100%' => '',
					'90%'  => 'xl',
					'80%'  => 'lg',
					'70%'  => 'md',
					'60%'  => 'sm',
					'50%'  => 'xs',
			),
			'description' => esc_html__( 'Select call to action width (percentage).', 'fixology' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Add button', 'fixology' ) . '?',
			'description' => esc_html__( 'Add button for call to action.', 'fixology' ),
			'std'		  => 'right',
			'param_name'  => 'add_button',
			'value'       => array(
				esc_html__( 'No', 'fixology' )     => '',
				esc_html__( 'Top', 'fixology' )    => 'top',
				esc_html__( 'Bottom', 'fixology' ) => 'bottom',
				esc_html__( 'Left', 'fixology' )   => 'left',
				esc_html__( 'Right', 'fixology' )  => 'right',
			),
		),
	),
	vc_map_integrate_shortcode( 'tm-btn', 'btn_', esc_html__( 'Button', 'fixology' ),
		array(
			'exclude' => array( 'css' )
		),
		array(
			'element'   => 'add_button',
			'not_empty' => true,
		)
	),
	array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Add icon?', 'fixology' ),
			'description' => esc_html__( 'Add icon for call to action.', 'fixology' ),
			'param_name'  => 'add_icon',
			'value'       => array(
				esc_html__( 'No', 'fixology' )     => '',
				esc_html__( 'Top', 'fixology' )    => 'top',
				esc_html__( 'Bottom', 'fixology' ) => 'bottom',
				esc_html__( 'Left', 'fixology' )   => 'left',
				esc_html__( 'Right', 'fixology' )  => 'right',
			),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Place icon on border?', 'fixology' ),
			'description' => esc_html__( 'Display icon on call to action element border.', 'fixology' ),
			'param_name'  => 'i_on_border',
			'value'       => array(
				esc_html__( 'No', 'fixology' )     => 'false',
				esc_html__( 'Yes', 'fixology' )    => 'true',
			),
			'group'       => esc_html__( 'Icon', 'fixology' ),
			'dependency'  => array(
				'element'   => 'add_icon',
				'not_empty' => true,
			),
		),
		
	),
	vc_map_integrate_shortcode( 'tm-icon', 'i_', esc_html__( 'Icon', 'fixology' ),
		array(
			'exclude' => array( 'align', 'css' )
		),
		array(
			'element'   => 'add_icon',
			'not_empty' => true,
		)
	),
	array(
		/// cta3
		vc_map_add_css_animation(),
		tm_vc_ele_extra_class_option(),
		tm_vc_ele_css_editor_option(),
	)
);



	
global $tm_sc_params_cta;
$tm_sc_params_cta = $params;



vc_map( array(
	'name'     => esc_html__( 'ThemeMount Call to Action', 'fixology' ),
	'base'     => 'tm-cta',
	'icon'     => 'icon-thememount-vc',
	'category' => array( esc_html__( 'ThemeMount Special Elements', 'fixology' ) ),
	'since'    => '4.5',
	'params'   => $params,
	'js_view'  => 'VcCallToActionView3',
) );