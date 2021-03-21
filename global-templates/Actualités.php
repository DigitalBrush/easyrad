<?php
/**
 * Template Name: Actualités Page
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
get_template_part('global-templates/hero-header-actualites');
?>
<div class="news-group">
    <?php
        get_template_part("page-templates/news-post");//stacked in three posts.
    ?>
    </div><!--close the news posts stack div-->
    <?php
        get_template_part("page-templates/news-post");//stacked in three posts.
    ?>
    </div><!--close the news posts stack div-->
</div><!--close the news-group div-->
<?php 
get_footer();
?>

