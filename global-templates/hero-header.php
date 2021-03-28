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
    <div class="row hero-header" style="background-image: url(<?php echo get_option('hero_header_img');?>); background-size: cover; background-repeat: no-repeat;">
      <div class="col-xl-7 col-lg-12 col-md-9 col-12">
        <div class="hero-text">
          <?php the_custom_logo(); ?>
          <h1 class="big-heading">N°1 de la <span>contestation radar en ligne </span>depuis 17 ans</h1>
          <p class="small-heading">Protégez votre permis de conduire et sauvez vos points !</p>
          <a class="btn btn-lg btn-primary">Je conteste en ligne</a>
        </div>
      </div>
    </div>
	</div>
