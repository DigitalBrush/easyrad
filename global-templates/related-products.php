<?php
/**
 * Related Products
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">
	<div class="page-section categories-other">
		<div class="row">


			<div class="col-md-12">
      <?php

        woocommerce_output_related_products();
        /**
         * Hook: woocommerce_after_single_product_summary.
         *
         * @hooked woocommerce_output_product_data_tabs - 10
         * @hooked woocommerce_upsell_display - 15
         * @hooked woocommerce_output_related_products - 20
         */

        ?>
      </div>
			
		</div>
    <div class="text-center">
			<a class="btn btn-lg btn-secondary" href="">Voir plus (12)</a>
		</div>
	</div>
</div>

