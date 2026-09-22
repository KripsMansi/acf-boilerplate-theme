<?php
/**
 * Search results template.
 *
 * @package ACF_Boilerplate_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<h1 class="page-title">
				<?php
				printf(
					/* translators: %s: search query. */
					esc_html__( 'Search Results for: %s', 'acf-boilerplate-theme' ),
					'<span>' . esc_html( get_search_query() ) . '</span>'
				);
				?>
			</h1>
		</header><!-- .page-header -->

		<?php
		while ( have_posts() ) :
			the_post();
			acfb_get_template_part( 'content/content', 'search' );
		endwhile;

		the_posts_navigation();
	else :
		acfb_get_template_part( 'content/content', 'none' );
	endif;
	?>
</main><!-- #primary -->

<?php
get_footer();
