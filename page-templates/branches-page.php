<?php
/**
 * Template Name: Branch Location Page
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

	<div class="branches-page"  id="content" >
		<?php

			get_template_part( 'global-templates/locations-map-full' );

		?>

			<div class="container content-area" id="primary">

				<main class="site-main" id="main" role="main">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="col-sm-8">
								<?php
									while ( have_posts() ) {
										the_post();
										get_template_part( 'loop-templates/content', 'page' );
				
									}
								?>
							</div>
						</div>
					</div>

				</main><!-- #main -->

			</div><!-- #primary -->
			<?php
						get_template_part( 'global-templates/locations-map-full' );
					?>

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
