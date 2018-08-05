<?php
// Check if floating bar is enabled
if( thememount_fbar_show()==true ): ?>
	
	<div class="thememount-fbar-main-w thememount-fbar-position-<?php echo sanitize_html_class( thememount_get_option('fbar-position') ); ?>">
	
		<div class="thememount-fbar-inner-w">
			
			<div class="thememount-fbar-box-w <?php echo thememount_sanitize_html_classes( thememount_fbar_classes() ); ?>">
				<div class="tm-fbar-bg-layer tm-bg-layer"></div>
				<div class="thememount-fbar-content-wrapper <?php echo thememount_sanitize_html_classes( thememount_floatingbar_container_class() ); ?>">
					<div class="thememount-fbar-box-w-bgcolor">
						<div class="thememount-fbar-box">
							<?php get_sidebar( 'floatingbar-top' ); ?>
							<?php get_sidebar( 'floatingbar' ); ?>
							<?php get_sidebar( 'floatingbar-bottom' ); ?>
						</div>
					</div>
					<span class="tm-fbar-close"><?php echo thememount_fbar_close_icon_for_content_area(); ?></span>
				</div>
			</div>
		
		</div><!-- .thememount-fbar-inner-w -->
		
		<div class="tm-float-overlay"></div>
		
	</div><!-- .thememount-fbar-main-w -->
	
<?php endif; ?>