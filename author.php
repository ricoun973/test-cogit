<?php
/**
 * The template for displaying Author pages
 *
 * Used to display author pages for posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Fixology
 * @since Fixology 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area <?php echo thememount_sanitize_html_classes(thememount_sidebar_class('content-area')); ?>">
		<main id="main" class="site-main">
		
		<?php
			// Author bio.
			if ( get_the_author_meta( 'description' ) ) :
				echo get_template_part( 'template-parts/author-bio', 'customized' );
			endif;
		?>
	
	
		<?php if( thememount_get_option('blog_view') == 'box' ) : ?>
			<div class="row multi-column-row">
		<?php endif; ?>
		

		<?php if ( have_posts() ) : ?>

			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				if( thememount_get_option('blog_view') == 'box' ){
					echo thememount_column_div('start', thememount_get_option('blogbox_column') );
					echo get_template_part('template-parts/blogbox/blogbox', thememount_get_option('blogbox_view') );
					echo thememount_column_div('end', thememount_get_option('blogbox_column') );
				}
				else if(thememount_get_option('blog_view') == 'classic') {
					echo get_template_part('template-parts/blogbox/blogbox','classic');
				}
				else if(thememount_get_option('blog_view') == 'classic-style2') {
					echo get_template_part('template-parts/blogbox/blogbox','classic-style2');
				}
				else if(thememount_get_option('blog_view') == 'classic-style3') {
					echo get_template_part('template-parts/blogbox/blogbox','classic-style3');
				}
				else {
					get_template_part( 'template-parts/content', 'post' );
				}

			// End the loop.
			endwhile;


		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		
		
		<?php if( thememount_get_option('blog_view') == 'box' ) : ?>
			</div><!-- .row -->
		<?php endif; ?>
		
		
		<?php
		// Previous/next page navigation.
		echo thememount_pagination();
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
