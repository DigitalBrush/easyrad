<?php
/**
 * Template Name: Categories Landing Page
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

	<div class="categories-page header-light" id="content">

			<div class="content-area" id="primary">

				<main class="site-main" id="main" role="main">
					<?php

						get_template_part( 'global-templates/page-header' );
						get_template_part( 'global-templates/categories-page' );
						get_template_part( 'global-templates/contact' );
						get_template_part( 'global-templates/categories-other' );
					?>

				</main><!-- #main -->

			</div><!-- #primary -->



	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
