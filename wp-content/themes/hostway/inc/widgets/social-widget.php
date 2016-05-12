<?php

class IC_Widget_Social extends WP_Widget {

	/**
	 * Sets up a new Text widget instance.
	 *
	 * @since 2.8.0
	 * @access public
	 */
	public function __construct() {
		$widget_ops  = array(
			'classname' => 'widget_social',
		);
		$control_ops = array( 'width' => 400, 'height' => 350 );
		parent::__construct( 'ic_social', 'Social', $widget_ops, $control_ops );
	}

	/**
	 * Outputs the content for the current Text widget instance.
	 *
	 * @since 2.8.0
	 * @access public
	 *
	 * @param array $args Display arguments including 'before_title', 'after_title',
	 *                        'before_widget', and 'after_widget'.
	 * @param array $instance Settings for the current Text widget instance.
	 */
	public function widget( $args, $instance ) {

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance,
			$this->id_base );

		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		} ?>
		<?php

		$file = locate_template( 'template-parts/widgets/ic-social.php' );
		if ( ! empty( $file ) ) {
			include $file;
		}
		?>
		<?php
		echo $args['after_widget'];
	}

	public function form( $instance ) {

	}
}