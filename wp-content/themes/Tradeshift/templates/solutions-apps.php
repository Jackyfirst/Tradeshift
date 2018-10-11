 <?php
/*
Template Name: Solutions - Tradeshift Apps
*/
get_header(); ?>

	<!-- Main Content Starts -->
	<main class="main-content ts-apps">
		<div class="hero">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h1><?php _e("Tradeshift<sup>&reg;</sup> Apps", "Tradeshift"); ?></h1>
						<h3><?php _e("The easiest way to work with your supply chain.", "Tradeshift"); ?></h3>
						<button id="heroMainCtaTS_apps" class="btn btn-primary-cta btn-white" data-toggle="modal" data-target="#mktoModal"><?php _e("Request a demo", "Tradeshift"); ?></button>
					</div>
				</div>
			</div>
			<div class="arrow"></div>
		</div>
		<div class="app-ier">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2><?php _e("Your <br class=\"visible-xs\" /><span class=\"text-carousel\"> </span><br class=\"visible-xs\" />just got app-ier.", "Tradeshift"); ?></h2>
						<p><?php _e("The procure-to-pay “suite” is like Santa Claus: we all want to believe, but our illusions are eventually shattered.", "Tradeshift"); ?></p>
						<p><?php _e("Suites are never as comprehensive as they promise. They’re expensive, disconnected, slow to change, and you have to use what they offer, or source a new application (that’s nearly impossible to integrate).", "Tradeshift"); ?></p>
						<p><?php _e("Apps unify all your suppliers, your users’ experiences, your data, your processes, and your back-end integrations. They’re the fast, flexible way to expand how you use Tradeshift <a href=\"/solutions/buy\">Buy</a>, <a href=\"/solutions/pay\">Pay</a> and <a href=\"/solutions/risk\">Risk</a>.", "Tradeshift"); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="app-store">
			<div class="container">
				<div class="row">
					<h2><?php _e("Tradeshift App Store", "Tradeshift"); ?></h2>
					<h3><?php _e("All the apps you want, at your fingertips.", "Tradeshift"); ?></h3>
					<div class="apps easytrade hidden-xs">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-easytrade.png" alt="Easytrade" /> <?php _e("Easytrade", "Tradeshift"); ?>
					</div>
					<div class="apps amazon">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-amazon.png" alt="Amazon Store" /> <?php _e("Amazon Store", "Tradeshift"); ?>
					</div>
					<div class="apps paypal">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-paypal.png" alt="PayPal Payments" /> <?php _e("PayPal Payments", "Tradeshift"); ?>
					</div>
					<div class="apps peppol">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-peppol.png" alt="Peppol Access" /> <?php _e("Peppol Access", "Tradeshift"); ?>
					</div>
					<div class="apps mailedi">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-edi.png" alt="MailEDI Connect" /> <?php _e("MailEDI Connect", "Tradeshift"); ?>
					</div>
					<div class="apps sage50">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-sage.png" alt="Connector for Sage 50" /> <?php _e("Connector for<br /> Sage 50", "Tradeshift"); ?>
					</div>
					<div class="apps citi">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-citi.png" alt="Supply Chain Finance by Citi" /> <?php _e("Supply Chain<br /> Finance by Citi", "Tradeshift"); ?>
					</div>
					<div class="apps exact">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-exact.png" alt="Exact Software" /> <?php _e("Exact Software", "Tradeshift"); ?>
					</div>
					<div class="apps recurring">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-rec-invoice.png" alt="Recurring Invoices" /> <?php _e("Recurring<br /> Invoices", "Tradeshift"); ?>
					</div>
					<div class="apps economic">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-economic.png" alt="E-conomic" /> <?php _e("E-conomic", "Tradeshift"); ?>
					</div>
					<div class="apps yayoi">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-yayoi.png" alt="Yayoi Accounting" /> <?php _e("弥生会計データ連携", "Tradeshift"); ?>
					</div>
					<div class="apps intuit hidden-xs">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-intuit.png" alt="Intuit Payments" /> <?php _e("Intuit Payments", "Tradeshift"); ?>
					</div>
					<div class="apps doc-uploader hidden-xs">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-doc-uploader.png" alt="Document Uploader" /> <?php _e("Documents<br /> Uploader", "Tradeshift"); ?>
					</div>
					<div class="apps digisign hidden-xs">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-digisign.png" alt="Digital Signing" /> <?php _e("Digital Signing", "Tradeshift"); ?>
					</div>
					<div class="apps cleverit hidden-xs">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-clever.png" alt="CleverIT C5" /> <?php _e("CleverIT C5", "Tradeshift"); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="app-deeper">
			<div class="container">
				<div class="row">
					<h2><?php _e("Take a deeper look at some apps.", "Tradeshift"); ?></h2>
					<h3><?php _e("Tradeshift’s App Store expands Buy, Risk and Pay to cover all your supplier interactions.", "Tradeshift"); ?></h3>
					<div class="contents c2fo">
						<a href="/partners/c2fo"><img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/deeper-c2fo.png" alt="<?php _e("C2FO App", "Tradeshift"); ?>" /></a>
						<h4><a href="/partners/c2fo"><?php _e("C2FO", "Tradeshift"); ?></a></h4>
						<p><?php _e("Supplier satisfaction is the cornerstone of the C2FO marketplace growth strategy. C2FO is a trusted platform that delivers the right rate for suppliers, more frequent participation in the market, and more cash flow. All of this creates a healthier supply chain and more income for buyers.<br /><a href=\"/partners/c2fo\">Learn more &raquo;</a>", "Tradeshift"); ?></p>
					</div>
					<div class="contents quyntess">
						<a href="/partners/quyntess"><img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/deeper-quyntess.png" alt="<?php _e("Quyntess App", "Tradeshift"); ?>" /></a>
						<h4><a href="/partners/quyntess"><?php _e("Quyntess", "Tradeshift"); ?></a></h4>
						<p><?php _e("Quyntess Supply Chain Collaboration apps optimize your complex supply chain processes by providing real-time visibility, communication and collaboration on a single platform. From the time you publish your forecasted demand, to the time goods are delivered and invoiced, Quyntess apps work within Tradeshift to streamline your business.<br /><a href=\"/partners/quyntess\">Learn more &raquo;</a>", "Tradeshift"); ?></p>
					</div>
					<div class="contents ecovadis">
						<a href="/partners/ecovadis"><img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/deeper-ecovadis.png" alt="<?php _e("Ecovadis App", "Tradeshift"); ?>" /></a>
						<h4><a href="/partners/ecovadis"><?php _e("Ecovadis", "Tradeshift"); ?></a></h4>
						<p><?php _e("EcoVadis provides simple, reliable sustainability scorecards with a rich rating system and detailed feedback. EcoVadis scorecards cover the complete scope of Corporate Social Responsibility topics for over 120 industry leaders such as Verizon, Merck, Coca Cola, Heineken, Johnson &amp; Johnson, and ING Bank.", "Tradeshift"); ?><br /><a href="/partners/ecovadis"><?php _e("Learn more &raquo;", "Tradeshift"); ?></a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="app-engine" id="playAppEngineVideo">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2><?php _e("Tradeshift App Engine", "Tradeshift"); ?></h2>
						<h3><?php _e("The wizard behind the magic.", "Tradeshift"); ?></h3>
						<p><?php _e("Tradeshift App Engine is the power source for all Tradeshift apps. We provide an open, secure platform. Our partners bring best-in-class solutions that run on the App Engine and provide all the functionality you’ll need.", "Tradeshift"); ?></p>
						<p><?php _e("Tradeshift’s apps provide you with an integrated solution that meets your company’s specific needs. The result? You get a unified, extendable user experience regardless of which app you’re using.", "Tradeshift"); ?></p>
					</div>
				</div>
				<div class="row">
					<div class="contents">
						<?php if (is_mobile()): ?>
							<img class="engine-gif" width="280" src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/app-engine.gif" />
						<?php elseif (is_tablet()): ?>
							<video id="appEngine" class="video-app-engine" autobuffer loop poster="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/ts-app-engine.jpg">
								<source src="<?php echo get_template_directory_uri(); ?>/videos/app-store.mp4" type="video/mp4" />
								<source src="<?php echo get_template_directory_uri(); ?>/videos/app-store.webm" type="video/webm" />
							</video>
						<?php else: ?>
							<video id="appEngine" class="video-app-engine" autobuffer loop>
								<source src="<?php echo get_template_directory_uri(); ?>/videos/app-store.mp4" type="video/mp4" />
								<source src="<?php echo get_template_directory_uri(); ?>/videos/app-store.webm" type="video/webm" />
							</video>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="safe-secure" id="playForDevsVideo">
			<div class="container">
				<div class="row">
					<h2 class="visible-xs"><?php _e("Safe and Secure", "Tradeshift"); ?></h2>
					<div class="imagery">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/safe-secure.png" alt="<?php _e("Tradeshift Apps Security Badge", "Tradeshift"); ?>" />
					</div>
					<div class="contents">
						<h2 class="hidden-xs"><?php _e("Safe and Secure", "Tradeshift"); ?></h2>
						<p><?php _e("Tradeshift Apps is designed bottom-up to ensure security for companies of every size. We safeguard your data with a multi-tenancy architecture, which keeps everybody’s content private and secure. Tradeshift is hosted on one of the most globally secure platforms in the world, which is certified according to SOC1, SOC2, and ISO27001, ISA3401, ISAE3402 compliance requirements.This guarantees you don’t get any surprises and takes the pain out of leveraging the power of partners.", "Tradeshift"); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="for-devs">
			<?php if (is_mobile()): ?>

			<?php elseif (is_tablet()): ?>

			<?php else: ?>
				<video id="forDevs" class="for-devs-video" autobuffer loop poster="<?php echo get_template_directory_uri(); ?>/img/misc/transparent.png" >
					<source src="<?php echo get_template_directory_uri(); ?>/videos/for-devs.mp4" type="video/mp4" />
					<source src="<?php echo get_template_directory_uri(); ?>/videos/for-devs.webm" type="video/webm" />
				</video>
			<?php endif; ?>
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2><?php _e("For Developers", "Tradeshift"); ?></h2>
						<p><?php _e("Not only can you activate and use apps from the Tradeshift App Store – you can also build and deploy your own applications. Extend and customize your business processes exactly the way you need to, any time.", "Tradeshift"); ?></p>
						<p><?php _e("Everyone can become a Tradeshift App developer, whether you’re an enterprise or a tinkerer.", "Tradeshift"); ?></p>
						<p><a href="http://developer.tradeshift.com" rel="noopener"><?php _e("Get started here &raquo;", "Tradeshift"); ?></a></p>
					</div>
				</div>
				<?php if (is_mobile()): ?>
					<div class="row imagery">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/for-dev-xs.gif" alt="<?php _e("Tradeshift for Developers", "Tradeshift"); ?>" />
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="you-can">
			<div class="container">
				<div class="row">
					<h2><?php _e("With Tradeshift Apps, you can:", "Tradeshift"); ?></h2>
					<div class="activate">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-activate.png" />
						<p><?php _e("Activate new capabilities as your needs evolve", "Tradeshift"); ?></p>
					</div>
					<div class="connect">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-connect.png" />
						<p><?php _e("Connect to suppliers once and enable all your processes", "Tradeshift"); ?></p>
					</div>
					<div class="build">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-build.png" />
						<p><?php _e("Build any app you need for your specific requirements", "Tradeshift"); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="resources">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2><?php _e("Learn more about us:", "Tradeshift"); ?></h2>
						<div class="resource-wrapper">
							<a class="trigger-res-1" href="/resources/a-network-application-platform-for-your-supply-chain/"><img class="img-responsive" src="/wp-content/uploads/2015/07/Resource_image_07132015_650x350.jpg" /></a>
							<p><?php _e("A Network Application Platform for your Supply Chain", "Tradeshift"); ?> <br class="visible-sm" /><a class="trigger-res-1"  href="/resources/a-network-application-platform-for-your-supply-chain/"><?php _e("Download &raquo;", "Tradeshift"); ?></a></p>
						</div>
						<div class="resource-wrapper">
							<a class="trigger-res-2" href="/resources/state-b2b-connectivity-designing-global-business-network-future/"><img class="img-responsive" src="/wp-content/uploads/2015/01/ebook_gert.png" /></a>
							<p><?php _e("The State of B2B Connectivity: Designing the global business network for the future", "Tradeshift"); ?> <br class="visible-sm" /><a class="trigger-res-2" href="/resources/state-b2b-connectivity-designing-global-business-network-future/"><?php _e("Download &raquo;", "Tradeshift"); ?></a></p>
						</div>
						<div class="resource-wrapper">
							<a class="trigger-res-3" href="/resources/chainlinkresearch/"><img class="img-responsive" src="/wp-content/uploads/2015/06/chainlink.jpg" /></a>
							<p><?php _e("Rise of the Agile Networked Platform for Supply Management", "Tradeshift"); ?> <br class="visible-sm" /><a class="trigger-res-3" href="/resources/chainlinkresearch/"><?php _e("Download &raquo;", "Tradeshift"); ?></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="more-info">
			<div class="container">
				<div class="row">
					<div class="call">
						<h5><?php _e("To learn how apps can help you", "Tradeshift"); ?></h5>
						<p><?php _e("Call +1-800-381-3585", "Tradeshift"); ?></p>
					</div>
					<div class="partner">
						<h5><?php _e("If you want to partner with us", "Tradeshift"); ?></h5>
						<p><a href="/partners"><?php _e("Learn more about how we can work together &raquo;", "Tradeshift"); ?></a></p>
					</div>
					<div class="developer">
						<h5><?php _e("If you're a developer", "Tradeshift"); ?></h5>
						<p><?php _e("Check out", "Tradeshift"); ?><br /><a href="http://developer.tradeshift.com">http://developer.tradeshift.com</a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="fill-out-form">
			<div class="container">
				<div class="row">
					<h2><?php _e("Get the facts on how Tradeshift can help your enterprise.", "Tradeshift"); ?></h2>
					<form novalidate autocomplete="off" class="roles-pages" onsubmit="return false;">
						<div class="form-group">
							<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your Email">
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-primary-cta" id="getStartedTS_apps" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal"><?php _e("Let's get started", "Tradeshift"); ?></button>
						</div>
					</form>
				</div>
				<div class="row">
					<p class="sub"><?php _e("Tradeshift takes your privacy seriously.<br /> We encrypt all personal information when sent over the Internet, so that it cannot be read in transit by a third party.", "Tradeshift"); ?></p>
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
	        <h3 id="myModalLabel"><?php _e("Request a Demo", "Tradeshift"); ?></h3>
	        <p class="lead"><?php _e("Start your journey with a free demo today.", "Tradeshift"); ?></p>
	      </div>
	      <div class="modal-body">
	        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
			<form id="mktoForm_986"></form>
			<script type="text/javascript">// <![CDATA[
	        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 986, function(form){
	           form.vals({"Marketing_Resource_Name__c":"Solutions - Tradeshift Apps"});
	    	});
			// ]]></script>
	      </div>
	    </div>
	  </div>
	</div>

<?php get_footer(); ?>


<!-- Waypoint triggered only for Desktop -->
<?php if ( ! is_mobile()): ?>
	<script type="text/javascript">
	var waypoint = new Waypoint({
	  element: document.getElementById('playAppEngineVideo'),
	  handler: function() {
	    $('#appEngine')[0].play(); 
	  }
	});

	var waypoint = new Waypoint({
	  element: document.getElementById('playForDevsVideo'),
	  handler: function() {
	    $('#forDevs')[0].play(); 
	  }
	});
	</script>
<?php endif; ?>
