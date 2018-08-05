<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// SHORTCODE GENERATOR OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options       = array();

// -----------------------------------------
// Basic Shortcode Examples                -
// -----------------------------------------
$options[]     = array(
  'title'      => 'ThemeMount Special Shortcodes',
  'shortcodes' => array(
	
	//Site Tagline
	array(
		'name'      => 'tm-site-tagline',
		'title'     => esc_html__('Site Tagline', 'fixology'),
		'fields'    => array(
			array(
				'type'    => 'content',
				'content' => esc_html__('This shortcode will show the Site Tagline. There are no options for this shortcode. So just click Insert Shortcode button below to add this shortcode. ', 'fixology'),
			),
      ),
    ),
	// Site Title
	array(
		'name'      => 'tm-site-title',
		'title'     => esc_html__('Site Title', 'fixology'),
		'fields'    => array(

			array(
				'type'    => 'content',
				'content' => esc_html__('This shortcode will show the Site Title. There are no options for this shortcode. So just click Insert Shortcode button below to add this shortcode.', 'fixology'),
			),

      ),
    ),
	// Site URL
	array(
		'name'      => 'tm-site-url',
		'title'     => esc_html__('Site URL', 'fixology'),
		'fields'    => array(

			array(
				'type'    => 'content',
				'content' => esc_html__('This shortcode will show the Site URL. There are no options for this shortcode. So just click Insert Shortcode button below to add this shortcode.', 'fixology'),
			),

      ),
    ),
	// Site LOGO
	array(
		'name'      => 'tm-logo',
		'title'     => esc_html__('Site Logo', 'fixology'),
		'fields'    => array(

			array(
				'type'    => 'content',
				'content' => esc_html__('This shortcode will show the Site Logo. There are no options for this shortcode. So just click Insert Shortcode button below to add this shortcode.', 'fixology'),
			),

      ),
    ),
	// Current Year
	array(
		'name'      => 'tm-current-year',
		'title'     => esc_html__('Current Year', 'fixology'),
		'fields'    => array(

			array(
				'type'    => 'content',
				'content' => esc_html__('This shortcode will show the Current Year. There are no options for this shortcode. So just click Insert Shortcode button below to add this shortcode.', 'fixology'),
			),

      ),
    ),
	// Footer Menu
	array(
		'name'      => 'tm-footermenu',
		'title'     => esc_html__('Footer Menu', 'fixology'),
		'fields'    => array(

			array(
				'type'    => 'content',
				'content' => esc_html__('This shortcode will show the Footer Menu. There are no options for this shortcode. So just click Insert Shortcode button below to add this shortcode.', 'fixology'),
			),

      ),
    ),
	// Skin Color
	array(
		'name'      => 'tm-skincolor',
		'title'     => esc_html__('Skin Color', 'fixology'),
		'fields'    => array(

			array(
				'type'   	 => 'content',
				'content'	 => esc_html__('This shortcode will show the Text in Skin Color', 'fixology'),
			),
			 array(
				'id'         => 'content',
				'type'       => 'text',
				'title'      => esc_html__('Skin Color Text', 'fixology'),
				'after'   	 => '<div class="cs-text-muted"><br>'.esc_html__('The content is this box will be shown in Skin Color', 'fixology').'</div>', 
			),

      ),
    ),
	// Dropcaps
	array(
		'name'      => 'tm-dropcap',
		'title'     => esc_html__('Dropcap', 'fixology'),
		'fields'    => array(
			array(
				'type'   	 => 'content',
				'content'	 => esc_html__('This will show text in dropcap style.', 'fixology'),
			),
			array(
				'id'        	=> 'style',
				'title'     	=> esc_html__('Style', 'fixology'),
				'type'      	=> 'image_select',
				'options'    	=> array(
									''        => get_template_directory_uri() .'/inc/images/dropcap1.png',
									'square'  => get_template_directory_uri() .'/inc/images/dropcap2.png',
									'rounded' => get_template_directory_uri() .'/inc/images/dropcap3.png',
									'round'   => get_template_directory_uri() .'/inc/images/dropcap4.png',
								),
				'default'     	=> ''
			),
			array(
				'id'         	=> 'bgcolor',
				'type'       	=> 'select',
				'title'     	=> esc_html__('Background Color', 'fixology'),
				'options'    	=> array(
									'white' 	    => esc_html__('White', 'fixology'),
									'skincolor'     => esc_html__('Skin Color', 'fixology'),
									'grey' 			=> esc_html__('Grey', 'fixology'),
									'dark' 		    => esc_html__('Dark', 'fixology'),
								),
				'class'         => 'chosen',
				'default'     	=> 'skincolor'
			),
			array(
				'id'         	=> 'color',
				'type'       	=> 'select',
				'title'     	=> esc_html__('Color', 'fixology'),
				'options'    	=> array(
									'skincolor'     => esc_html__('Skin Color', 'fixology'),
									'white' 	    => esc_html__('White', 'fixology'),
									'grey' 			=> esc_html__('Grey', 'fixology'),
									'dark' 		    => esc_html__('Dark', 'fixology'),
								),
				'class'         => 'chosen',
				'default'     	=> 'skincolor'
			),
			 array(
				'id'         	=> 'content',
				'type'      	=> 'text',
				'title'     	=> esc_html__('Text', 'fixology'),
				'after'   	 	=> '<div class="cs-text-muted"><br>'.esc_html__('The Letter in this box will be shown Dropcapped', 'fixology').'</div>', 
			),

      ),
    ),
	
	
 
  ),
);



CSFramework_Shortcode_Manager::instance( $options );
