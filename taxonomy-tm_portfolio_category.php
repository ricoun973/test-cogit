<?php
/**
 * Portfolio Category
 *
 */


// Fetching Taxonomy data so we can use it
$tax = $wp_query->get_queried_object();


get_header(); ?>

	<section id="primary" class="content-area <?php echo thememount_sanitize_html_classes(thememount_sidebar_class('content-area')); ?>">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>
		
			
			<?php
			// Taxonomy featured image set by ThemeMount
			$term_data         = get_term_meta( $tax->term_id, 'tm_taxonomy_options', true );
			$featured_img_code = '';
			if( !empty($term_data['tax_featured_image']) ){
				$featured_img_code = '<div class="tm-term-featured-img"><img src="' . $term_data['tax_featured_image'] . '" alt="' . $tax->name . '" /></div>';
			}
			echo thememount_wp_kses($featured_img_code);
			?>
			
			<?php
			// category description
			$tax_desc = '';
			if( !empty($tax->description) ){
				$tax_desc .= '<div class="tm-term-desc">';
					$tax_desc .= do_shortcode(nl2br($tax->description));
				$tax_desc .= '</div>';
			}
			echo thememount_wp_kses($tax_desc);
			?>
			

			<?php
			global $fixology_theme_options;
			$view   = ( !empty($fixology_theme_options['pfcat_view']) ) ? $fixology_theme_options['pfcat_view'] : 'overlay' ;
			$column = ( !empty($fixology_theme_options['pfcat_column']) ) ? $fixology_theme_options['pfcat_column'] : 'three' ;
			
			?>	
			
			
			
			<div class="row multi-columns-row thememount-boxes-row-wrapper">
				
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();
				?>
				
				<?php echo thememount_column_div('start', $column ); ?>
					<?php echo get_template_part( 'template-parts/portfoliobox/portfoliobox', $view ); ?>
				<?php echo thememount_column_div('end', $column ); ?>

				<?php
			// End the loop.
			endwhile;
			
			?>
			
			</div><!-- .thememount-boxes-row-wrapper -->
			
			
			<?php
			// Previous/next page navigation.
			echo thememount_pagination();
			?>

			
			<?php
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

	
<?php
// Left Sidebar
thememount_get_left_sidebar();

// Right Sidebar
thememount_get_right_sidebar();
?>
	
	
	
	
<?php get_footer(); ?>
