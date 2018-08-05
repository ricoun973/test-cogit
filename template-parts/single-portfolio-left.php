<?php
/*
 *
 *  Single Portfolio - Left
 *
 */

?>

<div class="tm-pf-single-content-wrapper tm-pf-view-left-image">
	<div class="tm-social-top-wrapper">
		<?php echo thememount_social_share_box('portfolio'); /* Social share */ ?>
	</div>
	
	<div class="tm-pf-single-np-nav"><?php echo thememount_portfolio_next_prev_btn(); /* Next/Prev button */ ?></div>
	<div class="row">

		<div class="thememount-pf-single-featured-area col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<?php echo thememount_get_featured_media(); ?>
		</div><!-- .thememount-pf-single-featured-area -->
		
		<div class="thememount-pf-single-content-area col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<?php echo thememount_portfolio_description(); ?>
			<?php echo thememount_portfolio_detailsbox(); ?>
		</div><!-- .thememount-pf-single-content-area -->
		
	</div>
	
	<?php echo thememount_portfolio_related(); ?>
	

</div>

<?php edit_post_link( esc_html__( 'Edit', 'fixology' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>
