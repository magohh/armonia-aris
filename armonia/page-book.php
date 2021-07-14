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

		<div class="pt-5 text-center">
			<img src="<?php echo THEMEPATH; ?>assets/img/step_1.svg" alt="">
		</div>
<!-- Book now -->
        <?php get_template_part('template-parts/book-now'); ?>


	</main><!-- #main -->


<?php
// get_sidebar();
get_footer();
