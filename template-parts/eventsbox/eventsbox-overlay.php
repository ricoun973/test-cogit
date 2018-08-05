<article class="thememount-box thememount-box-events thememount-box-view-overlay thememount-events-box-view-overlay">
	<div class="thememount-post-item">
		<?php echo thememount_featured_image(); ?>
		<div class="thememount-box-content thememount-overlay">
            <div class="thememount-icon-box"><a href="<?php the_permalink(); ?>"><i class="tm-fixology-icon-link"></i></a></div>
            <div class="thememount-box-content-inner">
                <div class="thememount-box-title"><?php echo thememount_box_title(); ?></div>
                <div class="thememount-box-category"><?php echo thememount_events_category(true); ?></div>
            </div>
		</div>
	</div>
</article>