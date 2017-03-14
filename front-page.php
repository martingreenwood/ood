<?php
/**
 * The template for displaying the static homepage
 *
 * @package ood
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'front-page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<section id="video">
		<div class="container">
			<div class="videoWrapper">
			<?php the_content(); ?>
			</div>
		</div>
	</section>

<?php
get_footer();
