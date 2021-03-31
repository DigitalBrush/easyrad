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
			<div class="row section-why">

				<div class="col-md-4">
					<div class="single-why">
						<div class="why-image">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/why-easyrad.jpg" />
						</div>
						<div class="why-desc">
							<h3 class="title">Quelle Est Notre Mission ?</h3>
							<p class="description">Notre Cabinet d’Avocats gère pour vous l’intégralité des formalités juridiques et vous représente en justice.</p>
							<a href="http://doctaroo.fr/sites/easyrad/notre-mission/" target="_blank" class="btn btn-primary">Lire la suite</a>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="single-why">
						<div class="why-image">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/why-contract.jpg" />
						</div>
						<div class="why-desc">
							<h3 class="title">Quels sont les risques encourus ?</h3>
							<p class="description">Entamer une procédure judicaire n’est pas anodin. Il peut exister des désagréments qu’il faut connaître.</p>
							<a href="http://doctaroo.fr/sites/easyrad/faqs/" target="_blank" class="btn btn-primary">Lire la suite</a>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="single-why">
						<div class="why-image">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/why-questions.jpg" />
						</div>
						<div class="why-desc">
							<h3 class="title">Quand faut-il utiliser EasyRad ?</h3>
							<p class="description">Vous hésitez à contester votre contravention ? Voici nos conseils pour protéger efficacement votre permis !</p>
							<a href="http://doctaroo.fr/sites/easyrad/faqs/" target="_blank" class="btn btn-primary">Lire la suite</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
