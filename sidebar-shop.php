<?php
/**
 * The sidebar containing the sidebar 2.
 *
 */

global $fixology_theme_options;
if( !empty($fixology_theme_options['sidebar_woocommerce']) && trim($fixology_theme_options['sidebar_woocommerce'])!='no'  ){

	global $wp_registered_sidebars;

	$sidebar_woocommerce = 'right';
	if( !empty($fixology_theme_options['sidebar_woocommerce']) ){
		$sidebar_woocommerce = esc_attr($fixology_theme_options['sidebar_woocommerce']);
	}

	
	?>

	<aside id="sidebar-<?php echo sanitize_html_class($sidebar_woocommerce); ?>" class="widget-area col-md-3 col-lg-3 col-xs-12 sidebar" role="complementary">
		<?php dynamic_sidebar( 'sidebar-woocommerce' ); ?>
	</aside><!-- #sidebar-right -->
		
<?php } ?>
