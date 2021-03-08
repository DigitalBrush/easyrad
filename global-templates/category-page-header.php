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

			<div class="page-header" style="background: url('<?php 
					$attachmentID = get_option('media_selector_attachment_id');
					$imageSizeName = "full";
					$img = wp_get_attachment_image_src($attachmentID, $imageSizeName); 
					echo $img[0];
					?>'); background-size: cover; background-repeat: no-repeat;">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="header-text">
								<h1 class="headline"><?php echo single_term_title(''); ?></h1>
								<p class="header-intro">Porte blindée, alarme, vidéo surveillance, coffre-fort, grille de defense... Alcof protège ce que vous avez de plus cher.</p>
							</div>
						</div>
					</div>
				</div>

	</div>
