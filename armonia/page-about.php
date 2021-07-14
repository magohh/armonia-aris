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

<!-- CTA -->
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 d-flex align-items-center">
					<div>
						<img class="mb-3" src="<?php echo THEMEPATH; ?>assets/img/about_icon.svg">
						<p class="bold kearning-3 mb-3 text-uppercase">What is it</p>
						<h1 class="main mb-4">Harmonic Egg?</h1>
						<p class="mb-5">The Harmonic Egg is a wooden chamber designed to create an environment for deep relaxation and internal balance. As energy vibration builds within the chamber, it connects with the participant’s autonomic nervous system to allow the natural healing of mind, body, and spirit.</p>
						<a href="<?php echo SITEURL?>book" class="d-inline-block btn btn-primary px-4 py-2 semibold w-100 col-lg-6 mb-4"><span class="lead semibold">Book now</span></a>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<img class="mw-100 py-5 py-lg-0 mr-n5" src="<?php echo THEMEPATH; ?>assets/img/about_harmonic_egg.png">
				</div>
			</div>
		</div>
<!-- /CTA -->

<!-- Info -->
		<section class="bg-img-sec-4st">
			<div class="container p-5">
				<div class="row py-5">
					<div class="col col-md-8 col-lg-6 py-5 mx-auto text-center">
						<p class="bold kearning-3 mb-0 text-uppercase">At the</p>
						<h2 class="h1 mb-4">Life Center</h2>
						<p class="h5 regular">The original studio in Denver, more than 13,000 clients have experienced the Harmonic Egg since 2010. Typically, we find that 3 – 10 sessions will hold the cell memory/nervous system reset.</p>
					</div>
				</div>
			</div>
		</section>
<!-- /Info -->

<!-- Book now -->
<?php get_template_part('template-parts/book-now'); ?>

<!-- Newsletter -->
		<?php get_template_part('template-parts/newsletter'); ?>
	
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
