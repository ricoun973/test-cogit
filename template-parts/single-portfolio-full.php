<?php
/*
 *
 *  Single Portfolio - Top image
 *
 */

?>

<div class="tm-pf-single-content-wrapper tm-pf-view-full">

	<div class="tm-social-top-wrapper">
		<?php echo thememount_social_share_box('portfolio'); /* Social share */ ?>
	</div>
	<div class="tm-pf-single-np-nav"><?php echo thememount_portfolio_next_prev_btn(); /* Next/Prev button */ ?></div>
	<div class="thememount-pf-single-content-area">
		<?php echo thememount_portfolio_description(); ?>
	</div><!-- .thememount-pf-single-content-area -->
	<?php echo thememount_portfolio_related(); ?>
</div>


<?php edit_post_link( esc_html__( 'Edit', 'fixology' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

