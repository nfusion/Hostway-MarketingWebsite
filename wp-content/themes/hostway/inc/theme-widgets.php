<?php

include 'widgets/social-widget.php';

function ic_register_widgets() {

	register_widget( 'IC_Widget_Social' );
}

add_action( 'widgets_init', 'ic_register_widgets', 5 );