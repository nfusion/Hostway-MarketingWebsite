<?php
get_header();
the_post();
/**
 * Template Name: Flexible Content
 */

ic_get_flexible_content( get_the_ID() );

get_footer();