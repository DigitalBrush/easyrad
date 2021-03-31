<?php
/**
 * Latest News
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

	<div class="container-fluid section-blogs">
		<div class="container">
			<div class="row">
			<?php 
				// the query
				$the_query = new WP_Query( array(
					//'category_name' => 'news',
					'posts_per_page' => 3,
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
			</div>
		</div>
	</div>
