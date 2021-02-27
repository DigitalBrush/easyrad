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

		<div class="container-fluid" id="wrapper-static-content" tabindex="-1">

			<div class="row hero-header">
				<div class="col-sm-6 hero-text">
					<div class="slider-text">
						<h1 class="big-heading"><?php echo get_option('hero_intro_heading');?></h1>
						<div class="slider-body">
							<p class=""><?php echo get_option('hero_intro_text');?></p>
							<a href="<?php echo esc_url(home_url('shop')); ?>" class="btn btn-lg btn-secondary">Acheter maintenant</a>
						</div>
						<h4 class="small-heading"><?php echo get_option('hero_intro_subheading');?></h4>
					</div>
				</div>
				<div class="col-sm-6 hero-image">
					<div class="slider-image">
						<img src="<?php 
						$attachmentID = get_option('media_selector_attachment_id');
						$imageSizeName = "full";
						$img = wp_get_attachment_image_src($attachmentID, $imageSizeName); 
						echo $img[0];
						?>" style="width:100%"/>
					</div>
				</div>
			</div>

	</div>
