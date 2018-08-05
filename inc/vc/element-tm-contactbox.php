<?php

/* Options */



$params = array(
	array(
		"type"        => "textfield",
		"holder"      => "div",
		"class"       => "",
		"heading"     => esc_html__("Phone",'fixology'),
		"description" => esc_html__("Write phone number here. Example: (+01) 123 456 7890",'fixology'),
		"param_name"  => "phone",
	),
	array(
		"type"        => "textfield",
		"holder"      => "div",
		"class"       => "",
		"heading"     => esc_html__("Email",'fixology'),
		"description" => esc_html__("Write email here. Example: info@example.com",'fixology'),
		"param_name"  => "email",
	),
	array(
		"type"        => "textfield",
		"holder"      => "div",
		"class"       => "",
		"heading"     => esc_html__("Website",'fixology'),
		"description" => esc_html__("Write website URL here.",'fixology'),
		"param_name"  => "website",
	),
	array(
		"type"        => "textarea",
		"holder"      => "div",
		"class"       => "",
		"heading"     => esc_html__("Address",'fixology'),
		"description" => esc_html__("Write address here. You can write in multi-line too.",'fixology'),
		"param_name"  => "address",
	),
	array(
		"type"        => "textarea",
		"holder"      => "div",
		"class"       => "",
		"heading"     => esc_html__("Time",'fixology'),
		"description" => esc_html__("Write time here. You can write in multi-line too.",'fixology'),
		"param_name"  => "time",
	),
);


$params    = array_merge( $params, array( vc_map_add_css_animation() ), array( tm_vc_ele_extra_class_option() ), array( tm_vc_ele_css_editor_option() ) );

global $tm_sc_params_contactbox;
$tm_sc_params_contactbox = $params;


vc_map( array(
	"name"     => esc_html__("ThemeMount Contact Details Box",'fixology'),
	"base"     => "tm-contactbox",
	"class"    => "",
	'category' => esc_html__( 'ThemeMount Special Elements', 'fixology' ),
	"icon"     => "icon-thememount-vc",
	"params"   => $params
) );