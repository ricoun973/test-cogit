<div id="site-header" class="site-header <?php echo thememount_sanitize_html_classes(thememount_header_class()); ?>">

	<div class="site-header-main tm-wrap">

	
		<div class="tm-header-top-wrapper <?php echo thememount_sanitize_html_classes(thememount_header_container_class()); ?>">
		
			<div class="site-branding">
				<?php echo thememount_site_logo(); ?>
			</div><!-- .site-branding -->
			
			<!-- Header Widgets -->
			<div class="tm-header-widgets-wrapper <?php echo thememount_sanitize_html_classes(thememount_header_widget_text_color_class()); ?>">
				<?php //dynamic_sidebar( 'infostack-header-widget-area' ); ?>
				<?php thememount_infostack_header_content(); ?>
			</div>
			<div class="clearfix"></div>
		
		</div><!-- .tm-header-top-wrapper -->
		
		
		<div id="tm-stickable-header-w" class="tm-stickable-header-w tm-bgcolor-<?php echo thememount_get_option('header_bg_color'); ?>" style="height:<?php echo thememount_header_menuarea_height(); ?>px">
			<div id="site-header-menu" class="site-header-menu <?php echo thememount_sanitize_html_classes(thememount_header_menu_class()); ?> <?php echo sanitize_html_class(thememount_sticky_header_class()); ?>">
                <div class="<?php echo thememount_sanitize_html_classes(thememount_header_container_class()); ?>">
                      <nav id="site-navigation" class="main-navigation" aria-label="Primary Menu" data-sticky-height="<?php echo esc_attr(thememount_get_option('header_height_sticky')); ?>">
                        <?php echo thememount_wp_kses( thememount_header_links(), 'header_links' ); ?>
                        <?php get_template_part('template-parts/header/header','menu'); ?>
                      </nav><!-- .main-navigation -->
                </div>
<?php // You can use like this too - thememount_fbar_btn(); ?>
				
			</div><!-- .site-header-menu -->
		</div>
		
		
		<?php thememount_one_page_site_js(); ?>
		
		
	</div><!-- .site-header-main -->
</div>


