<article <?php post_class( 'thememount-box post thememount-box-blog-classic thememount-blogbox-format-'.get_post_format().' '.thememount_sanitize_html_classes(thememount_post_class()) ); ?> >
	<div class="tm-featured-outer-wrapper tm-post-featured-outer-wrapper">
		<?php echo thememount_get_featured_media(); // Featured content ?>
	</div>
	
	<div class="tm_classicpost_meta">
		<?php echo thememount_get_post_format_icon(); ?>
	</div>
	
		<div class="entry-content">	
			<?php if( 'quote' != get_post_format() ) : ?>
			<div class="tm-post-entry-header">
				<div class="thememount-post-left">
					<?php thememount_entry_date(); ?>
				</div>
				<div class="thememount-post-right">
				<?php echo fixology_entry_meta('blogclassic');  // blog post meta details ?>
					<header class="entry-header">
						<?php if( !is_single() ) : ?>
							<?php if( 'quote' != get_post_format() && 'link' != get_post_format() ) : ?>
								<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
							<?php endif; ?>
						<?php endif; ?>
							<?php if( 'quote' != get_post_format() && 'link' != get_post_format() ) : ?>		
						<?php endif; ?>
					</header><!-- .entry-header -->			
				</div>
			</div>
			<?php endif; ?>
		
		<?php if( 'quote' != get_post_format() ) : ?>
			<div class="thememount-box-desc-text">
				<?php //the_content( '' ); ?>
				<?php echo thememount_blog_description(); ?>
			</div>
			
			<?php echo thememount_social_share_box('post'); ?>
			<?php echo thememount_blogbox_readmore(); ?>
			
			<?php
			// pagination if any
			wp_link_pages( array(
				'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'fixology' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
			?>
			
		<?php endif; ?>
	</div><!-- .entry-content -->
</article>