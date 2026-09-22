<?php
/**
 * Theme header template.
 *
 * Outputs the opening HTML document structure and site header shell.
 * Markup is intentionally blank (no design).
 *
 * @package ACF_Boilerplate_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary">
		<?php esc_html_e( 'Skip to content', 'acf-boilerplate-theme' ); ?>
	</a>

	<header id="masthead" class="site-header">
		<?php acfb_get_template_part( 'header/site-header' ); ?>
	</header><!-- #masthead -->
