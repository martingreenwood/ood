<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ood
 */

?>

	<section id="newsletter">
		<div class="container">


			<?php 
			gravity_form_enqueue_scripts('1', true);
			gravity_form('1', false, false, false, '', true, 1); 
			?>

			<div class="social">
				<ul>
					<li><a href="https://twitter.com/Outofdarkness16"><i class="fa fa-twitter"></i></a></li> |
					<li><a href="mailto:info@out-of-darkness.co.uk">info@out-of-darkness.co.uk</a></li>
				</ul>

			</div>

		</div>
	</section>


	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<div class="container">

			<div class="left">
				<h3>&copy; Jenny Kagan <?php echo date('Y'); ?></h3>
			</div>

			<div class="middle">
				<h3>New Website Coming Soon</h3>
			</div>

			<div class="right">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/art.png" width="175" alt="">
			</div>

		</div>

	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
