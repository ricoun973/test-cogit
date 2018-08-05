<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Color Picker
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_thememount_skin_color extends CSFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output() {

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
	
	// Pre colors
	$options = $this->field['options'];
	echo '<div class="thememount-skin-color-w">';
	
	echo '<div class="thememount-skin-color-list">';
	if( is_array($options) && count($options)>0 ){
		$half = ceil( count($options)/2 );
		$i=1;
		foreach($options as $name => $color){
			echo '<a href="javascript:void(0)" title="'.$name.'" style="background-color:'.$color.'">'.$name.'</a>';
			if( $i==$half ){ echo '<br>'; }
			$i++;
		}
	}
	
	echo '<div class="clear"></div></div> <!-- .thememount-skin-color-list --> ';
	echo '<div class="thememount-or-text-wrapper"><span></span><div class="thememount-or-text">OR</div></div>';
	
	echo '<div class="thememount-skin-color-picker-w">';
    echo '<input type="text" name="'. $this->element_name() .'" value="'. $this->element_value() .'"'. $this->element_class( 'cs-field-color-picker' ) . $this->element_attributes( $this->extra_attributes() ) .'/>';
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
	echo '</div>';
	echo '<div class="clear clr"></div>';
	echo '</div><!-- .thememount-skin-color-w -->';

  }

  public function extra_attributes() {

    $atts = array();

    if( isset( $this->field['id'] ) ) {
      $atts['data-depend-id'] = $this->field['id'];
    }

    if ( isset( $this->field['rgba'] ) &&  $this->field['rgba'] === false ) {
      $atts['data-rgba'] = 'false';
    }

    if( isset( $this->field['default'] ) ) {
      $atts['data-default-color'] = $this->field['default'];
    }

    return $atts;

  }

}
