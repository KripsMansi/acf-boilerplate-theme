<?php
/**
 * Front page template.
 *
 * Primary entry point for ACF flexible content on the homepage.
 *
 * @package ACF_Boilerplate_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	while ( have_posts() ) :
		the_post();
		acfb_render_flexible_content( 'page_sections' );
	endwhile;
	?>
</main><!-- #primary -->

<?php
get_footer();
