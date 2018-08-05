<?php
$titlebar_content = thememount_titlebar_content();
if( thememount_titlebar_show() ) : ?>

	<?php if( !empty($titlebar_content) ){ ?>
	
		<div class="tm-titlebar-wrapper tm-bg <?php echo thememount_sanitize_html_classes(thememount_titlebar_classes()); ?>">
			<div class="tm-titlebar-wrapper-bg-layer tm-bg-layer"></div>
			<div class="tm-titlebar entry-header">
				<div class="tm-titlebar-inner-wrapper">
					<div class="tm-titlebar-main">
						<div class="container">
							<div class="tm-titlebar-main-inner">
								<?php echo thememount_wp_kses( $titlebar_content, 'titlebar' ); ?>
							</div>
						</div>
					</div><!-- .tm-titlebar-main -->
				</div><!-- .tm-titlebar-inner-wrapper -->
			</div><!-- .tm-titlebar -->
		</div><!-- .tm-titlebar-wrapper -->
		
	<?php } else { ?>
	
		<hr class="tm-titlebar-border" />
	
	<?php } ?>

<?php endif; ?>







