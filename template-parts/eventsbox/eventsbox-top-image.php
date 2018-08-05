<article class="thememount-box thememount-box-events thememount-box-view-top-image thememount-events-box-view-top-image">
	<div class="thememount-post-item">
		<div class="thememount-post-item-inner">
			<?php echo thememount_wp_kses( thememount_event_price() ); ?>
			<?php echo thememount_get_featured_media( get_the_ID(), 'full', true ); ?>
		</div>
		
		<div class="thememount-box-bottom-content">
			<div class="thememount-box-title"><?php echo thememount_box_title(); ?></div>
		</div>
	</div>
</article>