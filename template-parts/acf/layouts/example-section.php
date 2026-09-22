<?php
/**
 * Example ACF flexible content layout partial.
 *
 * Copy this file when adding new layouts. Filename must match the ACF
 * layout name with underscores converted to hyphens.
 *
 * Example: ACF layout name `example_section` → example-section.php
 *
 * @package ACF_Boilerplate_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$acfb_index   = isset( $args['index'] ) ? (int) $args['index'] : 0;
$acfb_heading = function_exists( 'get_sub_field' ) ? get_sub_field( 'heading' ) : '';
$acfb_content = function_exists( 'get_sub_field' ) ? get_sub_field( 'content' ) : '';
?>

<section class="acf-layout acf-layout--example-section" data-layout-index="<?php echo esc_attr( (string) $acfb_index ); ?>">
	<?php if ( $acfb_heading ) : ?>
		<h2><?php echo esc_html( $acfb_heading ); ?></h2>
	<?php endif; ?>

	<?php if ( $acfb_content ) : ?>
		<div class="acf-layout__content">
			<?php echo wp_kses_post( $acfb_content ); ?>
		</div>
	<?php endif; ?>
</section>
