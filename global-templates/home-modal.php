<?php
/**
 * Homepage Popup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

	?>

<div class="modal fade" id="homeModal" tabindex="-1" role="dialog" aria-labelledby="homeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/modal-image.jpg"/>
      </div>
      <div class="modal-footer">
        <a class="btn btn-lg btn-primary" href=""><span class="material-icons">call</span>Contactez-nous</a>
        <p>pour en profiter</p>
      </div>
    </div>
  </div>
</div>
