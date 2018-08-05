<article class="thememount-box thememount-box-team thememount-box-view-overlay thememount-team-box-view-overlay">
	<div class="thememount-post-item">
		<?php echo thememount_wp_kses(thememount_featured_image('thememount-img-team-member')); ?>
		<div class="tm_overlay_hoverbox">
		<div class="thememount-box-content">
			<div class="thememount-box-desc thememount-overlay">
				<div class="thememount-box-title"><?php echo thememount_box_title(); ?></div>
				<div class="thememount-box-footer"><?php echo thememount_get_meta( 'thememount_team_member_details', 'tm_team_info' , 'team_details_line_position' ); ?></div>
			</div>
			<div class="thememount-box-social-links">
				<?php echo thememount_box_team_social_links(); ?>
			</div>		
		</div>
		</div>
	</div>
</article>