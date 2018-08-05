<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

$fixology_theme_options		   = get_option('fixology_theme_options');
$pf_cat_title_singular     = ( !empty($fixology_theme_options['pf_cat_title_singular']) ) ? esc_attr($fixology_theme_options['pf_cat_title_singular']) : esc_attr('Portfolio Category') ;
$team_group_title_singular = ( !empty($fixology_theme_options['team_group_title_singular']) ) ? esc_attr($fixology_theme_options['team_group_title_singular']) : esc_attr('Team Group') ;



// Taxonomy Options
$tm_taxonomy_options     = array();


// For Portfolio Category
$tm_taxonomy_options[]   = array(
	'id'       => 'tm_taxonomy_options',
	'taxonomy' => 'tm_portfolio_category', // category, post_tag or your custom taxonomy name
	'fields'   => array(
		array(
			'id'    => 'tax_featured_image',
			'type'  => 'textarea',
			'title' => esc_html__('Featured Image URL', 'fixology'),
			'after' => '<p>' . sprintf( esc_html__('Paste featured image URL for this %s. Please upload the image first from media section.', 'fixology'), $pf_cat_title_singular ) . '</p>',
		),
	),
);

// For Team Group
$tm_taxonomy_options[]   = array(
	'id'       => 'tm_taxonomy_options',
	'taxonomy' => 'tm_team_group', // category, post_tag or your custom taxonomy name
	'fields'   => array(
		array(
			'id'    => 'tax_featured_image',
			'type'  => 'textarea',
			'title' => esc_html__('Featured Image URL', 'fixology'),
			'after' => '<p>' . sprintf( esc_html__('Paste featured image URL for this %s. Please upload the image first from media section.', 'fixology'), $team_group_title_singular ) . '</p>',
		),
	),
);
