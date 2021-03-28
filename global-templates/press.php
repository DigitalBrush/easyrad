<?php
/**
 * Press Section
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

	<div class="container-fluid section-press" tabindex="-1">
		<div class="container">
			<h2 class="section-title">La presse en parle</h2>
			<div class="row owl-carousel owl-theme press-carousel">
				<div class="col-sm-12">
					<div class="row press-row">
						<div class="col-sm-5 press-content">
							<div class="press-text">
								<div class="text-body">
									<p class="quote">EasyRad has already saved 30,000 points and this only seems to be the beginning because at the end of 2018 France will have 100 more radars than in 2017.</p>
									<h4>22/04/18</h4>
								</div>
							</div>
							<div class="channel-block">
								<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/press/press-automoto.png" />
							</div>
						</div>
						<div class="col-sm-7 video-block">
							<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://easyrad-85d9.kxcdn.com/wp-content/themes/easy-rad/video/automoto-22-04-2018-cut.mp4.mp4"></iframe>
						</div>
					</div>
				</div>

				<div class="col-sm-12">
					<div class="row">
						<div class="press-row">
							<div class="col-sm-5 press-content">
								<div class="press-text">
									<div class="text-body">
										<p class="quote">Depuis 2003, cet avocat mène une véritable croisade anti-radar et il prend un malin plaisir à faire annuler les pertes de points de ses clients.</p>
										<h4>19/11/17</h4>
									</div>
								</div>
								<div class="channel-block">
									<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/press/press-ee-m6.jpg" />
								</div>
							</div>
							<div class="col-sm-7 video-block">
								<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://easyrad-85d9.kxcdn.com/wp-content/themes/easy-rad/video/enquete-exclusive-sequence-easyrad.mp4"></iframe>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-12">
					<div class="row press-row">
						<div class="col-sm-5 press-content">
							<div class="press-text">
								<div class="text-body">
									<p class="quote">EasyRad peut vous permettre de contester vos avis de contraventions et vous éviter selon les cas le paiement de l’amende. Une procédure simple et rapide pour économiser ses points</p>
									<h4>09/07/17</h4>
								</div>
							</div>
							<div class="channel-block">
								<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/press/press-capital-m6.jpg" />
							</div>
						</div>
						<div class="col-sm-7">
							<div class="video-block">
								<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://easyrad-85d9.kxcdn.com/wp-content/themes/easy-rad/video/export-capital.mp4"></iframe>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
