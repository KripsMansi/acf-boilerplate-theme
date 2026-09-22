<?php
/**
 * Main template fallback.
 *
 * @package ACF_Boilerplate_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			acfb_get_template_part( 'content/content', get_post_type() );
		endwhile;

		the_posts_navigation();
	else :
		acfb_get_template_part( 'content/content', 'none' );
	endif;
	?>
</main><!-- #primary -->

<?php
get_footer();
