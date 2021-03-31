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

	<div class="container-fluid section-rights">
		<div class="container page-section">
		<h2 class="section-title">Connaissez-vous vos droits ?</h2>
			<div class="row">
				<div class="col-md-3">
					<div class="single-rights">
						<div class="rights-image">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/post-thumbnail-1.jpg" />
						</div>
						<div class="rights-desc">
							<h3 class="title">CONDUCTEUR NON IDENTIFIÉ</h3>
							<p class="description">Si le conducteur en infraction n’est pas identifié, aucune perte de points ni suspension de permis ne peut lui être appliquée.</p>
							<a href="http://doctaroo.fr/sites/easyrad/vos-droits/conducteur-non-identifie/" target="_blank" class="btn btn-primary">Lire la suite</a>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="single-rights">
						<div class="rights-image">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/post-thumbnail-4.jpg" />
						</div>
						<div class="rights-desc">
							<h3 class="title">CONSIGNATION OBLIGATOIRE</h3>
							<p class="description">De nombreux automobilistes oublient de consigner et leurs contestations sont irrecevables, ne tombez pas dans le piège.</p>
							<a href="http://doctaroo.fr/sites/easyrad/vos-droits/la-consignation-obligatoire/" target="_blank" class="btn btn-primary">Lire la suite</a>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="single-rights">
						<div class="rights-image">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/post-thumbnail-3.jpg" />
						</div>
						<div class="rights-desc">
							<h3 class="title">Vous avez été dénoncé</h3>
							<p class="description">Votre employeur vous a désigné comme le conducteur en infraction. Il est très facile de protéger votre permis de conduire.</p>
							<a href="http://doctaroo.fr/sites/easyrad/vos-droits/salaries-designes/" target="_blank" class="btn btn-primary">Lire la suite</a>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="single-rights">
						<div class="rights-image">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/post-thumbnail-8.jpg" />
						</div>
						<div class="rights-desc">
							<h3 class="title">OBLIGATIONS DES EMPLOYEURS</h3>
							<p class="description">Votre entreprise a été destinataire d’un avis de contravention et vous ne connaissez ou ne voulez pas donner l’identité du conducteur.</p>
							<a href="http://doctaroo.fr/sites/easyrad/vos-droits/obligations-des-employeurs/" target="_blank" class="btn btn-primary">Lire la suite</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
