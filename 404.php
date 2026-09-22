<?php
/**
 * 404 template.
 *
 * @package ACF_Boilerplate_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Page not found', 'acf-boilerplate-theme' ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<p><?php esc_html_e( 'The page you are looking for could not be found.', 'acf-boilerplate-theme' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .page-content -->
	</section><!-- .error-404 -->
</main><!-- #primary -->

<?php
get_footer();
