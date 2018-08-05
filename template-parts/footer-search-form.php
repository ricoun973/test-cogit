<?php
global $fixology_theme_options;

$search_input = ( !empty($fixology_theme_options['search_input']) ) ? esc_attr($fixology_theme_options['search_input']) :  esc_attr_x("WRITE SEARCH WORD...", 'Search placeholder word', 'fixology');


if( !empty( $fixology_theme_options['header_search'] ) && $fixology_theme_options['header_search'] == true ){

?>

<div class="tm-search-overlay">
<div class="tm-search-outer">
	<form method="get" class="tm-site-searchform" action="<?php echo esc_url( home_url() ); ?>">
		<input type="search" class="field searchform-s" name="s" placeholder="<?php echo esc_attr($search_input); ?>" />
		<button type="submit"><span class="tm-fixology-icon-search"></span></button>
	</form>
</div>
</div>
<?php } ?>