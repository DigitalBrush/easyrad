<?php
/**
 * brief-home page
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>
<div class="row easy-rad-brief">
              <div class="col-md-6 col-12 brief">
                <h1 class="h1">Easy Rad en bref</h1>
                <div class="hr"></div>
                <p class="some-text">
                  EasyRad est le premier site internet à proposer la contestation en ligne des infractions relevées par radars automatiques et vidéo-verbalisation !<br>

                  Vous ne savez pas comment protéger votre permis de conduire et ne pas perdre vos points ? EasyRad le fait pour vous !<br>

                  Découvrez notre service en vidéo.
                </p>
                <button class="btn btn-primary"><p class="button-text">En Savoir plus</p></button>
              </div>
              <div class="col-md-6 col-12 asset">
                <iframe width="720px"height="405px" src="https://www.youtube.com/embed/2uhoFemQhdA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
              </div>
            </div>