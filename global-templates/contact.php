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

<div class="section" style="background: url('<?php echo get_template_directory_uri(); ?>/img/section-besoin-d-aide-web-reverse.jpg') center center;">
	<div class="container-fluid contact-block" id="wrapper-static-content" tabindex="-1"  >
		<div class="container">
			<div class="row contact-content">
				<div class="col-md-4">
					<h1>Besoin d’aide ?</h1>
					<p><span>Vous n’êtes pas sûr du produit correspondant à votre besoin. Notre équipe d’expert est disponible pour vous guider.</span></p>
					<a class="btn btn-lg btn-primary" href=""><span class="material-icons">call</span>Contactez-nous</a>
				</div>
			</div>
		</div>
	</div>
</div>
