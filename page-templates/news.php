<?php
/**
 * Template Name: Latest News Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

?>

	<?php get_template_part( 'global-templates/page-header' );?>
<div class="wrapper" id="full-width-page-wrapper" >


	<div class="<?php echo esc_attr( $container ); ?> section-blogs" id="content">

		<div class="row" >

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main" >

					<?php 
					// the query
					$the_query = new WP_Query( array(
						//'category_name' => 'news',
						'posts_per_page' => 10,
					)); 
					?>

					<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="col-md-4">
						<div class="single-blog">
							<div class="blog-image">
								<?php the_post_thumbnail('full'); ?>
							</div>
							<div class="blog-desc">
								<div class="blog-category"><?php the_category(); ?></div>
								<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<div class="description"><?php the_excerpt(); ?></div>
								<a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la suite</a>
							</div>
						</div>
					</div>
						
						
						

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>

					<?php else : ?>
					<p><?php __('No News'); ?></p>
					<?php endif; ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();