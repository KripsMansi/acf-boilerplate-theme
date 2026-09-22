<?php
/**
 * Theme setup.
 *
 * Registers theme supports, navigation menus, and related defaults.
 *
 * @package ACF_Boilerplate_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sets up theme defaults and registers support for WordPress features.
 *
 * @return void
 */
function acfb_theme_setup() {
	load_theme_textdomain( 'acf-boilerplate-theme', ACFB_THEME_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'align-wide' );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'acf-boilerplate-theme' ),
			'footer'  => esc_html__( 'Footer Menu', 'acf-boilerplate-theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'acfb_theme_setup' );

/**
 * Set the content width in pixels.
 *
 * @global int $content_width
 * @return void
 */
function acfb_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'acfb_content_width', 1200 );
}
add_action( 'after_setup_theme', 'acfb_content_width', 0 );
