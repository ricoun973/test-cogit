<?php

/* Options for ThemeMount Blogbox */


$postCatList    = get_categories( array('hide_empty'=>false) );

$catList = array();
foreach($postCatList as $cat){
	$catList[ esc_html($cat->name) . ' (' . esc_html($cat->count) . ')' ] = esc_html($cat->slug);
}


$heading_element = vc_map_integrate_shortcode( 'tm-heading', '', '',
	array(
		'exclude' => array(
			'el_class',
			'css',
			'css_animation'
		),
	)
);

$boxParams = tm_box_params('blog');

$allParams = array_merge(
	$heading_element,
	array(
		array(
			"type"        => "dropdown",
			"holder"      => "div",
			"class"       => "",
			"heading"     => esc_html__("Show Sortable Category Links",'fixology'),
			"description" => esc_html__("Show sortable category links above Blog boxes so user can sort by category by just single click.",'fixology'),
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
			'description' => esc_html__( 'Replace ALL word in sortable category links. Default is ALL word.', 'fixology' ),
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
			"description" => esc_html__("Show pagination links below blog boxes.",'fixology'),
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
			"heading"     => esc_html__("Set Post Link On Feature Image", "fixology"),
			"param_name"  => "postlink_onimage",
			"description" => esc_html__("If you like to set post link on feature image than check here.", "fixology"),
		),
		array(
			"type"        => "checkbox",
			"heading"     => esc_html__("From Category", "fixology"),
			"description" => esc_html__("If you like to show posts from selected category than select the category here.", "fixology") . esc_html__("The brecket number shows how many posts there in the category.", "fixology"),
			"param_name"  => "category",
			"value"       => $catList,
		),
		array(
			"type"        => "dropdown",
			"holder"      => "div",
			"class"       => "",
			"heading"     => esc_html__("Order by",'fixology'),
			"description" => esc_html__("Sort retrieved portfolio by parameter.",'fixology'),
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
			"holder"      => "div",
			"class"       => "",
			"heading"     => esc_html__("Show Posts",'fixology'),
			"description" => esc_html__("How many post you want to show.",'fixology'),
			"param_name"  => "show",
			"value"       => array(
				esc_html__('1','fixology')=>'1',
				esc_html__('2','fixology')=>'2',
				esc_html__('3','fixology')=>'3',
				esc_html__('4','fixology')=>'4',
				esc_html__('5','fixology')=>'5',
				esc_html__('6','fixology')=>'6',
				esc_html__('7','fixology')=>'7',
				esc_html__('8','fixology')=>'8',
				esc_html__('9','fixology')=>'9',
				esc_html__('10','fixology')=>'10',
				esc_html__('11','fixology')=>'11',
				esc_html__('12','fixology')=>'12',
				esc_html__('13','fixology')=>'13',
				esc_html__('14','fixology')=>'14',
				esc_html__('15','fixology')=>'15',
				esc_html__('16','fixology')=>'16',
				esc_html__('17','fixology')=>'17',
				esc_html__('18','fixology')=>'18',
				esc_html__('19','fixology')=>'19',
				esc_html__('20','fixology')=>'20',
				esc_html__('21','fixology')=>'21',
				esc_html__('22','fixology')=>'22',
				esc_html__('23','fixology')=>'23',
				esc_html__('24','fixology')=>'24',
			),
			"std"  => "3",
		),
		array(
			"type"        => "dropdown",
			"holder"      => "div",
			"class"       => "",
			"heading"     => esc_html__("Blogbox Design",'fixology'),
			"description" => esc_html__("Select Blogbox design.",'fixology'),
			"param_name"  => "view",
			"value"       => thememount_global_blog_template_list( true ),
			"std"         => "",
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
	if( $param_name == 'h2' ){
		$params[$i]['std'] = 'Blog';
		
	} else if( $param_name == 'h2_use_theme_fonts' ){
		$params[$i]['std'] = 'yes';
		
	} else if( $param_name == 'h4_use_theme_fonts' ){
		$params[$i]['std'] = 'yes';
			
	} else if( $param_name == 'txt_align' ){
		$params[$i]['std'] = 'center';
		
	}
	$i++;
}




global $tm_sc_params_blogbox;
$tm_sc_params_blogbox = $params;


vc_map( array(
	"name"     => esc_html__('ThemeMount Blog Box','fixology'),
	"base"     => "tm-blogbox",
	"class"    => "",
	'category' => esc_html__( 'ThemeMount Special Elements', 'fixology' ),
	"icon"     => 'icon-thememount-vc',
	"params"   => $params,
) );