<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.


// Get current theme name and vesion
$tm_theme = wp_get_theme();
$tm_theme_name = $tm_theme->get( 'Name' );
$tm_theme_ver  = $tm_theme->get( 'Version' );


// Getting all theme options again if variable is not defined
if( empty($fixology_theme_options) || !is_array($fixology_theme_options) ){
	$fixology_theme_options = get_option('fixology_theme_options');
}

// variables
$team_member_title          = ( !empty($fixology_theme_options['team_type_title']) ) ? esc_attr($fixology_theme_options['team_type_title']) : esc_attr('Team Members') ;
$team_member_title_singular = ( !empty($fixology_theme_options['team_type_title_singular']) ) ? esc_attr($fixology_theme_options['team_type_title_singular']) : esc_attr('Team Member') ;
$team_group_title           = ( !empty($fixology_theme_options['team_group_title']) ) ? esc_attr($fixology_theme_options['team_group_title']) : esc_attr('Team Groups') ;
$team_group_title_singular  = ( !empty($fixology_theme_options['team_group_title_singular']) ) ? esc_attr($fixology_theme_options['team_group_title_singular']) : esc_attr('Team Group') ;

$pf_title               = ( !empty($fixology_theme_options['pf_type_title']) ) ? esc_attr($fixology_theme_options['pf_type_title']) : esc_attr('Portfolio') ;
$pf_title_singular      = ( !empty($fixology_theme_options['pf_type_title_singular']) ) ? esc_attr($fixology_theme_options['pf_type_title_singular']) : esc_attr('Portfolio') ;
$pf_cat_title           = ( !empty($fixology_theme_options['pf_cat_title']) ) ? esc_attr($fixology_theme_options['pf_cat_title']) : esc_attr('Portfolio Categories') ;
$pf_cat_title_singular  = ( !empty($fixology_theme_options['pf_cat_title_singular']) ) ? esc_attr($fixology_theme_options['pf_cat_title_singular']) : esc_attr('Portfolio Category') ;




/**
 *  FRAMEWORK SETTINGS
 */
$tm_framework_settings = array(
	'menu_title' 	  => esc_html__('Fixology Options', 'fixology'),
	'menu_type'  	  => 'menu',
	'menu_slug'  	  => 'thememount-theme-options',
	'ajax_save'  	  => true,
	'show_reset_all'  => false,
	'framework_title' => $tm_theme_name.'  <small>'.$tm_theme_ver.'</small>',
	'menu_position'   => 2, // See below comment for proper number
	/*
	Default: bottom of menu structure #Default: bottom of menu structure
	2 – Dashboard
	4 – Separator
	5 – Posts
	10 – Media
	15 – Links
	20 – Pages
	25 – Comments
	59 – Separator
	60 – Appearance
	65 – Plugins
	70 – Users
	75 – Tools
	80 – Settings
	99 – Separator
	For the Network Admin menu, the values are different: #For the Network Admin menu, the values are different:
	2 – Dashboard
	4 – Separator
	5 – Sites
	10 – Users
	15 – Themes
	20 – Plugins
	25 – Settings
	30 – Updates
	99 – Separator
	*/
);



/**
 *  FRAMEWORK OPTIONS
 */
$tm_framework_options = array();


// Layout Settings
$tm_framework_options[] = array(
	'name'   => 'layout_settings', // like ID
	'title'  => esc_html__('Layout Settings', 'fixology'),
	'icon'   => 'fa fa-square-o',
	'fields' => array( // begin: fields
		
		array(
			'type'    	=> 'heading',
			'content'		=> esc_html__('Specify theme pages layout, the skin coloring and background', 	'fixology'),
        ),
		array(
			'id'      => 'skincolor',
			'type'    => 'thememount_skin_color',
			'title'   => esc_html__( 'Select Skin Color', 'fixology' ),
			'default' => '#ed1b24',
			'options' => array(
				'Red'				=> '#ed1b24', /* Default skin color */
				'Science Blue'		=> '#0073cc', 
				'Di Serria'			=> '#d5a353',
				'Tan Hide'			=> '#f9a861',
				'Red Orange'		=> '#ff4229',
				'Atlantis'			=> '#9fbb33',
				'Mountain Meadow'	=> '#18c47c',
				'Selective Yellow'	=> '#ffb901',
				'Azure Radiance'	=> '#0095eb',
				'Corn'				=> '#e8ca00',
				

				
			),
			'rgba'    => false,
        ),
		array(
			'id'     	=> 'tm_one_click_demo_setup', //thememount_one_click_demo_content
			'type'    	=> 'thememount_one_click_demo_content',//thememount_one_click_demo_content
			'title'  	=> esc_html__('Demo Content Setup', 'fixology'),
        ),
		array(
			'id'        => 'layout',
			'type'      => 'radio',
			'title'     => esc_html__('Pages Layout', 'fixology'), 
			'options'  	=> array(
							'wide'     => esc_html__('Wide', 'fixology'),
							'boxed'    => esc_html__('Boxed', 'fixology'),
							'framed'   => esc_html__('Framed', 'fixology'),
							'rounded'  => esc_html__('Rounded', 'fixology'),
							'fullwide' => esc_html__('Full Wide', 'fixology'),
						),
			'default'   => 'wide',
			'after'   	=> '<small>'.esc_html__('Specify the layout for the pages', 'fixology').'</small>',
        ),
		array(
			'id'        => 'full_wide_elements',
			'type'      => 'checkbox',
			'title'     => esc_html__('Select Elements for Full Wide View (in above option)', 'fixology'),
			'options'   => array(
					'floatingbar' => esc_html__('Floating Bar', 'fixology'),
					'topbar'      => esc_html__('Topbar', 'fixology'),
					'header'      => esc_html__('Header', 'fixology'),
					'content'     => esc_html__('Content Area', 'fixology'),
					'footer'      => esc_html__('Footer', 'fixology'),
					),
			'default'    => array( 'header' ),
			'after'    	 => '<small>'.esc_html__('Select elements that you want to show in full-wide view', 'fixology').'</small>',
			'dependency' => array( 'layout_fullwide', '==', 'true' ),
		),
		
		array(
			'type'      	=> 'heading',
			'content'     	=> esc_html__('Background Settings', 'fixology'),
			'after'  		=> '<small>'.esc_html__('Set below background options. Background settings will be applied to Boxed layout only', 'fixology').'</small>',
		),
		array(
			'id'     		=> 'global_background',
			'type'   		=> 'thememount_background',
			'title' 		=> esc_html__('Body Background Properties', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Set background for main body. This is for main outer body background. For "Boxed" layout only.', 'fixology').'</div>',
			'default'		=> array(
					'color'		=> '#f8f8f8',
			),
			'output'        => 'body',
        ),
		array(
			'id'     		=> 'inner_background',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('Content Area Background Properties', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Set background for content area', 'fixology').'</div>',
			'default' 	=> array(
							'color' 	=> '#ffffff',
			),
			'output'        => 'body #main',
        ),
		
		array(
			'type'        => 'heading',
			'content'     => esc_html__('Pre-loader Image', 'fixology'),
			'after'  		=> '<small>'.esc_html__('Select pre-loader image for the site. This will work on desktop, mobile and tablet devices', 'fixology').'</small>',
		),
		array(
			'id'          => 'loaderimg',
			'type'        => 'image_select',
			'title'       => esc_html__('Page-loader Image', 'fixology'), 
			'options'     => array(
					''   	=> get_template_directory_uri() . '/images/loader-none.gif',
					'1'   	=> get_template_directory_uri() . '/images/loader1.gif',
					'2'   	=> get_template_directory_uri() . '/images/loader2.gif',
					'3'   	=> get_template_directory_uri() . '/images/loader3.gif',
					'4'   	=> get_template_directory_uri() . '/images/loader4.gif',
					'5'   	=> get_template_directory_uri() . '/images/loader5.gif',
					'6'   	=> get_template_directory_uri() . '/images/loader6.gif',
					'7'   	=> get_template_directory_uri() . '/images/loader7.gif',
					'8'   	=> get_template_directory_uri() . '/images/loader8.gif',
					'9'   	=> get_template_directory_uri() . '/images/loader9.gif',
					'10'   	=> get_template_directory_uri() . '/images/loader10.gif',
					'11'   	=> get_template_directory_uri() . '/images/loader11.gif',
					'12'   	=> get_template_directory_uri() . '/images/loader12.gif',
					'13'   	=> get_template_directory_uri() . '/images/loader13.gif',
					'14'   	=> get_template_directory_uri() . '/images/loader14.gif',
					'15'   	=> get_template_directory_uri() . '/images/loader15.gif',
					'16'   	=> get_template_directory_uri() . '/images/loader16.gif',
					'17'   	=> get_template_directory_uri() . '/images/loader17.gif',
					'18'   	=> get_template_directory_uri() . '/images/loader18.gif',
					'custom'=> get_template_directory_uri() . '/images/loader-custom.gif',
				),
			'radio'       => true,
			'default'     => '',
			'after'   	  => '<div class="cs-text-muted">' . esc_html__('Please select site pre-loader image.', 'fixology') . '<br/><br/><em><strong>' . esc_html__( 'NOTE:', 'fixology' ) . '</strong> ' . esc_html__( 'Please note that if you uploaded pre-loader image (in below option) than this pre-defined loader image will be ignored.', 'fixology' ) . '</em></div>',
        ),
		array(
			'id'       		=> 'loaderimage_custom',
			'type'      	=> 'image',
			'title'    		=> esc_html__('Upload Page-loader Image', 'fixology'),
			'add_title' 	=> 'Select/Upload Page-loader image',
			'after'  		=> '<div class="cs-text-muted">' . esc_html__('Custom page-loader image that you want to show. You can create animated GIF image from your logo from Animizer website.', 'fixology') . ' <a href="'. esc_url('http://animizer.net/en/animate-static-image') .'" target="_blank">' . esc_html__('Click here to go to Anmizer website.', 'fixology') . '</a><br/><br/><em><strong>' . esc_html__('NOTE:', 'fixology') . '</strong>' . esc_html__('Please note that if you selected image here than the pre-defined loader image (in above option) will be ignored.', 'fixology') . '</em></div>',
			'dependency'    => array( 'loaderimg_custom', '==', 'true' ),
        ),
		array(
			'type'      => 'heading',
			'content'   => esc_html__('One Page Website', 'fixology'),
			'after'  	=> '<small>'.esc_html__('Options for One Page website', 'fixology').'</small>',
		),
		array(
			'id'      	=> 'one_page_site',
			'type'    	=> 'switcher',
			'title'   	=> esc_html__('One Page Site', 'fixology'),
			'default' 	=> false,
			'label'   	=> '<br><div class="cs-text-muted">'.esc_html__('Set this option "ON" if your site is one page website', 'fixology').' <a target="_blank" href="#">'.esc_html__('Click here to know more about how to setup one-page site.', 'fixology').'</a></div>',
        ),
		
	),
	
);


// hide_demo_content_option
$hide_demo_content_option = false;
if( isset($fixology_theme_options['hide_demo_content_option']) ){
	$hide_demo_content_option = $fixology_theme_options['hide_demo_content_option'];
}

if( $hide_demo_content_option == true ){
	// Removing one click demo setup option
	$tm_framework_options_inner = $tm_framework_options[0];
	foreach( $tm_framework_options_inner['fields'] as $index => $option ){
		if( !empty($option['type']) && $option['type'] == 'thememount_one_click_demo_content' ){
			unset($tm_framework_options[0]['fields'][$index]);
		}
	}
}










// Font Settings
$tm_framework_options[] = array(
	'name'   => 'font_settings', // like ID
	'title'  => esc_html__('Font Settings', 'fixology'),
	'icon'   => 'fa fa-text-height',
	'fields' => array( // begin: fields
		array(
			'type'    	=> 'heading',
			'content'	=> esc_html__('Font Settings', 'fixology'),
			'after'  	=> '<small>'.esc_html__('General Element Fonts', 'fixology').'</small>',
        ),
		array(
			'id'             => 'general_font',
			'type'           => 'thememount_typography', 
			'title'          => esc_html__('General Font', 'fixology'),
			'chosen'         => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'backup-family'  => true, // Select a backup non-google font in addition to a google font
			'font-size'      => true,
			'color'          => true,
			'variant'        => true, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-align'     => false,  // This is still not available
			'text-transform' => true,
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => true,
			'output'         => 'body', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px - Currently not working
			'subtitle'       => esc_html__('Select font family, size etc. for H2 heading tag.', 'fixology'),
			'default'        => array (
				'family'         => 'Raleway',
				'backup-family'  => 'Tahoma, Geneva, sans-serif',
				'variant'        => 'regular',
				'font-size'      => '14',
				'line-height'    => '24',
				'letter-spacing' => '1',
				'color'          => '#646464',
				'all-varients'   => 'on',
				'font'           => 'google',
			),
		),
		
		
		array(
			'id'        => 'link-color',
			'type'      => 'radio',
			'title'     => esc_html__('Select Link Color', 'fixology'), 
			'options'  	=> array(
				'default'   => esc_html__('Dark color as normal color and Skin color as hover color', 'fixology'),
				'darkhover' => esc_html__('Skin color as normal color and Dark color as hover color', 'fixology'),
				'custom'    => esc_html__('Custom color (select below)', 'fixology'),
				
			),
			'default'   => 'default',
			'std'       => 'default',
			'after'   	=> '<div class="cs-text-muted">' . esc_html__('Select normal link color effect. This will change normal text link color and hover color', 'fixology') . '</div>',
        ),
		array(
			'id'         => 'link-color-regular',
			'type'       => 'color_picker',
			'title'      => esc_html__( 'Links Color Option (Regular)', 'fixology' ),
			'default'    => '#000',
			'dependency' => array( 'link-color_custom', '==', 'true' ),
        ),
		array(
			'id'         => 'link-color-hover',
			'type'       => 'color_picker',
			'title'      => esc_html__( 'Links Color Option (Hover)', 'fixology' ),
			'default'    => '#ed1b24',
			'dependency' => array( 'link-color_custom', '==', 'true' ),
        ),
		
		
		
		array(
			'id'             => 'h1_heading_font',
			'type'           => 'thememount_typography', 
			'title'          => esc_html__('H1 Heading Font', 'fixology'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'         => 'h1', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'         => 'Montserrat',
				'backup-family'  => 'Arial, Helvetica, sans-serif',
				'variant'        => '500',
				'font-size'      => '40',
				'line-height'    => '43',
				'letter-spacing' => '2',
				'color'          => '#171717',
				'font'           => 'google',
			),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select font family, size etc. for H1 heading tag.', 'fixology').'</div>',
		),
		array(
			'id'          => 'h2_heading_font',
			'type'        => 'thememount_typography', 
			'title'       => esc_html__('H2 Heading Font', 'fixology'),
			'chosen'      => false,
			'text-align'  => false,
			'google'      => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup' => true, // Select a backup non-google font in addition to a google font
			'subsets'     => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'      => 'h2', // An array of CSS selectors to apply this font style to dynamically
			'units'       => 'px', // Defaults to px
			'default'     => array(
				'family'         => 'Montserrat',
				'backup-family'  => 'Arial, Helvetica, sans-serif',
				'variant'        => '500',
				'font-size'      => '35',
				'line-height'    => '40',
				'letter-spacing' => '2',
				'color'          => '#171717',
				'font'           => 'google',
			),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select font family, size etc. for H2 heading tag.', 'fixology').'</div>',
		),
		array(
			'id'          => 'h3_heading_font',
			'type'        => 'thememount_typography',
			'chosen'      => false,
			'title'       => esc_html__('H3 Heading Font', 'fixology'),
			'text-align'  => false,
			'google'      => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup' => true, // Select a backup non-google font in addition to a google font
			'subsets'     => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'         => 'h3', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'         => 'Montserrat',
				'backup-family'  => 'Arial, Helvetica, sans-serif',
				'variant'        => '500',
				'font-size'      => '30',
				'line-height'    => '35',
				'letter-spacing' => '2',
				'color'          => '#171717',
				'font'           => 'google',
			),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select font family, size etc. for H3 heading tag.', 'fixology').'</div>',
		),
		array(
			'id'          => 'h4_heading_font',
			'type'        => 'thememount_typography', 
			'title'       => esc_html__('H4 Heading Font', 'fixology'),
			'chosen'      => false,
			'text-align'  => false,
			'google'      => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup' => true, // Select a backup non-google font in addition to a google font
			'subsets'     => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'      => 'h4', // An array of CSS selectors to apply this font style to dynamically
			'units'       => 'px', // Defaults to px
			'default'     => array(
				'family'         => 'Montserrat',
				'backup-family'  => 'Arial, Helvetica, sans-serif',
				'variant'        => '500',
				'font-size'      => '25',
				'line-height'    => '30',
				'letter-spacing' => '2',
				'color'          => '#171717',
				'font'           => 'google',
			),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select font family, size etc. for H4 heading tag.', 'fixology').'</div>',
		),
		array(
			'id'          => 'h5_heading_font',
			'type'        => 'thememount_typography', 
			'title'       => esc_html__('H5 Heading Font', 'fixology'),
			'chosen'      => false,
			'text-align'  => false,
			'google'      => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup' => true, // Select a backup non-google font in addition to a google font
			'subsets'     => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'      => 'h5', // An array of CSS selectors to apply this font style to dynamically
			'units'       => 'px', // Defaults to px
			'default'     => array(
				'family'         => 'Montserrat',
				'backup-family'  => 'Arial, Helvetica, sans-serif',
				'variant'        => '500',
				'font-size'      => '20',
				'line-height'    => '25',
				'letter-spacing' => '2',
				'color'          => '#171717',
				'font'           => 'google',
			),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select font family, size etc. for H5 heading tag.', 'fixology').'</div>',
		),
		
		array(
			'id'          => 'h6_heading_font',
			'type'        => 'thememount_typography', 
			'title'       => esc_html__('H6 Heading Font', 'fixology'),
			'chosen'      => false,
			'text-align'  => false,
			'google'      => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup' => true, // Select a backup non-google font in addition to a google font
			'subsets'     => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'      => 'h6', // An array of CSS selectors to apply this font style to dynamically
			'units'       => 'px', // Defaults to px
			'default'     => array(
				'family'         => 'Montserrat',
				'backup-family'  => 'Arial, Helvetica, sans-serif',
				'variant'        => '500',
				'font-size'      => '15',
				'line-height'    => '20',
				'letter-spacing' => '2',
				'color'          => '#171717',
				'font'           => 'google',
			),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select font family, size etc. for H6 heading tag.', 'fixology').'</div>',
		),
		
		
		
		array(
			'type'        => 'heading',
			'content'     => esc_html__('Heading and Subheading Font Settings', 'fixology'),
			'after'  	  => '<small>'.esc_html__('Select font settings for Heading and subheading of different title elements like Blog Box, Portfolio Box etc', 'fixology').'</small>',
		),
		
		array(
			'id'          => 'heading_font',
			'type'        => 'thememount_typography', 
			'title'       => esc_html__('Heading Font', 'fixology'),
			'chosen'      => false,
			'text-align'  => false,
			'google'      => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup' => true, // Select a backup non-google font in addition to a google font
			'subsets'     => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'         => '.tm-element-heading-wrapper .tm-vc_general .tm-vc_cta3_content-container .tm-vc_cta3-content .tm-vc_cta3-content-header h2', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'         => 'Montserrat',
				'backup-family'  => 'Arial, Helvetica, sans-serif',
				'variant'        => '700',
				'font-size'      => '29',
				'line-height'    => '35',
				'letter-spacing' => '2.5',
				'color'          => '#171717',
				'font'           => 'google',			),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select font family, size etc. for heading title', 'fixology').'</div>',
		),
		array(
			'id'          => 'subheading_font',
			'type'        => 'thememount_typography', 
			'title'       => esc_html__('Subheading Font', 'fixology'),
			'chosen'      => false,
			'text-align'  => false,
			'google'      => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup' => true, // Select a backup non-google font in addition to a google font
			'subsets'     => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,							
			'output'         => '.tm-element-heading-wrapper .tm-vc_general .tm-vc_cta3_content-container .tm-vc_cta3-content .tm-vc_cta3-content-header h4, .tm-vc_general.tm-vc_cta3.tm-vc_cta3-color-transparent.tm-cta3-only .tm-vc_cta3-content .tm-vc_cta3-headers h4', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'         => 'Raleway',
				'backup-family'  => 'Arial, Helvetica, sans-serif',
				'variant'        => 'regular',
				'font-size'      => '20',
				'line-height'    => '27',
				'letter-spacing' => '1.5',
				'color'          => '#636363',
				'font'           => 'google',
			),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select font family, size etc. for heading title', 'fixology').'</div>',
		),
		array(
			'id'          => 'content_font',
			'type'        => 'thememount_typography', 
			'title'       => esc_html__('Content Font', 'fixology'),
			'chosen'      => false,
			'text-align'  => false,
			'google'      => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup' => true, // Select a backup non-google font in addition to a google font
			'subsets'     => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'         => '.tm-element-heading-wrapper .tm-vc_general.tm-vc_cta3 .tm-vc_cta3-content p', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'         => 'Raleway',
				'backup-family'  => 'Arial, Helvetica, sans-serif',
				'variant'        => 'regular',
				'font-size'      => '16',
				'line-height'    => '24',
				'letter-spacing' => '1',
				'color'          => '#646464',
				'font'           => 'google',
			),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select font family, size etc. for content', 'fixology').'</div>',
		),
		array(
			'type'        => 'heading',
			'content'     => esc_html__('Specific Element Fonts', 'fixology'),
			'after'  	  => '<small>'.esc_html__('Select Font for specific elements', 'fixology').'</small>',
		),
		array(
			'id'          => 'widget_font',
			'type'        => 'thememount_typography', 
			'title'       => esc_html__('Widget Title Font', 'fixology'),
			'chosen'      => false,
			'text-align'  => false,
			'google'      => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup' => true, // Select a backup non-google font in addition to a google font
			'subsets'     => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'         => 'body .widget .widget-title, body .widget .widgettitle, #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item > h4.mega-block-title, .portfolio-description h2, .thememount-portfolio-details h2, .thememount-portfolio-related h2', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'         => 'Montserrat',
				'backup-family'  => 'Arial, Helvetica, sans-serif',
				'variant'        => '500',
				'text-transform' => 'uppercase',
				'font-size'      => '18',
				'line-height'    => '23',
				'letter-spacing' => '1',
				'color'          => '#171717',
				'font'           => 'google',
			),
			'after'  	=> '<div class="cs-text-muted"><br>'.esc_html__('Select font family, size etc. for widget title', 'fixology').'</div>',
		),
		
		
		array(
			'id'             => 'button_font',
			'type'           => 'thememount_typography', 
			'title'          => esc_html__('Button Font', 'fixology'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'font-size'      => false,
			'line-height'    => false,
			'text-transform' => true,
			'color'          => false,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'         => '.woocommerce button.button, .woocommerce-page button.button, input, .tm-vc_btn, .tm-vc_btn3, .woocommerce-page a.button, .button, .wpb_button, button, .woocommerce input.button, .woocommerce-page input.button, .tp-button.big, .woocommerce #content input.button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce-page #content input.button, .woocommerce-page #respond input#submit, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .thememount-post-readmore a', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'         => 'Montserrat',
				'backup-family'  => 'Arial, Helvetica, sans-serif',
				'variant'        => 'regular',
				'letter-spacing' => '1',
				'font'           => 'google',
			),
			'after'  	=> '<div class="cs-text-muted"><br>'.esc_html__('This fonts will be applied to all buttons in this site', 'fixology').'</div>',
		),
		array(
			'id'             => 'element_title',
			'type'           => 'thememount_typography', 
			'title'          => esc_html__('Element Title Font', 'fixology'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'line-height'    => false,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => false, // Defaults to false
			'color'          => false,
			'all-varients'   => false,
			'output'         => '.wpb_tabs_nav a.ui-tabs-anchor, body .wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header a, .vc_progress_bar .vc_label, .vc_tta.vc_general .vc_tta-tab > a, .vc_toggle_title > h4', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'        => 'Montserrat',
				'backup-family' => 'Arial, Helvetica, sans-serif',
				'variant'       => '500',
				'font-size'     => '18',
				'font'          => 'google',
			),
			'after'  	=> '<div class="cs-text-muted"><br>'.esc_html__('This fonts will be applied to Tab title, Accordion Title and Progress Bar title text', 'fixology').'</div>',
		),	
	)
);


// Floating Bar Settings
$tm_framework_options[] = array(
	'name'   => 'floatingbar_settings', // like ID
	'title'  => esc_html__('Floating Bar Settings', 'fixology'),
	'icon'   => 'fa fa-arrow-circle-o-up',
	'fields' => array( // begin: fields
		array(
			'type'    		=> 'heading',
			'content'		=> esc_html__('Floating Bar Settings', 'fixology'),
        ),
		array(
			'id'     		=> 'fbar_show',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Show Floating Bar', 'fixology'),
			'default' 		=> false,
			'label'  		=> '<div class="cs-text-muted">'.esc_html__('Show or hide Floating Bar', 'fixology').'</div>',
        ),
		array(
			'id'      => 'fbar-position',
			'type'    => 'radio',
			'title'   => esc_html__('Floating bar position', 'fixology'),
			'options' => array(
				'default' => esc_html__('Top','fixology'),
				'right'   => esc_html__('Right', 'fixology'),
			),
			'default'    => 'default',
			'after'      => '<div class="cs-text-muted"><br>'.esc_html__('Position for Floating bar', 'fixology').'</div>',
			'dependency' => array( 'fbar_show', '==', 'true' ),
        ),
		array(
			'id'            => 'fbar_bg_color',
			'type'          => 'select',
			'title'         =>  esc_html__('Floating Bar Background Color', 'fixology'),
			'options'  		=> array(
								'darkgrey'   => esc_html__('Dark grey', 'fixology'),
								'grey'       => esc_html__('Grey', 'fixology'),
								'white'      => esc_html__('White', 'fixology'),
								'skincolor'  => esc_html__('Skincolor', 'fixology'),
								'custom'     => esc_html__('Custom Color', 'fixology'),
							),
			'default'       => 'darkgrey',
			'dependency' 	=> array( 'fbar_show', '==', 'true' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select predefined color for Floating Bar background color', 'fixology').'</div>',
        ),
		array(
			'id'      		=> 'fbar_background',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('Floating Bar Background Properties', 'fixology' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Set background for Floating bar. You can set color or image and also set other background related properties', 'fixology').'</div>',
			'dependency' 	=> array( 'fbar_show', '==', 'true' ),
			'default'		=> array(
				'image'			=> get_template_directory_uri() . '/images/floatingbar-bg.jpg',
				'size'			=> 'cover',
				'color'			=> 'rgba(130,36,227,0.74)',
				'position'      => 'center center',
			),
			'output' 	    => '.thememount-fbar-box-w',
        ),
		array(
			'id'            => 'fbar_text_color',
			'type'          => 'select',
			'title'         =>  esc_html__('Floating Bar Text Color', 'fixology'),
			'options' 		=> array(
				'white'			=> esc_html__('White', 'fixology'),
				'dark'			=> esc_html__('Dark', 'fixology'),
				'custom'		=> esc_html__('Custom color', 'fixology'),
			),
			'default'		=> 'white',
			'dependency' 	=> array( 'fbar_show', '==', 'true' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select "Dark" color if you are going to select light color in above option', 'fixology').'</div>',
        ),
		array(
			'id'     		 => 'fbar_text_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_html__('Floating Bar Custom Color for text', 'fixology' ),
			'default'		 => '#dd3333',
			'dependency'  	 => array( 'fbar_show|fbar_text_color', '==|==', 'true|custom' ),//Multiple dependency
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('Custom background color for Floating Bar', 'fixology').'</div>',
        ),
		
		array(
			'type'    	 => 'heading',
			'content'	 => esc_html__('Floating Bar Open/Close Button Settings', 'fixology'),
			'after'	 	 => '<small>' . esc_html__('Settings for Floating Bar Open/Close Button', 'fixology') . '</small>',
			'dependency' => array( 'fbar_show', '==', 'true' ),
        ),
		array(
			'id'      => 'fbar_handler_icon',
			'type'    => 'thememount_iconpicker',
			'title'   => esc_html__('Open Link Icon', 'fixology' ),
			'default' => array(
				'library'				=> 'themify',
				'library_fontawesome'	=> 'fa fa-arrow-down',
				'library_linecons'		=> 'vc_li vc_li-bubble',
				'library_themify'		=> 'themifyicon ti-menu',
			),
			'dependency' => array( 'fbar_show', '==', 'true' ),
        ),
		array(
			'id'      => 'fbar_handler_icon_close',
			'type'    => 'thememount_iconpicker',
			'title'   => esc_html__('Close Link Icon', 'fixology' ),
			'default' => array(
				'library'				=> 'themify',
				'library_fontawesome'	=> 'fa fa-arrow-up',
				'library_linecons'		=> 'vc_li vc_li-bubble',
				'library_themify'		=> 'themifyicon ti-close',
			),
			'dependency' => array( 'fbar_show', '==', 'true' ),
        ),
		
		array(
			'id'            => 'fbar_icon_color',
			'type'          => 'select',
			'title'         =>  esc_html__('Floating Bar Open/Close Icon Color', 'fixology'),
			'options' 		=> array(
					'dark'       => esc_html__('Dark grey', 'fixology'),
					'grey'       => esc_html__('Grey', 'fixology'),
					'white'      => esc_html__('White', 'fixology'),
					'skincolor'  => esc_html__('Skincolor', 'fixology'),
					'custom'     => esc_html__('Custom Color', 'fixology'),
							),
			'default'		=> 'white',
			'dependency' 	=> array( 'fbar_show', '==', 'true' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select "Dark" color if you are going to select light color in above option.', 'fixology').'</div>',
        ),
		array(
			'id'     		 => 'fbar_icon_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_html__('Floating Bar Custom Color for Open/Close Icon', 'fixology' ),
			'default'		 => '#3a72ff',
			'dependency'  	 => array( 'fbar_show|fbar_icon_color', '==|==', 'true|custom' ), //Multiple dependency
			'after'  		 => '<div class="cs-text-muted"><br>' . esc_html__('Floating Bar Custom Color for Open/Close Icon', 'fixology') . '</div>',
        ),
		
		array(
			'type'    	 => 'heading',
			'content'	 => esc_html__('Floating Bar Widget Settings', 'fixology'),
			'after'		 => '<small>' . esc_html__('Settings for Floating Bar Widgets', 'fixology') . '</small>',
			'dependency' => array( 'fbar_show|fbar-position_default', '==|==', 'true|true' ),
        ),
		array(
			'id'			=> 'fbar_widget_column_layout',
			'type' 			=> 'image_select',//thememount_pre_color_packages
			'title'			=> esc_html__('Floating Bar Widget Columns', 'fixology'),
			'options'      	=> array(
					'12'      => get_template_directory_uri() . '/inc/images/footer_col_12.png',
					'6_6'     => get_template_directory_uri() . '/inc/images/footer_col_6_6.png',
					'4_4_4'   => get_template_directory_uri() . '/inc/images/footer_col_4_4_4.png',
					'3_3_3_3' => get_template_directory_uri() . '/inc/images/footer_col_3_3_3_3.png',
					'8_4'     => get_template_directory_uri() . '/inc/images/footer_col_8_4.png',
					'4_8'     => get_template_directory_uri() . '/inc/images/footer_col_4_8.png',
					'6_3_3'   => get_template_directory_uri() . '/inc/images/footer_col_6_3_3.png',
					'3_3_6'   => get_template_directory_uri() . '/inc/images/footer_col_3_3_6.png',
					'8_2_2'   => get_template_directory_uri() . '/inc/images/footer_col_8_2_2.png',
					'2_2_8'   => get_template_directory_uri() . '/inc/images/footer_col_2_2_8.png',
					'6_2_2_2' => get_template_directory_uri() . '/inc/images/footer_col_6_2_2_2.png',
					'2_2_2_6' => get_template_directory_uri() . '/inc/images/footer_col_2_2_2_6.png',
			),
			'default'		=> '6_6',
			'dependency' 	=> array( 'fbar_show|fbar-position_default', '==|==', 'true|true' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select Floating Bar Column layout View for widgets.', 'fixology').'</div>',
        ),
		
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('Hide Floating Bar in Small Devices', 'fixology'),
			'after'  	  	 => '<small>'.esc_html__('Hide Floating Bar in small devices like mobile, tablet etc.', 'fixology').'</small>',
			'dependency'     => array('fbar_show','==','true'),
		),
		array(
			'id'       => 'floatingbar-breakpoint',
			'type'     => 'radio',
			'title'    => esc_html__('Show/Hide Floating Bar in Responsive Mode', 'fixology'), 
			'subtitle' => esc_html__('Change options for responsive behaviour of Floating Bar.', 'fixology'),
			'options'  => array(
				'all'      => esc_html__('Show in all devices','fixology'),
				'1200'     => esc_html__('Show only on large devices','fixology').' <small>'.esc_html__('show only on desktops (>1200px)', 'fixology').'</small>',
				'992'      => esc_html__('Show only on medium and large devices','fixology').' <small>'.esc_html__('show only on desktops and Tablets (>992px)', 'fixology').'</small>',
				'768'      => esc_html__('Show on some small, medium and large devices','fixology').' <small>'.esc_html__('show only on mobile and Tablets (>768px)', 'fixology').'</small>',
				'custom'   => esc_html__('Custom (select pixel below)', 'fixology'),
			),
			'dependency' => array('fbar_show','==','true'),
			'default'    => '1200'
		),
		array(
			'id'            => 'floatingbar-breakpoint-custom',
			'type'          => 'number',
			'title'         => esc_html__( 'Custom screen size to hide Floating Bar (in pixel)', 'fixology' ),
			'subtitle'      => esc_html__( 'Select after how many pixels the Floating Bar will be hidden.', 'fixology' ),
			'after'         => esc_html(' px'),
			'default'       => '1200',
			'dependency' 	=> array( 'fbar_show|floatingbar-breakpoint_custom', '==|==', 'true|true' ),
		),
		
		
	)
);


// Topbar Settings
$tm_framework_options[] = array(
	'name'   => 'topbar_settings', // like ID
	'title'  => esc_html__('Topbar Settings', 'fixology'),
	'icon'   => 'fa fa-tasks',
	'fields' => array( // begin: fields
		array(
			'type'    		=> 'heading',
			'content'		=> esc_html__('Topbar settings', 'fixology'),
        ),
		array(
			'id'     		=> 'show_topbar',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Show Topbar', 'fixology'),
			'default' 		=> false,
			'label'  		=> '<div class="cs-text-muted">'.esc_html__('Show or hide Topbar', 'fixology').'</div>',
        ),
		array(
			'id'            => 'topbar_bg_color',
			'type'          => 'select',
			'title'         =>  esc_html__('Topbar Background Color', 'fixology'),
			'options'  		=> array(
								'darkgrey'   => esc_html__('Dark grey', 'fixology'),
								'grey'       => esc_html__('Grey', 'fixology'),
								'white'      => esc_html__('White', 'fixology'),
								'skincolor'  => esc_html__('Skincolor', 'fixology'),
								'custom'     => esc_html__('Custom Color', 'fixology'),
							),
			'default'       => 'darkgrey',
			'dependency' 	=> array( 'show_topbar', '==', 'true' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select predefined color for Topbar background color', 'fixology').'</div>',
        ),
		array(
			'id'     		 => 'topbar_bg_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_html__('Topbar Custom Background Color', 'fixology' ),
			'default'		 => '#1d1d20',
			'dependency'  	 => array( 'show_topbar|topbar_bg_color', '==|==', 'true|custom' ),//Multiple dependency
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('Custom background color for Topbar', 'fixology').'</div>',
        ),
		array(
			'id'            => 'topbar_text_color',
			'type'          => 'select',
			'title'         =>  esc_html__('Topbar Text Color', 'fixology'),
			'options'  => array(
							'white'     => esc_html__('White', 'fixology'),
							'dark'      => esc_html__('Dark', 'fixology'),
							'skincolor' => esc_html__('Skin Color', 'fixology'),
							'custom'    => esc_html__('Custom color', 'fixology'),
						),
			'default'       => 'white',
			'dependency' 	=> array( 'show_topbar', '==', 'true' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select "Dark" color if you are going to select light color in above option', 'fixology').'</div>',
        ),
		array(
			'id'     		 => 'topbar_text_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_html__('Topbar Custom Color for text', 'fixology' ),
			'default'		 => 'rgba(255, 255, 255, 0.75)',
			'dependency'  	 => array( 'show_topbar|topbar_text_color', '==|==', 'true|custom' ),//Multiple dependency
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('Custom color for Topbar Text', 'fixology').'</div>',
        ),
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('Topbar Content Options', 'fixology'),
			'after'  	  	 => '<small>'.esc_html__('Content for Topbar', 'fixology').'</small>',
			'dependency' 	 => array( 'show_topbar', '==', 'true' ),
		),
		array(
			'id'       		 => 'topbar_left_text',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_html__('Topbar Left Content', 'fixology'),
			'shortcode'		 => true,
			'dependency' 	 => array( 'show_topbar', '==', 'true' ),
			'desc'  		 => '<div class="cs-text-muted"><br>'.esc_html__('This content will appear on Left side of Topbar area', 'fixology').'</div>',
			'default'        => urldecode('%3Cdiv+style%3D%22font-size%3A+13px%22%3EYour+Trusted+24+Hours+HandyMan+Service+Provider%21%3C%2Fdiv%3E'),
        ),
		array(
			'id'       		 => 'topbar_right_text',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_html__('Topbar Right Content', 'fixology'),
			'shortcode'		 => true,
			'dependency' 	 => array( 'show_topbar', '==', 'true' ),
			'desc'  	 	 => '<div class="cs-text-muted"><br>'.esc_html__('This content will appear on Right side of Topbar area', 'fixology').'</div>',
			'after'  	 	 => '<div class="cs-text-muted"><br>'.esc_html__('HTML tags and shortcodes are allowed', 'fixology') . sprintf( esc_html__('%1$s Click here to know more %2$s about shortcode description','fixology') , '<a href="'. esc_url('http://fixology.kwayythemes.com/documentation/shortcodes.html') .'" target="_blank">' , '</a>'  ).'</div>',
			'default'        => '[tm-social-links tooltip="no"]',
        ),
		
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('Hide Topbar Bar in Small Devices', 'fixology'),
			'after'  	  	 => '<small>'.esc_html__('Hide Topbar Bar in small devices like mobile, tablet etc.', 'fixology').'</small>',
			'dependency'     => array('show_topbar','==','true'),
		),
		array(
			'id'       => 'topbar-breakpoint',
			'type'     => 'radio',
			'title'    => esc_html__('Show/Hide Topbar Bar in Responsive Mode', 'fixology'), 
			'subtitle' => esc_html__('Change options for responsive behaviour of Topbar Bar.', 'fixology'),
			'options'  => array(
				'all'      => esc_html__('Show in all devices','fixology'),
				'1200'     => esc_html__('Show only on large devices','fixology').' <small>'.esc_html__('show only on desktops (>1200px)', 'fixology').'</small>',
				'992'      => esc_html__('Show only on medium and large devices','fixology').' <small>'.esc_html__('show only on desktops and Tablets (>992px)', 'fixology').'</small>',
				'768'      => esc_html__('Show on some small, medium and large devices','fixology').' <small>'.esc_html__('show only on mobile and Tablets (>768px)', 'fixology').'</small>',
				'custom'   => esc_html__('Custom (select pixel below)', 'fixology'),
			),
			'dependency' => array('show_topbar','==','true'),
			'default'    => '1200'
		),
		array(
			'id'            => 'topbar-breakpoint-custom',
			'type'          => 'number',
			'title'         => esc_html__( 'Custom screen size to hide Topbar (in pixel)', 'fixology' ),
			'subtitle'      => esc_html__( 'Select after how many pixels the Topbar will be hidden.', 'fixology' ),
			'after'         => esc_html(' px'),
			'default'       => '1200',
			'dependency' 	=> array( 'show_topbar|topbar-breakpoint_custom', '==|==', 'true|true' ),
		),
		
		
	)
);


// Titlebar Settings
$tm_framework_options[] = array(
	'name'   => 'titlebar_settings', // like ID
	'title'  => esc_html__('Titlebar Settings', 'fixology'),
	'icon'   => 'fa fa-align-justify',
	'fields' => array( // begin: fields
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('Titlebar Background Options', 'fixology'),
			'after'  	  	 => '<small>'.esc_html__('Background options for Titlebar area', 'fixology').'</small>',
		),
		array(
			'id'            => 'titlebar_bg_color',
			'type'          => 'select',
			'title'         =>  esc_html__('Titlebar Background Color', 'fixology'),
			'options'  => array(
							'darkgrey'   => esc_html__('Dark grey', 'fixology'),
							'grey'       => esc_html__('Grey', 'fixology'),
							'white'      => esc_html__('White', 'fixology'),
							'skincolor'  => esc_html__('Skincolor', 'fixology'),
							'custom'     => esc_html__('Custom Color', 'fixology'),
			),
			'default'       => 'skincolor',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select predefined color for Titlebar background color', 'fixology').'</div>',
        ),
		array(
			'id'      		=> 'titlebar_background',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('Titlebar Background Image', 'fixology' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Set background for Title bar. You can set color or image and also set other background related properties', 'fixology').'</div>',
			'color'			=> true,
			'default'		=> array(
				'image'			=> get_template_directory_uri() . '/images/titlebar-bg.jpg',
				'repeat'		=> 'no-repeat',
				'position'		=> 'center bottom',
				'size'			=> 'cover',
				'color'			=> 'rgba(3,13,25,0.94)',
			),
			'output' 	    => 'div.tm-titlebar-wrapper',
			'output_bglayer'    => true,  // apply color to bglayer class div inside this , default: true
			'color_dropdown_id' => 'titlebar_bg_color',   // color dropdown to decide which color
        ),
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('Titlebar Font Settings', 'fixology'),
			'after'  	  	 => '<small>'.esc_html__('Font Settings for different elements in Titlebar area', 'fixology').'</small>',
		),
		array(
			'id'            => 'titlebar_text_color',
			'type'          => 'select',
			'title'         =>  esc_html__('Titlebar Text Color', 'fixology'),
			'options'  => array(
							'white'  => esc_html__('White', 'fixology'),
							'dark'   => esc_html__('Dark', 'fixology'),
							'custom' => esc_html__('Custom Color', 'fixology'),
						),
			'default'       => 'white',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select "Dark" color if you are going to select light color in above option', 'fixology').'</div>',
        ),
		array(
			'id'             => 'titlebar_heading_font',
			'type'           => 'thememount_typography', 
			'title'          => esc_html__('Heading Font', 'fixology'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'color'          => true,
			'all-varients'   => false,
			'output'         => '.tm-titlebar h1.entry-title, .tm-titlebar-textcolor-custom .tm-titlebar-main .entry-title', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'         => 'Montserrat',
				'backup-family'  => 'Arial, Helvetica, sans-serif',
				'variant'        => '700',
				'text-transform' => 'uppercase',
				'font-size'      => '38',
				'line-height'    => '45',
				'letter-spacing' => '3',
				'color'          => '#dd9933',
				'font'           => 'google',
			),
			'after'			=> '<div class="cs-text-muted"><br>'.esc_html__('Select font family, size etc. for heading in Titlebar', 'fixology').'</div>',
		),
		array(
			'id'             => 'titlebar_subheading_font',
			'type'           => 'thememount_typography', 
			'title'          => esc_html__('Sub-heading Font', 'fixology'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'color'          => true,
			'all-varients'   => false,
			'output'         => '.tm-titlebar .entry-subtitle, .tm-titlebar-textcolor-custom .tm-titlebar-main .entry-subtitle', // An array of CSS selectors to apply this font style to dynamically
			'units'			 => 'px', // Defaults to px
			'default'        => array(
				'family'         => 'Raleway',
				'backup-family'  => 'Arial, Helvetica, sans-serif',
				'variant'        => 'regular',
				'font-size'      => '18',
				'line-height'    => '25',
				'letter-spacing' => '2',
				'color'          => '#dd9933',
				'font'           => 'google',
			),
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('Select font family, size etc. for sub-heading in Titlebar', 'fixology').'</div>',
		),
		array(
			'id'             => 'titlebar_breadcrumb_font',
			'type'           => 'thememount_typography', 
			'title'          => esc_html__('Breadcrumb Font', 'fixology'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'color'          => true,
			'all-varients'   => false,
			'output'         => '.tm-titlebar .breadcrumb-wrapper, .tm-titlebar .breadcrumb-wrapper a', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'         => 'Open Sans',
				'backup-family'  => 'Arial, Helvetica, sans-serif',
				'variant'        => '600',
				'text-transform' => 'uppercase',
				'font-size'      => '13',
				'line-height'    => '20',
				'letter-spacing' => '1.5',
				'color'          => '#eeee22',
				'font'           => 'google',
			),
			'after'  	=> '<div class="cs-text-muted"><br>'.esc_html__('Select font family, size etc. for breadcrumbs in Titlebar', 'fixology').'</div>',
		),
		
		
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('Titlebar Content Options', 'fixology'),
			'after'  	  	 => '<small>'.esc_html__('Content options for Titlebar area', 'fixology').'</small>',
		),
		array(
			'id'            => 'titlebar_view',
			'type'          => 'select',
			'title'         =>  esc_html__('Titlebar Text Align', 'fixology'),
			'options'       => array(
							'default'  => esc_html__('All Center (default)', 'fixology'),
							'left'     => esc_html__('Title Left / Breadcrumb Right', 'fixology'),
							'right'    => esc_html__('Title Right / Breadcrumb Left', 'fixology'),
							'allleft'  => esc_html__('All Left', 'fixology'),
							'allright' => esc_html__('All Right', 'fixology'),
			),
			'default'       => 'default',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select text align in Titlebar', 'fixology').'</div>',
        ),
		array(
			'id'     		 => 'titlebar_height',
			'type'   		 => 'number',
			'title'          => esc_html__( 'Titlebar Height', 'fixology' ),
			'after'  	  	 => ' px<br><div class="cs-text-muted">'.esc_html__('Set height of the Titlebar. In pixel only', 'fixology').'</div>',
			'default'		 => '300',
        ),
		array(
			'id'        	=> 'breadcrumb_on_bottom',
			'type'      	=> 'checkbox',
			'title'     	=> esc_html__('Show Breadcrumb on bottom of Titlebar area', 'fixology'),
			'options'   	=> array(
							'yes'  => esc_html__('YES', 'fixology'),
			),
			'default'   	=> array( 'yes'	),
			'dependency'  	 => array( 'titlebar_view', 'any', 'default,allleft,allright' ),//Multiple dependency
			'after'    		=> '<div class="cs-text-muted"><br>'.esc_html__('Select this option if you like to show breadcrumbs on bottom of Titlebar area. This option will only work when Titlebar Text Align option above is set to (All Center, All Left or All Right)', 'fixology').'</div>',
		),
		array(
			'id'            => 'titlebar_hide_breadcrumb',
			'type'          => 'select',
			'title'         =>  esc_html__('Hide Breadcrumb', 'fixology'),
			'options'  => array(
							'no'   => esc_html__('NO, show the breadcrumb', 'fixology'),
							'yes'  => esc_html__('YES, Hide the Breadcrumb', 'fixology'),
			),
			'default'       => 'no',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('You can show or hide the breadcrumb', 'fixology').'</div>',
		),
		
		
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('Titlebar Extra Options', 'fixology'),
			'after'  	  	 => '<small>'.esc_html__('Change settings for some extra options in Titlebar', 'fixology').'</small>',
		),
		array(
			'id'      => 'adv_tbar_catarc',
			'type'    => 'text',
			'title'   => esc_html__('Post Category "Category Archives:" Label Text', 'fixology'),
			'default' => esc_html__('Category Archives: ', 'fixology'),
		),
		array(
			'id'      => 'adv_tbar_tagarc',
			'type'    => 'text',
			'title'   => esc_html__('Post Tag "Tag Archives:" Label Text', 'fixology'),
			'default' => esc_html__('Tag Archives: ', 'fixology'),
		),
		array(
			'id'      => 'adv_tbar_postclassified',
			'type'    => 'text',
			'title'   => esc_html__('Post Taxonomy "Posts classified under:" Label Text', 'fixology'),
			'default' => esc_html__('Posts classified under: ', 'fixology'),
		),
		array(
			'id'      => 'adv_tbar_authorarc',
			'type'    => 'text',
			'title'   => esc_html__('Post Author "Author Archives:" Label Text', 'fixology'),
			'default' => esc_html__('Author Archives: ', 'fixology'),
		),

	)
);


// Header Settings
$tm_framework_options[] = array(
	'name'   => 'header_settings', // like ID
	'title'  => esc_html__('Header Settings', 'fixology'),
	'icon'   => 'fa fa-arrow-up',
	'fields' => array( // begin: fields
	
		array(
			'type'    		=> 'heading',
			'content'		=> esc_html__('Header Settings', 'fixology'),
        ),
		array(
			'id'     		 => 'header_height',
			'type'   		 => 'number',
			'title'          => esc_html__('Header Height (in pixel)', 'fixology' ),
			'after'  	  	 => '<div class="cs-text-muted"><br>'.esc_html__('You can set height of header area from here', 'fixology').'</div>',
			'default'		 => '100',
        ),
		array(
			'id'            => 'header_bg_color',
			'type'          => 'select',
			'title'         =>  esc_html__('Header Background Color', 'fixology'),
			'options'  => array(
							'darkgrey'   => esc_html__('Dark grey', 'fixology'),
							'grey'       => esc_html__('Grey', 'fixology'),
							'white'      => esc_html__('White', 'fixology'),
							'skincolor'  => esc_html__('Skincolor', 'fixology'),
							'custom'     => esc_html__('Custom Color', 'fixology'),
			),
			'default'       => 'white',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select predefined color for Header background color', 'fixology').'</div>',
        ),
		array(
			'id'     		 => 'header_bg_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_html__('Header Custom Background Color', 'fixology' ),
			'default'		 => '#dd9933',
			'dependency'  	 => array( 'header_bg_color', '==', 'custom' ),//Multiple dependency
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('Custom background color for Header', 'fixology').'</div>',
        ),
		array(
			'id'      		=> 'vertical_header_background',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('Header Background Properties', 'fixology' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Set background for Header. You can set color or image and also set other background related properties', 'fixology').'</div>',
			'dependency'  	=> array( 'header_style', 'any', 'classic-vertical' ),
			'default'		=> array(
				'image'			=> '',
				'size'			=> 'cover',
				'color'			=> 'rgba(0,0,0,0.01)',
			),
			'output' 	    => '.tm-header-style-classic-vertical .site-header',
        ),
		array(
			'id'     		 => 'responsive_header_bg_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_html__('Responsive Header Custom Background Color', 'fixology' ),
			'default'		 => 'rgba(255, 255, 255, 1)',
			'dependency'  	 => array( 'header_bg_color|header_style', '==|any', 'custom|classic-overlay,centerlogo-overlay,toplogo-overlay,classic-box-overlay,classic-box-overlay-rtl,classic-overlay-rtl,infostack-overlay,infostack-overlay-rtl' ),//Multiple dependency
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('Custom background color for Header in responsive mode only. Like Mobile, tablet etc small screen devices.', 'fixology').'</div>',
        ),
		array(
			'id'            => 'header_responsive_icon_color',
			'type'          => 'select',
			'title'         =>  esc_html__('Header Responsive Icon Color', 'fixology'),
			'options'  => array(
							'dark'   => esc_html__('Dark', 'fixology'),
							'white'  => esc_html__('White', 'fixology'),
			),
			'default'       => 'white',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select color for responsive menu icon, cart icon, search icon. This is becuase PHP code cannot understand if you selected dark or light color as background. Will work in responsive only.', 'fixology').'</div>',
			'dependency'    => array( 'header_bg_color', '==', 'custom' ),//Multiple dependency
        ),
		array(
          'id'      	 	 => 'logotype',
          'type'     		 => 'radio',
          'title'    		 => esc_html__('Logo type', 'fixology'), 
          'options' 		 => array( 
								'text' => esc_html__('Logo as Text', 'fixology'), 
								'image' => esc_html__('Logo as Image', 'fixology') 
							),
          'default'  		 => 'image',
          'after'  			 => '<div class="cs-text-muted"><br>'.esc_html__('Specify the type of logo. It can Text or Image', 'fixology').'</div>',
        ),
		array(
			'id'     		 => 'logotext',
			'type'    		 => 'text',
			'title'   		 => esc_html__('Logo Text', 'fixology'),
			'default' 		 => 'Fixology',
			'dependency'  	 => array( 'logotype_text', '==', 'true' ),
			'after'  			 => '<div class="cs-text-muted"><br>'.esc_html__('Enter the text to be used instead of the logo image', 'fixology').'</div>',
		),
		array(
			'id'             => 'logo_font',
			'type'           => 'thememount_typography', 
			'title'          => esc_html__('Logo Font', 'fixology'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'color'          => true,
			'all-varients'   => false,
			'output'         => '.headerlogo a.home-link', // An array of CSS selectors to apply this font style to dynamically
			'default'        => array(
				'family'		 => 'Arimo',
				'backup-family'	 => 'Arial, Helvetica, sans-serif',
				'variant'		 => 'regular',
				'font-size'		 => '26',
				'line-height'	 => '27',
				'letter-spacing' => '0',
				'color'			 => '#202020',
				'font'			 => 'google',
			),
			'dependency'  	=> array( 'logotype_text', '==', 'true' ),
			'after'  	=> '<div class="cs-text-muted"><br>'.esc_html__('This will be applied to logo text only. Select Logo font-style and size', 'fixology').'</div>',
		),
		
		array(
			'id'       		 => 'logoimg',
			'type'     		 => 'thememount_image',
			'title'    		 => esc_html__('Logo Image', 'fixology'),
			'dependency'  	 => array( 'logotype_image', '==', 'true' ),
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('Upload image that will be used as logo for the site ', 'fixology') . sprintf(__('%1$sNOTE:%2$s Upload image that will be used as logo for the site', 'fixology'),'<strong>', '</strong>').'</div>',
			'add_title'		 => esc_html__('Upload Site Logo','fixology'),
			'default'		 => array(
					'thumb-url'	=> get_template_directory_uri() . '/images/logo.png',
					'full-url'	=> get_template_directory_uri() . '/images/logo.png',
			),
        ),
		array(
			'id'     		 => 'logo_max_height',
			'type'   		 => 'number',
			'title'          => esc_html__('Logo Max Height', 'fixology' ),
			'after'  	  	 => '<div class="cs-text-muted"><br>'.esc_html__('If you feel your logo looks small than increase this and adjust it', 'fixology').'</div>',
			'default'		 => '40',
			'dependency'  	 => array( 'logotype_image', '==', 'true' ),
        ),
		
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('Sticky Header', 'fixology'),
			'after'  	  	 => '<small>'.esc_html__('Options for sticky header', 'fixology').'</small>',
		),
		array(
			'id'     		=> 'sticky_header',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Enable Sticky Header', 'fixology'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_html__('Select ON if you want the sticky header on page scroll', 'fixology').'</div>',
        ),
		array(
			'id'     		 => 'header_height_sticky',
			'type'   		 => 'number',
			'title'          => esc_html__('Sticky Header Height (in pixel)', 'fixology' ),
			'after'  	  	 => '<div class="cs-text-muted"><br>'.esc_html__('You can set height of header area when it becomes sticky', 'fixology').'</div>',
			'default'		 => '70',
			'dependency'     => array( 'sticky_header', '==', 'true' ),
        ),
		array(
			'id'            => 'sticky_header_bg_color',
			'type'          => 'select',
			'title'         =>  esc_html__('Sticky Header Background Color', 'fixology'),
			'options'  => array(
							'darkgrey'   => esc_html__('Dark grey', 'fixology'),
							'grey'       => esc_html__('Grey', 'fixology'),
							'white'      => esc_html__('White', 'fixology'),
							'skincolor'  => esc_html__('Skincolor', 'fixology'),
							'custom'     => esc_html__('Custom Color', 'fixology'),
			),
			'default'       => 'white',
			'dependency'    => array( 'sticky_header', '==', 'true' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select predefined color for Sticky Header background color', 'fixology').'</div>',
        ),
		array(
			'id'     		 => 'sticky_header_bg_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_html__('Sticky Header Custom Background Color', 'fixology' ),
			'default'		 => 'rgba(238,238,34,0.93)',
			'dependency'  	 => array( 'sticky_header_bg_color|sticky_header', '==|==', 'custom|true' ),//Multiple dependency
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('Custom background color for Sticky Header', 'fixology').'</div>',
        ),
		array(
			'id'       		 => 'logoimg_sticky',
			'type'     		 => 'thememount_image',
			'title'    		 => esc_html__('Logo Image for Sticky Header', 'fixology'),
			'dependency'  	 => array( 'sticky_header|logotype_image', '==|==', 'true|true' ),
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('Upload image that will be used as logo for sticky header', 'fixology').'</div>',
			'add_title'		 => esc_html__('Upload Sticky Logo','fixology'),
		),
		array(
			'id'     		 => 'logo_max_height_sticky',
			'type'   		 => 'number',
			'title'          => esc_html__('Logo Max Height when Sticky Header', 'fixology' ),
			'after'  	  	 => '<div class="cs-text-muted"><br>'.esc_html__('Set logo when the header is sticky', 'fixology').'</div>',
			'default'		 => '40',
			'dependency'     => array( 'sticky_header', '==', 'true' ),
        ),
		
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('Search Button in Header', 'fixology'),
			'after'  	  	 => '<small>'.esc_html__('Option to show or hide search button in header area', 'fixology').'</small>',
		),
		array(
			'id'     		=> 'header_search',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Show Search Button', 'fixology'),
			'default' 		=> false,
			'label'  		=> '<div class="cs-text-muted">'.esc_html__('Set this option "ON" to show search button in header. The icon will be at the right side (after menu)', 'fixology').'</div>',
        ),
		array(
			'id'     		 => 'search_input',
			'type'    		 => 'text',
			'title'   		 => esc_html__('Search Form Input Word', 'fixology'),
			'default' 		 => 'Search here... ',
			'after'  			 => '<div class="cs-text-muted"><br>'.esc_html__('Write the search form input word here. <br> Default: "WRITE SEARCH WORD..."', 'fixology').'</div>',
			'dependency'     => array( 'header_search', '==', 'true' ),
		),
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('Header Style', 'fixology'),
			'after'  	  	 => '<small>'.esc_html__('Options to change header style', 'fixology').'</small>',
		),
		array(
			'id'			=> 'headerstyle',
			'type' 			=> 'image_select',//thememount_pre_color_packages
			'title'			=> esc_html__('Select Header Style', 'fixology'),
			'desc'     		=> esc_html__('Please select header style', 'fixology'),
			'wrap_class'    => 'tm-header-style',
			'options'      	=> array(
				'classic'                 => get_template_directory_uri() . '/inc/images/header-classic.png',
				'classic-overlay'         => get_template_directory_uri() . '/inc/images/header-classic-overlay.png',
				'infostack'               => get_template_directory_uri() . '/inc/images/header-infostack.png', //
			),
			'default'		=> 'classic',
			'attributes' 	=> array(
				'data-depend-id' => 'header_style'
			),
			'radio' 		=> true,//This dependency was not working normally so had to define radio to it with attributes id more on this link https://github.com/Codestar/codestar-framework/issues/52
        ),
		array(
			'type'    		=> 'heading',
			'content'		=> esc_html__('Special options for selected header', 'fixology'),
			'dependency'  	 => array( 'header_style', 'any', 'classic,classic-overlay,infostack' ), // This dependency was not working normally so had to define radio to it with attributes id more on this link https://github.com/Codestar/codestar-framework/issues/52
			'after'  	  	 => '<small>'.esc_html__('These options will appear for selected header style only.', 'fixology').'</small>',
        ),
		
		array(
			'id'       		 => 'infostack_first_col_content',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_html__('InfoStack First Column Content', 'fixology'),
			'shortcode'		 => true,
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('This content will appear on Right side of logo. This is first column content.', 'fixology').'</div>',
			'default'        => thememount_wp_kses( urldecode('%3Cdiv+class%3D%22header-content-main%22%3E%0D%0A%3Cdiv+class%3D%22header-icon%22%3E%5Btm-icon+type%3D%22themify%22+icon_themify%3D%22themifyicon+ti-timer%22+color%3D%22custom%22+custom_color%3D%22%23333333%22%5D%3C%2Fdiv%3E%0D%0A%3Cdiv+class%3D%22header-content%22%3E%3Cstrong%3EMonday+%E2%80%93+Friday+08%3A00+%E2%80%93+20%3A00+%3C%2Fstrong%3E%3Cbr%3E%0D%0ASaturday+and+Sunday+%E2%80%93+CLOSED%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E') ),
			'dependency'  	 => array( 'header_style', 'any', 'infostack' ),
		),
		array(
			'id'       		 => 'infostack_second_col_content',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_html__('InfoStack Second Column Content', 'fixology'),
			'shortcode'		 => true,
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('This content will appear on Right side of logo. This is second column content.', 'fixology').'</div>',
			'default'        => thememount_wp_kses( urldecode('%3Cdiv+class%3D%22header-content-main%22%3E%0D%0A%3Cdiv+class%3D%22header-icon%22%3E%5Btm-icon+type%3D%22themify%22+icon_themify%3D%22themifyicon+ti-mobile%22+color%3D%22custom%22+custom_color%3D%22%23333333%22%5D%3C%2Fdiv%3E%0D%0A%3Cdiv+class%3D%22header-content%22%3E%3Cstrong%3E%2B+0123+4567+9601+%3C%2Fstrong%3E%3Cbr%3E%0D%0Amail%40example.com%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E') ),
			'dependency'  	 => array( 'header_style', 'any', 'infostack' ),
		),
		array(
			'id'       		 => 'infostack_third_col_content',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_html__('InfoStack Third Column Content', 'fixology'),
			'shortcode'		 => true,
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('This content will appear on Right side of logo. This is third column content.', 'fixology').'</div>',
			'default'        => thememount_wp_kses( urldecode('%3Cdiv+class%3D%22header-content-main%22%3E%0D%0A%3Cdiv+class%3D%22header-icon%22%3E%5Btm-icon+type%3D%22themify%22+icon_themify%3D%22themifyicon+ti-location-pin%22+color%3D%22custom%22+custom_color%3D%22%23333333%22%5D%3C%2Fdiv%3E%0D%0A%3Cdiv+class%3D%22header-content%22%3E%3Cstrong%3E24+Fifth+st%3C%2Fstrong%3E%3Cbr%3E%0D%0ALos+Angeles%2C+USA%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E') ),
			'dependency'  	 => array( 'header_style', 'any', 'infostack' ),
		),
		
		
		
		array(
			'id'       		 => 'header_text',
			'type'     		 => 'wysiwyg',
			'title'    		 =>  esc_html__('Header Text Area', 'fixology'),
			'shortcode'		 => true,
			'dependency'  	 => array( 'header_style', 'any', 'classic,classic-overlay' ), // This dependency was not working normally so had to define radio to it with attributes id more on this link https://github.com/Codestar/codestar-framework/issues/52
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('This content will appear before Search/Cart icon in header area. This option will work for currently selected header style only', 'fixology').'</div>',
			'default'        => '',
        ),
		array(
			'id'            => 'header_menu_position',
			'type'          => 'select',
			'title'         =>  esc_html__('Header Menu Position', 'fixology'),
			'options'  		=> array(
								'left'		=> esc_html__('Left Align', 'fixology'),
								'right'		=> esc_html__('Right Align', 'fixology'),
								'center'	=> esc_html__('Center Align', 'fixology'),
							),
			'default'       => 'right',
			'dependency'  	=> array( 'header_style', 'any', 'classic,classic-overlay' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select Menu Position. This option will work for currently selected header style only ', 'fixology').'</div>',
        ),
		array(
			'id'     		 => 'header_menuarea_height',
			'type'    		 => 'number',
			'title'   		 => esc_html__('Menu area height', 'fixology'),
			'default' 		 => '65',
			'after'          => esc_html(' px'),
			'attributes'     => array(
				'min'       	 => 40,
			),
			'subtitle'  		 => '<div class="cs-text-muted"><br>'.esc_html__('Height for menu area only', 'fixology').'</div>',
			'dependency'     => array( 'header_style', 'any', 'infostack' ),
		),
		array(
			'id'            => 'header_menu_bg_color',
			'type'          => 'select',
			'title'         =>  esc_html__('Header Menu Background Color', 'fixology'),
			'options'  		=> array(
								'darkgrey'   => esc_html__('Dark grey', 'fixology'),
								'grey'       => esc_html__('Grey', 'fixology'),
								'white'      => esc_html__('White', 'fixology'),
								'skincolor'  => esc_html__('Skincolor', 'fixology'),
								'custom'     => esc_html__('Custom Color', 'fixology'),
							),
			'default'       => 'darkgrey',
			'dependency'	=> array( 'header_style', 'any', 'infostack' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select predefined background color for Menu area in header', 'fixology').'</div>',
        ),
		array(
			'id'     		 => 'header_menu_bg_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_html__('Header Menu Background Custom Background Color', 'fixology' ),
			'default'		 => 'rgba(0,0,0,0.31)',
			'dependency'  	 => array( 'header_menu_bg_color|header_style', '==|any', 'custom|infostack' ),
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('Custom background color for Header Menu area', 'fixology').'</div>',
        ),
        array(
			'id'            => 'sticky_header_menu_bg_color',
			'type'          => 'select',
			'title'         =>  esc_html__('Sticky Header Menu Background Color', 'fixology'),
			'options'  		=> array(
								'darkgrey'   => esc_html__('Dark grey', 'fixology'),
								'grey'       => esc_html__('Grey', 'fixology'),
								'white'      => esc_html__('White', 'fixology'),
								'skincolor'  => esc_html__('Skincolor', 'fixology'),
								'custom'     => esc_html__('Custom Color', 'fixology'),
							),
			'default'       => 'darkgrey',
			'dependency'	=> array( 'header_style', 'any', 'infostack' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select predefined background color for Menu area in header when header is sticky', 'fixology').'</div>',
        ),
		array(
			'id'     		 => 'sticky_header_menu_bg_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_html__('Sticky Header Menu Background Custom Background Color', 'fixology' ),
			'default'		 => 'rgba(129,215,66,0.7)',
			'dependency'  	 => array( 'sticky_header_menu_bg_color|header_style', '==|any', 'custom|infostack' ),
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('Custom background color for Header Menu area when header is sticky', 'fixology').'</div>',
        ),
		array(
			'id'     		 => 'header_btn_url',
			'type'    		 => 'text',
			'title'   		 => esc_html__('URL for Header Button', 'fixology'),
			'default' 		 => '#',
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('Fill URL for Header Button', 'fixology').'</div>',
			'dependency'     => array( 'header_style', 'any', 'infostack' ),
		),
		array(
			'id'     		 => 'header_btn_text',
			'type'    		 => 'text',
			'title'   		 => esc_html__('Text for Header Button', 'fixology'),
			'default' 		 => 'BUY NOW',
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('Fill text for Header Button', 'fixology').'</div>',
			'dependency'     => array( 'header_style', 'any', 'infostack' ),
		),
		
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('Logo SEO', 'fixology'),
			'after'  	  	 => '<small>'.esc_html__('Options for Logo SEO', 'fixology').'</small>',
		),
		array(
			'id'      		=> 'logoseo',
			'type'   		=> 'radio',
			'title'   		=> esc_html__('Logo Tag for SEO', 'fixology'),
			'options' 		=> array(
								'h1homeonly' => esc_html__('H1 for home, SPAN on other pages', 'fixology'),
								'allh1'      => esc_html__('H1 tag everywhere', 'fixology'),
							),
			'default'		=> 'h1homeonly',
			'after'  	  	=> '<div class="cs-text-muted"><br>'.esc_html__('Select logo tag for SEO purpose', 'fixology').'</div>',
        ),
	
		
	)
);


// Menu Settings
$tm_framework_options[] = array(
	'name'   => 'menu_settings', // like ID
	'title'  => esc_html__('Menu Settings', 'fixology'),
	'icon'   => 'fa fa-bars',
	'fields' => array( // begin: fields
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('Menu Settings', 'fixology'),
			'after'  	  	=> '<small>'.esc_html__('Responsive Menu Breakpoint: Change Options for responsive menu.', 'fixology').'</small>',
		),
		array(
			'id'      		=> 'menu_breakpoint',
			'type'   		=> 'radio',
			'title'   		=> esc_html__('Responsive Menu Breakpoint', 'fixology'),
			'options'  		=> array(
								'1200'   => esc_html__('Large devices','fixology').' <small>'.esc_html__('Desktops (>1200px)', 'fixology').'</small>',
								'992'    => esc_html__('Medium devices','fixology').' <small>'.esc_html__('Desktops and Tablets (>992px)', 'fixology').'</small>',
								'768'    => esc_html__('Small devices','fixology').' <small>'.esc_html__('Mobile and Tablets (>768px)', 'fixology').'</small>',
								'custom' => esc_html__('Custom (select pixel below)', 'fixology'),
						),
			'default'		=> '1200',
			'after'  	  	=> '<div class="cs-text-muted"><br>'.esc_html__('Change options for responsive menu breakpoint', 'fixology').'</div>',
        ),
		
		array(
			'id'     		=> 'megamenu-override',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Override Max Mega Menu Style', 'fixology'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_html__('We need to override some of the Max mega Menu plugin\'s settings to match with our theme. If you like to use the default vanilla look of Max Mega Menu than turn this option off.', 'fixology').'</div>',
        ),
		
		array(
			'id'     		 => 'menu_breakpointcustom',
			'type'   		 => 'number',
			'title'          => esc_html__('Custom Breakpoint for Menu (in pixel)', 'fixology' ),
			'dependency'  	 => array( 'menu_breakpoint_custom', '==', 'true' ),
			'default'		 => '10',
			'after'  	  	 => '<div class="cs-text-muted"><br>'.esc_html__('Select after how many pixels the menu will become responsive', 'fixology').'</div>',
        ),
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('Main Menu Options', 'fixology'),
			'after'  	  	 => '<small>'.esc_html__('Options for main menu in header', 'fixology').'</small>',
		),
		array(
			'id'             => 'mainmenufont',
			'type'           => 'thememount_typography', 
			'title'          => esc_html__('Main Menu Font', 'fixology'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'color'          => true,
			'all-varients'   => false,
			'output'         => '#site-header-menu #site-navigation div.nav-menu > ul > li > a, .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal > li.mega-menu-item > a', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'         => 'Raleway',
				'backup-family'  => 'Arial, Helvetica, sans-serif',
				'variant'        => '700',
				'text-transform' => 'uppercase',
				'font-size'      => '13',
				'line-height'    => '15',
				'letter-spacing' => '1',
				'color'          => '#202020',
				'font'           => 'google',
			),
			'after'  	=> '<div class="cs-text-muted"><br>'.esc_html__('Select main menu font, color and size', 'fixology').'</div>',
		),
		
		
		
		array(
			'id'     		 => 'stickymainmenufontcolor',
			'type'   		 => 'color_picker',
			'title'  		 => esc_html__('Main Menu Font Color for Sticky Header', 'fixology' ),
			'default'		 => '#202020',
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('Main menu font color when the header becomes sticky', 'fixology').'</div>',
        ),
		array(
			'id'           	=> 'mainmenu_active_link_color',
			'type'         	=> 'select',
			'title'        	=>  esc_html__('Main Menu Active Link Color', 'fixology'),
			'options'  		=> array(
				'skin'			=> esc_html__('Skin color (default)', 'fixology'),
				'custom'		=> esc_html__('Custom color (select below)', 'fixology'),
			),
			'default'      	=> 'skin',
			'after'  		=> '<div class="cs-text-muted"><br>
									<strong>' . esc_html__('Tips:', 'fixology') . '</strong>
									<ul>
										<li>' . esc_html__('"Skin color (default):" Skin color for active link color.', 'fixology') . '</li>
										<li>' . esc_html__('"Custom color:" Custom color for active link color. Useful if you like to use any color for active link color.', 'fixology') . '</li>
									</ul>
								</div>',
        ),
		array(
			'id'     		 => 'mainmenu_active_link_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_html__('Main Menu Active Link Custom Color', 'fixology' ),
			'default'		 => 'rgba(238,238,34,0.89)',
			'dependency'  	 => array( 'mainmenu_active_link_color', '==', 'custom' ),
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('Custom color for main menu active active link', 'fixology').'</div>',
        ),
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('Drop Down Menu Options', 'fixology'),
			'after'  	  	 => '<small>'.esc_html__('Options for drop down menu in header', 'fixology').'</small>',
		),
		array(
			'id'             => 'dropdownmenufont',
			'type'           => 'thememount_typography', 
			'title'          => esc_html__('Dropdown Menu Font', 'fixology'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'color'          => true,
			'all-varients'   => false,
			'output'         => 'ul.nav-menu li ul li a, div.nav-menu > ul li ul li a, .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a, .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a:hover, .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a:focus, .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a.mega-menu-link, .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a.mega-menu-link:hover, .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a.mega-menu-link:focus, .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'         => 'Raleway',
				'backup-family'  => 'Arial, Helvetica, sans-serif',
				'variant'        => '700',
				'text-transform' => 'uppercase',
				'font-size'      => '12',
				'line-height'    => '16',
				'letter-spacing' => '1',
				'color'          => '#262626',
				'font'           => 'google',
			),
			'after'  	=> '<div class="cs-text-muted"><br>'.esc_html__('Select dropdown menu font, color and size', 'fixology').'</div>',
		),
		
		
		array(
			'id'           	=> 'dropmenu_active_link_color',
			'type'         	=> 'select',
			'title'        	=>  esc_html__('Dropdown Menu Active Link Color', 'fixology'),
			'options'  		=> array(
				'skin'			=> esc_html__('Skin color (default)', 'fixology'),
				'custom'		=> esc_html__('Custom color (select below)', 'fixology'),
			),
			'default'      	=> 'skin',
			'after'  		=> '<div class="cs-text-muted"><br>' . '<strong>' . esc_html__('Tips:', 'fixology') . '</strong>' . '<ul><li>' . esc_html__('"Skin color (default):" Skin color for active link color.', 'fixology') . '</li><li>' . esc_html__('"Custom color:" Custom color for active link color. Useful if you like to use any color for active link color.', 'fixology') . '</li></ul></div>',
        ),
		array(
			'id'     		=> 'dropmenu_active_link_custom_color',
			'type'   		=> 'color_picker',
			'title'  		=> esc_html__('Dropdown Menu Active Link Custom Color', 'fixology' ),
			'default'		=> '#8224e3',
			'dependency'  	=> array( 'dropmenu_active_link_color', '==', 'custom' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Custom color for dropdown menu active menu text', 'fixology').'</div>',
        ),
		array(
			'id'      		=> 'dropmenu_background',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('Dropdown Menu Background Properties (for all dropdown menus)', 'fixology' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Set background for dropdown menu. This will be applied to all dropdown menus. You can set common style here.', 'fixology').'</div>',
			'default'		=> array(
				'image'			=> '',
				'repeat'		=> 'no-repeat',
				'position'		=> 'center top',
				'size'			=> 'cover',
				'color'			=> '#f4f6f7',
			),
			'output' 	    => '.tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item ul.mega-sub-menu, #site-header-menu #site-navigation div.nav-menu > ul > li ul',
        ),
		array(
			'id'      		=> 'dropdown_menu_separator',
			'type'   		=> 'radio',
			'title'   		=> esc_html__('Separator line between dropdown menu links', 'fixology'),
			'options'  		=> array(
								'grey'  => esc_html__('Grey color as border color (default)', 'fixology'),
								'white' => esc_html__('White color as border color (for dark background color)', 'fixology'),
								'no'    => esc_html__('No separator border', 'fixology'),
							),
			'default'		=> 'grey',
			'after'  	  	=> '<div class="cs-text-muted"><br> <strong>' . esc_html__('Tips:', 'fixology') . '</strong>
								<ul>
									<li>' . esc_html__('"Grey color as border color (default):" This is default border view.', 'fixology') . '</li>
									<li>' . esc_html__('"White color:" Select this option if you are going to select dark background color (for dropdown menu)', 'fixology') . '</li>
									<li>' . esc_html__('"No separator border:" Completely remove border. This will make your menu totally flat', 'fixology') . '</li>
								</ul></div>',
        ),
		array(
			'id'             => 'megamenu_widget_title',
			'type'           => 'thememount_typography', 
			'title'          => esc_html__('MegaMenu Widget Title Font', 'fixology'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'color'          => true,
			'all-varients'   => false,
			'output'         => '#site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item > h4.mega-block-title', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'         => 'Montserrat',
				'backup-family'  => 'Arial, Helvetica, sans-serif',
				'variant'        => '600',
				'text-transform' => 'uppercase',
				'font-size'      => '16',
				'line-height'    => '16',
				'letter-spacing' => '1',
				'color'          => '#171717',
				'font'           => 'google',
			),
			'after'  	=> '<div class="cs-text-muted"><br>'.esc_html__('Font settings for mega menu widget title. <br><br> <strong>NOTE: </strong> This will work only if you installed "Max Mega Menu" plugin and also activated in the main (primary) menu', 'fixology').'</div>',
		),
		
		array(
			'type'       	 => 'heading',
			'content'    	 => '',
			'after'  	  	 => '<strong>'.esc_html__('Individual Drop Down Menu Options', 'fixology').'</strong>',
		),
		array(
			'id'      		=> 'dropmenu_background_1',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('First dropdown menu background', 'fixology' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_html__('Set background for first dropdown menu.', 'fixology') . '</div>',
			'default'		=> array(
								'color' => '#ffffff',
			),
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(1) ul, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(1) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(1) ul:before, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(1) ul.mega-sub-menu:before',
        ),
		array(
			'id'      		=> 'dropmenu_background_2',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('Second dropdown menu background', 'fixology' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_html__('Set background for second dropdown menu.', 'fixology') . '</div>',
			'default'		=> array(
								'color' => '#ffffff',
			),
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(2) ul, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(2) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(2) ul:before, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(2) ul.mega-sub-menu:before',
        ),
		array(
			'id'      		=> 'dropmenu_background_3',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('Third dropdown menu background', 'fixology' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_html__('Set background for third dropdown menu.', 'fixology') . '</div>',
			'default'		=> array(
								'color' => '#ffffff',
			),
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(3) ul, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(3) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(3) ul:before, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(3) ul.mega-sub-menu:before',
        ),
		array(
			'id'      		=> 'dropmenu_background_4',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('Fourth dropdown menu background', 'fixology' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_html__('Set background for fourth dropdown menu.', 'fixology') . '</div>',
			'default'		=> array(
								'color' => '#ffffff',
			),
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(4) ul, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(4) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(4) ul:before, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(4) ul.mega-sub-menu:before',
        ),
		array(
			'id'      		=> 'dropmenu_background_5',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('Fifth dropdown menu background', 'fixology' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_html__('Set background for fifth dropdown menu.', 'fixology') . '</div>',
			'default'		=> array(
								'color' => '#ffffff',
			),
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(5) ul, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(5) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(5) ul:before, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(5) ul.mega-sub-menu:before',
        ),
		array(
			'id'      		=> 'dropmenu_background_6',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('Sixth dropdown menu background', 'fixology' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_html__('Set background for sixth dropdown menu.', 'fixology') . '</div>',
			'default'		=> array(
								'color' => '#ffffff',
			),
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(6) ul, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(6) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(6) ul:before, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(6) ul.mega-sub-menu:before',
        ),
		array(
			'id'      		=> 'dropmenu_background_7',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('Seventh dropdown menu background', 'fixology' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_html__('Set background for seventh dropdown menu.', 'fixology') . '</div>',
			'default'		=> array(
								'color' => '#ffffff',
			),
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(7) ul, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(7) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(7) ul:before, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(7) ul.mega-sub-menu:before',
        ),
		array(
			'id'      		=> 'dropmenu_background_8',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('Eighth dropdown menu background', 'fixology' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_html__('Set background for eighth dropdown menu.', 'fixology') . '</div>',
			'default'		=> array(
								'color' => '#ffffff',
			),
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(8) ul, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(8) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(8) ul:before, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(8) ul.mega-sub-menu:before',
        ),
		array(
			'id'      		=> 'dropmenu_background_9',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('Ninth dropdown menu background', 'fixology' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_html__('Set background for ninth dropdown menu.', 'fixology') . '</div>',
			'default'		=> array(
								'color' => '#ffffff',
			),
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(9) ul, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(9) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(9) ul:before, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(9) ul.mega-sub-menu:before',
        ),
		array(
			'id'      		=> 'dropmenu_background_10',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('Tenth dropdown menu background', 'fixology' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_html__('Set background for tenth dropdown menu.', 'fixology') . '</div>',
			'default'		=> array(
								'color' => '#ffffff',
			),
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(10) ul, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(10) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(10) ul:before, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(10) ul.mega-sub-menu:before',
        ),
		
	)
);






// Footer Settings
$tm_framework_options[] = array(
	'name'   => 'footer_settings', // like ID
	'title'  => esc_html__('Footer Settings', 'fixology'),
	'icon'   => 'fa fa-arrow-down',
	'fields' => array( // begin: fields
		array(
			'type'			=> 'heading',
			'content'    	=> esc_html__('Sticky Footer', 'fixology'),
			'after'  	  	=> '<small>'.esc_html__('Make footer sticky and visible on scrolling at bottom', 'fixology').'</small>',
        ),
		array(
			'id'     		=> 'stickyfooter',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Sticky Footer', 'fixology'),
			'default' 		=> false,
			'label'  		=> '<div class="cs-text-muted">'.esc_html__('Set this option "ON" to enable sticky footer on scrolling at bottom', 'fixology').'</div>',
        ),
		
		// Footer common background
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('Footer Background (full footer elements)', 'fixology'),
			'after'  	  	 => '<small>'.esc_html__('This background property will apply to full footer area. You can add', 'fixology').'</small>',
		),
		array(
			'id'            => 'full_footer_bg_color',
			'type'          => 'select',
			'title'         =>  esc_html__('Footer Background Color (all area)', 'fixology'),
			'options'  => array(
							'transparent' => esc_html__('Transparent', 'fixology'),
							'darkgrey'    => esc_html__('Dark grey', 'fixology'),
							'grey'        => esc_html__('Grey', 'fixology'),
							'white'       => esc_html__('White', 'fixology'),
							'skincolor'   => esc_html__('Skincolor', 'fixology'),
							'custom'      => esc_html__('Custom Color', 'fixology'),
			),
			'default'       => 'darkgrey',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select predefined color for Footer background color', 'fixology').'</div>',
        ),
		array(
			'id'      		 => 'full_footer_bg_all',
			'type'    		 => 'thememount_background',
			'title'  		 => esc_html__('Footer Background (all area)', 'fixology' ),
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_html__('Footer background image', 'fixology').'</div>',
			'default'		 => array(
				'image'			=> get_template_directory_uri() . '/images/footer-bg.jpg',
				'repeat'		=> 'no-repeat',
				'position'		=> 'center center',
				'attachment'	=> 'fixed',
				'size'			=> 'cover',
				'color'			=> 'rgba(30,115,190,0.9)',
			),
			'output' 	     => '.footer',
			'output_bglayer' => true,  // apply color to bglayer class div inside this , default: true
			'color_dropdown_id' => 'full_footer_bg_color',   // color dropdown to decide which color
        ),
		
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('First Footer Widget Area', 'fixology'),
			'after'  	  	 => '<small>'.esc_html__('Options to change settings for footer widget area', 'fixology').'</small>',
		),
		array(
			'id'			=> 'first_footer_column_layout',
			'type' 			=> 'image_select',//thememount_pre_color_packages
			'title'			=> esc_html__('Footer Widget Columns', 'fixology'),
			'options'      	=> array(
					'12'      => get_template_directory_uri() . '/inc/images/footer_col_12.png',
					'6_6'     => get_template_directory_uri() . '/inc/images/footer_col_6_6.png',
					'4_4_4'   => get_template_directory_uri() . '/inc/images/footer_col_4_4_4.png',
					'3_3_3_3' => get_template_directory_uri() . '/inc/images/footer_col_3_3_3_3.png',
					'8_4'     => get_template_directory_uri() . '/inc/images/footer_col_8_4.png',
					'4_8'     => get_template_directory_uri() . '/inc/images/footer_col_4_8.png',
					'6_3_3'   => get_template_directory_uri() . '/inc/images/footer_col_6_3_3.png',
					'3_3_6'   => get_template_directory_uri() . '/inc/images/footer_col_3_3_6.png',
					'8_2_2'   => get_template_directory_uri() . '/inc/images/footer_col_8_2_2.png',
					'2_2_8'   => get_template_directory_uri() . '/inc/images/footer_col_2_2_8.png',
					'6_2_2_2' => get_template_directory_uri() . '/inc/images/footer_col_6_2_2_2.png',
					'2_2_2_6' => get_template_directory_uri() . '/inc/images/footer_col_2_2_2_6.png',
			),
			'default'		=> '4_4_4',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select Footer Column layout View for widgets.', 'fixology').'</div>',
        ),
		
		array(
			'id'            => 'first_footer_bg_color',
			'type'          => 'select',
			'title'         =>  esc_html__('Footer Background Color', 'fixology'),
			'options'  => array(
				'transparent' => esc_html__('Transparent', 'fixology'),
				'darkgrey'    => esc_html__('Dark grey', 'fixology'),
				'grey'        => esc_html__('Grey', 'fixology'),
				'white'       => esc_html__('White', 'fixology'),
				'skincolor'   => esc_html__('Skincolor', 'fixology'),
				'custom'      => esc_html__('Custom Color', 'fixology'),
			),
			'default'       => 'transparent',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select predefined color for Footer background color', 'fixology').'</div>',
        ),
		array(
			'id'      			=> 'first_footer_bg_all',
			'type'    			=> 'thememount_background',
			'title'  			=> esc_html__('Footer Background', 'fixology' ),
			'after'  			=> '<div class="cs-text-muted"><br>'.esc_html__('Footer background image', 'fixology').'</div>',
			'default'			=> array(
					'repeat'		=> 'no-repeat',
					'attachment'	=> 'fixed',
					'color'			=> 'rgba(129,215,66,0.32)',
			),
			'output'			=> '.first-footer',
			'output_bglayer'    => true,  // apply color to bglayer class div inside this , default: true
			'color_dropdown_id' => 'first_footer_bg_color',   // color dropdown to decide which color
        ),
		array(
			'id'           	=> 'first_footer_text_color',
			'type'         	=> 'select',
			'title'        	=>  esc_html__('Text Color', 'fixology'),
			'options'  		=> array(
								'white'  => esc_html__('White', 'fixology'),
								'dark'   => esc_html__('Dark', 'fixology'),
							),
			'default'      	=> 'white',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select "Dark" color if you are going to select light color in above option', 'fixology').'</div>',
        ),

		
		// Second Footer Widget Area
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('Second Footer Widget Area', 'fixology'),
			'after'  	  	 => '<small>'.esc_html__('Options to change settings for second footer widget area', 'fixology').'</small>',
		),
		array(
			'id'			=> 'second_footer_column_layout',
			'type' 			=> 'image_select',//thememount_pre_color_packages
			'title'			=> esc_html__('Footer Widget Columns', 'fixology'),
			'options'      	=> array(
					'12'      => get_template_directory_uri() . '/inc/images/footer_col_12.png',
					'6_6'     => get_template_directory_uri() . '/inc/images/footer_col_6_6.png',
					'4_4_4'   => get_template_directory_uri() . '/inc/images/footer_col_4_4_4.png',
					'3_3_3_3' => get_template_directory_uri() . '/inc/images/footer_col_3_3_3_3.png',
					'8_4'     => get_template_directory_uri() . '/inc/images/footer_col_8_4.png',
					'4_8'     => get_template_directory_uri() . '/inc/images/footer_col_4_8.png',
					'6_3_3'   => get_template_directory_uri() . '/inc/images/footer_col_6_3_3.png',
					'3_3_6'   => get_template_directory_uri() . '/inc/images/footer_col_3_3_6.png',
					'8_2_2'   => get_template_directory_uri() . '/inc/images/footer_col_8_2_2.png',
					'2_2_8'   => get_template_directory_uri() . '/inc/images/footer_col_2_2_8.png',
					'6_2_2_2' => get_template_directory_uri() . '/inc/images/footer_col_6_2_2_2.png',
					'2_2_2_6' => get_template_directory_uri() . '/inc/images/footer_col_2_2_2_6.png',
			),
			'default'		=> '12',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select Footer Column layout View for widgets.', 'fixology').'</div>',
        ),
		array(
			'id'            => 'second_footer_bg_color',
			'type'          => 'select',
			'title'         =>  esc_html__('Footer Background Color', 'fixology'),
			'options'  => array(
							'transparent' => esc_html__('Transparent', 'fixology'),
							'darkgrey'    => esc_html__('Dark grey', 'fixology'),
							'grey'        => esc_html__('Grey', 'fixology'),
							'white'       => esc_html__('White', 'fixology'),
							'skincolor'   => esc_html__('Skincolor', 'fixology'),
							'custom'      => esc_html__('Custom Color', 'fixology'),
			),
			'default'       => 'transparent',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select predefined color for Footer background color', 'fixology').'</div>',
        ),
		array(
			'id'      		=> 'second_footer_bg_all',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('Footer Background', 'fixology' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Footer background image', 'fixology').'</div>',
			'default'		=> array(
				'color'			=> '#161619',
			),
			'output' 	    => '.second-footer',
			'output_bglayer'    => true,  // apply color to bglayer class div inside this , default: true
			'color_dropdown_id' => 'second_footer_bg_color',   // color dropdown to decide which color
        ),
		array(
			'id'           	=> 'second_footer_text_color',
			'type'         	=> 'select',
			'title'        	=>  esc_html__('Text Color', 'fixology'),
			'options'  		=> array(
								'white'  => esc_html__('White', 'fixology'),
								'dark'   => esc_html__('Dark', 'fixology'),
							),
			'default'      	=> 'white',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select "Dark" color if you are going to select light color in above option', 'fixology').'</div>',
        ),
		
		// Footer Text Area
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('Footer Text Area', 'fixology'),
			'after'  	  	 => '<small>'.esc_html__('Options to change settings for footer text area. This contains copyright info', 'fixology').'</small>',
		),
		array(
			'id'            => 'bottom_footer_bg_color',
			'type'          => 'select',
			'title'         =>  esc_html__('Footer Background Color', 'fixology'),
			'options'  => array(
							'transparent' => esc_html__('Transparent', 'fixology'),
							'darkgrey'    => esc_html__('Dark grey', 'fixology'),
							'grey'        => esc_html__('Grey', 'fixology'),
							'white'       => esc_html__('White', 'fixology'),
							'skincolor'   => esc_html__('Skincolor', 'fixology'),
							'custom'      => esc_html__('Custom Color', 'fixology'),
			),
			'default'       => 'darkgrey',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select predefined color for Footer background color', 'fixology').'</div>',
        ),
		array(
			'id'      		=> 'bottom_footer_bg_all',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('Footer Background', 'fixology' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Footer background image', 'fixology').'</div>',
			'default'		=> array(
				'repeat'		=> 'no-repeat',
				'position'		=> 'center center',
				'attachment'	=> 'fixed',
				'color'			=> '#161619',
			),
			'output' 	    => '.bottom-footer-text',
			'output_bglayer'    => true,  // apply color to bglayer class div inside this , default: true
			'color_dropdown_id' => 'bottom_footer_bg_color',   // color dropdown to decide which color
        ),
		array(
			'id'           	=> 'bottom_footer_text_color',
			'type'         	=> 'select',
			'title'        	=>  esc_html__('Text Color', 'fixology'),
			'options'  		=> array(
								'white'  => esc_html__('White', 'fixology'),
								'dark'   => esc_html__('Dark', 'fixology'),
							),
			'default'      	=> 'white',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select "Dark" color if you are going to select light color in above option', 'fixology').'</div>',
        ),
		
		array(
          'id'      		=> 'footer_copyright_left',
          'type'    		=> 'wysiwyg',
          'title'  			=>  esc_html__('Footer Text Left', 'fixology'),
		  'after'  			=> '<div class="cs-text-muted"><br>'. esc_html__('You can use the following shortcodes in your footer text:', 'fixology')
		  . '<br>   <code>[tm-site-url]</code> <code>[tm-site-title]</code> <code>[tm-site-tagline]</code> <code>[tm-current-year]</code> <code>[tm-footermenu]</code> <br><br> '
		  . sprintf( esc_html__('%1$s Click here to know more%2$s  about details for each shortcode.','fixology') , '<a href="'. esc_url('http://fixology.kwayythemes.com/documentation/shortcodes.html') .'" target="_blank">' , '</a>'  ) .'</div>',
		  'default'         => thememount_wp_kses('Copyright &copy; 2017 <a href="' . site_url() . '">' . get_bloginfo('name') . '</a>. All rights reserved.'),
        ),
		array(
          'id'       		=> 'footer_copyright_right',
          'type'     		=> 'wysiwyg',
          'title'   		=>  esc_html__('Footer Text Right', 'fixology'),
		  'after'  			=> '<div class="cs-text-muted"><br>'. esc_html__('You can use the following shortcodes in your footer text:', 'fixology')
		  . '<br>   <code>[tm-site-url]</code> <code>[tm-site-title]</code> <code>[tm-site-tagline]</code> <code>[tm-current-year]</code> <code>[tm-footermenu]</code> <br><br> '
		  . sprintf( esc_html__('%1$s Click here to know more%2$s about details for each shortcode.','fixology') , '<a href="'. esc_url('http://fixology.kwayythemes.com/documentation/shortcodes.html') .'" target="_blank">' , '</a>'  ) .'</div>',
		  'default'         => '[tm-footermenu]',
        ),
		
	)
);


// Login Page Settings
$tm_framework_options[] = array(
	'name'   => 'login_page_settings', // like ID
	'title'  => esc_html__('Login Page Settings', 'fixology'),
	'icon'   => 'fa fa-lock',
	'fields' => array( // begin: fields
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_html__('Login Page Settings', 'fixology'),
		),
		array(
			'id'      		=> 'login_background',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('Background Properties', 'fixology' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Specify the type of background object', 'fixology').'</div>',
			'default'		=> array(
				'image'			=> get_template_directory_uri() . '/images/login-bg.jpg',
				'repeat'		=> 'no-repeat',
				'position'		=> 'center top',
				'attachment'	=> 'fixed',
				'size'			=> 'cover',
				'color'			=> '',
			),
			'output'   		=> '.loginpage',
        ),
	)
);


// Blog Settings
$tm_framework_options[] = array(
	'name'   => 'blog_settings', // like ID
	'title'  => esc_html__('Blog Settings', 'fixology'),
	'icon'   => 'fa fa-pencil',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Blog Settings', 'fixology'),
			'after'  		=> '<small>'.esc_html__('Settings for Blog section', 'fixology').'</small>',
		),
		array(
			'id'     		=> 'blog_readmore_text',
			'type'    		=> 'text',
			'title'   		=> esc_html__('"Read More" Link Text', 'fixology'),
			'default' 		=> 'READ MORE',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Text for the Read More link on the Blog page', 'fixology').'</div>',
		),
		
		array(
			'id'           	=> 'blog_view',
			'type'         	=> 'image_select',
			'title'        	=>  esc_html__('Blog view', 'fixology'),
			'options'  		=> array(
				'classic'			=> get_template_directory_uri() . '/inc/images/blog-view-style1.png',
				'box'				=> get_template_directory_uri() . '/inc/images/blog-view-style4.png',
			),
			'default'      	=> 'classic',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select blog view. The default view is classic list view. Also we have total three differnt look for classic view. Select them in this option and see your BLOG page. For "Box view", you can select two, three or four columns box view too.', 'fixology').'</div>',
			
        ),
		array(
			'id'     		=> 'blog_text_limit',
			'type'   		=> 'number',
			'title'         => esc_html__('Blog Excerpt Limit (in words)', 'fixology' ),
			'default'		=> '0',
			'after'  	  	=> '<div class="cs-text-muted"><br>' . esc_html__('Set limit for small description. Select how many words you like to show.', 'fixology') . '<br><strong>' . esc_html__('TIP:', 'fixology') . '</strong> ' . esc_html__('Select "0" (zero) to show excerpt or content before READ MORE break.', 'fixology') . '</div>',
        ),
		
		
		
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Blogbox Settings', 'fixology'),
			'after'  		=> '<small>'.esc_html__('Blog box style view settings. This is because you selected "BOX VIEW" in above option.', 'fixology').'</small>',
		),
		array(
			'id'           	=> 'blogbox_column',
			'type'         	=> 'select',
			'title'        	=>  esc_html__('Blogbox column', 'fixology'),
			'options'  		=> array(
				'one'			=> esc_html__('One Column View', 'fixology'),
				'two'			=> esc_html__('Two Column view', 'fixology'),
				'three'			=> esc_html__('Three Column view (default)', 'fixology'),
				'four'			=> esc_html__('Four Column view', 'fixology'),
			),
			'default'      	=> 'three',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select blog view. The default view is classic list view. You can select two, three or four column blog view from here', 'fixology').'</div>',
			'dependency'    => array( 'blog_view_box', '==', 'true' ),
        ),
		array(
			'id'           	=> 'blogbox_view',
			'type'         	=> 'select',
			'title'        	=>  esc_html__('Blogbox template', 'fixology'),
			'options'  		=> thememount_global_blog_template_list(),
			'default'      	=> 'top-image',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select blog view. The default view is classic list view. You can select two, three or four column blog view from here', 'fixology').'</div>',
			'dependency'    => array( 'blog_view_box', '==', 'true' ),
        ),
		array(
			'id'     		=> 'blogbox_text_limit',
			'type'   		=> 'number',
			'title'         => esc_html__('Blogbox Excerpt Limit (in words)', 'fixology' ),
			'default'		=> '130',
			'after'  	  	=> '<div class="cs-text-muted"><br>' . esc_html__('Set limit for small description. Select how many words you like to show.', 'fixology') . '<br><strong>' . esc_html__('TIP:', 'fixology') . '</strong> ' . esc_html__('Select "0" (zero) to show excerpt or content before READ MORE break.', 'fixology') . '</div>',
        ),
		
		
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Blog Single Settings', 'fixology'),
			'after'  		=> '<small>'.esc_html__('Settings for single view of blog post.', 'fixology').'</small>',
		),
		array(
			'id'     		=> 'post_social_share_services_title',
			'type'    		=> 'text',
			'title'   		=> esc_html__('Title text for Social Share Service', 'fixology'),
			'default' 		=> '',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('This will be shown as title of the Social Share icons list.', 'fixology'). '</div>',
		),
		array(
			'id'        => 'post_social_share_services',
			'type'      => 'checkbox',
			'title'     => esc_html__('Select Social Share Service', 'fixology'),
			'options'   => array(
					'facebook'    => esc_html__('Facebook', 'fixology'),
					'twitter'     => esc_html__('Twitter', 'fixology'),
					'gplus'       => esc_html__('Google Plus', 'fixology'),
					'pinterest'   => esc_html__('Pinterest', 'fixology'),
					'linkedin'    => esc_html__('LinkedIn', 'fixology'),
					'stumbleupon' => esc_html__('Stumbleupon', 'fixology'),
					'tumblr'      => esc_html__('Tumblr', 'fixology'),
					'reddit'      => esc_html__('Reddit', 'fixology'),
					'digg'        => esc_html__('Digg', 'fixology'),
			),
			'after'    	 => '<div class="cs-text-muted"><br>'.esc_html__('The selected social service icon will be visible on single Post so user can share on social sites.', 'fixology').'</div>',
		),
		
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Blog Classic Meta Settings', 'fixology'),
			'after'  		=> '<small>'.esc_html__('Settings for meta data for Blog classic view.', 'fixology').'</small>',
		),
		array(
			'id'      => 'blogclassic_meta_list',
			'type'    => 'sorter',
			'title'   => esc_html__('Classic Blog - Meta Details','fixology'),
			'after'   => '<div class="cs-text-muted"><br>'.esc_html__('Select which data you like to show in post meta details', 'fixology').'</div>',
			'default' => array(
				'enabled' => array(
					'author'  => esc_attr__('Author', 'fixology'),
					'comment' => esc_attr__('Comments', 'fixology'),
					'cat'     => esc_attr__('Categories', 'fixology'),
					'date'    => esc_attr__('Date', 'fixology'),
					
				),
				'disabled' => array(
					'tag'     => esc_attr__('Tags', 'fixology'),
				),
			),
			'enabled_title'  => esc_html__('Active Meta Details', 'fixology'),
			'disabled_title' => esc_html__('Hidden Meta Details', 'fixology'),
		),
		array(
			'id'     		=> 'blogclassic_meta_dateformat',
			'type'    		=> 'text',
			'title'   		=> esc_html__('Date Meta - format', 'fixology'),
			'default' 		=> 'M j, Y',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Set date format.', 'fixology'). ' <a href="' . esc_url('https://codex.wordpress.org/Formatting_Date_and_Time') . '" target="_blank">' . esc_html__('Documentation on date and time formatting.', 'fixology') . '</a></div>',
		),
		array(
			'id'     		=> 'blogclassic_meta_taglink',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Tag list - Add link?', 'fixology'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_html__('Add link in tags', 'fixology').'</div>',
        ),
		array(
			'id'     		=> 'blogclassic_meta_catlink',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Category list - Add link?', 'fixology'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_html__('Add link in categories', 'fixology').'</div>',
        ),
		array(
			'id'     		=> 'blogclassic_meta_authorlink',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Author Name - Add link?', 'fixology'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_html__('Add link in author name', 'fixology').'</div>',
        ),
		
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Blogbox Settings', 'fixology'),
			'after'  		=> '<small>'.esc_html__('Settings for Blogbox (Visual Composer element)', 'fixology').'</small>',
		),
		array(
			'id'      => 'blogbox_meta_list',
			'type'    => 'sorter',
			'title'   => esc_html__('Classic Blog - Meta Details','fixology'),
			'after'   => '<div class="cs-text-muted"><br>'.esc_html__('Select which data you like to show in post meta details', 'fixology').'</div>',
			'default' => array(
				'enabled' => array(
				),
				'disabled' => array(
					'cat'  		=> esc_html__('Categories', 'fixology'),
					'author'  	=> esc_html__('Author', 'fixology'),
					'date'    	=> esc_html__('Date', 'fixology'),
					'tag'  		=> esc_html__('Tags', 'fixology'),
					'comment'	=> esc_html__('Comments', 'fixology'),
				),
			),
			'enabled_title'  => esc_html__('Active Meta Details', 'fixology'),
			'disabled_title' => esc_html__('Hidden Meta Details', 'fixology'),
		),
		array(
			'id'     		=> 'blogbox_meta_dateformat',
			'type'    		=> 'text',
			'title'   		=> esc_html__('Date Meta - format', 'fixology'),
			'default' 		=> 'j M, Y',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Set date format.', 'fixology'). ' <a href="https://codex.wordpress.org/Formatting_Date_and_Time" target="_blank">' . esc_html__('Documentation on date and time formatting.', 'fixology') . '</a></div>',
		),
		array(
			'id'     		=> 'blogbox_meta_taglink',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Tag list - Add link?', 'fixology'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_html__('Add link in tags', 'fixology').'</div>',
        ),
		array(
			'id'     		=> 'blogbox_meta_catlink',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Category list - Add link?', 'fixology'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_html__('Add link in categories', 'fixology').'</div>',
        ),
		array(
			'id'     		=> 'blogbox_meta_authorlink',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Author Name - Add link?', 'fixology'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_html__('Add link in author name', 'fixology').'</div>',
        ),
		
	)
);



// Portfolio Settings
$tm_framework_options[] = array(
	'name'   => 'portfolio_settings', // like ID
	'title'  => sprintf( esc_html__('%s Settings', 'fixology'), $pf_title_singular ),
	'icon'   => 'fa fa-th-large',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_html__('Single %s Settings', 'fixology'), $pf_title_singular ),
			'after'  		=> '<small>' . sprintf( esc_html__('Options to change settings for single %s', 'fixology'), $pf_title_singular ) . '</small>',
		),
		array(
			'id'     		=> 'portfolio_project_details',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_html__('%s Details Box Title', 'fixology'), $pf_title_singular ),
			'default' 		=> '',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_html__('Title for the list styled "%1$s Details" area. (For single %1$s only)', 'fixology'), $pf_title_singular ) . '</div>',
		),
		array(
			'id'      		=> 'portfolio_viewstyle',
			'type'   		=> 'radio',
			'title'   		=> sprintf( esc_html__('Single %s View Style', 'fixology'), $pf_title_singular ),
			'options' 		=> array( 
				'left'			=> esc_html__('Left image and right content (default)', 'fixology'),
				'top'			=> esc_html__('Top image and bottom content', 'fixology'),
				'full'			=> esc_html__('No image and full-width content (without details box)', 'fixology'),
				'full-withimg'  => esc_html__('Top image and full-width content (without details box)', 'fixology'),
			),
			'default'		=> 'left',
			'after'  	  	=> '<div class="cs-text-muted"><br>' . sprintf( esc_html__('Select view for single %s', 'fixology'), $pf_title_singular ) . '</div>',
        ),
		
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_html__('Related %1$s (on single %2$s) Settings', 'fixology'), $pf_title, $pf_title_singular ),
			'after'  		=> '<small>' . sprintf( esc_html__('Options to change settings for related %1$s section on single %2$s page.', 'fixology'), $pf_title, $pf_title_singular ) . '</small>',
		),
		array(
			'id'     		=> 'portfolio_show_related',
			'type'   		=> 'switcher',
			'title'   		=> sprintf( esc_html__('Show Related %s', 'fixology'), $pf_title ),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">' . sprintf( esc_html__('Select ON to show related %1$s on single %2$s page', 'fixology'), $pf_title, $pf_title_singular ) . '</div>',
        ),
		array(
			'id'     		=> 'portfolio_related_title',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_html__('Related %s Title', 'fixology'), $pf_title ),
			'default' 		=> esc_html__('RELATED PROJECTS', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_html__('Title for the Releated %1$s area. (For single %2$s only)', 'fixology'), $pf_title, $pf_title_singular ) . '</div>',
			'dependency'    => array( 'portfolio_show_related', '==', 'true' ),
		),
		array(
			'id'           	=> 'portfolio_related_view',
			'type'         	=> 'select',
			'title'        	=> sprintf( esc_html__('Related %s Boxes template', 'fixology'), $pf_title ),
			'options'       => thememount_global_portfolio_template_list(),
			'default'      	=> 'top-image',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_html__('Select column to show in Related %s area.', 'fixology'), $pf_title ) . '</div>',
			'dependency'    => array( 'portfolio_show_related', '==', 'true' ),
        ),
		array(
			'id'           	=> 'portfolio_related_column',
			'type'         	=> 'select',
			'title'        	=> esc_html__('Select column', 'fixology'),
			'options'  => array(
					'two'     => esc_html__('Two column', 'fixology'),
					'three'   => esc_html__('Three column', 'fixology'),
					'four'    => esc_html__('Four column', 'fixology'),
					'five'    => esc_html__('Five column', 'fixology'),
					'six'     => esc_html__('Six column', 'fixology'),
				),
			//'class'        	=> 'chosen',
			'default'      	=> 'three',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_html__('Select column to show in Related %s area.', 'fixology'), $pf_title ) . '</div>',
			'dependency'    => array( 'portfolio_show_related', '==', 'true' ),
        ),
		array(
			'id'     		=> 'portfolio_related_show',
			'type'   		=> 'number',
			'title'         => sprintf( esc_html__('Show %s', 'fixology'), $pf_title ),
			'default'		=> '3',
			'after'  	  	=> '<div class="cs-text-muted"><br>' . sprintf( esc_html__('How many %2$s Boxes you like to show in Related %1$s area.', 'fixology'), $pf_title, $pf_title_singular ) . '</div>',
			'dependency'    => array( 'portfolio_show_related', '==', 'true' ),
        ),
		
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_html__('Single %s List Details Settings', 'fixology'), $pf_title_singular ),
			'after'  		=> '<small>' . sprintf( esc_html__('Options to change each line of list details for single %1$s. Here you can select how many lines will be appear in the details of a single %1$s', 'fixology'), $pf_title_singular ) . '</small>',
		),
		array(
			'id'              => 'pf_details_line',
			'type'            => 'group',
			'title'           => esc_html__('Line Details', 'fixology'),
			'info'            => sprintf( esc_html__('This will be added a new line in DETAILS box on single %s view.', 'fixology'), $pf_title_singular ),
			'button_title'    => esc_html__('Add New Line', 'fixology'),
			'accordion_title' => esc_html__('Details for the line', 'fixology'),
			
			'default'		 => array (
				array (
					'pf_details_line_title' => esc_html__('Project Title :', 'fixology'),
					'pf_details_line_icon'  => array (
						'library'			  => 'linecons',
						'library_fontawesome' => 'fa fa-suitcase',
						'library_linecons'	  => 'vc_li vc_li-note',
						'library_themify'	  => 'ti-location-pin',
					),
					'data'					=> 'custom',
				),
				array (
					'pf_details_line_title' => esc_html__('Category :', 'fixology'),
					'pf_details_line_icon'  => array (
						'library'			  => 'linecons',
						'library_fontawesome' => 'fa fa-beer',
						'library_linecons'	  => 'vc_li vc_li-tag',
						'library_themify'	  => 'ti-location-pin',
					),
					'data'					=> 'custom',
				),
				array (
					'pf_details_line_title' => esc_html__('Client Details :', 'fixology'),
					'pf_details_line_icon'  => array (
						'library'				=> 'linecons',
						'library_fontawesome'	=> 'fa fa-bars',
						'library_linecons'		=> 'vc_li vc_li-user',
						'library_themify'		=> 'ti-location-pin',
					),
					'data'					=> 'custom',
				),
				array (
					'pf_details_line_title' => esc_html__('Project Link :', 'fixology'),
					'pf_details_line_icon'  => array (
						'library'				=> 'linecons',
						'library_fontawesome'	=> 'fa fa-ok',
						'library_linecons'		=> 'vc_li vc_li-cloud',
						'library_themify'		=> 'ti-location-pin',
					),
					'data'					=> 'custom',
				),
				array (
					'pf_details_line_title'	=> esc_html__('Project Location :', 'fixology'),
					'pf_details_line_icon'	=> 
					array (
						'library'				=> 'themify',
						'library_fontawesome'	=> 'fa fa-ok',
						'library_linecons'		=> 'vc_li vc_li-bubble',
						'library_themify'		=> 'themifyicon ti-location-pin',
					),
					'data'					=> 'custom',
				),
			),
			'fields'          => array(
				array(
					'id'     		=> 'pf_details_line_title',
					'type'    		=> 'text',
					'title'   		=> esc_html__('Line Title', 'fixology'),
					'default' 		=> esc_html__('Location', 'fixology'),
					'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_html__('Title for the first line of the details in single %s', 'fixology'), $pf_title_singular ) . '<br> ' . esc_html__('Leave this field empty to remove the line.', 'fixology').'</div>',
				),
				array(
					'id'      => 'pf_details_line_icon',
					'type'    => 'thememount_iconpicker',
					'title'  		=> esc_html__('Line Icon', 'fixology' ),
					'default' => array(
						'library'             => 'fontawesome',
						'library_fontawesome' => 'fa fa-map-marker',
					),
					'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_html__('Select icon for the first Line of the details in single %s', 'fixology'), $pf_title_singular ) . '</div>',
				),
				
				array(
					'id'      		=> 'data',
					'type'   		=> 'select',
					'title'   		=> esc_html__('Line Input Type', 'fixology'),
					'options' 		=> array(
							'custom'        => esc_html__('Custom text (single line)', 'fixology'),
							'multiline'     => esc_html__('Custom text with multiline', 'fixology'),
							'date'          => sprintf( esc_html__('Show date of the %s', 'fixology'), $pf_title_singular ),
							'category'      => sprintf( esc_html__('Show Category (without link) of the %s', 'fixology'), $pf_title_singular ),
							'category_link' => sprintf( esc_html__('Show Category (with link) of the %s', 'fixology'), $pf_title_singular ),
							'tag'           => sprintf( esc_html__('Show Tags (without link) of the %s', 'fixology'), $pf_title_singular ),
							'tag_link'      => sprintf( esc_html__('Show Tags (with link) of the %s', 'fixology'), $pf_title_singular ),
					),
					'default'		=> 'custom',
					'after'  	  	=> '<div class="cs-text-muted"><br>' . sprintf( esc_html__('Select view for single %s', 'fixology'), $pf_title_singular ) . '</div>',
				),
			)
        ),
		
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_html__('Select social sharing service for single %s', 'fixology'), $pf_title_singular ),
			'after'  		=> '<small>' . sprintf( esc_html__('Select social service so site visitors can share the single %s on different social services', 'fixology'), $pf_title_singular ) . '</small>',
		),
		array(
			'id'     		=> 'portfolio_show_social_share',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Show Social Share box', 'fixology'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_html__('Show or hide social share box.', 'fixology').'</div>',
        ),
		array(
			'id'     		=> 'portfolio_social_share_title',
			'type'    		=> 'text',
			'title'   		=> esc_html__('Social Share Title', 'fixology'),
			'default' 		=> esc_html__('Share', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('This text will appear in the social share box as title', 'fixology').'</div>',
			'dependency'    => array( 'portfolio_show_social_share', '==', 'true' ),
		),
		array(
			'id'        => 'portfolio_social_share_services',
			'type'      => 'checkbox',
			'title'     => esc_html__('Select Social Share Service', 'fixology'),
			'options'   => array(
					'facebook'    => esc_html__('Facebook', 'fixology'),
					'twitter'     => esc_html__('Twitter', 'fixology'),
					'gplus'       => esc_html__('Google Plus', 'fixology'),
					'pinterest'   => esc_html__('Pinterest', 'fixology'),
					'linkedin'    => esc_html__('LinkedIn', 'fixology'),
					'stumbleupon' => esc_html__('Stumbleupon', 'fixology'),
					'tumblr'      => esc_html__('Tumblr', 'fixology'),
					'reddit'      => esc_html__('Reddit', 'fixology'),
					'digg'        => esc_html__('Digg', 'fixology'),
			),
			'default'    => array( 'facebook', 'twitter', 'gplus', 'pinterest' ),
			'after'    	 => '<div class="cs-text-muted"><br>' . sprintf( esc_html__('The selected social service icon will be visible on single %s so user can share on social sites.', 'fixology'), $pf_title_singular ) . '</div>',
			'dependency' => array( 'portfolio_show_social_share', '==', 'true' ),
		),
		array(
			'id'     		=> 'portfolio_single_top_btn_title',
			'type'    		=> 'text',
			'title'   		=> esc_html__('Button Title', 'fixology'),
			'default' 		=> esc_html__('View Projects', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('This button will appear after the social share links.', 'fixology').'</div>',
		),
		array(
			'id'     		=> 'portfolio_single_top_btn_link',
			'type'    		=> 'text',
			'title'   		=> esc_html__('Button Link', 'fixology'),
			'default' 		=> '#',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('This button will appear after the social share links.', 'fixology').'</div>',
		),
		
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_html__('%s Settings', 'fixology'), $pf_cat_title ),
			'after'  		=> '<small>' . sprintf( esc_html__('Settings for %s', 'fixology'), $pf_cat_title ) . '</small>',
		),
		array(
			'id'           	=> 'pfcat_view',
			'type'         	=> 'select',
			'title'        	=> sprintf( esc_html__('%s Boxes template', 'fixology'), $pf_title_singular ),
			'options'       => thememount_global_portfolio_template_list(),
			'default'      	=> 'overlay',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_html__('Select %1$s Box view on single %2$s page.', 'fixology'), $pf_title_singular, $pf_cat_title_singular ) . '</div>',
        ),
		array(
			'id'           	=> 'pfcat_column',
			'type'         	=> 'select',
			'title'        	=>  esc_html__('Select column', 'fixology'),
			'options'  => array(
					'two'     => esc_html__('Two column', 'fixology'),
					'three'   => esc_html__('Three column', 'fixology'),
					'four'    => esc_html__('Four column', 'fixology'),
					'five'    => esc_html__('Five column', 'fixology'),
					'six'     => esc_html__('Six column', 'fixology'),
				),
			'default'      	=> 'three',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_html__('Select column to show on %s page.', 'fixology'), $pf_cat_title_singular ) . '</div>',
        ),
		array(
			'id'     		=> 'pfcat_show',
			'type'   		=> 'number',
			'title'         => sprintf( esc_html__('%s to show', 'fixology' ), $pf_title_singular ),
			'default'		=> '9',
			'after'  	  	=> '<div class="cs-text-muted"><br>' . sprintf( esc_html__('How many %1$s you like to show on %2$s page', 'fixology'), $pf_title_singular, $pf_cat_title_singular ) . '</div>',
        ),
	)
);


// Team Member Settings
$tm_framework_options[] = array(
	'name'   => 'team_member_settings', // like ID
	'title'  => sprintf( esc_html__('%s Settings', 'fixology'), $team_member_title_singular ),
	'icon'   => 'fa fa-users',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_html_x('%s\'s Extra Details Settings', 'Team Member', 'fixology'), $team_member_title_singular ),
			'after'  		=> '<small>'.sprintf( esc_html_x('You can fill this extra details and the details will be available on single %s page only. This will be shown as LIST with title and value design.', 'Team Member', 'fixology'), $team_member_title_singular ) . '</small>',
		),
		array(
			'id'              => 'team_extra_details_lines',
			'type'            => 'group',
			'title'           => esc_html__('Line Details', 'fixology'),
			'info'            => sprintf( esc_html_x('This will be added a new line in DETAILS box on single %s.', 'Team Member', 'fixology'), $team_member_title_singular ),
			'button_title'    => esc_html__('Add New Line', 'fixology'),
			'accordion_title' => esc_html__('Details for the line', 'fixology'),
			'fields'          => array(
				array(
					'id'     		=> 'team_extra_details_line_title',
					'type'    		=> 'text',
					'title'   		=> esc_html__('Line Title', 'fixology'),
					'default' 		=> esc_html__('Experience', 'fixology'),
					'after'  		=> '<div class="cs-text-muted"><br>'. sprintf( esc_html_x('Title for the first line in the DETAILS box in single %s', 'Team Member', 'fixology'), $team_member_title_singular ) . '<br> ' . esc_html__('Leave this field empty to remove the line.', 'fixology').'</div>',
				),
				array(
					'id'      => 'team_extra_details_line_icon',
					'type'    => 'thememount_iconpicker',
					'title'   => esc_html__('Line Icon', 'fixology' ),
					'after'   => '<div class="cs-text-muted"><br>' . sprintf( esc_html_x('Select icon for the Line of the details in single %s', 'Team Member', 'fixology'), $team_member_title_singular ) . '</div>',
					'default' => array(
						'library'             => 'fontawesome',
						'library_fontawesome' => 'fa fa-bookmark',
					),
				),
				
				array(
					'id'      		=> 'data',
					'type'   		=> 'radio',
					'title'   		=> esc_html__('Line Data Type', 'fixology'),
					'options' 		=> array(
							'custom'  => esc_html__('Custom text (add anything)', 'fixology'),
							'url'     => esc_html__('URL link', 'fixology'),
							'email'   => esc_html__('Email address', 'fixology'),
							'phone'   => esc_html__('Phone number', 'fixology'),
					),
					'default'		=> 'custom',
					'after'  	  	=> '<div class="cs-text-muted"><br>'.sprintf( esc_html_x('Select view for single %s', 'Team Member', 'fixology'), $team_member_title_singular ).'</div>',
				),
			),
			'default' =>  array (
				array (
					'team_extra_details_line_title' => 'Experience',
					'team_extra_details_line_icon'  => array (
						'library'				=> 'fontawesome',
						'library_fontawesome'	=> 'fa fa-bars',
						'library_linecons'		=> 'vc_li vc_li-bubble',
						'library_themify'		=> 'ti-location-pin',
					),
					'data'							=> 'custom',
				),
				array (
					'team_extra_details_line_title' => 'Since',
					'team_extra_details_line_icon'  => array (
						'library'				=> 'fontawesome',
						'library_fontawesome'	=> 'fa fa-bookmark-o',
						'library_linecons'		=> 'vc_li vc_li-bubble',
						'library_themify'		=> 'ti-location-pin',
					),
					'data'							=> 'custom',
				),
				array (
					'team_extra_details_line_title' => 'Weight',
					'team_extra_details_line_icon'	=> array (
						'library'				=> 'fontawesome',
						'library_fontawesome'	=> 'fa fa-bolt',
						'library_linecons'		=> 'vc_li vc_li-bubble',
						'library_themify'		=> 'ti-location-pin',
					),
					'data'							=> 'custom',
				),
				array (
					'team_extra_details_line_title'	=> 'Address',
					'team_extra_details_line_icon'	=> array (
						'library'						=> 'themify',
						'library_fontawesome'			=> 'fa fa-arrows-v',
						'library_linecons'				=> 'vc_li vc_li-bubble',
						'library_themify'				=> 'ti-location-pin',
					),
					'data'							=> 'custom',
				),
			),
			
        ),
		

		
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_html__('%s Settings', 'fixology'), $team_group_title_singular),
			'after'  		=> '<small>' . sprintf( esc_html__('Settings for %s page', 'fixology'), $team_group_title_singular) . '</small>',
		),
		array(
			'id'           	=> 'teamcat_view',
			'type'         	=> 'select',
			'title'        	=> sprintf( esc_html__('%s Boxes template', 'fixology'), $team_member_title_singular ),
			'options'       => thememount_global_team_member_template_list(),
			'default'      	=> 'topimage-bottomcontent',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_html__('Select %1$s\'s Box view on %2$s page.', 'fixology'), $team_member_title_singular, $team_group_title_singular ) . '</div>',
        ),
		array(
			'id'           	=> 'teamcat_column',
			'type'         	=> 'select',
			'title'        	=>  esc_html__('Select column', 'fixology'),
			'options'  => array(
					'two'   => esc_html__('Two column', 'fixology'),
					'three' => esc_html__('Three column', 'fixology'),
					'four'  => esc_html__('Four column', 'fixology'),
				),
			'default'      	=> 'three',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf(esc_html__('Select column to show %s', 'fixology'), $team_member_title ) . '</div>',
        ),
		array(
			'id'     		=> 'teamcat_show',
			'type'   		=> 'number',
			'title'         => sprintf( esc_html__('%s to Show', 'fixology' ), $team_member_title  ),
			'default'		=> '9',
			'after'  	  	=> '<div class="cs-text-muted"><br>' . sprintf( esc_html__('How many %s you like to show on category page', 'fixology'), $team_member_title  ) . '</div>',
        ),
		
	)
);



// Creating Client Groups array 
$client_groups = array();
if( isset($fixology_theme_options['client_groups']) && is_array($fixology_theme_options['client_groups']) ){

foreach( $fixology_theme_options['client_groups'] as $key => $val ){

	$name = $val['client_group_name'];
	$slug = str_replace(' ', '_', strtolower($name));
	$client_groups[$slug] = $name;
}

}




// Error 404 Page Settings
$tm_framework_options[] = array(
	'name'   => 'error404_page_settings', // like ID
	'title'  => esc_html__('Error 404 Page Settings', 'fixology'),
	'icon'   => 'fa fa-exclamation-triangle',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Error 404 Page Settings', 'fixology'),
			'after'  		=> '<small>'.esc_html__('Settings that determine how the error page will be looking', 'fixology').'</small>',
		),
		array(
			'id'      => 'error404_big_icon',
			'type'    => 'thememount_iconpicker',
			'title'  		=> esc_html__('Big icon', 'fixology' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select icon that appear in top with big size', 'fixology').'</div>',
			'default' =>  array (
				'library'			  => 'fontawesome',
				'library_fontawesome' => 'fa fa-thumbs-o-down',
				'library_linecons'	  => '',
				'library_themify'	  => 'ti-location-pin',
			),
		),
		array(
			'id'     		=> 'error404_big_text',
			'type'    		=> 'text',
			'title'   		=> esc_html__('Big heading text', 'fixology'),
			'default' 		=> esc_html__('404 ERROR', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_html__('This text will be shown with big font size below icon', 'fixology').'</div>',
		),
		array(
			'id'     		=> 'error404_medium_text',
			'type'    		=> 'text',
			'title'   		=> esc_html__('Description text', 'fixology'),
			'default' 		=> esc_html__('This page may have been moved or deleted. Be sure to check your spelling.', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_html__('This file may have been moved or deleted. Be sure to check your spelling', 'fixology').'</div>',
		),
		array(
			'id'     		=> 'error404_search',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Show Search Form', 'fixology'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_html__('Set this option "YES" to show search form on the 404 page', 'fixology').'</div>',
        ),
		
		
	)
);


// Search Page Settings
$tm_framework_options[] = array(
	'name'   => 'search_page_settings', // like ID
	'title'  => esc_html__('Search Page Settings', 'fixology'),
	'icon'   => 'fa fa-search',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Search Page Settings', 'fixology'),
		),
		array(
			'id'       		 => 'searchnoresult',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_html__('Content of the search page if no results found', 'fixology'),
			'shortcode'		 => true,
			'after'  	     => '<div class="cs-text-muted"><br>'. esc_html__('Specify the content of the page that will be displayed if while search no results found', 'fixology') . '<br> ' . esc_html__('HTML tags and shortcodes are allowed', 'fixology').'</div>',
			'default'  		 => thememount_wp_kses( urldecode('%3Ch3%3ENothing+found%3C%2Fh3%3E%3Cp%3ESorry%2C+but+nothing+matched+your+search+terms.+Please+try+again+with+some+different+keywords.%3C%2Fp%3E') ),
        ),
		
	)
);


// Sidebar Settings
$tm_framework_options[] = array(
	'name'   => 'sidebar_settings', // like ID
	'title'  => esc_html__('Sidebar Settings', 'fixology'),
	'icon'   => 'fa fa-pause',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Sidebar Settings', 'fixology'),
		),
		array(
			'id'              => 'custom_sidebars',
			'type'            => 'group',
			'title'           => esc_html__('Custom Sidebars', 'fixology'),
			'info'            => esc_html__('Specify the custom sidebars that can be used in the pages for a widgets', 'fixology'),
			'button_title'    => esc_html__('Add New Sidebar', 'fixology'),
			'accordion_title' => esc_html__('Custom Sidebar Properties', 'fixology'),
			'fields'          => array(
					array(
						'id'     		=> 'custom_sidebar',
						'type'    		=> 'text',
						'title'   		=> esc_html__('Custom Sidebar Name', 'fixology'),
						'after'  		=> '<div class="cs-text-muted"><br>'. esc_html__('Write custom sidebar name here', 'fixology').'</div>',
					),

			)
        ),
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Sidebar Position', 'fixology'),
			'after'  		=> '<small>'.esc_html__('Select sidebar position for different sections', 'fixology').'</small>',
		),
		array(
			'id'           	=> 'sidebar_post',
			'type'        	=> 'image_select',
			'title'       	=> esc_html__('Blog Post/Category Sidebar', 'fixology'),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'right',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select one of layouts for blog post. Also for Category, Tag and Archive view too. Technically, related to all blog post view.', 'fixology').'</div>',
        ),
		array(
			'id'           	=> 'sidebar_page',
			'type'        	=> 'image_select',
			'title'       	=> esc_html__('Standard Pages Sidebar', 'fixology'),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'right',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select one of layouts for standard pages', 'fixology').'</div>',
        ),
		array(
			'id'           	=> 'sidebar_team_member',
			'type'        	=> 'image_select',
			'title'       	=> esc_html__('Team member Sidebar', 'fixology'),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'left',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select one of layouts for Team Member single and Team Member Group.', 'fixology').'</div>',
        ),
		array(
			'id'           	=> 'sidebar_team_member_group',
			'type'        	=> 'image_select',
			'title'       	=> esc_html__('Team member Group Sidebar', 'fixology'),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'left',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select one of layouts for Team Member single and Team Member Group.', 'fixology').'</div>',
        ),
		array(
			'id'           	=> 'sidebar_portfolio',
			'type'        	=> 'image_select',
			'title'       	=> sprintf( esc_html__('%s Sidebar', 'fixology'), $pf_title_singular ),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'no',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_html__('Select one of layouts for %s single pages.', 'fixology'), $pf_title_singular ) . '</div>',
        ),
		array(
			'id'           	=> 'sidebar_portfolio_category',
			'type'        	=> 'image_select',
			'title'       	=> sprintf( esc_html__('%s Sidebar', 'fixology'), $pf_cat_title_singular ),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'left',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_html__('Select one of layouts for %s view.', 'fixology'), $pf_cat_title_singular ) . '</div>',
        ),
		array(
			'id'           	=> 'sidebar_search',
			'type'        	=> 'image_select',
			'title'       	=> esc_html__('Search Page Sidebar', 'fixology'),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'no',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select one of layouts for search page', 'fixology').'</div>',
        ),
		array(
			'id'           	=> 'sidebar_woocommerce',
			'type'        	=> 'image_select',
			'title'       	=> esc_html__('WooCommerce Sidebar', 'fixology'),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'right',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select sidebar position for WooCommerce Shop and Single Product page', 'fixology').'</div>',
        ),
		array(
			'id'           	=> 'sidebar_bbpress',
			'type'        	=> 'image_select',
			'title'       	=> esc_html__('BBPress Sidebar', 'fixology'),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'right',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select sidebar position for BBPress pages', 'fixology').'</div>',
        ),
		array(
			'id'           	=> 'sidebar_events',
			'type'        	=> 'image_select',
			'title'       	=> esc_html__('Events Sidebar', 'fixology'),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'right',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select sidebar position for Events pages.', 'fixology') . ' ' . sprintf( esc_html__('This is valid for %s plugin only','fixology') , '<a href="https://wordpress.org/plugins/the-events-calendar/" target="_blank">The Events Calendar</a>' ).'</div>',
        ),
	)
);


// Getting social list
$global_social_list = tm_shared_social_list();
	
// social service list
$sociallist = array_merge(
	$global_social_list,
	array('rss'     => 'Rss Feed')
);

// Social Links
$tm_framework_options[] = array(
	'name'   => 'social_links', // like ID
	'title'  => esc_html__('Social Links', 'fixology'),
	'icon'   => 'fa fa-share-square-o',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Social Links', 'fixology'),
			'after'			=> '<small>' . sprintf(__('You can use %1$s[tm-social-links]%2$s shortcode to show social links.', 'fixology'), '<code>' , '</code>' ) . '</small>',
		),
		array(
			'id'              => 'social_icons_list',
			'type'            => 'group',
			'title'           => esc_html__('Social Links', 'fixology'),
			'info'            => esc_html__('Add your social services here. Also you can reorder the Social Links as per your choice. Just drag and drop items to reorder as per your choice', 'fixology'),
			'button_title'    => esc_html__('Add New Social Service', 'fixology'),
			'accordion_title' => esc_html__('Social Service Properties', 'fixology'),
			'fields'          => array(
					array(
						'id'            => 'social_service_name',
						'type'          => 'select',
						'title'         =>  esc_html__('Social Service', 'fixology'),
						'options'  		=> $sociallist,
						'default'       => 'twitter',
						'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select Social icon from here', 'fixology').'</div>',
					),
					array(
						'id'     		=> 'social_service_link',
						'type'    		=> 'text',
						'title'   		=> esc_html__('Link to Social icon selected above', 'fixology'),
						'after'  		=> '<div class="cs-text-muted"><br>'. esc_html__('Paste URL only', 'fixology').'</div>',
						'dependency' 	=> array( 'social_service_name', '!=', 'rss' ),
					),

			),
			'default' => array (
				
				array (
					'social_service_name' => 'facebook',
					'social_service_link' => '#',
				),
				array (
					'social_service_name' => 'twitter',
					'social_service_link' => '#',
				),
				array (
					'social_service_name' => 'flickr',
					'social_service_link' => '#',
				),
				array (
					'social_service_name' => 'linkedin',
					'social_service_link' => '',
				),
				
			),
        ),
		
		
		
	),
	
	

	
);


// WooCommerce Settings
$tm_framework_options[] = array(
	'name'   => 'woocommerce_settings', // like ID
	'title'  => esc_html__('WooCommerce Settings', 'fixology'),
	'icon'   => 'fa fa-shopping-cart',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('WooCommerce Settings', 'fixology'),
			'after'  		=> '<small>'. esc_html__('Setup for WooCommerce shop section. Please make sure you installed WooCommerce plugin', 'fixology').'</small>',
		),
		array(
			'id'     		=> 'wc-header-icon',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Show Cart Icon in Header', 'fixology'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_html__('Select "On" to show the cart icon in header. Select "OFF" to hide the cart icon.', 'fixology') . ' <br><br> ' . '<strong>' . esc_html__('NOTE:','fixology') . '</strong> ' . esc_html__('Please note that if you haven\'t installed "WooCommerce" plugin than the icon will not appear even if you selected "ON" in this option.', 'fixology').'</div>',
        ),
		array(
			'id'     		=> 'woocommerce-column', 
			'type'   		=> 'radio',
			'title'  		=> esc_html__('WooCommerce Product List Column', 'fixology'),
			'options'  		=> array(
								'1' => esc_html__('One Column', 'fixology'),
								'2' => esc_html__('Two Columns', 'fixology'),
								'3' => esc_html__('Three Columns', 'fixology'),
								'4' => esc_html__('Four Columns', 'fixology'),
							),
			'default'  		 => '3',
			'after'   		 => '<div class="cs-text-muted">'.esc_html__('Select how many column you want to show for product list view', 'fixology').'</div>',
        ),
		array(
			'id'     		=> 'woocommerce-product-per-page',
			'type'   		=> 'number',
			'title'         => esc_html__('Products Per Page', 'fixology' ),
			'default'		=> '9',
			'after'  	  	=> '<div class="cs-text-muted"><br>'.esc_html__('Select how many product you want to show on SHOP page', 'fixology').'</div>',
        ),
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Single Product Page Settings', 'fixology'),
			'after'  		=> '<small>'. esc_html__('Options for Single product page', 'fixology').'</small>',
		),
		array(
			'id'     		=> 'wc-single-show-related',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Show Related Products', 'fixology'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_html__('Select "ON" to show Related Products below the product description on single page', 'fixology').'</div>',
        ),
		array(
			'id'     		=> 'wc-single-related-column', 
			'type'   		=> 'radio',
			'title'  		=> esc_html__('Column for Related Products', 'fixology'),
			'options'  		=> array(
								'1' => esc_html__('One Column', 'fixology'),
								'2' => esc_html__('Two Columns', 'fixology'),
								'3' => esc_html__('Three Columns', 'fixology'),
								'4' => esc_html__('Four Columns', 'fixology'),
							),
			'default'  		 => '3',
			'after'   		 => '<div class="cs-text-muted">'.esc_html__('Select how many column you want to show for product list of related products', 'fixology').'</div>',
			'dependency'     => array( 'wc-single-show-related', '==', 'true' ),
        ),
		array(
			'id'     		=> 'wc-single-related-count',
			'type'   		=> 'number',
			'title'         => esc_html__('Related Products Show', 'fixology' ),
			'default'		=> '3',
			'after'  	  	=> '<div class="cs-text-muted"><br>'.esc_html__('Select how many products you want to show in the Related prodcuts area on single product page', 'fixology').'</div>',
			'dependency'    => array( 'wc-single-show-related', '==', 'true' ),
        ),
	)
);


// Under Construction
$tm_framework_options[] = array(
	'name'   => 'under_construction', // like ID
	'title'  => esc_html__('Under Construction', 'fixology'),
	'icon'   => 'fa fa-send',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Under Construction', 'fixology'),
			'after'  		=> '<small>'. esc_html__('You can set your site in Under Construciton mode during development of your site. Please note that only logged in users like admin can view the site when this mode is activated', 'fixology').'</small>',
		),
		array(
			'id'     		=> 'uconstruction',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Show Under Construciton Message', 'fixology'),
			'default' 		=> false,
			'label'  		=> esc_html__('You can acitvate this during development of your site. So site visitor will see Under Construction message.', 'fixology'). '<br>' . esc_html__('Please note that admin (when logged in) can view live site and not Under Construction message.', 'fixology'),
        ),
		array(
			'id'     		=> 'uconstruction_title',
			'type'    		=> 'text',
			'title'   		=> esc_html__('Title for Under Construction page', 'fixology'),
			'default'  		=> esc_html__('This site is Under Construction', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_html__('Write TITLE for the Under Construction page', 'fixology').'</div>',
			'dependency'	=> array('uconstruction','==','true'),
		),
		array(
			'id'       		 => 'uconstruction_html',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_html__('Page Content', 'fixology'),
			'shortcode'		 => true,
			'dependency'	 => array('uconstruction','==','true'),
			'default' 		 => thememount_wp_kses( urldecode('%3Cdiv+class%3D%22un-main-page-content%22%3E%0D%0A%3Cdiv+class%3D%22un-page-content%22%3E%0D%0A%3Cdiv%3E%5Btm-logo%5D%3C%2Fdiv%3E%0D%0A%3Cdiv+class%3D%22sepline%22%3E%3C%2Fdiv%3E%0D%0A%3Ch1+class%3D%22heading%22%3EUNDER+CONSTRUCTION%3C%2Fh1%3E%0D%0A%3Ch4+class%3D%22subheading%22%3ESomething+awesome+this+way+comes.+Stay+tuned%21%3C%2Fh4%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E') ),
			'after'  		 => '<div class="cs-text-muted"><br>'. esc_html__('Write your HTML code for Under Construction page body content', 'fixology').'</div>',
        ),
		array(
			'id'      		=> 'uconstruction_background',
			'type'    		=> 'thememount_background',
			'title'  		=> esc_html__('Background Properties', 'fixology' ),
			'dependency'	 => array('uconstruction','==','true'),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Set background options. This is for main body background', 'fixology').'</div>',
			'default'		=> array(
				'image'			=> get_template_directory_uri() . '/images/uconstruction-bg.jpg',
				'repeat'		=> 'no-repeat',
				'position'		=> 'right bottom',
				'attachment'	=> 'fixed',
				'color'			=> '#ffffff',
			),
			'output'      	=> '.uconstruction_background',
        ),
		array(
			'id'       		=> 'uconstruction_css_code',
			'type'     		=> 'textarea',
			'title'    		=>  esc_html__('CSS Code for Under Construction page', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_html__('Write your custom CSS code here', 'fixology').'</div>',
			'dependency'	=> array('uconstruction','==','true'),
			'default'		=> trim('body{padding: 0;margin: 0;}.heading, .subheading{font-family: "Montserrat", sans-serif;}.heading{font-size: 60px;line-height: 65px;letter-spacing: 2px;margin: 0;margin-bottom: 18px;font-weight: normal;}.subheading{font-size: 25px;line-height: 30px;color: #888;letter-spacing: 1px;margin: 0;font-weight: normal;}.un-main-page-content{position: absolute;left: 50%;top: 50%;-khtml-transform: translateX(-50%) translateY(-50%);-moz-transform: translateX(-50%)translateY(-50%);-ms-transform: translateX(-50%) translateY(-50%);-o-transform: translateX(-50%) translateY(-50%);transform: translateX(-50%) translateY(-50%);}.tm-sc-logo{margin-bottom: 40px;display: inline-block;}'),
        ),
		
		
	)
);





// Seperator
$tm_framework_options[] = array(
	'name'   => 'tm_seperator_1',
	'title'  => esc_html__('Advanced', 'fixology'),
	'icon'   => 'fa fa-ellipsis-h'
);

$cssfile = (is_multisite()) ? 'php' : 'css' ;



// Advanced Settings
$tm_framework_options[] = array(
	'name'   => 'advanced_settings', // like ID
	'title'  => esc_html__('Advanced Settings', 'fixology'),
	'icon'   => 'fa fa-wrench',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_html__('Custom Post Type : %s (Portfolio) Settings', 'fixology'), $pf_title_singular ),
			'after'  		=> '<small>'. esc_html__('Advanced settings for Portfolio custom post type', 'fixology').'</small>',
		),
		array(
			'id'     		=> 'pf_type_title',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_html__('Title for %s (Portfolio) Post Type', 'fixology'), $pf_title_singular ),
			'default'  		=> esc_html__('Portfolio', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_html__('This will change the Title for Portfolio post type section', 'fixology').'</div>',
		),
		array(
			'id'     		=> 'pf_type_title_singular',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_html__('Singular title for %s (Portfolio) Post Type', 'fixology'), $pf_title_singular ),
			'default'  		=> esc_html__('Portfolio', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_html__('This will change the Title for Portfolio post type section. Only for singular title.', 'fixology').'</div>',
		),
		array(
			'id'     		=> 'pf_type_slug',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_html__('URL Slug for %s (Portfolio) Post Type', 'fixology'), $pf_title_singular ),
			'default'  		=> esc_html('portfolio'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_html__('This will change the URL slug for Portfolio post type section', 'fixology').'</div>',
		),
		array(
			'id'     		=> 'pf_cat_title',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_html__('Title for %s (Portfolio Category) List', 'fixology'), $pf_cat_title_singular ),
			'default'  		=> esc_html__('Portfolio Categories', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_html__('Title for Portfolio Category list for group page. This will appear at left sidebar', 'fixology').'</div>',
		),
		array(
			'id'     		=> 'pf_cat_title_singular',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_html__('Singular Title for %s (Portfolio Category) List', 'fixology'), $pf_cat_title_singular ),
			'default'  		=> esc_html__('Portfolio Category', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_html__('Title for Portfolio Category list for group page. This will appear at left sidebar', 'fixology').'</div>',
		),
		array(
			'id'     		=> 'pf_cat_slug',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_html__('URL Slug for %s (Portfolio Category) Link', 'fixology'), $pf_cat_title_singular ),
			'default'  		=> esc_html__('portfolio-category', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_html__('This will change the URL slug for Portfolio Category link', 'fixology').'</div>',
		),
		
	
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_html__('Custom Post Type : %s (Team member) Settings', 'fixology'), $team_member_title_singular ),
			'after'  		=> '<small>'. esc_html__('Advanced settings for Team Member custom post type', 'fixology').'</small>',
		),
		array(
			'id'     		=> 'team_type_title',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_html__('Title for %s (Team Member) Post Type', 'fixology'), $team_member_title_singular ),
			'default'  		=> esc_html__('Team Members', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_html__('This will change the Title for Team Member post type section', 'fixology').'</div>',
		),
		array(
			'id'     		=> 'team_type_title_singular',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_html__('Singular title for %s (Team Member) Post Type', 'fixology'), $team_member_title_singular ),
			'default'  		=> esc_html__('Team Member', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_html__('This will change the Title for Team Member post type section. Only for singular title.', 'fixology').'</div>',
		),
		array(
			'id'     		=> 'team_type_slug',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_html__('URL Slug for %s (Team Member) Post Type', 'fixology'), $team_member_title_singular ),
			'default'  		=> esc_html__('team-member', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_html__('This will change the URL slug for Team Member post type section', 'fixology').'</div>',
		),
		array(
			'id'     		=> 'team_group_title',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_html__('Title for %s (Team Group) List', 'fixology'), $team_group_title_singular ),
			'default'  		=> esc_html__('Team Groups', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_html__('Title for Team Group list for group page. This will appear at left sidebar', 'fixology').'</div>',
		),
		array(
			'id'     		=> 'team_group_title_singular',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_html__('Singular Title for %s (Team Group) List', 'fixology'), $team_group_title_singular ),
			'default'  		=> esc_html__('Team Group', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_html__('Title for Team Group list for group page. This will appear at left sidebar', 'fixology').'</div>',
		),
		array(
			'id'     		=> 'team_group_slug',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_html__('URL Slug for %s (Team Group) Link', 'fixology'), $team_group_title_singular ),
			'default'  		=> esc_html__('team-group', 'fixology'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_html__('This will change the URL slug for Team Group link', 'fixology').'</div>',
		),
		
		
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Minify Options', 'fixology'),
			'after'  		=> '<small>'. esc_html__('Options to minify HTML/JS/CSS files', 'fixology').'</small>',
		),
		array(
			'id'     		=> 'minify',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Minify JS and CSS files', 'fixology'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted"><br>'. esc_html__('This will generate MIN version of all CSS and JS files. This will help you to lower the page load time. You can use this if the Theme Options are not working', 'fixology').'</div>',
        ),
		
		// Thumb Image Size Options
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Box Image Size Options', 'fixology'),
			'after'  		=> '<small>'. esc_html__('Set Image size for Portfolio, Team Member and Blog boxes.', 'fixology').'</small>',
		),
		array(
			'id'     	=> 'img-size-blog',
			'type'    	=> 'thememount_dimensions',
			'title'  	=> esc_html__( 'Blog Box - Thumb image size', 'fixology' ),
			'desc'      => esc_html__( 'Set width and height of the Blog Box image in Visual Composer element (on frontend site)', 'fixology' ),
			'after'     => '<p><a href="'. esc_url('http://www.davidtan.org/wordpress-hard-crop-vs-soft-crop-difference-comparison-example/') .'" target="_blank">'. esc_html__('Click here to know more about hard crop.', 'fixology') . '</a></p><p>' . esc_html__('After changing these settings you may need to %1$s regenerate your thumbnails %2$s.', 'fixology') . ' <a href="'. esc_url('http://wordpress.org/extend/plugins/regenerate-thumbnails/') .'" target="_blank">' . esc_html__('You can use "Regenerate Thumbnails" plugin.', 'fixology') . '</a></p>',
			'default' 	=> array(
				'width'		=> '800',
				'height'	=> '533',
				'crop'		=> 'yes',
			),
        ),
		array(
			'id'     	=> 'img-size-portfolio',
			'type'    	=> 'thememount_dimensions',
			'title'  	=> sprintf( esc_html__( '%s (Portfolio) Box - Thumb image size', 'fixology' ), $pf_title_singular ),
			'desc'      => esc_html__( 'Set width and height of the Portfolio Box image in Visual Composer element (on frontend site)', 'fixology' ),
			'after'     => '<p><a href="'. esc_url('http://www.davidtan.org/wordpress-hard-crop-vs-soft-crop-difference-comparison-example/') .'" target="_blank">'. esc_html__('Click here to know more about hard crop.', 'fixology') . '</a></p><p>' . esc_html__('After changing these settings you may need to %1$s regenerate your thumbnails %2$s.', 'fixology') . ' <a href="'. esc_url('http://wordpress.org/extend/plugins/regenerate-thumbnails/') .'" target="_blank">' . esc_html__('You can use "Regenerate Thumbnails" plugin.', 'fixology') . '</a></p>',
			'default' 	=> array(
				'width'		=> '800',
				'height'	=> '588',
				'crop'		=> 'yes',
			),
        ),
		array(
			'id'     	=> 'img-size-team-member',
			'type'    	=> 'thememount_dimensions',
			'title'  	=> sprintf( esc_html__( '%s (Team Member) Box - Thumb image size', 'fixology' ), $team_member_title_singular ),
			'desc'      => esc_html__( 'Set width and height of the Portfolio Box image in Visual Composer element (on frontend site)', 'fixology' ),
			'after'     => '<p><a href="'. esc_url('http://www.davidtan.org/wordpress-hard-crop-vs-soft-crop-difference-comparison-example/') .'" target="_blank">'. esc_html__('Click here to know more about hard crop.', 'fixology') . '</a></p><p>' . esc_html__('After changing these settings you may need to %1$s regenerate your thumbnails %2$s.', 'fixology') . ' <a href="'. esc_url('http://wordpress.org/extend/plugins/regenerate-thumbnails/') .'" target="_blank">' . esc_html__('You can use "Regenerate Thumbnails" plugin.', 'fixology') . '</a></p>',
			'default' 	=> array(
				'width'		=> '365',
				'height'	=> '543',
				'crop'		=> 'yes',
			),
        ),
		
		/* Icon library selector - Only selected libraries will be loaded in VC element */
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Enabled Icon Library', 'fixology'),
			'after'  		=> '<small>'. esc_html__('Select icon library that you like to load in Visual Composer elements like "ThemeMount Icon", "ThemeMount Call to Action", "ThemeMount Service Box" etc.', 'fixology').'</small>',
		),
		array(
			'id'        => 'icon_library',
			'type'      => 'checkbox',
			'title'     => esc_html__('Select icon library to load', 'fixology'),
			'options'   => array(
					'linecons'       => esc_html__( 'Linecons', 'fixology' ),
					'themify'        => esc_html__( 'Themify icons', 'fixology' ),
			),
			'default'   => array( 'linecons', 'themify' ),
			'after'    	=> '<small>'.esc_html__('Select icon library that you want to load. This will reduce load time of Visual Composer elements. But you can see only selected libraries in the icon dropdown.', 'fixology').'</small>',
		),
		
		
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Show or hide Demo Content Setup option', 'fixology'),
			'after'  		=> '<small>'. esc_html__('Show or hide "Demo Content Setup" option under "Layout Settings" tab', 'fixology').'</small>',
		),
		array(
			'id'     		=> 'hide_demo_content_option',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Hide "Demo Content Setup" option', 'fixology'),
			'default' 		=> false,
			'label'  		=> '<div class="cs-text-muted"><br>'. esc_html__('Show or hide "Demo Content Setup" option under "Layout Settings" tab', 'fixology').'</div>',
        ),
		
		
	)
);


// Custom Code
$tm_framework_options[] = array(
	'name'   => 'custom_code', // like ID
	'title'  => esc_html__('Custom Code', 'fixology'),
	'icon'   => 'fa fa-pencil-square-o',
	'fields' => array( // begin: fields
		
		// Custom Code
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Custom Code', 'fixology'),
			'after'  		=> '<small>'. esc_html__('Add custom JS and CSS code', 'fixology').'</small>',
		),
		array(
			'id'       		 => 'custom_css_code',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_html__('CSS Code', 'fixology'),
			'default'  		 =>  '',
			'after'  		 => '<div class="cs-text-muted"><br>'. esc_html__('Add custom CSS code here. This code will be appear at bottom of the dynamic css file so you can override any existing style', 'fixology').'</div>',
        ),
		array(
			'id'       => 'custom_js_code',
			'type'     => 'wysiwyg',
			'title'    => esc_html__('JS Code', 'fixology'),
			'settings' => array(
				'textarea_rows' => 5,
				'tinymce'       => false,
				'media_buttons' => false,
				'quicktags'     => false,
			),
			'after'    => '<div class="cs-text-muted"><br>'. esc_html__('Paste your JS code here', 'fixology').'</div>',
		),
		
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Custom HTML Code', 'fixology'),
			'after'  		=> '<small>'. sprintf(__('Custom HTML Code for different areas. You can paste <strong>Google Analytics</strong> or any tracking code here', 'fixology'),'<strong>', '</strong>').'</small>',
		),
		array(
			'id'       => 'customhtml_head',
			'type'     => 'wysiwyg',
			'title'    => esc_html__('Custom Code for &lt;head&gt; tag', 'fixology'),
			'settings' => array(
				'textarea_rows' => 5,
				'tinymce'       => false,
				'media_buttons' => false,
				'quicktags'     => false,
			),
			'after'    => '<div class="cs-text-muted"><br>'. esc_html__('This code will appear in &lt;head&gt; tag. You can add your custom tracking code here', 'fixology').'</div>',
		),
		array(
			'id'       => 'customhtml_bodystart',
			'type'     => 'wysiwyg',
			'title'    => esc_html__('Custom Code after &lt;body&gt; tag', 'fixology'),
			'settings' => array(
				'textarea_rows' => 5,
				'tinymce'       => false,
				'media_buttons' => false,
				'quicktags'     => false,
			),
			'after'    => '<div class="cs-text-muted"><br>'. esc_html__('This code will appear after &lt;body&gt; tag. You can add your custom tracking code here', 'fixology').'</div>',
		),
		array(
			'id'       => 'customhtml_bodyend',
			'type'     => 'wysiwyg',
			'title'    => esc_html__('Custom Code before &lt;/body&gt; tag', 'fixology'),
			'settings' => array(
				'textarea_rows' => 5,
				'tinymce'       => false,
				'media_buttons' => false,
				'quicktags'     => false,
			),
			'after'    => '<div class="cs-text-muted"><br>'. esc_html__('This code will appear before &lt;/body&gt; tag. You can add your custom tracking code here', 'fixology').'</div>',
		),
		
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Custom Code for Login page', 'fixology'),
			'after'  		=> '<small>'. esc_html__('Custom Code for Login pLogin page only. This will effect only login page and not effect any other pages or admin section', 'fixology').'</small>',
		),
		array(
			'id'       		 => 'login_custom_css_code',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_html__('CSS Code for Login Page', 'fixology'),
			'after'  		 => '<div class="cs-text-muted"><br>'. esc_html__('Write your custom CSS code here', 'fixology').'</div>',
        ),
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_html__('Advanced Custom CSS Code Option', 'fixology'),
		),
		array(
			'id'       		 => 'custom_css_code_top',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_html__('CSS Code (at top of the file)', 'fixology'),
			'after'  		 => '<div class="cs-text-muted"><br>'. esc_html__('Add custom CSS code here. This code will be appear at top of the css code. specially for "&#64;import" style tag.', 'fixology').'</div>',
        ),
		
		
	)
);


// Backup
$tm_framework_options[]   = array(
	'name'     => 'backup_section',
	'title'    => esc_html__('Backup / Restore', 'fixology'),
	'icon'     => 'fa fa-shield',
	'fields'   => array(
		array(
			'type'    => 'notice',
			'class'   => 'warning',
			'content' => esc_html__('You can save your current options. Download a Backup and Import', 'fixology'),
		),
		array(
			'type'    => 'backup',
		),
	)
);
