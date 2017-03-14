	<section id="header">

		<header id="masthead" class="site-header container" role="banner">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/header.png" alt="header" class="header-image">

			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ood' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->


			<div class="byline">
				<h3><?php the_field('header_byline'); ?></h3>
			</div>

		</header><!-- #masthead -->
		
		<div class="barbedwire one"></div>
		<div class="barbedwire two"></div>
		<div class="barbedwire three"></div>

	</section>