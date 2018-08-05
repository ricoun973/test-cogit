<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Fixology
 * @since Fixology 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( thememount_sanitize_html_classes(thememount_postlayout_class()) ); ?> >
	
	
	<div class="tm-featured-outer-wrapper tm-post-featured-outer-wrapper">
		<?php echo thememount_get_featured_media(); // Featured content ?>
	</div>
	<div class="tm_classicpost_meta">
	<?php
		echo thememount_get_post_format_icon();
	?>
	</div>
	<?php
	 if( 'quote' != get_post_format() && 'link' != get_post_format() ) : ?>
		<?php echo fixology_entry_meta('blogclassic');  // blog post meta details ?>
	<?php endif; ?>


	<header class="entry-header">
		<?php if( !is_single() ) : ?>
			<?php if( 'aside' != get_post_format() && 'quote' != get_post_format() && 'link' != get_post_format() ) : ?>
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<?php endif; ?>
		<?php endif; ?>
	</header><!-- .entry-header -->
	
	
	<?php if( 'quote' != get_post_format() ) : ?>
		<div class="entry-content">
			
			<?php if( !is_single() ) : ?>
				<div class="thememount-box-desc-text"><?php echo thememount_blogbox_description(); ?></div>
			<?php endif; ?>
		
			<?php

			the_content( sprintf(
				esc_html__( 'Read More %s', 'fixology' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			?>

				<div class="thememount-blogbox-footer-readmore">
					<?php echo thememount_blogbox_readmore(); ?>
				</div>	
	<?php
			// pagination if any
			wp_link_pages( array(
				'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'fixology' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
			?>
		</div><!-- .entry-content -->
	<?php endif; ?>
	<?php
		echo thememount_social_share_box('post');
	?>
	
	<?php
	// Author bio.
	if ( is_single() && get_the_author_meta( 'description' ) ) :
		get_template_part( 'template-parts/author-bio', 'customized' );
	endif;
	?>

	
	<?php
	// Edit link
	if( is_singular() ){
		edit_post_link( esc_html__( 'Edit', 'fixology' ), '<div class="edit-link-wrapper clearfix"> <span class="edit-link">', '</span></div>' );
	}
	?>

</article><!-- #post-## -->
