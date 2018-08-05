<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

/**
 *  Meta Boxes
 */
$tm_metabox_options = array();


/************************* Common Meta Boxes *****************************/



// Slier Area metabox options array
$slider_list_array = array();
$slider_list_array[''] = esc_html__('No Slider', 'fixology');
if ( class_exists( 'RevSlider' ) )    { $slider_list_array['revslider']   = esc_html__('Slider Revolution', 'fixology'); }
if ( function_exists('layerslider') ) { $slider_list_array['layerslider'] = esc_html__('Layer Slider', 'fixology'); }
$slider_list_array['custom']   = esc_html__('Custom Slider', 'fixology');

$tm_metabox_slider_area = array(
	array(
		'id'      	=> 'slidertype',
		'type'   	=> 'radio',
		'title'		=> esc_html__('Select Slider Type', 'fixology'),
		'desc'    	=> '<div class="cs-text-muted">'.esc_html__('Select slider which you want to show on this page. The slider will appear in header area.', 'fixology').'</div>',
		'options'	=> $slider_list_array,
		'default' 	 => '',
	)
);
$tm_metabox_slider_area[] = array(
	'id'      	 => 'revslider',
	'type'   	 => 'select',
	'title'		 => esc_html__('Select Slider', 'fixology'),
	'after'    	 => ( thememount_revslider_array(true)==0 ) ? '<div class="cs-text-muted"><div class="tm-no-slider-message">'.esc_html__('No slider found. Plesae create slider from Slider Revolution section.', 'fixology') . '<br><a href="'. admin_url( 'admin.php?page=revslider' ) .'">' . esc_html__('Click here to go to Slider Revolution section and create your first slider or import demo slider.', 'fixology') . '</a></div></div>' : '<div class="cs-text-muted">'.esc_html__('Select slider created in Revolution Slider. The slider will appear in header area.', 'fixology').'</div>',
	'options' 	 => thememount_revslider_array(),
	'dependency' => array( 'slidertype_revslider', '==', 'true' ),
);
$tm_metabox_slider_area[] = array(
	'id'      	 => 'layerslider',
	'type'   	 => 'select',
	'title'		 => esc_html__('Select Slider', 'fixology'),
	'after'    	 => ( thememount_layerslider_array(true)==0 ) ? '<div class="cs-text-muted"><div class="tm-no-slider-message">'.esc_html__('No slider found. Plesae create slider from Layer Slider section.', 'fixology') . '<br><a href="'. admin_url( 'admin.php?page=layerslider' ) .'">' . esc_html__('Click here to go to Layer Slider section and create your first slider or import demo slider.', 'fixology') . '</a></div></div>' : '<div class="cs-text-muted">'.esc_html__('Select slider created in Layer Slider. The slider will appear in header area.', 'fixology').'</div>',
	'options' 	 => thememount_layerslider_array(),
	'dependency' => array( 'slidertype_layerslider', '==', 'true' ),
);
$tm_metabox_slider_area[] = array(
	'id'       	 => 'customslider',
	'type'     	 => 'textarea',
	'title'    	 => esc_html__('Custom Slider code', 'fixology'),
	'shortcode'	 => true,
	'after'  	 => '<div class="cs-text-muted">'.esc_html__('You can paste custom slider shortcode or HTML code here. The output code will appear in header area.', 'fixology').'</div>',
	'dependency' => array( 'slidertype_custom', '==', 'true' ),// Multiple dependency
);
$tm_metabox_slider_area[] = array(
	'id'         => 'slider_width',
	'type'       => 'select',
	'title'      => esc_html__('Boxed or Wide Slider', 'fixology'),
	'info'       => esc_html__('Select slider width.', 'fixology'),
	'options'    => array(
		'wide'      => esc_html__('Wide Slider', 'fixology'),
		'boxed'     => esc_html__('Boxed Slider', 'fixology'),
	),
	'default'    => 'wide',
	'dependency' => array( 'slidertype_', '!=', 'true' ),// Multiple dependency
);






// Background metabox options array
$tm_metabox_background = array(
	array(
		'id'      => 'custom_background_switcher',
		'title'   => esc_html__('Custom Background', 'fixology'),
		'type'    => 'switcher',
		'default' => false,
		'label'   => '<div class="cs-text-muted">'.esc_html__('If you are using Visual Composer page builder and you are adding ROWs with white background color only than please set this YES. So the spacing between each ROW will be reduced and you can see decent spacing between each ROW.', 'fixology').'</div>',
	),
	array(
		'id'		 => 'custom_background',
		'type'		 => 'thememount_background',
		'title'		 => esc_html__('Body Background Properties', 'fixology'),
		'after'		 => '<div class="cs-text-muted">'.esc_html__('Set background for main body. This is for main outer body background. For "Boxed" layout only', 'fixology').'</div>',
		'dependency' => array( 'custom_background_switcher', '==', 'true' ),// Multiple dependency
	),
);






// Topbar metabox options array
$tm_metabox_topbar = array(
	array(
		'id'      => 'show_topbar',
		'type'    => 'select',
		'title'   => esc_html__('Show Topbar', 'fixology'),
		'info'    => esc_html__('For this page only.', 'fixology'),
		'options' => array(
			''      => esc_html__('Global', 'fixology'),
			'yes'   => esc_html__('Yes, show Topbar', 'fixology'),
			'no'    => esc_html__('No, hide Topbar', 'fixology'),
		),
		'default' => '',
	),
	array(
		'id'     	 => 'topbar_bg_color',
		'type'   	 => 'select',
		'title'  	 => esc_html__('Background Color', 'fixology'),
		'info'   	 => esc_html__('Please select color for background', 'fixology'),
		'options' 	 => array(
			''           => esc_html__('Global', 'fixology'),
			'darkgrey'   => esc_html__('Dark grey', 'fixology'),
			'grey'       => esc_html__('Grey', 'fixology'),
			'white'      => esc_html__('White', 'fixology'),
			'skincolor'  => esc_html__('Skincolor', 'fixology'),
			'custom'     => esc_html__('Custom Color', 'fixology'),
		),
		'default'	 => '',
		'dependency' => array( 'show_topbar', '!=', 'no' ),// Multiple dependency
	),
	array(
		'id'		 => 'topbar_bg_custom_color',
		'type'		 => 'color_picker',
		'title'		 => esc_html__('Select Background Color', 'fixology'),
		'default'	 => '#dd3333',
		'dependency' => array( 'show_topbar|topbar_bg_color', '!=|==', 'no|custom' ),
	),
	array(
		'id'		 => 'topbar_text_color',
		'type'		 => 'select',
		'title'		 => esc_html__('Text Color', 'fixology'),
		'info'		 => esc_html__('Select <code>Dark</code> color if you are going to select light color in above option.', 'fixology'),
		'options'	 => array(
			''          => esc_html__('Global', 'fixology'),
			'white'     => esc_html__('White', 'fixology'),
			'dark'      => esc_html__('Dark', 'fixology'),
			'skincolor' => esc_html__('Skin Color', 'fixology'),
			'custom'    => esc_html__('Custom color', 'fixology'),
		),
		'default' 	 => esc_html__('Global', 'fixology'),
		'dependency' => array( 'show_topbar', '!=', 'no' ),// Multiple dependency
	),
	array(
		'id'         => 'topbar_text_custom_color',
		'type'       => 'color_picker',
		'title'      => esc_html__('Custom Text Color', 'fixology' ),
		'default'    => 'rgba(0, 0, 255, 0.25)',
		'dependency' => array( 'show_topbar|topbar_text_color', '!=|==', 'no|custom' ),//Multiple dependency
		'after'      => '<div class="cs-text-muted">'.esc_html__('Please select custom color for text', 'fixology').'</div>',
	),
	array(
		'id'       	 => 'topbar_left_text',
		'type'     	 => 'textarea',
		'title'    	 =>  esc_html__('Topbar Left Content (overwrite default text)', 'fixology'),
		'shortcode'	 => true,
		'after'  	 => '<div class="cs-text-muted">'.esc_html__('Add content for Topbar text for left area. This will overwrite default text set in Theme Options', 'fixology').'</div>',
		'dependency' => array( 'show_topbar', '!=', 'no' ),// Multiple dependency
	),
	array(
		'id'         => 'topbar_right_text',
		'type'       => 'textarea',
		'title'      =>  esc_html__('Topbar Right Content (overwrite default text)', 'fixology'),
		'shortcode'  => true,
		'after'      => '<div class="cs-text-muted">'.esc_html__('Add content for Topbar text for right area. This will overwrite default text set in Theme Options', 'fixology').'</div>',
		'dependency' => array( 'show_topbar', '!=', 'no' ),// Multiple dependency
	),
);





// Titlebar metabox options array
$tm_metabox_titlebar = array(
	array(
		'id'       			=> 'hide_titlebar',
		'type'      		=> 'checkbox',
		'title'         	=> esc_html__('Hide Titlebar', 'fixology'),
		'label'		        =>  esc_html__( 'YES, Hide the Titlebar', 'fixology' ),
		'after'   			=> '<div class="cs-text-muted">'.esc_html__('If you want to hide Titlebar than check this option', 'fixology').'</div>',
	),
	array(
		'id'		   		=> 'title',
		'type'     			=> 'textarea',
		'title'    		 	=>  esc_html__('Page Title', 'fixology'),
		'after'  		 	=> '<div class="cs-text-muted">'.esc_html__('(Optional) Replace current page title with this title. So Search results will show the original page title and the page will show this title', 'fixology').'</div>',
		'dependency'        => array( 'hide_titlebar', '!=', true ),//Multiple dependency
	),
	array(
		'id'		   		=> 'subtitle',
		'type'     			=> 'textarea',
		'title'    		 	=>  esc_html__('Page Subtitle', 'fixology'),
		'after'  		 	=> '<div class="cs-text-muted">'.esc_html__('(Optional) Please fill page subtitle', 'fixology').'</div>',
		'dependency'        => array( 'hide_titlebar', '!=', true ),//Multiple dependency
	),
	array(
		'type'       	 => 'heading',
		'content'    	 => esc_html__('Titlebar Background Options', 'fixology'),
		'after'  	  	 => '<small>'.esc_html__('Background options for Titlebar area', 'fixology').'</small>',
		'dependency'     => array( 'hide_titlebar', '!=', true ),//Multiple dependency
	),
	array(
		'id'		 => 'titlebar_bg_custom_options',
		'type'		 => 'select',
		'title'		 =>  esc_html__('Titlebar Background Options', 'fixology'),
		'options'	 => array(
			''       	=> esc_html__('Use global settings', 'fixology'),
			'custom' 	=> esc_html__('Set custom settings', 'fixology'),
		),
		'default'	 => '',
		'after'		 => '<div class="cs-text-muted"><br>'.esc_html__('Select predefined color for Titlebar background color', 'fixology').'</div>',
		'dependency' => array( 'hide_titlebar', '!=', true ),//Multiple dependency
	),
	array(
		'id'            => 'titlebar_bg_color',
		'type'          => 'select',
		'title'         =>  esc_html__('Titlebar Background Color', 'fixology'),
		'options'  => array(
			''           => esc_html__('Global', 'fixology'),
			'darkgrey'   => esc_html__('Dark grey', 'fixology'),
			'grey'       => esc_html__('Grey', 'fixology'),
			'white'      => esc_html__('White', 'fixology'),
			'skincolor'  => esc_html__('Skincolor', 'fixology'),
			'custom'     => esc_html__('Custom Color', 'fixology'),
		),
		'default'       => '',
		'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select predefined color for Titlebar background color', 'fixology').'</div>',
		'dependency'    => array( 'hide_titlebar|titlebar_bg_custom_options', '!=|!=', ''.true|'custom' ),//Multiple dependency
	),
	array(
		'id'      		=> 'titlebar_background',
		'type'    		=> 'thememount_background',
		'title'  		=> esc_html__('Titlebar Background Properties', 'fixology' ),
		'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Set background for Title bar. You can set color or image and also set other background related properties', 'fixology').'</div>',
		'color'			=> true,
		'dependency'   => array( 'hide_titlebar|titlebar_bg_custom_options', '!=|!=', ''.true|'custom' ),// Multiple dependency
	),
	
	array(
		'type'       	 => 'heading',
		'content'    	 => esc_html__('Titlebar Font Settings', 'fixology'),
		'after'  	  	 => '<small>'.esc_html__('Font Settings for different elements in Titlebar area', 'fixology').'</small>',
		'dependency'     => array( 'hide_titlebar', '!=', true ),// Multiple dependency
	),
	array(
		'id'            => 'titlebar_font_custom_options',
		'type'          => 'select',
		'title'         =>  esc_html__('Titlebar Font Options', 'fixology'),
		'options'  => array(
						''       => esc_html__('Use global settings', 'fixology'),
						'custom' => esc_html__('Set custom settings', 'fixology'),
		),
		'default'       => '',
		'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select "Ude global settings" to load global font settings.', 'fixology').'</div>',
		'dependency'    => array( 'hide_titlebar', '!=', true ),// Multiple dependency
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
		'default'       => '',
		'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('Select <code>Dark</code> color if you are going to select light color in above option', 'fixology').'</div>',
		'dependency'=> array( 'hide_titlebar|titlebar_font_custom_options', '!=|!=', ''.true|'custom' ),// Multiple dependency
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
		'units'       => 'px', // Defaults to px
		'default'     => array(
			"family"      => "Arimo",
			"font"        => "google",  // "google" OR "websafe"
			"font-backup" => "'Trebuchet MS', Helvetica, sans-serif",
			"font-weight" => "400",
			"font-size"   => "14",
			"line-height" => "16",
			"color"       => "#202020"
		),
		'after'  	=> '<div class="cs-text-muted"><br>'.esc_html__('Select font family, size etc. for heading in Titlebar', 'fixology').'</div>',
		'dependency'=> array( 'hide_titlebar|titlebar_font_custom_options', '!=|!=', ''.true|'custom' ),// Multiple dependency
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
		'units'       => 'px', // Defaults to px
		'default'     => array(
			"family"      => "Arimo",
			"font"        => "google",  // "google" OR "websafe"
			"font-backup" => "'Trebuchet MS', Helvetica, sans-serif",
			"font-weight" => "400",
			"font-size"   => "14",
			"line-height" => "16",
			"color"       => "#202020"
		),
		'after'  	=> '<div class="cs-text-muted"><br>'.esc_html__('Select font family, size etc. for sub-heading in Titlebar', 'fixology').'</div>',
		'dependency'=> array( 'hide_titlebar|titlebar_font_custom_options', '!=|!=', ''.true|'custom' ),// Multiple dependency
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
		'units'       => 'px', // Defaults to px
		'default'     => array(
			"family"      => "Arimo",
			"font"        => "google",  // "google" OR "websafe"
			"font-backup" => "'Trebuchet MS', Helvetica, sans-serif",
			"font-weight" => "400",
			"font-size"   => "14",
			"line-height" => "16",
			"color"       => "#202020"
		),
		'after'  	=> '<div class="cs-text-muted"><br>'.esc_html__('Select font family, size etc. for breadcrumbs in Titlebar', 'fixology').'</div>',
		'dependency'=> array( 'hide_titlebar|titlebar_font_custom_options', '!=|!=', ''.true|'custom' ),// Multiple dependency
	),
	
	
	array(
		'type'       	 => 'heading',
		'content'    	 => esc_html__('Titlebar Content Options', 'fixology'),
		'after'  	  	 => '<small>'.esc_html__('Content options for Titlebar area', 'fixology').'</small>',
		'dependency'     => array( 'hide_titlebar', '!=', true ),//Multiple dependency
	),
	array(
		'id'            	=> 'titlebar_view',
		'type'          	=> 'select',
		'title'         	=>  esc_html__('Titlebar Text Align', 'fixology'),
		'options'       	=> array (
						''         => esc_html__('Global', 'fixology'),
						'default'  => esc_html__('All Center', 'fixology'),
						'left'     => esc_html__('Title Left / Breadcrumb Right', 'fixology'),
						'right'    => esc_html__('Title Right / Breadcrumb Left', 	'fixology'),
						'allleft'  => esc_html__('All Left', 'fixology'),
						'allright' => esc_html__('All Right', 'fixology'),
		),
		'default'	 => '',
		'after'  			=> '<div class="cs-text-muted">'.esc_html__('Select text align in Titlebar', 'fixology').'</div>',
		'dependency' => array( 'hide_titlebar', '!=', true ),//Multiple dependency
	),
	array(
		'id'     		 => 'titlebar_height',
		'type'   		 => 'number',
		'title'          => esc_html__( 'Titlebar Height', 'fixology' ),
		'after'  	  	 => '<div class="cs-text-muted"><br>'.esc_html__('Set height of the Titlebar. In pixel only', 'fixology').'</div>',
		'default'		 => '',
		'after'   		 => ' px',
		'dependency'     => array( 'hide_titlebar', '!=', true ),//Multiple dependency
	),
	array(
		'id'            => 'titlebar_hide_breadcrumb',
		'type'          => 'select',
		'title'         =>  esc_html__('Hide Breadcrumb', 'fixology'),
		'options'  => array(
						''     => esc_html__('Global', 'fixology'),
						'no'   => esc_html__('NO, show the breadcrumb', 'fixology'),
						'yes'  => esc_html__('YES, Hide the Breadcrumb', 'fixology'),
		),
		'default'       => '',
		'after'  		=> '<div class="cs-text-muted"><br>'.esc_html__('You can show or hide the breadcrumb', 'fixology').'</div>',
		'dependency'    => array( 'hide_titlebar', '!=', true ),//Multiple dependency
	),
	
	
);


// Other Options
$tm_other_options =  array(
	array(
		'id'     		 	=> 'skincolor',
		'type'   		 	=> 'color_picker',
		'title'  		 	=> esc_html__('Skin Color', 'fixology' ),
		'after'  		 	=> '<div class="cs-text-muted">'.esc_html__('Select Skin Color for this page only. This will override Skin color set under "Theme Options" section. ', 'fixology').'<br><br> <strong>' . esc_html__( 'NOTE: ' ,'fixology') . '</strong> ' . esc_html__( 'Leave this empty to use "Skin Color" set in the "Theme Options" directly. ' ,'fixology') . '</div>',
	),
);









/**** Metabox options - Sidebar ****/

// Getting custom sidebars 
$all_sidebars = thememount_get_all_registered_sidebars();



$tm_metabox_sidebar = array(
	array(
		'id'       => 'sidebar',
		'title'    => esc_html__('Select Sidebar Position', 'fixology'),
		'type'     => 'image_select',
		'options'  => array(
			''          => get_template_directory_uri() . '/inc/images/layout_default.png',
			'no'        => get_template_directory_uri() . '/inc/images/layout_no_side.png',
			'left'      => get_template_directory_uri() . '/inc/images/layout_left.png',
			'right'     => get_template_directory_uri() . '/inc/images/layout_right.png',
			'both'      => get_template_directory_uri() . '/inc/images/layout_both.png',
			'bothleft'  => get_template_directory_uri() . '/inc/images/layout_left_both.png',
			'bothright' => get_template_directory_uri() . '/inc/images/layout_right_both.png',
		),
		'default'  => '',
	),
	array(
		'id'      => 'left_sidebar',
		'type'    => 'select',
		'title'   => esc_html__('Select Left Sidebar', 'fixology'),
		'options' => $all_sidebars,
		'default' => '',
	),
	array(
		'id'      => 'right_sidebar',
		'type'    => 'select',
		'title'   => esc_html__('Select Right Sidebar', 'fixology'),
		'options' => $all_sidebars,
		'default' => '',
	),
);



// Getting name of CPT from Theme Options
$fixology_theme_options		  = get_option('fixology_theme_options');
$pf_type_title_singular   = ( !empty($fixology_theme_options['pf_type_title_singular']) ) ? $fixology_theme_options['pf_type_title_singular'] : 'Portfolio' ;
$team_type_title_singular = ( !empty($fixology_theme_options['team_type_title_singular']) ) ? $fixology_theme_options['team_type_title_singular'] : 'Team Member' ;


// CPT list
$tm_cpt_list = array(
	'page'           => esc_html__('Page', 'fixology'),
	'post'           => esc_html__('Post', 'fixology'),
	'tm_portfolio'   => esc_html($pf_type_title_singular),
	'tm_team_member' => esc_html($team_type_title_singular),
	'tm_testimonial' => esc_html__('Testimonials', 'fixology'),
);

// Foreach loop
foreach( $tm_cpt_list as $cpt_id=>$cpt_name ){
	
	$tm_metabox_options[] = array(
		'id'        => '_thememount_metabox_group',
		'title'     => sprintf( esc_html__('Fixology - %s Single view Elements Options', 'fixology'), $cpt_name ),
		'post_type' => $cpt_id,
		'context'   => 'normal',
		'priority'  => 'default',
		'sections'  => array(
		
		
			array(
				'name'   => '_thememount_slider_area_options',
				'title'  => esc_html__('Header Slider Options', 'fixology'),
				'icon'   => 'fa fa-picture-o',
				'fields' => $tm_metabox_slider_area,
			),
			
			
			array(
				'name'   => '_thememount_background_options',
				'title'  => esc_html__(' Background Options', 'fixology'),
				'icon'   => 'fa fa-paint-brush',
				'fields' => $tm_metabox_background,
			),
			
			
			array(
				'name'   => '_thememount_page_topbar_options',
				'title'  => esc_html__('Topbar Options', 'fixology'),
				'icon'   => 'fa fa-tasks',
				'fields' => $tm_metabox_topbar,
			),
			
			
			
			array(
				'name'   => '_thememount_titlebar_options',
				'title'  => esc_html__('Titlebar Options', 'fixology'),
				'icon'   => 'fa fa-align-justify',
				'fields' => $tm_metabox_titlebar,
			),
			
			
			array(
				'name'   => '_thememount_page_customize',
				'title'  => esc_html__('Other Options', 'fixology'),
				'icon'   => 'fa fa-cog',
				'fields' => $tm_other_options,
			),
			
			
		),
	);
	
	
	
	/**
	 *  CPT - Sidebar
	 */
	$tm_metabox_options[]    = array(
		'id'        => '_thememount_metabox_sidebar',
		'title'     => esc_html__('Fixology - Sidebar Options', 'fixology'),
		'post_type' => $cpt_id,
		'context'   => 'side',
		'priority'  => 'default',
		'sections'  => array(
			array(
				'name'   => 'tm_sidebar_options',
				'fields' => $tm_metabox_sidebar,
			),
		),
	);
	
	$tm_metabox_options[]    = array(
		'id'        => 'thememount_page_row_settings',
		'title'     => esc_html__('Fixology - Content ROW settings', 'fixology'),
		'post_type' => $cpt_id,
		'context'   => 'side',
		'priority'  => 'default',
		'sections'  => array(
			array(
				'name'   => 'tm_content_row_settings',
				'fields' => array(
					array(
						'id'      => 'row_lower_padding',
						'title'   => esc_html__('Lower ROW Spacing', 'fixology'),
						'type'    => 'switcher',
						'default' => false,
						'label'   => '<div class="cs-text-muted">'.esc_html__('If you are using Visual Composer page builder and you are adding ROWs with white background color only than please set this YES. So the spacing between each ROW will be reduced and you can see decent spacing between each ROW.', 'fixology').'</div>',
					)
				)
			)
		)
	);
	
	
	
	
	
} // foreach




/* Blog Post Format - Gallery meta box */
$tm_metabox_options[] = array(
	'id'        => '_thememount_metabox_gallery',
	'title'     => esc_html__('Fixology - Gallery Images', 'fixology'),
	'post_type' => 'post',
	'context'   => 'normal',
	'priority'  => 'default',
	'sections'  => array(
		array(
			'name'   => 'thememount_metabox_gallery_sections',
			'fields' => array(
				array(
					'id'          => 'gallery_images',
					//'debug'       => true,
					'type'        => 'gallery',
					'title'       => esc_attr__('Slider Images', 'fixology'),
					'add_title'   => esc_attr__('Add Images', 'fixology'),
					'edit_title'  => esc_attr__('Edit Gallery', 'fixology'),
					'clear_title' => esc_attr__('Remove Gallery', 'fixology'),
					'after'       => '<br><div class="cs-text-muted">'.esc_html__('Select images for gallery. Click on "Edit Gallery" button to add images, order images or remove images in gallery.', 'fixology').'</div>',
				),
			)
		)
	),
);
