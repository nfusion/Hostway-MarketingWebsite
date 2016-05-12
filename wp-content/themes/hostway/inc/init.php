<?php

require_once 'functions.php';
require_once 'actions.php';
require_once 'filters.php';
require_once 'theme-widgets.php';
require_once 'theme-shortcodes.php';
require_once 'custom-class.php';
require_once 'acf-helpers.php';
require_once 'classes/walker-main-menu.php';

/**
 * Fires after the theme is loaded.
 */
function ic_setup_theme() {
	load_theme_textdomain( 'ic', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}

add_action( 'after_setup_theme', 'ic_setup_theme', 5 );

/**
 * Load all necessary admin bar items.
 *
 * This is the hook used to add, remove, or manipulate admin bar items.
 *
 * @param WP_Admin_Bar $wp_admin_bar WP_Admin_Bar instance, passed by reference
 */
function ic_template_details( $wp_admin_bar ) {
	global $template;

	$wp_admin_bar->add_node(
		array(
			'id'    => 'CurrentThemeFile',
			'title' => basename( $template ),
			'meta'  =>
				array(
					'html' => '',
				),
		)
	);
}

add_action( 'admin_bar_menu', 'ic_template_details', 99 );

/**
 * Fires when scripts and styles are enqueued.
 */
function ic_register_scripts() {
	$assets = get_template_directory_uri() . '/assets/';
	$js     = $assets . 'js/';
	$styles = $assets . 'styles/';

	$dir = get_template_directory() . '/';

	$style_file   = wp_normalize_path( $dir . 'assets/styles/css/style.min.css' );
	$scripts_file = wp_normalize_path( $dir . 'assets/js/app.min.js' );

	//Main styles
	wp_enqueue_style( 'main', $styles . 'css/style.min.css', false, filemtime( $style_file ) );

	wp_enqueue_script( 'google-maps', '//maps.google.com/maps/api/js', false, null, true );

	//Main scripts
	if ( file_exists( $scripts_file ) ) {

		wp_enqueue_script( 'main', $js . 'app.min.js', array( 'jquery', 'google-maps' ), filemtime( $scripts_file ), true );

		wp_localize_script( 'main', '__jsVars', array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'template' => trailingslashit( get_template_directory_uri() ),
		) );
	}
}

add_action( 'wp_enqueue_scripts', 'ic_register_scripts', 5 );

/**
 * Fires after the theme is loaded.
 */
function ic_register_menus() {
	register_nav_menus(
		array(
			'primary' => 'Primary Menu',
		)
	);
}

add_action( 'after_setup_theme', 'ic_register_menus', 5 );

/**
 * Fires after all default WordPress widgets have been registered.
 */
function ic_register_sidebars() {

	register_sidebar(
		array(
			'name'          => 'Top sidebar - left',
			'id'            => 'top_left',
			'description'   => '',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => 'Top sidebar - right',
			'id'            => 'top_right',
			'description'   => '',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => 'Copyright',
			'id'            => 'copyright',
			'description'   => '',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => 'Bottom menus',
			'id'            => 'bottom_menus',
			'description'   => '',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => 'Bottom social networks',
			'id'            => 'bottom_social_networks',
			'description'   => '',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'ic_register_sidebars', 5 );