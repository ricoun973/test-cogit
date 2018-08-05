<?php

/* Options for ThemeMount Custom Heading element */

$allparams = array(
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Text source', 'fixology' ),
		'param_name'  => 'source',
		'value'       => array(
			esc_html__( 'Custom text', 'fixology' )        => '',
			esc_html__( 'Post or Page Title', 'fixology' ) => 'post_title'
		),
		'std'         => '',
		'description' => esc_html__( 'Select text source.', 'fixology' )
	),
	array(
		'type'        => 'textarea',
		'heading'     => esc_html__( 'Text', 'fixology' ),
		'param_name'  => 'text',
		'admin_label' => true,
		'value'       => esc_html__( 'This is custom heading element', 'fixology' ),
		'description' => esc_html__( 'Note: If you are using non-latin characters be sure to activate them under Settings/Visual Composer/General Settings.', 'fixology' ),
		'dependency'  => array(
			'element'   => 'source',
			'is_empty'  => true,
		),
	),
	array(
		'type'        => 'vc_link',
		'heading'     => esc_html__( 'URL (Link)', 'fixology' ),
		'param_name'  => 'link',
		'description' => esc_html__( 'Add link to custom heading.', 'fixology' ),
		// compatible with btn2 and converted from href{btn1}
	),
	array(
		'type'       => 'font_container',
		'param_name' => 'font_container',
		'value'      => 'tag:h2|text_align:left',
		'settings'   => array(
			'fields'   => array(
				'tag'                     => 'h2', // default value h2
				'text_align',
				'font_size',
				'line_height',
				'color',
				'tag_description'         => esc_html__( 'Select element tag.', 'fixology' ),
				'text_align_description'  => esc_html__( 'Select text alignment.', 'fixology' ),
				'font_size_description'   => esc_html__( 'Enter font size.', 'fixology' ),
				'line_height_description' => esc_html__( 'Enter line height.', 'fixology' ),
				'color_description'       => esc_html__( 'Select heading color.', 'fixology' ),
			),
		),
		'std'        => 'tag:h2',
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Use theme default font family?', 'fixology' ),
		'param_name'  => 'use_theme_fonts',
		//'value'       => array( esc_html__( 'Yes', 'fixology' ) => 'yes' ),
		'value'       => array(
			esc_html__( 'Yes, use default fonts', 'fixology' )               => 'yes',
			esc_html__( 'No, use custom fonts (select below)', 'fixology' )  => 'no'
		),
		'std'         => array( esc_html__( 'Yes', 'fixology' ) => 'yes' ),
		'description' => esc_html__( 'Use font family from the theme.', 'fixology' ),
		'std'         => 'yes',
	),
	
	
	array(
		'type'       => 'google_fonts',
		'param_name' => 'google_fonts',
		'value'      => 'font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal',
		'std'        => 'font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal',
		'settings'   => array(
			'fields'   => array(
				'font_family_description' => esc_html__( 'Select font family.', 'fixology' ),
				'font_style_description'  => esc_html__( 'Select font styling.', 'fixology' )
			)
		),
		'dependency' => array(
			'element'            => 'use_theme_fonts',
			'value_not_equal_to' => 'yes',
		),
	)
	
);

$params = array_merge(
	$allparams,
	array(
		vc_map_add_css_animation(),
		tm_vc_ele_extra_class_option(),
		tm_vc_ele_css_editor_option(),
	)
);


global $tm_sc_params_custom_heading;
$tm_sc_params_custom_heading = $params;


vc_map( array(
	'name'     => esc_html__( 'ThemeMount Custom Heading', 'fixology' ),
	'base'     => 'tm-custom-heading',
	'icon'     => 'icon-thememount-vc',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'ThemeMount Special Elements', 'fixology' ),
	'params'   => $params
) );
