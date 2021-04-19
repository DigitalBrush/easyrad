<?php
/**
 * Hero setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

	<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">
		<div class="page-section">
			<div class="row section-benefits">

				

				<div class="col-md px-0 py-md-4">
					<div class="single-benefit">
						<div class="benefit-desc">
							<h4 class="title">Plus de <span>50 000</span> contestations déjà effectuées depuis 2017 et plus de 10 000 sociétés déjà clientes</h4>
						</div>
					</div>
				</div>

				<div class="col-md px-0 py-md-4">
					<div class="single-benefit">
						<div class="benefit-icon">
							<div class="avis-verifies-testimonials">
								<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/avis-verifies.svg" />
								<div class="review-stars">
									<i class="material-icons md-32">star_rate</i>
									<i class="material-icons md-32">star_rate</i>
									<i class="material-icons md-32">star_rate</i>
									<i class="material-icons md-32">star_rate</i>
									<i class="material-icons md-32">star_rate</i>
								</div>
							</div>
						</div>
						<div class="benefit-desc">
							<h4 class="title">4.7/5<br/>avis de nos clients</h4>
						</div>
					</div>
				</div>

				<div class="col-md px-0 featured">
					<div class="single-benefit">
						
						<div class="benefit-desc">
							<h1 class="title price">54€<span>+ VAT</span></h1>
							<h4 class="title">Pour une procédure habituellement facturée aux alentours de 800 euros TTC</h4>
						</div>
					</div>
				</div>

				<div class="col-md px-0 py-md-4 before-last" onclick="location.href='https://maitredufour.com/cabinet-maitre-dufour-avocat-permis-de-conduire/'">
					<div class="single-benefit">
						<div class="benefit-icon">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/sebastien-dufour-logo.png" />
						</div>
						<div class="benefit-desc">
							<h4 class="title">Un cabinet d’avocat<br/>réputé à votre service</h4>
						</div>
					</div>
				</div>

				<div class="col-md px-0 py-md-4">
					<div class="single-benefit">
						<div class="benefit-icon">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/nnca.png" />
						</div>
						<div class="benefit-desc">
							<h4 class="title">Une contestation a effectuer ou une question sur votre PV ?</h4>
							<p class="description">Contactez le Numéro National de la Contestation Automatisée</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
