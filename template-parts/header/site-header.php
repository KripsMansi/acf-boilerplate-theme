<?php
/**
 * Site header partial.
 *
 * @package ACF_Boilerplate_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="site-branding">
	<?php if ( is_front_page() && is_home() ) : ?>
		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</h1>
	<?php else : ?>
		<p class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</p>
	<?php endif; ?>

	<?php
	$acfb_description = get_bloginfo( 'description', 'display' );
	if ( $acfb_description || is_customize_preview() ) :
		?>
		<p class="site-description"><?php echo esc_html( $acfb_description ); ?></p>
	<?php endif; ?>
</div><!-- .site-branding -->

<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary', 'acf-boilerplate-theme' ); ?>">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'primary',
			'menu_id'        => 'primary-menu',
			'container'      => false,
			'fallback_cb'    => false,
		)
	);
	?>
</nav><!-- #site-navigation -->
