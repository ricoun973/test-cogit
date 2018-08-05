<?php if( thememount_topbar_show() ) : ?>

<div class="thememount-topbar-wrapper <?php echo thememount_sanitize_html_classes(thememount_topbar_classes()); ?>">
	<div class="thememount-topbar-inner">
		<div class="<?php echo thememount_sanitize_html_classes(thememount_topbar_container_class()); ?>">
			<?php echo thememount_wp_kses( thememount_topbar_content(), 'topbar' ); ?>
		</div>
	</div>
</div>

<?php endif; ?>
