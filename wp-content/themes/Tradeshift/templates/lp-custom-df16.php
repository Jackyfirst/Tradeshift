<?php
/*
* Template Name: Landing Page - Custom: Dreamforce 2016
*/ 
get_header('lp-df'); ?>
	<main class="main-content lp-df">
		<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
		<div id="heroTrigger" class="hero">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div id="heroFormBlock" class="contents-copy">
							<h2>Welcome to the Tradeshift Pirate Ship</h2>
							<p>Because innovation has long come from misfits</p>
							<div class="form-block">
								<button id="heroMainCtaEnterpriseHome" class="btn btn-primary-cta btn-gold" data-toggle="modal" data-target="#mktoRSVP">Come Aboard!</button>
							</div>
						</div>
						<div class="contents-image hidden-xs">
							<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/lp-custom/df16/hero-pirate-ship-min.png">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="valueProp" class="value-proposition">
			<a name="get-full-report"></a>
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Ahoy maties,</h2>

						<h3>The Tradeshift Pirate Ship is the place to meet your mates, relax, and recharge during Dreamforce.</h3>

						<p>A two-minute walk from Dreamforce, you’ll find comfy chairs, meeting spaces, complimentary coffee to fuel your Dreamforce experience, and free drinks during happy hour for a little social lubrication. And we may be pirates but we’ll have more than just rum!</p>

						<p>Or, maybe you need a break from the Dreamforce brain dump? There’s also foosball, ping pong, a puppy room, and a vintage arcade game downstairs.</p>

					</div>
				</div>
				<div class="row">
					<div class="contents">
						<h3>Chart a course to the Tradeshift Pirate Ship</h3>
						<?php if (is_mobile()): ?>
						<p>Static Map</p>
						<?php else: ?>
						<iframe width="100%" height="450" frameborder="0" style="border:0; margin: 11px 0 44px" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyA6QucDnC3xsjzdpfbEbNyLufqDxuEjJN4&origin=Moscone+Center+San+Francisco+California&destination=Tradeshift+612+Howard+Street+San+Francisco+California" allowfullscreen>
						</iframe>
						<?php endif; ?>
					</div>
				</div>
				<div class="row">
					<div class="contents">
						<h3>We’ll be here from 10:00am to 6:00pm<br />Tuesday the 4th, through Thursday the 6th.</h3>
						<ul>
							<li>Tons of networking spaces and comfy places to relax</li>
							<li>Complimentary coffee daily</li>
							<li>Happy hour daily from 4-6pm</li>
							<li>Breakfast bites in the am, snacks in the afternoon, apps during the happy hour</li>
							<li>Dreamforce keynote sessions projected on our two 4 ½ ft x 8 ft projector screens</li>
							<li>Bookable meeting spaces—limited to a half hour</li>
							<li>Free high-speed wifi</li>
							<li>Phone charging stations</li>
						</ul>
						<p>So, who is the Tradeshift Pirate Ship for? You—the movers, shakers, disruptors, and innovators doing business with the renegade spirit.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="resources">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Wondering what the Pirate Ship looks like?</h2>
						<div class="content-resource">
							<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/lp-custom/df16/pirate-ship.jpg">
						</div>
						<div class="content-resource">
							<img class="img-responsive" src="<?= $resources2_image; ?>">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="ctaBar" class="cta-bar" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
			<div class="container">
				<div class="row">
					<div id="ctaBottomBar" class="contents">
						<div class="form-block">
							<button id="heroMainCtaEnterpriseHome" class="btn btn-primary-cta btn-gold" data-toggle="modal" data-target="#mktoRSVP">Come Aboard!</button>
							<span class="hidden-xs">P.S. Please show your Dreamforce badge to board the Tradeshift Pirate Ship.</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footerCta" class="footer-cta">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>App developer? We’re throwing you a party!<br />Join us <a href="/dreamforce2016-party">Monday night</a> <i class="fa fa-angle-double-right"> </i></h2>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php
	wp_deregister_script('main');
	wp_deregister_script('legacyScripts');
	wp_deregister_script('contact-form-7');
	wp_deregister_style('contact-form-7');
	get_footer('lp-df');
?>