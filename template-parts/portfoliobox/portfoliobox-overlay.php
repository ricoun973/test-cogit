<article class="thememount-box thememount-box-portfolio thememount-box-view-overlay thememount-portfolio-box-view-overlay <?php echo thememount_portfoliobox_class(); ?>">
	<div class="thememount-post-item">
		<?php echo thememount_featured_image('thememount-img-portfolio'); ?>
		<div class="thememount-box-content thememount-overlay">
            <div class="thememount-box-content-inner">
			  <div class="thememount-icon-box"><a href="<?php the_permalink(); ?>"><i class="tm-fixology-icon-link"></i></a></div>
                <?php echo thememount_box_title(); ?>
                <div class="thememount-box-category"><?php echo thememount_portfolio_category(true); ?></div>
            </div>
			<?php echo thememount_portfoliobox_likes(); ?>
		</div>
	</div>
</article>