<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ood
 */

?>

	<section id="info">
		<div class="container">

			<h3><?php the_field('date'); ?></h3>

		</div>
	</section>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="container">
		
			<div class="column">
				<?php the_field('column_one'); ?>
			</div>
		
			<div class="column">
				<?php the_field('column_two'); ?>
			</div>

		</div>

	</article>