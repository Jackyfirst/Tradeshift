 <?php
/*
Template Name: RFI - Assa Abloy
*/
get_header('rfi-assa-abloy'); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<main class="main-content rfi-page coop-page">
		<?php the_content(); ?>

			<div id="reports-more" class="reports-more" data-offset="77">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Learn more about Tradeshift from the experts</h2>
							<a href="http://downloads.tradeshift.com/Reframing%20Maturity%20Models_tradeshift.pdf" target="_blank" class="contents-wrapper">
								<img class="img-responsive" src="https://tradeshift.com/wp-content/themes/Tradeshift/img/rfi/coop/learn-spend-matters.png" />
								<h3>Spend Matters</h3>
								<p><strong>Reframing Maturity Models:</strong> Empirical Perspectives On Radically Improving Procurement Performance</p>
							</a>
							<a href="http://downloads.tradeshift.com/6000179_v5.pdf" target="_blank" class="contents-wrapper hackett">
								<img class="img-responsive" src="https://tradeshift.com/wp-content/themes/Tradeshift/img/rfi/coop/learn-hackett.png" />
								<h3>Hackett</h3>
								<p><strong>Procurement's Role in Enabling Enterprise Agility</strong></p>
							</a>
							<a href="https://tradeshift.com/resources/supplier-onboarding-sim-world/" target="_blank" class="contents-wrapper">
								<img class="img-responsive" src="https://tradeshift.com/wp-content/themes/Tradeshift/img/rfi/coop/learn-hackett2.png" />
								<h3>Hackett</h3>
								<p><strong>Supplier Onboarding in a SIM World</strong></p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</main>
		<script>
		// Scrollspy Bootstrap JS plugin
		// ---------------------------------------------------
		$('body').scrollspy({
		target: '#navbar',
		offset: 66
		});

		// Carousel UI
		// -------------------------------------------
		// Tradeshift in Action carousel
		// 
		$(document).ready(function() {
			$("#demos-mockup-xs").owlCarousel({
			  items: 1,
			  autoPlay: 6000,
			  stopOnHover: true,
			  lazyLoad: false,
			  lazyFollow: true,
			  lazyEffect: "fade",
			});

			$("#demos-mockup-carousel").owlCarousel({
			  items: 1,
			  autoPlay: 6000,
			  stopOnHover: true,
			  lazyLoad: false,
			  lazyFollow: true,
			  lazyEffect: "fade",
			  itemsDesktop : [4000,1],
			  itemsDesktopSmall : [1199,1],
			  itemsTablet: [768,1],
			  itemsTabletSmall: false,
			  itemsMobile : [479,1],
			});
		});
		</script>
	<?php endwhile; ?>
	<?php else: ?>
		<div>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</div>
	<?php endif; ?>
<?php get_footer(); ?>


<script type="text/javascript" id="vidyard_embed_code_zmBwQhBK7t8Ezgas13koVw" src="//play.vidyard.com/zmBwQhBK7t8Ezgas13koVw.js?v=3.1.1&type=lightbox"></script>

<div class="outer_vidyard_wrapper"><div class="vidyard_wrapper" onclick="fn_vidyard_zmBwQhBK7t8Ezgas13koVw();"><img width="360" src="//play.vidyard.com/zmBwQhBK7t8Ezgas13koVw.jpg?" alt="Tradeshift Vesuvius Group"><div class="vidyard_play_button"><a href="javascript:void(0);"></a></div></div></div>