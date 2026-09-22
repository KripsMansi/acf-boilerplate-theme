<?php
/**
 * Default page template.
 *
 * Renders ACF flexible content when available; otherwise falls back
 * to the standard content partial.
 *
 * @package ACF_Boilerplate_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	while ( have_posts() ) :
		the_post();

		if ( function_exists( 'have_rows' ) && have_rows( 'page_sections' ) ) {
			acfb_render_flexible_content( 'page_sections' );
		} else {
			acfb_get_template_part( 'content/content', 'page' );
		}
	endwhile;
	?>
</main><!-- #primary -->

<?php
get_footer();
