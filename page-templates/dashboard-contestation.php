<?php
/**
 * Template Name: Client Dashboard Contestation
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('dash');

?>

<div class="dash-wrapper">
	<div class="side-bar">
		<?php
			wp_nav_menu(
				array(
					'menu'  => 'dashboard',
					'menu_class'      => 'navbar-nav',
					'fallback_cb'     => '',
					'menu_id'         => 'dash-menu',
					'depth'           => 2,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			);
			?>
	</div>


	<div class="container-fluid dash-body" id="content">

		<div class="row" >

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main" >

					<h2>Contestation n°3725476538</h2>
					
					<div class="row dash-contest">

						<div class="col-sm-6 mb-3">
							<div class="card text-center">
								<div class="card-header">
									<h5 class="card-title">Special title treatment</h5>
									<a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
								</div>
								<div class="card-body">
									<h5 class="card-title">Special title treatment</h5>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div> 
						</div>    

						<div class="col-sm-6 mb-3">
							<div class="card text-center">
								<div class="card-header">
									<h5 class="card-title">Special title treatment</h5>
									<a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
								</div>
								<div class="card-body">
									<h5 class="card-title">Special title treatment</h5>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div> 
						</div>   

					</div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/src/js/custom.js"></script>
