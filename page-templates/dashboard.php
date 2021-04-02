<?php
/**
 * Template Name: Client Dashboard
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

					<h2>Tableau de bord</h2>

					<div class="row">
						<div class="col-sm-12 mb-3">
						<input type="text" id="myFilter" class="form-control" onkeyup="myFunction()" placeholder="Tapez pour rechercher...">
						</div>
					</div>
					<div class="row" id="myItems">
						<div class="col-sm-12 mb-3">
							<div class="row mb-3">
								<div class="col-sm-4">
									<div class="card">
										<div class="card-header">
											<h5 class="card-title">Dufour sebastien/N°3725476538</h5>
										</div>
										<div class="card-body">
											<p class="card-text">Avis du: <span> 18/11/2020</span></p>
											<p class="card-text">Immatriculation: <span>FS-655-CF</span></p>
											<p class="card-text">Demande du: <span> 24/11/2020</span></p>
										</div>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="card">
										<div class="card-header">
											<h5 class="card-title">Dufour sebastien/N°3725476538</h5>
										</div>
										<div class="card-body">
											<p class="card-text">Avis du: <span> 18/11/2020</span></p>
											<p class="card-text">Immatriculation: <span>FT-655-CF</span></p>
											<p class="card-text">Demande du: <span> 24/11/2020</span></p>
										</div>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="card">
										<div class="card-header">
											<h5 class="card-title">Dufour sebastien/N°3725476538</h5>
										</div>
										<div class="card-body">
											<p class="card-text">Avis du: <span> 18/11/2020</span></p>
											<p class="card-text">Immatriculation: <span>FG-655-CF</span></p>
											<p class="card-text">Demande du: <span> 24/11/2020</span></p>
										</div>
									</div>
								</div>
								
								<div class="col-sm-4">
									<div class="card">
										<div class="card-header">
											<h5 class="card-title">Dufour sebastien/N°3725476538</h5>
										</div>
										<div class="card-body">
											<p class="card-text">Avis du: <span> 18/11/2020</span></p>
											<p class="card-text">Immatriculation: <span>FH-655-CF</span></p>
											<p class="card-text">Demande du: <span> 24/11/2020</span></p>
										</div>
									</div>
								</div>
								
								<div class="col-sm-4">
									<div class="card">
										<div class="card-header">
											<h5 class="card-title">Dufour sebastien/N°3725476538</h5>
										</div>
										<div class="card-body">
											<p class="card-text">Avis du: <span> 18/11/2020</span></p>
											<p class="card-text">Immatriculation: <span>FL-655-CF</span></p>
											<p class="card-text">Demande du: <span> 24/11/2020</span></p>
										</div>
									</div>
								</div>
								
								<div class="col-sm-4">
									<div class="card">
										<div class="card-header">
											<h5 class="card-title">Dufour sebastien/N°3725476538</h5>
										</div>
										<div class="card-body">
											<p class="card-text">Avis du: <span> 18/11/2020</span></p>
											<p class="card-text">Immatriculation: <span>FD-655-CF</span></p>
											<p class="card-text">Demande du: <span> 24/11/2020</span></p>
										</div>
									</div>
								</div>
								
								<div class="col-sm-4">
									<div class="card">
										<div class="card-header">
											<h5 class="card-title">Dufour sebastien/N°3725476538</h5>
										</div>
										<div class="card-body">
											<p class="card-text">Avis du: <span> 18/11/2020</span></p>
											<p class="card-text">Immatriculation: <span>FT-655-CF</span></p>
											<p class="card-text">Demande du: <span> 24/11/2020</span></p>
										</div>
									</div>
								</div>
								
								<div class="col-sm-4">
									<div class="card">
										<div class="card-header">
											<h5 class="card-title">Dufour sebastien/N°3725476538</h5>
										</div>
										<div class="card-body">
											<p class="card-text">Avis du: <span> 18/11/2020</span></p>
											<p class="card-text">Immatriculation: <span>FW-655-CF</span></p>
											<p class="card-text">Demande du: <span> 24/11/2020</span></p>
										</div>
									</div>
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
