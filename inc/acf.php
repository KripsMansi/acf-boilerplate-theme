<?php
/**
 * Advanced Custom Fields integration.
 *
 * Configures ACF Local JSON sync. Field group JSON files should live in /acf/json/.
 * Flexible content layout partials belong in /template-parts/acf/layouts/.
 *
 * @package ACF_Boilerplate_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Set ACF Local JSON save path.
 *
 * @param string $path Default ACF save path.
 * @return string
 */
function acfb_acf_json_save_point( $path ) {
	unset( $path );
	return ACFB_THEME_DIR . '/acf/json';
}
add_filter( 'acf/settings/save_json', 'acfb_acf_json_save_point' );

/**
 * Set ACF Local JSON load paths.
 *
 * @param array $paths Existing load paths.
 * @return array
 */
function acfb_acf_json_load_point( $paths ) {
	unset( $paths[0] );

	$paths[] = ACFB_THEME_DIR . '/acf/json';

	return $paths;
}
add_filter( 'acf/settings/load_json', 'acfb_acf_json_load_point' );

/**
 * Admin notice when ACF is not active.
 *
 * @return void
 */
function acfb_acf_missing_notice() {
	if ( function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	if ( ! current_user_can( 'activate_plugins' ) ) {
		return;
	}

	printf(
		'<div class="notice notice-warning"><p>%s</p></div>',
		esc_html__( 'ACF Boilerplate Theme expects Advanced Custom Fields (ACF) to be installed and active.', 'acf-boilerplate-theme' )
	);
}
add_action( 'admin_notices', 'acfb_acf_missing_notice' );
