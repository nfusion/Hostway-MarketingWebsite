<?php

/**
 * Helper for show search words in search results page
 *
 * @return string
 */
function ic_get_search_words_url() {

	$words = ic_get_search_words_array();

	if ( ! empty( $words ) ) {
		$search_array = array();

		foreach ( $words AS $word ) {
			$search_array[] = '<a href="' . add_query_arg( 's', esc_attr( $word ),
					home_url() ) . '">' . esc_html( $word ) . '</a>';
		}

		return implode( ' + ', $search_array );
	}

	return '';
}

/**
 * Parse string to array
 *
 * @return array
 */
function ic_get_search_words_array() {
	return explode( ' ', wp_strip_all_tags( get_search_query( false ) ) );
}

/**
 * Highlight words in search results excerpts
 *
 * @param string $text
 *
 * @return string
 */
function ic_highlight_search_results( $text ) {

	$m = ic_get_search_words_array();
	if ( empty( $m ) ) {
		return $text;
	}
	$re = '/' . implode( '|', $m ) . '/i';

	return preg_replace( $re, '<strong>$0</strong>', $text );
}