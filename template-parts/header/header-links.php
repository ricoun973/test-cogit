<?php
global $fixology_theme_options;
$header_search = ( !isset($fixology_theme_options['header_search']) ) ? '1' : esc_attr($fixology_theme_options['header_search']);

?>
	
<div class="header-controls">
	<?php if( $header_search=='1'): ?>
	<div class="search_box"> <a href="#"><span class="ti-search"></span></a> </div>
	<?php endif; ?>
	<?php
	$wc_header_icon = ( isset($fixology_theme_options['wc-header-icon']) && trim($fixology_theme_options['wc-header-icon'])!='' ) ? esc_attr($fixology_theme_options['wc-header-icon']) : '1' ;
	if( function_exists('is_woocommerce') && $wc_header_icon=='1' ){
	global $woocommerce;
	?>
	<div class="thememount-header-cart-link-wrapper"> <a href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>" class="thememount-header-cart-link"><span class="ti-bag"></span> <span class="thememount-cart-qty"> <span class="cart-contents"></span></span> </a> </div>
	<?php } ?>
</div>