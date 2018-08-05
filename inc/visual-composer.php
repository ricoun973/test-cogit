<?php

/* ------------------------- */
/* --- VC Shared Library --- */
require_once get_template_directory().'/inc/vc/vc-shared.php';




/* ------------------------- */
/* --- VC Shared Library --- */
require_once get_template_directory().'/inc/vc/vc-extras.php';




/* ------------------------- */
/* ---   VC Templates    --- */
require_once get_template_directory().'/inc/vc/vc-templates.php';






/* -------------------- */
/* --- Element List --- */

// tm_custom_heading
add_action( 'vc_after_init', 'tm_vc_custom_element_custom_heading' );
function tm_vc_custom_element_custom_heading(){ get_template_part('inc/vc/element-tm','custom-heading'); }

// tm_icon
add_action( 'vc_after_init', 'tm_vc_custom_element_icon' );
function tm_vc_custom_element_icon(){ get_template_part('inc/vc/element-tm','icon'); }

// tm_btn
add_action( 'vc_after_init', 'tm_vc_custom_element_btn' );
function tm_vc_custom_element_btn(){ get_template_part('inc/vc/element-tm','btn'); }

// tm_cta
add_action( 'vc_after_init', 'tm_vc_custom_element_cta' );
function tm_vc_custom_element_cta(){ get_template_part('inc/vc/element-tm','cta'); }

// tm_heading
add_action( 'vc_after_init', 'tm_vc_custom_element_heading' );
function tm_vc_custom_element_heading(){ get_template_part('inc/vc/element-tm','heading'); }

// tm_servicebox
add_action( 'vc_after_init', 'tm_vc_custom_element_servicebox' );
function tm_vc_custom_element_servicebox(){ get_template_part('inc/vc/element-tm','servicebox'); }

// tm_progress_bar
add_action( 'vc_after_init', 'tm_vc_progress_bar' );
function tm_vc_progress_bar(){ get_template_part('inc/vc/element-tm','progress-bar'); }


// tm_blogbox
add_action( 'vc_after_init', 'tm_vc_custom_element_blogbox' );
function tm_vc_custom_element_blogbox(){ get_template_part('inc/vc/element-tm','blogbox'); }

// tm_portfoliobox
add_action( 'vc_after_init', 'tm_vc_custom_element_portfoliobox' );
function tm_vc_custom_element_portfoliobox(){ get_template_part('inc/vc/element-tm','portfoliobox'); }

// tm_teambox
add_action( 'vc_after_init', 'tm_vc_custom_element_teambox' );
function tm_vc_custom_element_teambox(){ get_template_part('inc/vc/element-tm','teambox'); }

// tm_testimonialbox
add_action( 'vc_after_init', 'tm_vc_custom_element_testimonialbox' );
function tm_vc_custom_element_testimonialbox(){ get_template_part('inc/vc/element-tm','testimonialbox'); }



// tm_clientsbox
add_action( 'vc_after_init', 'tm_vc_custom_element_clientsbox' );
function tm_vc_custom_element_clientsbox(){ get_template_part('inc/vc/element-tm','clientsbox'); }

// tm_eventsbox
if( class_exists('Tribe__Events__Main') ){
	add_action( 'vc_after_init', 'tm_vc_custom_element_eventsbox' );
	function tm_vc_custom_element_eventsbox(){ get_template_part('inc/vc/element-tm','eventsbox'); }
}

// tm_facts_in_digits
add_action( 'vc_after_init', 'tm_vc_custom_element_facts_in_digits' );
function tm_vc_custom_element_facts_in_digits(){ get_template_part('inc/vc/element-tm','facts-in-digits'); }

// tm_twitterbox
if( function_exists('latest_tweets_render') ){
	add_action( 'vc_after_init', 'tm_vc_custom_element_twitterbox' );
	function tm_vc_custom_element_twitterbox(){ get_template_part('inc/vc/element-tm','twitterbox'); }
}

// tm_contactbox
add_action( 'vc_after_init', 'tm_vc_custom_element_contactbox' );
function tm_vc_custom_element_contactbox(){ get_template_part('inc/vc/element-tm','contactbox'); }

// tm_list
add_action( 'vc_after_init', 'tm_vc_custom_element_list' );
function tm_vc_custom_element_list(){ get_template_part('inc/vc/element-tm','list'); }

// tm_socialbox
add_action( 'vc_after_init', 'tm_vc_custom_element_socialbox' );
function tm_vc_custom_element_socialbox(){ get_template_part('inc/vc/element-tm','socialbox'); }


// tm_pricelistbox
add_action( 'vc_after_init', 'tm_vc_custom_element_pricelistbox' );
function tm_vc_custom_element_pricelistbox(){ get_template_part('inc/vc/element-tm','pricelistbox'); }
