<?php
/**
 * Enqueue scripts and styles.
 *
 * Registers theme assets from /assets. Stylesheets are intentionally
 * empty placeholders — add CSS/JS implementations as needed.
 *
 * Handles use the acfb- prefix (grep `acfb-main`).
 *
 * @package ACF_Boilerplate_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue frontend styles and scripts.
 *
 * @return void
 */
function acfb_enqueue_assets() {
	wp_enqueue_style(
		'acfb-main',
		ACFB_THEME_URI . '/assets/css/main.css',
		array(),
		ACFB_THEME_VERSION
	);

	wp_enqueue_script(
		'acfb-main',
		ACFB_THEME_URI . '/assets/js/main.js',
		array(),
		ACFB_THEME_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'acfb_enqueue_assets' );
