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

<?php
$category = get_queried_object();
$thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );    
$image = wp_get_attachment_url( $thumbnail_id ); 
?>

	<div id="wrapper-static-content" tabindex="-1">

		<div class="page-header" style="background: url('<?php echo $image; ?>'); background-size: cover; background-repeat: no-repeat;  background-position-y: center;">
			<div class="container">
				<div class="row header-row">
					<div class="col-sm-4">
						<div class="header-text">
							<h1 class="headline"><?php echo single_term_title(''); ?></h1>
							<p class="header-intro"><?php echo $category->description;?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
