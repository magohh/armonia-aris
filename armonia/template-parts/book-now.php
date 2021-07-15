<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Armonia
 */

?>

<?php if ( is_page('book') ){?>
	<img class="img-back-shape" src="<?php echo THEMEPATH; ?>assets/img/shape_dot_grid_light.svg" alt="">
<?php }else{ ?>
<?php } ?>	
	<section class="bg-img-sec-2st">
		<div class="container">
			<div class="row text-center py-5 position-relative">
				<div class="col-12 mb-4">
					<h2 class="h1 big mb-3"><img class="d-block mx-auto mx-md-0 ml-md-n5 mr-md-4 d-md-inline" src="<?php echo THEMEPATH; ?>assets/img/about_icon_sm.svg">Book now a session</h2>
					<p class="bold kearning-3 mb-3 text-uppercase">Choose the better for you</p>
				</div>
				<div class="w-100"></div>
				<div class="col-12 col-md-10 col-lg-7 mx-auto">
					<div class="row">
						<div class="col-12 col-md text-center mb-r">
							<div class="card-booking is-session">
								<p class="bold kearning-3 mb-0 pt-3 text-uppercase">One in Person</p>
								<h3 class="h2 text-primary border-bottom pb-4 mb-4">Session</h3>
								<p><span class="h1 text-primary">$</span><span class="h1 biggest text-primary">99</span><span class="h3">+tx.</span></p>
								<p class="light mb-5 pb-3">Regular $120 + tx.</p>
								<?php if ( !is_page('book') ){?>
									<a href="<?php echo SITEURL?>book" class="d-inline-block btn btn-primary px-4 py-2 semibold">
								<?php }else{ ?>
									<a href="<?php echo SITEURL?>in-person" class="d-inline-block btn btn-primary px-4 py-2 semibold">
								<?php } ?>
									<span class="lead semibold">Book now</span>
									<svg class="align-top ml-3" width="28.305" height="27.288" viewBox="0 0 28.305 27.288"><path d="M3.564,22.379l19.5-8.357a1.118,1.118,0,0,0,0-2.056L3.564,3.61A1.109,1.109,0,0,0,2.011,4.627L2,9.777a1.111,1.111,0,0,0,.972,1.106l15.786,2.112-15.786,2.1A1.13,1.13,0,0,0,2,16.212l.011,5.15A1.109,1.109,0,0,0,3.564,22.379Z" transform="translate(-3.49 8.825) rotate(-30)" fill="#fff"></path></svg>
								</a>

							</div>
						</div>
						<div class="col-12 col-md">
							<div class="card-booking is-distance-session">
								<p class="bold kearning-3 mb-0 pt-3 text-uppercase">One - Remote</p>
								<h3 class="h2 text-primary border-bottom pb-4 mb-4">Distance Session</h3>
								<p><span class="h1 text-primary">$</span><span class="h1 biggest text-primary">60</span><span class="h3">+tx.</span></p>
								<p class="light mb-5 pb-3">Regular $75 + tx.</p>
								<a href="<?php echo SITEURL?>remote"  class="d-inline-block btn btn-outline-primary px-4 py-2 semibold">
									<span class="lead semibold">Book now</span>
									<svg class="align-top ml-3" width="28.305" height="27.288" viewBox="0 0 28.305 27.288"><path d="M3.564,22.379l19.5-8.357a1.118,1.118,0,0,0,0-2.056L3.564,3.61A1.109,1.109,0,0,0,2.011,4.627L2,9.777a1.111,1.111,0,0,0,.972,1.106l15.786,2.112-15.786,2.1A1.13,1.13,0,0,0,2,16.212l.011,5.15A1.109,1.109,0,0,0,3.564,22.379Z" transform="translate(-3.49 8.825) rotate(-30)" fill="#00A9AD"></path></svg>
								</a>
							</div>
						</div>
					</div>
				</div>
				<img class="figure-img-deco py-5 d-none d-md-inline-block" src="<?php echo THEMEPATH; ?>assets/img/dot_grid_yellow.png" alt="grid dot">
				<p class="col-12 pt-5 light">You can book and pay in our website</p>
			</div>
		</div>
	</section>
<!-- /Book now-->