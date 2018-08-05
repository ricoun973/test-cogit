<?php


/**
 * Register widget areas.
 *
 * @since Fixology 1.0
 *
 * @return void
 */
function fixology_widgets_init() {
	register_sidebar( array(
		'name' => esc_html__( 'Left Sidebar for Blog', 'fixology' ),
		'id' => 'sidebar-left-blog',
		'description' => esc_html__( 'This is left sidebar for blog section', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Right Sidebar for Blog', 'fixology' ),
		'id' => 'sidebar-right-blog',
		'description' => esc_html__( 'This is right sidebar for blog section', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Left Sidebar for Pages', 'fixology' ),
		'id' => 'sidebar-left-page',
		'description' => esc_html__( 'This is left sidebar for pages', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Right Sidebar for Pages', 'fixology' ),
		'id' => 'sidebar-right-page',
		'description' => esc_html__( 'This is right sidebar for pages', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	// Portfolio - Left
	register_sidebar( array(
		'name' => esc_html__( 'Left Sidebar for Portfolio', 'fixology' ),
		'id' => 'sidebar-left-portfolio',
		'description' => esc_html__( 'This is left sidebar for Portfolio', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	// Portfolio - Right
	register_sidebar( array(
		'name' => esc_html__( 'Right Sidebar for Portfolio', 'fixology' ),
		'id' => 'sidebar-right-portfolio',
		'description' => esc_html__( 'This is right sidebar for Portfolio', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	// Portfolio Category - Left
	register_sidebar( array(
		'name' => esc_html__( 'Left Sidebar for Portfolio Category', 'fixology' ),
		'id' => 'sidebar-left-portfoliocat',
		'description' => esc_html__( 'This is left sidebar for Portfolio Category pages.', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	// Portfolio Category - Right
	register_sidebar( array(
		'name' => esc_html__( 'Right Sidebar for Portfolio Category', 'fixology' ),
		'id' => 'sidebar-right-portfoliocat',
		'description' => esc_html__( 'This is right sidebar for Portfolio Category pages.', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	// Team Member - Left
	register_sidebar( array(
		'name' => esc_html__( 'Left Sidebar for Team Member', 'fixology' ),
		'id' => 'sidebar-left-team-member',
		'description' => esc_html__( 'This is left sidebar for Team Member', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	// Team Member - Right
	register_sidebar( array(
		'name' => esc_html__( 'Right Sidebar for Team Member', 'fixology' ),
		'id' => 'sidebar-right-team-member',
		'description' => esc_html__( 'This is right sidebar for Team Member', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	// Team Member Group - Left
	register_sidebar( array(
		'name' => esc_html__( 'Left Sidebar for Team Member Group pages', 'fixology' ),
		'id' => 'sidebar-left-team-member-group',
		'description' => esc_html__( 'This is left sidebar for Team Member Group.', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	// Team Member Group - Right
	register_sidebar( array(
		'name' => esc_html__( 'Right Sidebar for Team Member Group pages', 'fixology' ),
		'id' => 'sidebar-right-team-member-group',
		'description' => esc_html__( 'This is right sidebar for Team Member Group', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Left Sidebar for Search', 'fixology' ),
		'id' => 'sidebar-left-search',
		'description' => esc_html__( 'This is left sidebar for search', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Right Sidebar for search', 'fixology' ),
		'id' => 'sidebar-right-search',
		'description' => esc_html__( 'This is right sidebar for search', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	if( function_exists('is_woocommerce') ){
		// WooCommerce - Left
		register_sidebar( array(
			'name' => esc_html__( 'Left Sidebar for WooCommerce Shop', 'fixology' ),
			'id' => 'sidebar-left-woocommerce',
			'description' => esc_html__( 'This is left sidebar for WooCommerce shop pages.', 'fixology' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		// WooCommerce - Right
		register_sidebar( array(
			'name' => esc_html__( 'Right Sidebar for WooCommerce Shop', 'fixology' ),
			'id' => 'sidebar-right-woocommerce',
			'description' => esc_html__( 'This is right sidebar for WooCommerce shop pages.', 'fixology' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	}
	
	if( function_exists('is_bbpress') ){
		// BBPress - Left
		register_sidebar( array(
			'name'          => esc_html__( 'Left Sidebar for BBPress', 'fixology' ),
			'id'            => 'sidebar-left-bbpress',
			'description'   => esc_html__( 'This is left sidebar for BBPress.', 'fixology' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
		// BBPress - Right
		register_sidebar( array(
			'name'          => esc_html__( 'Right Sidebar for BBPress', 'fixology' ),
			'id'            => 'sidebar-right-bbpress',
			'description'   => esc_html__( 'This is right sidebar for BBPress.', 'fixology' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	
	if( function_exists('tribe_is_upcoming') ){
		// The Events Calendar - Left
		register_sidebar( array(
			'name'          => esc_html__( 'Left Sidebar for Events', 'fixology' ),
			'id'            => 'sidebar-left-events',
			'description'   => esc_html__( 'This is left sidebar for "The Events Calendar" plugin only.', 'fixology' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
		// The Events Calendar - Right
		register_sidebar( array(
			'name'          => esc_html__( 'Right Sidebar for Events', 'fixology' ),
			'id'            => 'sidebar-right-events',
			'description'   => esc_html__( 'This is right sidebar for "The Events Calendar" plugin only.', 'fixology' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	
	register_sidebar( array(
		'name'          => esc_html__( 'Floatingbar Widget - Top', 'fixology' ),
		'id'            => 'floating-widgets-top',
		'description'   => esc_html__( 'This widget will appear (as full width) before the widget columns. So you can set any full width content here.', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Floatingbar Widget - 1st column', 'fixology' ),
		'id'            => 'floating-widgets-1',
		'description'   => esc_html__( 'Set 1st column widgets for Floatingbar area.', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Floatingbar Widget - 2nd column', 'fixology' ),
		'id'            => 'floating-widgets-2',
		'description'   => esc_html__( 'Set 2nd column widgets for Floatingbar area.', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Floatingbar Widget - 3rd column', 'fixology' ),
		'id'            => 'floating-widgets-3',
		'description'   => esc_html__( 'Set 3rd column widgets for Floatingbar area.', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Floatingbar Widget - 4th column', 'fixology' ),
		'id'            => 'floating-widgets-4',
		'description'   => esc_html__( 'Set 4th column widgets for Floatingbar area.', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Floatingbar Widget - Bottom', 'fixology' ),
		'id'            => 'floating-widgets-bottom',
		'description'   => esc_html__( 'This widget will appear (as full width) after the widget columns. So you can set any full width content here.', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	
	
	
	
	
	// First Footer widgets
	register_sidebar( array(
		'name' => esc_html__( 'First Footer - 1st Widget Area', 'fixology' ),
		'id' => 'first-footer-1-widget-area',
		'description' => esc_html__( 'This is first footer widget area for first row of footer.', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'First Footer - 2nd Widget Area', 'fixology' ),
		'id' => 'first-footer-2-widget-area',
		'description' => esc_html__( 'This is second footer widget area for first row of footer.', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'First Footer - 3rd Widget Area', 'fixology' ),
		'id' => 'first-footer-3-widget-area',
		'description' => esc_html__( 'This is third footer widget area for first row of footer.', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'First Footer - 4th Widget Area', 'fixology' ),
		'id' => 'first-footer-4-widget-area',
		'description' => esc_html__( 'This is fourth footer widget area for first row of footer.', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	// Second Footer widgets
	register_sidebar( array(
		'name' => esc_html__( 'Second Footer - 1st Widget Area', 'fixology' ),
		'id' => 'second-footer-1-widget-area',
		'description' => esc_html__( 'This is first footer widget area for second row of footer.', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Second Footer - 2nd Widget Area', 'fixology' ),
		'id' => 'second-footer-2-widget-area',
		'description' => esc_html__( 'This is second footer widget area for second row of footer.', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Second Footer - 3rd Widget Area', 'fixology' ),
		'id' => 'second-footer-3-widget-area',
		'description' => esc_html__( 'This is third footer widget area for second row of footer.', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Second Footer - 4th Widget Area', 'fixology' ),
		'id' => 'second-footer-4-widget-area',
		'description' => esc_html__( 'This is fourth footer widget area for second row of footer.', 'fixology' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	
	
	// Dynamic Sidebars (Unlimited Sidebars)
	global $fixology_theme_options;
	$fixology_theme_options = get_option('fixology_theme_options');
	if( isset($fixology_theme_options['custom_sidebars']) && is_array($fixology_theme_options['custom_sidebars']) && count($fixology_theme_options['custom_sidebars'])>0 ){
		foreach( $fixology_theme_options['custom_sidebars'] as $custom_sidebar ){
			
			if( isset($custom_sidebar['custom_sidebar']) && trim($custom_sidebar['custom_sidebar'])!='' ){
				$custom_sidebar = $custom_sidebar['custom_sidebar'];
				if( trim($custom_sidebar)!='' ){
					$custom_sidebar_key = sanitize_title($custom_sidebar);
					register_sidebar( array(
						'name'          => $custom_sidebar,
						'id'            => $custom_sidebar_key,
						'description'   => esc_html__( 'This is custom widget developed from "Fixology Options".', 'fixology' ),
						'before_widget' => '<aside id="%1$s" class="widget %2$s">',
						'after_widget'  => '</aside>',
						'before_title'  => '<h3 class="widget-title">',
						'after_title'   => '</h3>',
					) );
				}
			}
			
		}
	}
	
}
add_action( 'widgets_init', 'fixology_widgets_init' );
