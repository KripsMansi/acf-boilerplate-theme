<?php
/**
 * Single post template.
 *
 * @package ACF_Boilerplate_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	while ( have_posts() ) :
		the_post();
		acfb_get_template_part( 'content/content', 'single' );
	endwhile;
	?>
</main><!-- #primary -->

<?php
get_footer();
