<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Armonia
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			// get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.

		global $post;
		$thumbID = get_post_thumbnail_id( $post->ID );
		$imgDestacada = wp_get_attachment_url( $thumbID );
		
		?>

<!-- Hero Image Punchline -->
		<div class="parallax" style="background-image: url('<?php echo $imgDestacada; ?>');">
			<div class="container h-100">
				<div class="row h-100">
					<div class="col col-lg-6 d-flex align-items-end align-items-md-center">
						<div class="pb-5 pb-lg-0">
							<h1 class="text-white biggest mb-4">Advanced Energy Healing</h1>
							<p  class="text-white medium text-lg-right pr-lg-5 mb-4">A unique, patented chamber created to promote mental, emotional, physical, and spiritual healing and wellness.</p>
							<a href="<?php echo SITEURL?>/book" class="d-inline-block btn btn-primary px-4 py-2 semibold w-100 col-lg-8">
								<span class="lead semibold">Book now</span>
								<svg class="align-top ml-3" xmlns="http://www.w3.org/2000/svg" width="28.305" height="27.288" viewBox="0 0 28.305 27.288"><path d="M3.564,22.379l19.5-8.357a1.118,1.118,0,0,0,0-2.056L3.564,3.61A1.109,1.109,0,0,0,2.011,4.627L2,9.777a1.111,1.111,0,0,0,.972,1.106l15.786,2.112-15.786,2.1A1.13,1.13,0,0,0,2,16.212l.011,5.15A1.109,1.109,0,0,0,3.564,22.379Z" transform="translate(-3.49 8.825) rotate(-30)" fill="#fff"/></svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- /Hero Image Punchline-->

<!-- Description -->
		<section class="bg-img-sec-1st">
			<div class="container">
				<div class="row py-5">
					<div class="col-12 col-md-6">
						<img class="d-block mw-100 mx-auto mt-3 mt-md-0 mb-5 mb-md-0" src="<?php echo THEMEPATH; ?>assets/img/harmonic_egg.png">
					</div>
					<div class="col-12 col-md-6 d-flex align-items-center">
						<div>
							<p class="bold kearning-3 mb-3 text-uppercase">What is </p>
							<h2 class="h1 big mb-3">Harmonic Egg</h2>
							<p class="mb-3">The Harmonic Egg is a unique, patented chamber created to promote mental, emotional, physical, and spiritual healing and wellness.</p>
							<a href="<?php echo SITEURL?>/book" class="d-inline-block btn btn-primary px-4 py-2 semibold w-100 col-lg-8"><span class="lead semibold">Book now</span></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="bg-img-sec-2st">
			<div class="container">
				<div class="row py-5">
					<div class="col-12 col-md-6 d-block d-sm-none">
						<img class="mw-100 mx-auto mb-5" src="<?php echo THEMEPATH; ?>assets/img/harmonic_egg_2.png">
					</div>
					<div class="col-12 col-md-6 d-flex align-items-center">
						<div>
							<p class="bold kearning-3 mb-3 text-uppercase">Harmonic Egg</p>
							<h2 class="h1 big mb-3">How it works with your body?</h2>
							<p class="mb-3">The Harmonic Egg is a unique, patented chamber created to promote mental, emotional, physical, and spiritual healing and wellness.</p>
							<a href="<?php echo SITEURL?>/book" class="d-inline-block btn btn-primary px-4 py-2 semibold w-100 col-lg-8"><span class="lead semibold">Book now</span></a>
							<p class="pt-5 medium">See more <a href="<?php echo SITEURL; ?>about">Harmonic Egg</a></p>
						</div>
					</div>
					<div class="col-12 col-md-6 d-none d-sm-block">
						<img class="mw-100 m-auto" src="<?php echo THEMEPATH; ?>assets/img/harmonic_egg_2.png">
					</div>
				</div>
			</div>
		</section>
<!-- /Description -->

<!-- Benefits -->
		<section>
			<div class="container py-5">
				<h3 class="h1 big text-center mb-5">How can help you</h3>
				<div class="row text-center">
					<div class="col-6 col-md-4 col-lg">
						<img class="w-100 d-block mb-2" src="<?php echo THEMEPATH; ?>assets/img/item1.png">
						<p class="bold text-dark my-4">Anxiety & Stress</p>
					</div>
					<div class="col-6 col-md-4 col-lg">
						<img class="w-100 d-block mb-2" src="<?php echo THEMEPATH; ?>assets/img/item2.png">
						<p class="bold text-dark my-4">Illness & Disease</p>
					</div>
					<div class="col-6 col-md-4 col-lg">
						<img class="w-100 d-block mb-2" src="<?php echo THEMEPATH; ?>assets/img/item3.png">
						<p class="bold text-dark my-4">Injuries & Pain</p>
					</div>
					<div class="col-6 col-md-4 col-lg">
						<img class="w-100 d-block mb-2" src="<?php echo THEMEPATH; ?>assets/img/item4.png">
						<p class="bold text-dark my-4">Mental Clarity</p>
					</div>
					<div class="col-6 col-md-4 col-lg">
						<img class="w-100 d-block mb-2" src="<?php echo THEMEPATH; ?>assets/img/item5.png">
						<p class="bold text-dark my-4">Anxiety & Stress</p>
					</div>
					<div class="col-6 col-md-4 col-lg">
						<img class="w-100 d-block mb-2" src="<?php echo THEMEPATH; ?>assets/img/item6.png">
						<p class="bold text-dark my-4">Pet Health</p>
					</div>
				</div>
			</div>
		</section>
<!-- /Benefits -->

<!-- Newsletter -->
	<?php get_template_part('template-parts/newsletter'); ?>

	</main><!-- #main -->


<?php
// get_sidebar();
get_footer();
