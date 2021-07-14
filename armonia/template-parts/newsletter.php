<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Armonia
 */

?>

<section class="bg-img-sec-3st bg-primary py-5">
	<div class="container py-5">
		<div class="row">
			<div class="col">
				<h4 class="h1 biggest text-white">Suscribe to our Newsletter</h4>
				<p class="text-white">Recibe en tu correo las últimas actualizaciones y promociones de parte de Armonia</p>
				<?php echo do_shortcode( '[newsletter_form][newsletter_field name="email" placeholder="Email address"][/newsletter_form]' ); ?>
			</div>
			<div class="col d-flex">
				<img class="ml-auto align-self-end d-none d-md-block" src="<?php echo THEMEPATH; ?>assets/img/dot_grid_light.png">
			</div>
		</div>
	</div>
</section>
<!-- /Newsletter -->