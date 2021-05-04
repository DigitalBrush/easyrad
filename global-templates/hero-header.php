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
      <div class="col-lg-7">
        <div class="hero-text">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/easyrad-logo-plain.svg" />
          <h1 class="big-heading">N°1 de la <span>contestation radar en ligne </span></h1>
          <a class="btn btn-lg btn-primary btn-conteste" href="<?php echo esc_url(home_url('/produits/contestation/contestation-en-ligne/')); ?>">Je conteste en ligne</a>
          <p class="small-heading">Protégez votre permis de conduire et sauvez vos points !</p>
        </div>
      </div>
    </div>
	</div>

