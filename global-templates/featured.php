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

<div class="row cards">
                <div class="card one col-md-2 col-12">
				  	<div class="benefit-icon">
					  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/home-icons/home-icon-price.svg" />
					</div>
                <div class="col-md-12 col-8">
                    <p class="card-title">54€ seulement</p>
                    <p class="sm-text">de forfait honoraire</p>
                </div>
                  </div>
                  <div class="card two col-md-2 col-12">
				  <div class="benefit-icon">
				  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/home-icons/home-icon-secure.svg" /></div>
                    <div class="col-md-12 col-8">
                      <p class="card-title">100% sécurisé</p>
                      <p class="sm-text">par HIPAY</p>
                    </div>
                  </div>
                  <div class="card three col-md-2 col-12">
				  <div class="benefit-icon">
				  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/home-icons/home-icon-rating.svg" /></div>
                    <div class="col-md-12 col-8">
                      <p class="card-title">4.7/5</p>
                      <p class="sm-text">avis de nos clients</p>
                    </div>
                  </div>
                  <div class="card four col-md-2 col-12">
				  <div class="benefit-icon">
				  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/home-icons/home-icon-justice.svg" /></div>
                    <div class="col-md-12 col-8">
                      <p class="card-title">Un cabinet d’avocat</p>
                      <p class="sm-text">réputé à votre service</p>
                    </div>
                  </div>
                  <div class="card five col-md-2 col-12">
				  <div class="benefit-icon">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/home-icons/home-icon-simple.svg" />
						</div>
                    <div class="col-md-12 col-8">
                      <p class="card-title">Pas d’engagement</p>
                      <p class="sm-text">de votre part</p>
                    </div>
                  </div>
                </div>