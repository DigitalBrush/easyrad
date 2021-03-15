<?php
/**
 * Template Name: Landing Page
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

				<main class="site-main" id="main" role="main">
					<?php


					if ( is_front_page() ) {
						get_template_part( 'global-templates/hero-header' );
						get_template_part( 'global-templates/featured' );
						get_template_part( 'global-templates/locations-map' ); 
						get_template_part( 'global-templates/categories-home' );
						get_template_part( 'global-templates/who' ); 
						get_template_part( 'global-templates/home-modal' ); 
						get_template_part( 'global-templates/home-bottom-slider' ); 
					}else{


						while ( have_posts() ) {
							the_post();
							get_template_part( 'loop-templates/content', 'page' );
						}
					}
					?>

				</main><!-- #main -->

			</div><!-- #primary -->



	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
