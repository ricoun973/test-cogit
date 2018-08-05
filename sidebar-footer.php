<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Fixology
 * @since Fixology 1.0
 */
global $fixology_theme_options;


?>

<div id="bottom-footer-text" class="bottom-footer-text tm-bottom-footer-text site-info <?php echo thememount_sanitize_html_classes(thememount_footer_row_class( 'bottom' )); ?>">
	<div class="bottom-footer-bg-layer tm-bg-layer"></div>
	<div class="<?php echo thememount_sanitize_html_classes(thememount_footer_container_class()); ?>">
		<div class="bottom-footer-inner">
			<div class="row multi-columns-row">
<?php
$left_content=thememount_footer_copyright_right();
$right_content=$fixology_theme_options['footer_copyright_left'];
if(!empty($left_content)) { $left_col_class='col-sm-6'; } else { $left_col_class='col-sm-12'; }
if(!empty($right_content)) { $right_col_class='col-sm-6'; } else { $right_col_class='col-sm-12'; }
?>
				<div class="col-xs-12 <?php echo esc_attr($left_col_class); ?> <?php if(!empty($right_content)) { ?>tm-footer2-left <?php } ?>">
					<?php
					if( !empty($fixology_theme_options['footer_copyright_left']) ){
					echo do_shortcode( $fixology_theme_options['footer_copyright_left'] );
					}
					?>
				</div><!--.footer menu -->

				<div class="col-xs-12 <?php echo esc_attr($right_col_class); ?> <?php if(!empty($left_content)) { ?>tm-footer2-right <?php } ?>">
					<?php echo thememount_wp_kses( thememount_footer_copyright_right() ); ?>
				</div><!--.copyright --> 

			</div><!-- .row.multi-columns-row --> 
		</div><!-- .bottom-footer-inner --> 
	</div><!--  --> 
</div><!-- .footer-text -->