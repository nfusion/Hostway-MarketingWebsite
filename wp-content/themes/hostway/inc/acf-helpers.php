<?php

/**
 * Filter a widget's settings before saving.
 *
 * Returning false will effectively short-circuit the widget's ability
 * to update settings.
 *
 * @param array $instance The current widget instance's settings.
 * @param array $new_instance Array of new widget settings.
 * @param array $old_instance Array of old widget settings.
 * @param WP_Widget $widget The current widget instance.
 *
 * @return array
 */
function ic_widget_update_callback( $instance, $new_instance, $old_instance, $widget ) {

	if ( function_exists( 'get_fields' ) && $options = get_fields( 'widget_' . $widget->id ) ) {
		return array_merge( $instance, $options );
	}

	return $instance;
}

add_filter( 'widget_update_callback', 'ic_widget_update_callback', 10, 4 );

/**
 * Fires immediately after a new term is created, before the term cache is cleaned.
 *
 * @param int $term_id Term ID.
 * @param int $tt_id Term taxonomy ID.
 * @param string $taxonomy Taxonomy slug.
 */
function ic_acf_fields_term_meta( $term_id, $tt_id, $taxonomy ) {

	if ( isset( $_POST['acf'] ) ) {

		foreach ( $_POST['acf'] AS $field_key => $field_value ) {
			if ( $field = get_field_object( $field_key ) ) {
				update_term_meta( $term_id, $field['name'], get_field( $field['name'], get_term( $term_id ) ) );
			}
		}
	}
}

add_action( 'create_term', 'ic_acf_fields_term_meta', 10, 3 );
add_action( 'edit_term', 'ic_acf_fields_term_meta', 10, 3 );

/**
 * Fires once a post has been saved. Support for WPML
 *
 * @param int $post_ID Post ID.
 */
function ic_acf_option_save( $post_ID ) {

	$options = array( 'options' );

	if ( function_exists( 'icl_get_languages' ) ) {
		foreach ( icl_get_languages( 'skip_missing=0' ) AS $lang ) {
			$options[] = 'options_' . $lang['code'];
		}
	}

	if ( in_array( $post_ID, $options ) && $options = get_fields( $post_ID ) ) {
		foreach ( $options AS $option_key => $option_value ) {
			if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
				update_option( $option_key . '_' . ICL_LANGUAGE_CODE, $option_value, 'yes' );
			} else {
				update_option( $option_key, $option_value, 'yes' );
			}
		}
	}
}

add_action( 'acf/save_post', 'ic_acf_option_save', 30 );