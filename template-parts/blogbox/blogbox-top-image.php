<article class="thememount-box thememount-box-blog thememount-blogbox-format-<?php echo get_post_format() ?> <?php echo thememount_sanitize_html_classes(thememount_post_class()); ?>">
	<div class="post-item">
		<?php // You can use like this too - thememount_featured_media(); ?>
		<div class="tm-featured-outer-wrapper tm-post-featured-outer-wrapper">
			<?php echo thememount_get_post_format_icon(); ?>
			<?php echo thememount_get_featured_media( '', 'thememount-img-blog' ); // Featured content ?>
			<div class="thememount-box-post-date"><?php echo fixology_posttime_meta(); ?></div>
		</div>
		<div class="thememount-box-content">		
			<?php echo thememount_box_title(); ?>
			<?php echo fixology_entry_meta(); ?>
			<div class="thememount-box-desc">
				<div class="thememount-box-desc-text"><?php echo thememount_blogbox_description(); ?></div>
				<div class="thememount-box-desc-footer">
					<?php // You can use like this too - thememount_blogbox_footer(); ?>
					<div class="thememount-blogbox-desc-footer">
						<?php echo thememount_blogbox_readmore(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>
