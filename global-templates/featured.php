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
						<div class="benefit-icon">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/ecommerce-logos.png" />
						</div>
						<div class="benefit-desc">
							<h4 class="title">100% sécurisé</h4>
							<p class="description">par HIPAY</p>
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
							<h4 class="title">4.7/5</h4>
							<p class="description">avis de nos clients</p>
						</div>
					</div>
				</div>

				<div class="col-md px-0 featured">
					<div class="single-benefit">
						
						<div class="benefit-desc">
							<h1 class="title price">54€</h1>
							<p class="description">seulement de forfait honoraire</p>
						</div>
						<div class="benefit-icon">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/easyrad-logo.svg" />
						</div>
					</div>
				</div>

				<div class="col-md px-0 py-md-4 before-last">
					<div class="single-benefit">
						<div class="benefit-icon">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/sebastien-dufour-logo.png" />
						</div>
						<div class="benefit-desc">
							<h4 class="title">Un cabinet d’avocat</h4>
							<p class="description">réputé à votre service</p>
						</div>
					</div>
				</div>

				<div class="col-md px-0 py-md-4">
					<div class="single-benefit">
						<div class="benefit-icon">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/antai-francasise-logo.png" />
						</div>
						<div class="benefit-desc">
							<h4 class="title">Pas d’engagement</h4>
							<p class="description">de votre part</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
