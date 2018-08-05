<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/* Getting skin color */
$skincolor = thememount_get_option('skincolor');

/*
 *  Set skin color set for this page only.
 */
if( isset($_GET['color']) && trim($_GET['color'])!='' ){
	$skincolor = '#'.trim($_GET['color']);
}


/*
 *  Setting variables for different Theme Options
 */
$header_height        = thememount_get_option('header_height');
$first_menu_margin    = thememount_get_option('first_menu_margin');
$titlebar_height      = thememount_get_option('titlebar_height');
$header_height_sticky = thememount_get_option('header_height_sticky');
$center_logo_width    = thememount_get_option('center_logo_width');

$header_bg_color                   = thememount_get_option('header_bg_color');
$responsive_header_bg_custom_color = thememount_get_option('responsive_header_bg_custom_color');
$header_bg_custom_color            = thememount_get_option('header_bg_custom_color');
$sticky_header_bg_color            = thememount_get_option('sticky_header_bg_color');
$sticky_header_bg_custom_color     = thememount_get_option('sticky_header_bg_custom_color');
$sticky_header_bg_color            = ( empty($sticky_header_bg_color) ) ? $header_bg_color : $sticky_header_bg_color ;
$sticky_header_bg_custom_color     = ( empty($sticky_header_bg_custom_color) ) ? $header_bg_custom_color : $sticky_header_bg_custom_color ;

$sticky_header_menu_bg_color        = thememount_get_option('sticky_header_menu_bg_color');
$sticky_header_menu_bg_custom_color = thememount_get_option('sticky_header_menu_bg_custom_color');

$general_font = thememount_get_option('general_font');


$titlebar_bg_color          = thememount_get_option('titlebar_bg_color');
$titlebar_bg_custom_color   = thememount_get_option('titlebar_bg_custom_color');
$titlebar_text_color        = thememount_get_option('titlebar_text_color');
$titlebar_text_custom_color = thememount_get_option('titlebar_heading_font', 'color');
$titlebar_subheading_text_custom_color = thememount_get_option('titlebar_subheading_font', 'color');
$titlebar_breadcrumb_text_custom_color = thememount_get_option('titlebar_breadcrumb_font', 'color');

$topbar_text_color        = thememount_get_option('topbar_text_color');
$topbar_text_custom_color = thememount_get_option('topbar_text_custom_color');
$topbar_bg_color          = thememount_get_option('topbar_bg_color');
$topbar_bg_custom_color   = thememount_get_option('topbar_bg_custom_color');

$topbar_breakpoint        = thememount_get_option('topbar-breakpoint');
$topbar_breakpoint_custom = thememount_get_option('topbar-breakpoint-custom');


$mainmenufont            = thememount_get_option('mainmenufont');
$mainMenuFontColor       = $mainmenufont['color'];
$stickymainmenufontcolor = thememount_get_option('stickymainmenufontcolor');
$stickymainmenufontcolor = ( empty($stickymainmenufontcolor) ) ? $mainmenufont['color'] : $stickymainmenufontcolor ;

$dropdownmenufont = thememount_get_option('dropdownmenufont');

$mainmenu_active_link_color        = thememount_get_option('mainmenu_active_link_color');
$mainmenu_active_link_custom_color = thememount_get_option('mainmenu_active_link_custom_color');
$dropmenu_active_link_color        = thememount_get_option('dropmenu_active_link_color');
$dropmenu_active_link_custom_color = thememount_get_option('dropmenu_active_link_custom_color');

$dropmenu_background = thememount_get_option('dropmenu_background');

$logoMaxHeight       = thememount_get_option('logo_max_height');
$logoMaxHeightSticky = thememount_get_option('logo_max_height_sticky');

$inner_background = thememount_get_option('inner_background');

$headerbg_color       = thememount_get_option('header_bg_color');
$headerbg_customcolor = thememount_get_option('header_bg_custom_color');

$header_menu_bg_color        = thememount_get_option('header_menu_bg_color');
$header_menu_bg_custom_color = thememount_get_option('header_menu_bg_custom_color');


$menu_breakpoint        = thememount_get_option('menu_breakpoint');
$menu_breakpoint_custom = thememount_get_option('menu_breakpointcustom');

$breakpoint = $menu_breakpoint;
$breakpoint = ( $menu_breakpoint=='custom' && !empty($menu_breakpoint_custom) ) ? $menu_breakpoint_custom : $breakpoint ;

$logo_font = thememount_get_option('logo_font');

$loaderimg          = thememount_get_option('loaderimg');
$loaderimage_custom = thememount_get_option('loaderimage_custom');

$fbar_breakpoint        = thememount_get_option('floatingbar-breakpoint');
$fbar_breakpoint_custom = thememount_get_option('floatingbar-breakpoint-custom');



/* Output start
------------------------------------------------------------------------------*/ ?>

<?php
/* Custom CSS Code at top */
$custom_css_code_top = thememount_get_option('custom_css_code_top');
if( !empty($custom_css_code_top) ){
	// We are not escaping / sanitizing as we are expecting css code. 
	echo trim($custom_css_code_top);
}
?>

/*------------------------------------------------------------------
* dynamic-style.php index *
[Table of contents]

1.  Background color
2.  Topbar Background color
3.  Element Border color
4.  Textcolor
5.  Boxshadow
6.  Header / Footer background color
7.  Footer background color
8.  Logo Color
9.  Genral Elements
10. "Center Logo Between Menu" options
11. Floating Bar
-------------------------------------------------------------------*/



/**
 * 0. Background properties
 * ----------------------------------------------------------------------------
 */
<?php
// We are not escaping / sanitizing as we are expecting css code. 
echo trim(thememount_get_all_background_css());
?>





/**
 * 0. Font properties
 * ----------------------------------------------------------------------------
 */
<?php
// We are not escaping / sanitizing as we are expecting css code. 
echo trim(thememount_get_all_font_css());
?>



/**
 * 0. Text link and hover color properties
 * ----------------------------------------------------------------------------
 */
<?php
// We are not escaping / sanitizing as we are expecting css code. 
echo trim(thememount_a_color());
?>



/**
 * 0. Header bg color
 * ----------------------------------------------------------------------------
 */
<?php
if( $header_bg_color=='custom' && !empty($header_bg_custom_color) ){
	?>
	.site-header.tm-bgcolor-custom:not(.is_stuck),
	.tm-header-style-classic-box.tm-header-overlay .site-header.tm-bgcolor-custom:not(.is_stuck) .tm-container-for-header{
		background-color:<?php echo esc_html($header_bg_custom_color); ?> !important;
	}
	<?php
}
?>

/**
 * 0. Sticky header bg color
 * ----------------------------------------------------------------------------
 */
<?php
if( $sticky_header_bg_color=='custom' && !empty($sticky_header_bg_custom_color) ){
	?>
	.is_stuck.site-header.tm-sticky-bgcolor-custom{
		background-color:<?php echo esc_html($sticky_header_bg_custom_color); ?> !important;
	}
	<?php
}
?>




/**
 * 0. header menu bg color
 * ----------------------------------------------------------------------------
 */
<?php
if( $header_menu_bg_color=='custom' && !empty($header_menu_bg_custom_color) ){
	?>
	.site-header-menu.tm-header-menu-bg-color-custom{
		background-color:<?php echo esc_html($header_menu_bg_custom_color); ?>;
		<!-- center logo transparent header ma issue kare che important -->
	}
	<?php
}
?>


/**
 * 0. Sticky menu bg color
 * ----------------------------------------------------------------------------
 */
<?php
if( $sticky_header_menu_bg_color=='custom' && !empty($sticky_header_menu_bg_custom_color) ){
	?>
	.is_stuck.site-header-menu.tm-sticky-bgcolor-custom{
		background-color:<?php echo esc_html($sticky_header_menu_bg_custom_color); ?> !important;
	}
	<?php
}
?>




/**
 * 0. List style special style
 * ----------------------------------------------------------------------------
 */
.wpb_row .vc_tta.vc_general.vc_tta-color-white:not(.vc_tta-o-no-fill) .vc_tta-panel-body .wpb_text_column, 
.tm-list.tm-list-icon-color- li,
.tm-list-li-content{
	color:<?php echo esc_html($general_font['color']); ?>;
}


/**
 * 0. Page loader css
 * ----------------------------------------------------------------------------
 */
<?php echo thememount_get_page_loader_css(); ?>



/**
 * 0. Floating bar
 * ----------------------------------------------------------------------------
 */
<?php echo thememount_floatingbar_inline_css(); ?>




/**
 * 1. Background color
 * ----------------------------------------------------------------------------
 */ 
#totop,
.mailchimp-inputbox:after,
.mc_form_inside .mc_merge_var:after,
.widget_newsletterwidget .newsletter-widget:after,
.mailchimp-inputbox.tm-agency-newsletter-form input[type="submit"],
.mailchimp-inputbox.tm-hotel-newsletter-form input[type="submit"], 
.vc_toggle_default.vc_toggle_color_skincolor .vc_toggle_icon, 
.vc_toggle_default.vc_toggle_color_skincolor .vc_toggle_icon:after, 
.vc_toggle_default.vc_toggle_color_skincolor .vc_toggle_icon:before, 
.vc_toggle_round.vc_toggle_color_skincolor:not(.vc_toggle_color_inverted) .vc_toggle_icon,
.vc_toggle_round.vc_toggle_color_skincolor.vc_toggle_color_inverted .vc_toggle_icon:after, 
.vc_toggle_round.vc_toggle_color_skincolor.vc_toggle_color_inverted .vc_toggle_icon:before,
.vc_toggle_round.vc_toggle_color_inverted.vc_toggle_color_skincolor .vc_toggle_title:hover .vc_toggle_icon:after, 
.vc_toggle_round.vc_toggle_color_inverted.vc_toggle_color_skincolor .vc_toggle_title:hover .vc_toggle_icon:before,
.vc_toggle_simple.vc_toggle_color_skincolor .vc_toggle_icon:after, 
.vc_toggle_simple.vc_toggle_color_skincolor .vc_toggle_icon:before,
.vc_toggle_simple.vc_toggle_color_skincolor .vc_toggle_title:hover .vc_toggle_icon:after, 
.vc_toggle_simple.vc_toggle_color_skincolor .vc_toggle_title:hover .vc_toggle_icon:before,
.vc_toggle_rounded.vc_toggle_color_skincolor:not(.vc_toggle_color_inverted) .vc_toggle_icon,
.vc_toggle_rounded.vc_toggle_color_skincolor.vc_toggle_color_inverted .vc_toggle_icon:after, 
.vc_toggle_rounded.vc_toggle_color_skincolor.vc_toggle_color_inverted .vc_toggle_icon:before,
.vc_toggle_rounded.vc_toggle_color_skincolor.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon:after, 
.vc_toggle_rounded.vc_toggle_color_skincolor.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon:before,
.vc_toggle_square.vc_toggle_color_skincolor:not(.vc_toggle_color_inverted) .vc_toggle_icon,
.vc_toggle_square.vc_toggle_color_skincolor:not(.vc_toggle_color_inverted) .vc_toggle_title:hover .vc_toggle_icon,
.vc_toggle_square.vc_toggle_color_skincolor.vc_toggle_color_inverted .vc_toggle_icon:after, 
.vc_toggle_square.vc_toggle_color_skincolor.vc_toggle_color_inverted .vc_toggle_icon:before,
.vc_toggle_square.vc_toggle_color_skincolor.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon:after, 
.vc_toggle_square.vc_toggle_color_skincolor.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon:before,

/*Woocommerce Section*/
.widget .tagcloud a:hover,
.woocommerce .widget_shopping_cart a.button:hover,
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
.main-holder .site-content #review_form #respond .form-submit input:hover,
.woocommerce div.product form.cart .button:hover,
table.compare-list .add-to-cart td a:hover,
.woocommerce-cart #content table.cart td.actions input[type="submit"]:hover,

.single .main-holder #content .woocommerce-error .button, 
.single .main-holder #content .woocommerce-info .button, 
.single .main-holder #content .woocommerce-message .button,
.single .main-holder div.product .woocommerce-tabs ul.tabs li.active,
.main-holder .site table.cart .coupon input:hover,
.woocommerce #payment #place_order:hover,


.wishlist_table td.product-price ins,
.widget .product_list_widget ins,
.woocommerce .widget_shopping_cart a.button.checkout,
.woocommerce .wishlist_table td.product-add-to-cart a,
.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
.woocommerce .widget_price_filter .price_slider_amount .button:hover,

.main-holder .site-content ul.products li.product .yith-wcwl-wishlistexistsbrowse a[rel="nofollow"], 
.main-holder .site-content ul.products li.product .add_to_wishlist, 
.main-holder .site-content ul.products li.product .compare, 
.main-holder .site-content ul.products li.product .yith-wcqv-button, 
.main-holder .site-content ul.products li.product .add_to_cart_button,
.main-holder .site-content ul.products li.product .tm-wc-add-to-cart-btn a[rel="nofollow"], 

/*blog classic style3*/
.thememount-box-blog-style3 .thememount-post-righticon .thememount-entry-icon-wrapper,
.thememount-box-view-topimage-bottomcontent .thememount-overlay a,

/*Accordion Section*/
.vc_tta-color-skincolor.vc_tta-style-modern .vc_tta-panel .vc_tta-panel-heading,
.wpb-js-composer .vc_general.vc_tta-color-white.vc_tta-style-classic .vc_active .vc_tta-panel-heading .vc_tta-controls-icon,
.wpb-js-composer .vc_general.vc_tta-color-white.vc_tta-style-classic .vc_tta-panel .vc_tta-panel-heading:hover .vc_tta-controls-icon,
.tm-vc_general.tm-vc_cta3.tm-vc_cta3-color-skincolor.tm-vc_cta3-style-flat,

.tm-col-bgcolor-skincolor .tm-bg-layer-inner,
.tm-bgcolor-skincolor > .tm-bg-layer,
footer#colophon.tm-bgcolor-skincolor > .tm-bg-layer,
.tm-titlebar-wrapper.tm-bgcolor-skincolor .tm-titlebar-wrapper-bg-layer,

/* Tab content section */
.tm-tourtab-style1.vc_general.vc_tta-color-grey.vc_tta-style-outline .vc_tta-tab>a:focus, 
.tm-tourtab-style1.vc_general.vc_tta-color-grey.vc_tta-style-outline .vc_tta-tab>a:hover,
.tm-tourtab-style1.vc_general.vc_tta-tabs.vc_tta-style-outline .vc_tta-tab.vc_active>a,

/* Events Calendar */
.thememount-post-item-inner .tribe-events-event-cost,
.tribe-events-day .tribe-events-day-time-slot h5,
.tribe-events-button, 
#tribe-events .tribe-events-button, 
.tribe-events-button.tribe-inactive, 
#tribe-events .tribe-events-button:hover, 
.tribe-events-button:hover, 
.tribe-events-button.tribe-active:hover,

.single-tribe_events .tribe-events-schedule .tribe-events-cost,
.tribe-events-list .tribe-events-event-cost span,
#tribe-bar-form .tribe-bar-submit input[type=submit]:hover,


#tribe-events .tribe-events-button, #tribe-events .tribe-events-button:hover, 
#tribe_events_filters_wrapper input[type=submit], 
.tribe-events-button, .tribe-events-button.tribe-active:hover, 
.tribe-events-button.tribe-inactive, .tribe-events-button:hover, 
.tribe-events-calendar td.tribe-events-present div[id*=tribe-events-daynum-], 
.tribe-events-calendar td.tribe-events-present div[id*=tribe-events-daynum-]>a,

.thememount-box-blog .tm-featured-outer-wrapper .thememount-box-post-date,
.thememount-box-blog .thememount-box-content .thememount-box-post-date:after,
.thememount-box-blog-classic .more-link-wrapper a.more-link,
body .datepicker table tr td span.active.active, 
body .datepicker table tr td.active.active,
.datepicker table tr td.active.active:hover, 
.datepicker table tr td span.active.active:hover,

.thememount-box-portfolio.thememount-portfolio-box-view-top-image .thememount-overlay,
body.widget_borderstyle1 .widget .widget-title::before,

.datepicker table tr td.day:hover, 
.datepicker table tr td.day.focused,

.tm-bgcolor-skincolor.tm-rowborder-topcross:before,
.tm-bgcolor-skincolor.tm-rowborder-bottomcross:after,
.tm-bgcolor-skincolor.tm-rowborder-topbottomcross:before,
.tm-bgcolor-skincolor.tm-rowborder-topbottomcross:after,

/* social icons */
.tm-round-social-icon .thememount-social-links-wrapper .social-icons li:hover a,
.thememount-box-view-topimage-bottomcontent .thememount-box-social-links ul a:hover,

/* Sortable portfolio */
.tm-sortable-list .tm-sortable-link a:after,

/* Widget Border style */

.is_stuck.tm-sticky-bgcolor-skincolor,

.widget_borderstyle1 .widget .widget-title:before {
	background-color: <?php echo esc_html($skincolor); ?>;
}

/* Drop cap */
.tm-dcap-color-skincolor,

/* Slick Slider */
.thememount-boxes-row-wrapper .slick-arrow:not(.slick-disabled):hover,
.tm-author-social-links li a:hover,

/* Progress Bar */
.vc_progress_bar.vc_progress-bar-color-skincolor .vc_single_bar .vc_bar,
.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-skincolor .vc_bar,
.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-skincolor span.tm-vc_label_units.vc_label_units,

/* Sidebar */
.sidebar .widget .widget-title:after,

/* Global Input Button */
input[type="submit"], 
input[type="button"], 
input[type="reset"],

/* Cart icon background color */
.tm-header-icons .tm-header-wc-cart-link span.number-cart,

/* Testimonials Section */
.thememount-box-view-default .thememount-box-author .thememount-box-img .thememount-icon-box,

/* Progress Bar Section */
span.tm-vc_label_units.vc_label_units,

/* Accordion section */
.wpb-js-composer .vc_tta-color-skincolor.vc_tta-style-outline .vc_tta-panel .vc_tta-panel-heading:focus, 
.wpb-js-composer .vc_tta-color-skincolor.vc_tta-style-outline .vc_tta-panel .vc_tta-panel-heading:hover,
.wpb-js-composer .vc_tta-color-skincolor.vc_tta-style-flat .vc_tta-panel .vc_tta-panel-heading,
.wpb-js-composer .vc_tta-color-skincolor.vc_tta-style-classic .vc_tta-panel .vc_tta-panel-heading,

.tm-cta3-only.tm-vc_general.tm-vc_cta3.tm-vc_cta3-color-skincolor.tm-vc_cta3-style-3d,

/* Servicebox section */
.tm-sbox:hover .tm-vc_icon_element.tm-vc_icon_element-outer .tm-vc_icon_element-inner.tm-vc_icon_element-background-color-grey.tm-vc_icon_element-outline,
.tm-vc_btn3.tm-vc_btn3-color-skincolor.tm-vc_btn3-style-3d:focus, 
.tm-vc_btn3.tm-vc_btn3-color-skincolor.tm-vc_btn3-style-3d:hover,
.tm-vc_general.tm-vc_btn3.tm-vc_btn3-color-skincolor.tm-vc_btn3-style-outline:hover,
.tm-vc_icon_element.tm-vc_icon_element-outer .tm-vc_icon_element-inner.tm-vc_icon_element-background-color-skincolor.tm-vc_icon_element-background,
.tm-vc_general.tm-vc_btn3.tm-vc_btn3-color-skincolor,
.tm-bgcolor-skincolor,
.tm-col-bgcolor-skincolor,
.tm-header-overlay .site-header.tm-sticky-bgcolor-skincolor.is_stuck,
.site-header-menu.tm-sticky-bgcolor-skincolor.is_stuck,

/* Blog section */
.thememount-box-view-overlay .thememount-box-team .thememount-box-social-links ul a:hover,
.thememount-box-view-overlay .thememount-boxes .thememount-box-content.thememount-overlay .thememount-icon-box a:hover,
.thememount-post-box-icon-wrapper,
.tm-post-format-icon-wrapper,
.thememount-pagination .page-numbers.current, 
.thememount-pagination .page-numbers:hover,
.tm-social-share-post-wrapper .tm-social-share-links ul li a:hover,

.main-holder .site-content nav.woocommerce-pagination ul li .page-numbers.current,
.main-holder .site-content nav.woocommerce-pagination ul li a:hover,

/*woocommerce*/
.main-holder .site-content ul.products li.product .onsale,
.single .main-holder .site-content span.onsale,
#yith-quick-view-content .onsale,

/*Search Result Page*/
.tm-sresults-title small a,
.tm-sresult-form-wrapper,

/*widget*/
.widget.fixology_category_list_widget li a:hover, 
.widget.fixology_category_list_widget li.current-cat a, 
.sidebar .widget.tm_widget_nav_menu ul li a:hover, 
.sidebar .widget.tm_widget_nav_menu ul li.current-menu-item a,

/*bbpress*/
#bbpress-forums button,
#bbpress-forums ul li.bbp-header,
.post.thememount-box-blog-classic .thememount-blogbox-footer-readmore a,
.thememount-box-blog-classic .entry-title:before,

/* square social icon */
.tm-square-social-icon .thememount-social-links-wrapper .social-icons li a:hover,

/*search form button*/
.tm-search-overlay .tm-site-searchform button,

.entry-content .page-links a:hover,
mark, 
ins{
	background-color: <?php echo esc_html($skincolor); ?> ;
}

/*Pricing Table*/
.rev_slider_wrapper .tm-skin-shape,
.main-holder #content .rpt_4_plans.rpt_style_basic .rpt_plan .rpt_foot:hover{
	background-color: <?php echo esc_html($skincolor); ?> !important ;
}

/* Testimonial icon */
.thememount-box-view-default .thememount-box-desc:before {
    border-color: <?php echo esc_html($skincolor); ?>  ;
	color: <?php echo esc_html($skincolor); ?> ;
}

/* Revolution button */
.Sports-Button-skin{
	background-color: <?php echo esc_html($skincolor); ?> !important ;
    border-color: <?php echo esc_html($skincolor); ?> !important ;
}
.tm-dark-to-skin:hover{
	background-color: <?php echo esc_html($skincolor); ?> !important ;
    border-color: <?php echo esc_html($skincolor); ?> !important ;
}
.Sports-Button-skin:hover{
	background-color: #202020 !important;
    border-color: #202020 !important;
}
.vc_tta-color-skincolor.vc_tta-style-flat .vc_tta-panel .vc_tta-panel-body, 
.vc_tta-color-skincolor.vc_tta-style-flat .vc_tta-panel.vc_active .vc_tta-panel-heading{
    background-color: rgba( <?php echo thememount_hex2rgb($skincolor); ?> , 0.89);
}
.tm-cta3-only.tm-vc_general.tm-vc_cta3.tm-vc_cta3-color-skincolor.tm-vc_cta3-style-3d,
.tm-vc_general.tm-vc_btn3.tm-vc_btn3-style-3d.tm-vc_btn3-color-skincolor{
	box-shadow: 0 5px 0 <?php echo tm_adjustBrightness($skincolor, -30); ?>;
}
.tm-vc_btn3.tm-vc_btn3-color-skincolor.tm-vc_btn3-style-3d:focus, 
.tm-vc_btn3.tm-vc_btn3-color-skincolor.tm-vc_btn3-style-3d:hover{   
    box-shadow: 0 2px 0 <?php echo tm_adjustBrightness($skincolor, -30); ?>;
}


/* This is Titlebar Background color */
.tm-titlebar-wrapper.tm-breadcrumb-on-bottom:not(.tm-bgcolor-skincolor) .breadcrumb-wrapper {
	background-color: rgba( <?php echo thememount_hex2rgb($skincolor); ?> , 0.79);
}


<?php if( $titlebar_bg_color=='custom' && !empty($titlebar_bg_custom_color['rgba']) ) : ?>
.tm-titlebar-wrapper .tm-titlebar-inner-wrapper{
	background-color: <?php echo esc_html( $titlebar_bg_custom_color['rgba'] ); ?>;
}
.tm-titlebar-wrapper{
	background-color:  <?php echo esc_html( $titlebar_bg_custom_color['rgba'] ); ?>;
}
<?php endif; ?>
.tm-header-overlay .tm-titlebar-wrapper .tm-titlebar-inner-wrapper{	
	padding-top: <?php echo ($header_height) ?>px;
}


/* This is Titlebar Text color */
<?php if( $titlebar_text_color=='custom' && !empty($titlebar_text_custom_color) ): ?>
.tm-titlebar-wrapper .tm-titlebar-main h1.entry-title{
	color: <?php echo esc_html($titlebar_text_custom_color); ?> !important;
}
.tm-titlebar-wrapper .tm-titlebar-main h3.entry-subtitle{
	color: <?php echo esc_html($titlebar_subheading_text_custom_color); ?> !important;
}
.tm-titlebar-main .breadcrumb-wrapper, .tm-titlebar-main .breadcrumb-wrapper a:hover{ /* Breadcrumb */
	color: rgba( <?php echo thememount_hex2rgb($titlebar_breadcrumb_text_custom_color); ?> , 1) !important;
}
.tm-titlebar-main .breadcrumb-wrapper a{ /* Breadcrumb */
	color: rgba( <?php echo thememount_hex2rgb($titlebar_breadcrumb_text_custom_color); ?> , 0.7) !important;
}
<?php endif; ?>

.tm-titlebar-wrapper .tm-titlebar-inner-wrapper{
	height: <?php echo esc_html($titlebar_height); ?>px;	
}
.tm-header-overlay .thememount-titlebar-wrapper .tm-titlebar-inner-wrapper{	
	padding-top: <?php echo esc_html(($header_height+30)); ?>px;
}
.thememount-header-style-3.tm-header-overlay .tm-titlebar-wrapper .tm-titlebar-inner-wrapper{
	padding-top: <?php echo esc_html(($header_height+55)) ?>px;
}

/* Logo Max-Height */
.headerlogo img{
    max-height: <?php echo esc_html($logoMaxHeight); ?>px;
}
.is_stuck .headerlogo img{
    max-height: <?php echo esc_html($logoMaxHeightSticky); ?>px;
}

/* Extra Code */
span.tm-sc-logo.tm-sc-logo-type-image {
    position: relative;
	display: block;
}
img.thememount-logo-img.stickylogo {
    position: absolute;
    top: 0;
    left: 0;
}
.tm-stickylogo-yes .standardlogo{
	opacity: 1;
}
.tm-stickylogo-yes .stickylogo{
	opacity: 0;
}
.is_stuck .tm-stickylogo-yes .standardlogo{
	opacity: 0;
}
.is_stuck .tm-stickylogo-yes .stickylogo{
	opacity: 1;
}
#stickable-header{
	background-color: <?php echo esc_html( thememount_get_option('headerbgcolor') ); ?>;
}
.is-sticky #stickable-header{
	background-color: <?php echo esc_html($sticky_header_bg_color); ?>;
}

/**
 * 2. Topbar Background color
 * ----------------------------------------------------------------------------
 */
<?php if( $topbar_text_color=='custom' && !empty($topbar_text_custom_color) ): ?>
	.site-header .thememount-topbar{
		color: rgba( <?php echo thememount_hex2rgb($topbar_text_custom_color); ?> , 0.7);
	}
	.thememount-topbar-textcolor-custom .social-icons li a{
		  border: 1px solid rgba( <?php echo thememount_hex2rgb($topbar_text_custom_color); ?> , 0.7);
	}
	.site-header .thememount-topbar a{
		color: rgba( <?php echo thememount_hex2rgb($topbar_text_custom_color); ?> , 1);
	}
<?php endif; ?>

<?php if( $topbar_bg_color=='custom' && !empty($topbar_bg_custom_color) ) : ?>
	.site-header .thememount-topbar{
		background-color: <?php echo esc_html($topbar_bg_custom_color); ?>;
	}
<?php endif; ?>

<?php

if( !empty($topbar_breakpoint) && trim($topbar_breakpoint)!='all' ){
	if( esc_attr($topbar_breakpoint)=='custom' ) {
		$topbar_breakpoint = ( !empty($topbar_breakpoint_custom) ) ?  trim($topbar_breakpoint_custom) : '1200' ;
	}

?>
	
/* Show/hide topbar in some devices */
	@media (max-width: <?php echo esc_attr($topbar_breakpoint); ?>px){
		.thememount-topbar-wrapper{
			display: none !important;
		}
	}

<?php
}
?>


/**
 * 4. Border color
 * ----------------------------------------------------------------------------
 */
 
/* Progress Bar Section */
.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-skincolor span.tm-vc_label_units.vc_label_units:before,
span.tm-vc_label_units.vc_label_units:before{ 
	border-color: <?php echo esc_html($skincolor); ?> transparent; 
}

.vc_toggle_default.vc_toggle_color_skincolor .vc_toggle_icon:before,
.vc_toggle_default.vc_toggle_color_skincolor .vc_toggle_icon,

.vc_toggle_round.vc_toggle_color_inverted.vc_toggle_color_skincolor .vc_toggle_title:hover .vc_toggle_icon,
.vc_toggle_round.vc_toggle_color_inverted.vc_toggle_color_skincolor .vc_toggle_icon,

.vc_toggle_rounded.vc_toggle_color_inverted.vc_toggle_color_skincolor .vc_toggle_icon,
.vc_toggle_rounded.vc_toggle_color_inverted.vc_toggle_color_skincolor .vc_toggle_title:hover .vc_toggle_icon,

.vc_toggle_square.vc_toggle_color_inverted.vc_toggle_color_skincolor .vc_toggle_icon,
.vc_toggle_square.vc_toggle_color_inverted.vc_toggle_color_skincolor .vc_toggle_title:hover .vc_toggle_icon,

.vc_toggle.vc_toggle_arrow.vc_toggle_color_skincolor .vc_toggle_icon:after, 
.vc_toggle.vc_toggle_arrow.vc_toggle_color_skincolor .vc_toggle_icon:before,
.vc_toggle.vc_toggle_arrow.vc_toggle_color_skincolor .vc_toggle_title:hover .vc_toggle_icon:after, 
.vc_toggle.vc_toggle_arrow.vc_toggle_color_skincolor .vc_toggle_title:hover .vc_toggle_icon:before,

.tm-cta3-only.tm-vc_general.tm-vc_cta3.tm-vc_cta3-color-skincolor.tm-vc_cta3-style-outline,

.main-holder .site #content table.cart td.actions .input-text:focus, 
textarea:focus, input[type="text"]:focus, 
input[type="password"]:focus, 
input[type="datetime"]:focus, 
input[type="datetime-local"]:focus, 
input[type="date"]:focus, 
input[type="month"]:focus, 
input[type="time"]:focus, 
input[type="week"]:focus, 
input[type="number"]:focus, 
input[type="email"]:focus, 
input[type="url"]:focus, 
input[type="search"]:focus, 
input[type="tel"]:focus, 
input[type="color"]:focus, 
input.input-text:focus, 
select:focus,
.tm-bgcolor-grey textarea:focus,
.tm-bgcolor-grey input[type="text"]:focus,
.tm-bgcolor-grey input[type="password"]:focus,
.tm-bgcolor-grey input[type="datetime"]:focus,
.tm-bgcolor-grey input[type="datetime-local"]:focus,
.tm-bgcolor-grey input[type="date"]:focus,
.tm-bgcolor-grey input[type="month"]:focus,
.tm-bgcolor-grey input[type="time"]:focus,
.tm-bgcolor-grey input[type="week"]:focus,
.tm-bgcolor-grey input[type="number"]:focus,
.tm-bgcolor-grey input[type="email"]:focus,
.tm-bgcolor-grey input[type="url"]:focus,
.tm-bgcolor-grey input[type="search"]:focus,
.tm-bgcolor-grey input[type="tel"]:focus,
.tm-bgcolor-grey input[type="color"]:focus,
.tm-bgcolor-grey select:focus,
blockquote,

/* Widget Border style */
.widget_borderstyle2 .widget .widget-title:before,

/* Accordion section */
.wpb-js-composer .vc_tta-color-skincolor.vc_tta-style-modern .vc_tta-panel .vc_tta-panel-heading, 
 
.vc_tta-color-skincolor.vc_tta-style-outline .vc_tta-panel .vc_tta-panel-heading, 
.vc_tta-color-skincolor.vc_tta-style-outline .vc_tta-controls-icon::after, 
.vc_tta-color-skincolor.vc_tta-style-outline .vc_tta-controls-icon::before, 
.vc_tta-color-skincolor.vc_tta-style-outline .vc_tta-panel .vc_tta-panel-body, 
.vc_tta-color-skincolor.vc_tta-style-outline .vc_tta-panel .vc_tta-panel-body:after, 
.vc_tta-color-skincolor.vc_tta-style-outline .vc_tta-panel .vc_tta-panel-body:before,
.vc_tta-color-skincolor.vc_tta-style-outline .vc_active .vc_tta-panel-heading .vc_tta-controls-icon:after, 
.vc_tta-color-skincolor.vc_tta-style-outline .vc_active .vc_tta-panel-heading .vc_tta-controls-icon:before, 
.vc_tta-color-skincolor.vc_tta-style-classic .vc_tta-panel .vc_tta-panel-heading,

/* testimonials */
.thememount-boxes-view-slickview .testimonial_wrapper .slick-arrow:not(.slick-disabled):hover,
.tm-bgcolor-darkgrey .thememount-boxes-view-slickview .testimonial_wrapper .slick-arrow:not(.slick-disabled):hover,

/* blog classic */
.thememount-box-blog-classic .tm-post-entry-header .thememount-entry-date-wrapper,
.thememount-box-blog-classic .tm_classicpost_meta .tm-post-format-icon-wrapper,

/* teambox overlay */
.thememount-team-box-view-overlay .tm_overlay_hoverbox:after,

.vc_tta-color-skincolor.vc_tta-style-outline .vc_tta-panel.vc_active .vc_tta-panel-heading,  
.tm-vc_general.tm-vc_btn3.tm-vc_btn3-color-skincolor.tm-vc_btn3-style-outline,
.tm-vc_icon_element.tm-vc_icon_element-outer .tm-vc_icon_element-inner.tm-vc_icon_element-background-color-skincolor.tm-vc_icon_element-outline,
.thememount-box-view-overlay .thememount-box-team .thememount-box-social-links ul a:hover,

.thememount-box-view-overlay .thememount-boxes .thememount-box-content.thememount-overlay .thememount-icon-box a:hover,
.thememount-box-blog-classic .more-link-wrapper a.more-link,
.tm-header-icons .tm-header-wc-cart-link a:hover,

.tm-floatingform .wpcf7-textarea:focus, 
.tm-floatingform .wpcf7-text:focus,

.thememount-fbar-position-default div.thememount-fbar-box-w,

.tm-appo-form .field-group textarea:focus, 
.tm-appo-form .field-group input[type="text"]:focus, 
.tm-appo-form .field-group input[type="email"]:focus{
	border-color: <?php echo esc_html($skincolor); ?>;
}

/*woocommerce*/
#yith-quick-view-content .onsale:after,
.single .main-holder .site-content span.onsale:after,
.main-holder .site-content ul.products li.product .onsale:after {
    border-color: <?php echo esc_html($skincolor); ?> transparent transparent;
}
.main-holder .rpt_style_basic .rpt_plan.rpt_recommended_plan .rpt_title:after,
.woocommerce-message,
.woocommerce-info,
.tm-search-overlay {
	border-top-color: <?php echo esc_html($skincolor); ?>;
}

/* team member style2 */
.thememount-teambox-style2 .thememount-box-content:before,
.thememount-teambox-style2 .thememount-box-content:after {
	border-top: 3px solid <?php echo esc_html($skincolor); ?>;
}

/* search form */
.tm-search-overlay .w-search-form-row:before {
	border-bottom-color: <?php echo esc_html($skincolor); ?>;
}

/**
 * 4. Box shadow
 * ----------------------------------------------------------------------------
 */ 
.slick-dots li.slick-active button{
	 box-shadow: inset 0 0 0 2px  <?php echo esc_html($skincolor); ?>;
}

/**
 * 5. Textcolor
 * ----------------------------------------------------------------------------
 */

.tm-vc_general.tm-vc_btn3.tm-vc_btn3-style-text.tm-vc_btn3-color-black:hover,

.tm-header-overlay .thememount-fbar-btn a:hover i,
.comment-meta a:hover,
.widget_calendar table td#today,
.vc_toggle_text_only.vc_toggle_color_skincolor .vc_toggle_title h4,
.tm-vc_general.tm-vc_cta3.tm-vc_cta3-color-skincolor.tm-vc_cta3-style-outline .tm-vc_cta3-content-header,
section.error-404 .tm-big-icon,
.single .main-holder #content .summary .compare.button:hover,

.tm-bgcolor-darkgrey ul.fixology_contact_widget_wrapper li a:hover,
.tm-vc_general.tm-vc_cta3.tm-vc_cta3-color-skincolor.tm-vc_cta3-style-classic .tm-vc_cta3-content-header, 
.tm-vc_icon_element-color-skincolor, 
 
.tm-bgcolor-skincolor .thememount-pagination .page-numbers.current, 
.tm-bgcolor-skincolor .thememount-pagination .page-numbers:hover,

.tm-bgcolor-darkgrey .thememount-twitterbox-inner .tweet-text a:hover,
.tm-bgcolor-darkgrey .thememount-twitterbox-inner .tweet-details a:hover,

.tm-dcap-txt-color-skincolor,

/* Accordion section */
.vc_tta-color-skincolor.vc_tta-style-outline .vc_tta-panel.vc_active .vc_tta-panel-title>a,

/* Global Button */ 
.tm-vc_general.tm-vc_btn3.tm-vc_btn3-style-text.tm-vc_btn3-color-white:hover:hover,

article.post .entry-title a:hover,

 /* Team Member meta details */ 
.tm-extra-details-list .tm-team-extra-list-title,
.tm-team-member-single-meta-value a:hover,
.tm-team-member-single-category a:hover,
.tm-team-details-list .tm-team-list-value a:hover,

/* price list */
ul.tm-pricelist-block li .service-price,

 /* Blog meta details */ 
.tm-entry-meta .tm-meta-line i,
.comment-reply-link,

article.thememount-blogbox-format-link .tm-format-link-title a:hover, 
article.post.format-link .tm-format-link-title a:hover,

 /* Global */ 
.tm-skincolor,
.tm-list.tm-icon-skincolor li i,

 /* Social icon */ 
.tm-social-share-links ul li a:hover,
.thememount-pf-detailbox-list .tm-pf-details-date .tm-pf-left-details i,

 /* lsit style */ 
.tm-list-style-disc.tm-list-icon-color-skincolor li,
.tm-list-style-circle.tm-list-icon-color-skincolor li,
.tm-list-style-square.tm-list-icon-color-skincolor li,

.tm-list-style-decimal.tm-list-icon-color-skincolor li,
.tm-list-style-upper-alpha.tm-list-icon-color-skincolor li,
.tm-list-style-roman.tm-list-icon-color-skincolor li,
.tm-list.tm-skincolor li .tm-list-li-content,

.tm-skin-color strong,
 
/* Testimonials Section */
.tm-bgcolor-skincolor .thememount-box-view-default .thememount-box-author .thememount-box-img .thememount-icon-box,
.thememount-box-view-default .thememount-box-author .thememount-author-name a:hover,  
.testimonial_item .thememount-author-name,
.testimonial_item .thememount-author-name a,

.thememount-boxes-view-slickview .testimonial_wrapper .slick-prev:not(.slick-disabled):hover:before,
.thememount-boxes-view-slickview .testimonial_wrapper .slick-next:not(.slick-disabled):hover:before,
 
/* Portfolio section*/
.tm-bgcolor-darkgrey .thememount-box-view-top-image .thememount-box-bottom-content h4 a:hover,
.tm-bgcolor-darkgrey .thememount-box-view-overlay .thememount-box-bottom-content h4 a:hover,
.thememount-box.thememount-box-view-overlay .thememount-box-content h4 a:hover,
.tm-textcolor-white a:hover,
.tm-sortable-list .tm-sortable-link a.selected,
.tm-bgcolor-darkgrey .tm-sortable-list .tm-sortable-link a:hover,
.thememount-box-view-top-image .thememount-box-bottom-content .thememount-box-category a,
.thememount-portfolio-box-view-top-image .thememount-icon-box a,

/* Tab content section */
.tm-tourtab-style1.vc_general.vc_tta-color-grey.vc_tta-style-outline .vc_tta-panel.vc_active .vc_tta-panel-title>a,
.tm-tourtab-style1.vc_general.vc_tta-color-grey.vc_tta-style-outline .vc_tta-panel .vc_tta-panel-title>a:hover, 

/* Vcbutton section */
.tm-vc_general.tm-vc_btn3.tm-vc_btn3-color-skincolor.tm-vc_btn3-style-outline, 
.tm-vc_btn_skincolor.tm-vc_btn_outlined, .tm-vc_btn_skincolor.vc_btn_square_outlined, 

.tm-vc_general.tm-vc_btn3.tm-vc_btn3-style-text.tm-vc_btn3-color-skincolor,
.tm-fid-icon-wrapper i,

/*blogbox*/
.thememount-box-blog-classic .thememount-post-left .entry-date,
.thememount-box-blog.thememount-box-view-content-overlay .thememount-blogbox-footer-readmore a:hover,
.thememount-box-blog-classic .tm_classicpost_meta .tm-post-format-icon-wrapper,

/* Teammember section */
.thememount-box-team.thememount-box-view-overlay .thememount-box-content h4 a:hover,
.thememount-box-team.thememount-box-view-left-image .tm-team-social-links-wrapper li a:hover,
.thememount-portfolio-box-view-overlay .thememount-box-content.thememount-overlay .thememount-icon-box a:hover,
.tm-textcolor-skincolor,
.tm-textcolor-skincolor a,
.thememount-box-title h4 a:hover,
.thememount-blogbox-footer-readmore a:hover,
.tm-bgcolor-darkgrey .thememount-box-view-right-image .thememount-blogbox-footer-readmore a:hover,
.thememount-box-blog-style3 .thememount-post-left .entry-date,
/* Text color skin in row secion*/
.tm-background-image.tm-row-textcolor-skin h1, 
.tm-background-image.tm-row-textcolor-skin h2, 
.tm-background-image.tm-row-textcolor-skin h3, 
.tm-background-image.tm-row-textcolor-skin h4, 
.tm-background-image.tm-row-textcolor-skin h5, 
.tm-background-image.tm-row-textcolor-skin h6,
.tm-background-image.tm-row-textcolor-skin .tm-element-heading-wrapper h2,
.tm-background-image.tm-row-textcolor-skin .thememount-testimonial-title,
.tm-background-image.tm-row-textcolor-skin a,
.tm-background-image.tm-row-textcolor-skin .item-content a:hover,
.single-tm_team_member .tm-team-social-links-wrapper ul li a:hover,
.tm-row-textcolor-skin h1, 
.tm-row-textcolor-skin h2, 
.tm-row-textcolor-skin h3, 
.tm-row-textcolor-skin h4, 
.tm-row-textcolor-skin h5, 
.tm-row-textcolor-skin h6,
.tm-row-textcolor-skin .tm-element-heading-wrapper h2,
.tm-row-textcolor-skin .thememount-testimonial-title,
.tm-row-textcolor-skin a,
.tm-row-textcolor-skin .item-content a:hover,

/*woocommerce*/
.main-holder .site-content ul.products li.product a, 

.woocommerce .star-rating span:before,
.woocommerce-info:before,
.woocommerce-message:before,

.main-holder .site-content ul.products li.product .price,
.main-holder .site-content .star-rating span:before,

.main-holder .site-content ul.products li.product .price ins,
.single .main-holder #content div.product .price ins,

.woocommerce .price .woocommerce-Price-amount,
/*taembox overlay*/
.thememount-box-view-overlay .tm-team-social-links-wrapper ul li a:hover,

/*Tweets*/
.widget_latest_tweets_widget p.tweet-text:before,

/*Events Calendar*/
.thememount-events-box-view-top-image-details .thememount-post-readmore a:hover,
/*footer widget menu*/.site-footer .widget.widget_nav_menu ul li a:before,

.tm-team-list-title i,
.tm-bgcolor-darkgrey .thememount-box-view-left-image .thememount-box-title a:hover,
.tm-team-member-view-wide-image .tm-team-details-list .tm-team-list-title{
	color: <?php echo esc_html($skincolor); ?>;
}
.tm-element-heading-wrapper .tm-vc_cta3-headers h2 strong,
.tm-element-heading-wrapper .tm-vc_cta3-headers h4 strong{
	color: <?php echo esc_html($skincolor); ?> !important;
}

/*Pricing table*/
.rpt_plans .rpt_plan:hover,
.rpt_plans .rpt_recommended_plan.rpt_plan  {
	border-color: <?php echo esc_html($skincolor); ?>;
}

.main-holder .rpt_style_basic .rpt_plan:hover .rpt_title,
.main-holder .rpt_style_basic .rpt_plan:hover .rpt_head,
.main-holder .rpt_style_basic .rpt_recommended_plan.rpt_plan .rpt_title,
.main-holder .rpt_style_basic .rpt_recommended_plan.rpt_plan .rpt_head{
	background-color: <?php echo esc_html($skincolor); ?> ; 
}

/*** Defaultmenu ***/     
/*Wordpress Main Menu*/      

/* Menu hover and select section */ 
.tm-mmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li:hover > a,    
.tm-mmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li.current-menu-ancestor > a, 
.tm-mmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_item > a,     
.tm-mmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_ancestor > a,             

/*Wordpress Dropdown Menu*/
.tm-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li li.current-menu-ancestor > a,    
.tm-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li li.current-menu-item > a,    
.tm-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li li.current_page_item > a,    
.tm-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li li.current_page_ancestor > a,    
    
 
 /*Mega Main Menu*/      
 .tm-mmenu-active-color-skin .site-header.tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item:hover > a,  
.tm-mmenu-active-color-skin .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-current-menu-item > a,    
.tm-mmenu-active-color-skin .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-current-menu-ancestor > a,      
.tm-mmenu-active-color-skin .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-current-menu-item > a,    
.tm-mmenu-active-color-skin .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-current-menu-ancestor > a,           


/*Mega Dropdown Menu*/  
.tm-dmenu-active-color-skin .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-current-menu-item > a,    
.tm-dmenu-active-color-skin .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-current-menu-ancestor > a,      
.tm-dmenu-active-color-skin .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.current-menu-item > a,  
.tm-dmenu-active-color-skin .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.current_page_item > a{
    color: <?php echo esc_html($skincolor); ?> ;
}
    

	<?php if( $mainmenu_active_link_color=='custom' && !empty($mainmenu_active_link_custom_color) ){ ?>
        /* Main Menu Active Link Color --------------------------------*/                
        .tm-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li.current-menu-ancestor > a, 
        .tm-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_item > a, 
        .tm-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_ancestor > a, 
        .tm-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_parent > a,          
        .tm-mmenu-active-color-custom  #site-header-menu #site-navigation div.nav-menu > ul > li.current-menu-ancestor > a,       
        
        .tm-mmenu-active-color-custom  .tm-mmmenu-override-yes #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_item > a, 
        .tm-mmenu-active-color-custom  .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-current-menu-item > a,    
        .tm-mmenu-active-color-custom  .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-current-menu-ancestor > a {
            color: <?php echo esc_html($mainmenu_active_link_custom_color); ?>;
        }
    <?php } ?>

	<?php if( $dropmenu_active_link_color=='custom' && !empty($dropmenu_active_link_custom_color) ){ ?>
    
    /* Dropdown Menu Active Link Color -------------------------------- */   
    .tm-dmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li li.current_page_ancestor > a,
    .tm-dmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li li.current_page_item > a,
    .tm-dmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li li.current_page_parent > a, 
    .tm-dmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li li.current-menu-ancestor > a, 
    .tm-dmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li li.current-menu-parent > a,       
            
    .tm-dmenu-active-color-custom #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.current-menu-item > a,    
    .tm-dmenu-active-color-custom #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-current-menu-item > a,    
    
    .tm-dmenu-active-color-custom #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-current-menu-ancestor > a {
        color: <?php echo esc_html($dropmenu_active_link_custom_color); ?>;
    }
    <?php } ?>


/* Dynamic main menu color applying to responsive menu link text */
.header-controls .search_box i.tmicon-fa-search,
.righticon i,
.menu-toggle i,
.header-controls a{
    color: rgba( <?php echo esc_html( thememount_hex2rgb($mainMenuFontColor) ); ?> , 1) ;
}
.menu-toggle i:hover,
.header-controls a:hover {
    color: <?php echo esc_html($skincolor); ?> !important;
}

<?php if( !empty($dropdownmenufont['color']) ) : ?>
	.tm-mmmenu-override-yes  #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget div{
		color: rgba( <?php echo thememount_hex2rgb($dropdownmenufont['color']); ?> , 0.8);
		font-weight: normal;
	}
<?php endif; ?>
#site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget div.textwidget{
	padding-top: 10px;
}

/*Logo Color --------------------------------*/ 
h1.site-title{
	color: <?php echo esc_html($logo_font['color']); ?>;
}


/**
 * 9. Genral Elements
 * ----------------------------------------------------------------------------
 */

/* Site Pre-loader image */
<?php if( isset($loaderimage_custom['url']) && $loaderimage_custom['url']!='' ): ?>
.pageoverlay{
	background-image:url('<?php echo esc_html($loaderimage_custom['url']); ?>');
}
<?php elseif( $loaderimg!='' ) : ?>
.pageoverlay{
	background-image:url('../images/loader<?php echo esc_html($loaderimg); ?>.gif');
}
<?php endif; ?>


/**
 * 10. Heading Elements
 * ----------------------------------------------------------------------------
 */
.tm-textcolor-skincolor h1,
.tm-textcolor-skincolor h2,
.tm-textcolor-skincolor h3,
.tm-textcolor-skincolor h4,
.tm-textcolor-skincolor h5,
.tm-textcolor-skincolor h6,

.tm-textcolor-skincolor .tm-vc_cta3-content-header h2{
	color: <?php echo esc_html($skincolor); ?> !important;
}
.tm-textcolor-skincolor .tm-vc_cta3-content-header h4{
	color: rgba( <?php echo thememount_hex2rgb($skincolor); ?> , 0.90) !important;
}
.tm-textcolor-skincolor .tm-vc_cta3-content .tm-cta3-description{
	color: rgba( <?php echo thememount_hex2rgb($skincolor); ?> , 0.60) !important;
}
.tm-textcolor-skincolor{
	color: rgba( <?php echo thememount_hex2rgb($skincolor); ?> , 0.60);
}
.tm-textcolor-skincolor a{
	color: rgba( <?php echo thememount_hex2rgb($skincolor); ?> , 0.80);
}



/**
 * 10. Floating Bar
 * ----------------------------------------------------------------------------
 */
<?php

if( !empty($fbar_breakpoint) && trim($fbar_breakpoint)!='all' ){

	if( esc_attr($fbar_breakpoint)=='custom' ) {
		$fbar_breakpoint = ( !empty($fbar_breakpoint_custom) ) ?  trim($fbar_breakpoint_custom) : '1200' ;
	}

?>
	
/* Show/hide topbar in some devices */
@media (max-width: <?php echo esc_attr($fbar_breakpoint); ?>px){
	.thememount-fbar-btn,
    .thememount-fbar-box-w{
		display: none !important;
	}
}

	<?php
}
?>




/* ********************* Tab *************************** */
.wpb-js-composer .vc_tta.vc_general.vc_tta-color-skincolor.vc_tta-style-classic .vc_tta-tab.vc_active>a,
.wpb-js-composer .vc_tta.vc_general.vc_tta-color-skincolor.vc_tta-style-classic .vc_tta-tab>a:focus, 
.wpb-js-composer .vc_tta.vc_general.vc_tta-color-skincolor.vc_tta-style-classic .vc_tta-tab>a:hover{
    background-color: <?php echo esc_html($skincolor); ?> ;     
    color: #fff;
}
.vc_tta-color-skincolor.vc_tta-style-flat .vc_tta-tab>a,
.vc_tta-color-skincolor.vc_tta-style-classic .vc_tta-tab.vc_active:after{
    background-color: <?php echo esc_html($skincolor); ?> ;   
}
.vc_tta-color-skincolor.vc_tta-style-classic .vc_tta-tab>a {
    border-color: rgba( <?php echo thememount_hex2rgb($skincolor); ?> , 0.89);    
}
.vc_tta-color-skincolor.vc_tta-style-flat .vc_tta-tab.vc_active>a{
	background-color: rgba( <?php echo thememount_hex2rgb($skincolor); ?> , 0.89);
}
.vc_tta.vc_general.vc_tta-color-skincolor.vc_tta-style-outline .vc_tta-tab.vc_active>a:hover,
.vc_tta.vc_general.vc_tta-color-skincolor.vc_tta-style-outline .vc_tta-tab.vc_active>a:focus,
.vc_tta.vc_general.vc_tta-color-skincolor.vc_tta-style-outline .vc_tta-tab>a {
    border-color: <?php echo esc_html($skincolor); ?> ;   
    background-color: transparent;
    color: <?php echo esc_html($skincolor); ?> ;   
}
.vc_tta.vc_general.vc_tta-color-skincolor.vc_tta-style-outline .vc_tta-tab>a:focus,
.vc_tta.vc_general.vc_tta-color-skincolor.vc_tta-style-outline .vc_tta-tab>a:hover{
    background-color: <?php echo esc_html($skincolor); ?> ; 
    color: #fff;
}
.vc_tta.vc_general.vc_tta-color-skincolor.vc_tta-style-modern .vc_tta-tab>a {
    border-color: rgba( <?php echo thememount_hex2rgb($skincolor); ?> , 0.89);
    background-color: <?php echo esc_html($skincolor); ?> ;   
    color: #fff;
}
.vc_tta.vc_general.vc_tta-color-skincolor.vc_tta-style-modern .vc_tta-tab>a {
    border-color: rgba( <?php echo thememount_hex2rgb($skincolor); ?> , 0.89);
    background-color: <?php echo esc_html($skincolor); ?> ;
    color: #fff;
}
.wpb-js-composer .vc_tta.vc_general.vc_tta-color-skincolor.tm-tab-top-icon .vc_tta-icon {
	color: <?php echo esc_html($skincolor); ?> ;
}


/* ********************* Responsive Menu Code Start *************************** */
<?php
/*
 *  Generate dynamic style for responsive menu. The code with breakpoint.
 */
require_once( get_template_directory() .'/css/dynamic-menu-style.php' ); // Functions
?>
/* ********************** Responsive Menu Code END **************************** */




/******************************************************/
/******************* Custom Code **********************/

<?php
// We are not escaping / sanitizing as we are expecting css code. 
$custom_css_code = thememount_get_option('custom_css_code');
if( !empty($custom_css_code) ){
	echo trim($custom_css_code);
}
?>

/******************************************************/
