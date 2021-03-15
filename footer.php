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

<div class="wrapper footer-cta" id="wrapper-footer">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row d-flex justify-content-center">
			<div class="col-md-6">
				<h2 class="section-title">Besoin d’un devis gratuit ?</h2>
				<div class="text-body">
					<p>La référence sécurité à Paris depuis 1985. Plus grand Point Fort Fichet d’Europe. 8 boutiques à Paris et en Ile-de-France.</p>
					<a href="<?php echo esc_url(home_url('contact')); ?>" class="btn btn-lg btn-primary"><span class="material-icons">call</span>Contactez-nous</a>
				</div>
			</div><!--col end -->
		</div><!-- row end -->
	</div><!-- row end -->
</div>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper footer-bottom" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						&copy; <?php echo date("Y"); ?> Alcof sécurité

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/src/js/custom.js"></script>
</body>

</html>

