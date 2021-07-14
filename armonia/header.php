<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Armonia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Stylesheets Armonia Theme -->
	<link rel="stylesheet" href="<?php echo CSSPATH; ?>styles.css" type="text/css"/>

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'armonia' ); ?></a> -->

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<!-- <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$armonia_description = get_bloginfo( 'description', 'display' );
			if ( $armonia_description || is_customize_preview() ) :
				?> -->
				<!-- <p class="site-description"><?php echo $armonia_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p> -->
			<!-- <?php endif; ?> -->
		</div><!-- .site-branding -->

		<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom row m-0">
			<div class="navbar-brand col-8 col-md-3 col-lg-2" href="#"><?php
			the_custom_logo(); ?></div>

			<?php if ( !is_page('home') &&  !is_page('about') ){?>
				<!-- No options avalible -->
			<?php }else{ ?>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="col collapse navbar-collapse" id="navbarNav">
				<div class="w-100 text-center text-lg-right">
					<?php if ( is_page('about') ){?>
						<a href="<?php echo SITEURL?>about" class="d-block d-lg-inline-block py-3 py-lg-0 mr-lg-5 bold text-body">
							Harmonic Egg
							<svg class="d-block m-auto" width="40" height="4" viewBox="0 0 40 4"><rect width="40" height="4" rx="2" fill="#00a9ad"/></svg>
						</a>
					<?php }else{ ?>
						<a href="<?php echo SITEURL?>/about" class="d-block d-lg-inline-block py-3 py-lg-0 mr-lg-5 medium text-body">Harmonic Egg</a>
					<?php } ?>
					<a class="d-block d-lg-inline-block py-3 py-lg-0 mr-lg-5 medium text-body">E-Shop</a>
					<a class="d-block d-lg-inline-block py-3 py-lg-0 mr-lg-5 medium text-body">Book Now</a>
					<a href="<?php echo SITEURL?>book" class="d-block d-lg-inline-block py-3 py-lg-1 px-4 btn btn-primary semibold">Book now</a>
				</div>

			<?php } ?>
		</nav>

	<!-- 	<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'armonia' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav> --><!-- #site-navigation -->
	</header><!-- #masthead -->
