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

		<div class="container-fluid" id="wrapper-static-content" tabindex="-1">

			<div class="row section-location">
				<div class="col-sm-6 location-content">
					<div class="location-text">
						<h3 class="text-heading"><span class="main-color">10 boutiques</span> en Ile-de-France, plus de <span class="main-color">1000m²</span> de showroom</h3>
						<div class="text-body">
							<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque enim numquam delectus.</p>
							<a href="<?php echo esc_url(home_url('shop')); ?>" class="btn btn-lg btn-primary"><span class="material-icons">near_me</span>Acheter maintenant</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 location-map">
					<div class="map-block">
						<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=point%20fichet%20paris+(Alcof%20Securite)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
					</div>
				</div>
			</div>
	</div>
