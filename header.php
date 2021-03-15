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
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'alcof' ); ?></a>

		<div class="top-nav">
			<div class="container-fluid">
				<div class="row top-bar d-md-flex d-none">
					<div class="col-lg-8 col-md-6 d-flex align-items-center">
						<div class="breadcrumbs-top">
							<?php echo do_shortcode("[show-breadcrumb]"); ?>
						</div>
					</div>
					<div class="col-lg-2 col-md-3">
						<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="search-form">
							<div class="input-group search-inputs">
								<input type="text" id="box" name="s" placeholder="Rechercher" class="search-box">
								<div class="input-group-append">
									<button type="submit" id="search-btn" class="btn search-icon"><span class="material-icons">search</span></button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-2 col-md-3 contact-top">
						<span class="material-icons">call</span>
						01 45 05 15 12
					</div>
				</div>
			</div>
		</div>

		<nav id="main-nav" class="navbar navbar-expand-lg navbar-dark" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'alcof' ); ?>
			</h2>
			
			<div class="container-fluid h-100">
				
				<div class="row header-bar h-100">
					<div class="col-lg-2 logo-bar">
						<div class="toggler-button d-lg-none d-flex">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'alcof' ); ?>">
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
						<div class="contact-top d-md-none d-flex">
							<span class="material-icons">call</span>
						</div>
						
					</div>
					

						
					<div class="col-lg-10 nav-block">
						<!-- The WordPress Menu goes here -->
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => 'collapse navbar-collapse',
								'container_id'    => 'navbarNavDropdown',
								'menu_class'      => 'navbar-nav ml-auto',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'depth'           => 2,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						);
						?>
					</div>
				</div>
			<?php if ( 'container' === $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
