<?php
/**
 * Template Name: Contact Us Landing Page
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

	<div class="contact-page"  id="content" >
		
	<?php

get_template_part( 'global-templates/locations-map-full' );


?>

			<div class="<?php echo esc_attr( $container ); ?> content-area" id="primary">

				<main class="site-main" id="main" role="main">
				
					<div class="container">
						<div class="row d-flex justify-content-start mt-5 mb-5">
							<div class="col-sm-5">
								<div class="contact-info">
									<div class="d-block">
										<h4 class="pretitle"><span class="material-icons">phone</span>Telephone</h4>
										<a href="tel:01 45 05 15 12" target="_blank" rel="noopener">01 45 05 15 12</a>
									</div>
									<div class="d-block ml-5">
										<h4 class="pretitle"><span class="material-icons">mail</span>Email</h4>
										<a href="mailto:contact@alcof-securite.fr" target="_blank" rel="noopener">contact@alcof-securite.fr</a>
									</div>
								</div>
							</div>
							
							<div class="col-sm-12">
								
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

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
