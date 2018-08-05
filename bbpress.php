<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Fixology
 * @since Fixology 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area <?php echo thememount_sanitize_html_classes(thememount_sidebar_class('content-area')); ?>">
		<main id="main" class="site-main">
		

		
		
		<?php if ( have_posts() ) : ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'post' );

			// End the loop.
			endwhile;

			
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		
		
		
		
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
