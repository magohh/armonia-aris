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

		<img class="img-back-shape" src="<?php echo THEMEPATH; ?>assets/img/shape_dot_grid_light.svg" alt="">

		<div class="pt-5 text-center">
			<img src="<?php echo THEMEPATH; ?>assets/img/step_2.svg" alt="">
		</div>

		<section class="bg-img-sec-2st">
			<div class="container">
				<div class="row text-center pt-5 position-relative">
					<div class="col-12 mb-4">
						<h2 class="h1 big mb-3"><img class="d-block mx-auto mx-md-0 ml-md-n5 mr-md-4 d-md-inline" src="<?php echo THEMEPATH; ?>assets/img/about_icon_sm.svg">Choose a date</h2>
						<p class="bold kearning-3 mb-3 text-uppercase">And Time</p>
					</div>
				</div>

				<!-- Bookining Calendar -->
				<?php echo do_shortcode('[CPABC_APPOINTMENT_CALENDAR calendar="1"]'); ?>

			</div>
		</section>

	</main><!-- #main -->


<?php
// get_sidebar();
get_footer();
