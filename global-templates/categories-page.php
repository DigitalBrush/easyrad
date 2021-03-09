<?php
/**
 * Categories Page Top
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

		<div class="<?php echo esc_attr( $container ); ?> category-page" id="wrapper-static-content" tabindex="-1">
		<div class="page-section">
      <div class="category-search d-md-none d-block">
            <a href="<?php echo esc_url(home_url('shop')); ?>" class="btn btn-lg btn-primary"><span class="material-icons">search</span>Rechercher</a>
            <h6 class="left-dash">parmi 360 références</h6>
          </div>

			<div class="row category-section">
        <div class="col-md-4 col-sm-6 d-none d-md-block" id="searchdiv">
          <div class="category-search">
            <a href="<?php echo esc_url(home_url('shop')); ?>" class="btn btn-lg btn-primary"><span class="material-icons">search</span>Rechercher</a>
            <h6 class="left-dash">parmi 360 références</h6>
          </div>
        </div>

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
                           'show_count'   => $show_count,
                           'number'       => 5,
                           'pad_counts'   => $pad_counts,
                           'hierarchical' => $hierarchical,
                           'title_li'     => $title,
                           'hide_empty'   => $empty
                    );
                   $all_categories = get_categories( $args );
               
                   foreach ($all_categories as $cat) {
                      if($cat->category_parent == 0) {
                          $category_id = $cat->term_id; ?>  


				<div class="col-md-4 col-sm-6">
					<div class="category-block">

            <div class="category-image">
              <?php
                $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );    
                $image = wp_get_attachment_url( $thumbnail_id ); 
                $link = get_term_link( (int)$cat->term_id, 'product_cat' );
              ?>
              <img src="<?php echo $image; ?>">
					  </div>

						<div class="category-inner">
							<h4 class="category-title"><a href=<?php echo $link; ?>><?php echo $cat->name; ?></a></h4>
              <h6 class="product-count"><?php echo $cat->count; ?> Produits</h6>
							<p><?php echo $cat->description; ?></p>
						</div>
						
				  	</div>
                </div>
                  <?php

                          
                    }       
                  }
                  ?>

			</div>
		</div>
	</div>
