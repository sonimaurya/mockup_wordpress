<?php

class Portfolio_Content  extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'Portfolio_Content',
			'description' => 'portfolio text',
			'id' => 'my_portfolio_widget',
			'before_title'=>'',
			'after_title'=>''
		);
		parent::__construct(
			'foo_widget', // Base ID
			esc_html__( 'Widget Title', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'A Portfolio Widget', 'text_domain' ), ) // Args
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
        echo '<div class="portfolio-heading">'.
        '<div class="top-heading">';
		if ( ! empty( $instance['title'] ) ) {
			echo  apply_filters( 'widget_title', $instance['title'] ) ;
        }
        echo '<div class="horizontal-line"></div></div>';
        echo '<div class="portfolio-para">
        <div class="portfolio-para-text">';
        if ( ! empty( $instance['text'] ) ) {
			echo  apply_filters( 'widget_text', $instance['text'] ) ;
		}
		echo '<button class="portfolio-para-text-button">KNOW MORE</button>
	    </div>';
		
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
        // outputs the options form on admin
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Portfolio' );
        $text = ! empty( $instance['text'] ) ? $instance['text'] : 
        esc_html__( 'You need more information? Check what other persons are saying about our product. 
        They are very happy with their purchase.' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
		<?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" 
        name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" 
        value="<?php echo esc_attr( $title ); ?>"><br>
        <label for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"><?php
         esc_attr_e( 'Description:', 'text_domain' ); ?></label> 
        <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" 
        name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" 
        ><?php echo esc_attr( $text ); ?></textarea>
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
		$instance['text'] = ( ! empty( $new_instance['text'] ) ) ? sanitize_text_field( $new_instance['text'] ) : '';

		return $instance;
	}
}

?>