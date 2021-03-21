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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"> 
	<script src="https://kit.fontawesome.com/524828f6ad.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/524828f6ad.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>


	<!-- ******************* The Navbar Area ******************* -->
	<nav class="navbar fixed navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="aligner"><button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="true" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
            <i class="fa fa-times close"></i>
          </button>
          <a class="navbar-brand navbar-logo" href="http://localhost/wordpress/"><img src="http://localhost/wordpress/wp-content/uploads/2021/03/logo-1@2x.png" class="nav-logo"/></a>
          <a class="phone-icon" href="tel:0890102030"><i style="color: red;"class="fa fa-phone-square fa-2x"></i></a></div>
          <div class="break"></div> 
          <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Contestation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#rights">Vos Droits</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#mission">Notre mission</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Actualités.html">Actualites</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Espace client</a>
              </li>
              
            </ul>
            <button onclick="location.href='tel:0890102030'" class="btn btn-phone"><i style="display: inline-block;" class="fa fa-phone-square fa-2x"></i><span class="button-sub-text"><strong class="phone-no">0 890 10 20 30</strong><br/>Service 0,80 €/min + prix appel</span></button>
            <button onclick="location.href='Formulaire.html'" class="btn btn-secondary "><p class="button-text">Je conteste en ligne</p></button>
          </div>
        </div>
      </nav>
	  <div class="container-fluid">
