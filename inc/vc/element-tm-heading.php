<?php

/* Options for ThemeMount Heading and Subheading */


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
			'type'             => 'textarea',
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
			'type'             => 'textarea',
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
			'type'       => 'textarea_html',
			'heading'    => esc_html__( 'Text', 'fixology' ),
			'param_name' => 'content',
			'value'      => esc_html__( 'I am promo text. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'fixology' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Text alignment', 'fixology' ),
			'param_name'  => 'txt_align',
			'std'		  => 'left',
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
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Seperator', 'fixology' ),
			'param_name'  => 'seperator',
			'value'       => array(
				esc_html__( 'Solid', 'fixology' ) => 'solid',
				esc_html__( 'After Before With Center Icon', 'fixology' ) => 'center_icon',
				esc_html__( 'None', 'fixology' )  => 'none',
			),
			'description' => esc_html__( 'Show separator between Heading and Subheading', 'fixology' ),
			'std'		  => 'none',
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Heading Style', 'fixology' ),
			'param_name'  => 'heading_style',
			'value'       => array(
				esc_html__( 'Vertical (Default)', 'fixology' )	=> 'vertical',
				esc_html__( 'Horizontal', 'fixology' )			=> 'horizontal',
			),
			'description' => esc_html__( 'Select Heading Style', 'fixology' ),
			'std'  		  => 'vertical',
			'dependency'  => array(
					'element'            => 'seperator',
					'value_not_equal_to' => array( 'center_icon' ),
				),
		),

	),

	array(
		/// cta3
		vc_map_add_css_animation(),
		tm_vc_ele_extra_class_option(),
		tm_vc_ele_css_editor_option(),
	)
);



	
global $tm_sc_params_heading;
$tm_sc_params_heading = $params;



vc_map( array(
	'name'     => esc_html__( 'ThemeMount Heading and Subheading', 'fixology' ),
	'base'     => 'tm-heading',
	'icon'     => 'icon-thememount-vc',
	'category' => array( esc_html__( 'ThemeMount Special Elements', 'fixology' ) ),
	'since'    => '4.5',
	'params'   => $params,
	'js_view'  => 'VcCallToActionView3',
) );