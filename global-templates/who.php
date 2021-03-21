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

<div class="section section-who">
	<div class="container-fluid" id="wrapper-static-content" tabindex="-1">
		<div class="row who-block">
			<div class="col-md-6">
        <div class="about-text">
          <h2><?php echo get_option('who_header');?></h2>
          <p><?php echo get_option('who_details');?></p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="about-img">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/feature-un-travail-sur-mesure.jpg" />
        </div>
      </div>
		</div>
	</div>
</div>