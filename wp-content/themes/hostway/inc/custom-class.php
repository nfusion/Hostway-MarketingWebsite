<?php

/**
 * Wsparcie dla wlasnego pola w widgetach
 */

function ic_in_widget_form_action( $widget, $return, $instance ) {

	if ( ! isset( $instance['classes'] ) ) {
		$instance['classes'] = '';
	}

	$row = "<p>";
	$row .= "<label for='widget-{$widget->id_base}-{$widget->number}-classes'>Additional classes</label>";
	$row .= "<input type='text' name='widget-{$widget->id_base}[{$widget->number}][classes]' id='widget-{$widget->id_base}-{$widget->number}-classes' class='widefat' value='{$instance['classes']}'/>";
	$row .= "</p>";

	echo $row;
}

add_action( 'in_widget_form', 'ic_in_widget_form_action', 10, 3 );

function ic_widget_update( $instance, $new_instance ) {
	$instance['classes'] = $new_instance['classes'];

	return $instance;
}

add_filter( 'widget_update_callback', 'ic_widget_update', 10, 2 );

function ic_dynamic_sidebar_params( $params ) {
	global $wp_registered_widgets;

	$classes = array();

	$widget_id  = $params[0]['widget_id'];
	$widget_obj = $wp_registered_widgets[ $widget_id ];
	$widget_opt = get_option( $widget_obj['callback'][0]->option_name );
	$widget_num = $widget_obj['params'][0]['number'];

	preg_match( '/class="(.*?)"/', $params[0]['before_widget'], $matches );

	if ( isset( $matches[1] ) && ! empty( $matches[1] ) ) {
		$classes = explode( ' ', $matches[1] );
	}

	if ( isset( $widget_opt[ $widget_num ]['classes'] ) && ! empty( $widget_opt[ $widget_num ]['classes'] ) ) {
		$classes = array_merge( $classes, explode( ' ', $widget_opt[ $widget_num ]['classes'] ) );
	}

	$classes = apply_filters( 'widget_class', array_filter( $classes ), $widget_id );

	$params[0]['before_widget'] = preg_replace( '/class="(.*?)"/', 'class="' . trim( implode( ' ', $classes ) ) . '"',
		$params[0]['before_widget'], 1 );

	return $params;
}

add_filter( 'dynamic_sidebar_params', 'ic_dynamic_sidebar_params' );