 <?php
/*
Template Name: Home Page - Enterprise v2
*/
get_header('home-ent'); ?>
		<script>
			$(window).load(function() {
				document.getElementById("Active_Project__c").parentElement.style="width: 5px !important"
			})
		</script>
		<!-- Main Content Starts -->
		<main class="main-content home-active">
			<!-- Hero Section -->
			<div id="heroEntHome">
				<div class="hero">
					<div class="container">
						<div class="row cta">
							<div class="intro-text-cta">
								<!-- Tagline ID serves as a landmark to toggle the promo banner view. Do not delete! -->
								<h1>Innovate the way <br class="visible-xs" />you 
									<animated-typing :strings="['buy', 'pay', 'request', 'collaborate', 'connect']"></animated-typing>
								</h1>
								<h3>Procurement, payables, supplier management—and the only open network that’s simple for employees, free for suppliers, and agile enough for you.</h3>

								<button id="heroMainCtaEnterpriseHomePlay" class="btn btn-video-track btn-secondary-cta btn-white-primary" onclick="fn_vidyard_8qM$xEdKhaI4R8gJC_3SYw();">
									Watch our story
									<script type="text/javascript" id="vidyard_embed_code_8qM-xEdKhaI4R8gJC_3SYw" src="//play.vidyard.com/8qM-xEdKhaI4R8gJC_3SYw.js?v=3.1.1&type=lightbox"></script>
								</button>
								<button id="heroMainCtaEnterpriseHome" class="btn btn-primary-cta btn-white-secondary" data-toggle="modal" data-target="#mktoModal">Let's get started</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-case-studies">
				<div class="container">
					<div class="row">
						<?php if (is_mobile()): ?>
						<div class="case-studies-container">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/customer-logos-800.png" />
						</div>
						<?php elseif (is_tablet()): ?>
						<div class="case-studies-container">
							<?php get_template_part( 'components/hero', 'case-studies' ); ?>
						</div>
						<?php else: ?>
							<div class="case-studies-container visible-sm">
							<?php get_template_part( 'components/hero', 'case-studies' ); ?>
						</div>
						<div class="case-studies-container visible-md visible-lg">
							<?php get_template_part( 'components/hero', 'case-studies' ); ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php if (is_mobile()): ?>
			<div id="rethink"> </div> <!-- Activate D3 Node Graph Animation -->
			<div class="owl-carousel" id="carousel-announcement">
				<div class="item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/home/announce-bar-ts-overview.png" />
					<h5>Tradeshift Overview</h5>
					<p>Everything you need to know about what we do. <br class="visible-xs" /><a class="announce-bar-link" href="/resources/the-tradeshift-platform-everything-you-need-to-know/">Learn more &raquo;</a></p>
				</div>
				<div class="item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/home/announce-bar-network.png" />
					<h5>Why We’re Different</h5>
					<p>“You call that an open network? Seriously...” <a class="announce-bar-link" target="_blank" href="https://blog.tradeshift.com/you-call-that-an-open-network-coupa-seriously/">Read me &raquo;</a></p>
				</div>
				<div class="item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/home/announce-bar-review.png" />
					<h5>Spend Matters Review</h5>
					<p>Jason Busch examines our e-procurement tool. <a class="announce-bar-link" href="/resources/tradeshift-buy-a-deep-dive-into-tradeshifts-eprocurement-offering">Download &raquo;</a></p>
				</div>
			</div>
			<?php elseif (is_tablet()): ?>
			<div id="rethink"> </div> <!-- Activate D3 Node Graph Animation -->
			<div class="announce-bar">
				<div class="container">
					<div class="row">
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/announce-bar-ts-overview.png" />
							<h5>Tradeshift Overview</h5>
							<p>Everything you need to know about what we do. <br class="visible-xs" /><a class="announce-bar-link" href="/resources/the-tradeshift-platform-everything-you-need-to-know/">Learn more &raquo;</a></p>
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/announce-bar-review.png" />
							<h5>Spend Matters Review</h5>
							<p>Jason Busch examines our e-procurement tool. <a class="announce-bar-link" href="/resources/tradeshift-buy-a-deep-dive-into-tradeshifts-eprocurement-offering">Download &raquo;</a></p>
						</div>
					</div>
				</div>
			</div>
			<?php else: ?>
			<div id="rethink"> </div> <!-- Activate D3 Node Graph Animation -->
			<div class="announce-bar" id="RTP-announce-bar">
				<div class="container">
					<div class="row">
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/announce-bar-ts-overview.png" />
							<h5>Tradeshift Overview</h5>
							<p>Everything you need to know about what we do. <br class="visible-xs" /><a class="announce-bar-link" href="/resources/the-tradeshift-platform-everything-you-need-to-know/">Learn more &raquo;</a></p>
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/announce-bar-network.png" />
							<h5>Why We’re Different</h5>
							<p>“You call that an open network? Seriously...” <a class="announce-bar-link" target="_blank" href="https://blog.tradeshift.com/you-call-that-an-open-network-coupa-seriously/">Read me &raquo;</a></p>
						</div>
						<div class="item hidden-sm">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/announce-bar-review.png" />
							<h5>Spend Matters Review</h5>
							<p>Jason Busch examines our e&#x2011;procurement tool. <a class="announce-bar-link" href="/resources/tradeshift-buy-a-deep-dive-into-tradeshifts-eprocurement-offering">Download &raquo;</a></p>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<div class="rethink-business-svg">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Moving the back office forward.</h2>
							<p>The future of procurement is collaborative. Tradeshift helps you move beyond silos with a truly innovative global platform. Connect once to all your employees and suppliers, and expand your procure-to-pay processes with flexible apps that don’t lock you in.</p>
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
								<h3>400%+ Growth in<br class="visible-lg" /> Supplier Accounts</h3>
								<p>We’ve focused on suppliers from the start. Innovative supplier targeting + free for suppliers + modern integration = high adoption rates.</p>
							</div>
							<div class="users">
								<h3>800,000+ <br class="hidden-xs hidden-sm" />Businesses</h3>
								<p>Our worldwide network is expanding fast with buyers and suppliers from nearly every country collaborating through Tradeshift.</p>
							</div>
							<div class="businesses">
								<h3>Billions in Monthly Transactions</h3>
								<p>The platform handles billions of dollars in transacted value each month, with 250% year-over-year growth in 2015 alone.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="roles-intro">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>We understand your needs.</h2>
							<p>From future-proofing your supply chain to automating invoices, we've got you covered.<br /><span class="roll-over visible-lg">Roll over images to learn more.</span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="role-list">
				<div class="container">
					<div class="row">
						<div class="contents">
							<div id="ExecutivesCircle" class="executives roles-list-circle">
								<div id="executives" class="imagery">
									<div class="title-role"><h2><a class="roles-list-link" href="/roles/executives">Executives</a></h2></div>
									<div class="intro-text">
										<p>You’re the boss. Use Tradeshift’s digital platform to connect &amp; optimize your complex supply chain and related B2B processes.</p>
										<a class="roles-list-link" href="/roles/executives">Learn more &raquo;</a>
									</div>
								</div>
							</div>
							<div id="ProcurementCircle" class="procurement roles-list-circle">
								<div id="procurement" class="imagery">
									<div class="title-role"><h2><a class="roles-list-link" href="/roles/procurement">Procurement</a></h2></div>
									<div class="intro-text">
										<p>You collaborate across a wide range of teams and suppliers. Reach your savings goals and help your business become more agile.</p>
										<a class="roles-list-link" href="/roles/procurement">Learn more &raquo;</a>
									</div>
								</div>
							</div>
							<div id="P2PCircle" class="procure-to-pay roles-list-circle">
								<div id="p2p" class="imagery">
									<div class="title-role"><h2><a class="roles-list-link" href="/roles/procure-to-pay">Procure to Pay</a></h2></div>
									<div class="intro-text">
										<p>You create order from chaos. Streamline your processes &amp; ease change management with a single point of collaboration.</p>
										<a class="roles-list-link" href="/roles/procure-to-pay">Learn more &raquo;</a>
									</div>
								</div>
							</div>
							<div id="FinanceCircle" class="finance roles-list-circle">
								<div id="finance" class="imagery">
									<div class="title-role"><h2><a class="roles-list-link" href="/roles/finance">Finance</a></h2></div>
									<div class="intro-text">
										<p>You’re more than just the money. Make finance cost-effective while maintaining compliance &amp; reducing risk.</p>
										<a class="roles-list-link" href="/roles/finance">Learn more &raquo;</a>
									</div>
								</div>
							</div>
							<div id="APCircle" class="accounts-payable roles-list-circle">
								<div id="ap" class="imagery">
									<div class="title-role"><h2><a class="roles-list-link" href="/roles/accounts-payable">Accounts<br />Payable</a></h2></div>
									<div class="intro-text">
										<p>You keep the AP engine running smoothly. Turn manual, disconnected transactions into beautifully automated processes.</p>
										<a class="roles-list-link" href="/roles/accounts-payable">Learn more &raquo;</a>
									</div>
								</div>
							</div>
							<div id="ITCircle" class="information-technology roles-list-circle">
								<div id="it" class="imagery">
									<div class="title-role"><h2><a class="roles-list-link" href="/roles/it">IT</a></h2></div>
									<div class="intro-text">
										<p>You know your systems better than anyone. Reap the benefits of our efficient, cloud-based platform for years to come.</p>
										<a class="roles-list-link" href="/roles/it">Learn more &raquo;</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="platform">
				<div class="container">
					<div class="row">
						<div class="contents">
							<div class="all-your-suppliers">
								<a href="/supplier-onboarding/" class="platform-links"><img src="<?php echo get_template_directory_uri(); ?>/img/home/icon-odometer.png" /></a>
								<h3><a href="/supplier-onboarding/" class="platform-links">Free for suppliers</a></h3>
								<p>Onboard fast &amp; collaborate in real time with your entire network. <br class="visible-xs" /><a href="/supplier-onboarding/" class="platform-links">Learn more &raquo;</a></p>
							</div>
							<div class="powerful-platform">
								<a href="/solutions/apps/" class="platform-links"><img src="<?php echo get_template_directory_uri(); ?>/img/home/icon-platform.png" /></a>
								<h3><a href="/solutions/apps/" class="platform-links">Powerful Apps</a></h3>
								<p>Respond to your growing business needs with apps on our flexible, open platform. <a href="/solutions/apps/" class="platform-links">Learn more &raquo;</a></p>
							</div>
							<div class="direct-indirect">
								<img src="<?php echo get_template_directory_uri(); ?>/img/home/icon-heart.png" />
								<h3>Customers Love Us</h3>
								<p>Our Net Promoter Score (NPS) is +53. Whatever you need, we listen.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="success-starts-here">
				<div class="container">
					<div class="row">
					<?php if (is_mobile()): ?>
						<div class="contents">
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
								<h3>Live in 7 days</h3>
								<p>You go live within a week.</p>
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
					<?php else: ?>
						<div class="contents">
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
										<div class="step-title">Live in 7 days</div>
										<span id="live-week-step" class="live-week-desc inactive">You go live<br />within a week.</span>
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
					<?php endif; ?>
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
								<button type="button" class="btn btn-primary-cta" id="getStartedEnterpriseHome" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal">Let's get started</button>
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
		    	});// ]]>
		    	</script>
		      </div>
		    </div>
		  </div>
		</div>
		<?php if (! is_mobile()): ?>
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
											<div class="title"><a class="trigger-promo-banner trigger-promo-banner-title" href="<?php echo $reg_link; ?>" target="_blank"><?php the_title(); ?></a></div>
											<div class="cta"><a class="trigger-promo-banner trigger-promo-banner-cta" href="<?php echo $reg_link; ?>" target="_blank"><?php echo $reg_cta; ?> &raquo;</a></div>
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
		<?php endif; ?>
		<!-- Let's call the Quote Carousel plugin only in smartphones -->
		<?php if (is_mobile()): ?>
		<script>
			jQuery(document).ready(function($) {
			  $('#carousel-announcement').owlCarousel({
			  	items : 3,
			  	lazyLoad : false,
			    lazyFollow : true,
			    lazyEffect : "fade"
			  });
			});
		</script>
		<?php endif; ?>

<?php get_footer(); ?>
