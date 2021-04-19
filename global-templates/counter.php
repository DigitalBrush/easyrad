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
		<h2 class="section-title">Easyrad en chiffres</h2>
		<h3 class="section-subtitle">Premier cabinet français en nombre de contestations effectuées chaque année.</h3>
			<div class="row points-row">
				<div class="col-sm-8 col-12 points-counter">
					<div class="tick" data-value="85422" data-did-init="setupFlip">
						<div data-repeat="true">
							<span data-view="flip"></span>
						</div>
					</div>
					<h4 class="text-heading">Ce chiffre correspond au nombre de point des infractions qu’EasyRad a contesté pour ses clients à la date du <?php echo date("d/m/Y"); ?></h4>
				</div>
			</div>
		</div>
	</div>
