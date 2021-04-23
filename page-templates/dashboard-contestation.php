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
									<h5 class="card-title">Demande du 28/10/2020 a 12:23:38</h5>
									<a href="#" class="btn btn-secondary btn-sm">Traitee</a>
								</div>
								<div class="card-body">
									<div class="card-section">
										<h4 class="card-title">Informations de contestation</h4>
										<div class="contest-value">
											<p class="card-text">Numero : <span class="card-value">3756298453546</span></p>
										</div>
										<div class="contest-value">
											<p class="card-text">Nom / Raison sociale : <span class="card-value">Dufour</span></p>
										</div>
										<div class="contest-value">
											<p class="card-text">Date del'avis : <span class="card-value">21/10/2020</span></p>
										</div>
										<div class="contest-value">
											<p class="card-text">Immatriculation : <span class="card-value">FS-655-CF</span></p>
										</div>
										<div class="contest-value">
											<p class="card-text">Ref de la consignation : <span class="card-value">2235345365463234</span></p>
										</div>
									</div>

									<div class="card-section">
										<h4 class="card-title">Informations d'identification'</h4>
										<div class="contest-value">
											<p class="card-text">Nom : <span class="card-value">Dufour</span></p>
										</div>
										<div class="contest-value">
											<p class="card-text">Nom : <span class="card-value">Sebastien</span></p>
										</div>
										<div class="contest-value">
											<p class="card-text">Email : <span class="card-value">info@maitredufour.com</span></p>
										</div>
										<div class="contest-value">
											<p class="card-text">Telephone : <span class="card-value">+91737423545</span></p>
										</div>
									</div>
								</div>
							</div> 
							<div class="card text-center">
								<div class="card-header">
									<h5 class="card-title">Historique des actions sur le dossier</h5>
								</div>
								<div class="card-body">
									<table class="table table-striped">
										<thead>
											<tr>
											<th scope="col">Date</th>
											<th scope="col">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">04/11/2020 09:34:23</th>
												<td>Email de suivi Duree procedure envoye</td>
											</tr>
											<tr>
												<th scope="row">04/11/2020 09:34:23</th>
												<td>Email de suivi Duree procedure envoye</td>
											</tr>
											<tr>
												<th scope="row">04/11/2020 09:34:23</th>
												<td>Email de suivi Duree procedure envoye</td>
											</tr>
											<tr>
												<th scope="row">04/11/2020 09:34:23</th>
												<td>Email de suivi Duree procedure envoye</td>
											</tr>
											<tr>
												<th scope="row">04/11/2020 09:34:23</th>
												<td>Email de suivi Duree procedure envoye</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div> 
						</div>    

						<div class="col-sm-6 mb-3">
							<div class="card text-center">
								<div class="card-header">
									<h5 class="card-title">Actions</h5>
								</div>
								<div class="card-body">
								<p><a href="#" class="btn btn-primary btn-sm"><span class="material-icons">lock</span>Effectuer la consignation</a></p>
								<p><a href="#" class="btn btn-primary btn-sm"><span class="material-icons">payments</span>Effectuer le paiement honoraires</a></p>
								<p><a href="#" class="btn btn-primary btn-sm"><span class="material-icons">payment</span>Facture</a></p>
								<p><a href="#" class="btn btn-primary btn-sm"><span class="material-icons">info</span>Rejet de la contestation</a></p>
								<p><a href="#" class="btn btn-primary btn-sm"><span class="material-icons">warning</span>L'amende a été majorée</a></p>
								<p><a href="#" class="btn btn-primary btn-sm"><span class="material-icons">question_answer</span>Convocation audition libre</a></p>
								<p><a href="#" class="btn btn-primary btn-sm"><span class="material-icons">event</span>Citation a comparaitre a venir</a></p>
								<p><a href="#" class="btn btn-primary btn-sm"><span class="material-icons">gavel</span>Ordonnance pénale a venir</a></p>
								</div>
							</div> 
							<div class="card text-center">
								<div class="card-header">
									<h5 class="card-title">Messages du client</h5>
								</div>
								<div class="card-body">
									<div class="alert-message alert-message-success">
										<h4>Vous avez un nouveau message</h4>
										<p>Votre contestation a été approuvée et le paiement a été remboursé par eben sur votre compte. <a href="#">Lire le message</a></p>
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
