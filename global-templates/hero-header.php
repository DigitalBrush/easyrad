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
    <div class="row hero-header">
      <div class="col-sm-5">
        <div class="hero-text">
          <?php the_custom_logo(); ?>
          <h1>N°1 de la <span>contestation radar en ligne </span>depuis 17 ans</h1>
          <p class="sm-text">Protégez votre permis de conduire et sauvez vos points !</p>
          <button class="btn btn-primary"><p class="button-text">Je conteste en ligne</p></button>
        </div>
      </div>
    </div>
	</div>
