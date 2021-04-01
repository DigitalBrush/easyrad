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



<div class="wrapper footer-bottom" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-6">

					<div class="footer-cta">

						<a href="<?php echo esc_url(home_url('contact')); ?>" class="btn btn-primary"><span class="material-icons">help_outline</span>Un souci, une question ?</a>

					</div><!-- .site-info -->

			</div><!--col end -->
			<div class="col-md-6">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						&copy; <?php echo date("Y"); ?> EasyRad

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/src/js/custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/flip.min.js"></script>
</body>

</html>

