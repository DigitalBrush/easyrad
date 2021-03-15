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

		<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">
		<div class="page-section">
		
			<h2 class="section-title">Nos produits phares</h2>

			<div class="row category-section">

				  <?php

                    $taxonomy     = 'product_cat';
                    $orderby      = 'menu_order';  
                    $show_count   = 0;      // 1 for yes, 0 for no
                    $pad_counts   = 0;      // 1 for yes, 0 for no
                    $hierarchical = 1;      // 1 for yes, 0 for no  
                    $title        = '';  
                    $empty        = 1;
                    

                    $args = array(
                           'taxonomy'     => $taxonomy,
                           'orderby'      => $orderby,
                           'number'       => 4,
                           'show_count'   => $show_count,
                           'pad_counts'   => $pad_counts,
                           'hierarchical' => $hierarchical,
                           'title_li'     => $title,
                           'hide_empty'   => $empty
                    );
                   $all_categories = get_categories( $args );
               
                   foreach ($all_categories as $cat) {
                      if($cat->category_parent == 0) {
                          $category_id = $cat->term_id; ?>  


				<div class="col-md-3 col-sm-6">
					<div class="category">

            <div class="category-image">
              <?php
                $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );    
                $image = wp_get_attachment_url( $thumbnail_id ); 
              ?>
              <img src="<?php echo $image; ?>">
					  </div>

						<div class="category-inner">
							<h4><?php echo $cat->name; ?></h4>
							<p><?php echo $cat->description; ?></p>
						</div>
						
				  	</div>
                </div>
                  <?php

                          
                    }       
                  }
                  ?>

			</div>
      <div class="text-center">
        <a class="btn btn-lg btn-secondary" href="produits">Voir tous nos produits</a>
      </div>
		</div>
	</div>
