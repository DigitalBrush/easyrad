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
		<div class="page-section media">
			<div class="media-coverage">
				<h5 class="section-title mute">Vu à la télé</h5>
				<?php echo do_shortcode('[gslogo id=2]'); ?>
			</div>
		</div>
	</div>
