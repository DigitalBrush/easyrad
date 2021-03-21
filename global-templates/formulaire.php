<?php
/**
 * Template Name: Formulaire Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<?php 
get_header();
?>

    <div class="formulaire-hero-image">
            
    <div class="hero-content">
        <nav class="hero-nav text-left">
            <a href="" class="some-text inline">Accueil</a>/
            <a href="" class="some-text inline">Contestation En Ligne</a>
            
        </nav>
       <h1 class="center">Contestation en ligne</h1>
        <p class="sm-text">Laissez-vous guider et validez votre contestation.</p>
        

        
        
    </div>
  </div>
  <div class="cointainer main-content">
    <div class="contestation">
        <div class="tab-wrapper">
            <div class="btn-group contestation-en-ligne" role="group" aria-label="Contestation-en-ligne">
                <button type="button" class="btn btn-md-primary active">1: Votre statut</button>
                <button type="button" class="btn btn-md-primary ">2: Consignation</button>
                <button type="button" class="btn btn-md-primary ">3: Contestation</button>
                <button type="button" class="btn btn-md-primary ">4: Paiement</button>
                <button type="button" class="btn btn-md-primary ">5: Confirmation</button>
              </div>
        </div>
        <div class="contestation-body">
            <div class="contestation-icon">
              <i class="fa fa-car fa-3x"></i>
            </div>
            <div class="contestation-content">
              <p class="h1 center">
                Votre avis de contravention est-il ?
              </p>
              <div class="btn-group contestation-en-ligne" role="group" aria-label="Contestation-Options">
                <button type="button" class="btn btn-md-primary ">Libellé au nom d’une société</button>
                <button type="button" class="btn btn-md-primary ">Libellé à mon nom</button>
              </div>
              <div class="contestation-control">
                <p class="some-text"><button type="button" class="btn btn-previous"><i class="fa fa-chevron-left"></i></button>Retour</p>
                <p class="some-text">Suivant<button type="button" class="btn btn-next"><i class="fa fa-chevron-right"></i></button></p>
                <button type="button" class="btn btn-previous mobile"><i class="fa fa-chevron-left"></i></button>
                <button type="button" class="btn btn-next mobile"><i class="fa fa-chevron-right"></i></button>
              </div>
            </div>
        </div>
    </div>


<?php
get_footer();
?>
