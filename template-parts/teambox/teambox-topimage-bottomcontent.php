<article class="thememount-box thememount-box-team thememount-box-view-topimage-bottomcontent">
		<div class="thememount-post-item">
				<?php echo thememount_wp_kses(thememount_featured_image('thememount-img-team-member')); ?>
            <div class="thememount-overlay">
				<a href="<?php the_permalink(); ?>"><i class="tm-fixology-icon-link"></i> <span class="tm-hide"><?php the_title(); ?></span> </a>
			</div>
		</div>
		<div class="thememount-box-content">
			<div class="thememount-box-desc">
				<div class="thememount-box-title"><?php echo thememount_box_title(); ?></div>								
<?php $designation = thememount_get_meta( 'thememount_details_line_positions', 'tm_team_info' , 'team_details_line_position' ); ?>
				<div class="thememount-box-footer"><?php echo thememount_get_meta( 'thememount_team_member_details', 'tm_team_info' , 'team_details_line_position' ); ?></div>
                <div class="thememount-box-social-links"><?php echo thememount_box_team_social_links(); ?></div>					
			</div>
		</div>
</article>
