<?php

/**
 * Parse sections
 *
 * @param null|int $post_id
 */
function ic_get_flexible_content( $post_id = null ) {
	if ( $sections = get_field( 'post_content', $post_id ) ) {
		wp_cache_set( 'h1', false );

		foreach ( $sections AS $key => $section ) {

			if ( $section['acf_fc_layout'] === 'defined-section' ) {
				$section = get_defined_section( $section );
			}

			$file = locate_template( 'template-parts/flexible-content/' . $section['acf_fc_layout'] . '.php' );

			if ( ! empty( $file ) ) {
				include $file;
			} else {
				echo 'Layout ' . $section['acf_fc_layout'] . ' not exists';
			}
		}
	}
}

/**
 * Get defined section details
 *
 * @param array $section
 *
 * @return array
 */
function get_defined_section( $section ) {
	$sections = get_option( 'defined_sections', array() );

	if ( empty( $sections ) ) {
		return $section;
	}

	foreach ( $sections AS $item ) {
		if ( $section['section_defined'] == sanitize_title( $item['section_name'] ) ) {
			return $item;
		}
	}

	return $section;
}

/**
 * Get list defined sections
 *
 * This list is for ACF field to select where user choose defined section
 *
 * @return array
 */
function get_defined_sections_list() {
	$sections = get_option( 'defined_sections', array() );

	if ( empty( $sections ) ) {
		return array();
	}

	$sections_array = array();

	foreach ( $sections AS &$section ) {
		$sections_array[ sanitize_title( $section['section_name'] ) ] = $section['section_name'];
	}

	return $sections_array;
}

function ic_get_title_tag() {

	if ( wp_cache_get( 'h1' ) === false ) {
		wp_cache_set( 'h1', true );

		return 'h1';
	}

	return 'h2';
}