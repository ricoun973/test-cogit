<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_id
 * @var $el_class
 * @var $width
 * @var $css
 * @var $offset
 * @var $content - shortcode content
 * @var $css_animation
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Column
 */
$el_class = $el_id = $width = $parallax_speed_bg = $parallax_speed_video = $parallax = $parallax_image = $video_bg = $video_bg_url = $video_bg_parallax = $css = $offset = $css_animation = '';

/**** ThemeMount custom changes START ****/
$tm_textcolor = $tm_bgcolor = $tm_col_bg_expand = '';
/**** ThemeMount custom changes END ****/

$output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

wp_enqueue_script( 'wpb_composer_front_js' );

$width = wpb_translateColumnWidthToSpan( $width );
$width = vc_column_offset_class_merge( $offset, $width );

$css_classes = array(
	$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
	'wpb_column',
	'vc_column_container',
	$width,
);

if ( vc_shortcode_custom_css_has_property( $css, array(
		'border',
		'background',
	) ) || $video_bg || $parallax
) {
	$css_classes[] = 'vc_col-has-fill';
}




/**** ThemeMount custom changes START ****/

$tm_customdiv 	= '';
$tm_class_list 	= '';
$tm_classes 	= array();
if( !empty($tm_textcolor) ){
	$tm_classes[] = 'tm-textcolor-'.$tm_textcolor;
}
if( !empty($tm_bgcolor) || thememount_check_if_bgcolor_in_css($css) ){
	$tm_classes[] = 'tm-col-bgcolor-'.$tm_bgcolor;
	$tm_classes[] = 'tm-col-bgcolor-yes';
	$tm_customdiv = '<div class="tm-col-wrapper-bg-layer tm-bg-layer"><div class="tm-bg-layer-inner"></div></div>';
}
if( strpos($css, 'url(') !== false || !empty( $parallax_image ) || ( !empty($video_bg) && !empty($video_bg_url) /* Adding for video too */ ) ) {
	$tm_classes[] = 'tm-col-bgimage-yes';
	$tm_customdiv = '<div class="tm-col-wrapper-bg-layer tm-bg-layer"><div class="tm-bg-layer-inner"></div></div>';
}

if( !empty($tm_col_bg_expand) && in_array( $tm_col_bg_expand, array('left','right') ) ){  // Left expand or Right expand
	$css_classes[] = 'tm-span tm-' . $tm_col_bg_expand . '-span';
}

$tm_class_list = implode( ' ', $tm_classes );

/**** ThemeMount custom changes End ****/




/**** ThemeMount custom changes START ****/
if( !empty($reduce_extra_padding) ){
	$css_classes[] = 'margin-15px-' . esc_attr($reduce_extra_padding) . '-colum';
}
/**** ThemeMount custom changes END ****/




$wrapper_attributes = array();

$has_video_bg = ( ! empty( $video_bg ) && ! empty( $video_bg_url ) && vc_extract_youtube_id( $video_bg_url ) );

$parallax_speed = $parallax_speed_bg;
if ( $has_video_bg ) {
	$parallax = $video_bg_parallax;
	$parallax_speed = $parallax_speed_video;
	$parallax_image = $video_bg_url;
	$css_classes[] = 'vc_video-bg-container';
	wp_enqueue_script( 'vc_youtube_iframe_api_js' );
}

if ( ! empty( $parallax ) ) {
	wp_enqueue_script( 'vc_jquery_skrollr_js' );
	$wrapper_attributes[] = 'data-vc-parallax="' . esc_attr( $parallax_speed ) . '"'; // parallax speed
	$css_classes[] = 'vc_general vc_parallax vc_parallax-' . $parallax;
	if ( false !== strpos( $parallax, 'fade' ) ) {
		$css_classes[] = 'js-vc_parallax-o-fade';
		$wrapper_attributes[] = 'data-vc-parallax-o-fade="on"';
	} elseif ( false !== strpos( $parallax, 'fixed' ) ) {
		$css_classes[] = 'js-vc_parallax-o-fixed';
	}
}

if ( ! empty( $parallax_image ) ) {
	if ( $has_video_bg ) {
		$parallax_image_src = $parallax_image;
	} else {
		$parallax_image_id = preg_replace( '/[^\d]/', '', $parallax_image );
		$parallax_image_src = wp_get_attachment_image_src( $parallax_image_id, 'full' );
		if ( ! empty( $parallax_image_src[0] ) ) {
			$parallax_image_src = $parallax_image_src[0];
		}
	}
	$wrapper_attributes[] = 'data-vc-parallax-image="' . esc_attr( $parallax_image_src ) . '"';
}
if ( ! $parallax && $has_video_bg ) {
	$wrapper_attributes[] = 'data-vc-video-bg="' . esc_attr( $video_bg_url ) . '"';
}

$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';


?>


<div <?php echo implode( ' ', $wrapper_attributes ); ?>>
	<div class="vc_column-inner <?php echo sanitize_html_class( trim( vc_shortcode_custom_css_class( $css ) ) ) . ' ' . thememount_sanitize_html_classes( $tm_class_list ); ?>">
		<?php echo trim($tm_customdiv);  // Added by ThemeMount ?>
		<div class="wpb_wrapper">
			<?php echo wpb_js_remove_wpautop( $content ); ?>
		</div>
	</div>
</div>



<?php
/* Added by ThemeMount - code start */
$customStyle = '';
if(trim($css)!= ''){
	/***********************************/
	// Inline css
	global $thememount_inline_css;
	if( empty($thememount_inline_css) ){
		$thememount_inline_css = '';
	}
	// background image layer
	$new_bgimage_element    = vc_shortcode_custom_css_class( $css, '' ). ' > .tm-col-wrapper-bg-layer';
	$newCSS   			    = str_replace( vc_shortcode_custom_css_class( $css, '' ),$new_bgimage_element,$css );
	$thememount_inline_css .= thememount_vc_get_bg_css_only( $newCSS );
	
	// background color layer
	$new_bgimage_element2   = vc_shortcode_custom_css_class( $css, '' ). ' > .tm-col-wrapper-bg-layer > .tm-bg-layer-inner';
	$newCSS2   			    = str_replace( vc_shortcode_custom_css_class( $css, '' ),$new_bgimage_element2,$css );
	$thememount_inline_css .= thememount_vc_get_bg_css_only( $newCSS2, 'nobg' );
	/************************************/
	
}
	
/* Added by ThemeMount - code end */
