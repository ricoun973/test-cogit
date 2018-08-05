<?php


/**
 * Adding extra parameters in VC
 */
if( !function_exists('tm_vc_add_extra_param') ){
function tm_vc_add_extra_param(){
	
	// VC ROW : Text Color
	vc_add_param( 'vc_row', array(
		"type"        => "dropdown",
		"heading"     => esc_html__("Text Color", "fixology"),
		"description" => esc_html__("Select text color.", "fixology"),
		"param_name"  => "tm_textcolor",
		"weight"      => 1,
		"value"       => array(
			esc_html__("Default", "fixology")     => "",
			esc_html__("Dark Color", "fixology")  => "dark",
			esc_html__("White Color", "fixology") => "white",
			esc_html__("Skin Color", "fixology")  => "skincolor",
		),
	));
	
	// VC ROW : Background Color
	vc_add_param( 'vc_row', array(
		"type"        => "dropdown",
		"heading"     => esc_html__("Background Color", "fixology"),
		"description" => esc_html__("Select Background Color. If you select color and also select background Video or background Image than the color will be overlay with some opacity.", "fixology"),
		"param_name"  => "tm_bgcolor",
		"weight"      => 1,
		"value"       => array(
			esc_html__("Default (From Design Options tab)", "fixology") => "",
			esc_html__('Dark grey color as background color', 'fixology') => 'darkgrey',
			esc_html__('Grey color as background color', 'fixology')      => 'grey',
			esc_html__('White color as background color', 'fixology')     => 'white',
			esc_html__('Skincolor color as background color', 'fixology') => 'skincolor',
			
		),
	));
	
	// VC ROW : Background Image Position
	vc_add_param( 'vc_row', array(
		"type"        => "dropdown",
		"heading"     => esc_html__("Background Image Position", "fixology"),
		"description" => esc_html__("Select Background Image Position", "fixology"),
		"param_name"  => "tm_bgimage_position",
		"weight"      => 1,
		"value"       => array(
			esc_html__('left top', "fixology")      => 'left_top',
			esc_html__('left center', "fixology")   => 'left_center',
			esc_html__('left bottom', "fixology")   => 'left_bottom',
			esc_html__('right top', "fixology")     => 'right_top',
			esc_html__('right center', "fixology")  => 'right_center',
			esc_html__('right bottom', "fixology")  => 'right_bottom',
			esc_html__('center center', "fixology") => 'center_center',
			esc_html__('center top', "fixology")    => 'center_top',
			esc_html__('center bottom', "fixology") => 'center_bottom'
		),
		"std"  => "center_center",
	));
	
	// VC ROW : Break column in Tablet
	vc_add_param( 'vc_row', array(
		"type"        => "dropdown",
		"heading"     => esc_html__("Break column in Responsive", "fixology"),
		"description" => esc_html__("Break columns (set in one row) in Desktop or Tablet screens. This is useful if your content breaks (or not fit) due to wider content in columns.", "fixology"),
		"param_name"  => "break_in_responsive",
		"weight"      => 1,
		"value"       => array(
			esc_html__("None (default)", "fixology")									=> "",
			esc_html__('Break in small desktop (under 1200 pixel size)', "fixology")	=> '1200',
			esc_html__('Break in tablet (under 992 pixel size)', "fixology")			=> '991',
		),
	));	
	
	// VC COLUMN : Text Color
	vc_add_param( 'vc_column', array(
		"type"        => "dropdown",
		"heading"     => esc_html__("Text Color", "fixology"),
		"description" => esc_html__("Select text color", "fixology"),
		"param_name"  => "tm_textcolor",
		"weight"      => 1,
		"value"       => array(
			esc_html__("Default", "fixology")     => "",
			esc_html__("Dark Color", "fixology")  => "dark",
			esc_html__("White Color", "fixology") => "white",
			esc_html__("Skin Color", "fixology")  => "skincolor",
		),
	));
	
	// VC COLUMN : Background Color
	vc_add_param( 'vc_column', array(
		"type"        => "dropdown",
		"heading"     => esc_html__("Background Color", "fixology"),
		"description" => esc_html__("Select Background Color. If you select color and also select background Image than the color will be overlay with some opacity", "fixology"),
		"param_name"  => "tm_bgcolor",
		"weight"      => 1,
		"value"       => array(
			esc_html__("Default (From Design Options tab)", "fixology") => "",
			esc_html__('Dark grey color as background color', 'fixology') => 'darkgrey',
			esc_html__('Grey color as background color', 'fixology')      => 'grey',
			esc_html__('White color as background color', 'fixology')     => 'white',
			esc_html__('Skincolor color as background color', 'fixology') => 'skincolor',
			
		),
	));
	
	// VC COLUMN : Lower padding in responsive mode
	vc_add_param( 'vc_column', array(
		"type"        => "dropdown",
		"heading"     => esc_html__("Reduce spacing (Padding) from left/right area in responsive mode", "fixology"),
		"description" => esc_html__("This is useful if you set extra padding via 'Design Options' tab. This will reset spacing (padding) from left/right area for the column.", "fixology"),
		"param_name"  => "reduce_extra_padding",
		"weight"      => 1,
		"value"       => array(
			esc_html__("None (default)", "fixology")                       		   => "",
			esc_html__('Reset in small desktop (under 1200 pixel size)', "fixology") => '1200',
			esc_html__('Reset in tablet (under 992 pixel size)', "fixology")         => '991',
		),
	));
	
	
	
	
	
	// VC COLUMN : Exapand Column BG to left or right
	vc_add_param( 'vc_column', array(
		"type"        => "dropdown",
		"heading"     => esc_html__("Exapand Column Background", "fixology"),
		"description" => esc_html__("Exapand Column BG to left or right. This will expand the Background image/color visibility to border of the browser border.", "fixology"),
		"param_name"  => "tm_col_bg_expand",
		"weight"      => 1,
		"value"       => array(
			esc_html__("No expand (default)", "fixology")                => "",
			esc_html__('Exapand Column background to left', 'fixology')  => 'left',
			esc_html__('Exapand Column background to right', 'fixology') => 'right',
		),
	));
	
}
}
add_action( 'vc_after_init', 'tm_vc_add_extra_param' );










/**
 *  Adding skincolor in some elements
 */
if( !function_exists('thememount_vc_add_skin_color') ){
function thememount_vc_add_skin_color() {
	
	// Add vc element in which you like to add skincolor
	$vc_element_array = array(
		array( 'vc_tta_accordion', 'color' ),
		array( 'vc_tta_tour', 'color' ),
		array( 'vc_tta_tabs', 'color' ),
		array( 'vc_toggle', 'color' ),
	);
	
	// looping vc elements and adding skincolor
	foreach( $vc_element_array as $vc_element ){
		$element = $vc_element[0];
		$option  = $vc_element[1];
		$param   = WPBMap::getParam( $element, $option );
		$colors  = $param['value'];
		if( is_array($colors) ){
			$colors = array_reverse($colors);
			$colors[__( '[Skin color]', 'fixology' )] = 'skincolor';
			$param['value']      = array_reverse($colors);
		}
		vc_update_shortcode_param( $element, $param );
	}
	
}
}
add_action( 'vc_after_init', 'thememount_vc_add_skin_color', 2 ); /* Note: here we are using vc_after_init because WPBMap::GetParam and mutateParame are available only when default content elements are "mapped" into the system */



/**
 *  Modify default values for VC elements
 */
if( !function_exists('thememount_vc_change_default_values') ){
function thememount_vc_change_default_values() {
	
	$vc_element_array = array(
		array( 'vc_tta_accordion',	'shape',	'square' ),
		array( 'vc_tta_accordion',	'no_fill',	'true' ),
		array( 'vc_tta_accordion',	'color',	'white' ),
		array( 'vc_tta_accordion',	'gap',		'10' ),
		array( 'vc_tta_tabs',		'shape',	'square' ),
		array( 'vc_tta_tabs',		'no_fill_content_area',	'true' ),
		array( 'vc_tta_tabs',		'color',	'skincolor' ),
		
		// style="outline" shape="square" controls_size="lg" active_section="1" no_fill_content_area="true" el_class="tm-tourtab-style1"
		array( 'vc_tta_tour',		'style',	'outline' ),
		array( 'vc_tta_tour',		'shape',	'square' ),
		array( 'vc_tta_tour',		'controls_size',	'lg' ),
		array( 'vc_tta_tour',		'active_section',	'1' ),
		array( 'vc_tta_tour',		'no_fill_content_area',	'true' ),
		array( 'vc_tta_tour',		'el_class',	'tm-tourtab-style1' ),
		
		
		
	);
	
	
	// looping vc elements and adding skincolor
	foreach( $vc_element_array as $vc_element ){
		$element = $vc_element[0];
		$option  = $vc_element[1];
		$new_std = $vc_element[2];
	
		$param			= WPBMap::getParam( $element, $option );
		$param['std']	= $new_std;
		vc_update_shortcode_param( $element, $param );
	
	}
	

	
	
}
}
add_action( 'vc_after_init', 'thememount_vc_change_default_values' );






/********* Add extra Google Fonts in Custom Heading's Google Font list - Working Code Sample **********/
if( !function_exists('thememount_add_google_fonts') ){
function thememount_add_google_fonts($fonts_list){
	
	$return = $fonts_list;
	
	// reverse array so new font will be at top
	$return = array_reverse($return);
	
	// *** Adding: Source Sans Pro
	$Source_Sans_Pro->font_family = esc_attr('Source Sans Pro');
	$Source_Sans_Pro->font_styles = "200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,800,800italic,900,900italic";
    $Source_Sans_Pro->font_types = "200 light regular:200:normal,200 light italic:200:italic,300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,600 bold regular:600:normal,600 bold italic:600:italic,700 bold regular:700:normal,700 bold italic:700:italic,800 bold regular:800:normal,800 bold italic:800:italic,900 bold regular:900:normal,900 bold italic:900:italic";
	
	// Adding "Source Sans Pro" font in return variable
	$return[] = $Source_Sans_Pro;
	
	
	
	
	// *** Adding: Nunito Sans
	$Nunito_Sans->font_family = esc_attr('Nunito Sans');
	$Nunito_Sans->font_styles = "200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,800,800italic,900,900italic";
    $Nunito_Sans->font_types = "200 light regular:200:normal,200 light italic:200:italic,300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,600 bold regular:600:normal,600 bold italic:600:italic,700 bold regular:700:normal,700 bold italic:700:italic,800 bold regular:800:normal,800 bold italic:800:italic,900 bold regular:900:normal,900 bold italic:900:italic";
	
	// Adding "Nunito Sans" font in return variable
	$return[] = $Nunito_Sans;
	
	
	

	
	// *** Removing: Montserrat font as VC is already providing but with less options
	foreach( $return as $key=>$val ){
		if( !empty($val->font_family) && $val->font_family == 'Montserrat' ){
			unset( $return[$key] );
		}
	}
	// *** Adding: Montserrat
	$Montserrat->font_family = esc_attr('Montserrat');
	$Montserrat->font_styles = "100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i";
    $Montserrat->font_types = "100 Thin:100:normal,100 Thin Italic:100:normal,200 Extra-Light:200:normal,200 Extra-light Italic:200:italic,300 Light:300:normal,300 Light Italic:300:italic,400 Regular:400:normal,400 Regular Italic:400:italic,500 Medium:500:normal,500 Medium Italic:500:italic,600 Semi-bold:600:normal,600 Semi-bold Italic:600:italic,700 Bold:700:normal,700 Bold Italic:700:italic,800 Extra-bold:800:normal,800 Extra-bold Italic:800:italic,900 Black:900:normal,900 Black Italic:900:italic";
	
	// Adding "Nunito Sans" font in return variable
	$return[] = $Montserrat;
	
	
	
	
	// again reverse
	$return = array_reverse($return);
	
	return $return;
}
}
add_filter('vc_google_fonts_get_fonts_filter', 'thememount_add_google_fonts');
/*************************************************************************************/






