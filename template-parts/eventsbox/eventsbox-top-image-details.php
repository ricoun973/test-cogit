<article class="thememount-box thememount-box-events thememount-box-view-top-image-details thememount-events-box-view-top-image-details">
	<div class="thememount-post-item">
		<div class="thememount-post-item-inner">
			<?php // You can use like this too - thememount_featured_image(); ?>
			<?php echo thememount_wp_kses( thememount_event_price() ); ?>
			<?php echo thememount_get_featured_media( get_the_ID(), 'full', true ); ?>
		</div>
		
		<div class="thememount-box-bottom-content">
			<div class="thememount-box-title"><?php echo thememount_box_title(); ?></div>
			<div class="thememount-box-meta thememount-events-meta"><?php echo thememount_wp_kses( thememount_event_meta() ); ?></div>
			<div class="thememount-box-desc"><?php echo thememount_event_description(); ?></div>
		</div>
	</div>
</article>