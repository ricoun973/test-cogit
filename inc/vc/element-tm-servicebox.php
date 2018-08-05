<?php

/* Options for ThemeMount Servicebox */
$bgcolor_custom = array();
$bgcolor_custom[__( 'Transparent', 'fixology' )] = 'transparent';
$bgcolor_custom[__( 'Skin color', 'fixology' )]  = 'skincolor';
$boxcolor =   array_merge( $bgcolor_custom , tm_getVcShared( 'colors-dashed' ) ) ;

$params = array_merge(
	
	array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Icon position', 'fixology' ),
			'description' => esc_html__( 'Icon position in the Service box.', 'fixology' ),
			'param_name'  => 'add_icon',
			'std'         => 'left-spacing',
			'value'       => array(
				esc_html__( 'Before Heading', 'fixology' )           => 'before-heading',
				esc_html__( 'Top Center', 'fixology' )               => 'top-center',
				esc_html__( 'Top Left', 'fixology' )                 => 'top-left',
				esc_html__( 'Left with spacing', 'fixology' )        => 'left-spacing',
				esc_html__( 'Bottom Center', 'fixology' )            => 'bottom-center',
				esc_html__( 'Top Right (RTL)', 'fixology' )          => 'top-right',
				esc_html__( 'Right with spacing (RTL)', 'fixology' ) => 'right-spacing',
				esc_html__( 'After Heading (RTL)', 'fixology' )      => 'after-heading',
			),
		),
	),
	
	tm_vc_heading_params(),
	array(
		array(
			'type'       => 'textarea_html',
			'heading'    => esc_html__( 'Text', 'fixology' ),
			'param_name' => 'content',
			'value'      => esc_html__( 'I am promo text. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'fixology' )
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Background Color', 'fixology' ),
			'param_name' => 'bgcolor',
			'value'      => array( 'Transparent' => 'transparent' ) + tm_getVcShared('pre-bg-colors'),
			'std'         => 'transparent',
			'description' => esc_html__( 'Select Service Box display style.', 'fixology' ),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Text Color', 'fixology' ),
			'param_name' => 'textcolor',
			'value'      => array( esc_html__('Default', 'fixology') => '' ) + tm_getVcShared('pre-text-colors'),
			'std'         => '',
			'description' => esc_html__( 'Select Service Box display style.', 'fixology' ),
		)
	),
	array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Add button', 'fixology' ) . '?',
			'description' => esc_html__( 'Add button to Service Box.', 'fixology' ),
			'param_name'  => 'add_button',
			'value'       => array(
				esc_html__( 'No', 'fixology' )  => '',
				esc_html__( 'Yes', 'fixology' ) => 'bottom',
			),
			'std' 		  => '',
			
		),
	),
	vc_map_integrate_shortcode( 'tm-btn', 'btn_', esc_html__( 'Button', 'fixology' ),
		array(
		'exclude' => array(
			'align',
			'button_block',
			'el_class',
			'css_animation',
			'css',
		),
	),
		array(
			'element' => 'add_button',
			'not_empty' => true,
		)
	),
	
	vc_map_integrate_shortcode( 'tm-icon', 'i_', esc_html__( 'Icon', 'fixology' ),
		array(
			'exclude' => array( 'align', 'el_class', 'css_animation', 'link', 'css' ),
		)
	),
	
	array(
		
		array(
			"type"       => "dropdown",
			"heading"    => esc_html__("Box Hover Effect",'fixology'),
			"param_name" => "hover",
			"value"      => array(
				esc_html__('None','fixology')                   => 'none',
				esc_html__('Float Shadow','fixology')           => 'hvr-float-shadow',
				esc_html__('Grow','fixology')                   => 'hvr-grow',
				esc_html__('Shrink','fixology')                 => 'hvr-shrink',
				esc_html__('Pulse','fixology')                  => 'hvr-pulse',
				esc_html__('Pulse Grow','fixology')             => 'hvr-pulse-grow',
				esc_html__('Pulse Shrink','fixology')           => 'hvr-pulse-shrink',
				esc_html__('Push','fixology')                   => 'hvr-push',
				esc_html__('Pop','fixology')                    => 'hvr-pop',
				esc_html__('Bounce In','fixology')              => 'hvr-bounce-in',
				esc_html__('Bounce Out','fixology')             => 'hvr-bounce-out',
				esc_html__('Rotate','fixology')                 => 'hvr-rotate',
				esc_html__('Grow Rotate','fixology')            => 'hvr-grow-rotate',
				esc_html__('Float','fixology')                  => 'hvr-float',
				esc_html__('Sink','fixology')                   => 'hvr-sink',
				esc_html__('Bob','fixology')                    => 'hvr-bob',
				esc_html__('Hang','fixology')                   => 'hvr-hang',
				esc_html__('Skew','fixology')                   => 'hvr-skew',
				esc_html__('Skew Forward','fixology')           => 'hvr-skew-forward',
				esc_html__('Wobble Horizontal','fixology')      => 'hvr-wobble-horizontal',
				esc_html__('Wobble Vertical','fixology')        => 'hvr-wobble-vertical',
				esc_html__('Wobble To Bottom Right','fixology') => 'hvr-wobble-to-bottom-right',
				esc_html__('Wobble To Top Right','fixology')    => 'hvr-wobble-to-top-right',
				esc_html__('Wobble Top','fixology')             => 'hvr-wobble-top',
				esc_html__('Wobble Bottom','fixology')          => 'hvr-wobble-bottom',
				esc_html__('Wobble Skew','fixology')            => 'hvr-wobble-skew',
				esc_html__('Buzz','fixology')                   => 'hvr-buzz',
				esc_html__('Buzz Out','fixology')               => 'hvr-buzz-out',
			),
			"description"      => esc_html__("Select hover effect.",'fixology') . ' <a href="' . esc_url('http://ianlunn.github.io/Hover/') . '" target="_blank">' . esc_html__("Click here to view sample animation of each.",'fixology') . '</a>',
			'std'              => 'none',
			'group'            => esc_html__( 'Animations', 'fixology' ),
		),
		array(
			"type"       => "dropdown",
			"heading"    => esc_html__("Box Hover Effect: For Background Image",'fixology'),
			"param_name" => "hover_bg_effect",
			"value"      => array(
				esc_html__('None','fixology')                    => '',
				esc_html__('Zoom-in image','fixology')           => 'zoomin',
				esc_html__('Zoom-out image','fixology')          => 'zoomout',
			),
			"description" => esc_html__("Select hover effect for background image only.",'fixology') . '<br>' . '<strong>' . esc_html__("NOTE:",'fixology') . '</strong>' . esc_html__("This will work with \"Top Center\", \"Top Left\" and \"Top Right\" icon position only.",'fixology'),
			'dependency'  => array(
				'element'   => 'add_icon',
				'value'     => array( 'top-center', 'top-left', 'top-right' ),
			),
			'std'              => '',
			'group'            => esc_html__( 'Animations', 'fixology' ),
		),
		array(
			'type'             => 'dropdown',
			'heading'          => esc_html__( 'Rotate background on hover?', 'fixology' ),
			'param_name'       => 'hover_bg_rotate',
			'description'      => esc_html__( 'Rotate background on hover?', 'fixology' ),
			"value"      => array(
				esc_html__('No','fixology')  => 'no',
				esc_html__('Yes','fixology') => 'yes',
			),
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'dependency'  => array(
				'element'        => 'hover_bg_effect',
				//'value_not_equal_to' => ''
				'value'          => array('zoomin','zoomout'),
			),
			'group'            => esc_html__( 'Animations', 'fixology' ),
		),
		array(
			'type'             => 'dropdown',
			'heading'          => esc_html__( 'Blur background on hover?', 'fixology' ),
			'param_name'       => 'hover_bg_blur',
			'description'      => esc_html__( 'Blur background on hover?', 'fixology' ),
			"value"      => array(
				esc_html__('No','fixology')  => 'no',
				esc_html__('Yes','fixology') => 'yes',
			),
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'dependency'  => array(
				'element'            => 'hover_bg_effect',
				'value'          => array('zoomin','zoomout'),
			),
			'group'            => esc_html__( 'Animations', 'fixology' ),
		),
		
		array(
			"type"			=> "dropdown",
			"heading"		=> esc_html__("Box Hover Effect: Select content animation style",'fixology'),
			"param_name"	=> "box_effect",
			"value"			=> array(
				esc_html__('None','fixology')                => '',
				esc_html__('Animate from bottom','fixology') => 'one',
			),
			"description"	=> esc_html__("Select hover effect for content only.",'fixology') . '<br>' . '<strong>' . esc_html__("NOTE:",'fixology') . '</strong> ' . esc_html__("This will work with \"Top Center\", \"Top Left\" and \"Top Right\" icon position only.",'fixology'),
			'std'			=> '',
			'group'			=> esc_html__( 'Animations', 'fixology' ),
			'dependency'	=> array(
				'element'		=> 'add_icon',
				'value'			=> array('top-center','top-left','top-right'),
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

// Changing modifying, adding extra options
$i = 0;
foreach( $params as $param ){
	
	$param_name = (isset($param['param_name'])) ? $param['param_name'] : '' ;
	
	if( $param_name == 'txt_align' ){ // Remove Text Alignment option
		$params[$i]['dependency'] = array(  // This is to hide this option forever
			'element'  => 'btn_style',
			'value'    => array( 'abcdefg' )
		);
		
	} else if( $param_name == 'btn_style' ){
		$style = $param['value'];
		if( is_array($style) ){
			$params[$i]['std']   = 'text';
		}
		
	} else if( $param_name == 'btn_color' ){
		$colors = $param['value'];
		if( is_array($colors) ){
			$params[$i]['std']   = 'skincolor';
		}
	
	} else if( $param_name == 'color' ){
		$colors = $param['value'];
		if( is_array($colors) ){
			$colors = array_reverse($colors);
			$colors[__( 'Skin color', 'fixology' )] = 'skincolor';
			$params[$i]['value'] = array_reverse($colors);
			$params[$i]['std']   = 'grey';
		}
	
	} else if( $param_name == 'btn_shape' ){
		$params[$i]['dependency'] = array(
			'element'            => 'btn_style',
			'value_not_equal_to' => array( 'text' )
		);
	} else if( $param_name == 'btn_title' ){
		$params[$i]['std'] = esc_html__( 'Read More', 'fixology' );
	
	} else if( $param_name == 'btn_add_icon' ){
		$params[$i]['std']   = false;
	
	} else if( $param_name == 'i_background_style' ){
		$params[$i]['value'][__( 'None', 'fixology' )] = 'none';
		$params[$i]['std'] = 'none';
		
	} else if( $param_name == 'i_background_color' ){
		$params[$i]['value'][__( 'None', 'fixology' )] = 'none';
		$params[$i]['std'] = 'grey';
		$params[$i]['dependency'] = array(
			'element'               => 'i_background_style',
			'value_not_equal_to'    => array( 'none' )
		);
		
	} else if( $param_name == 'separator' ){
		$params[$i]['dependency'] = array(
			'element'  => 'i_type',
			'value'    => array( 'notavailablevalue' ),
		);
	
	
	} else if( $param_name == 'i_size' ){
		$params[$i]['std'] = 'md';
		
	} else if( $param_name == 'h2_use_theme_fonts' ){
		$params[$i]['std'] = 'yes';
		
	} else if( $param_name == 'h4_use_theme_fonts' ){
		$params[$i]['std'] = 'yes';
		
	} else if( $param_name == 'h2_google_fonts' ){
		$params[$i]['std'] = 'font_family:Arimo%3Aregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal';
	
	} else if( $param_name == 'h4_google_fonts' ){
		$params[$i]['std'] = 'font_family:Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic|font_style:300%20light%20regular%3A300%3Anormal';
	
	} else if( $param_name == 'css_animation' ){
		$params[$i]['group'] = esc_html__( 'Animations', 'fixology' );
	
	}
	
	$i++;
} // Foreach


global $tm_sc_params_servicebox;
$tm_sc_params_servicebox = $params;




vc_map( array(
	'name'        => esc_html__( 'ThemeMount Service Box', 'fixology' ),
	'base'        => 'tm-servicebox',
	"icon"        => "icon-thememount-vc",
	'category'    => esc_html__( 'ThemeMount Special Elements', 'fixology' ),
	'params'      => $params,
) );