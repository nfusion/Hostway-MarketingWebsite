<?php

/**
 * Filter the retrieved post excerpt.
 *
 * @param string $post_excerpt The post excerpt.
 * @param WP_Post $post Post object.
 *
 * @return string
 */
function ic_get_the_excerpt_filter( $post_excerpt, $post ) {

	if ( ! is_admin() && is_search() ) {
		return ic_highlight_search_results( $post_excerpt );
	}

	return $post_excerpt;
}

add_filter( 'get_the_excerpt', 'ic_get_the_excerpt_filter', 100, 2 );

/**
 * Custom search placeholder
 *
 * Filter text with its translation based on context information.
 *
 * @param string $translations Translated text.
 * @param string $text Text to translate.
 * @param string $context Context information for the translators.
 * @param string $domain Text domain. Unique identifier for retrieving translated strings.
 *
 * @return string
 */
function ic_gettext_with_context( $translations, $text, $context, $domain ) {

	if ( $text === 'Search &hellip;' && $context == 'placeholder' ) {
		return 'e.g. Hosting Solutions';
	}

	return $translations;
}

add_filter( 'gettext_with_context', 'ic_gettext_with_context', 10, 4 );