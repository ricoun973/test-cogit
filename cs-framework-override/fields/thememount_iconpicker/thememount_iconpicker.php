<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: ThemeMount IconPicker
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_thememount_iconpicker extends CSFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output(){
	
	
	
    echo wp_kses( $this->element_before(),
		array(
			'div' => array(
				'class' => array(),
				'id'    => array(),
			),
			'a' => array(
				'href'  => array(),
				'title' => array(),
				'class' => array()
			),
			'br'     => array(),
			'em'     => array(),
			'strong' => array(),
			'span'   => array(
				'class'  => array(),
			),
			'ol'     => array(),
			'ul'     => array(
				'class'  => array(),
			),
			'li'     => array(
				'class'  => array(),
			),
		)
	);

	// current value
    $value                     = $this->element_value();
	$value_library             = ( isset( $value['library'] ) ) ? $value['library'] : 'fontawesome';
	$value_library_fontawesome = ( isset( $value['library_fontawesome'] ) ) ? $value['library_fontawesome'] : 'fa fa-ok';

	
	// current value for icon picker only (without common class)
	$i_value_library_fontawesome = explode( ' ', $value_library_fontawesome );
	$i_value_library_fontawesome = $i_value_library_fontawesome[1];

	
	// Icon picker values
	// Temporary new list of icon libraries
	$icon_library_array = array( // all icon library list array
		'themify'        => array( esc_html__( 'Themify icons', 'fixology' ), 'ti-location-pin'),
		'linecons'       => array( esc_html__( 'Linecons', 'fixology' ),      'li_star'),
	);


	$icon_library = array();
	if( is_array(thememount_get_option('icon_library')) && count(thememount_get_option('icon_library'))>0 ){
		// if selected icon library
		foreach( thememount_get_option('icon_library') as $i_library ){
			$icon_library[$i_library] = $icon_library_array[$i_library];
		}
	}
	
	$icon_picker_html    = '';
	$icon_dropdown_array = array( esc_html__( 'Font Awesome', 'fixology' )    => 'fontawesome' );

	if( is_array($icon_library) && count($icon_library)>0 ){
	foreach( $icon_library as $library_id=>$library ){
		
		// show or hide the icon picker
		$display_this = ($value_library==$library_id) ? 'tm-show' : 'tm-hide' ;
		
		$icon_dropdown_array[$library[0]] = $library_id;
		
		// current value
		$curr_value = ( isset( $value['library_'.$library_id] ) ) ? $value['library_'.$library_id] : $library[1];
		
		// Icon active in picker
		$i_value = explode( ' ', $curr_value );
		if( !empty($i_value[1]) ){
			$i_value = $i_value[1];
		} else {
			$i_value = 'fa';
		}
		
		
		
		$icon_picker_html .= '<div class="thememount-iconpicker-wrapper tm-iconpicker-' . $library_id . ' ' . esc_html( $display_this ) . '">
				<input type="hidden" name="'. $this->element_name( '[library_'.$library_id.']' ) .'" value="'. $curr_value .'"'. $this->element_class('thememount-iconpicker-input i_icon_'.$library_id.' thememount_iconpicker_field') .'/>
				<div class="tm-ipicker-selector-w">
					<div class="tm-ipicker-selector">
						<span class="tm-ipicker-selected-icon">
							<i class="' . $curr_value . '"></i>
						</span>
						<span class="tm-ipicker-selector-button">
							<i class="fip-fa fa fa-arrow-down"></i>
						</span>
					</div>
					<div class="thememount-iconpicker-list-w tm-hide">
						<div id="tm-ipicker-library-' . $library_id . '" class="thememount-iconpicker-list" data-iconset="' . $library_id . '" data-icon="' . $i_value . '" role="iconpicker"></div>
					</div>
				</div><!-- .tm-ipicker-selector-w -->
			</div>';
		
		
	}
	}
	
	
	// Preparing library dropdown options
	$select_dropdown = '';
	if( is_array($icon_dropdown_array) && count($icon_dropdown_array)>0 ){
		foreach( $icon_dropdown_array as $key=>$val ){
			$selected = ($value_library==$val) ? ' selected="selected"' : '' ;
			$select_dropdown .= '<option value="' . $val . '"' . $selected . '>' . $key . '</option>';
		}
	}
	
	
	
	
	echo '<div class="thememount-iconpicker-element">';
		
		/* Library selector dropdown */
		echo '<div class="tm-iconpicker-left">';
		echo '<select name="'. $this->element_name( '[library]' ) .'" class="tm-iconpicker-library-selector" '. $this->element_class() . $this->element_attributes() .'>
				'.$select_dropdown.'
			</select>';
		echo '</div>';
	
	
		echo '<div class="tm-iconpicker-right">';
		
		$display_fontawesome = ($value_library=='fontawesome') ? 'tm-show' : 'tm-hide' ;
		
		/* Font Awesome icon picker */
		echo '<div class="thememount-iconpicker-wrapper tm-iconpicker-fontawesome ' . esc_html($display_fontawesome) . '">
				<input type="hidden" name="'. $this->element_name( '[library_fontawesome]' ) .'" value="'. $value_library_fontawesome .'"'. $this->element_class('thememount-iconpicker-input i_icon_linecons thememount_iconpicker_field') . '/>
				<div class="tm-ipicker-selector-w">
					<div class="tm-ipicker-selector">
						<span class="tm-ipicker-selected-icon">
							<i class="' . $value_library_fontawesome . '"></i>
						</span>
						<span class="tm-ipicker-selector-button">
							<i class="fip-fa fa fa-arrow-down"></i>
						</span>
					</div>
					<div class="thememount-iconpicker-list-w tm-hide">
						<div id="tm-ipicker-library-fontawesome" class="thememount-iconpicker-list" data-iconset="fontawesome" data-icon="' . $i_value_library_fontawesome . '" role="iconpicker"></div>
					</div>
				</div><!-- .tm-ipicker-selector-w -->
			</div>';
			
		/* Other library icon picker */
		echo thememount_wp_kses( $icon_picker_html );
			
		
		echo '</div><!-- .tm-iconpicker-right -->';
		
		
	
	echo '<div class="clear clr"></div> </div><!-- .thememount-iconpicker-element -->';
	
	
	
	
	
	
	
	
    echo wp_kses( $this->element_after(),
		array(
			'div' => array(
				'class' => array(),
				'id'    => array(),
			),
			'a' => array(
				'href'  => array(),
				'title' => array(),
				'class' => array()
			),
			'br'     => array(),
			'em'     => array(),
			'strong' => array(),
			'span'   => array(
				'class'  => array(),
			),
			'ol'     => array(),
			'ul'     => array(
				'class'  => array(),
			),
			'li'     => array(
				'class'  => array(),
			),
		)
	);

  }

}