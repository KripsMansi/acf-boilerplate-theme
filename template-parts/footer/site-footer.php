<?php
/**
 * Site footer partial.
 *
 * @package ACF_Boilerplate_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer', 'acf-boilerplate-theme' ); ?>">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'footer',
			'menu_id'        => 'footer-menu',
			'container'      => false,
			'fallback_cb'    => false,
			'depth'          => 1,
		)
	);
	?>
</nav><!-- .footer-navigation -->

<div class="site-info">
	<span>
		&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
	</span>
</div><!-- .site-info -->
