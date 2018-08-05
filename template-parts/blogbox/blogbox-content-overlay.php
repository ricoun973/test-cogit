<article class="thememount-box thememount-box-blog thememount-blogbox-format-<?php echo get_post_format() ?> <?php echo thememount_sanitize_html_classes(thememount_post_class()); ?> thememount-box-view-content-overlay thememount-blog-box-view-content-overlay">
	<div class="post-item">
		<?php // You can use like this too - thememount_featured_media(); ?>
		<div class="tm-featured-outer-wrapper tm-post-featured-outer-wrapper">
			
			<?php echo thememount_get_featured_media( '', 'thememount-img-blog' ); // Featured content ?>
		</div>
		<div class="thememount-box-content thememount-overlay-wrapper">
			<span class="tm-blogbox-inner-overlay"> </span>
			<div class="tm-overlay-content-inner">
				<?php echo thememount_get_post_format_icon(); ?>
				<?php echo thememount_box_title(); ?>
			</div>
			
		</div>
	</div>
</article>
