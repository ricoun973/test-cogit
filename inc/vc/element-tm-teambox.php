<?php

/* Options for ThemeMount Blogbox */

// Team Group
$teamGroupList = array();
if( taxonomy_exists('tm_team_group') ){
	$teamGroups    = get_terms( 'tm_team_group', array( 'hide_empty' => false ) );
	$teamGroupList = array();
	foreach($teamGroups as $teamGroup){
		$name                   = $teamGroup->name.' ('.$teamGroup->count.')';
		$teamGroupList[ $name ] = $teamGroup->slug;
	}
}


// Getting Options
$fixology_theme_options      = get_option('fixology_theme_options');
$team_type_title           = ( !empty($fixology_theme_options['team_type_title']) ) ? $fixology_theme_options['team_type_title'] : 'Team Members' ;
$team_type_title_singular  = ( !empty($fixology_theme_options['team_type_title_singular']) ) ? $fixology_theme_options['team_type_title_singular'] : 'Team Member' ;
$team_group_title          = ( !empty($fixology_theme_options['team_group_title']) ) ? $fixology_theme_options['team_group_title'] : 'Team Groups' ;
$team_group_title_singular = ( !empty($fixology_theme_options['team_group_title_singular']) ) ? $fixology_theme_options['team_group_title_singular'] : 'Team Group' ;



/**
 * Heading Element
 */
$heading_element = vc_map_integrate_shortcode( 'tm-heading', '', '',
	array(
		'exclude' => array(
			'el_class',
			'css',
			'css_animation'
		),
	)
);

/**
 * Box Design options
 */
$boxParams = tm_box_params();



$allParams = array_merge(

	$heading_element,
	array(
		array(
			"type"        => "dropdown",
			"holder"      => "div",
			"class"       => "",
			"heading"     => sprintf( esc_html__("Show Sortable %s Links",'fixology'), $team_group_title ),
			"description" => sprintf( esc_html__("Show sortable %s links above box items so user can sort by just single click.",'fixology'), $team_group_title ),
			"param_name"  => "sortable",
			"value"       => array(
				esc_html__('No','fixology')  => 'no',
				esc_html__('Yes','fixology') => 'yes',
			),
			"std"         => "no",
			'dependency'  => array(
				'element'            => 'boxview',
				'value_not_equal_to' => array( 'carousel' ),
			),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Replace ALL word', 'fixology' ),
			'param_name'  => 'allword',
			'description' => esc_html__( 'Replace ALL word in sortable group links. Default is ALL word.', 'fixology' ),
			"std"         => "All",
			'dependency'  => array(
				'element'   => 'sortable',
				'value'     => array( 'yes' ),
			),
		),
		array(
			"type"        => "dropdown",
			"holder"      => "div",
			"class"       => "",
			"heading"     => esc_html__("Show Pagination",'fixology'),
			"description" => sprintf( esc_html__("Show pagination links below %s boxes.",'fixology'), $team_type_title_singular ),
			"param_name"  => "pagination",
			"value"       => array(
				esc_html__('No','fixology')  => 'no',
				esc_html__('Yes','fixology') => 'yes',
			),
			"std"         => "no",
			'dependency'  => array(
				'element'    => 'sortable',
				'value_not_equal_to' => array( 'yes' ),
			),
		),
		array(
			"type"        => "checkbox",
			"heading"     => sprintf( esc_html__("From %s", "fixology"), $team_group_title_singular ),
			"param_name"  => "category",
			"description" => sprintf( esc_html__('If you like to show %1$s from selected %2$s than select the category here.', 'fixology'), $team_type_title, $team_group_title ),
			"value"       => $teamGroupList,
		),
		array(
			"type"        => "dropdown",
			"holder"      => "div",
			"class"       => "",
			"heading"     => esc_html__("Order by",'fixology'),
			"description" => sprintf( esc_html__("Sort retrieved %s by parameter.",'fixology'), $team_type_title_singular ),
			"param_name"  => "orderby",
			"value"       => array(
				esc_html__('No order (none)','fixology')           => 'none',
				esc_html__('Order by post id (ID)','fixology')     => 'ID',
				esc_html__('Order by author (author)','fixology')  => 'author',
				esc_html__('Order by title (title)','fixology')    => 'title',
				esc_html__('Order by slug (name)','fixology')      => 'name',
				esc_html__('Order by date (date)','fixology')      => 'date',
				esc_html__('Order by last modified date (modified)','fixology') => 'modified',
				esc_html__('Random order (rand)','fixology')       => 'rand',
				esc_html__('Order by number of comments (comment_count)','fixology') => 'comment_count',
				
			),
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			"std"              => "date",
		),
		array(
			"type"        => "dropdown",
			"holder"      => "div",
			"class"       => "",
			"heading"     => esc_html__("Order",'fixology'),
			"description" => esc_html__("Designates the ascending or descending order of the 'orderby' parameter.",'fixology'),
			"param_name"  => "order",
			"value"       => array(
				esc_html__('Ascending (1, 2, 3; a, b, c)','fixology')  => 'ASC',
				esc_html__('Descending (3, 2, 1; c, b, a)','fixology') => 'DESC',
			),
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			"std"              => "DESC",
		),
		array(
			"type"        => "dropdown",
			"heading"     => esc_html__("Show", "fixology"),
			"param_name"  => "show",
			"description" => sprintf( esc_html__("How many %s item you want to show.", "fixology"), $team_type_title ),
			"value"       => array(
				esc_html__("All", "fixology") => "-1",
				esc_html__("1", "fixology")  => "1",
				esc_html__("2", "fixology") => "2",
				esc_html__("3", "fixology") => "3",
				esc_html__("4", "fixology") => "4",
				esc_html__("5", "fixology") => "5",
				esc_html__("6", "fixology") => "6",
				esc_html__("7", "fixology") => "7",
				esc_html__("8", "fixology") => "8",
				esc_html__("9", "fixology") => "9",
				esc_html__("10", "fixology") => "10",
			),
			"std"  => "4",
		),
		array(
			"type"        => "dropdown",
			"holder"      => "div",
			"class"       => "",
			"heading"     => esc_html__("Box Design",'fixology'),
			"description" => esc_html__("Select box design.",'fixology'),
			"param_name"  => "view",
			"value"       => thememount_global_team_member_template_list( true ),
			"std"         => "overlay",
		),
		array(
			"type"        => "dropdown",
			"heading"     => esc_html__("Box Spacing", "fixology"),
			"param_name"  => "box_spacing",
			"description" => esc_html__("Spacing between each box.", "fixology"),
			"value"       => array(
				esc_html__("Default", "fixology")                        => "",
				esc_html__("0 pixel spacing (joint boxes)", "fixology")  => "0px",
				esc_html__("5 pixel spacing", "fixology")                => "5px",
				esc_html__("10 pixel spacing", "fixology")               => "10px",
			),
			"std"  => "",
		)
	),
	$boxParams,
	array(
		tm_vc_ele_css_editor_option(),
	)
	
);





$params = $allParams;



// Changing default values
$i = 0;
foreach( $params as $param ){
	$param_name = (isset($param['param_name'])) ? $param['param_name'] : '' ;
	if( $param_name == 'column' ){
		$params[$i]['std'] = 'four';
		
	} else if( $param_name == 'h2' ){
		$params[$i]['std'] = 'Our Team';
	
	} else if( $param_name == 'h2_use_theme_fonts' ){
		$params[$i]['std'] = 'yes';
		
	} else if( $param_name == 'h4_use_theme_fonts' ){
		$params[$i]['std'] = 'yes';
			
	} else if( $param_name == 'txt_align' ){
		$params[$i]['std'] = 'center';
		
	}
	
	$i++;
}



global $tm_sc_params_teambox;
$tm_sc_params_teambox = $params;


vc_map( array(
	"name"     => sprintf( esc_html__("ThemeMount %s Box", "fixology"), $team_type_title_singular ),
	"base"     => "tm-teambox",
	"icon"     => "icon-thememount-vc",
	'category' => esc_html__( 'ThemeMount Special Elements', 'fixology' ),
	"params"   => $params,
) );