<?php

add_action( 'widgets_init', 'fixology_category_list_widget' );
function fixology_category_list_widget() {
	register_widget( 'fixology_category_list_widget' );
}


class fixology_category_list_widget extends WP_Widget {


	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_style = array('classname'   => 'fixology_category_list_widget',
							  'description' => esc_html__('Show Category List of current Taxonomy.', 'fixology') );
		parent::__construct(
			'fixology_category_list_widget', // Base ID
			esc_html__('Fixology Category/Group List Widget', 'fixology'), // Name
			$widget_style // Args
		);
	}

	
	
	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $cur_instance ) {
		extract( $args );
		$title   = apply_filters( 'widget_title', $cur_instance['title'] );
		?>
		
		<?php echo thememount_wp_kses( $before_widget ); ?>
		
		<?php
		if ( !empty($title) ){
			$category_list_widget_title = $before_title . $title . $after_title;
			echo thememount_wp_kses( $category_list_widget_title );
		}
		?>
		
		<?php
		// prepares and shows all tax list
		echo thememount_wp_kses( thememount_show_taxonomy_list() );
		?>
		
		
		<?php echo thememount_wp_kses( $after_widget ); ?>
		
		
	<?php
	}
	
	
	
	
	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	function update( $new_instance, $org_instance ) {
		$cur_instance = $org_instance;
		$cur_instance['title']   = strip_tags( $new_instance['title'] );
		return $cur_instance;
	}

	
	
	
	
	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	function form( $cur_instance ) {
		$defaults = array( 'title'   => 'Categories' );
		
		$cur_instance = wp_parse_args( (array) $cur_instance, $defaults ); ?>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e('Title', 'fixology'); ?>:</label>
			<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" value="<?php echo esc_attr($cur_instance['title']); ?>" />
		</p>
		
		<?php
	}
}



/**
 *  Category list maker
 */
if( !function_exists('thememount_show_taxonomy_list') ){
function thememount_show_taxonomy_list(){
	$return = '';
	$supported_post_type       = array( 'post', 'tm_portfolio', 'tm_team_member',  );
	$supported_taxonomy        = array( 'category', 'tm_team_group', 'tm_portfolio_category' );
	$supported_post_type_group = array( 'post' => 'category', 'tm_portfolio' => 'tm_portfolio_category', 'tm_team_member' => 'tm_team_group'  );
	
	$class = '';
	
	// If on taxonomy
	if( is_tax($supported_taxonomy) ){
		global $wp_query;
		$tax    = $wp_query->get_queried_object();
		$return = wp_list_categories( array( 'taxonomy' => $tax->taxonomy, 'hide_empty' => 0, 'title_li' => '', 'use_desc_for_title' => 0, 'echo' => false ) );
		$class = ' tm-taxlist-tax tm-taxlist-tax-' . $tax->taxonomy;
	}
	
	// If on single view
	if( is_singular( $supported_post_type ) ){
		$tax    = $supported_post_type_group[get_post_type()];
		$return = wp_list_categories( array( 'taxonomy' => $tax, 'hide_empty' => 0, 'title_li' => '', 'use_desc_for_title' => 0, 'echo' => false ) );
		$class = ' tm-taxlist-single tm-taxlist-single-' . get_post_type();
	}
	
	// Final data
	if( !empty($return) ){
		$return = '<div class="tm-taxonomy-term-list' . $class . '"><ul>' . $return . '</ul></div>';
	}
	
	return $return;
	
}
}
