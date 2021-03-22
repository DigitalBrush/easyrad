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

	<div class="container-fluid section-points" tabindex="-1">
		<div class="container">
			<div class="row points-row">
				<div class="col-sm-12 points-counter">
					<div class="tick" data-value="85422" data-did-init="setupFlip">
						<div data-repeat="true">
							<span data-view="flip"></span>
						</div>
					</div>
					<h3 class="text-heading">POINTS CONTESTES AU <?php echo date("d/m/Y"); ?></h3>
				</div>
			</div>
		</div>
	</div>
