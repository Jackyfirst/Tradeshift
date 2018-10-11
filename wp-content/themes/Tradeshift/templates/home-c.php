 <?php
/*
Template Name: Home Page - Davos
*/
get_header(); ?>
		<!-- Main Content Starts -->
		<main class="main-content home-active">
			<!-- Hero Section -->
			<div id="home-hero-b" class="hero one-supplier-video">
				<div class="video-bg">
					<ul id="video-wrapper" class="hidden-xs">
						<li class="active"><img src="<?php echo get_template_directory_uri(); ?>/img/home/hero-bg-desktop2.jpg" /></li>
						<li><video id="trailer" autobuffer loop autoplay poster="<?php echo get_template_directory_uri(); ?>/img/misc/transparent.png">
								<source src="<?php echo get_template_directory_uri(); ?>/videos/brollv6-min.mp4" type="video/mp4" />
								<source src="<?php echo get_template_directory_uri(); ?>/videos/brollv6-min.webm" type="video/webm" />
							</video></li>
					</ul>
					<!-- TODO: optimize: server-side sniff to detect mobile viewport to render image below -->
					<ul class="visible-xs">
						<li class="active"><img src="<?php echo get_template_directory_uri(); ?>/img/home/hero-bg-xs.jpg" /></li>
					</ul>
				</div>
				<div class="container">
					<div class="row cta">
						<div  class="contents">
							<div class="intro-text-cta">
								<!-- Tagline ID serves as a landmark to toggle the promo banner view. Do not delete! -->
								<h1>All your suppliers.<br />All in one place.</h1>
								<h3>Transform the way you buy, pay, and work with suppliers.</h3>

								<button class="btn btn-video-track btn-play-secondary-cta hidden-xs" onclick="fn_vidyard_8qM$xEdKhaI4R8gJC_3SYw();">
									Watch our story
									<script type="text/javascript" id="vidyard_embed_code_8qM-xEdKhaI4R8gJC_3SYw" src="//play.vidyard.com/8qM-xEdKhaI4R8gJC_3SYw.js?v=3.1.1&type=lightbox"></script>
								</button>
								<button class="btn btn-video-track btn-play-home visible-xs" onclick="fn_vidyard_8qM$xEdKhaI4R8gJC_3SYw();">
									Watch our story
								</button>
								<button id="heroMainCtaHome" class="btn btn-primary-cta" data-toggle="modal" data-target="#mktoModal">Let's get started</button>
							</div>
						</div>
					</div>
					<div class="row case-studies">
						<div class="case-studies-container">
							<!-- These area uses non-clickable background image on smartphone view -->
							<?php get_template_part( 'components/hero', 'case-studies' ); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="supplier-platform">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2 class="default-lang-container">Finally. <span class="text-carousel"> </span><span class="typed-cursor"> </span> <br class="visible-xs" />supplier collaboration platform.</h2>
								<!-- Use this container if its for French -->
								<h2 class="french hidden">Enfin. Une plateforme <br class="visible-xs" />collaborative <span class="text-carousel-fr"> </span><span class="typed-cursor"> </span></h2>
							<p>Tradeshift connects buyers, suppliers, and all their processes in one global network. We help you transform the way you work with suppliers today – and adapt to whatever the future brings.</p>
							<!-- <p><a href="/about/vision">Learn more about our vision &raquo;</a></p> -->
						</div>
					</div>
				</div>
			</div>
			<div class="platform">
				<div class="container">
					<?php if (is_mobile()): ?>
						<!-- ID selector "rethink"  triggers the painting of force directed layout below | do not delete -->
						<div class="row" id="rethink"> </div>
					<?php endif; ?>
					<div class="row">
						<div class="contents">
							<div class="all-your-suppliers">
								<a href="http://tradeshift.com/supplier-onboarding/"><img src="<?php echo get_template_directory_uri(); ?>/img/home/icon-odometer.png" /></a>
								<h3><a href="http://tradeshift.com/supplier-onboarding/">All your suppliers</a></h3>
								<p>Onboard fast &amp; collaborate in real time with your entire network.</p>
							</div>
							<div class="powerful-platform">
								<img src="<?php echo get_template_directory_uri(); ?>/img/home/icon-platform.png" />
								<h3>Powerful Platform</h3>
								<p>Respond to your growing business needs with apps on our flexible, open platform.</p>
							</div>
							<div class="direct-indirect">
								<img src="<?php echo get_template_directory_uri(); ?>/img/home/icon-direct.png" />
								<h3>Direct &amp; Indirect</h3>
								<p>Manage more of your spend (including services) than ever before.</p>
							</div>
						</div>
					</div>
					<?php if (!is_mobile()): ?>
					<!-- ID selector "rethink"  triggers the painting of force directed layout below | do not delete -->
					<div class="row" id="rethink"> </div>
					<?php endif; ?>
				</div>
			</div>
			<div  class="rethink-business-svg">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Rethink the way you do business.</h2>
							<p>Tradeshift is redefining how buyers and suppliers work together. We believe that businesses succeed when they’re connected, collaborative, agile and data-driven. And we have the software to get you there.</p>
							<p class="touch-on visible-xs">Touch on the bubbles to explore more.</p>
							<img style="margin: 0 auto" src="<?php echo get_template_directory_uri(); ?>/img/home/hr-dots.png" />
							<h4>Our networked platform connects suppliers and buyers. <br class="hidden-xs" />It powers everything we do.</h4>
							<!-- D3 JS Directed Force Graph in a Template Part -->
							<?php get_template_part( 'components/datavis', 'networked-platform' ); ?>
						</div>
					</div>
				</div>
			</div>
			<div id="tagline-video" class="value-proposition">
				<div class="container">
					<div class="row">
						<div class="contents">
							<div class="faster-onboarding">
								<h3>75x faster onboarding</h3>
								<p>No, really. We have the fastest, highest supplier &amp; employee adoption rates in the industry. Suppliers love us.</p>
							</div>
							<div class="countries">
								<h3>190 countries</h3>
								<p>Founded in Copenhagen, headquartered in San Francisco, with users in nearly every country in the world.</p>
							</div>
							<div class="businesses">
								<h3>500k+ businesses</h3>
								<p>Enterprises, mid-market and small businesses: every day, thousands of people work together through Tradeshift.</p>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="roles-intro visible-xs">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>We understand your needs.</h2>
							<p>From automating invoices to future-proofing your supply chain, we've got you covered.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="role-list">
				<div class="container">
					<div class="executives">
						<div id="executives" class="imagery">
							<div class="title-role">Executives</div>
							<div class="intro-text">
								<h2><a href="/roles/executives">Executives</a></h2>
								<p>You’re the boss. Use Tradeshift’s digital platform to connect &amp; optimize your complex supply chain and related B2B processes.</p>
								<a href="/roles/executives">Read more &raquo;</a>
							</div>
						</div>
					</div>
					<div class="we-understand hidden-xs">
						<div id="we-understand" class="imagery">
							<div class="title-role">We understand your needs</div>
							<div class="intro-text">
								<h2><a href="/roles/executives">We understand your needs</a></h2>
								<p>From automating invoices to future-proofing your supply chain, we've got you covered.</p>
								<a href="/roles/overview">Read more &raquo;</a>
							</div>
						</div>
					</div>
					<div class="procure-to-pay">
						<div id="p2p" class="imagery">
							<div class="title-role">Procure to Pay</div>
							<div class="intro-text">
								<h2><a href="/roles/procure-to-pay">Procure to Pay</a></h2>
								<p>You create order from chaos. Streamline your end-to-end process, ease change management &amp; quickly onboard suppliers with a single point of collaboration. </p>
								<a href="/roles/procure-to-pay">Read more &raquo;</a>
							</div>
						</div>
					</div>
					<div class="accounts-payable">
						<div id="ap" class="imagery">
							<div class="title-role">Accounts Payable</div>
							<div class="intro-text">
								<h2><a href="/roles/accounts-payable">Accounts Payable</a></h2>
								<p>Managing your transactions manually can be inefficient and slow. Simplify &amp; accelerate your entire AP process by automating it on our cloud-based platform.</p>
								<a href="/roles/accounts-payable">Read more &raquo;</a>
							</div>
						</div>
					</div>
					<div class="finance">
						<div id="finance" class="imagery">
							<div class="title-role">Finance</div>
							<div class="intro-text">
								<h2><a href="/roles/finance">Finance</a></h2>
								<p>You’re more than just the money. Transform finance into a cost-effective, value-adding function. All while maintaining control, compliance &amp; reducing risk.</p>
								<a href="/roles/finance">Read more &raquo;</a>
							</div>
						</div>
					</div>
					<div class="information-technology">
						<div id="it" class="imagery">
							<div class="title-role">IT</div>
							<div class="intro-text">
								<h2><a href="/roles/it">IT</a></h2>
								<p>You know your systems better than anyone. Reap the benefits of our efficient, cloud-based platform for years to come.</p>
								<a href="/roles/it">Read more &raquo;</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="success-starts-here">
				<div class="container">
					<div class="row">
					<div class="contents visible-xs">
							<h2>Your success story starts here.</h2>
							<div class="get-started">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-home-get-started.png" alt="" />
								<h3>Get started</h3>
								<p>You select Tradeshift. Let's get rolling!</p>
							</div>
							<div class="jump-in">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-home-jump-in.png" alt="" />
								<h3>Jump in</h3>
								<p>At kickoff, we deliver a fully configured solution &amp; start onboarding suppliers.</p>
							</div>
							<div class="live-one-week">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-home-live-week.png" alt="" />
								<h3>Live in 1 week</h3>
								<p>Within 7 days, you go live with e-invoice capture.</p>
							</div>
							<div class="smooth-sailing">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-home-smooth.png" alt="" />
								<h3>Smooth sailing</h3>
								<p>We roll out additional functionality in short phases.</p>
							</div>
							<div class="success">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-home-success.png" alt="" />
								<h3>Success!</h3>
								<p>Your business case is fulfilled.</p>
							</div>
						</div>
						<div class="contents hidden-xs">
							<h2>Your success story starts here.</h2>
							<div class="success-steps-container">
								<ul class="success-steps">
									<li class="get-started success-steps-list is-active">
										<a href="#" id="get-started" class="pulse success-trigger"><i class="icon-rocket"> </i></a>
										<div class="step-title">Get started</div>
										<span id="get-started-step" class="get-started-desc">You select Tradeshift. Let's get rolling!</span>
									</li>
									<li class="jump-in success-steps-list">
										<a href="#" id="jump-in" class="success-trigger"><i class="icon-key"> </i></a>
										<div class="step-title">Jump in</div>
										<span id="jump-in-step" class="jump-in-desc">At kickoff, we deliver a fully configured solution &amp; start onboarding suppliers.</span>
									</li>
									<li class="live-week success-steps-list">
										<a href="#" id="live-week" class="success-trigger"><i class="icon-calendar"> </i></a>
										<div class="step-title">Live in 1 week</div>
										<span id="live-week-step" class="live-week-desc inactive">Within 7 days, you go live with e-invoice capture.</span>
									</li>
									<li class="smooth-sailing success-steps-list">
										<a href="#" id="smooth-sailing" class="success-trigger"><i class="icon-boat"> </i></a>
										<div class="step-title">Smooth<br />sailing</div>
										<span id="smooth-sailing-step" class="smooth-sailing-desc inactive">We roll out additional functionality in short phases.</span>
									</li>
									<li class="success success-steps-list">
										<a href="#" id="success" class="success-trigger"><i class="icon-trophy"> </i></a>
										<div class="step-title">Success!</div>
										<span id="success-step" class="success-desc inactive">Your business case is fulfilled.</span>
									</li>
								</ul>
								<!-- Container background for Steps Description / Do not take out / Circle is drawn with CSS -->
								<div class="success-step-list-container">
									<div class="success-step-bg">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<a id="request-demo" name="request-demo"> </a>
			<div class="fill-out-form">
				<div class="container">
					<div class="row">
						<h2>Learn how Tradeshift can help your enterprise.</h2>
						<form novalidate autocomplete="off" class="roles-pages" onsubmit="return false;">
							<div class="form-group">
								<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your Email">
							</div>
							<div class="form-group">
								<button type="button" class="btn btn-primary-cta" id="getStartedHome" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal">Let's get started</button>
							</div>
						</form>
					</div>
					<div class="row">
						<p class="sub">Tradeshift takes your privacy seriously.<br /> We encrypt all personal information when sent over the Internet, so that it cannot be read in transit by a third party.</p>
					</div>
				</div>
			</div>
		</main>
		<!-- Modal View of Marketo Forms2 -->
		<div class="modal fade" id="mktoModal" tabindex="-1">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h3 id="myModalLabel">Request a Demo</h3>
		        <p class="lead">Start your journey with a free demo today.</p>
		      </div>
		      <div class="modal-body">
		        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
				<form id="mktoForm_656"></form>
				<script type="text/javascript">// <![CDATA[
		        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 656, function(form){
		           form.vals({"Marketing_Resource_Name__c":"Home page"});
		    	});
				// ]]></script>
		      </div>
		    </div>
		  </div>
		</div>
		<div id="promoBanner" class="promo-banner" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
			<div class="container">
				<div class="row">
					<div class="contents">
						<?php $countries = array('us', 'france', 'germany', 'uk'); ?>
						<?php foreach ($countries as $country) : ?>
							<?php
							$promo_query = new WP_Query(array(
								'post_type'=>'homepagepromo',
								'posts_per_page'=>2,
								'orderby'=>'date',
								'order'=>'desc',
								'tax_query'=>array(
									array(
										'taxonomy'=>'promo-location',
										'field'=>'slug',
										'terms'=>$country,
									),
								),
							));
							?>
							<div class="promo-location-posts inactive" data-country="<?php echo $country; ?>">
								<?php while ($promo_query->have_posts()) : $promo_query->the_post(); ?>
									<?php
									$locations_categories = wp_get_object_terms(get_the_ID(), 'promo-location');
									$types_categories = wp_get_object_terms(get_the_ID(), 'promo-type');
									$reg_link = get_post_meta(get_the_ID(),'reg_link',true);
									$reg_cta = get_post_meta(get_the_ID(),'reg_cta',true);
									$event_date = get_post_meta(get_the_ID(),'event_date',true);
									$promo_type_category = isset($types_categories[0]) ? $types_categories[0] : false;
									$promo_location_category = isset($locations_categories[0]) ? $locations_categories[0] : false;
									?>
									<div class="promo-wrapper <?php echo $promo_location_category->slug; ?> <?php echo $promo_type_category->slug; ?>">
										<div class="listing">
											<div class="type-date"><?php echo $promo_type_category->name; ?>
												<?php if ($event_date) : ?>
													<span class="date"><?php echo $event_date; ?></span>
												<?php endif; ?>
											</div>
											<div class="title"><a class="trigger-promo-banner" href="<?php echo $reg_link; ?>" target="_blank"><?php the_title(); ?></a></div>
											<div class="cta"><a class="trigger-promo-banner" href="<?php echo $reg_link; ?>" target="_blank"><?php echo $reg_cta; ?> &raquo;</a></div>
										</div>
									</div>
								<?php endwhile; ?>
							</div>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Hero section:  show the image on first pass, then after window loads, show video -->
		<script>
		$(window).load(function(){
		    $("ul#video-wrapper li").toggleClass("active");
		 });

		// Pause the trailer HTML5 video loop on play of the main video
		function pauseOnClick() {
		  document.getElementById('trailer').pause();
		};
		</script>
<?php get_footer(); ?>
