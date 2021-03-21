<?php
/**
 * The Home-page
 *
 * 
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<?php 
get_header();
//get_template_part('global-templates/home-modal'); //pending styling setup
?>
          <?php 
              get_template_part( 'global-templates/hero' );
              get_template_part( 'page-templates/brief' );

          ?>

            <header>
                <h1 class="h1 center">La presse en parle</h1>
                <?php 
                    get_template_part( 'global-templates/video-carousel' ); 
                
                ?>
              <div class="La-presse-en-parle">
                
                <!--<div class="row video-row">
                  <div class="col-md-1 col-0">
                    <button type="button" class="btn btn-previous"><i class="fa fa-chevron-left fa-2x"></i></button>
                  </div>
                  <div class="col-md-3 col-12">
                    <div class="card row video-card">
                      <div class="col-4 ">
                        <iframe class="thumb-nail"src="https://www.youtube.com/embed/2uhoFemQhdA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                      </div>
                      <div class="col-6 content"><p class="sm-heading">Video Title</p><p class="sm-video-text">Video Description</p></div>
                      <div class="col-2">
                        <button type="button" class="btn btn-play"><i class="fa fa-play"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-12">
                    <div class="card row video-card">
                      <div class="col-4 ">
                        <iframe class="thumb-nail"src="https://www.youtube.com/embed/2uhoFemQhdA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                      </div>
                      <div class="col-6 content"><p class="sm-heading">Video Title</p><p class="sm-video-text">Video Description</p></div>
                      <div class="col-2">
                        <button type="button" class="btn btn-play"><i class="fa fa-play"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-12">
                    <div class="card row video-card">
                      <div class="col-4 ">
                        <iframe class="thumb-nail"src="https://www.youtube.com/embed/2uhoFemQhdA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                      </div>
                      <div class="col-6 content"><p class="sm-heading">Video Title</p><p class="sm-video-text">Video Description</p></div>
                      <div class="col-2">
                        <button type="button" class="btn btn-play"><i class="fa fa-play"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-1 col-0">
                    <button type="button" class="btn btn-next"><i class="fa fa-chevron-right fa-2x"></i></button>
                  </div>
                </div>-->
                <div class="row mission" id="mission">
                  <div class="mission-card">
                    <img src="http://localhost/wordpress/wp-content/uploads/2021/03/mission-card-1.png"/>
                    <h2 class="secondary-heading">QUELLE EST NOTRE MISSION ?</h2>
                    <p class="some-text">Notre Cabinet d’Avocats gère pour vous l’intégralité des formalités juridiques et vous représente en justice.
                    </p>
                    <button class="btn btn-md-primary"><p class="sm-button-text"> la Suite</p></button>
                  </div>
                  <div class="mission-card">
                    <img src="http://localhost/wordpress/wp-content/uploads/2021/03/mission-card-2.png"/>
                    <h2 class="secondary-heading">QUELS SONT LES RISQUES ENCOURUS ?</h2>
                    <p class="some-text">Entamer une procédure judicaire n’est pas anodin. Il peut exister des désagréments qu’il faut connaître.
                    </p>
                    <button class="btn btn-md-primary"><p class="sm-button-text"> la Suite</p></button>
                  </div>
                  <div class="mission-card">
                    <img src="http://localhost/wordpress/wp-content/uploads/2021/03/mission-card-3.png"/>
                    <h2 class="secondary-heading">QUAND FAUT-IL UTILISER EASYRAD ?
                    </h2>
                    <p class="some-text">Vous hésitez à contester votre contravention ? Voici nos conseils pour protéger efficacement votre permis !
                    </p>
                    <button class="btn btn-md-primary"><p class="sm-button-text"> la Suite</p></button>
                  </div>
                </div>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon fill="white" points="0,100 100,0 100,100"/>
              </svg>
            </header>
            <div class="counter">
              <div class="counter-elements">
                <div class="hr"></div>
                <div class="counter-numbers">
                  <div class="count">
                    <p class="h0">8</p>
                  </div>
                  <div class="count">
                    <p class="h0">2</p>
                  </div>
                  <div class="count">
                    <p class="h0">7</p>
                  </div>
                  <div class="count">
                    <p class="h0">2</p>
                  </div>
                  <div class="count">
                    <p class="h0">6</p>
                  </div>
                </div>
                <p class="red-heading">POINTS CONTESTES AU19/01/2021 </p>
              </div>
            </div>
            <div class="certifies">
              <div class="certifies-wrapper">
                <h1 class="certifies-title h1">
                  Des avis certifiés
                </h1>
                <div class="hr"></div>
                <div class="some-text">
                  Le site avis vérifié (contrairement à google, trust pilot, etc) permet de n’avoir que des avis de clients réels. <br>C’est la source d’avis la plus fiable.
                </div>
                <div class="row-wrapper">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="http://localhost/wordpress/wp-content/uploads/2021/03/certifies-1.png" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                        <i class="fa fa-user-circle fa-5x"></i>
                        <p class="h0">Customer 1</p>
                        <p class="h3">Customer Title</p><br>
                        <p class="some-text">EasyRad est la société la plus authentique sur le défi Radar ...</p>
                      </div>
                    </div>
                  </div>
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="http://localhost/wordpress/wp-content/uploads/2021/03/certifies-2.png" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                        <i class="fa fa-user-circle fa-5x"></i>
                        <p class="h0">Customer 2</p>
                        <p class="h3">Customer Title</p><br>
                        <p class="some-text">EasyRad est la société la plus authentique sur le défi Radar ...</p>
                      </div>
                    </div>
                  </div>
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="http://localhost/wordpress/wp-content/uploads/2021/03/certifies-3.png" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                        <i class="fa fa-user-circle fa-5x"></i>
                        <p class="h0">Customer 3</p>
                        <p class="h3">Customer Title</p><br>
                        <p class="some-text">EasyRad est la société la plus authentique sur le défi Radar ...</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="header">
              
              <div class="conducteur">
                <h1 class="h1 center" id="rights">Connaissez-vous vos droits ?</h1>
                <div class="row mission" >
                  <div class="mission-card">
                    <img src="http://localhost/wordpress/wp-content/uploads/2021/03/conducteur-1.png"/>
                    <h2 class="secondary-heading">CONDUCTEUR NON IDENTIFIÉ</h2>
                    <p class="some-text">Si le conducteur en infraction n’est pas identifié, aucune perte de points ni suspension de permis ne peut lui être appliquée.
                    </p>
                    <button class="btn btn-md-primary"><p class="sm-button-text"> la Suite</p></button>
                  </div>
                  <div class="mission-card">
                    <img src="http://localhost/wordpress/wp-content/uploads/2021/03/conducteur-2.png"/>
                    <h2 class="secondary-heading">CONSIGNATION OBLIGATOIRE</h2>
                    <p class="some-text">De nombreux automobilistes oublient de consigner et leurs contestations sont irrecevables, ne tombez pas dans le piège. 
                    </p>
                    <button class="btn btn-md-primary"><p class="sm-button-text"> la Suite</p></button>
                  </div>
                  <div class="mission-card">
                    <img src="http://localhost/wordpress/wp-content/uploads/2021/03/conducteur-3.png"/>
                    <h2 class="secondary-heading">VOUS AVEZ ÉTÉ DÉNONCÉ</h2>
                    <p class="some-text">Votre employeur vous a désigné comme le conducteur en infraction. Pas de panique, il est facile de protéger votre permis
                    </p>
                    <button class="btn btn-md-primary"><p class="sm-button-text"> la Suite</p></button>
                  </div>
                  <div class="mission-card">
                    <img src="http://localhost/wordpress/wp-content/uploads/2021/03/conducteur-4.png"/>
                    <h2 class="secondary-heading">OBLIGATIONS DES EMPLOYEURS</h2>
                    <p class="some-text">Votre entreprise a été destinataire d’un avis de contravention et vous ne connaissez ou ne voulez pas donner l’identité du conducteur</p>
                    <button class="btn btn-md-primary"><p class="sm-button-text"> la Suite</p></button>
                  </div>
                </div>
              </div>
              <div class="nos-actulites">
                <h1 class="h1 center">Nos actualités  </h1>
                <div class="row-actulites">
                  <div class="col-1-actulites">
                    <i class="fa fa-th-large fa-3x"></i>
                  </div>
                  <div class="col-2-actulites">
                    <i class="fa fa-th-large fa-3x"></i>
                  </div>
                  <div class="col-3-actulites">
                    <i class="fa fa-th-large fa-3x"></i>
                  </div>
                </div>
              </div>
              <div class="fondateur">
                <div class="row-fondateur">
                  <div class="col-md-6 col-12 fondateur-img">
                    <img src="http://localhost/wordpress/wp-content/uploads/2021/03/fondateur-img.png"/>
                  </div>
                  <div class="col-md-6 col-12 fondateur-inner">
                    <p class="h1">Le mot du fondateur</p>
                    <p class="some-text">« Easyrad est pour moi l’accomplissement de 14 années de combat judiciaire contre ces radars : permettre enfin à tous les automobilistes de pouvoir se défendre contre ce racket automatisé ! »</p>
                    <button class="btn btn-md-primary"><p class="sm-button-text">En savoir plus</p></button>
                  </div>
                </div>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon fill="white" points="0,100 100,0 100,100"/>
              </svg>

            </div>
            <div class="row partners">
              <div class="col-md-2 col-6 partner-logo">
                <img src="http://localhost/wordpress/wp-content/uploads/2021/03/logo-lepoint-sourcepoint.png" alt="LePoint"/>
              </div>
              <div class="col-md-2 col-6 partner-logo">
                <img src="http://localhost/wordpress/wp-content/uploads/2021/03/logo-lerepaire.png" alt="Lerepaire"/>
              </div>
              <div class="col-md-2 col-6 partner-logo">
                <img src="http://localhost/wordpress/wp-content/uploads/2021/03/logo-ouest-france.png" alt="ouestFrance"/>
              </div>
              <div class="col-md-2 col-6 partner-logo">
                <img src="assets/logochallenges.svg" alt="ChallengeS"/>
              </div>
              <div class="col-md-2 col-6 partner-logo">
                <img src="assets/logo-LeParisien.svg" alt="leParisien"/>
              </div>
              <div class="col-md-2 col-6 partner-logo">
                <img src="http://localhost/wordpress/wp-content/uploads/2021/03/logo-largus.fr-lg.png" alt="largus"/>
              </div>
            </div>
            
            <?php 
                get_template_part( 'global-templates/pre-footer' ); 
                get_footer();
            ?>