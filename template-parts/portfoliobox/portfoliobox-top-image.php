<article class="thememount-box thememount-box-portfolio thememount-box-view-top-image thememount-portfolio-box-view-top-image <?php echo thememount_portfoliobox_class(); ?>">
	<div class="thememount-post-item">
		
		<div class="thememount-post-item-inner">
			<?php echo thememount_get_featured_media( get_the_ID(), 'thememount-img-portfolio', true ); ?>
			<div class="thememount-box-content thememount-overlay">
				<div class="thememount-icon-box thememount-single-link"><a href="<?php the_permalink(); ?>"><i class="tm-fixology-icon-plus-1"></i></a></div>
				<?php echo thememount_portfoliobox_likes(); ?>
			</div>
		</div>
		
		<div class="thememount-box-bottom-content">			
			<div class="thememount-box-title"><?php echo thememount_box_title(); ?></div>
			<div class="thememount-box-category"><?php echo thememount_portfolio_category(true); ?></div>
		</div>
	</div>
</article>