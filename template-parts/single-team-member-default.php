<?php
/*
 *
 *  Single Team member - Default
 *
 */

?>
<div class="tm-team-member-single-content-wrapper tm-team-member-view-default">
	<div class="tm-team-member-single-content row">
		<div class="thememount-team-member-single-featured-area col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<div class="thememount-team-img">
				<?php echo thememount_get_featured_media(); ?>						    
			</div>
		</div><!-- .thememount-team-member-single-featured-area -->
		
		<div class="thememount-team-member-single-content-area col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<div class="tm-team-member-single-list row">				
				<div class="tm-team-member-single-title-wrapper col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2 class="tm-team-member-single-title"><?php the_title(); ?></h2>
					<?php echo thememount_wp_kses( thememount_team_member_single_meta( 'position' ) ); ?>
					<?php echo thememount_wp_kses( thememount_box_team_social_links(), 'box_team_social_links' ); ?>	
					<div class="tm-team-member-single-excerpt">
						<?php echo thememount_wp_kses( thememount_team_member_single_excerpt() ); ?>
					</div>
					
					<div class="tm-team-data row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<?php echo thememount_wp_kses( thememount_team_member_meta_details() ); ?>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">					
							<?php echo thememount_team_member_extra_details(); ?>
						</div>
					</div>					
				</div>			
			</div><!-- .tm-team-member-single-list.row -->	
		</div><!-- .thememount-team-member-single-content-area -->		
	</div>
	<div class="tm-team-member-single-content-wrapper">
		<?php echo thememount_team_member_content(); ?>
	</div>
</div>

<?php edit_post_link( esc_html__( 'Edit', 'fixology' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>