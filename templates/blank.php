<?php
/**
 * Template Name: Blank
 * Template Post Type: page
 *
 * Custom page template with header/footer but no default page chrome.
 * Useful for fully ACF-driven landing pages.
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
