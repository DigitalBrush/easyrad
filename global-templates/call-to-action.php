<?php
/**
 * Call to action row
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

	<div class="container" id="wrapper-static-content" tabindex="-1">
		<div class="row section-cta">
			<div class="col-md-6">
				<h2 class="section-title">Protégez votre permis de conduire et sauvez vos points</h2>
				<div class="text-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna.</p>
					<a href="<?php echo esc_url(home_url('produits/contestation/contestation-en-ligne/')); ?>" class="btn btn-lg btn-primary">Je conteste en ligne</a>
				</div>
			</div><!--col end -->
		</div><!-- row end -->
	</div>
