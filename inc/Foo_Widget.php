<?php

class Foo_Widget  extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'my_widget',
			'description' => 'footer copyright text',
			'id' => 'my_foo_widget',
			'before_title'=>'<span>',
			'after_title'=>'</span>'
		);
		parent::__construct(
			'foo_widget', // Base ID
			esc_html__( 'Widget Title', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'A Foo Widget', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
        // outputs the content of the widget
        echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo  apply_filters( 'widget_title', $instance['title'] ) ;
		}
		
		echo $args['after_widget'];
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
        // outputs the options form on admin
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
		<?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
        $instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}
}

?>