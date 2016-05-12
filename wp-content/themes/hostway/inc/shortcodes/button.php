<?php

function ic_shortcode( $atts, $content ) {

	$default = array(
		'href'  => '',
		'class' => '',
	);

	$atts = shortcode_atts( $default, $atts );

	$class = trim( 'btn btn-primary ' . $atts['class'] );

	return '<a href="' . $atts['href'] . '" class="' . $class . '">' . $content . '</a>';
}

add_shortcode( 'ic_button', 'ic_shortcode' );