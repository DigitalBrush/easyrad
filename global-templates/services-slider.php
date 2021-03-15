<?php
/**
 * Services Page Slider
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

	<div class="<?php echo esc_attr( $container ); ?> services-slider" id="wrapper-static-content" tabindex="-1">
		<div class="page-section">

			<div class="services-section">
        <div class="row owl-carousel owl-theme services-carousel">

          <div class="col-sm-12">
            <div class="service-block">
              <div class="service-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/repair-man-dark-bg-web.jpg">
              </div>

              <div class="service-cta">
                <a class="btn btn-lg btn-primary" href="">En savoir plus</a>
              </div>

              <div class="service-inner">
                <h4 class="service-title">Diagnostic sécurité</h4>
                <h6 class="service-subtitle">Un expert se déplace gratuitement</h6>
                <p>Nos consultants se déplaçent gratuitement et à votre convenance. Leur rôle sera essentiellement de vous conseiller dans le choix de votre dispositif de sécurité. Forts d'une solide expérience des aspects techniques, financiers et esthétiques de la protection, ils étudieront votre demande, analyseront votre cahier des charges ainsi que votre budget et sauront vous orienter vers la solution la mieux adaptée à votre besoin. N'hésitez pas nous consulter. </p>
              </div>
            </div>
          </div>

          <div class="col-sm-12">
            <div class="service-block">
              <div class="service-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/repair-man-dark-bg-web.jpg">
              </div>

              <div class="service-cta">
                <a class="btn btn-lg btn-primary" href="installation">En savoir plus</a>
              </div>

              <div class="service-inner">
                <h4 class="service-title">Installation</h4>
                <h6 class="service-subtitle">Un travail d’expert sur mesure</h6>
                <p>Pose de l’ensemble des produits de sécurité (serrure, porte-blindée, alarme, vidéo, sas etc.)</p>
              </div>
            </div>
          </div>

          <div class="col-sm-12">
            <div class="service-block">
              <div class="service-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/repair-man-dark-bg-web.jpg">
              </div>

              <div class="service-cta">
                <a class="btn btn-lg btn-primary" href="installation">En savoir plus</a>
              </div>

              <div class="service-inner">
                <h4 class="service-title">Serrurerie forte</h4>
                <h6 class="service-subtitle">Le plus important point fort fichet d’Europe.</h6>
                <p>La haute sécurité est assurée par les meilleurs fabriquants : Fichet, Guidotti, St-Gobain, Daitem. Notre équipe expérimentée de dessinateurs, techniciens et électromécaniciens réalise : </p>
                <ul>
                    <li>Conception et fabrication de sas</li>
                    <li>Installation de bloc de porte de sécurité </li>
                    <li>Pose miroiterie anti-effraction et pare-balle</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-sm-12">
            <div class="service-block">
              <div class="service-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/repair-man-dark-bg-web.jpg">
              </div>

              <div class="service-cta">
                <a class="btn btn-lg btn-primary" href="">En savoir plus</a>
              </div>

              <div class="service-inner">
                <h4 class="service-title">Diagnostic sécurité</h4>
                <h6 class="service-subtitle">Un expert se déplace gratuitement</h6>
                <p>Nos consultants se déplaçent gratuitement et à votre convenance. Leur rôle sera essentiellement de vous conseiller dans le choix de votre dispositif de sécurité. Forts d'une solide expérience des aspects techniques, financiers et esthétiques de la protection, ils étudieront votre demande, analyseront votre cahier des charges ainsi que votre budget et sauront vous orienter vers la solution la mieux adaptée à votre besoin. N'hésitez pas nous consulter. </p>
              </div>
            </div>
          </div>


          <?php $num=get_option('service_num'); for($i=1;$i<$num;$i++):?>

            <div class="col-sm-12">
              <div class="service-block">
                <div class="service-image">
                  <img src="<?php echo get_option('s_img'.$i);?>">
                </div>

                <div class="service-cta">
                  <a class="btn btn-lg btn-primary" href="">En savoir plus</a>
                </div>

                <div class="service-inner">
                  <h4 class="service-title"><?php echo get_option('sh'.$i);?></h4>
                  <h6 class="service-subtitle"><?php echo get_option('ssh'.$i);?></h6>
                  <p><?php echo get_option('sd'.$i);?></p>
                </div>
              </div>
            </div>
          <?php endfor;?>



        </div>
      </div>  
		</div>
	</div>
