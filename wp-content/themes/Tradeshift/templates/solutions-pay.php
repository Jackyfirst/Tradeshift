<?php
/*
Template Name: Solutions - Tradeshift Pay
*/
get_header(); ?>
<style>
	@media (min-width: 992px) {
		.smartling-fr .different-network h2 {
			width: 365px !important;
		}
	}
	@media (min-width: 1200px) {
		.smartling-fr .finance .intro-text {
			width: 60% !important;
			margin-left: 0px !important;
		}
	}
</style>
<!-- Main Content Starts -->
<main class="main cd-main-content main-content ts-pay">
	<div class="hero">
		<div class="container">
			<div class="row cta">
				<div class="contents">
					<div class="wrapper">
						<h1><?php _e('Tradeshift<sup>&reg;</sup> <span>Pay', 'Tradeshift'); ?></span></h1>
						<h3><?php _e("Discover payments 2.0", 'Tradeshift'); ?></h3>
						<p><?php _e("Go beyond AP automation and <br class=\"visible-xs\">e-invoicing, and transform accounts payable into an end-to-end supply chain payments solution. With Tradeshift, you can take total digital control of every invoice, every early payment program, and every possibility in your supply chain future.", 'Tradeshift'); ?></p>
						<p class="bold hidden-xs"><?php _e("Set up a demo for your team.", 'Tradeshift'); ?></p>
						<button id="heroMainCtaTS_pay" class="btn btn-primary-cta" data-toggle="modal" data-target="#mktoModal"><?php _e("Schedule now", 'Tradeshift'); ?></button>
					</div>
				</div>
				<div class="ts-pay-capabilities hidden-xs">
					<h2><?php _e("See how Tradeshift helps accounts payable, finance, and treasury pros:", 'Tradeshift'); ?></h2>
					<div class="ts-pay-wrapper">
						<div class="pay-capability">
							<a href="#connect">
								<?php _e(
									"<div class=\"capability\">Connect</div>
									<div class=\"desc\">to more suppliers on the Tradeshift network, faster &raquo;</div>",
									'Tradeshift'
								); ?>
							</a>
						</div>
						<div class="pay-capability">
							<a href="#digitize">
								<?php _e(
									"<div class=\"capability\">Digitize</div>
									<div class=\"desc\">accounts payable with global compliance &raquo;</div>",
									'Tradeshift'
								); ?>
							</a>
						</div>
						<div class="pay-capability">
							<a href="#manage">
								<?php _e(
									"<div class=\"capability\">Manage</div>
									<div class=\"desc\">payments, working capital, and any bank with one wallet &raquo;</div>",
									'Tradeshift'
								); ?>
							</a>
						</div>
						<div class="pay-capability">
							<a href="#customize">
								<?php _e(
									"<div class=\"capability\">Customize</div>
									<div class=\"desc\">your solution as easily as your phone &mdash;with apps &raquo;</div>",
									'Tradeshift'
								); ?>
							</a>
						</div>
					</div>
				</div>
				<div class="ts-pay-capabilities visible-xs">
					<h2><?php _e("See how Tradeshift helps accounts payable, finance, and treasury pros:", 'Tradeshift'); ?></h2>
					<div class="ts-pay-wrapper">
						<div class="pay-capability">
							<div class="capability-desc">
								<?php _e('<span>Connect</span> <a href="#connect">to more suppliers on your network, faster &raquo;</a>', 'Tradeshift'); ?>
							</div>
						</div>
						<div class="pay-capability">
							<div class="capability-desc">
								<?php _e('<span>Digitize</span> <a href="#digitize">accounts payable with global compliance &raquo;</a>', 'Tradeshift'); ?>
							</div>
						</div>
						<div class="pay-capability">
							<div class="capability-desc">
								<?php _e('<span>Manage</span> <a href="#manage">payments, working capital, and any bank with one wallet &raquo;</a>', 'Tradeshift'); ?>
							</div>
						</div>
						<div class="pay-capability">
							<div class="capability-desc">
								<?php _e('<span>Customize</span> <a href="#customize">your solution as easily as your phone &mdash;with apps &raquo;</a>', 'Tradeshift'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="connect" class="pdf-invoices">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2><?php _e("Are your suppliers still sending you PDF or paper invoices?", 'Tradeshift'); ?></h2>
					<p class="lead"><?php _e("Tradeshift offers the industry’s best onboarding to digital, guaranteed", 'Tradeshift'); ?></p>
					<p><?php _e("Supplier onboarding is so critical to your e-invoicing success, we guarantee it with a Service Level Agreement. With a dedicated onboarding team, easy invoicing interface, and a robust <a href=\"/seller-experience/\" target=\"_blank\">Seller Experience Program</a>, Tradeshift gives buyers and sellers a quick return on their investment.", 'Tradeshift'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div id="digitize" class="testimonials-gold">
		<div class="container">
			<div class="row">
				<div class="contents">
					<img id="heroVideoTS_pay" src="<?php echo get_template_directory_uri(); ?>/img/solutions/pay/dhl-video-2.jpg" onclick="fn_vidyard_KXqGLcOokS0$8Cx9k2_McA();" />
					<p><?php _e("See how we helped DHL improve their payables process.", 'Tradeshift'); ?></p>
					<script type='text/javascript' id='vidyard_embed_code_KXqGLcOokS0-8Cx9k2_McA' src='//play.vidyard.com/KXqGLcOokS0-8Cx9k2_McA.js?v=3.1.1&type=lightbox'></script>
				</div>
			</div>
		</div>
	</div>
	<div class="invoice-engine">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2><?php _e("What’s stopping you from achieving 100% AP automation?", 'Tradeshift'); ?></h2>
					<p class="lead"><?php _e("Make digital the default for every process, every document, all over the world.", 'Tradeshift'); ?></p>
					<p class="intro"><?php _e('Eliminate manual tasks with Tradeshift Pay. You can do business anywhere with country-legal compliance wherever you operate. Customize work queues and rules, and collaborate with colleagues and suppliers right on the spot. Sail through approvals with multi-way matching for multiple purchasing document types. Befriend tail spend with <a href="/go/" target="_blank">mobile buying and paying</a>. And get things done.', 'Tradeshift'); ?></p>
					<button type="button" class="btn btn-primary-cta" id="getStartedTS_pay" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal"><?php _e("Talk to an expert", 'Tradeshift'); ?></button>
					<?php if (is_mobile()): ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/pay/invoice-engine-xs.gif" />
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/pay/invoice-engine-sm.gif" />
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div id="manage" class="insights">
		<div class="container">
			<div class="row">
				<div class="contents">
					<?php if (is_mobile()): ?>
						<h2 class="visible-xs"><?php _e("Who said you can’t keep your cash and pay your suppliers too?", 'Tradeshift'); ?></h2>
						<p class="intro visible-xs"><?php _e("Pay smart with integrated dynamic discounting and supply chain financing.", 'Tradeshift'); ?></p>
						<p class="visible-xs"><?php _e("Manage your working capital on your terms, while paying suppliers on theirs. Tradeshift<sup>&reg;</sup> Pay gives you access to a comprehensive “wallet” of early payment solutions including supply chain finance, <a href=\"/supply-chain-finance\" target=\"_blank\">blockchain-based finance</a>, dynamic discounting, flexible finance and virtual credit cards. It works with any bank, unifies all your payment programs into one view, and gives you total command and control over your cash.", 'Tradeshift'); ?></p>
						<button type="button" class="btn btn-primary-cta" id="getStartedTS_pay" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal"><?php _e("See how", 'Tradeshift'); ?></button>
					<?php else: ?>
						<div class="product-screenshot hidden-xs">
							<img class="laptop pull-right" src="<?php echo get_template_directory_uri(); ?>/img/solutions/pay/insights-laptop-min.png" />
						</div>
						<div class="text-intro">
							<h2><?php _e("Who said you can’t keep your cash and pay your suppliers too?", 'Tradeshift'); ?></h2>
							<p class="intro"><?php _e("Pay smart with integrated dynamic discounting and supply chain financing.", 'Tradeshift'); ?></p>
							<p><?php _e("Manage your working capital on your terms, while paying suppliers on theirs. Tradeshift<sup>&reg;</sup> Pay gives you access to a comprehensive “wallet” of early payment solutions including supply chain finance, <a href=\"/frontiers/cash\" target=\"_blank\">blockchain-based finance</a>, dynamic discounting, flexible finance and virtual credit cards. It works with any bank, unifies all your payment programs into one view, and gives you total command and control over your cash.", 'Tradeshift'); ?></p>
							<a href="/supplychainfinance-enterprise" class="btn btn-primary-cta" target="_blank"><?php _e("See how", 'Tradeshift'); ?></a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div id="customize" class="app-store">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2><?php _e("Have you ever customized your phone with your favorite apps?", 'Tradeshift'); ?></h2>
					<p class="intro"><?php _e("It’s that easy to customize Tradeshift<sup>&reg;</sup> Pay", 'Tradeshift'); ?></p>
					<p><?php _e("Digitizing your supply chain is easier with apps. With the Tradeshift App platform, you can extend the power of Tradeshift Pay. Build your own apps, integrate with legacy systems, or choose from hundreds of app partners within sourcing, analytics and more. Connect your supply chain to a future of possibility and do more with Tradeshift apps.", 'Tradeshift'); ?></p>
				</div>
				<div class="apps easytrade hidden-xs">
					<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-easytrade.png" alt="Easytrade" /><?php _e("Easytrade", 'Tradeshift'); ?>
				</div>
				<div class="apps amazon">
					<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-amazon.png" alt="Amazon Store" /><?php _e("Amazon Store Integration", 'Tradeshift'); ?>
				</div>
				<div class="apps paypal">
					<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-paypal.png" alt="PayPal Payments" /><?php _e("PayPal Payments", 'Tradeshift'); ?>
				</div>
				<div class="apps mailedi">
					<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-edi.png" alt="MailEDI Connect" /><?php _e("MailEDI Connect", 'Tradeshift'); ?>
				</div>
				<div class="apps economic">
					<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-economic.png" alt="E-conomic" /><?php _e("E-conomic Integration", 'Tradeshift'); ?>
				</div>
				<div class="apps exact">
					<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-exact.png" alt="Exact Software" /><?php _e("Exact Software Integration", 'Tradeshift'); ?>
				</div>
				<div class="apps intuit hidden-xs">
					<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-intuit.png" alt="Intuit Payments" /><?php _e("Intuit Payments", 'Tradeshift'); ?>
				</div>
				<div class="apps peppol">
					<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-peppol.png" alt="Peppol Access" /><?php _e("Peppol Access", 'Tradeshift'); ?>
				</div>
				<div class="apps recurring">
					<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-rec-invoice.png" alt="Recurring Invoices" /><?php _e("Recurring Invoices", 'Tradeshift'); ?>
				</div>
				<div class="apps yayoi">
					<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-yayoi.png" alt="Yayoi Accounting" /><?php _e("弥生会計データ連携", 'Tradeshift'); ?>
				</div>
				<div class="apps doc-uploader hidden-xs">
					<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-doc-uploader.png" alt="Document Uploader" />
					<?php _e(" Documents Uploader", 'Tradeshift'); ?>
				</div>
				<div class="apps digisign hidden-xs">
					<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-digisign.png" alt="Digital Signing" />
					<?php _e(" Digital Signing", 'Tradeshift'); ?>
				</div>
				<div class="apps sage50">
					<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-sage.png" alt="Connector for Sage 50" />
					<?php _e("Connector for Sage 50", 'Tradeshift'); ?>
				</div>
				<div class="apps cleverit hidden-xs">
					<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-clever.png" alt="CleverIT C5" />
					<?php _e(" CleverIT C5", 'Tradeshift'); ?>
				</div>
				<div class="apps citi">
					<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/apps/icon-citi.png" alt="Supply Chain Finance by Citi" />
					<?php _e(" Supply Chain Finance by Citi", 'Tradeshift'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="resources">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2 class="hidden-xs"><?php _e("Resources for you", 'Tradeshift'); ?></h2>
					<h2 class="visible-xs"><?php _e("Find out more about our procurement solutions.", 'Tradeshift'); ?></h2>
					<div class="resource-wrapper">
						<a class="trigger-res-1" href="/resources/on-demand-webinar-the-5-most-expensive-mistakes-ap-can-make-and-how-to-avoid-them/" target="_blank">
							<img class="img-responsive" src="/wp-content/uploads/2018/08/Expensive-AP-Mistake_resource.jpg..jpg" />
						</a>
						<p>
							<?php _e("[On-Demand Webinar] The 5 Most Expensive Mistakes AP Can Make – And How To Avoid Them", 'Tradeshift'); ?>
							<br class="visible-sm" />
							<a class="trigger-res-1" href="/resources/on-demand-webinar-the-5-most-expensive-mistakes-ap-can-make-and-how-to-avoid-them/" target="_blank">
								<?php _e('Learn more &raquo;', 'Tradeshift'); ?>
							</a>
						</p>
					</div>
					<div class="resource-wrapper">
						<a class="trigger-res-2" href="/resources/outsmarting-automation-a-guide-for-accounts-payable/" target="_blank">
							<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/solutions/pay/resource-automation.jpg" />
						</a>
						<p>
							<?php _e('Outsmarting Automation: A Guide for Accounts Payable', 'Tradeshift'); ?>
							<br class="visible-sm" />
							<a class="trigger-res-2" href="/resources/outsmarting-automation-a-guide-for-accounts-payable/" target="_blank">
								<?php _e('Read more &raquo;', 'Tradeshift'); ?>
							</a>
						</p>
					</div>
					<div class="resource-wrapper">
						<a class="trigger-res-3" href="/resources/outsmarting-automation-a-guide-for-accounts-payable/" target="_blank">
							<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/solutions/pay/resource-flibook.jpg" />
						</a>
						<p>
							<?php _e('[Flipbook] Pro Tips For Accounts Payable: 6 Complaints Suppliers Make About E-invoicing', 'Tradeshift'); ?>
							<br class="hidden-xs"/>
							<a class="trigger-res-3" href="/resources/outsmarting-automation-a-guide-for-accounts-payable/" target="_blank">
								<?php _e('Read more &raquo;', 'Tradeshift'); ?>
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="component contact-us-form gradient-orange">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h4 class="hidden-xs">
						<?php _e("See how Tradeshift<sup>&reg;</sup> Pay can help your enterprise discover payments 2.0.", 'Tradeshift'); ?>
					</h4>
					<button id="heroMainCtaTS_pay" class="btn btn-cta btn-primary-cta" data-toggle="modal" data-target="#mktoModal">
						<?php _e("Schedule now", 'Tradeshift'); ?>
					</button>
				</div>
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
				<h3 id="myModalLabel"><?php _e("Request a Demo", 'Tradeshift'); ?></h3>
				<p class="lead"><?php _e("Start your journey with a free demo today.", 'Tradeshift'); ?></p>
			</div>
			<div class="modal-body">
				<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
				<form id="mktoForm_1138"></form>
				<script type="text/javascript">// <![CDATA[
					MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1138, function(form){
						form.vals({"Marketing_Resource_Name__c":"Solutions - Tradeshift Pay"});
					});
					// ]]></script>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('.hero a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>

<?php get_footer(); ?>
