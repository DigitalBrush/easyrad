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

        <?php $num=get_option('service_num'); for($i=1;$i<$num;$i++):?>

          <div class="col-sm-12">
            <div class="service-block">
              <div class="service-image">
                <img src="<?php echo get_option('s_img'.$i);?>">
              </div>

              <div class="service-cta">
                <a class="btn btn-lg btn-primary" href="" target="_blank">En savoir plus</a>
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
