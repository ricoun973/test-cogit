<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Fixology
 * @since Fixology 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area <?php echo thememount_sanitize_html_classes(thememount_sidebar_class('content-area')); ?>">
		<main id="main" class="site-main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			if(thememount_get_option('blog_view') == 'classic') {
				get_template_part('template-parts/content-classic-post','classic');
			}
			else if(thememount_get_option('blog_view') == 'classic-style2') {
				get_template_part('template-parts/content-classicstyle2-post','classic-style2');
			}
			else if(thememount_get_option('blog_view') == 'classic-style3') {
				get_template_part('template-parts/content-classicstyle3-post','classic-style3');
			}
			else {
				get_template_part( 'template-parts/content-post', get_post_format() );
			}

			$prev_post = get_previous_post();  // Prev post
			$next_post = get_next_post();  // Next post
			if( !empty($prev_post) || !empty($next_post) ){
				?>
				<div class="tm-post-prev-next-buttons">
					<?php
					if( !empty( $prev_post ) && shortcode_exists('tm-btn') ){
						echo do_shortcode('[tm-btn title="' . esc_html__('PREVIOUS', 'fixology') . '" style="outline" shape="square" color="black" size="sm" i_align="left" i_icon_themify="themifyicon ti-arrow-left" add_icon="true" link="url:' . urlencode(esc_url( get_permalink( $prev_post->ID ) )) . '|title:' . rawurlencode($prev_post->post_title) . '||" el_class="tm-left-align-btn"]');
					};
					// Next post
					if ( !empty($next_post) && shortcode_exists('tm-btn') ){
						echo do_shortcode('[tm-btn title="' . esc_html__('NEXT', 'fixology') . '" style="outline" shape="square" color="black" size="sm" i_align="right" i_icon_themify="themifyicon ti-arrow-right" add_icon="true" link="url:' . urlencode(esc_url( get_permalink( $next_post->ID ) )) . '|title:' . rawurlencode($next_post->post_title) . '||" el_class="tm-right-align-btn"]');
					};
					?>
				</div>
				<?php
			}
			
			
			
			
			
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

	
<?php
// Left Sidebar
thememount_get_left_sidebar();

// Right Sidebar
thememount_get_right_sidebar();
?>
	
<?php get_footer(); ?>
