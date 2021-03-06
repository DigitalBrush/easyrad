<?php
/**
 * Brief about EasyRad
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

	<div class="container-fluid bg-gray section-founder" tabindex="-1">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 order-sm-1 order-2 founder-image">
					<div class="image-block">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/maitre-dufour.png" />
					</div>
				</div>
				<div class="col-sm-6 order-sm-2 order-1 founder-content">
					<div class="founder-text">
						<h2 class="text-heading">Sébastien Dufour,<br/><span>Avocat au barreau de PARIS et fondateur d’EasyRad</span></h2>
						<div class="text-body">
							<p>Easyrad est pour moi l’accomplissement de 14 années de combat judiciaire contre ces radars : permettre enfin à tous les automobilistes de pouvoir se défendre contre ce racket automatisé !</p>
							<a href="https://maitredufour.com/cabinet-maitre-dufour-avocat-permis-de-conduire/" target="_blank" class="text-link">En savoir plus maitredufour.com</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
