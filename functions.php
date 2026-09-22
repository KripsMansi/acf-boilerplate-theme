<?php
/**
 * Theme bootstrap.
 *
 * Loads organized include files that register theme supports, menus,
 * assets, ACF helpers, and template utilities.
 *
 * Prefix: acfb_ (ACF Boilerplate) — grep this to find every theme hook/helper.
 *
 * Directory map:
 * - /inc            Theme setup, enqueue, template tags, ACF integration.
 * - /acf            ACF JSON sync path and field-related helpers.
 * - /assets         Frontend CSS, JS, and images (no styles shipped).
 * - /template-parts Reusable partials (content, header, footer, ACF layouts).
 * - /templates      Custom page templates selectable in the admin.
 *
 * @package ACF_Boilerplate_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ACFB_THEME_VERSION', '1.0.0' );
define( 'ACFB_THEME_DIR', get_template_directory() );
define( 'ACFB_THEME_URI', get_template_directory_uri() );

$acfb_includes = array(
	'/inc/setup.php',
	'/inc/enqueue.php',
	'/inc/template-tags.php',
	'/inc/acf.php',
);

foreach ( $acfb_includes as $acfb_file ) {
	$acfb_path = ACFB_THEME_DIR . $acfb_file;

	if ( file_exists( $acfb_path ) ) {
		require_once $acfb_path;
	}
}
