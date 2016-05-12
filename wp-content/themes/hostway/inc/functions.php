<?php

include 'functions/search.php';
include 'functions/flexible-content.php';

/**
 * Retrieve a post's terms as a list with specified format.
 *
 * @param int $id Post ID.
 * @param string $taxonomy Taxonomy name.
 * @param string $before Optional. Before list.
 * @param string $sep Optional. Separate items using this.
 * @param string $after Optional. After list.
 * @param bool $echo Optional. Show terms list
 *
 * @return string|false|WP_Error A list of terms on success, false if there are no terms, WP_Error on failure.
 */
function ic_the_terms_list( $id, $taxonomy, $before = '', $sep = ', ', $after = '', $echo = true ) {
	$term_list = get_the_term_list( $id, $taxonomy, $before, $sep, $after );

	if ( is_wp_error( $term_list ) ) {
		return false;
	}

	$term_list = wp_strip_all_tags( $term_list );

	if ( $echo ) {
		echo $term_list;
	}

	return $term_list;
}