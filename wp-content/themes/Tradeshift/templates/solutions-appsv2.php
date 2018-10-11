 <?php
/*
Template Name: Solutions - Tradeshift Apps v2
*/
get_header(); ?>
	<style>
		@media (min-width: 992px) {
			.smartling-fr .ent-apps-page .success-story .owl-theme .owl-controls {
				top: 260px !important;
			}
		}
	</style>
	<!-- Main Content Starts -->
	<main class="main-content ent-apps-page">
		<div class="hero">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h1><?php _e("Accelerate your supply chain digitization", 'Tradeshift'); ?></h1>
						<div id="heroForm">
							<div class="form-container">
								<form novalidate autocomplete="off" class="roles-pages" onsubmit="return false;">
									<input type="e-mail" class="form-control" id="e-mail" placeholder="<?php _e('Enter Email', 'Tradeshift'); ?>">
									<button type="button" class="btn btn-cta btn-nm" id="finalForm" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal"><?php _e('Request a demo', 'Tradeshift'); ?></button>
								</form>
							</div>
						</div>
						<?php if (! is_mobile()): ?>
							<img class="hidden-xs product-screenshot" src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/iPhone_desktop.png" />
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="goldilocks">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2><?php _e('Change can be hard. Apps make it easy.', 'Tradeshift'); ?></h2>
						<p><?php _e('The procure-to-pay “suite” is like Santa Claus: we all want to believe, but our illusions are eventually shattered.', 'Tradeshift'); ?></p>
						<p><?php _e('Suites are never as comprehensive as they promise. They’re expensive, disconnected, slow to change, and you have to use what they offer, or source a new application (that’s nearly impossible to integrate).', 'Tradeshift'); ?></p>
						<p><?php _e('Apps unify all your suppliers, your users’ experiences, your data, your processes, and your back-end integrations. They’re the fast, flexible way to expand your capabilities and how you use <a href="/enterprise/solutions/buy">Tradeshift<sup>&reg;</sup> Buy</a>, <a href="/enterprise/solutions/pay">Pay</a>.', 'Tradeshift'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="change">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2><?php _e('Get faster change at a lower cost.', 'Tradeshift'); ?></h2>
						<p><?php _e('Apps cost less and are quicker to implement than single-install solutions or suites so you can improve your speed of change and lower your TCO. With apps, you can scale your capabilities as needed&mdash;and your processes and organization gain the flexibility necessary to compete.', 'Tradeshift'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="more-with-data-wrapper">
			<div class="more-with-data">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2><?php _e('Do more with your data.', 'Tradeshift'); ?></h2>
							<p><?php _e('"Tradeshift Apps integrate into your existing systems, enabling collaboration with every person at every location. Leveraging our network you can connect all your data—at every level, in every process and get a more holistic view of your business across all your geographies."', 'Tradeshift'); ?></p>
							<p><?php _e('Up front, apps do the heavy lifting. Our network just gives you a greater ability to connect your data and people. More so than say the Coupa systems of the world.', 'Tradeshift'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="empower">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2><?php _e('Empower your back office to be more efficient.', 'Tradeshift'); ?></h2>
						<p><?php _e('Consolidate and standardize your back-office commodity processes, and extend your existing infrastructure to support performance, data storage, and operational efficiency. Ready-to-integrate, standard apps make it easy to solve your existing needs, and support your existing processes, adding value in an accelerated manner at lower cost.', 'Tradeshift'); ?></p>
					</div>
				</div>
				<div class="row">
					<div class="contents contents-icon">
						<div class="icons-apps"><img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icon-graph.png" /></div>
						<div class="icons-apps"><img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icon-cloud.png" /></div>
						<div class="icons-apps"><img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icon-app.png" /></div>
						<div class="icons-apps"><img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icon-time.png" /></div>

					</div>
				</div>
			</div>
		</div>
		<div class="app-store">
			<div class="container">
				<div class="row">
					<h2><a href="http://apps.tradeshift.com/appstore"><?php _e('All the apps you want, at your fingertips.', 'Tradeshift'); ?></a></h2>
					<div class="apps">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-easytrade.png" alt="Easytrade" /><?php _e('Easytrade', 'Tradeshift'); ?>
					</div>
					<div class="apps">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-quyntess.png" alt="Order Collaboration" /><?php _e('Order<br>Collaboration', 'Tradeshift'); ?>
					</div>
					<div class="apps">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-paypal.png" alt="Paypal Payments" /><?php _e('Paypal<br>Payments', 'Tradeshift'); ?>
					</div>
					<div class="apps">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-riskmethods.png" alt="riskmethods" /><?php _e('riskmethods', 'Tradeshift'); ?>
					</div>
					<div class="apps">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-sftp.png" alt="SFTP Uploader" /><?php _e('SFTP<br>Uploader', 'Tradeshift'); ?>
					</div>
					<div class="apps">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-exact.png" alt="Exact Software Integration" /><?php _e('Exact Software <br>Integration', 'Tradeshift'); ?>
					</div>
					<div class="apps">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-timestarter.png" alt="TimeStarter" /><?php _e('TimeStarter', 'Tradeshift'); ?>
					</div>
					<div class="apps">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-openpeppol.png" alt="OpenPEPPOL" /><?php _e('OpenPEPPOL', 'Tradeshift'); ?>
					</div>
					<div class="apps">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-recurring.png" alt="Recurring Invoices" /><?php _e('Recurring<br>Invoices', 'Tradeshift'); ?>
					</div>
					<div class="apps">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-jp.png" alt="弥生会計データ連携" /><?php _e('弥生会計データ連携', 'Tradeshift'); ?>
					</div>
					<div class="apps">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-doc-uploader.png" alt="Documents Uploader" /><?php _e('Documents<br>Uploader', 'Tradeshift'); ?>
					</div>
					<div class="apps">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-digital-signing.png" alt="Digital Signing" /><?php _e('Digital Signing', 'Tradeshift'); ?>
					</div>
					<div class="apps">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-sage.png" alt="Connector for Sage 50" /><?php _e('Connector for<br>Sage 50', 'Tradeshift'); ?>
					</div>
					<div class="apps">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-cleverit.png" alt="CleverIT C5 Integration" /><?php _e('CleverIT<br>C5 Integration', 'Tradeshift'); ?>
					</div>
					<div class="apps">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-procureport.png" alt="Procureport eSourcing" /><?php _e('Procureport<br/>eSourcing', 'Tradeshift'); ?>
					</div>
					<div class="apps api">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-api-access.png" alt="API Access to Own Account" /><?php _e('API Access<br>to Own Account', 'Tradeshift'); ?>
					</div>
					<div class="apps so">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-supplier-onboarding.png" alt="Supplier Onboarding" /><?php _e('Supplier<br>Onboarding', 'Tradeshift'); ?>
					</div>
					<div class="apps ss">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-supplier-survey.png" alt="Supplier Survey" /><?php _e('Supplier<br>Survey', 'Tradeshift'); ?>
					</div>
					<div class="apps french hidden-xs hidden-sm">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/icons/icon-french.png" alt="French Compliance Reports" /><?php _e('French Compliance<br>Reports', 'Tradeshift'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="beyond-core">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2><?php _e("Go above and beyond “the core.”", "Tradeshift"); ?></h2>
						<p><?php _e("Getting exactly what you need has never been easier—build a bespoke app. Customize your processes and (finally) bring your legacy systems into the cloud and your suite. An app built to your organization’s specific requirements gives you a unique differentiator, and your processes and organization a competitive advantage.", "Tradeshift"); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="consistent">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2><?php _e("100% consistent &amp; responsive, 100% adoption.", "Tradeshift"); ?></h2>
						<p><?php _e("Add the functions you need, without forcing your users to learn new systems. Regardless of device—mobile or desktop—users become more productive and efficient. You maintain control on a granular level with the highest security and compliance standards in the industry.", "Tradeshift"); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="success-story">
			<?php if (is_mobile()): ?>
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2><?php _e("Take a deeper look at some apps.", "Tradeshift"); ?></h2>
						<p class="lead-xs"><?php _e("<a href=\"http://apps.tradeshift.com\">Tradeshift’s Appstore</a> expands Buy, Pay and Risk to cover all your supplier interactions.", "Tradeshift"); ?></p>
						<div id="success-story-carousel" class="owl-carousel">
							<div class="item quyntess">
								<h2><?php _e("Success story: <em>Quyntess</em>", "Tradeshift"); ?></h2>
								<p><?php _e("Quyntess was one of the first to develop a series of apps—Order Collaboration, e-Logistics, and the Delivery Schedule app—on the Tradeshift platform, and they did it all in only 5 weeks. Instantly linked to thousands of new customers, they quickly landed Vesuvius Poland as a customer in partnership with Tradeshift.", "Tradeshift"); ?> </p>
								<blockquote><?php _e("We had our heritage of supply chain management and traditional web applications, then we brought that to the platform of Tradeshift. It was quite a leap forward for us in terms of user interface… We have been expanding ever since.<footer>Teunis Biemond, CTO of Quyntess</footer>", "Tradeshift"); ?></blockquote>
							</div>
							<div class="item procureport">
								<h2><?php _e("Success story: <em>ProcurePort</em>", "Tradeshift"); ?></h2>
								<p><?php _e("ProcurePort, an independent app developer, leveraged Tradeshift products and platform  to extend the services they provided to their mid-market users, helping them automate and streamline the source-to-pay process, ultimately reducing purchasing costs. Tradeshift gained an additional tool to expand our e-procurement offering and power procurement excellence.", "Tradeshift"); ?></p>
								<blockquote><?php _e("Integration was straight-forward—they provided API’s... making it easy for my team to integrate. Support from the Tradeshift team was exceptional, including the API documentation. They were always available to guide us throughout the entire process.<footer>Jemin Patel, Director, ProcurePort</footer>", "Tradeshift"); ?></blockquote>
							</div>
							<div class="item timestarter">
								<h2><?php _e("Success story: <em>Timestarter</em>", "Tradeshift"); ?></h2>
								<p><?php _e("TimeStarter partnered with Tradeshift, expanding their brand’s global reach, increasing competitive advantage, and providing real business value to both TimeStarter and Tradeshift customers. Combining TimeStarter’s time-tracking app with Tradeshift’s invoicing solution, they created a powerful all-in-one app to save their users time and help them become more profitable, faster.", "Tradeshift"); ?></p>
								<blockquote><?php _e("Our partnership added value for our users through the addition of Tradeshift’s invoicing solution... supported us with brand and marketing awareness to 800k+ suppliers and growing, including large enterprises, greatly expanding the number of potential new users of TimeStarter.<footer>Trine Thybo, CMO TimeStarter</footer>", "Tradeshift"); ?></blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php else: ?>
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2><?php _e("Take a deeper look at some apps.", "Tradeshift"); ?></h2>
						<p><?php _e("<a href=\"http://apps.tradeshift.com\">Tradeshift’s Appstore</a> expands Buy, Pay and Risk to cover all your supplier interactions.", "Tradeshift"); ?></p>
					</div>
				</div>
			</div>
			<div id="success-story-carousel" class="container owl-carousel">
				<div class="item quyntess">
					<div class="row">
						<div class="contents">
							<h2><?php _e("Success story: <em>Quyntess</em>", "Tradeshift"); ?></h2>
							<p><?php _e("Tradeshift and Quyntess share a common vision: to create interconnected, cloud-based supply chain applications. Quyntess was one of the first to develop a series of apps—Order Collaboration, e-Logistics, and the Delivery Schedule app—on the Tradeshift platform, and they did it all in only 5 weeks. With the power of the Tradeshift network, they were instantly linked to thousands of new customers, quickly landing Vesuvius Poland in partnership with Tradeshift.", "Tradeshift"); ?></p>
							<blockquote><img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/lquo.png" class="quote-icons" /> <?php _e("We had our heritage of supply chain management and traditional web applications, then we brought that to the platform of Tradeshift. It was quite a leap forward for us in terms of user interface… We have been expanding ever since.", "Tradeshift"); ?> <img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/rquo.png" class="quote-icons" /><footer><?php _e("Teunis Biemond, CTO of Quyntess", "Tradeshift"); ?></footer></blockquote>
						</div>
					</div>
				</div>
				<div class="item procureport">
					<div class="row">
						<div class="contents">
							<h2><?php _e("Success story: <em>ProcurePort</em>", "Tradeshift"); ?></h2>
							<p><?php _e("ProcurePort, an independent app developer, leveraged Tradeshift products and platform  to extend the services they provided to their mid-market users, helping them automate and streamline the source-to-pay process, ultimately reducing purchasing costs. Tradeshift gained an additional tool to expand our e-procurement offering and power procurement excellence.", "Tradeshift"); ?></p>
							<blockquote><img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/lquo.png" class="quote-icons" /> <?php _e("Integration was straight-forward—they provided API’s... making it easy for my team to integrate. Support from the Tradeshift team was exceptional, including the API documentation. They were always available to guide us throughout the entire process.", "Tradeshift"); ?> <img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/rquo.png" class="quote-icons" /><footer><?php _e("Jemin Patel, Director, ProcurePort", "Tradeshift"); ?></footer></blockquote>
						</div>
					</div>
				</div>
				<div class="item timestarter">
					<div class="row">
						<div class="contents">
							<h2><?php _e("Success story: <em>Timestarter</em>", "Tradeshift"); ?></h2>
							<p><?php _e("TimeStarter partnered with Tradeshift, expanding their brand’s global reach, increasing competitive advantage, and providing real business value to both TimeStarter and Tradeshift customers. Combining TimeStarter’s time-tracking app with Tradeshift’s invoicing solution, they created a powerful all-in-one app to save their users time and help them become more profitable, faster.", "Tradeshift"); ?></p>
							<blockquote><img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/lquo.png" class="quote-icons" /> <?php _e("Our partnership added value for our users through the addition of Tradeshift’s invoicing solution... supported us with brand and marketing awareness to 800k+ suppliers and growing, including large enterprises, greatly expanding the number of potential new users of TimeStarter.", "Tradeshift"); ?> <img src="<?php echo get_template_directory_uri(); ?>/img/solutions/appsv2/rquo.png" class="quote-icons" /><footer><?php _e("Trine Thybo, CMO TimeStarter", "Tradeshift"); ?></footer></blockquote>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<div class="questions">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2><?php _e("Make rapid innovation, development and delivery a reality for you.", "Tradeshift"); ?></h2>
						<p><?php _e("Standard or bespoke—apps are the quickest way to add agility and flexibility to your procure-to-pay processes and systems. Need help building? We can connect you with an app development partner. Whatever you need, we’re here to help.", "Tradeshift"); ?></p>
						<a href="mailto:apps@tradeshift.com" class="btn btn-primary-cta-ent btn-white-gold btn-footer-cta"><?php _e("Connect with us", "Tradeshift"); ?></a>
					</div>
				</div>
			</div>
		</div>
	</main>
	<div class="modal fade" id="mkSuccessMsg" tabindex="-1">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header" style="padding-bottom: 0px">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 id="myModalLabel"><?php _e("Thank you!", "Tradeshift"); ?></h3>
	      </div>
	      <div class="modal-body" style="padding: 0 30px !important">
	      	<p class="lead"><?php _e("We’ll contact you to set up a time to talk.", "Tradeshift"); ?></p>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal View of Marketo Forms2 -->
		<div class="modal fade" id="mktoModal" tabindex="-1">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h3 id="myModalLabel"><?php _e("Request a Demo", "Tradeshift"); ?></h3>
		        <p class="lead"><?php _e("Start your journey with a free demo today.", "Tradeshift"); ?></p>
		      </div>
		      <div class="modal-body">
		        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
				<form id="mktoForm_951"></form>
				<script type="text/javascript">// <![CDATA[
		        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 951, function(form){
		           form.vals({"Marketing_Resource_Name__c":"Solutions - Tradeshift Buy"});
		    	});
				// ]]></script>
		      </div>
		    </div>
		  </div>
		</div>
	<!-- Do animation after screen loads -->
	<script>
	$(window).on("load", function() {
		$('.product-screenshot').addClass('active');
	    });
	</script>
	<!-- Let's call the Quote Carousel plugin only in smartphones -->
	<?php if (is_mobile()): ?>
	<script>
		$(document).ready(function() {
		  $('#success-story-carousel').owlCarousel({
		  	items : 1,
		  	autoPlay : 6000,
		    stopOnHover: true,
		    itemsDesktop : [2540,1],
		    itemsDesktopSmall : [1199,1],
		    itemsTablet: [768,1],
		    itemsTabletSmall: false,
		    itemsMobile : [479,1],
		    navigation: true,
  			navigationText: ["<img src='/wp-content/themes/Tradeshift/img/solutions/appsv2/leftcontrol.png'>","<img src='/wp-content/themes/Tradeshift/img/solutions/appsv2/rightcontrol.png'>"]
		  });
		});
	</script>
	<?php else: ?>
	<script>
		$(document).ready(function() {
		  $('#success-story-carousel').owlCarousel({
		  	items : 1,
		  	autoPlay : false,
		    stopOnHover: true,
		    itemsDesktop : [2540,1],
		    itemsDesktopSmall : [1199,1],
		    itemsTablet: [768,1],
		    itemsTabletSmall: false,
		    itemsMobile : [479,1],
		    lazyLoad : false,
		    lazyFollow : true,
		    lazyEffect : "fade",
		    navigation: false
		  });
		});
	</script>
	<?php endif; ?>
<?php get_footer(); ?>
