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

	<div id="wrapper-static-content" tabindex="-1" >

		<div class="page-header" style="background: url('<?php  
				echo get_the_post_thumbnail_url();
				?>'); background-size: cover; background-repeat: no-repeat; background-position-y: center;">
			<div class="container">
				<div class="row header-row">
					<div class="col-sm-4">
						<div class="header-text">
							<h1 class="headline"><?php echo wp_title(''); ?></h1>
							<p class="header-intro"><?php the_excerpt(); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
