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

	<div class="<?php echo esc_attr( $container ); ?> section-logos">
	<h2 class="section-title">Retrouvez nos articles</h2>
		<div class="page-section media">
		
			<div class="media-coverage">
				<?php echo do_shortcode('[gslogo id=2]'); ?>
			</div>
		</div>
	</div>
