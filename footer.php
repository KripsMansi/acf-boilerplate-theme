<?php
/**
 * Theme footer template.
 *
 * Closes the page wrapper and outputs footer hooks / wp_footer().
 *
 * @package ACF_Boilerplate_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

	<footer id="colophon" class="site-footer">
		<?php acfb_get_template_part( 'footer/site-footer' ); ?>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
