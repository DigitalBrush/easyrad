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

<div class="section section-reputation">
	<div class="container" id="wrapper-static-content" tabindex="-1">
    <h2 class="update-heading">Notre réputation n’est plus à faire</h2>
    <div class="row reputation-block">
      <div aria-orientation="vertical" class="col-md-5 col-sm-6 reputation-tabs nav flex-column nav-pills" id="reputationTab" role="tablist">
          <a aria-controls="trust" aria-selected="true" class="nav-link active" data-toggle="tab" href="#trust" id="trust-tab" role="tab">Ils nous font confiance</a> 
          <a aria-controls="press" aria-selected="true" class="nav-link" data-toggle="tab" href="#press" id="press-tab" role="tab">Parutions TV / Presse / Internet</a> 
          <a aria-controls="assurance" aria-selected="true" class="nav-link" data-toggle="tab" href="#assurance" id="assurance-tab" role="tab">Compagnie d’assurance agréé</a>
          <a aria-controls="apsad" aria-selected="true" class="nav-link" data-toggle="tab" href="#apsad" id="apsad-tab" role="tab">Certifications apsad/nf Service, NF et a2p</a>
          <a aria-controls="hospitality" aria-selected="true" class="nav-link" data-toggle="tab" href="#hospitality" id="apsad-tab" role="tab">Hospitalité et mode</a>
      </div>
      <div class="col-md-7 col-sm-6 tab-content" id="reputationTabOptions">
          <div aria-labelledby="trust-tab" class="tab-pane fade show active" id="trust" role="tabpanel">
              <div class="update-post">
                  <div class="form-body container-fluid">
                      <div class="row logo-list">
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-apple.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-ratp.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-mcdonalds.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-clarins.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-auchan.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-france-televisions.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-bnp-paribas.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-edf.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-merc.png" class="img-fluid">
                        </div>
                      </div>
                  </div>
              </div>
          </div>
          <div aria-labelledby="press-tab" class="tab-pane fade" id="press" role="tabpanel">
              <div class="update-post">
                  <div class="form-body container-fluid">
                      <div class="row logo-list">
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-france-televisions.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-apple.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-hp.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-amstrad.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-bic.png" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-fnac.png" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-sharp.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-mairie-de-paris.gif" class="img-fluid">
                        </div>
                      </div>
                  </div>
              </div>
          </div>
          <div aria-labelledby="assurance-tab" class="tab-pane fade" id="assurance" role="tabpanel">
              <div class="update-post">
                  <div class="form-body container-fluid">
                      <div class="row logo-list">
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-axa.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-swisslife.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-uap.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-euro-assurance.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-direct-assurance.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-caisse-epargne.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-assu-2000.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-allocation-familiales.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-groupama.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-gmf.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-generali.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-inter-mutuelles.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-maaf.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-macif.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-matmut.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-mma.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-mondial.gif" class="img-fluid">
                        </div>
                      </div>
                  </div>
              </div>
          </div>
          <div aria-labelledby="apsad-tab" class="tab-pane fade" id="apsad" role="tabpanel">
              <div class="update-post">
                  <div class="form-body container-fluid">
                      <div class="row logo-list">
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-certif-a2p-star.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-certif-a2p-shield.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-certif-cnpp.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-certif-apsad.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-certif-nf-service.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-certif-iso-9001.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-certif-twinband.gif" class="img-fluid">
                        </div>
                      </div>
                  </div>
              </div>
          </div>
          <div aria-labelledby="hospitality-tab" class="tab-pane fade" id="hospitality" role="tabpanel">
              <div class="update-post">
                  <div class="form-body container-fluid">
                      <div class="row logo-list">
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-mauboussin.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-clarins.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-chaumet.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-novotel.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-rolex.png" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-shangri-la.png" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-sofitel.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-havas-voyages.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-le-claridge.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-mont-blanc.png" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-puget.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-disney-land.gif" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-logos/logo-reference-brequet.gif" class="img-fluid">
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
	</div>
</div>