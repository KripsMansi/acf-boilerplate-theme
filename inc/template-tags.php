<?php
/**
 * Template tags and helpers.
 *
 * Utility functions for loading template parts, ACF flexible layouts,
 * and common theme markup helpers. Keep presentation-free.
 *
 * @package ACF_Boilerplate_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Safely load a theme template part if the file exists.
 *
 * Example: acfb_get_template_part( 'content/content', 'page' );
 * Loads: template-parts/content/content-page.php
 *
 * @param string $slug The template slug (relative to /template-parts/).
 * @param string $name Optional template name suffix.
 * @param array  $args Optional args passed to get_template_part().
 * @return void
 */
function acfb_get_template_part( $slug, $name = null, $args = array() ) {
	$slug = ltrim( (string) $slug, '/' );

	get_template_part( 'template-parts/' . $slug, $name, $args );
}

/**
 * Render ACF flexible content layouts for a given field.
 *
 * Expects layout partials at:
 * template-parts/acf/layouts/{layout_name}.php
 *
 * Each layout file receives:
 * - $args['layout']  Full ACF layout row array.
 * - $args['index']   Zero-based layout index.
 * - $args['field']   Flexible content field name.
 *
 * @param string $field_name ACF flexible content field name.
 * @param mixed  $post_id    Post ID, 'option', or null for current post.
 * @return void
 */
function acfb_render_flexible_content( $field_name = 'page_sections', $post_id = null ) {
	if ( ! function_exists( 'have_rows' ) ) {
		return;
	}

	if ( ! have_rows( $field_name, $post_id ) ) {
		return;
	}

	$index = 0;

	while ( have_rows( $field_name, $post_id ) ) {
		the_row();

		$layout = get_row_layout();

		if ( ! $layout ) {
			continue;
		}

		$layout_slug = sanitize_file_name( str_replace( '_', '-', $layout ) );

		acfb_get_template_part(
			'acf/layouts/' . $layout_slug,
			null,
			array(
				'layout' => get_row( true ),
				'index'  => $index,
				'field'  => $field_name,
			)
		);

		++$index;
	}
}

/**
 * Check whether ACF is available.
 *
 * @return bool
 */
function acfb_has_acf() {
	return function_exists( 'get_field' );
}

/**
 * Get an ACF field value with a fallback when ACF is inactive.
 *
 * @param string $selector Field name or key.
 * @param mixed  $post_id  Post ID, 'option', or null.
 * @param mixed  $default  Fallback value.
 * @return mixed
 */
function acfb_get_field( $selector, $post_id = null, $default = null ) {
	if ( ! acfb_has_acf() ) {
		return $default;
	}

	$value = get_field( $selector, $post_id );

	return ( null !== $value && false !== $value && '' !== $value ) ? $value : $default;
}
