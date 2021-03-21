<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="footer">
              <div class="footer-cta">
                <p><button type="button" class="btn btn-md-primary"><p class="sm-button-text">Un souci, une question ?</p></button>
                <i class="fa fa-facebook-square fa-1x"></i>
                <i class="fa fa-twitter-square fa-1x"></i></p>
                <p class="some-text">&#169; Copyright 2021 EasyRad
                  conditions générales de service mentions légales</p>
              </div>
              <div class="lg-footer">
                <div class="row lg-footer-wrapper">
                  <div class="col-md-3 col-12">
                    <p class="h1">Contestation</p>
                    <a class="some-text" href="#">Radars automatiques</a>
                    <a class="some-text" href="#">Vidéo verbalisations</a>
                    <a class="some-text" href="#">Votre procédure</a>
                    <a class="some-text" href="#">
                      Avocat permis de conduire</a>
                  </div>
                  <div class="col-md-3 col-12">
                    <p class="h1">Vos Droits</p>
                    <a class="some-text" href="#">Conducteur non identifié</a>
                    <a class="some-text" href="#">
                      La consignation obligatoire</a>
                    <a class="some-text" href="#">Salariés désignés</a>
                    <a class="some-text" href="#">Obligations des employeurs</a>
                  </div>
                  <div class="col-md-3 col-12">
                    <p class="h1">INFOS LÉGALES</p>
                    <a class="some-text" href="#">Conditions générales de service</a>
                    <a class="some-text" href="#">
                      Paiement</a>
                    <a class="some-text" href="#">Charte de confidentialité et cookies</a>
                    <a class="some-text" href="#">Mentions légales</a>
                  </div>
                  <div class="col-md-3 col-12">
                    <div class="card">
                      <div class="card-header">
                        <p class="some-text"><i class="fa fa-credit-card"></i><br>
                          PAIEMENT 100% SÉCURISÉ PAR HIPAY
                        </p>
                      </div>
                      <div class="card-body">
                        <form>
                          <input type="radio" id="visa" name="PaymentMethod" value="visa"/>
                          <label for="visa"><i class="fa fa-cc-visa"></i></label><br>
                          <input type="radio" id="masterCard" name="PaymentMethod" value="masterCard"/>
                          <label for="masterCard"><i class="fa fa-cc-mastercard"></i></label><br>
                          <input type="radio" id="payPal" name="PaymentMethod" value="payPal"/>
                          <label for="payPal"><i class="fa fa-paypal"></i></label><br>
                          <input type="radio" id="google" name="PaymentMethod" value="google"/>
                          <label for="google"><i class="fa fa-google"></i></label><br>
                        </form>
                      </div>
                      <div class="card-footer">
                        <button type="button"class="btn btn-md-primary">
                          <p class="sm-button-text">Continuez</p></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
       
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/src/js/custom.js"></script>
</body>

</html>

