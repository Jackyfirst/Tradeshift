 <?php
/*
Template Name: RFI - PG
*/
get_header('rfi-pg'); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<main class="main-content rfi-page pg-page">
	<?php the_content(); ?>
		<div id="reports-more" class="reports-more" data-offset="77">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Learn more about Tradeshift from the experts</h2>
						<a href="http://downloads.tradeshift.com/Reframing%20Maturity%20Models_tradeshift.pdf" target="_blank" class="contents-wrapper">
							<img class="img-responsive" src="https://tradeshift.com/wp-content/themes/Tradeshift/img/rfi/pg/learn-spend-matters.png" />
							<h3>Spend Matters</h3>
							<p><strong>Reframing Maturity Models:</strong> Empirical Perspectives On Radically Improving Procurement Performance</p>
						</a>
						<a href="http://downloads.tradeshift.com/6000179_v5.pdf" target="_blank" class="contents-wrapper hackett">
							<img class="img-responsive" src="https://tradeshift.com/wp-content/themes/Tradeshift/img/rfi/pg/learn-hackett.png" />
							<h3>Hackett</h3>
							<p><strong>Procurement's Role in Enabling Enterprise Agility</strong></p>
						</a>
						<a href="https://tradeshift.com/resources/supplier-onboarding-sim-world/" target="_blank" class="contents-wrapper">
							<img class="img-responsive" src="https://tradeshift.com/wp-content/themes/Tradeshift/img/rfi/pg/learn-hackett2.png" />
							<h3>Hackett</h3>
							<p><strong>Supplier Onboarding in a SIM World</strong></p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</main>
	<div id="mktoRTPNull"> </div>
	<script>
		// Scrollspy Bootstrap JS plugin
		// ---------------------------------------------------
		$('body').scrollspy({ target: '#navbar', offset: 66});

		// Carousel UI
		// -------------------------------------------
		// Tradeshift in Action carousel
		$(document).ready(function() {
		  $("#demos-mockup-carousel-xs").owlCarousel({
		    items : 1,
		    autoPlay : 6000,
		    stopOnHover: true,
		    itemsDesktop : [2540,1],
		    itemsDesktopSmall : [1199,1],
		    itemsTablet: [768,1],
		    itemsTabletSmall: false,
		    itemsMobile : [479,1],
		    lazyLoad : false,
		    lazyFollow : true,
		    lazyEffect : "fade",
		  });
		});

		$(document).ready(function() {
		  $("#demos-mockup-carousel").owlCarousel({
		    items : 1,
		    autoPlay : 6000,
		    stopOnHover: true,
		    itemsDesktop : [1200,1],
		    itemsDesktopSmall : [992,1],
		    itemsTablet: [768,1],
		    itemsTabletSmall: false,
		    itemsMobile : [479,1],
		    lazyLoad : false,
		    lazyFollow : true,
		    lazyEffect : "fade",
		  });
		});
	</script>
<?php endwhile; ?>
<?php else: ?>
	<div>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</div>
<?php endif; ?>
<?php
	wp_deregister_script('main');
	wp_deregister_script('legacyScript');
	wp_deregister_script('contact-form-7');
	wp_deregister_script('analytics');
	wp_deregister_style('contact-form-7');
	wp_dequeue_script('segmentio');
	get_footer('rfi');
?>