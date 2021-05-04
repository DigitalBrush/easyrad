<?php
/**
 * Tutorial about EasyRad
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

	<div class="container-fluid section-tutorial">
		<div class="container">
			<div class="row ">
				<div class="col-sm-7 tutorial-content">
					<div class="tutorial-text">
						<h2 class="text-heading">Un doute ?</h2>
						<div class="text-body">
							<p>Un doute ? Retrouvez notre tuto en vidéo et ne faites aucune erreur !</p>
						</div>
					</div>
				</div>
				<div class="col-sm-5 tutorial-video">
					<div class="video-block">
						<video width="100%" height="100%" controls="true">
							<source src="https://easyrad-85d9.kxcdn.com/wp-content/themes/easy-rad/video/tutoriel-pv-particulier.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
		</div>
	</div>
