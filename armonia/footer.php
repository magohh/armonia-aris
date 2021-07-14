<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Armonia
 */

?>

	<footer id="colophon" class="site-footer border-top">
		<div class="container">
			<div class="border-bottom py-3 mb-4">
				<img class="my-4" src="<?php echo THEMEPATH; ?>assets/img/logo_armonia_muted.svg">

				<?php if ( !is_page('home') &&  !is_page('about') ){?>

					<div class="float-right">
						<img class="mr-2" src="<?php echo THEMEPATH; ?>assets/icons/instagram.svg">
						<img src="<?php echo THEMEPATH; ?>assets/icons/facebook.svg">
					</div>

				<?php }else{ ?>

					<div class="row">
						<div class="col-12 col-lg-6 d-none d-lg-inline-block mb-5">
							<h4 class="text-secon">Disclaimer</h4>
							<p class="text-secondary">The statements made or services provided through this website or by the Company are not intended to diagnose, treat, cure or prevent any disease. Testimonials regarding the technology are voluntarily given and do not represent the opinions of the Company. The services provided by the Company are not intended to be a substitute for professional medical advice, diagnosis, or treatment.</p>
						</div>
						<div class="col-md-4 col-lg offset-lg-1 mb-5">
							<p class="bold kearning-3 mb-3 text-uppercase">Website Map</p>
							<a href="" class="d-block medium text-secondary mb-2">Home</a>
							<a href="" class="d-block medium text-secondary mb-2">Harmonic Egg</a>
							<a href="" class="d-block medium text-secondary mb-2">E - Shop</a>
							<a href="" class="d-block medium text-secondary mb-2">Contact Us</a>
						</div>
						<div class="col-md-4 col-lg mb-5">
							<p class="bold kearning-3 text-uppercase">Contact us</p>
							<p class="medium text-secondary">(303) 513 - 3697</p>
							<div>
								<img class="mr-2" src="<?php echo THEMEPATH; ?>assets/icons/instagram.svg">
								<img src="<?php echo THEMEPATH; ?>assets/icons/facebook.svg">
							</div>
						</div>
						<div class="col-12 col-lg-6 d-block d-lg-none mb-5">
							<h4 class="text-secon">Disclaimer</h4>
							<p class="text-secondary">The statements made or services provided through this website or by the Company are not intended to diagnose, treat, cure or prevent any disease. Testimonials regarding the technology are voluntarily given and do not represent the opinions of the Company. The services provided by the Company are not intended to be a substitute for professional medical advice, diagnosis, or treatment.</p>
						</div>
					</div>

				<?php } ?>

			</div>

			<!-- <div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'armonia' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'armonia' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'armonia' ), 'armonia', '<a href="http://underscores.me/">Underscores.me</a>' );
					?>
			</div> --><!-- .site-info -->
			<div class="site-info medium text-muted">
				<span>&copy;<?php echo date('Y'); ?></span>
				<span class="pb-5">Armonia. All rights reserved.</span>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->


<!-- jQuery first, then Popper.js, then Custom JS -->
<script src="<?php echo JSPATH; ?>ajax-jquery-3.5.1.min.js"></script>
<script src="<?php echo JSPATH; ?>bootstrap.bundle.min.js"></script>
<script src="<?php echo JSPATH; ?>functions.js"></script>

<?php wp_footer(); ?>

</body>
</html>
