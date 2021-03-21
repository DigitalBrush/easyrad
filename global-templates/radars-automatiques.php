<?php
/**
 * Template Name: radar-automatiques
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
        get_template_part('global-templates/hero-header-radar');
        get_template_part('page-templates/content-post-col2');
        get_template_part('page-templates/content-post-col-reverse');
        get_template_part('page-templates/voir-aussi');
        get_template_part('global-templates/pre-footer');
        get_footer();
        ?>