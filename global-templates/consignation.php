<?php
/**
 * Template Name: consignation
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
         <?php 
        get_header();
        get_template_part('global-templates/hero-header-consignation');
        get_template_part('page-templates/content-post-2-col');
        get_template_part('page-templates/quote');
        get_template_part('page-templates/content-post-2-col2');
        get_template_part('page-templates/voir-aussi');
        get_template_part('global-templates/pre-footer');
        get_footer();
        ?>

