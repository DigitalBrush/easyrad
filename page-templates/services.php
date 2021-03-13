<?php
/**
 * Template Name: Services Landing Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

?>

<div id="full-width-page-wrapper">

	<div id="content">

			<div class="content-area" id="primary">

				<main class="site-main services-page" id="main" role="main">
					<?php

						get_template_part( 'global-templates/page-header' );
						get_template_part( 'global-templates/services-slider' );
						get_template_part( 'global-templates/services-contact' );
						get_template_part( 'global-templates/services-investment' );
					?>

				</main><!-- #main -->

			</div><!-- #primary -->



	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
