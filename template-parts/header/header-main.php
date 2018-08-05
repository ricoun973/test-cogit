<div id="tm-stickable-header-w" class="tm-stickable-header-w tm-bgcolor-<?php echo thememount_get_option('header_bg_color'); ?>" style="height:<?php echo thememount_get_option('header_height'); ?>px">
	<div id="site-header" class="site-header <?php echo thememount_sanitize_html_classes(thememount_header_class()); ?> <?php echo thememount_sanitize_html_classes(thememount_sticky_header_class()); ?>">

	
		<div class="site-header-main tm-wrap <?php echo thememount_sanitize_html_classes(thememount_header_container_class()); ?>">
		


			<div class="site-branding tm-wrap-cell">
				<?php echo thememount_wp_kses( thememount_site_logo() ); ?>
			</div><!-- .site-branding -->

			<div id="site-header-menu" class="site-header-menu tm-wrap-cell">
				<nav id="site-navigation" class="main-navigation" aria-label="Primary Menu" data-sticky-height="<?php echo esc_attr(thememount_get_option('header_height_sticky')); ?>">
					<?php echo thememount_wp_kses( thememount_header_links(), 'header_links' ); ?>
					<?php thememount_header_text(); ?>
					<?php get_template_part('template-parts/header/header','menu'); ?>
				</nav><!-- .main-navigation -->
			</div><!-- .site-header-menu -->
			
			<?php thememount_one_page_site_js(); ?>
			
		</div><!-- .site-header-main -->
	</div>
</div>


