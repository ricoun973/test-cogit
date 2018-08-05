<?php

/* Options */

// Getting social list
$global_social_list = tm_shared_social_list();

$sociallist = array_merge(
	array('' => esc_html__('Select service','fixology')),
	$global_social_list,
	array('rss'     => 'Rss Feed')
);
$sociallist = array_flip($sociallist);


$params = array_merge(
	tm_vc_heading_params(),
	array(
		array(
			'type'        => 'param_group',
			'heading'     => esc_html__( 'Social Services List', 'fixology' ),
			'param_name'  => 'socialservices',
			'description' => esc_html__( 'Select social service and add URL for it.', 'fixology' ).'<br><strong>'.esc_html__('NOTE:','fixology').'</strong> '.esc_html__("You don't need to add URL if you are selecting 'RSS' in the social service",'fixology'),
			'group'       => esc_html__( 'Social Services', 'fixology' ),
			'params'     => array(
				array( // First social service
					'type'        => 'dropdown',
					'heading'     => esc_html__( 'Select Social Service', 'fixology' ),
					'param_name'  => 'servicename',
					'std'         => 'none',
					'value'       => $sociallist,
					'description' => esc_html__( 'Select social service', 'fixology' ),
					'group'       => esc_html__( 'Social Services', 'fixology' ),
					'admin_label' => true,
					'edit_field_class' => 'vc_col-sm-4 vc_column',
				),
				array(
					'type'        => 'textarea',
					'heading'     => esc_html__( 'Social URL', 'fixology' ),
					'param_name'  => 'servicelink',
					'dependency'  => array(
						'element'            => 'servicename',
						'value_not_equal_to' => array( 'rss' )
					),
					'value'       => '',
					'description' => esc_html__( 'Fill social service URL', 'fixology' ),
					'group'       => esc_html__( 'Social Services', 'fixology' ),
					'admin_label' => true,
					'edit_field_class' => 'vc_col-sm-8 vc_column',
				),
			),
		),
		array( // First social service
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Select column', 'fixology' ),
			'param_name'  => 'column',
			'value'       => array(
				esc_html__('One column','fixology')   => 'one',
				esc_html__('Two column','fixology')   => 'two',
				esc_html__('Three column','fixology') => 'three',
				esc_html__('Four column','fixology')  => 'four',
				esc_html__('Five column','fixology')  => 'five',
				esc_html__('Six column','fixology')   => 'six',
			),
			'std'         => 'six',
			'description' => esc_html__( 'Select how many column will show the social icons', 'fixology' ),
			'group'       => esc_html__( 'Social Services', 'fixology' ),
			'edit_field_class' => 'vc_col-sm-6 vc_column',
		),
		array( // First social service
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Social icon size', 'fixology' ),
			'param_name'  => 'iconsize',
			'std'         => 'large',
			'value'       => array(
				esc_html__('Small icon','fixology')  => 'small',
				esc_html__('Medium icon','fixology') => 'medium',
				esc_html__('Large icon','fixology')  => 'large',
			),
			'description' => esc_html__( 'Select social icon size', 'fixology' ),
			'group'       => esc_html__( 'Social Services', 'fixology' ),
			'edit_field_class' => 'vc_col-sm-6 vc_column',
		),
	),
	
	array( vc_map_add_css_animation() ),
	array( tm_vc_ele_extra_class_option() ),
	array( tm_vc_ele_css_editor_option() )
	
);

global $tm_sc_params_socialbox;
$tm_sc_params_socialbox = $params;


vc_map( array(
	'name'        => esc_html__( 'ThemeMount Social Box', 'fixology' ),
	'base'        => 'tm-socialbox',
	"icon"        => "icon-thememount-vc",
	'category'    => esc_html__( 'ThemeMount Special Elements', 'fixology' ),
	'params'      => $params,
) );