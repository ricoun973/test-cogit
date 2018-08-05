<?php
/**
 * The Template for displaying Portfolio single posts.
 *
 * Full View - No image and full-width content (without details box)
 *
 * @package WordPress
 * @subpackage Fixology
 * @since Fixology 1.0
 */

get_header();
?>


<div id="primary" class="content-area <?php echo thememount_sanitize_html_classes(thememount_sidebar_class('content-area')); ?>">
	<main id="main" class="site-main">

		<?php // Start the loop. ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/single-team-member', 'default' ); ?>
		<?php endwhile; ?>

	</main><!-- .site-main -->
</div><!-- .content-area -->


<?php
// Left Sidebar
thememount_get_left_sidebar();

// Right Sidebar
thememount_get_right_sidebar();
?>
	
<?php get_footer(); ?>
