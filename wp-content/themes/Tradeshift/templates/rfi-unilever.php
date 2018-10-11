 <?php
/*
Template Name: RFI - Unilever
*/
get_header('rfi-unilever'); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<main class="main-content rfi-page unilever-page">
			<?php the_content(); ?>
		<div id="expert-reports" class="expert-reports" data-offset="77">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Learn more about Tradeshift from the experts</h2>
						<a href="http://mailtemplates.s3.amazonaws.com/TaxReformAndComplianceInChina4.1.pdf" target="_blank" class="contents-wrapper">
							<img class="img-responsive" src="https://tradeshift.com/wp-content/themes/Tradeshift/img/rfi/unilever/tax-reform.png" />
							<h4>Tax Reform and Compliance in China</h4>
							<p>A comprehensive overview on what you need to know and what to do.</p>
							<p class="cta">Download PDF</p>
						</a>
						<a href="https://tradeshift.com/wp-content/uploads/2015/01/Tradeshift_Casestudy_Shippinglogistics-1.pdf" target="_blank" class="contents-wrapper hackett">
							<img class="img-responsive" src="https://tradeshift.com/wp-content/themes/Tradeshift/img/rfi/unilever/global.png" />
							<h4>Global Transportation and Logistics Leader on Path to 100% Automatic Invoice Processing</h4>
							<p>(Customer Success Case Study)</p>
							<p class="cta">Download PDF</p>
						</a>
						<script type="text/javascript" id="vidyard_embed_code_3VORJ3aArsKUthEmObyaPA" src="//play.vidyard.com/3VORJ3aArsKUthEmObyaPA.js?v=3.1.1&type=lightbox"></script>
						<a onclick="fn_vidyard_3VORJ3aArsKUthEmObyaPA();" class="contents-wrapper">
							<img class="img-responsive" src="https://tradeshift.com/wp-content/themes/Tradeshift/img/rfi/unilever/fact-fiction.png" />
							<h4>Fact or Fiction:</h4>
							<p>You can manage all your supplier information, transactions, and risk in one place!</p>
							<p class="cta">Watch video</p>
						</a>
					</div>
				</div>
			</div>
		</div>
		<script>
			// Scrollspy Bootstrap JS plugin
			// ---------------------------------------------------
			$('body').scrollspy({ target: '#navbar', offset: 66});

			// Carousel UI
			// -------------------------------------------
			// Tradeshift in Action carousel
			$(document).ready(function() {
			  $("#demos-mockup-carousel").owlCarousel({
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
		</script>
		</main>
	<?php endwhile; ?>
	<?php else: ?>
		<div>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</div>
	<?php endif; ?>
<?php get_footer(); ?>