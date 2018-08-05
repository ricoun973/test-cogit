<?php
/*
 *
 *  Single Portfolio - Top image
 *
 */

?>

<div class="tm-pf-single-content-wrapper tm-pf-view-top-image">

	<div class="tm-social-top-wrapper">
		<?php echo thememount_social_share_box('portfolio'); /* Social share */ ?>
	</div>
	<div class="tm-pf-single-np-nav"><?php echo thememount_portfolio_next_prev_btn(); /* Next/Prev button */ ?></div>
	<?php echo thememount_get_featured_media(); ?>
	
	<div class="row">
		<div class="thememount-pf-single-content-area col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php echo thememount_portfolio_description(); ?>
		</div><!-- .thememount-pf-single-content-area -->
		

	</div>
	<?php echo thememount_portfolio_related(); ?>
</div>


<?php edit_post_link( esc_html__( 'Edit', 'fixology' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>