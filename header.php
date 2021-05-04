<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Exo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flip.min.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'easyrad' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-lg navbar-dark" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'easyrad' ); ?>
			</h2>
			
			<div class="container-fluid h-100 p-0">
				
				<div class="row header-bar">
					<div class="col-lg-1 col-md-8 col-sm-6 col-8 logo-bar">
						<div class="toggler-button d-lg-none d-flex">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'easyrad' ); ?>">
							<span class="material-icons">menu</span>
							</button>	
						</div>
						<div class="brand">
							<!-- Your site title as branding in the menu -->
							<?php if ( ! has_custom_logo() ) { ?>

							<?php } else {
							the_custom_logo();
							} ?><!-- end custom logo -->
						</div>
						
					</div>
					

						
					<div class="col-lg-6 nav-block order-lg-1 order-md-2 order-2">
						<!-- The WordPress Menu goes here -->
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => 'collapse navbar-collapse',
								'container_id'    => 'navbarNavDropdown',
								'menu_class'      => 'navbar-nav',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'depth'           => 2,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						);
						?>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-4 col-4 icons-top  order-lg-2 order-md-1 order-1">
						<div class="why-top flex-fill d-sm-flex d-none">
							<a href="<?php echo esc_url( home_url( '/faqs' ) ); ?>"><span class="material-icons">help</span></a>
						</div>
						<div class="contact-top flex-fill">
							<span class="material-icons">call</span>
						</div>
						<div class="client-area flex-fill">
							<a class="lrm-login" href="<?php echo esc_url( home_url( '/espace-client' ) ); ?>"><span class="material-icons">person</span></a>
						</div>
						<div id="contactnumber" class="row number-overlay" onclick="location.href='tel:0890102030'">
							<div class="number">
								<div class="header-contact"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/nnca.png" width="50"/> 0 890 10 20 30</div>
								<div class="fine-print">Service 0,80 €/min + prix appel</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 cta-top d-lg-flex d-none order-lg-1 order-md-2 order-2">
						<a class="btn btn-primary btn-conteste" href="<?php echo esc_url(home_url('/produits/contestation/contestation-en-ligne/')); ?>">Je conteste en ligne</a>
					</div>
				</div>
				
			<?php if ( 'container' === $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
