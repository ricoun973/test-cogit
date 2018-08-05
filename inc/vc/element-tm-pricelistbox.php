<?php

/**
 *  ThemeMount: Schedule Box
 */


	$params = array_merge(
		tm_vc_heading_params(),
		array(
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra class name', 'fixology' ),
				'param_name'  => 'el_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'fixology' ),
			),
			array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Pricelist', 'fixology' ),
			'param_name' => 'pricelist',
			'group'       => esc_html__( 'Pricelist', 'fixology' ),
			'description' => esc_html__( 'Set Service price', 'fixology' ),
			'value' => urlencode( json_encode( array(
				array(
					'service_name' => esc_html__( 'Plumbing', 'fixology' ),
					'price' => '$30',
				),
			
			))),
			'params' => array(
				array(
						'type'        => 'textarea',
						'heading'     => esc_html__( 'Service Name', 'fixology' ),
						'param_name'  => 'service_name',
						'description' => esc_html__( 'Fill Service information here', 'fixology' ),
						// 'value'       => '',
						'group'       => esc_html__( 'Pricelist', 'fixology' ),
						'admin_label' => true,
						'edit_field_class' => 'vc_col-sm-6 vc_column',
				),
				array(
						'type'        => 'textarea',
						'heading'     => esc_html__( 'Price', 'fixology' ),
						'param_name'  => 'price',
						// 'value'       => '',
						'description' => esc_html__( 'Fill Price details here eg: $30', 'fixology' ),
						'group'       => esc_html__( 'Pricelist', 'fixology' ),
						'admin_label' => true,
						'edit_field_class' => 'vc_col-sm-6 vc_column',
				),
				
			),
		),
			
			
		)
	);
	

	
	global $tm_vc_custom_element_pricelistbox;
	$tm_vc_custom_element_pricelistbox = $params;
	
	

	vc_map( array(
		'name'        => esc_html__( 'ThemeMount Pricelist Box', 'fixology' ),
		'base'        => 'tm-pricelistbox',
		"class"    => "",
		"icon"        => "icon-thememount-vc",
		'category'    => esc_html__( 'ThemeMount Special Elements', 'fixology' ),
		'params'      => $params,
	) );

